<?php
// ============================================================
// services/website-development.php
// ============================================================
$base_url     = '../';
$service_slug = 'website-development';

require_once '../config/services.php';
require_once '../config/site.php';

// Find this service
$current_service = null;
foreach ($services as $s) {
    if ($s['slug'] === $service_slug) { $current_service = $s; break; }
}
if (!$current_service) { header('Location: ../'); exit; }

// Page meta
$title       = $current_service['page_title'];
$description = $current_service['page_description'];
$keywords    = $current_service['page_keywords'];

// Contact form stubs (used by head / footer partials if needed)
$form_success = '';
$form_error   = '';
$csrf_token   = '';

include '../includes/head.php';
include '../includes/nav.php';
include '../includes/service_hero.php';
include '../includes/service_content.php';
include '../includes/footer.php';
