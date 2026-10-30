<?php
// ============================================================
// services/youth-women-enterprise-loans.php
// Spider Microfinance – Youth and Women Enterprise Loans
// ============================================================
$base_url     = '../';
$service_slug = 'youth-women-enterprise-loans';

require_once '../config/services.php';
require_once '../config/site.php';

// Find this service
$current_service = null;
foreach ($services as $s) {
    if ($s['slug'] === $service_slug) {
        $current_service = $s;
        break;
    }
}
if (!$current_service) {
    header('Location: ../');
    exit;
}

// Page SEO Meta
$title       = $current_service['page_title'];
$description = $current_service['page_description'];
$keywords    = $current_service['page_keywords'];

// Assemble component partials
include '../includes/preloader.php';
include '../includes/header.php';
include '../includes/navigation.php';
include '../includes/service_hero.php';
include '../includes/service_content.php';
include '../includes/cta.php';
include '../includes/footer.php';
