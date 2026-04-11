<!-- Testimonials Section -->
<section id="testimonials" class="testimonials-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Client Feedback</span>
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">
                Don't just take our word for it — hear from our satisfied clients
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 100; ?>">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                        <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">
                        "<?php echo htmlspecialchars($testimonial['text']); ?>"
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h5><?php echo htmlspecialchars($testimonial['name']); ?></h5>
                            <span><?php echo htmlspecialchars($testimonial['role']); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
