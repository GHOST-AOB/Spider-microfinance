# ============================================================
# Dockerfile – Spider Microfinance Marketing Website
# Base: Official PHP 8.2 with Apache on Debian Bookworm
# ============================================================
FROM php:8.2-apache-bookworm

# Maintainer Metadata
LABEL maintainer="Spider Microfinance Limited <info@spidermicrofinance.example>"
LABEL description="Containerized runtime environment for Spider Microfinance marketing website"

# Enable required Apache modules
RUN a2enmod rewrite headers expires deflate

# Install system dependencies and PHP extensions (GD, OPcache, Zip)
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy production PHP configuration
COPY docker/php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy Apache virtual host configuration
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Set application working directory
WORKDIR /var/www/html

# Copy application source code
COPY . /var/www/html/

# Clean build artifacts and enforce secure file ownership and permissions
RUN rm -rf /var/www/html/docker \
    && chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

# Expose standard HTTP port
EXPOSE 80

# Health check to ensure web server is responding
HEALTHCHECK --interval=30s --timeout=5s --start-period=5s --retries=3 \
    CMD curl -f http://localhost/ || exit 1

# Start Apache in the foreground
CMD ["apache2-foreground"]
