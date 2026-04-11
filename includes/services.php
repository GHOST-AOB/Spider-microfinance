<!-- Services Section -->
<section id="services" class="services-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">What We Offer</span>
            <h2 class="section-title">Comprehensive Digital Services</h2>
            <p class="section-subtitle">
                From concept to deployment, we provide end-to-end solutions tailored to your business needs
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($services as $index => $service): ?>
            <?php $delay = (($index % 3) + 1) * 100; ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <div class="service-card<?php echo !empty($service['featured']) ? ' featured' : ''; ?>">
                    <?php if (!empty($service['featured'])): ?>
                    <div class="featured-badge">Most Popular</div>
                    <?php endif; ?>
                    <div class="service-icon">
                        <i class="fas <?php echo htmlspecialchars($service['icon']); ?>"></i>
                    </div>
                    <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                    <p><?php echo htmlspecialchars($service['description']); ?></p>
                    <ul class="service-list">
                        <?php foreach ($service['items'] as $item): ?>
                        <li><i class="fas fa-angle-right"></i> <?php echo htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo $base_url . htmlspecialchars($service['url']); ?>" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
