<!DOCTYPE html>
<html class="scroll-smooth" lang="<?php echo esc_attr( bayrak_get_current_lang() ); ?>" dir="<?php echo bayrak_is_rtl() ? 'rtl' : 'ltr'; ?>"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&amp;family=Inter:wght@400;700&amp;family=Montserrat:wght@600;700&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f9f9ff",
                        "surface-dim": "#cfdaf1",
                        "error": "#ba1a1a",
                        "surface-variant": "#d8e3fa",
                        "on-tertiary-container": "#8d9193",
                        "tertiary-fixed-dim": "#c4c7c9",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#434749",
                        "surface-tint": "#004aad",
                        "secondary-fixed": "#fef3c7",
                        "secondary": "#d99b26",
                        "on-tertiary-fixed": "#181c1e",
                        "on-primary-fixed": "#001d34",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#1a1100",
                        "tertiary": "#001c42",
                        "primary-fixed-dim": "#99c2ff",
                        "secondary-container": "#e5a93c",
                        "tertiary-fixed": "#e0e3e5",
                        "outline": "#73777e",
                        "surface-container": "#e7eeff",
                        "primary": "#004aad",
                        "background": "#f9f9ff",
                        "on-error-container": "#93000a",
                        "inverse-on-surface": "#ebf1ff",
                        "primary-container": "#002b66",
                        "inverse-primary": "#99c2ff",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "inverse-surface": "#111c2c",
                        "outline-variant": "#c3c7ce",
                        "secondary-fixed-dim": "#f59e0b",
                        "surface-bright": "#f9f9ff",
                        "on-secondary-fixed": "#451a03",
                        "on-surface": "#111c2c",
                        "surface-container-highest": "#d8e3fa",
                        "on-secondary-container": "#1a1100",
                        "on-background": "#111c2c",
                        "on-primary-fixed-variant": "#003b8a",
                        "surface-container-high": "#dee8ff",
                        "primary-fixed": "#d6e4ff",
                        "tertiary-container": "#002b66",
                        "on-primary-container": "#80b3ff",
                        "on-surface-variant": "#42474d",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#78350f",
                        "surface-container-low": "#f0f3ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "section-gap": "80px",
                        "base": "8px",
                        "container-max": "1280px",
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "margin-desktop": "64px"
                    },
                    "fontFamily": {
                        "label-caps": ["Inter"],
                        "body-lg": ["Inter", "Cairo"],
                        "headline-lg": ["Montserrat", "Cairo"],
                        "headline-lg-mobile": ["Montserrat", "Cairo"],
                        "body-md": ["Inter", "Cairo"],
                        "headline-xl": ["Montserrat", "Cairo"],
                        "headline-md": ["Montserrat", "Cairo"],
                        "button-text": ["Montserrat", "Cairo"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.08em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.3", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.3", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-xl": ["48px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["20px", { "lineHeight": "1.4", "fontWeight": "600" }],
                        "button-text": ["14px", { "lineHeight": "1", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
<style>
        .service-card:hover .service-icon {
            transform: scale(1.1);
        }
        html[dir="rtl"] {
            text-align: right;
        }
    </style>
<?php wp_head(); ?>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased pt-20">
<?php wp_body_open(); ?>
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 bg-surface dark:bg-primary border-b border-outline-variant dark:border-outline flat no shadows">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="flex items-center gap-4">
			<img alt="Hanil Marine Logo" class="h-[120px] w-auto" src="/wp-content/uploads/2026/08/AL-BAYRAK.png">
		</div>
	</a>

	<!-- Desktop Navigation with Mega Menu -->
	<div class="hidden md:flex items-center gap-8 h-full">
		<a class="text-on-surface-variant hover:text-secondary font-button-text transition-colors py-6" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( bayrak_t( 'home', 'Home' ) ); ?></a>

		<!-- Mega Menu Item: Services -->
		<div class="group relative py-6">
			<a class="flex items-center gap-1 text-on-surface-variant hover:text-secondary font-button-text transition-colors cursor-pointer" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
				<span><?php echo esc_html( bayrak_t( 'services', 'Services' ) ); ?></span>
				<svg class="w-4 h-4 transition-transform group-hover:rotate-180 inline-block ml-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
			</a>

			<!-- Mega Menu Panel -->
			<div class="absolute top-full left-1/2 -translate-x-1/2 w-[850px] bg-surface-container-lowest border border-outline-variant rounded-xl shadow-2xl p-8 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
				<div class="grid grid-cols-3 gap-8">
					<!-- Column 1: Maritime Categories -->
					<div>
						<h4 class="font-label-caps text-xs text-primary uppercase tracking-wider mb-4 border-b border-outline-variant/30 pb-2">Maritime Categories</h4>
						<ul class="space-y-3 text-sm">
							<li><a href="<?php echo esc_url( home_url( '/provisions' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_provisions', 'Provisions Supply' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/repair-services' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_repair', 'Marine Repair Services' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/crew-change' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_crew', 'Crew Change Logistics' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/bunker-fuel-trading' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_bunker', 'Bunker & Fuel Trading' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/bonded-stores' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_bonded', 'Bonded Stores' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/technical-spares' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_technical', 'Technical Spares' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/services#logistics' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_logistics', 'Port Logistics' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/services#safety' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2 font-bold"><?php echo esc_html( bayrak_t( 'nav_safety', 'Safety & SOLAS' ) ); ?></a></li>
						</ul>
					</div>

					<!-- Column 2: Ports -->
					<div>
						<h4 class="font-label-caps text-xs text-primary uppercase tracking-wider mb-4 border-b border-outline-variant/30 pb-2"><?php echo esc_html( bayrak_t( 'footer_ports', 'Egyptian Gateways' ) ); ?></h4>
						<ul class="space-y-3 text-sm">
							<li><a href="<?php echo esc_url( home_url( '/#ports' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2"><?php echo esc_html( bayrak_t( 'port_said', 'Port Said (East & West)' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/#ports' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2"><?php echo esc_html( bayrak_t( 'port_suez', 'Suez Canal Zone' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/#ports' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2"><?php echo esc_html( bayrak_t( 'port_damietta', 'Damietta Port' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/#ports' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2"><?php echo esc_html( bayrak_t( 'port_alexandria', 'Alexandria Port' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/#ports' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2"><?php echo esc_html( bayrak_t( 'port_sokhna', 'Ain Sokhna & Adabeyah' ) ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/#ports' ) ); ?>" class="text-on-surface-variant hover:text-secondary flex items-center gap-2"><?php echo esc_html( bayrak_t( 'port_redsea', 'Safaga & Red Sea Ports' ) ); ?></a></li>
						</ul>
					</div>

					<!-- Column 3: Quick CTA Box -->
					<div class="bg-surface-container p-6 rounded-lg flex flex-col justify-between border border-outline-variant/40">
						<div>
							<span class="bg-secondary-container text-on-secondary text-xs px-2.5 py-1 rounded font-bold uppercase tracking-wider inline-block mb-3">24/7 Operations</span>
							<h5 class="font-headline-md text-base text-primary mb-2"><?php echo esc_html( bayrak_t( 'banner_quote_title', 'Need Rapid Vessel Supply?' ) ); ?></h5>
							<p class="text-xs text-on-surface-variant mb-4"><?php echo esc_html( bayrak_t( 'quick_quote_desc', 'Request a complete vessel supply quotation in under 2 minutes.' ) ); ?></p>
						</div>
						<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center justify-center gap-2 bg-primary text-on-primary px-4 py-2.5 rounded text-xs font-bold hover:bg-primary-container transition-colors">
							<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Start Quotation' ) ); ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<a class="text-on-surface-variant hover:text-secondary font-button-text transition-colors py-6" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php echo esc_html( bayrak_t( 'about_us', 'About Us' ) ); ?></a>
		<a class="text-on-surface-variant hover:text-secondary font-button-text transition-colors py-6" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><?php echo esc_html( bayrak_t( 'contact', 'Contact' ) ); ?></a>
	</div>

	<!-- Language Switcher & Desktop CTA -->
	<div class="hidden md:flex items-center gap-4">
		<!-- Language Selector -->
		<div class="relative group py-6">
			<button class="flex items-center gap-1.5 text-on-surface-variant hover:text-secondary font-button-text text-sm transition-colors py-1.5 px-3 bg-surface-container rounded-lg border border-outline-variant/40">
				<span class="text-base"><?php echo bayrak_get_current_lang() === 'ar' ? '🇪🇬' : ( bayrak_get_current_lang() === 'tr' ? '🇹🇷' : '🇬🇧' ); ?></span>
				<span class="font-bold uppercase"><?php echo esc_html( bayrak_get_current_lang() ); ?></span>
				<svg class="w-3.5 h-3.5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
			</button>
			<div class="absolute top-full right-0 w-36 bg-surface-container-lowest border border-outline-variant rounded-lg shadow-xl p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
				<a href="?lang=en" class="flex items-center gap-2 px-3 py-2 text-xs font-bold text-primary hover:bg-surface-container rounded transition-colors <?php echo bayrak_get_current_lang() === 'en' ? 'bg-surface-container-low text-secondary' : ''; ?>">
					<span>🇬🇧</span> English
				</a>
				<a href="?lang=ar" class="flex items-center gap-2 px-3 py-2 text-xs font-bold text-primary hover:bg-surface-container rounded transition-colors <?php echo bayrak_get_current_lang() === 'ar' ? 'bg-surface-container-low text-secondary' : ''; ?>">
					<span>🇪🇬</span> العربية 
				</a>
				<a href="?lang=tr" class="flex items-center gap-2 px-3 py-2 text-xs font-bold text-primary hover:bg-surface-container rounded transition-colors <?php echo bayrak_get_current_lang() === 'tr' ? 'bg-surface-container-low text-secondary' : ''; ?>">
					<span>🇹🇷</span> Türkçe
				</a>
			</div>
		</div>

		<a class="inline-flex items-center justify-center bg-secondary-container text-on-secondary px-6 py-3 rounded hover:bg-secondary transition-colors duration-200 font-button-text text-button-text scale-95 active:opacity-80 shadow-sm" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
			<?php echo esc_html( bayrak_t( 'get_quotation', 'Get Quotation' ) ); ?>
		</a>
	</div>

	<!-- Mobile Hamburger Button -->
	<button id="mobile-menu-toggle" aria-label="Toggle Navigation Menu" class="md:hidden text-primary focus:outline-none p-2 flex items-center justify-center">
		<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path id="menu-icon-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
	</button>
</nav>

<!-- Mobile Multi-Step Navigation Drawer -->
<div id="mobile-menu-drawer" class="hidden md:hidden fixed top-20 left-0 w-full bg-surface-container-lowest border-b border-outline-variant shadow-2xl z-40 overflow-hidden transition-all duration-300 max-h-[85vh] overflow-y-auto">
	<!-- Main Panel (Level 1) -->
	<div id="mobile-panel-main" class="flex flex-col p-6 space-y-4">
		<button onclick="openMobileSub('services')" class="flex justify-between items-center w-full text-left font-button-text text-lg py-3 border-b border-outline-variant/30 text-primary">
			<span class="flex items-center gap-2"><?php echo esc_html( bayrak_t( 'services', 'Services' ) ); ?></span>
			<span class="font-bold">›</span>
		</button>

		<button onclick="openMobileSub('ports')" class="flex justify-between items-center w-full text-left font-button-text text-lg py-3 border-b border-outline-variant/30 text-primary">
			<span class="flex items-center gap-2"><?php echo esc_html( bayrak_t( 'ports_title', 'Egyptian Ports' ) ); ?></span>
			<span class="font-bold">›</span>
		</button>

		<a class="font-button-text text-lg py-3 border-b border-outline-variant/30 text-primary" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php echo esc_html( bayrak_t( 'about_us', 'About Us' ) ); ?></a>
		<a class="font-button-text text-lg py-3 border-b border-outline-variant/30 text-primary" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><?php echo esc_html( bayrak_t( 'contact', 'Contact' ) ); ?></a>

		<a class="inline-flex items-center justify-center bg-secondary-container text-on-secondary px-6 py-3.5 rounded font-button-text text-center text-button-text mt-4 shadow-md" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
			<?php echo esc_html( bayrak_t( 'get_quotation', 'Get Quotation' ) ); ?>
		</a>

		<!-- Mobile Language Selector -->
		<div class="flex items-center justify-between gap-2 pt-4 border-t border-outline-variant/30 mt-2">
			<span class="text-xs font-bold text-on-surface-variant uppercase">Language / اللغة:</span>
			<div class="flex gap-1.5">
				<a href="?lang=en" class="px-2.5 py-1 text-xs font-bold rounded border <?php echo bayrak_get_current_lang() === 'en' ? 'bg-primary text-on-primary border-primary' : 'bg-surface-container text-primary border-outline-variant'; ?>">🇬🇧 EN</a>
				<a href="?lang=ar" class="px-2.5 py-1 text-xs font-bold rounded border <?php echo bayrak_get_current_lang() === 'ar' ? 'bg-primary text-on-primary border-primary' : 'bg-surface-container text-primary border-outline-variant'; ?>">🇪🇬 العربية</a>
				<a href="?lang=tr" class="px-2.5 py-1 text-xs font-bold rounded border <?php echo bayrak_get_current_lang() === 'tr' ? 'bg-primary text-on-primary border-primary' : 'bg-surface-container text-primary border-outline-variant'; ?>">🇹🇷 TR</a>
			</div>
		</div>
	</div>

	<!-- Sub-Panel: Services (Level 2) -->
	<div id="mobile-panel-services" class="hidden flex-col p-6 space-y-4">
		<button onclick="closeMobileSub()" class="flex items-center gap-2 font-bold text-secondary text-sm pb-2 border-b border-outline-variant/30">
			<span>‹</span>
			<span><?php echo esc_html( bayrak_t( 'back', 'Back to Main Menu' ) ); ?></span>
		</button>
		<span class="font-label-caps text-xs text-on-surface-variant uppercase tracking-wider"><?php echo esc_html( bayrak_t( 'services', 'All Maritime Services' ) ); ?></span>
		
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/provisions' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_provisions', 'Provisions Supply' ) ); ?></a>
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/repair-services' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_repair', 'Marine Repair Services' ) ); ?></a>
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/crew-change' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_crew', 'Crew Change Logistics' ) ); ?></a>
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/bunker-fuel-trading' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_bunker', 'Bunker & Fuel Trading' ) ); ?></a>
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/bonded-stores' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_bonded', 'Bonded Stores' ) ); ?></a>
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/technical-spares' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_technical', 'Technical Spares' ) ); ?></a>
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/services#logistics' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_logistics', 'Port Logistics' ) ); ?></a>
		<a class="py-2.5 text-primary font-bold border-b border-outline-variant/20 flex items-center gap-2" href="<?php echo esc_url( home_url( '/services#safety' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_safety', 'Safety & SOLAS' ) ); ?></a>
	</div>

	<!-- Sub-Panel: Ports (Level 2) -->
	<div id="mobile-panel-ports" class="hidden flex-col p-6 space-y-4">
		<button onclick="closeMobileSub()" class="flex items-center gap-2 font-bold text-secondary text-sm pb-2 border-b border-outline-variant/30">
			<span>‹</span>
			<span><?php echo esc_html( bayrak_t( 'back', 'Back to Main Menu' ) ); ?></span>
		</button>
		<span class="font-label-caps text-xs text-on-surface-variant uppercase tracking-wider"><?php echo esc_html( bayrak_t( 'ports_title', 'Egyptian Port Locations' ) ); ?></span>

		<a class="py-2 text-primary font-body-md border-b border-outline-variant/20" href="<?php echo esc_url( home_url( '/#ports' ) ); ?>"><?php echo esc_html( bayrak_t( 'port_said', 'Port Said & Suez Canal Zone' ) ); ?></a>
		<a class="py-2 text-primary font-body-md border-b border-outline-variant/20" href="<?php echo esc_url( home_url( '/#ports' ) ); ?>"><?php echo esc_html( bayrak_t( 'port_alexandria', 'Alexandria & El Dekheila' ) ); ?></a>
		<a class="py-2 text-primary font-body-md border-b border-outline-variant/20" href="<?php echo esc_url( home_url( '/#ports' ) ); ?>"><?php echo esc_html( bayrak_t( 'port_damietta', 'Damietta Port' ) ); ?></a>
		<a class="py-2 text-primary font-body-md border-b border-outline-variant/20" href="<?php echo esc_url( home_url( '/#ports' ) ); ?>"><?php echo esc_html( bayrak_t( 'port_sokhna', 'Ain Sokhna & Adabeyah' ) ); ?></a>
		<a class="py-2 text-primary font-body-md border-b border-outline-variant/20" href="<?php echo esc_url( home_url( '/#ports' ) ); ?>"><?php echo esc_html( bayrak_t( 'port_redsea', 'Safaga & Red Sea Ports' ) ); ?></a>
	</div>
</div>

<!-- Mobile Multi-Step Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const menuBtn = document.getElementById('mobile-menu-toggle');
	const menuDrawer = document.getElementById('mobile-menu-drawer');
	const menuPath = document.getElementById('menu-icon-path');

	if (menuBtn && menuDrawer) {
		menuBtn.addEventListener('click', function() {
			menuDrawer.classList.toggle('hidden');
			if (menuDrawer.classList.contains('hidden')) {
				if (menuPath) menuPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
				closeMobileSub();
			} else {
				if (menuPath) menuPath.setAttribute('d', 'M6 18L18 6M6 6l12 12');
			}
		});

		menuDrawer.querySelectorAll('a').forEach(link => {
			link.addEventListener('click', function() {
				menuDrawer.classList.add('hidden');
				if (menuPath) menuPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
				closeMobileSub();
			});
		});
	}

	window.openMobileSub = function(panelName) {
		document.getElementById('mobile-panel-main').classList.add('hidden');
		if (panelName === 'services') {
			document.getElementById('mobile-panel-services').classList.remove('hidden');
			document.getElementById('mobile-panel-services').classList.add('flex');
		} else if (panelName === 'ports') {
			document.getElementById('mobile-panel-ports').classList.remove('hidden');
			document.getElementById('mobile-panel-ports').classList.add('flex');
		}
	};

	window.closeMobileSub = function() {
		document.getElementById('mobile-panel-services').classList.add('hidden');
		document.getElementById('mobile-panel-services').classList.remove('flex');
		document.getElementById('mobile-panel-ports').classList.add('hidden');
		document.getElementById('mobile-panel-ports').classList.remove('flex');
		document.getElementById('mobile-panel-main').classList.remove('hidden');
	};
});
</script>