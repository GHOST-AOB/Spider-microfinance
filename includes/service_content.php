<!-- Main Content for Service Detail Subpages -->
<div class="service-detail-wrapper py-5">
    <div class="container py-lg-4">
        <div class="row g-4 gy-5">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <!-- 1. Overview -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <span class="section-tag mb-2 d-inline-block">Product Overview</span>
                    <h3 class="fw-bold text-dark mb-3">Understanding the <?php echo htmlspecialchars($current_service['title']); ?></h3>
                    <?php foreach ($current_service['overview'] as $para): ?>
                    <p class="text-muted leading-relaxed"><?php echo htmlspecialchars($para); ?></p>
                    <?php endforeach; ?>
                </section>

                <!-- 2. Who this loan is for -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="fas fa-users-line text-primary fa-xl"></i>
                        <h4 class="fw-bold text-dark mb-0">Who This Loan is For</h4>
                    </div>
                    <p class="text-muted small mb-3">This product is designed around the specific financial realities of:</p>
                    <div class="row g-2">
                        <?php foreach ($current_service['who_for'] as $item): ?>
                        <div class="col-12">
                            <div class="d-flex align-items-start gap-2 bg-warm p-2 px-3 rounded-2 border">
                                <i class="fas fa-check text-primary mt-1"></i>
                                <span class="small text-dark"><?php echo htmlspecialchars($item); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- 3. Loan at a glance Table -->
                <section id="glance" class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-table-list text-accent fa-xl"></i>
                            <h4 class="fw-bold text-dark mb-0">Loan at a Glance</h4>
                        </div>
                        <span class="badge bg-warm text-muted border small">Indicative Terms</span>
                    </div>
                    <div class="table-responsive rounded-3 border">
                        <table class="table table-hover align-middle mb-0 small">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3 text-uppercase text-muted fw-bold x-small">Feature</th>
                                    <th class="pe-3 text-uppercase text-muted fw-bold x-small">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($current_service['glance'] as $g): ?>
                                <tr>
                                    <td class="ps-3 fw-bold text-dark w-40"><?php echo htmlspecialchars($g['feature']); ?></td>
                                    <td class="pe-3 text-muted"><?php echo htmlspecialchars($g['details']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- 4. What the loan can be used for & Not permitted -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="fas fa-circle-check text-primary fa-xl"></i>
                        <h4 class="fw-bold text-dark mb-0">Eligible Uses & Purpose</h4>
                    </div>
                    <div class="row g-2 mb-4">
                        <?php foreach ($current_service['can_use_for'] as $use): ?>
                        <div class="col-md-6">
                            <div class="p-2 px-3 rounded-2 bg-warm border h-100 d-flex align-items-start gap-2">
                                <i class="fas fa-arrow-right text-primary mt-1 small"></i>
                                <span class="small text-dark"><?php echo htmlspecialchars($use); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if (!empty($current_service['not_permitted'])): ?>
                    <div class="alert alert-warning border-0 rounded-3 p-3 mb-0">
                        <div class="d-flex align-items-start gap-2">
                            <i class="fas fa-triangle-exclamation text-warning mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">Strictly Not Permitted:</strong>
                                <span class="small text-muted"><?php echo htmlspecialchars($current_service['not_permitted']); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </section>

                <!-- 5. Eligibility Criteria & Documents Required (Dual Columns) -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h5 class="fw-bold text-dark mb-3 pb-2 border-bottom d-flex align-items-center gap-2">
                                <i class="fas fa-user-check text-primary"></i> Eligibility Criteria
                            </h5>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small text-muted">
                                <?php foreach ($current_service['eligibility'] as $item): ?>
                                <li class="d-flex align-items-start gap-2">
                                    <i class="fas fa-check-circle text-primary mt-1"></i>
                                    <span><?php echo htmlspecialchars($item); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="fw-bold text-dark mb-3 pb-2 border-bottom d-flex align-items-center gap-2">
                                <i class="fas fa-folder-open text-accent"></i> Required Documents
                            </h5>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small text-muted">
                                <?php foreach ($current_service['documents'] as $doc): ?>
                                <li class="d-flex align-items-start gap-2">
                                    <i class="fas fa-file-lines text-accent mt-1"></i>
                                    <span><?php echo htmlspecialchars($doc); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 6. Security and Guarantees -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="fas fa-shield-halved text-primary fa-xl"></i>
                        <h4 class="fw-bold text-dark mb-0">Security and Guarantees</h4>
                    </div>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small text-muted">
                        <?php foreach ($current_service['security'] as $sec): ?>
                        <li class="d-flex align-items-start gap-2 bg-warm p-2 px-3 rounded-2 border">
                            <i class="fas fa-lock text-primary mt-1"></i>
                            <span class="text-dark"><?php echo htmlspecialchars($sec); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>

                <!-- 7. Application and Approval Process -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="fas fa-list-ol text-primary fa-xl"></i>
                        <h4 class="fw-bold text-dark mb-0">Application & Approval Steps</h4>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <?php foreach ($current_service['process'] as $step_idx => $step_desc): ?>
                        <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-warm border">
                            <span class="badge bg-primary rounded-circle p-2 px-3 fw-bold"><?php echo $step_idx + 1; ?></span>
                            <span class="small text-dark pt-1"><?php echo htmlspecialchars($step_desc); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- 8. Repayment Terms & Key Benefits (Dual Columns) -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h5 class="fw-bold text-dark mb-3 pb-2 border-bottom d-flex align-items-center gap-2">
                                <i class="fas fa-calendar-check text-primary"></i> Repayment Terms
                            </h5>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small text-muted">
                                <?php foreach ($current_service['repayment_terms'] as $rt): ?>
                                <li class="d-flex align-items-start gap-2">
                                    <i class="fas fa-check text-primary mt-1"></i>
                                    <span><?php echo htmlspecialchars($rt); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="fw-bold text-dark mb-3 pb-2 border-bottom d-flex align-items-center gap-2">
                                <i class="fas fa-star text-accent"></i> Key Benefits
                            </h5>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small text-muted">
                                <?php foreach ($current_service['benefits'] as $ben): ?>
                                <li class="d-flex align-items-start gap-2">
                                    <i class="fas fa-award text-accent mt-1"></i>
                                    <span><?php echo htmlspecialchars($ben); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 9. Borrower Responsibilities -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="fas fa-scale-balanced text-primary fa-xl"></i>
                        <h4 class="fw-bold text-dark mb-0">Borrower Responsibilities & Good Practice</h4>
                    </div>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small text-muted">
                        <?php foreach ($current_service['responsibilities'] as $resp): ?>
                        <li class="d-flex align-items-start gap-2 bg-warm p-2 px-3 rounded-2 border">
                            <i class="fas fa-circle-dot text-primary mt-1 small"></i>
                            <span class="text-dark"><?php echo htmlspecialchars($resp); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>

                <!-- 10. Worked Example (Illustrative Only) -->
                <section id="worked-example" class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="fas fa-calculator text-accent fa-xl"></i>
                        <h4 class="fw-bold text-dark mb-0"><?php echo htmlspecialchars($current_service['worked_example']['title']); ?></h4>
                    </div>
                    <p class="lead fs-6 text-muted mb-4">
                        "<?php echo htmlspecialchars($current_service['worked_example']['story']); ?>"
                    </p>

                    <div class="example-table-wrap rounded-3 border overflow-hidden mb-3">
                        <table class="table table-hover align-middle mb-0 small">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3 text-uppercase text-muted fw-bold x-small">Item</th>
                                    <th class="pe-3 text-uppercase text-muted fw-bold x-small text-end">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($current_service['worked_example']['table'] as $row): ?>
                                <tr>
                                    <td class="ps-3 text-dark"><?php echo htmlspecialchars($row['item']); ?></td>
                                    <td class="pe-3 fw-bold text-end text-dark"><?php echo htmlspecialchars($row['amount']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-light border small text-muted mb-0">
                        <i class="fas fa-circle-info text-primary me-1"></i>
                        <?php echo htmlspecialchars($current_service['worked_example']['note'] ?: 'Example excludes fees, insurance and compulsory savings, which are detailed in the loan offer letter.'); ?>
                    </div>
                </section>

                <!-- 11. Frequently Asked Questions -->
                <section class="service-content-block bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <i class="fas fa-circle-question text-primary fa-xl"></i>
                        <h4 class="fw-bold text-dark mb-0">Frequently Asked Questions</h4>
                    </div>
                    <div class="accordion" id="serviceFaqAccordion">
                        <?php foreach ($current_service['faqs'] as $q_idx => $faq): ?>
                        <div class="accordion-item border mb-2 rounded-2 overflow-hidden">
                            <h2 class="accordion-header" id="heading<?php echo $q_idx; ?>">
                                <button class="accordion-button <?php echo $q_idx === 0 ? '' : 'collapsed'; ?> fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $q_idx; ?>" aria-expanded="<?php echo $q_idx === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $q_idx; ?>">
                                    <?php echo htmlspecialchars($faq['q']); ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $q_idx; ?>" class="accordion-collapse collapse <?php echo $q_idx === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $q_idx; ?>" data-bs-parent="#serviceFaqAccordion">
                                <div class="accordion-body small text-muted bg-warm">
                                    <?php echo htmlspecialchars($faq['a']); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <div class="sticky-sidebar">
                    <!-- Quick Application Card -->
                    <div class="sidebar-apply-card bg-primary text-white rounded-4 p-4 mb-4 shadow-md">
                        <h5 class="fw-bold mb-2">Apply for this Product</h5>
                        <p class="small text-white-75 mb-3">
                            Connect with a loan officer in your district. Free business visits, simple paperwork, and no upfront broker fees.
                        </p>
                        <a href="<?php echo $base_url; ?>#contact" class="btn btn-accent-custom w-100 py-2 fw-bold mb-2">
                            <i class="fas fa-paper-plane me-1"></i> Send Loan Inquiry
                        </a>
                        <a href="tel:<?php echo htmlspecialchars($contact_info['phone']); ?>" class="btn btn-outline-light w-100 py-2 small">
                            <i class="fas fa-phone me-1"></i> Call <?php echo htmlspecialchars($contact_info['phone']); ?>
                        </a>
                    </div>

                    <!-- All 8 Loan Products Navigation -->
                    <div class="sidebar-nav-card bg-white rounded-4 p-4 border shadow-sm mb-4">
                        <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom">All 8 Loan Products</h6>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                            <?php foreach ($services as $s): ?>
                            <li>
                                <a href="<?php echo $base_url . htmlspecialchars($s['url']); ?>" class="sidebar-service-link d-flex align-items-center justify-content-between p-2 rounded-2 text-decoration-none <?php echo $s['slug'] === $current_service['slug'] ? 'active-sidebar-link' : ''; ?>">
                                    <span class="d-flex align-items-center gap-2 text-dark small fw-medium">
                                        <i class="fas <?php echo htmlspecialchars($s['icon']); ?> text-primary"></i>
                                        <?php echo htmlspecialchars($s['title']); ?>
                                    </span>
                                    <i class="fas fa-chevron-right text-muted x-small"></i>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Regulatory Assurance Box -->
                    <div class="sidebar-trust-box bg-warm rounded-4 p-4 border">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fas fa-shield-halved text-primary"></i>
                            <strong class="text-dark small">Client Protection Guarantee</strong>
                        </div>
                        <p class="x-small text-muted mb-2">
                            Spider Microfinance operates in full compliance with Uganda's Tier 4 Microfinance Institutions & Money Lenders Act, 2016 under UMRA oversight.
                        </p>
                        <span class="badge bg-white text-muted border x-small d-inline-block">No Hidden Penalties</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
