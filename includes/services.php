<!-- Services Section: 8 Tailored Loan Products -->
<section id="services" class="services-section py-5">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tag mb-2 d-inline-block">Responsible Loan Solutions</span>
            <h2 class="section-title text-dark fw-bold mb-3">Eight Products Tailored to Ugandan Realities</h2>
            <p class="section-subtitle text-muted mb-4">
                Whether you trade in a local market, farm the seasonal rains, earn a monthly wage, or lead a women’s group, Spider Microfinance offers transparent loans structured around your cash flow.
            </p>

            <!-- Category Filter Buttons -->
            <div class="services-filter-nav d-flex flex-wrap justify-content-center gap-2" role="tablist">
                <button type="button" class="btn btn-filter active" data-filter="all">All Products (8)</button>
                <button type="button" class="btn btn-filter" data-filter="community">Community & Groups</button>
                <button type="button" class="btn btn-filter" data-filter="business">Business & Enterprise</button>
                <button type="button" class="btn btn-filter" data-filter="agriculture">Agriculture & Produce</button>
                <button type="button" class="btn btn-filter" data-filter="personal">Personal & Education</button>
            </div>
        </div>

        <!-- Loan Products Grid -->
        <div class="row g-4" id="servicesGrid">
            <?php foreach ($services as $svc): ?>
            <div class="col-lg-4 col-md-6 service-item" data-category="<?php echo htmlspecialchars($svc['category']); ?>">
                <div class="service-card h-100 rounded-4 bg-white border p-4 d-flex flex-column transition-all position-relative overflow-hidden">
                    <!-- Top Ribbon / Badge -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="service-icon-box rounded-3 text-primary">
                            <i class="fas <?php echo htmlspecialchars($svc['icon']); ?> fa-xl"></i>
                        </div>
                        <span class="badge service-badge rounded-pill"><?php echo htmlspecialchars($svc['badge']); ?></span>
                    </div>

                    <!-- Title & Tagline -->
                    <h4 class="service-card-title fw-bold text-dark mb-1">
                        <a href="<?php echo $base_url . htmlspecialchars($svc['url']); ?>" class="text-decoration-none text-dark hover-primary">
                            <?php echo htmlspecialchars($svc['title']); ?>
                        </a>
                    </h4>
                    <p class="service-card-tagline text-muted small fst-italic mb-3">
                        "<?php echo htmlspecialchars($svc['tagline']); ?>"
                    </p>

                    <!-- Best For Box -->
                    <div class="service-best-for p-2 rounded-2 bg-warm mb-3 small">
                        <span class="fw-semibold text-primary d-block">Best for:</span>
                        <span class="text-muted"><?php echo htmlspecialchars($svc['best_for']); ?></span>
                    </div>

                    <!-- Key Metrics -->
                    <div class="service-metrics border-top border-bottom py-2 my-2 mt-auto">
                        <div class="row text-center g-2">
                            <div class="col-6 border-end">
                                <span class="d-block text-muted x-small">Loan Amount</span>
                                <span class="fw-bold text-dark small"><?php echo htmlspecialchars($svc['loan_size']); ?></span>
                            </div>
                            <div class="col-6">
                                <span class="d-block text-muted x-small">Tenure</span>
                                <span class="fw-bold text-dark small"><?php echo htmlspecialchars($svc['term']); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom CTA -->
                    <div class="pt-3 d-flex justify-content-between align-items-center">
                        <a href="<?php echo $base_url . htmlspecialchars($svc['url']); ?>" class="btn btn-outline-primary-custom btn-sm w-100 py-2">
                            View Details & Eligibility <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Transparency Disclaimer Note -->
        <div class="service-disclaimer-note mt-5 p-3 rounded-3 bg-warm border text-center">
            <p class="small text-muted mb-0">
                <i class="fas fa-circle-info text-primary me-1"></i>
                <strong>Pricing Transparency Notice:</strong> Amounts, terms, and interest rates listed in this content pack are illustrative placeholders. Approved terms, reducing balance calculations, and fee breakdowns are provided transparently in your official Spider Microfinance loan offer letter prior to agreement signing.
            </p>
        </div>
    </div>
</section>
