<!-- Top Utility Bar: Trust & Accessibility Info -->
<div class="top-bar d-none d-lg-block">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-2">
            <div class="top-bar-left d-flex align-items-center gap-3">
                <span class="top-bar-item">
                    <i class="fas fa-shield-halved text-accent me-1"></i>
                    Regulated by <strong>UMRA</strong> (Tier 4 Act, 2016)
                </span>
                <span class="top-bar-divider">|</span>
                <span class="top-bar-item">
                    <i class="fas fa-clock text-accent me-1"></i>
                    Mon–Fri: [8:00 am – 5:00 pm] • Sat: [8:00 am – 1:00 pm]
                </span>
            </div>
            <div class="top-bar-right d-flex align-items-center gap-3">
                <a href="tel:<?php echo htmlspecialchars($contact_info['phone'] ?? '+256000000000'); ?>" class="top-bar-link">
                    <i class="fas fa-phone-volume text-accent me-1"></i>
                    <?php echo htmlspecialchars($contact_info['phone'] ?? '[+256 XXX XXX XXX]'); ?>
                </a>
                <span class="top-bar-divider">|</span>
                <a href="<?php echo $base_url; ?>#contact" class="top-bar-link">
                    <i class="fas fa-envelope text-accent me-1"></i>
                    <?php echo htmlspecialchars($contact_info['email'] ?? 'info@spidermicrofinance.example'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<header class="site-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" id="mainNavbar">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $base_url; ?>">
                <img src="<?php echo $base_url; ?>assets/images/logo.svg" alt="Spider Microfinance Uganda" class="navbar-logo" width="220" height="52">
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>#about">About Us</a>
                    </li>
                    <!-- Loan Products Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo $base_url; ?>#services" id="loansDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Loan Products
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 py-2" aria-labelledby="loansDropdown">
                            <li class="dropdown-header text-uppercase text-muted fw-bold">Our 8 Loan Products</li>
                            <?php foreach ($services as $svc): ?>
                            <li>
                                <a class="dropdown-item py-2 d-flex align-items-start gap-2" href="<?php echo $base_url . htmlspecialchars($svc['url']); ?>">
                                    <div class="dropdown-icon-box text-primary">
                                        <i class="fas <?php echo htmlspecialchars($svc['icon']); ?> mt-1"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold dropdown-item-title"><?php echo htmlspecialchars($svc['title']); ?></div>
                                        <small class="text-muted d-block dropdown-item-sub"><?php echo htmlspecialchars($svc['best_for']); ?></small>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-center text-primary fw-bold" href="<?php echo $base_url; ?>#services">
                                    Compare All 8 Products <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>#how-it-works">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>#calculator">Loan Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>#impact">Impact & Values</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>#contact">Branches & Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a class="btn btn-primary-custom px-4 py-2" href="<?php echo $base_url; ?>#contact">
                            <i class="fas fa-file-pen me-1"></i> Apply for a Loan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
