<!DOCTYPE html><html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;family=Montserrat:wght@600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
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
                        "body-lg": ["Inter"],
                        "headline-lg": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "body-md": ["Inter"],
                        "headline-xl": ["Montserrat"],
                        "headline-md": ["Montserrat"],
                        "button-text": ["Montserrat"]
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

	<!-- Desktop Navigation -->
	<div class="hidden md:flex items-center gap-gutter">
		<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed-dim transition-colors duration-200" href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a>
		<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed-dim transition-colors duration-200" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a>
		<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed-dim transition-colors duration-200" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact</a>
	</div>

	<!-- Desktop CTA -->
	<a class="hidden md:inline-flex items-center justify-center bg-secondary-container text-on-secondary px-6 py-3 rounded hover:bg-secondary transition-colors duration-200 font-button-text text-button-text scale-95 active:opacity-80" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
		Get Quotation
	</a>

	<!-- Mobile Hamburger Button -->
	<button id="mobile-menu-toggle" aria-label="Toggle Navigation Menu" class="md:hidden text-primary dark:text-on-primary focus:outline-none p-2 flex items-center justify-center">
		<span id="mobile-menu-icon" class="material-symbols-outlined text-3xl">menu</span>
	</button>
</nav>

<!-- Mobile Navigation Drawer -->
<div id="mobile-menu-drawer" class="hidden md:hidden fixed top-20 left-0 w-full bg-surface dark:bg-primary border-b border-outline-variant shadow-2xl z-40 transition-all duration-300">
	<div class="flex flex-col px-margin-mobile py-6 space-y-4">
		<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-secondary font-button-text text-lg py-2 border-b border-outline-variant/30 transition-colors" href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a>
		<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-secondary font-button-text text-lg py-2 border-b border-outline-variant/30 transition-colors" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a>
		<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-secondary font-button-text text-lg py-2 border-b border-outline-variant/30 transition-colors" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact</a>
		<a class="inline-flex items-center justify-center bg-secondary-container text-on-secondary px-6 py-3 rounded font-button-text text-center text-button-text mt-4" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
			Get Quotation
		</a>
	</div>
</div>

<!-- Mobile Menu Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const menuBtn = document.getElementById('mobile-menu-toggle');
	const menuDrawer = document.getElementById('mobile-menu-drawer');
	const menuIcon = document.getElementById('mobile-menu-icon');

	if (menuBtn && menuDrawer && menuIcon) {
		menuBtn.addEventListener('click', function() {
			menuDrawer.classList.toggle('hidden');
			if (menuDrawer.classList.contains('hidden')) {
				menuIcon.textContent = 'menu';
			} else {
				menuIcon.textContent = 'close';
			}
		});

		// Close menu when clicking any nav link inside drawer
		menuDrawer.querySelectorAll('a').forEach(link => {
			link.addEventListener('click', function() {
				menuDrawer.classList.add('hidden');
				menuIcon.textContent = 'menu';
			});
		});
	}
});
</script>