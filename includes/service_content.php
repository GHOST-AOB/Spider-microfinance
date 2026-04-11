<!-- ============================================================
     Service Page Main Content Template
     Requires: $current_service, $services, $base_url
     ============================================================ -->

<!-- ── 1. BENEFITS ─────────────────────────────────────────── -->
<section class="service-benefits-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Why Choose Us</span>
            <h2 class="section-title">Key Benefits</h2>
            <p class="section-subtitle">
                Everything you gain when you partner with SpiderWebUG for
                <?php echo htmlspecialchars($current_service['title']); ?>
            </p>
        </div>
        <div class="row g-4">
            <?php foreach ($current_service['benefits'] as $i => $benefit): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo ($i % 3 + 1) * 100; ?>">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas <?php echo htmlspecialchars($benefit['icon']); ?>"></i>
                    </div>
                    <h4><?php echo htmlspecialchars($benefit['title']); ?></h4>
                    <p><?php echo htmlspecialchars($benefit['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── 2. DELIVERABLES ─────────────────────────────────────── -->
<section class="service-deliverables-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">What You Get</span>
            <h2 class="section-title">What We Deliver</h2>
            <p class="section-subtitle">A complete breakdown of every feature and asset included in your project</p>
        </div>
        <div class="row g-4">
            <?php foreach ($current_service['deliverables'] as $i => $group): ?>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?php echo ($i + 1) * 150; ?>">
                <div class="deliverable-card">
                    <h4><i class="fas fa-check-double me-2"></i><?php echo htmlspecialchars($group['title']); ?></h4>
                    <ul class="deliverable-list">
                        <?php foreach ($group['items'] as $item): ?>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php echo htmlspecialchars($item); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── 3. PROCESS ─────────────────────────────────────────── -->
<section class="service-process-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">How We Work</span>
            <h2 class="section-title">Our Approach</h2>
            <p class="section-subtitle">A structured process that keeps every project on time, on scope, and on budget</p>
        </div>
        <div class="row">
            <?php foreach ($current_service['page_process'] as $i => $step): ?>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?php echo ($i + 1) * 100; ?>">
                <div class="process-step">
                    <div class="process-number"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
                    <div class="process-icon">
                        <i class="fas <?php echo htmlspecialchars($step['icon']); ?>"></i>
                    </div>
                    <h4><?php echo htmlspecialchars($step['title']); ?></h4>
                    <p><?php echo htmlspecialchars($step['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── 4. PRICING ─────────────────────────────────────────── -->
<section id="pricing" class="service-pricing-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Transparent Pricing</span>
            <h2 class="section-title">Choose Your Plan</h2>
            <p class="section-subtitle">Clear, honest pricing — no hidden fees, no surprises</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($current_service['pricing'] as $i => $plan): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo ($i + 1) * 100; ?>">
                <div class="pricing-card<?php echo $plan['featured'] ? ' pricing-featured' : ''; ?>">
                    <?php if ($plan['featured']): ?>
                    <div class="pricing-badge">Most Popular</div>
                    <?php endif; ?>
                    <div class="pricing-header">
                        <h4><?php echo htmlspecialchars($plan['name']); ?></h4>
                        <p class="pricing-desc"><?php echo htmlspecialchars($plan['desc']); ?></p>
                        <div class="pricing-amount">
                            <?php if ($plan['price'] === 'Custom'): ?>
                            <span class="price-value">Custom</span>
                            <?php else: ?>
                            <span class="price-currency">$</span>
                            <span class="price-value"><?php echo htmlspecialchars($plan['price']); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($plan['period'])): ?>
                            <span class="price-period"><?php echo htmlspecialchars($plan['period']); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li>
                            <i class="fas fa-check"></i>
                            <?php echo htmlspecialchars($feature); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo $base_url; ?>#contact" class="btn <?php echo $plan['featured'] ? 'btn-primary-custom' : 'btn-outline-pricing'; ?> w-100">
                        <?php echo htmlspecialchars($plan['cta']); ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center mt-4 pricing-note">
            <i class="fas fa-info-circle me-1"></i>
            All prices are in USD. Custom quotes available for complex projects.
            <a href="<?php echo $base_url; ?>#contact">Get a free estimate →</a>
        </p>
    </div>
</section>

<!-- ── 5. FAQ ──────────────────────────────────────────────── -->
<section class="service-faq-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="section-tag">FAQ</span>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-subtitle">Answers to the most common questions about our <?php echo htmlspecialchars($current_service['title']); ?> service</p>
                </div>
                <div class="accordion service-accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">
                    <?php foreach ($current_service['faq'] as $i => $qa): ?>
                    <div class="accordion-item service-accordion-item">
                        <h3 class="accordion-header" id="faqHeading<?php echo $i; ?>">
                            <button class="accordion-button<?php echo $i !== 0 ? ' collapsed' : ''; ?> service-accordion-btn"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse<?php echo $i; ?>"
                                    aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                                    aria-controls="faqCollapse<?php echo $i; ?>">
                                <i class="fas fa-question-circle me-2"></i>
                                <?php echo htmlspecialchars($qa['q']); ?>
                            </button>
                        </h3>
                        <div id="faqCollapse<?php echo $i; ?>"
                             class="accordion-collapse collapse<?php echo $i === 0 ? ' show' : ''; ?>"
                             aria-labelledby="faqHeading<?php echo $i; ?>"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body service-accordion-body">
                                <?php echo htmlspecialchars($qa['a']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── 6. RELATED SERVICES ────────────────────────────────── -->
<section class="related-services-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Explore More</span>
            <h2 class="section-title">Related Services</h2>
            <p class="section-subtitle">Combine services for a complete end-to-end digital solution</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $related_cards = array_filter($services, function($s) use ($current_service) {
                return in_array($s['slug'], $current_service['related']);
            });
            foreach (array_values($related_cards) as $i => $rel):
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo ($i + 1) * 100; ?>">
                <a href="<?php echo $base_url . htmlspecialchars($rel['url']); ?>" class="related-card-link">
                    <div class="related-service-card">
                        <div class="service-icon">
                            <i class="fas <?php echo htmlspecialchars($rel['icon']); ?>"></i>
                        </div>
                        <h4><?php echo htmlspecialchars($rel['title']); ?></h4>
                        <p><?php echo htmlspecialchars(mb_strimwidth($rel['description'], 0, 100, '…')); ?></p>
                        <span class="related-service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── 7. CTA BANNER ──────────────────────────────────────── -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row align-items-center" data-aos="zoom-in">
            <div class="col-lg-8">
                <h2 class="mb-3">
                    Ready to get started with <?php echo htmlspecialchars($current_service['title']); ?>?
                </h2>
                <p class="lead mb-0">
                    Let's talk about your project. Get a free consultation and detailed quote from our expert team.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="<?php echo $base_url; ?>#contact" class="btn btn-light btn-lg">
                    <i class="fas fa-comments"></i> Free Consultation
                </a>
            </div>
        </div>
    </div>
</section>
