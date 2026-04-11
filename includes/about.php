<!-- About Section -->
<section id="about" class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop"
                         alt="SpiderWebUG Team collaborating on web projects" class="img-fluid rounded-custom">
                    <div class="about-badge">
                        <i class="fas fa-award"></i>
                        <span><?php echo $about['experience']; ?> Experience</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-header">
                    <span class="section-tag">Who We Are</span>
                    <h2 class="section-title">Building Digital Solutions That Matter</h2>
                </div>
                <p class="lead mb-4">
                    <?php echo htmlspecialchars($about['lead']); ?>
                </p>
                <p class="mb-4">
                    <?php echo htmlspecialchars($about['body']); ?>
                </p>
                <div class="about-features">
                    <?php foreach ($about['features'] as $feature): ?>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo htmlspecialchars($feature); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
