<!-- Technology Section -->
<section id="technology" class="technology-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Tech Stack</span>
            <h2 class="section-title">Technologies We Master</h2>
            <p class="section-subtitle">
                Modern tools and frameworks to build powerful digital solutions
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($technologies as $index => $tech): ?>
            <?php $delay = 100 + ($index % 4) * 50; ?>
            <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
                <div class="tech-card">
                    <i class="<?php echo htmlspecialchars($tech['icon']); ?>"></i>
                    <h5><?php echo htmlspecialchars($tech['name']); ?></h5>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
