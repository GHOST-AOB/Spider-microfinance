<?php
// ============================================================
// config/services.php
// Single source of truth for all SpiderWebUG service data.
// Used by index.php AND individual service pages.
// ============================================================

$services = [

    // ----------------------------------------------------------
    // 1. WEBSITE DEVELOPMENT
    // ----------------------------------------------------------
    [
        'slug'             => 'website-development',
        'url'              => 'services/website-development.php',
        'icon'             => 'fa-globe',
        'title'            => 'Website Development',
        'page_title'       => 'Website Development – SpiderWebUG',
        'page_description' => 'Custom, responsive websites built with modern frameworks. SpiderWebUG crafts stunning web experiences that convert visitors into customers across Uganda and beyond.',
        'page_keywords'    => 'website development Uganda, responsive websites Kampala, custom web design, CMS development, e-commerce Uganda',
        'hero_subtitle'    => 'Professional, responsive websites that convert visitors into loyal customers',
        'description'      => 'Custom, responsive websites built with modern frameworks. From corporate sites to e-commerce platforms, we create stunning web experiences that convert visitors into customers.',
        'items'            => ['Responsive Design', 'SEO Optimization', 'CMS Integration', 'E-commerce Solutions'],
        'featured'         => false,
        'benefits'         => [
            ['icon' => 'fa-mobile-alt',        'title' => 'Mobile-First Design',     'desc' => 'Pixel-perfect layouts on every device — from the smallest phone to the widest desktop.'],
            ['icon' => 'fa-tachometer-alt',    'title' => 'Lightning Fast',          'desc' => 'Optimised for 90+ PageSpeed scores with lazy loading, minification, and CDN delivery.'],
            ['icon' => 'fa-search',            'title' => 'SEO Built-In',            'desc' => 'On-page SEO baked in from day one — clean HTML, structured data, and optimal meta tags.'],
            ['icon' => 'fa-lock',              'title' => 'Secure by Default',       'desc' => 'SSL certificates, hardened server configs, and regular vulnerability audits included.'],
            ['icon' => 'fa-plug',              'title' => 'CMS Powered',             'desc' => 'Manage your own content independently with an intuitive dashboard — no developer needed.'],
            ['icon' => 'fa-chart-line',        'title' => 'Conversion Focused',      'desc' => 'Layouts and CTAs engineered to turn visitors into enquiries and sales.'],
        ],
        'deliverables'     => [
            [
                'title' => 'Core Website Features',
                'items' => ['Responsive multi-page layout', 'Contact & enquiry forms', 'Google Maps integration', 'Social media integration', 'Image gallery & sliders', 'Cookie consent & GDPR compliance'],
            ],
            [
                'title' => 'E-commerce Capabilities',
                'items' => ['Product catalogue & management', 'Secure online checkout', 'Payment gateway integration', 'Order management system', 'Customer account portal', 'Inventory tracking'],
            ],
        ],
        'page_process'     => [
            ['icon' => 'fa-search',        'title' => 'Requirements Gathering', 'desc' => 'We dive deep into your business, target audience, and goals to define the perfect brief.'],
            ['icon' => 'fa-pencil-ruler',  'title' => 'Wireframe & Design',     'desc' => 'Crafting pixel-perfect mockups and prototypes ready for your approval before a single line of code.'],
            ['icon' => 'fa-code',          'title' => 'Development & Testing',  'desc' => 'Building your site with clean code and rigorous cross-browser, cross-device testing.'],
            ['icon' => 'fa-rocket',        'title' => 'Launch & Handover',      'desc' => 'Deploying live, training your team, and handing over full ownership of your new website.'],
        ],
        'pricing'          => [
            ['name' => 'Starter',      'price' => '499',    'period' => 'one-time', 'desc' => 'Perfect for new businesses and personal brands.', 'features' => ['Up to 5 pages', 'Responsive design', 'Contact form', 'Basic SEO setup', '1 revision round', '14-day support'], 'featured' => false, 'cta' => 'Get Started'],
            ['name' => 'Professional', 'price' => '999',    'period' => 'one-time', 'desc' => 'Ideal for growing businesses that need more.',    'features' => ['Up to 15 pages', 'CMS integration', 'E-commerce ready', 'Advanced SEO', '3 revision rounds', '3 months support'], 'featured' => true,  'cta' => 'Most Popular'],
            ['name' => 'Enterprise',   'price' => 'Custom', 'period' => '',         'desc' => 'Tailored solutions for large organisations.',      'features' => ['Unlimited pages', 'Custom functionality', 'Dedicated PM', 'Performance SLA', 'Unlimited revisions', 'Ongoing support'], 'featured' => false, 'cta' => 'Contact Us'],
        ],
        'faq'              => [
            ['q' => 'How long does it take to build a website?',    'a' => 'Starter sites typically take 2–4 weeks; Professional sites 4–8 weeks. Enterprise timelines are scoped during discovery.'],
            ['q' => 'Will I own my website after it\'s built?',     'a' => 'Absolutely. Full ownership — code, domain, and hosting credentials — is transferred to you upon final payment.'],
            ['q' => 'Can I update the content myself after launch?', 'a' => 'Yes. We integrate a CMS (WordPress, or a custom admin panel) so you can manage content independently without any technical knowledge.'],
            ['q' => 'Do you provide web hosting?',                  'a' => 'Yes — see our Hosting & Maintenance service for managed, fully monitored hosting plans starting at $29/month.'],
            ['q' => 'What if I need changes after launch?',         'a' => 'All plans include a post-launch support window. After that, flexible maintenance packages are available to keep your site current.'],
        ],
        'related'          => ['web-applications', 'visual-design', 'hosting-maintenance'],
    ],

    // ----------------------------------------------------------
    // 2. WEB APPLICATIONS
    // ----------------------------------------------------------
    [
        'slug'             => 'web-applications',
        'url'              => 'services/web-applications.php',
        'icon'             => 'fa-laptop-code',
        'title'            => 'Web Applications',
        'page_title'       => 'Web Application Development – SpiderWebUG',
        'page_description' => 'Powerful, scalable web applications tailored to your business processes. SpiderWebUG builds custom systems that streamline operations and enhance productivity.',
        'page_keywords'    => 'web application development Uganda, custom software Kampala, SaaS development, API integration, business software Uganda',
        'hero_subtitle'    => 'Scalable, data-driven applications built precisely for your business logic',
        'description'      => 'Powerful, scalable web applications tailored to your business processes. We build custom solutions that streamline operations and enhance productivity.',
        'items'            => ['Custom Development', 'API Integration', 'Database Design', 'Cloud Deployment'],
        'featured'         => true,
        'benefits'         => [
            ['icon' => 'fa-cubes',        'title' => 'Modular Architecture',  'desc' => 'Built to scale component by component as your business grows — no painful rewrites.'],
            ['icon' => 'fa-shield-alt',   'title' => 'Enterprise Security',   'desc' => 'Role-based access control, encrypted data at rest and in transit, comprehensive audit logs.'],
            ['icon' => 'fa-sync-alt',     'title' => 'Real-time Updates',     'desc' => 'Live data refresh without page reloads via WebSockets and AJAX for snappy user experiences.'],
            ['icon' => 'fa-database',     'title' => 'Optimised Database',    'desc' => 'Carefully indexed queries, connection pooling, and query caching that stay fast at enterprise scale.'],
            ['icon' => 'fa-cloud',        'title' => 'Cloud Ready',           'desc' => 'Deployable on AWS, DigitalOcean, Google Cloud, or your own on-premise infrastructure.'],
            ['icon' => 'fa-plug',         'title' => 'API Integrations',      'desc' => 'Seamlessly connect payments, CRMs, ERPs, and third-party services through robust REST APIs.'],
        ],
        'deliverables'     => [
            [
                'title' => 'Application Core',
                'items' => ['Custom dashboard & reporting', 'User authentication & roles', 'Email, SMS & push notifications', 'File upload & management', 'Audit trail & activity logs', 'Export to PDF & Excel'],
            ],
            [
                'title' => 'Integration & DevOps',
                'items' => ['REST API development', 'Third-party API connections', 'CI/CD pipeline setup', 'Automated testing suite', 'Database backups & monitoring', 'Performance profiling & APM'],
            ],
        ],
        'page_process'     => [
            ['icon' => 'fa-lightbulb',    'title' => 'Discovery & Scoping',   'desc' => 'Mapping every user journey, data flow, and integration requirement into a detailed technical spec.'],
            ['icon' => 'fa-sitemap',      'title' => 'Architecture Design',   'desc' => 'Designing the database schema, API contracts, and system architecture before any code is written.'],
            ['icon' => 'fa-code',         'title' => 'Agile Development',     'desc' => 'Building in focused sprints with a demo at the end of each sprint for your continuous feedback.'],
            ['icon' => 'fa-rocket',       'title' => 'QA, Launch & SLA',      'desc' => 'Rigorous automated and manual testing, production deployment, and ongoing performance SLA.'],
        ],
        'pricing'          => [
            ['name' => 'Starter App',    'price' => '1,499', 'period' => 'one-time', 'desc' => 'Simple CRUD app with authentication.',          'features' => ['Up to 5 modules', 'User authentication', 'Basic dashboard', 'REST API', 'Database design', '30-day support'],          'featured' => false, 'cta' => 'Get Started'],
            ['name' => 'Professional',   'price' => '3,999', 'period' => 'one-time', 'desc' => 'Complex workflows with multiple integrations.', 'features' => ['Unlimited modules', 'Role-based access', 'Real-time features', '5 API integrations', 'CI/CD pipeline', '6 months support'], 'featured' => true,  'cta' => 'Most Popular'],
            ['name' => 'Enterprise',     'price' => 'Custom', 'period' => '',        'desc' => 'Full custom system with dedicated infrastructure.','features' => ['Microservices arch.', 'Dedicated infrastructure', 'SLA guarantee', 'Unlimited integrations', 'On-site training', 'Ongoing retainer'],  'featured' => false, 'cta' => 'Contact Us'],
        ],
        'faq'              => [
            ['q' => 'How is a web application different from a website?',   'a' => 'Websites deliver information. Web applications are interactive tools — they process data, authenticate users, and execute business logic specific to your organisation.'],
            ['q' => 'What technology stack do you use?',                    'a' => 'We select the best tool for each project — commonly PHP/Laravel, Node.js, React, or Python/Django — always aligned with your team\'s ability to maintain it long-term.'],
            ['q' => 'Can you integrate with our existing systems?',         'a' => 'Yes. We have extensive experience integrating with popular CRMs, ERPs, payment gateways, and legacy systems via REST APIs and database connections.'],
            ['q' => 'Do you offer ongoing maintenance after launch?',       'a' => 'Absolutely. We offer monthly retainers for feature additions, security patches, and performance monitoring so your application evolves with your business.'],
            ['q' => 'How do you handle data security and privacy?',         'a' => 'All applications are built with security-first principles: HTTPS, input validation, parameterised queries, encrypted storage, and role-based access control as standard.'],
        ],
        'related'          => ['automation-solutions', 'website-development', 'hosting-maintenance'],
    ],

    // ----------------------------------------------------------
    // 3. AUTOMATION SOLUTIONS
    // ----------------------------------------------------------
    [
        'slug'             => 'automation-solutions',
        'url'              => 'services/automation-solutions.php',
        'icon'             => 'fa-cogs',
        'title'            => 'Automation Solutions',
        'page_title'       => 'Business Automation Solutions – SpiderWebUG',
        'page_description' => 'Intelligent automation systems that eliminate repetitive tasks and slash operational costs. SpiderWebUG builds workflows, bots, and integrations that run 24/7.',
        'page_keywords'    => 'automation solutions Uganda, business process automation, workflow automation Kampala, RPA Uganda, data integration automation',
        'hero_subtitle'    => 'Eliminate repetitive tasks and free your team to focus on what actually matters',
        'description'      => 'Intelligent automation systems that reduce manual work and increase efficiency. From workflow automation to AI-powered tools, we optimise your operations.',
        'items'            => ['Process Automation', 'Data Integration', 'Custom Scripting', 'System Integration'],
        'featured'         => false,
        'benefits'         => [
            ['icon' => 'fa-robot',         'title' => 'AI-Powered Logic',      'desc' => 'Leverage machine learning and rules engines to make smarter, context-aware decisions automatically.'],
            ['icon' => 'fa-clock',         'title' => '24/7 Operation',        'desc' => 'Your automations run around the clock — no breaks, no sick days, no human error.'],
            ['icon' => 'fa-dollar-sign',   'title' => 'Cost Reduction',        'desc' => 'Cut operational costs on repetitive processes by up to 70%, freeing budget for growth.'],
            ['icon' => 'fa-chart-line',    'title' => 'Scalable Throughput',   'desc' => 'Handle 10× the volume without 10× the headcount — automation scales instantly with demand.'],
            ['icon' => 'fa-bug',           'title' => 'Error Elimination',     'desc' => 'Remove human error completely from repetitive data-handling, reporting, and communication tasks.'],
            ['icon' => 'fa-plug',          'title' => 'System Agnostic',       'desc' => 'Integrates with your existing stack: CRMs, ERPs, spreadsheets, email platforms, and custom databases.'],
        ],
        'deliverables'     => [
            [
                'title' => 'Workflow Automation',
                'items' => ['Lead capture & CRM entry', 'Automated email & SMS sequences', 'Invoice & payment reminders', 'Data sync between platforms', 'Scheduled reporting & exports', 'Approval workflow automation'],
            ],
            [
                'title' => 'Data & System Integration',
                'items' => ['ETL pipelines & data warehousing', 'API-to-API connections', 'Web scraping & data extraction', 'Spreadsheet automation (Google / Excel)', 'Database synchronisation', 'Real-time webhook processing'],
            ],
        ],
        'page_process'     => [
            ['icon' => 'fa-search',       'title' => 'Process Audit',        'desc' => 'We map all your current workflows to identify the highest-value automation opportunities.'],
            ['icon' => 'fa-lightbulb',    'title' => 'Solution Design',      'desc' => 'Designing the ideal automation architecture with clear ROI projections before we build.'],
            ['icon' => 'fa-code',         'title' => 'Build & Test',         'desc' => 'Building your automations with thorough edge-case testing and parallel-run validation.'],
            ['icon' => 'fa-rocket',       'title' => 'Deploy & Monitor',     'desc' => 'Going live with real-time monitoring dashboards and alerts so you always know what\'s running.'],
        ],
        'pricing'          => [
            ['name' => 'Starter',      'price' => '799',    'period' => 'one-time', 'desc' => 'One focused automation workflow.',              'features' => ['Single workflow', '1 platform integration', 'Error alerting', 'Full documentation', 'Video walkthrough', '30-day support'],            'featured' => false, 'cta' => 'Get Started'],
            ['name' => 'Professional', 'price' => '1,999',  'period' => 'one-time', 'desc' => 'Multi-step workflows with deep integrations.',  'features' => ['Up to 5 workflows', '5 integrations', 'Monitoring dashboard', 'Scheduled reports', 'Priority support', '6 months support'],         'featured' => true,  'cta' => 'Most Popular'],
            ['name' => 'Enterprise',   'price' => 'Custom', 'period' => '',         'desc' => 'Full-scale business automation suite.',          'features' => ['Unlimited workflows', 'Unlimited integrations', 'Dedicated engineer', 'SLA guarantee', 'Quarterly reviews', 'Ongoing retainer'], 'featured' => false, 'cta' => 'Contact Us'],
        ],
        'faq'              => [
            ['q' => 'What kinds of tasks can be automated?',            'a' => 'Any repetitive, rule-based task: data entry, report generation, invoice sending, lead routing, social media posting, email sequences, file management, and much more.'],
            ['q' => 'Do I need to change my existing software?',        'a' => 'Usually no. We build integrations that connect your existing tools — no need to replace systems you already rely on.'],
            ['q' => 'How long before I see ROI?',                       'a' => 'Most clients see positive ROI within the first month of go-live. We provide an ROI projection as part of the design phase.'],
            ['q' => 'What happens if the automation breaks or fails?',  'a' => 'All automations include error alerting. On Professional and Enterprise plans, our team monitors and responds to failures proactively.'],
            ['q' => 'Can automations be updated as my processes change?','a' => 'Yes. Automation is never truly "done" — we offer retainer plans to iterate, optimise, and expand your automations as your business evolves.'],
        ],
        'related'          => ['web-applications', 'website-development', 'hosting-maintenance'],
    ],

    // ----------------------------------------------------------
    // 4. VISUAL DESIGN
    // ----------------------------------------------------------
    [
        'slug'             => 'visual-design',
        'url'              => 'services/visual-design.php',
        'icon'             => 'fa-palette',
        'title'            => 'Visual Design',
        'page_title'       => 'Visual & Brand Design Services – SpiderWebUG',
        'page_description' => 'Stunning visual design and brand identity services from SpiderWebUG. UI/UX, logo design, motion graphics, and complete brand systems that set you apart.',
        'page_keywords'    => 'visual design Uganda, UI UX design Kampala, brand identity Uganda, logo design, graphic design Uganda',
        'hero_subtitle'    => 'Design that communicates your brand with clarity, beauty, and lasting purpose',
        'description'      => 'Stunning visual designs that capture your brand essence. From UI/UX design to complete brand identity, we create memorable visual experiences.',
        'items'            => ['UI/UX Design', 'Brand Identity', 'Graphic Design', 'Motion Graphics'],
        'featured'         => false,
        'benefits'         => [
            ['icon' => 'fa-eye',            'title' => 'Visual Consistency',    'desc' => 'A unified design system applied cohesively across every customer touchpoint, digital and print.'],
            ['icon' => 'fa-paint-brush',    'title' => 'Distinctive Identity',  'desc' => 'A unique brand identity that differentiates you from competitors and builds instant recognition.'],
            ['icon' => 'fa-users',          'title' => 'User-Centred',          'desc' => 'Every design decision is grounded in user research and tested with real people for genuine usability.'],
            ['icon' => 'fa-magic',          'title' => 'Pixel Perfect',         'desc' => 'Every element is refined to the finest detail — spacing, colour, typography, and hierarchy all matter.'],
            ['icon' => 'fa-file-export',    'title' => 'All Formats Delivered', 'desc' => 'You receive your assets in SVG, PNG, PDF, Figma, and any other format your team needs.'],
            ['icon' => 'fa-comments',       'title' => 'Collaborative Process', 'desc' => 'An iterative design process with your feedback captured at every stage — no surprises at delivery.'],
        ],
        'deliverables'     => [
            [
                'title' => 'Brand Identity',
                'items' => ['Logo design (all formats)', 'Colour palette & usage guide', 'Typography system', 'Brand voice & tone guide', 'Business card & stationery', 'Social media profile kit'],
            ],
            [
                'title' => 'UI/UX Design',
                'items' => ['User research & personas', 'Wireframes & user flows', 'High-fidelity Figma mockups', 'Interactive prototype', 'Design system & component library', 'Developer handoff documentation'],
            ],
        ],
        'page_process'     => [
            ['icon' => 'fa-binoculars',   'title' => 'Brand Discovery',      'desc' => 'Deep-dive workshops to understand your values, audience, competitors, and visual aspirations.'],
            ['icon' => 'fa-image',        'title' => 'Concept & Mood Board', 'desc' => 'Presenting initial creative directions through mood boards and concept sketches for your input.'],
            ['icon' => 'fa-pencil-ruler', 'title' => 'Design Iterations',    'desc' => 'Refining the chosen direction through structured revision rounds until every detail is right.'],
            ['icon' => 'fa-box-open',     'title' => 'Final Delivery',       'desc' => 'Handing over a complete, organised asset library with brand guidelines ready for immediate use.'],
        ],
        'pricing'          => [
            ['name' => 'Brand Starter',     'price' => '299',    'period' => 'one-time', 'desc' => 'A strong foundation for new brands.',            'features' => ['Logo (3 concepts)', 'Colour palette', 'Typography guide', 'All file formats', '2 revision rounds', '14-day delivery'],                 'featured' => false, 'cta' => 'Get Started'],
            ['name' => 'Brand Pro',         'price' => '699',    'period' => 'one-time', 'desc' => 'Complete identity for established businesses.',   'features' => ['Full brand identity', 'Social media kit', 'Business stationery', 'Brand style guide', '4 revision rounds', '30-day delivery'],             'featured' => true,  'cta' => 'Most Popular'],
            ['name' => 'UI/UX Design',      'price' => '999',    'period' => 'per project', 'desc' => 'Full product design in Figma.',             'features' => ['User research', 'Wireframes & flows', 'Hi-fi mockups', 'Interactive prototype', 'Design system', 'Dev handoff docs'],                    'featured' => false, 'cta' => 'Get Started'],
        ],
        'faq'              => [
            ['q' => 'How many logo concepts will I receive?',            'a' => 'Starter includes 3 distinct concepts; Brand Pro includes 5. We present each with rationale so you can make an informed choice.'],
            ['q' => 'What file formats will I receive?',                 'a' => 'You receive print-ready PDFs, SVGs, PNGs (transparent), and editable source files (AI/Figma) — every format your team will ever need.'],
            ['q' => 'Do you design for print as well as digital?',       'a' => 'Yes — brand packages include print-ready files at professional print resolution, fully compatible with local and international printers.'],
            ['q' => 'Can you redesign an existing brand?',               'a' => 'Absolutely. We offer brand refresh and evolution projects that modernise your identity while respecting your existing equity.'],
            ['q' => 'How long does the design process take?',            'a' => 'Brand Starter: 2 weeks. Brand Pro: 3–4 weeks. UI/UX design is scoped per project but typically 3–6 weeks depending on complexity.'],
        ],
        'related'          => ['website-development', 'web-applications', 'mobile-first-development'],
    ],

    // ----------------------------------------------------------
    // 5. HOSTING & MAINTENANCE
    // ----------------------------------------------------------
    [
        'slug'             => 'hosting-maintenance',
        'url'              => 'services/hosting-maintenance.php',
        'icon'             => 'fa-server',
        'title'            => 'Hosting & Maintenance',
        'page_title'       => 'Web Hosting & Maintenance Services – SpiderWebUG',
        'page_description' => 'Managed web hosting and maintenance services from SpiderWebUG. 99.9% uptime, daily backups, security monitoring, and priority support — we keep your site running.',
        'page_keywords'    => 'web hosting Uganda, website maintenance Kampala, managed hosting Uganda, website security monitoring, SSL certificate Uganda',
        'hero_subtitle'    => 'Keep your digital assets fast, secure, and online 24/7 — we handle every technical detail',
        'description'      => 'Reliable hosting solutions and ongoing maintenance to keep your digital assets running smoothly. We handle the technical details so you can focus on your business.',
        'items'            => ['Web Hosting', 'Security Updates', 'Performance Monitoring', 'Backup Solutions'],
        'featured'         => false,
        'benefits'         => [
            ['icon' => 'fa-server',       'title' => '99.9% Uptime SLA',     'desc' => 'SLA-backed uptime guarantee with proactive monitoring and instant incident response.'],
            ['icon' => 'fa-shield-alt',   'title' => 'Security Monitoring',   'desc' => 'Real-time threat detection, firewall management, and malware scanning around the clock.'],
            ['icon' => 'fa-undo',         'title' => 'Daily Backups',         'desc' => 'Automated daily backups stored off-site with one-click restore — never lose your data.'],
            ['icon' => 'fa-tachometer-alt','title'=> 'Speed Optimisation',    'desc' => 'CDN delivery, server-level caching, and image optimisation for consistently fast load times.'],
            ['icon' => 'fa-certificate',  'title' => 'SSL Management',        'desc' => 'Free SSL certificates provisioned and auto-renewed by our team before they ever expire.'],
            ['icon' => 'fa-headset',      'title' => 'Priority Support',      'desc' => 'A dedicated support channel with guaranteed response times — help when you actually need it.'],
        ],
        'deliverables'     => [
            [
                'title' => 'Hosting Infrastructure',
                'items' => ['SSD cloud hosting (cPanel/Plesk)', 'Free domain with annual plan', 'Professional email accounts', 'Unlimited bandwidth (fair use)', 'PHP, MySQL, Node.js support', 'Staging environment'],
            ],
            [
                'title' => 'Maintenance & Support',
                'items' => ['CMS & plugin updates', 'Monthly security patches', 'Performance reports', 'Uptime monitoring alerts', '24-hour restore SLA', 'Monthly site health report'],
            ],
        ],
        'page_process'     => [
            ['icon' => 'fa-clipboard-list', 'title' => 'On-boarding Review',  'desc' => 'Auditing your current hosting, domains, and CMS to plan a smooth, zero-downtime migration.'],
            ['icon' => 'fa-exchange-alt',   'title' => 'Migration',           'desc' => 'Migrating your files, databases, and emails with full DNS propagation support.'],
            ['icon' => 'fa-chart-area',     'title' => 'Monitoring Setup',    'desc' => 'Configuring uptime monitors, security scanners, performance benchmarks, and alert channels.'],
            ['icon' => 'fa-hands',          'title' => 'Ongoing Management',  'desc' => 'Monthly updates, backups, security scans, and a health report delivered to your inbox.'],
        ],
        'pricing'          => [
            ['name' => 'Basic',        'price' => '29',     'period' => '/month', 'desc' => 'Essential hosting for a single website.',       'features' => ['1 website', '10 GB SSD storage', 'Free SSL certificate', 'Weekly backups', 'Email support', 'Basic monitoring'],                   'featured' => false, 'cta' => 'Get Started'],
            ['name' => 'Professional', 'price' => '79',     'period' => '/month', 'desc' => 'Full managed service for growing businesses.',  'features' => ['Up to 5 websites', '50 GB SSD storage', 'Daily backups', 'Security monitoring', 'Priority support', 'Monthly reports'],           'featured' => true,  'cta' => 'Most Popular'],
            ['name' => 'Enterprise',   'price' => '199',    'period' => '/month', 'desc' => 'Dedicated infrastructure with SLA guarantee.',  'features' => ['Unlimited websites', '200 GB NVMe storage', 'Real-time monitoring', 'Dedicated server', 'SLA 99.9% uptime', '24/7 phone support'], 'featured' => false, 'cta' => 'Contact Us'],
        ],
        'faq'              => [
            ['q' => 'Can I migrate my existing website to your hosting?', 'a' => 'Yes — migration is handled completely by our team at no extra cost. We ensure zero downtime during the transfer.'],
            ['q' => 'What happens if my site goes down?',                 'a' => 'Our uptime monitors alert us immediately. On Professional and Enterprise plans we respond and restore within 4 hours under our SLA.'],
            ['q' => 'Do you support WordPress and other CMSs?',           'a' => 'Yes — our environments are optimised for WordPress, Laravel, CodeIgniter, and static sites. We support PHP, MySQL, Node.js, and Python.'],
            ['q' => 'Is email hosting included?',                         'a' => 'Yes. All plans include professional email accounts (@yourdomain.com) with webmail access and mobile sync.'],
            ['q' => 'Can I upgrade my plan as my site grows?',            'a' => 'Absolutely. Plans can be scaled up at any time with no data loss and minimal downtime.'],
        ],
        'related'          => ['website-development', 'web-applications', 'automation-solutions'],
    ],

    // ----------------------------------------------------------
    // 6. MOBILE-FIRST DEVELOPMENT
    // ----------------------------------------------------------
    [
        'slug'             => 'mobile-first-development',
        'url'              => 'services/mobile-first-development.php',
        'icon'             => 'fa-mobile-alt',
        'title'            => 'Mobile-First Development',
        'page_title'       => 'Mobile-First & PWA Development – SpiderWebUG',
        'page_description' => 'Progressive web apps and mobile-optimised experiences from SpiderWebUG. Fast, installable, offline-capable PWAs that reach your audience on any device.',
        'page_keywords'    => 'PWA development Uganda, mobile first development Kampala, progressive web app Uganda, responsive web design, mobile optimisation Uganda',
        'hero_subtitle'    => 'Progressive web apps and mobile-optimised experiences your users will love on every device',
        'description'      => 'Progressive web apps and mobile-optimised solutions that deliver exceptional experiences across all devices. Reach your audience wherever they are.',
        'items'            => ['PWA Development', 'Responsive Design', 'Cross-Platform', 'App Optimisation'],
        'featured'         => false,
        'benefits'         => [
            ['icon' => 'fa-wifi',            'title' => 'Works Offline',         'desc' => 'Service workers cache critical content so your app works even with zero connectivity.'],
            ['icon' => 'fa-bolt',            'title' => 'Instant Load',          'desc' => 'App-shell architecture and pre-caching deliver sub-second first-paint on mobile networks.'],
            ['icon' => 'fa-download',        'title' => 'Installable',           'desc' => 'Users can add your PWA to their home screen — no app store fees, no approval delays.'],
            ['icon' => 'fa-sync',            'title' => 'Always Up-to-Date',     'desc' => 'Background sync pushes updates silently — users always have the latest version automatically.'],
            ['icon' => 'fa-universal-access','title' => 'Fully Accessible',      'desc' => 'WCAG 2.1 AA compliant out of the box — readable, navigable, and usable by everyone.'],
            ['icon' => 'fa-chart-bar',       'title' => 'Higher Engagement',     'desc' => 'Push notifications and a home-screen presence dramatically boost return visit rates.'],
        ],
        'deliverables'     => [
            [
                'title' => 'PWA Core',
                'items' => ['Responsive UI across all screen sizes', 'Service worker & offline mode', 'Web app manifest (installable)', 'Push notification system', 'Background sync', 'App Performance audit (Lighthouse 90+)'],
            ],
            [
                'title' => 'Optimisation & Distribution',
                'items' => ['Core Web Vitals optimisation', 'Image & asset compression', 'CDN integration', 'Analytics & conversion tracking', 'App Store listing guidance (optional)', 'A/B testing setup'],
            ],
        ],
        'page_process'     => [
            ['icon' => 'fa-search',       'title' => 'UX Research',           'desc' => 'Mapping user journeys and mobile context to design an experience that fits real-world usage.'],
            ['icon' => 'fa-tablet-alt',   'title' => 'Prototype',             'desc' => 'Building an interactive mobile prototype for validation before full development begins.'],
            ['icon' => 'fa-code',         'title' => 'Build & Integrate',     'desc' => 'Developing the PWA with offline support, push notifications, and deep backend integration.'],
            ['icon' => 'fa-tachometer-alt','title' => 'Audit & Launch',       'desc' => 'Running Lighthouse, Core Web Vitals, and accessibility audits before a staged rollout.'],
        ],
        'pricing'          => [
            ['name' => 'PWA Starter',    'price' => '999',    'period' => 'one-time',  'desc' => 'Responsive PWA with core offline support.',     'features' => ['Responsive PWA', 'Offline mode', 'Basic push notifications', 'Home screen install', 'Lighthouse 90+ audit', '30-day support'],   'featured' => false, 'cta' => 'Get Started'],
            ['name' => 'Professional',   'price' => '2,499',  'period' => 'one-time',  'desc' => 'Full-featured PWA with analytics & backend.',   'features' => ['Advanced caching strategy', 'Analytics integration', 'Backend API', 'Background sync', 'A/B testing setup', '6 months support'],  'featured' => true,  'cta' => 'Most Popular'],
            ['name' => 'Enterprise',     'price' => 'Custom', 'period' => '',           'desc' => 'Cross-platform PWA + native wrapper & CI/CD.',  'features' => ['Native app wrapper', 'CI/CD pipeline', 'App Store submission', 'Dedicated backend', 'Performance SLA', 'Ongoing retainer'],       'featured' => false, 'cta' => 'Contact Us'],
        ],
        'faq'              => [
            ['q' => 'What is a Progressive Web App (PWA)?',                   'a' => 'A PWA is a website that behaves like a native app — it can be installed on a home screen, works offline, and sends push notifications, but without going through an app store.'],
            ['q' => 'Is a PWA as good as a native iOS or Android app?',       'a' => 'For most business use cases, yes. PWAs are faster to build, cheaper to maintain, and reach all platforms at once. The main limitation is access to very low-level device hardware.'],
            ['q' => 'Will my PWA appear in Google search results?',           'a' => 'Yes — PWAs are fully crawlable by search engines and often outperform native apps in organic search because they live on the web with real URLs.'],
            ['q' => 'Do you help with App Store submission?',                 'a' => 'On Professional and Enterprise plans we can wrap your PWA using tools like Capacitor or TWA for Google Play / iOS submission.'],
            ['q' => 'What Lighthouse score can I expect?',                    'a' => 'All our PWAs target a Lighthouse score of 90+ across Performance, Accessibility, Best Practices, and SEO before they go live.'],
        ],
        'related'          => ['website-development', 'visual-design', 'web-applications'],
    ],

];
