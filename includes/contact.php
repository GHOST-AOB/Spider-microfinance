<!-- Contact Section -->
<section id="contact" class="contact-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Get In Touch</span>
            <h2 class="section-title">Let's Build Something Great</h2>
            <p class="section-subtitle">
                Have a project in mind? We'd love to hear from you
            </p>
        </div>

        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-lg-4" data-aos="fade-right">
                <div class="contact-info-card">
                    <?php foreach ($contact_info as $info): ?>
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas <?php echo htmlspecialchars($info['icon']); ?>"></i>
                        </div>
                        <div>
                            <h5><?php echo htmlspecialchars($info['label']); ?></h5>
                            <p><?php echo $info['value']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

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

            <!-- Contact Form -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="contact-form-card">
                    <!-- Formspree Success/Error Messages -->
                    <div data-fs-success class="alert alert-success mb-4" style="display: none;">
                        <i class="fas fa-check-circle me-2"></i>
                        Thank you! Your message has been sent successfully.
                    </div>
                    <div data-fs-error class="alert alert-danger mb-4" style="display: none;">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        Oops! There was a problem submitting your form.
                    </div>

                    <form id="contactForm" action="https://formspree.io/f/meepygqn" method="POST" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           data-fs-field required>
                                    <span class="text-danger small" data-fs-error="name"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           data-fs-field required>
                                    <span class="text-danger small" data-fs-error="email"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                           data-fs-field>
                                    <span class="text-danger small" data-fs-error="phone"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service">Service Needed *</label>
                                    <select class="form-control" id="service" name="service" data-fs-field required>
                                        <option value="">Select a service</option>
                                        <?php foreach ($services as $svc): ?>
                                        <option value="<?php echo htmlspecialchars(strtolower(str_replace(' ', '-', $svc['title']))); ?>">
                                            <?php echo htmlspecialchars($svc['title']); ?>
                                        </option>
                                        <?php endforeach; ?>
                                        <option value="other">Other</option>
                                    </select>
                                    <span class="text-danger small" data-fs-error="service"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message">Project Details *</label>
                                    <textarea class="form-control" id="message" name="message" 
                                              rows="6" data-fs-field required></textarea>
                                    <span class="text-danger small" data-fs-error="message"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" data-fs-submit-btn class="btn btn-primary-custom btn-lg w-100">
                                    <i class="fas fa-paper-plane"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
