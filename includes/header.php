<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($description ?? ($site_config['mission'] ?? 'Spider Microfinance provides accessible, affordable and responsible financial services in Uganda.')); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords ?? 'microfinance Uganda, group loans Uganda, business loans Kampala, agricultural finance Uganda, school fees loans, Tier 4 microfinance UMRA'); ?>">
    <meta name="author" content="Spider Microfinance Limited">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Meta -->
    <meta property="og:title" content="<?php echo htmlspecialchars($title ?? 'Spider Microfinance – Weaving Stronger Communities Across Uganda'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description ?? ($site_config['mission'] ?? 'Responsible and affordable credit for Ugandan entrepreneurs, farmers, and groups.')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?php echo htmlspecialchars($site_config['website'] ?? 'www.spidermicrofinance.example'); ?>">
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/hero.jpg">

    <title><?php echo htmlspecialchars($title ?? 'Spider Microfinance – Weaving Stronger Communities Across Uganda'); ?></title>

    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/svg+xml" href="<?php echo $base_url; ?>favicon.svg">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $base_url; ?>favicon-96x96.png">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>apple-touch-icon.png">
    <link rel="manifest" href="<?php echo $base_url; ?>site.webmanifest">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts: Outfit (Headings) & Plus Jakarta Sans (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Centralized Custom CSS (Ugandan Microfinance Theme) -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
</head>

<body class="spider-body">
