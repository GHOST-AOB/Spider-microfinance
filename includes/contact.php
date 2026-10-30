<!-- Contact & Branches Section -->
<section id="contact" class="contact-section py-5 bg-warm">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tag mb-2 d-inline-block">Get in Touch</span>
            <h2 class="section-title text-dark fw-bold mb-3">Visit a Branch or Inquire Today</h2>
            <p class="section-subtitle text-muted">
                Our loan officers are based in the community and ready to visit your business or farm. Reach out by phone, WhatsApp, email, or send an inquiry below.
            </p>
        </div>

        <div class="row g-4 gy-5">
            <!-- Left Column: Contact Cards & Branch Network -->
            <div class="col-lg-5">
                <div class="d-flex flex-column gap-3 mb-4">
                    <!-- Head Office Card -->
                    <div class="contact-info-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm">
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon-box text-primary">
                                <i class="fas fa-location-dot fa-xl"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Head Office</h6>
                                <p class="text-muted small mb-1"><?php echo htmlspecialchars($contact_info['head_office']); ?></p>
                                <span class="text-muted x-small d-block">Postal: <?php echo htmlspecialchars($contact_info['postal_address']); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Phone & Mobile Money Line -->
                    <div class="contact-info-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm">
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon-box text-accent">
                                <i class="fas fa-phone-volume fa-xl"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Telephone & Inquiries</h6>
                                <p class="text-muted small mb-1">
                                    General Line: <strong><?php echo htmlspecialchars($contact_info['phone']); ?></strong>
                                </p>
                                <p class="text-muted small mb-0">
                                    WhatsApp / MoMo Line: <strong><?php echo htmlspecialchars($contact_info['whatsapp_momo']); ?></strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Email & Working Hours -->
                    <div class="contact-info-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm">
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon-box text-primary">
                                <i class="fas fa-envelope-open-text fa-xl"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Email & Working Hours</h6>
                                <p class="text-muted small mb-1">
                                    Email: <a href="mailto:<?php echo htmlspecialchars($contact_info['email']); ?>" class="text-primary text-decoration-none"><?php echo htmlspecialchars($contact_info['email']); ?></a>
                                </p>
                                <span class="text-muted x-small d-block">
                                    <i class="fas fa-clock text-accent me-1"></i> <?php echo htmlspecialchars($contact_info['working_hours']); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Branch Directory Table / Card -->
                <div class="branch-directory-card bg-white p-3 p-xl-4 rounded-4 border shadow-sm mb-4">
                    <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom d-flex align-items-center gap-2">
                        <i class="fas fa-building-columns text-primary"></i> Branch Locations
                    </h6>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless align-middle mb-0 small">
                            <thead>
                                <tr class="text-muted border-bottom x-small">
                                    <th>Branch</th>
                                    <th>Location</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contact_info['branches'] as $b): ?>
                                <tr>
                                    <td class="fw-bold text-dark"><?php echo htmlspecialchars($b['name']); ?></td>
                                    <td class="text-muted"><?php echo htmlspecialchars($b['location']); ?></td>
                                    <td class="text-muted"><?php echo htmlspecialchars($b['phone']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Complaints & UMRA Escalation Notice -->
                <div class="complaints-notice-box bg-white p-3 rounded-3 border-start border-4 border-warning shadow-sm">
                    <div class="d-flex align-items-start gap-2">
                        <i class="fas fa-shield-halved text-warning mt-1"></i>
                        <div>
                            <strong class="d-block text-dark small">Client Complaints & UMRA Oversight</strong>
                            <p class="x-small text-muted mb-0">
                                <?php echo htmlspecialchars($contact_info['complaints']['procedure']); ?> Email: <a href="mailto:<?php echo htmlspecialchars($contact_info['complaints']['email']); ?>" class="text-dark fw-bold"><?php echo htmlspecialchars($contact_info['complaints']['email']); ?></a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Consultation & Loan Inquiry Form -->
            <div class="col-lg-7">
                <div class="inquiry-form-card bg-white p-4 p-xl-5 rounded-4 border shadow-sm">
                    <div class="mb-4">
                        <span class="badge bg-primary-soft text-primary mb-2">Fast Response</span>
                        <h3 class="fw-bold text-dark mb-2">Request Loan Consultation</h3>
                        <p class="text-muted small mb-0">
                            Fill out this simple request and a loan officer will contact you to discuss your options with zero obligation.
                        </p>
                    </div>

                    <form id="loanInquiryForm" class="loan-inquiry-form" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inquiryName" class="form-label small fw-bold text-dark">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inquiryName" placeholder="e.g. Sarah Nakato" required>
                                <div class="invalid-feedback small">Please provide your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inquiryPhone" class="form-label small fw-bold text-dark">Phone Number (MTN / Airtel) <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="inquiryPhone" placeholder="e.g. 0770 000 000" required>
                                <div class="invalid-feedback small">Please provide a valid phone number.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="inquiryLocation" class="form-label small fw-bold text-dark">Town / District / Service Area <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inquiryLocation" placeholder="e.g. Kampala, Mukono, Wakiso" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inquiryProduct" class="form-label small fw-bold text-dark">Loan Product Needed <span class="text-danger">*</span></label>
                                <select class="form-select" id="inquiryProduct" required>
                                    <option value="" selected disabled>Select a loan product...</option>
                                    <?php foreach ($services as $svc): ?>
                                    <option value="<?php echo htmlspecialchars($svc['slug']); ?>"><?php echo htmlspecialchars($svc['title']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="inquiryAmount" class="form-label small fw-bold text-dark">Approximate Loan Amount (UGX)</label>
                                <input type="text" class="form-control" id="inquiryAmount" placeholder="e.g. UGX 1,500,000">
                            </div>

                            <div class="col-12">
                                <label for="inquiryDetails" class="form-label small fw-bold text-dark">Tell Us About Your Business or Need</label>
                                <textarea class="form-control" id="inquiryDetails" rows="4" placeholder="Briefly describe your business activity, group, or intended use of funds..."></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-check small text-muted">
                                    <input class="form-check-input" type="checkbox" id="inquiryConsent" required>
                                    <label class="form-check-label" for="inquiryConsent">
                                        I confirm that I am aged 18 or above and consent to a Spider Microfinance loan officer contacting me regarding my inquiry.
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-custom w-100 py-3 fw-bold">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Loan Inquiry
                                </button>
                            </div>
                        </div>

                        <!-- Form Feedback Area -->
                        <div id="inquiryAlert" class="alert d-none mt-3 mb-0" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
