<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $base_url; ?>">
            <i class="fas fa-spider"></i> SpiderWeb<span class="text-primary-custom">UG</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>#about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo $base_url; ?>#services" id="servicesDropdown"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="servicesDropdown">
                        <?php foreach ($services as $svc): ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo $base_url . htmlspecialchars($svc['url']); ?>">
                                <i class="fas <?php echo htmlspecialchars($svc['icon']); ?> me-2"></i>
                                <?php echo htmlspecialchars($svc['title']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>#process">Process</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>#technology">Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-nav-cta" href="<?php echo $base_url; ?>#contact">Get Started</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
