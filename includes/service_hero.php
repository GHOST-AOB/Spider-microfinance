<!-- Service Subpage Hero Component -->
<section class="service-hero-section py-5 bg-primary text-white position-relative overflow-hidden">
    <div class="service-hero-overlay"></div>
    <div class="container position-relative py-lg-4 z-index-2">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb service-breadcrumb small mb-0">
                        <li class="breadcrumb-item">
                            <a href="<?php echo $base_url; ?>" class="text-white-50 text-decoration-none">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo $base_url; ?>#services" class="text-white-50 text-decoration-none">Loan Products</a>
                        </li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">
                            <?php echo htmlspecialchars($current_service['title']); ?>
                        </li>
                    </ol>
                </nav>

                <!-- Product Badge & Tagline -->
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="badge bg-accent-soft text-accent rounded-pill px-3 py-1 fw-semibold">
                        <i class="fas <?php echo htmlspecialchars($current_service['icon']); ?> me-1"></i>
                        <?php echo htmlspecialchars($current_service['badge']); ?>
                    </span>
                    <span class="badge bg-white-soft text-white small">Spider Microfinance Uganda</span>
                </div>

                <h1 class="display-5 fw-bold mb-3 text-white">
                    <?php echo htmlspecialchars($current_service['full_title']); ?>
                </h1>

                <p class="lead text-white-75 mb-4 fs-6">
                    "<?php echo htmlspecialchars($current_service['tagline']); ?>"
                </p>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap gap-3">
                    <a href="<?php echo $base_url; ?>#contact" class="btn btn-accent-custom btn-lg px-4 py-3 shadow">
                        <i class="fas fa-file-signature me-2"></i> Apply for this Loan
                    </a>
                    <a href="#glance" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="fas fa-table-list me-2"></i> Loan at a Glance
                    </a>
                    <a href="#worked-example" class="btn btn-link-white text-decoration-none d-flex align-items-center">
                        Worked Example <i class="fas fa-arrow-down ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Quick Metrics Panel -->
            <div class="col-lg-4">
                <div class="service-hero-stats-card bg-white rounded-4 p-4 text-dark shadow-xl border">
                    <h5 class="fw-bold text-primary mb-3 pb-2 border-bottom">
                        <i class="fas fa-check-double text-accent me-1"></i> Product Summary
                    </h5>

                    <div class="mb-3">
                        <span class="d-block text-muted x-small text-uppercase fw-semibold">Indicative Amount</span>
                        <div class="fs-5 fw-bold text-dark"><?php echo htmlspecialchars($current_service['loan_size']); ?></div>
                    </div>

                    <div class="mb-3">
                        <span class="d-block text-muted x-small text-uppercase fw-semibold">Repayment Tenure</span>
                        <div class="fs-6 fw-bold text-dark"><?php echo htmlspecialchars($current_service['term']); ?></div>
                    </div>

                    <div class="mb-3">
                        <span class="d-block text-muted x-small text-uppercase fw-semibold">Ideal For</span>
                        <div class="small text-muted"><?php echo htmlspecialchars($current_service['best_for']); ?></div>
                    </div>

                    <div class="pt-3 border-top">
                        <span class="badge bg-primary-soft text-primary w-100 py-2 d-block text-center small">
                            <i class="fas fa-shield-halved me-1"></i> Regulated by UMRA
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
