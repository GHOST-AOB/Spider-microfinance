<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Our Work</span>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">
                Explore some of our recent projects and see how we've helped businesses succeed
            </p>
        </div>

        <!-- Large featured projects (first 2) -->
        <div class="row g-4 mb-4">
            <?php foreach (array_slice($portfolio, 0, 2) as $index => $project): ?>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 100; ?>">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>"
                             alt="<?php echo htmlspecialchars($project['title']); ?>" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4><?php echo htmlspecialchars($project['title']); ?></h4>
                                <p><?php echo htmlspecialchars($project['description']); ?></p>
                                <?php foreach ($project['tags'] as $tag): ?>
                                <span class="badge bg-primary-custom"><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Smaller projects (remaining) -->
        <div class="row g-4">
            <?php foreach (array_slice($portfolio, 2) as $index => $project): ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 100; ?>">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>"
                             alt="<?php echo htmlspecialchars($project['title']); ?>" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h4><?php echo htmlspecialchars($project['title']); ?></h4>
                                <p><?php echo htmlspecialchars($project['description']); ?></p>
                                <?php foreach ($project['tags'] as $tag): ?>
                                <span class="badge bg-primary-custom"><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
