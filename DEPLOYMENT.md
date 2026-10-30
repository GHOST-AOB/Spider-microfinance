# Spider Microfinance – Docker & Deployment Guide

This guide details the containerization architecture, local runtime instructions, and production deployment workflows for the **Spider Microfinance** marketing website.

---

## 1. Containerization Architecture

The website is containerized using an official, hardened **PHP 8.2 Apache** base image (`php:8.2-apache-bookworm`):

| Component | Specification | Purpose |
| :--- | :--- | :--- |
| **Base OS** | Debian 12 (Bookworm) | Minimal, stable, long-term supported Linux base |
| **Web Server** | Apache 2.4 | Production web server with `mod_rewrite`, `mod_headers`, `mod_deflate`, `mod_expires` |
| **PHP Runtime** | PHP 8.2 | Modern, secure PHP runtime with Zend OPcache enabled |
| **Security** | Non-root `www-data` | Strict file permissions (`755` dirs, `644` files), `expose_php = Off`, secure session cookies |
| **Caching & Gzip** | Static Cache + Deflate | 1-month asset caching for images, 1-week for CSS/JS, Gzip compression for text/SVG |
| **Health Check** | `curl -f http://localhost/` | Automated container health monitoring every 30 seconds |

---

## 2. File Overview

- **[`Dockerfile`](file:///home/nira/Desktop/Spider/Dockerfile)**: Multi-stage instructions for building the production container image.
- **[`docker-compose.yml`](file:///home/nira/Desktop/Spider/docker-compose.yml)**: Standard production container runner mapping port `8080:80`.
- **[`docker-compose.dev.yml`](file:///home/nira/Desktop/Spider/docker-compose.dev.yml)**: Development configuration with live volume mounting (`./:/var/www/html`).
- **[`.dockerignore`](file:///home/nira/Desktop/Spider/.dockerignore)**: Prevents repository metadata, raw documentation, and temporary files from bloating the image.
- **[`docker/php.ini`](file:///home/nira/Desktop/Spider/docker/php.ini)**: Production PHP settings (OPcache, memory limits, error logging).
- **[`docker/apache.conf`](file:///home/nira/Desktop/Spider/docker/apache.conf)**: Virtual host configuration with security headers and caching rules.
- **[`.htaccess`](file:///home/nira/Desktop/Spider/.htaccess)**: Fallback Apache rules for direct deployments (shared hosting, cPanel, or standard LAMP).

---

## 3. Local Development & Testing

### Prerequisites
- Install **Docker Engine** (version 24.0+) and **Docker Compose** (version 2.20+):
  - Ubuntu/Debian: `sudo apt-get install docker-ce docker-compose-plugin`
  - macOS / Windows: [Docker Desktop](https://www.docker.com/products/docker-desktop/)

### Mode A: Production Container Build (Recommended for Testing)
Builds the standalone image with all code baked in:

```bash
# 1. Build and start the container in the background
docker compose up -d --build

# 2. View running containers and health status
docker compose ps

# 3. Stream real-time access and error logs
docker compose logs -f

# 4. Stop the container
docker compose down
```

Visit the website at: **[http://localhost:8080](http://localhost:8080)**

---

### Mode B: Live Development Mode (Real-Time Code Changes)
Mounts your local workspace into the container so file edits immediately reflect in the browser without rebuilding:

```bash
docker compose -f docker-compose.dev.yml up
```

Press `Ctrl + C` to stop.

---

## 4. Production Deployment to Cloud Server (VPS)

Applicable to any cloud Linux VM (DigitalOcean Droplet, AWS EC2, Linode, Hetzner, Vultr, Ubuntu 22.04/24.04 LTS).

### Step 1: Install Docker on the Server

```bash
# Update package index and install prerequisites
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg lsb-release

# Add Docker’s official GPG key
sudo install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
sudo chmod a+r /etc/apt/keyrings/docker.gpg

# Add Docker repository
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

# Install Docker Engine & Compose
sudo apt-get update
sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-compose-plugin

# Enable Docker on boot
sudo systemctl enable docker
sudo systemctl start docker
```

---

### Step 2: Deploy Site Code

```bash
# Create application directory
sudo mkdir -p /var/www/spider-microfinance
cd /var/www/spider-microfinance

# Clone or copy repository files
git clone <your-repository-url> .

# Launch the production container
sudo docker compose up -d --build
```

---

### Step 3: Configure Free Automated SSL (HTTPS) with Reverse Proxy

For production security and SEO, place the Docker container behind an automated reverse proxy that handles SSL certificates via Let's Encrypt.

#### Option A: Caddy (Recommended – Automatic SSL with 4 lines)
Install Caddy:
```bash
sudo apt-get install -y debian-keyring debian-archive-keyring apt-transport-https
curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/gpg.key' | sudo gpg --dearmor -o /usr/share/keyrings/caddy-stable-archive-keyring.gpg
curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/debian.deb.txt' | sudo tee /etc/apt/sources.list.d/caddy-stable.list
sudo apt-get update
sudo apt-get install -y caddy
```

Edit `/etc/caddy/Caddyfile`:
```caddy
spidermicrofinance.ug, www.spidermicrofinance.ug {
    reverse_proxy localhost:8080
}
```

Restart Caddy:
```bash
sudo systemctl restart caddy
```
*Caddy automatically issues, binds, and auto-renews Let's Encrypt certificates.*

---

#### Option B: Nginx + Certbot
If using Nginx:

1. Install Nginx and Certbot:
   ```bash
   sudo apt-get install -y nginx certbot python3-certbot-nginx
   ```

2. Create `/etc/nginx/sites-available/spidermicrofinance.conf`:
   ```nginx
   server {
       server_name spidermicrofinance.ug www.spidermicrofinance.ug;

       location / {
           proxy_pass http://127.0.0.1:8080;
           proxy_set_header Host $host;
           proxy_set_header X-Real-IP $remote_addr;
           proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
           proxy_set_header X-Forwarded-Proto $scheme;
       }
   }
   ```

3. Enable configuration and issue certificate:
   ```bash
   sudo ln -s /etc/nginx/sites-available/spidermicrofinance.conf /etc/nginx/sites-enabled/
   sudo nginx -t
   sudo systemctl reload nginx
   sudo certbot --nginx -d spidermicrofinance.ug -d www.spidermicrofinance.ug
   ```

---

## 5. Automated CI/CD (GitHub Actions Example)

To automate deployments when updates are pushed to `main`, create `.github/workflows/deploy.yml`:

```yaml
name: Deploy Spider Microfinance

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Deploy to Remote Server via SSH
        uses: appleboy/ssh-action@v1.0.0
        with:
          host: ${{ secrets.SERVER_HOST }}
          username: ${{ secrets.SERVER_USER }}
          key: ${{ secrets.SERVER_SSH_KEY }}
          script: |
            cd /var/www/spider-microfinance
            git pull origin main
            docker compose down
            docker compose up -d --build
```

---

## 6. Maintenance & Operational Commands

| Action | Command |
| :--- | :--- |
| **Check Container Status** | `docker compose ps` |
| **View Live Logs** | `docker compose logs -f spider-web` |
| **Restart Web Container** | `docker compose restart spider-web` |
| **Update to Latest Code** | `git pull && docker compose up -d --build` |
| **Run PHP Diagnostics** | `docker exec -it spider_microfinance_web php -v` |
| **Inspect Running Modules** | `docker exec -it spider_microfinance_web apache2ctl -M` |
| **Remove Unused Images** | `docker image prune -f` |
