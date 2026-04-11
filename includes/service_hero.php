<!-- Service Page Hero -->
<section class="service-hero">
    <div class="service-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-lg-8" data-aos="fade-right">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb service-breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo $base_url; ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo $base_url; ?>#services">Services</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php echo htmlspecialchars($current_service['title']); ?>
                        </li>
                    </ol>
                </nav>

                <span class="hero-tagline">
                    <i class="fas <?php echo htmlspecialchars($current_service['icon']); ?>"></i>
                    Our Services
                </span>
                <h1 class="hero-title mt-3">
                    <?php echo htmlspecialchars($current_service['title']); ?>
                </h1>
                <p class="service-hero-subtitle">
                    <?php echo htmlspecialchars($current_service['hero_subtitle']); ?>
                </p>
                <div class="hero-buttons mt-4">
                    <a href="#pricing" class="btn btn-primary-custom btn-lg me-3">
                        <i class="fas fa-tags"></i> View Pricing
                    </a>
                    <a href="<?php echo $base_url; ?>#contact" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-paper-plane"></i> Start a Project
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-flex justify-content-center align-items-center" data-aos="fade-left">
                <div class="service-hero-icon-wrap">
                    <i class="fas <?php echo htmlspecialchars($current_service['icon']); ?>"></i>
                </div>
            </div>
        </div>
    </div>
</section>
