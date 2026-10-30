<?php
// ============================================================
// index.php
// Spider Microfinance – Marketing Website Entry Point
// Regulated by the Uganda Microfinance Regulatory Authority (UMRA)
// Under the Tier 4 Microfinance Institutions & Money Lenders Act, 2016
// ============================================================

session_start();

// Root asset base URL
$base_url = '';

// Load shared configurations
require_once 'config/services.php';
require_once 'config/site.php';

// SEO Meta Information
$title       = "Spider Microfinance – Weaving Stronger Communities Across Uganda";
$description = "Spider Microfinance provides accessible, affordable, and responsible credit and savings services for market vendors, smallholder farmers, and micro-entrepreneurs in Uganda.";
$keywords    = "microfinance Uganda, group loans Kampala, business loans Uganda, agricultural loans, salary loans, school fees loans, asset financing, Tier 4 microfinance UMRA, Spider Microfinance";

// ============================================================
// OUTPUT: Assemble PHP Component Partials
// ============================================================

// 1. Themed Microfinance Preloader
include 'includes/preloader.php';

// 2. HTML Head & Navigation
include 'includes/header.php';
include 'includes/navigation.php';

// 3. Hero Section (Value Proposition, UMRA badge, CTAs, Hero Stats)
include 'includes/hero.php';

// 4. About Us (Company Profile, Web Philosophy, Informal Economy Gap)
include 'includes/about.php';

// 5. 8 Loan Services Overview Grid & Category Filters
include 'includes/services.php';

// 6. Proof of Impact & Foundation (Mission, Vision, 7 Goals, 8 Core Values)
include 'includes/impact.php';

// 7. How It Works (5-Step Lending Process & General Eligibility)
include 'includes/how-it-works.php';

// 8. Interactive Loan Repayment Calculator
include 'includes/calculator.php';

// 9. Worked Examples & Client Stories Carousel
include 'includes/testimonials.php';

// 10. Community Call to Action
include 'includes/cta.php';

// 11. Contact Details, Branch Directory, UMRA Complaints & Inquiry Form
include 'includes/contact.php';

// 12. Site Footer & Scripts
include 'includes/footer.php';
