<!-- Process Section -->
<section id="process" class="process-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">How We Work</span>
            <h2 class="section-title">Our Development Process</h2>
            <p class="section-subtitle">
                A proven methodology that ensures quality, transparency, and timely delivery
            </p>
        </div>

        <div class="row">
            <?php foreach ($process as $index => $step): ?>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 100; ?>">
                <div class="process-step">
                    <div class="process-number"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
                    <div class="process-icon">
                        <i class="fas <?php echo htmlspecialchars($step['icon']); ?>"></i>
                    </div>
                    <h4><?php echo htmlspecialchars($step['title']); ?></h4>
                    <p><?php echo htmlspecialchars($step['description']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
