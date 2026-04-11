<!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <div class="row g-4 pb-4">

            <!-- Brand -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <h3><i class="fas fa-spider"></i> SpiderWeb<span class="text-primary-custom">UG</span></h3>
                    <p class="mt-3">
                        Weaving digital excellence across Uganda. We create powerful web solutions
                        that drive business growth and innovation.
                    </p>
                    <div class="social-links mt-4">
                        <?php foreach ($social_links as $social): ?>
                        <a href="<?php echo htmlspecialchars($social['url']); ?>"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="<?php echo htmlspecialchars($social['label']); ?>">
                            <i class="<?php echo htmlspecialchars($social['icon']); ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="<?php echo $base_url; ?>#about">About Us</a></li>
                        <li><a href="<?php echo $base_url; ?>#services">Services</a></li>
                        <li><a href="<?php echo $base_url; ?>#portfolio">Portfolio</a></li>
                        <li><a href="<?php echo $base_url; ?>#process">Our Process</a></li>
                        <li><a href="<?php echo $base_url; ?>#technology">Technology</a></li>
                        <li><a href="<?php echo $base_url; ?>#contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services Links -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-links">
                    <h5>Services</h5>
                    <ul>
                        <?php foreach ($services as $svc): ?>
                        <li><a href="<?php echo $base_url . htmlspecialchars($svc['url']); ?>"><?php echo htmlspecialchars($svc['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h5>Newsletter</h5>
                    <p>Subscribe for updates and tech insights</p>
                    <form class="newsletter-form" method="POST" action="#" novalidate>
                        <input type="hidden" name="newsletter_submit" value="1">
                        <input type="email" name="newsletter_email"
                               placeholder="Your email address"
                               class="form-control mb-2" required
                               aria-label="Newsletter email address">
                        <button type="submit" class="btn btn-primary-custom w-100">
                            <i class="fas fa-paper-plane me-1"></i> Subscribe
                        </button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom pt-4 mt-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">
                        &copy; <?php echo date('Y'); ?> SpiderWebUG. All rights reserved.
                        Crafted with <i class="fas fa-heart text-primary-custom"></i> in Uganda.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <span class="footer-legal">
                        <a href="#" class="text-muted me-3">Privacy Policy</a>
                        <a href="#" class="text-muted">Terms of Service</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button id="scrollTop" class="scroll-top" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- Custom JS -->
<script src="<?php echo $base_url; ?>assets/js/main.js"></script>

<!-- Formspree AJAX Integration -->
<script>
  window.formspree = window.formspree || function () { (formspree.q = formspree.q || []).push(arguments); };
  formspree('initForm', { formElement: '#contactForm', formId: 'meepygqn' });
</script>
<script src="https://unpkg.com/@formspree/ajax@1" defer></script>

</body>
</html>
