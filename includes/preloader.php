<!-- Preloader Component (Spider Microfinance) -->
<div id="preloader" class="preloader" aria-hidden="true">
    <div class="preloader-inner text-center">
        <!-- Themed Microfinance SVG Animation: Interconnected Web & Prosperity Coin -->
        <div class="preloader-icon-wrapper mb-3">
            <svg class="preloader-svg" viewBox="0 0 100 100" width="80" height="80">
                <!-- Outer Community Web Ring -->
                <circle class="preloader-web-ring" cx="50" cy="50" r="42" fill="none" stroke="#246B44" stroke-width="2.5" stroke-dasharray="8 4" />
                <circle class="preloader-web-ring-inner" cx="50" cy="50" r="30" fill="none" stroke="#D97706" stroke-width="2" stroke-dasharray="6 3" />
                
                <!-- Growing Sprout & Coin Motif -->
                <g class="preloader-coin">
                    <circle cx="50" cy="50" r="18" fill="#F59E0B" stroke="#17482D" stroke-width="2" />
                    <text x="50" y="55" font-family="'Outfit', sans-serif" font-size="12" font-weight="800" fill="#17482D" text-anchor="middle">UGX</text>
                </g>
                <path class="preloader-sprout" d="M50 32 C50 20, 42 16, 38 18 C38 24, 44 28, 50 32 Z" fill="#246B44" />
                <path class="preloader-sprout-right" d="M50 32 C50 20, 58 16, 62 18 C62 24, 56 28, 50 32 Z" fill="#17482D" />
            </svg>
        </div>
        <div class="preloader-brand">
            <span class="preloader-title">SPIDER <span class="preloader-accent">MICROFINANCE</span></span>
            <p class="preloader-sub mb-0">Weaving stronger communities...</p>
        </div>
        <div class="preloader-progress mt-3">
            <div class="preloader-bar"></div>
        </div>
    </div>
</div>

<!-- Graceful degradation: If JavaScript is disabled, hide preloader immediately -->
<noscript>
    <style>
        #preloader {
            display: none !important;
            visibility: hidden !important;
        }
    </style>
</noscript>
