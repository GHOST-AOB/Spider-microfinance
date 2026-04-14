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
                    <!-- Web3Forms Success/Error Message Container -->
                    <div id="formResult" class="mb-4" style="display: none;"></div>

                    <!-- Web3Forms Integration -->
                    <form id="contactForm" action="https://api.web3forms.com/submit" method="POST">
                        
                        <!-- Web3Forms Specific Hidden Fields -->
                        <!-- 1. Access Key (Required) -->
                        <input type="hidden" name="access_key" value="2638d175-ce70-4ebd-b5f7-a921fcdbb5e4">
                        
                        <!-- 2. Subject Customization -->
                        <input type="hidden" name="subject" value="New Contact Form Submission - SpiderWebUG">
                        
                        <!-- 3. Honeypot/Botcheck Field (Spam Protection - silent validation failure if checked) -->
                        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                        
                        <!-- 4. Redirect Override (Fallback keeping user on page if JS fetch fails) -->
                        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>#contact">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <!-- Gotcha: Web3Forms strictly uses the field mapped to `name="email"` for the customer's Reply-To header -->
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <!-- Gotcha: Ensure `name` attributes accurately represent the data, this will be the label in the email -->
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service">Service Needed *</label>
                                    <select class="form-control" id="service" name="service" required>
                                        <option value="">Select a service</option>
                                        <?php foreach ($services as $svc): ?>
                                        <!-- Gotcha: The `value` should be clean and readable because this literal string is sent in the email -->
                                        <option value="<?php echo htmlspecialchars($svc['title']); ?>">
                                            <?php echo htmlspecialchars($svc['title']); ?>
                                        </option>
                                        <?php endforeach; ?>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message">Project Details *</label>
                                    <!-- Gotcha: Rate limits apply for multiple same-IP rapid submissions, ensure botcheck and JS spam protection are intact -->
                                    <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="submitBtn" class="btn btn-primary-custom btn-lg w-100">
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

<!-- Web3Forms No-Reload Fetch Logic -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('contactForm');
    const result = document.getElementById('formResult');
    const submitBtn = document.getElementById('submitBtn');
    const originalBtnText = submitBtn.innerHTML;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Disable the button to prevent duplicate sends
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        
        // Hide previous messages
        result.style.display = 'none';

        const formData = new FormData(form);
        const object = Object.fromEntries(formData);
        
        // Stringify the data to match JSON submission requirements of Web3Forms
        const json = JSON.stringify(object);

        // Replace default submission with fetch
        fetch('https://api.web3forms.com/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: json
        })
        .then(async (response) => {
            let json = await response.json();
            
            // Show inline user feedback without page reload
            result.style.display = 'block';
            
            if (response.status == 200) {
                // Success State from Web3Forms API
                result.className = 'alert alert-success mt-3 mb-0';
                result.innerHTML = '<i class="fas fa-check-circle me-2"></i>' + json.message;
                form.reset(); // clear the form
            } else {
                // Error State from Web3Forms API (e.g. invalid access key, rate limit)
                result.className = 'alert alert-danger mt-3 mb-0';
                result.innerHTML = '<i class="fas fa-exclamation-circle me-2"></i>' + (json.message || 'Something went wrong!');
            }
        })
        .catch(error => {
            // Network or Fetch error handling
            result.style.display = 'block';
            result.className = 'alert alert-danger mt-3 mb-0';
            result.innerHTML = '<i class="fas fa-exclamation-circle me-2"></i>Oops! We could not reach the server.';
        })
        .finally(() => {
            // Restore the submit button back to original state
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
            
            // Auto-dismiss the message gently after 8 seconds
            setTimeout(() => {
                result.style.display = 'none';
            }, 8000);
        });
    });
});
</script>
