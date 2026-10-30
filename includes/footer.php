<!-- Footer Component: Spider Microfinance -->
<footer class="site-footer bg-dark-green text-white position-relative pt-5">
    <div class="container pt-lg-4 pb-4">
        <div class="row g-4 gy-5 pb-4 border-bottom border-secondary-subtle">
            <!-- Col 1: Brand & Regulatory Trust -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand-wrap pe-lg-3">
                    <img src="<?php echo $base_url; ?>assets/images/logo-white.svg" alt="Spider Microfinance Uganda" class="footer-logo mb-3" width="240" height="58">
                    <p class="text-white-75 small mb-3">
                        "Weaving stronger communities, one loan at a time." Spider Microfinance provides accessible, affordable, and responsible financial services across Uganda.
                    </p>
                    <div class="regulatory-pill bg-dark-soft p-2 px-3 rounded-2 d-inline-flex align-items-center gap-2 mb-3">
                        <i class="fas fa-shield-halved text-accent"></i>
                        <span class="x-small text-white-75">Regulated under the <strong>Tier 4 Act, 2016</strong> by <strong>UMRA</strong></span>
                    </div>
                    <div class="footer-social-links d-flex gap-2">
                        <?php foreach ($social_links as $social): ?>
                        <a href="<?php echo htmlspecialchars($social['url']); ?>" class="social-icon-btn rounded-circle" aria-label="<?php echo htmlspecialchars($social['label']); ?>">
                            <i class="<?php echo htmlspecialchars($social['icon']); ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-nav-block">
                    <h6 class="footer-block-title text-white fw-bold mb-3">Navigation</h6>
                    <ul class="list-unstyled footer-links-list d-flex flex-column gap-2 mb-0 small">
                        <li><a href="<?php echo $base_url; ?>#hero">Home</a></li>
                        <li><a href="<?php echo $base_url; ?>#about">About Us</a></li>
                        <li><a href="<?php echo $base_url; ?>#services">Loan Products</a></li>
                        <li><a href="<?php echo $base_url; ?>#how-it-works">How It Works</a></li>
                        <li><a href="<?php echo $base_url; ?>#calculator">Loan Calculator</a></li>
                        <li><a href="<?php echo $base_url; ?>#impact">Impact & Values</a></li>
                        <li><a href="<?php echo $base_url; ?>#contact">Branch Directory</a></li>
                    </ul>
                </div>
            </div>

            <!-- Col 3: All 8 Loan Products -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-nav-block">
                    <h6 class="footer-block-title text-white fw-bold mb-3">Loan Products</h6>
                    <ul class="list-unstyled footer-links-list d-flex flex-column gap-2 mb-0 small">
                        <?php foreach ($services as $svc): ?>
                        <li>
                            <a href="<?php echo $base_url . htmlspecialchars($svc['url']); ?>" class="d-flex align-items-center gap-1">
                                <i class="fas fa-angle-right text-accent x-small"></i>
                                <?php echo htmlspecialchars($svc['title']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Col 4: Contact & Working Hours -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact-block">
                    <h6 class="footer-block-title text-white fw-bold mb-3">Head Office & Support</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-3 small text-white-75">
                        <li class="d-flex align-items-start gap-2">
                            <i class="fas fa-location-dot text-accent mt-1"></i>
                            <span><?php echo htmlspecialchars($contact_info['head_office']); ?></span>
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <i class="fas fa-phone text-accent mt-1"></i>
                            <a href="tel:<?php echo htmlspecialchars($contact_info['phone']); ?>" class="text-white text-decoration-none">
                                <?php echo htmlspecialchars($contact_info['phone']); ?>
                            </a>
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <i class="fas fa-envelope text-accent mt-1"></i>
                            <a href="mailto:<?php echo htmlspecialchars($contact_info['email']); ?>" class="text-white text-decoration-none">
                                <?php echo htmlspecialchars($contact_info['email']); ?>
                            </a>
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <i class="fas fa-clock text-accent mt-1"></i>
                            <span><?php echo htmlspecialchars($contact_info['working_hours']); ?></span>
                        </li>
                    </ul>

                    <!-- Payment Partners Strip -->
                    <div class="footer-partners pt-2 border-top border-secondary-subtle">
                        <span class="x-small text-white-50 d-block mb-2">Disbursement Partners:</span>
                        <div class="d-flex align-items-center gap-2">
                            <img src="<?php echo $base_url; ?>assets/images/mtn-momo.svg" alt="MTN MoMo" class="partner-mini-badge" width="80" height="24">
                            <img src="<?php echo $base_url; ?>assets/images/airtel-money.svg" alt="Airtel Money" class="partner-mini-badge" width="80" height="24">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom: Regulatory Disclaimer & Copyright -->
        <div class="footer-bottom pt-4">
            <div class="row align-items-center gy-2">
                <div class="col-md-7 text-center text-md-start">
                    <p class="mb-0 text-white-50 x-small">
                        &copy; <?php echo date('Y'); ?> Spider Microfinance Limited. All rights reserved. Regulated by the Uganda Microfinance Regulatory Authority (UMRA).
                    </p>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <span class="text-white-50 x-small">
                        Complaints: <a href="mailto:<?php echo htmlspecialchars($contact_info['complaints']['email']); ?>" class="text-white-75 text-decoration-underline"><?php echo htmlspecialchars($contact_info['complaints']['email']); ?></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button id="scrollTopBtn" class="scroll-top-btn" aria-label="Scroll to top of page">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- Bootstrap 5.3 Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Centralized Custom JavaScript -->
<script src="<?php echo $base_url; ?>assets/js/main.js"></script>

</body>
</html>
