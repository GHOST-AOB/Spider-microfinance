/**
 * ==============================================================================
 * SPIDER MICROFINANCE – JAVASCRIPT CONTROLLER (main.js)
 * ==============================================================================
 * Minimal, readable, zero-dependency vanilla JS powering:
 * 1. Microfinance Preloader (graceful fade-out with timeout fallback)
 * 2. Sticky Navbar & Mobile Collapse
 * 3. Services Category Filter
 * 4. Interactive Loan Repayment Calculator
 * 5. Scroll-to-Top Button
 * 6. Consultation Inquiry Form Validation
 * ==============================================================================
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // --------------------------------------------------------------------------
    // 1. PRELOADER CONTROLLER
    // --------------------------------------------------------------------------
    const preloader = document.getElementById('preloader');
    if (preloader) {
        const hidePreloader = function () {
            preloader.classList.add('preloader-hidden');
            setTimeout(function () {
                if (preloader.parentNode) {
                    preloader.style.display = 'none';
                }
            }, 600);
        };

        // Hide on window complete load, or fallback after 1.2s max
        if (document.readyState === 'complete') {
            setTimeout(hidePreloader, 300);
        } else {
            window.addEventListener('load', function () {
                setTimeout(hidePreloader, 200);
            });
            setTimeout(hidePreloader, 1500); // Fail-safe
        }
    }

    // --------------------------------------------------------------------------
    // 2. STICKY NAVBAR & AUTO-COLLAPSE ON MOBILE
    // --------------------------------------------------------------------------
    const navbar = document.getElementById('mainNavbar');
    const navbarCollapse = document.getElementById('navbarContent');

    if (navbar) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 30) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
            }
        });
    }

    // Auto-close mobile navbar on clicking anchor links
    if (navbarCollapse) {
        const navLinks = navbarCollapse.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item');
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            });
        });
    }

    // --------------------------------------------------------------------------
    // 3. SERVICES CATEGORY FILTER
    // --------------------------------------------------------------------------
    const filterButtons = document.querySelectorAll('.services-filter-nav .btn-filter');
    const serviceItems = document.querySelectorAll('#servicesGrid .service-item');

    if (filterButtons.length > 0 && serviceItems.length > 0) {
        filterButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                serviceItems.forEach(function (item) {
                    const itemCat = item.getAttribute('data-category');
                    if (filter === 'all' || itemCat === filter) {
                        item.classList.remove('d-none');
                    } else {
                        item.classList.add('d-none');
                    }
                });
            });
        });
    }

    // --------------------------------------------------------------------------
    // 4. INTERACTIVE LOAN REPAYMENT CALCULATOR
    // --------------------------------------------------------------------------
    const calcProductSelect = document.getElementById('calcProductSelect');
    const calcAmountRange   = document.getElementById('calcAmountRange');
    const calcAmountInput   = document.getElementById('calcAmountInput');
    const calcAmountDisplay = document.getElementById('calcAmountDisplay');
    const calcTenureRange   = document.getElementById('calcTenureRange');
    const calcTenureDisplay = document.getElementById('calcTenureDisplay');
    const calcMonthlyOutput = document.getElementById('calcMonthlyInstalment');
    const calcPrincipalDisp = document.getElementById('calcPrincipalDisplay');
    const calcTotalDisp     = document.getElementById('calcTotalDisplay');

    // Product configurations (min, max, default, maxTenure)
    const productLimits = {
        'group-loans':                  { min: 50000,   max: 2000000,  def: 500000,  maxTenure: 12, rate: 0.025 },
        'individual-business-loans':    { min: 500000,  max: 20000000, def: 5000000, maxTenure: 24, rate: 0.022 },
        'agricultural-loans':           { min: 300000,  max: 15000000, def: 2000000, maxTenure: 18, rate: 0.020 },
        'salary-loans':                 { min: 300000,  max: 10000000, def: 3000000, maxTenure: 24, rate: 0.020 },
        'school-fees-loans':            { min: 200000,  max: 5000000,  def: 1200000, maxTenure: 9,  rate: 0.020 },
        'emergency-loans':              { min: 50000,   max: 1000000,  def: 300000,  maxTenure: 3,  rate: 0.025 },
        'asset-equipment-financing':    { min: 500000,  max: 15000000, def: 6000000, maxTenure: 36, rate: 0.022 },
        'youth-women-enterprise-loans': { min: 100000,  max: 5000000,  def: 1500000, maxTenure: 18, rate: 0.020 }
    };

    function formatUGX(amount) {
        return 'UGX ' + Math.round(amount).toLocaleString('en-US');
    }

    function calculateLoan() {
        if (!calcProductSelect || !calcAmountRange || !calcTenureRange) return;

        const selectedSlug = calcProductSelect.value;
        const config = productLimits[selectedSlug] || { min: 100000, max: 10000000, def: 1000000, maxTenure: 12, rate: 0.022 };

        const principal = parseFloat(calcAmountRange.value) || config.def;
        const tenureMonths = parseInt(calcTenureRange.value, 10) || 6;
        const monthlyRate = config.rate;

        // Illustrative flat rate calculation matching PDF worked examples:
        // Total Interest = Principal * (Rate * Months)
        // Total to Repay = Principal + Total Interest
        // Monthly Instalment = Total to Repay / Months
        const totalInterest = principal * monthlyRate * tenureMonths;
        const totalToRepay = principal + totalInterest;
        const monthlyInstalment = totalToRepay / tenureMonths;

        if (calcAmountDisplay) calcAmountDisplay.textContent = formatUGX(principal);
        if (calcTenureDisplay) calcTenureDisplay.textContent = tenureMonths + (tenureMonths === 1 ? ' Month' : ' Months');
        if (calcMonthlyOutput) calcMonthlyOutput.textContent = formatUGX(monthlyInstalment);
        if (calcPrincipalDisp) calcPrincipalDisp.textContent = formatUGX(principal);
        if (calcTotalDisp)     calcTotalDisp.textContent = formatUGX(totalToRepay);
    }

    if (calcProductSelect && calcAmountRange) {
        // When user changes loan product, adjust range slider min/max/default
        calcProductSelect.addEventListener('change', function () {
            const cfg = productLimits[this.value];
            if (cfg) {
                calcAmountRange.min = cfg.min;
                calcAmountRange.max = cfg.max;
                calcAmountRange.value = cfg.def;
                if (calcAmountInput) calcAmountInput.value = cfg.def;
                calcTenureRange.max = cfg.maxTenure;
                if (parseInt(calcTenureRange.value, 10) > cfg.maxTenure) {
                    calcTenureRange.value = cfg.maxTenure;
                }
                calculateLoan();
            }
        });

        calcAmountRange.addEventListener('input', function () {
            if (calcAmountInput) calcAmountInput.value = this.value;
            calculateLoan();
        });

        if (calcAmountInput) {
            calcAmountInput.addEventListener('input', function () {
                calcAmountRange.value = this.value;
                calculateLoan();
            });
        }

        calcTenureRange.addEventListener('input', calculateLoan);

        // Initial calculation run
        calculateLoan();
    }

    // --------------------------------------------------------------------------
    // 5. SCROLL TO TOP BUTTON
    // --------------------------------------------------------------------------
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    if (scrollTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 350) {
                scrollTopBtn.classList.add('btn-show');
            } else {
                scrollTopBtn.classList.remove('btn-show');
            }
        });

        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // --------------------------------------------------------------------------
    // 6. CONSULTATION INQUIRY FORM VALIDATION
    // --------------------------------------------------------------------------
    const inquiryForm = document.getElementById('loanInquiryForm');
    const inquiryAlert = document.getElementById('inquiryAlert');

    if (inquiryForm && inquiryAlert) {
        inquiryForm.addEventListener('submit', function (e) {
            e.preventDefault();

            if (!inquiryForm.checkValidity()) {
                e.stopPropagation();
                inquiryForm.classList.add('was-validated');
                return;
            }

            const nameInput = document.getElementById('inquiryName');
            const borrowerName = nameInput ? nameInput.value.trim() : 'Valued Client';

            // Show friendly success confirmation alert
            inquiryAlert.className = 'alert alert-success mt-3 mb-0';
            inquiryAlert.innerHTML = '<i class="fas fa-circle-check me-2"></i>' +
                'Thank you, <strong>' + borrowerName + '</strong>! Your loan consultation request has been received. A Spider Microfinance loan officer will contact you within 24 hours to discuss your options.';
            inquiryAlert.classList.remove('d-none');

            inquiryForm.reset();
            inquiryForm.classList.remove('was-validated');

            // Scroll alert into view
            inquiryAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }
});
