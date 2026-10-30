<!-- Proof of Impact & Core Values Section -->
<section id="impact" class="impact-section py-5 bg-warm position-relative">
    <div class="container py-lg-4">
        <!-- Mission & Vision Cards -->
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="mission-card h-100 rounded-4 bg-white p-4 p-lg-5 shadow-sm border border-primary-subtle position-relative overflow-hidden">
                    <div class="mission-icon-watermark">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="mission-icon-box bg-primary text-white rounded-3 p-3">
                            <i class="fas fa-bullseye fa-xl"></i>
                        </div>
                        <div>
                            <span class="text-uppercase text-primary small fw-bold tracking-wider">Our Mission</span>
                            <h3 class="fw-bold text-dark mb-0">Empowering Livelihoods</h3>
                        </div>
                    </div>
                    <p class="lead text-muted mb-0">
                        "<?php echo htmlspecialchars($site_config['mission']); ?>"
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="vision-card h-100 rounded-4 bg-white p-4 p-lg-5 shadow-sm border border-accent-subtle position-relative overflow-hidden">
                    <div class="mission-icon-watermark">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="vision-icon-box bg-accent text-white rounded-3 p-3">
                            <i class="fas fa-eye fa-xl"></i>
                        </div>
                        <div>
                            <span class="text-uppercase text-accent small fw-bold tracking-wider">Our Vision</span>
                            <h3 class="fw-bold text-dark mb-0">Financial Inclusion for Uganda</h3>
                        </div>
                    </div>
                    <p class="lead text-muted mb-0">
                        "<?php echo htmlspecialchars($site_config['vision']); ?>"
                    </p>
                </div>
            </div>
        </div>

        <!-- Strategic Goals Showcase -->
        <div class="mb-5">
            <div class="text-center max-w-750 mx-auto mb-4">
                <span class="section-tag mb-2 d-inline-block">Impact Commitments</span>
                <h2 class="section-title text-dark fw-bold mb-3">Seven Clear Goals Guiding Our Growth</h2>
                <p class="text-muted">
                    We measure our institutional success not by debt volume, but by our clients' business longevity, regular savings cushions, and economic dignity.
                </p>
            </div>

            <div class="row g-3">
                <?php foreach ($strategic_goals as $goal): ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="goal-card rounded-3 bg-white p-3 border h-100 transition-all">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="goal-icon-box text-primary">
                                <i class="fas <?php echo htmlspecialchars($goal['icon']); ?>"></i>
                            </div>
                            <span class="goal-metric badge bg-primary-soft text-primary fw-bold">
                                <?php echo htmlspecialchars($goal['metric']); ?>
                            </span>
                        </div>
                        <h6 class="fw-bold text-dark mb-1"><?php echo htmlspecialchars($goal['title']); ?></h6>
                        <p class="text-muted x-small mb-0"><?php echo htmlspecialchars($goal['description']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- 8 Core Values Grid -->
        <div class="values-wrapper bg-white rounded-4 p-4 p-lg-5 border shadow-sm">
            <div class="row align-items-center mb-4">
                <div class="col-lg-8">
                    <span class="section-tag mb-2 d-inline-block">Ethical Foundation</span>
                    <h3 class="fw-bold text-dark mb-1">Our Eight Core Values in Practice</h3>
                    <p class="text-muted small mb-0">How Spider Microfinance translates institutional integrity into everyday client interactions.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <span class="badge bg-accent-soft text-accent p-2 fw-semibold">
                        <i class="fas fa-handshake me-1"></i> Client Protection First
                    </span>
                </div>
            </div>

            <div class="row g-3">
                <?php foreach ($core_values as $val): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="value-item-card p-3 rounded-3 bg-warm border h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas <?php echo htmlspecialchars($val['icon']); ?> text-primary"></i>
                            <h6 class="fw-bold text-dark mb-0"><?php echo htmlspecialchars($val['name']); ?></h6>
                        </div>
                        <p class="x-small text-muted mb-0">
                            <?php echo htmlspecialchars($val['description']); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
