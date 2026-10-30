<!-- Calls to Action Component -->
<section class="cta-section py-5 position-relative overflow-hidden">
    <div class="container py-lg-4">
        <div class="cta-card rounded-4 p-4 p-md-5 bg-primary text-white position-relative overflow-hidden shadow-xl">
            <div class="cta-web-background"></div>
            <div class="row align-items-center gy-4 position-relative z-index-2">
                <div class="col-lg-8">
                    <span class="badge bg-accent-soft text-accent rounded-pill px-3 py-1 mb-3 fw-semibold">
                        <i class="fas fa-handshake me-1"></i> Start Your Journey
                    </span>
                    <h2 class="display-6 fw-bold mb-3 text-white">
                        Ready to Grow Your Business or Support Your Family?
                    </h2>
                    <p class="lead text-white-75 mb-0 fs-6">
                        Speak with a Spider Microfinance loan officer today. We visit your business, explain all terms transparently, and structure repayments that fit your seasonal or weekly cash flow.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-lg-end">
                        <a href="<?php echo $base_url; ?>#contact" class="btn btn-accent-custom btn-lg py-3 px-4 shadow">
                            <i class="fas fa-location-dot me-2"></i> Visit a Branch / Apply
                        </a>
                        <a href="tel:<?php echo htmlspecialchars($contact_info['phone'] ?? '+256000000000'); ?>" class="btn btn-outline-light btn-lg py-3 px-4">
                            <i class="fas fa-phone me-2"></i> <?php echo htmlspecialchars($contact_info['phone'] ?? '[+256 XXX XXX XXX]'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
