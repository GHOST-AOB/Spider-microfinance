<?php
// ============================================================
// SpiderWebUG - Main Entry Point
// All site data is defined here and passed to includes/partials
// ============================================================

session_start();

// Base URL for asset paths ('' = root, '../' = in subdirectory)
$base_url = '';

// Load shared config
require_once 'config/services.php';
require_once 'config/site.php';

// ------------------------------------------------------------
// 1. SEO / META
// ------------------------------------------------------------
$title       = "SpiderWebUG – Professional Web Development & Digital Solutions";
$tagline     = "Weaving Digital Excellence Across Uganda";
$description = "SpiderWebUG specializes in custom web development, web applications, automation solutions, and visual design. Transform your digital presence with our expert team.";
$keywords    = "web development Uganda, web design Kampala, web applications, automation solutions, custom websites, visual design, responsive websites, SEO optimization, digital solutions Uganda";

// ------------------------------------------------------------
// 2. HERO STATS
// ------------------------------------------------------------
$stats = [
    'projects'     => '150+',
    'satisfaction' => '98%',
    'support'      => '24/7',
];

// ------------------------------------------------------------
// 3. ABOUT SECTION
// ------------------------------------------------------------
$about = [
    'experience' => '10+ Years',
    'lead'       => "SpiderWebUG is Uganda's premier web development agency, specializing in creating powerful digital solutions that drive business growth and innovation.",
    'body'       => "With over a decade of experience, our team of expert developers, designers, and strategists work collaboratively to deliver custom websites, robust web applications, intelligent automation systems, and captivating visual designs that exceed expectations.",
    'features'   => [
        'Expert Development Team',
        'Modern Technology Stack',
        'Agile Project Management',
        'Ongoing Support & Maintenance',
    ],
];

// $services is loaded from config/services.php

// ------------------------------------------------------------
// 5. PORTFOLIO
// ------------------------------------------------------------
$portfolio = [
    [
        'title'       => 'E-commerce Platform',
        'description' => 'Custom online store with inventory management',
        'image'       => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=500&fit=crop',
        'tags'        => ['Web Development', 'E-commerce'],
    ],
    [
        'title'       => 'Analytics Dashboard',
        'description' => 'Real-time business intelligence platform',
        'image'       => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=500&fit=crop',
        'tags'        => ['Web Application', 'Analytics'],
    ],
    [
        'title'       => 'Corporate Website',
        'description' => 'Modern responsive website',
        'image'       => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&h=400&fit=crop',
        'tags'        => ['Design'],
    ],
    [
        'title'       => 'CRM System',
        'description' => 'Customer relationship management',
        'image'       => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&h=400&fit=crop',
        'tags'        => ['Application'],
    ],
    [
        'title'       => 'Mobile PWA',
        'description' => 'Progressive web application',
        'image'       => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=600&h=400&fit=crop',
        'tags'        => ['Mobile'],
    ],
];

// ------------------------------------------------------------
// 6. PROCESS STEPS
// ------------------------------------------------------------
$process = [
    [
        'icon'        => 'fa-lightbulb',
        'title'       => 'Discovery & Planning',
        'description' => 'We analyse your requirements, understand your goals, and create a detailed project roadmap.',
    ],
    [
        'icon'        => 'fa-pencil-ruler',
        'title'       => 'Design & Prototyping',
        'description' => 'Our designers create wireframes and mockups that bring your vision to life with stunning visuals.',
    ],
    [
        'icon'        => 'fa-code',
        'title'       => 'Development',
        'description' => 'Expert developers build robust, scalable solutions using cutting-edge technologies and best practices.',
    ],
    [
        'icon'        => 'fa-rocket',
        'title'       => 'Launch & Support',
        'description' => 'We deploy your solution and provide ongoing support to ensure continuous success and growth.',
    ],
];

// ------------------------------------------------------------
// 7. TECHNOLOGIES
// ------------------------------------------------------------
$technologies = [
    ['icon' => 'fab fa-html5',      'name' => 'HTML5'],
    ['icon' => 'fab fa-css3-alt',   'name' => 'CSS3'],
    ['icon' => 'fab fa-js',         'name' => 'JavaScript'],
    ['icon' => 'fab fa-react',      'name' => 'React'],
    ['icon' => 'fab fa-node',       'name' => 'Node.js'],
    ['icon' => 'fab fa-php',        'name' => 'PHP'],
    ['icon' => 'fab fa-python',     'name' => 'Python'],
    ['icon' => 'fab fa-wordpress',  'name' => 'WordPress'],
];

// ------------------------------------------------------------
// 8. TESTIMONIALS
// ------------------------------------------------------------
$testimonials = [
    [
        'name'   => 'Sarah Nakato',
        'role'   => 'CEO, TechStart Uganda',
        'rating' => 5,
        'text'   => 'SpiderWebUG transformed our online presence with a stunning website that perfectly captures our brand. Their professionalism and expertise are unmatched!',
    ],
    [
        'name'   => 'David Okello',
        'role'   => 'Director, AgriSolutions',
        'rating' => 5,
        'text'   => 'The custom web application they built for us has streamlined our operations significantly. The team was responsive, creative, and delivered beyond expectations.',
    ],
    [
        'name'   => 'Grace Namuli',
        'role'   => 'Manager, Retail Plus',
        'rating' => 5,
        'text'   => 'Outstanding service! Their automation solutions saved us countless hours. SpiderWebUG is now our go-to partner for all digital projects.',
    ],
];

// $contact_info and $social_links are loaded from config/site.php
// ------------------------------------------------------------
$form_success = '';
$form_error   = '';

// ============================================================
// OUTPUT — assemble partials
// ============================================================
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/hero.php';
include 'includes/about.php';
include 'includes/services.php';
include 'includes/portfolio.php';
include 'includes/process.php';
include 'includes/technology.php';
include 'includes/testimonials.php';
include 'includes/cta.php';
include 'includes/contact.php';
include 'includes/footer.php';
