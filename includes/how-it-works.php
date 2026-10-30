<!-- How It Works & Application Process -->
<section id="how-it-works" class="process-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tag mb-2 d-inline-block">Clear, Transparent Lending</span>
            <h2 class="section-title text-dark fw-bold mb-3">How to Apply: Five Simple Steps to Funding</h2>
            <p class="section-subtitle text-muted">
                We believe in simple documentation, fast appraisals, and clear terms explained in your language before any agreement is signed.
            </p>
        </div>

        <!-- 5 Step Horizontal Flow -->
        <div class="row g-4 mb-5">
            <?php foreach ($how_to_apply_steps as $step): ?>
            <div class="col-lg col-md-6">
                <div class="process-step-card h-100 rounded-4 bg-white border p-3 p-xl-4 text-center position-relative transition-all shadow-sm">
                    <div class="step-badge-number mb-3 mx-auto">
                        <?php echo htmlspecialchars($step['step']); ?>
                    </div>
                    <div class="step-icon-wrap text-primary mb-3">
                        <i class="fas <?php echo htmlspecialchars($step['icon']); ?> fa-2xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2"><?php echo htmlspecialchars($step['title']); ?></h5>
                    <p class="text-muted small mb-0"><?php echo htmlspecialchars($step['description']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Eligibility Criteria & Requirements Bar -->
        <div class="eligibility-banner rounded-4 p-4 p-lg-5 bg-warm border">
            <div class="row align-items-center gy-4">
                <div class="col-lg-5">
                    <span class="badge bg-primary-soft text-primary mb-2 fw-semibold">Check Your Readiness</span>
                    <h3 class="fw-bold text-dark mb-2">General Eligibility Criteria</h3>
                    <p class="text-muted small mb-3">
                        Spider Microfinance was established to welcome everyday Ugandans. Meeting these foundational requirements qualifies you to begin your application.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom btn-sm px-3 py-2">
                        <i class="fas fa-location-dot me-1"></i> Speak to a Local Loan Officer
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-2">
                        <?php foreach ($general_eligibility as $item): ?>
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-2 bg-white p-2 px-3 rounded-2 border">
                                <i class="fas fa-check-circle text-primary mt-1"></i>
                                <span class="small text-dark"><?php echo htmlspecialchars($item); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
