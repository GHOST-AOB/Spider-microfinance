<?php
// ============================================================
// services/automation-solutions.php
// ============================================================
$base_url     = '../';
$service_slug = 'automation-solutions';

require_once '../config/services.php';
require_once '../config/site.php';

$current_service = null;
foreach ($services as $s) {
    if ($s['slug'] === $service_slug) { $current_service = $s; break; }
}
if (!$current_service) { header('Location: ../'); exit; }

$title       = $current_service['page_title'];
$description = $current_service['page_description'];
$keywords    = $current_service['page_keywords'];
$form_success = '';
$form_error   = '';
$csrf_token   = '';

include '../includes/head.php';
include '../includes/nav.php';
include '../includes/service_hero.php';
include '../includes/service_content.php';
include '../includes/footer.php';
