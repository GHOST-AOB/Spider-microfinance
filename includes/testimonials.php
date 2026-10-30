<!-- Client Impact Stories & Worked Examples Carousel -->
<section id="testimonials" class="testimonials-section py-5">
    <div class="container py-lg-4">
        <div class="text-center max-w-750 mx-auto mb-5">
            <span class="section-tag mb-2 d-inline-block">Real Community Scenarios</span>
            <h2 class="section-title text-dark fw-bold mb-3">Illustrative Client Stories & Worked Examples</h2>
            <p class="section-subtitle text-muted">
                See how Spider Microfinance's products structure repayments for diverse Ugandan livelihoods — from market stalls and tailoring shops to maize farms and boda-boda repairs.
            </p>
        </div>

        <!-- Bootstrap 5 Carousel for Worked Examples -->
        <div id="workedExamplesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <?php foreach ($services as $index => $svc): ?>
                <button type="button" data-bs-target="#workedExamplesCarousel" data-bs-slide-to="<?php echo $index; ?>"
                        class="<?php echo $index === 0 ? 'active' : ''; ?>"
                        aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                        aria-label="Story <?php echo $index + 1; ?>"></button>
                <?php endforeach; ?>
            </div>

            <!-- Carousel Slides -->
            <div class="carousel-inner pb-5">
                <?php foreach ($services as $index => $svc): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="worked-example-card bg-white rounded-4 p-4 p-md-5 border shadow-sm">
                                <div class="row align-items-center gy-4">
                                    <!-- Story Details -->
                                    <div class="col-md-7">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <span class="badge bg-primary text-white rounded-pill px-3 py-1">
                                                <i class="fas <?php echo htmlspecialchars($svc['icon']); ?> me-1"></i>
                                                <?php echo htmlspecialchars($svc['title']); ?>
                                            </span>
                                            <span class="badge bg-warm text-muted border">Illustrative Example</span>
                                        </div>

                                        <h4 class="fw-bold text-dark mb-3">
                                            <?php echo htmlspecialchars($svc['worked_example']['title']); ?>
                                        </h4>
                                        <p class="lead fs-6 text-muted mb-4">
                                            "<?php echo htmlspecialchars($svc['worked_example']['story']); ?>"
                                        </p>

                                        <div class="example-quote-author border-start border-3 border-accent ps-3">
                                            <strong class="d-block text-dark small">Product Alignment</strong>
                                            <span class="text-muted x-small"><?php echo htmlspecialchars($svc['tagline']); ?></span>
                                        </div>
                                    </div>

                                    <!-- Indicative Breakdown Table -->
                                    <div class="col-md-5">
                                        <div class="example-numbers-box rounded-3 p-3 bg-warm border">
                                            <h6 class="fw-bold text-dark mb-2 pb-2 border-bottom">
                                                <i class="fas fa-file-invoice-dollar text-primary me-1"></i> Indicative Breakdown
                                            </h6>
                                            <div class="table-responsive">
                                                <table class="table table-sm table-borderless mb-0 x-small">
                                                    <tbody>
                                                        <?php foreach ($svc['worked_example']['table'] as $row): ?>
                                                        <tr>
                                                            <td class="text-muted ps-0"><?php echo htmlspecialchars($row['item']); ?></td>
                                                            <td class="fw-bold text-end text-dark pe-0"><?php echo htmlspecialchars($row['amount']); ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="mt-2 pt-2 border-top text-muted xx-small fst-italic">
                                                <?php echo htmlspecialchars($svc['worked_example']['note'] ?: 'Example excludes fees, insurance and compulsory savings, which are detailed in the loan offer letter.'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#workedExamplesCarousel" data-bs-slide="prev" aria-label="Previous story">
                <span class="carousel-control-prev-icon p-3 rounded-circle bg-dark-soft" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#workedExamplesCarousel" data-bs-slide="next" aria-label="Next story">
                <span class="carousel-control-next-icon p-3 rounded-circle bg-dark-soft" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>
