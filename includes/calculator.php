<!-- Interactive Loan Calculator Component -->
<section id="calculator" class="calculator-section py-5 bg-warm position-relative">
    <div class="container py-lg-4">
        <div class="calculator-wrapper rounded-4 bg-white p-4 p-lg-5 shadow-lg border">
            <div class="row gy-4 align-items-center">
                <!-- Left: Controls -->
                <div class="col-lg-6">
                    <span class="section-tag mb-2 d-inline-block">Plan Your Finances</span>
                    <h2 class="section-title text-dark fw-bold mb-3">Illustrative Loan Calculator</h2>
                    <p class="text-muted small mb-4">
                        Use this calculator to get an indicative sense of monthly instalments and repayment planning before applying.
                    </p>

                    <!-- Form Controls -->
                    <form id="loanCalculatorForm" class="calculator-form" onsubmit="return false;">
                        <!-- Select Loan Product -->
                        <div class="mb-3">
                            <label for="calcProductSelect" class="form-label fw-bold text-dark small">Select Loan Product</label>
                            <select id="calcProductSelect" class="form-select form-select-lg">
                                <?php foreach ($services as $svc): ?>
                                <option value="<?php echo htmlspecialchars($svc['slug']); ?>">
                                    <?php echo htmlspecialchars($svc['title']); ?> (<?php echo htmlspecialchars($svc['loan_size']); ?>)
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Loan Principal Input & Slider -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="calcAmountInput" class="form-label fw-bold text-dark small mb-0">Loan Amount (UGX)</label>
                                <span id="calcAmountDisplay" class="fw-bold text-primary">UGX 1,000,000</span>
                            </div>
                            <input type="range" class="form-range" id="calcAmountRange" min="100000" max="10000000" step="50000" value="1000000">
                            <input type="number" class="form-control mt-2" id="calcAmountInput" value="1000000" step="10000">
                        </div>

                        <!-- Tenure Input & Slider -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="calcTenureInput" class="form-label fw-bold text-dark small mb-0">Repayment Period (Months)</label>
                                <span id="calcTenureDisplay" class="fw-bold text-primary">6 Months</span>
                            </div>
                            <input type="range" class="form-range" id="calcTenureRange" min="1" max="24" step="1" value="6">
                        </div>
                    </form>
                </div>

                <!-- Right: Summary Output Card -->
                <div class="col-lg-6">
                    <div class="calculator-result-card rounded-4 p-4 p-xl-5 text-white bg-primary position-relative overflow-hidden">
                        <div class="calc-card-watermark">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h4 class="fw-bold mb-4">Estimated Repayment</h4>

                        <div class="calc-output-group mb-3 pb-3 border-bottom border-light-subtle">
                            <span class="d-block text-white-50 small">Approximate Monthly Instalment</span>
                            <h2 class="display-6 fw-bold mb-0 text-accent" id="calcMonthlyInstalment">UGX 191,667</h2>
                            <small class="text-white-50 x-small">*Excluding insurance/savings fees</small>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <span class="d-block text-white-50 x-small">Indicative Principal</span>
                                <span class="fw-bold fs-6" id="calcPrincipalDisplay">UGX 1,000,000</span>
                            </div>
                            <div class="col-6">
                                <span class="d-block text-white-50 x-small">Est. Total to Repay</span>
                                <span class="fw-bold fs-6" id="calcTotalDisplay">UGX 1,150,000</span>
                            </div>
                        </div>

                        <!-- Disclaimer Box -->
                        <div class="calc-note p-3 rounded-2 bg-dark-soft mb-4">
                            <p class="x-small text-white-75 mb-0">
                                <i class="fas fa-circle-exclamation me-1 text-accent"></i>
                                <strong>Illustrative Only:</strong> As noted in our company profile, calculations assume an illustrative monthly rate for planning purposes. Official rates, reducing balance terms, and schedules are provided in your formal offer letter.
                            </p>
                        </div>

                        <a href="#contact" class="btn btn-accent-custom w-100 py-3 fw-bold">
                            <i class="fas fa-paper-plane me-1"></i> Apply for This Loan Amount
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
