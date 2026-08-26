<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bunker &amp; Fuel Trading - Hanil Marine Egypt</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;family=Montserrat:wght@600;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#001629",
                        "on-tertiary-fixed": "#141c28",
                        "on-primary-container": "#7293b6",
                        "on-tertiary-fixed-variant": "#404754",
                        "surface-tint": "#406182",
                        "inverse-surface": "#2c3137",
                        "error": "#ba1a1a",
                        "background": "#f7f9ff",
                        "on-primary-fixed": "#001d34",
                        "primary-fixed": "#cfe5ff",
                        "on-tertiary-container": "#89909f",
                        "on-background": "#171c21",
                        "tertiary-fixed-dim": "#bfc7d7",
                        "surface-dim": "#d6dae2",
                        "tertiary": "#0d1520",
                        "tertiary-fixed": "#dbe3f3",
                        "outline": "#73777e",
                        "on-secondary-fixed": "#370e00",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed-variant": "#274969",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#eaeef6",
                        "on-primary": "#ffffff",
                        "industrial-slate": "#263142",
                        "secondary-fixed": "#ffdbce",
                        "inverse-on-surface": "#edf1f8",
                        "surface": "#f7f9ff",
                        "ocean-navy": "#001629",
                        "outline-variant": "#c3c7ce",
                        "on-secondary-fixed-variant": "#7f2b00",
                        "secondary-fixed-dim": "#ffb599",
                        "secondary": "#a63b00",
                        "on-surface-variant": "#42474d",
                        "surface-bright": "#f7f9ff",
                        "on-error-container": "#93000a",
                        "sea-foam-gray": "#f0f3ff",
                        "tertiary-container": "#222935",
                        "surface-container-highest": "#dee3ea",
                        "on-secondary-container": "#531900",
                        "on-error": "#ffffff",
                        "surface-container-high": "#e4e8f0",
                        "inverse-primary": "#a8caef",
                        "primary-fixed-dim": "#a8caef",
                        "secondary-container": "#ff5e00",
                        "safety-orange": "#a63b00",
                        "on-surface": "#171c21",
                        "surface-container-low": "#f0f4fb",
                        "on-secondary": "#ffffff",
                        "primary-container": "#002b49",
                        "surface-variant": "#dee3ea"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "section-gap": "80px",
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "margin-desktop": "64px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Montserrat"],
                        "headline-lg": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "label-caps": ["Inter"],
                        "headline-xl": ["Montserrat"],
                        "button-text": ["Montserrat"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-md": ["20px", { "lineHeight": "1.4", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.3", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.3", "fontWeight": "700" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.08em", "fontWeight": "700" }],
                        "headline-xl": ["48px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "button-text": ["14px", { "lineHeight": "1", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-on-background antialiased font-body-md text-body-md overflow-x-hidden">
    <!-- TopNavBar -->
    <nav class="bg-ocean-navy dark:bg-ocean-navy full-width top-0 z-50 sticky shadow-sm">
        <div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
            <a class="text-headline-md font-headline-md font-bold text-on-primary" href="#">
                Hanil Marine Egypt
            </a>
            <div class="hidden md:flex gap-gutter items-center">
                <a class="text-on-primary-container font-medium hover:text-safety-orange transition-colors duration-200 font-button-text text-button-text"
                    href="#">Home</a>
                <a class="text-on-primary-container font-medium hover:text-safety-orange transition-colors duration-200 font-button-text text-button-text"
                    href="#">Provisions</a>
                <a class="text-on-primary-container font-medium hover:text-safety-orange transition-colors duration-200 font-button-text text-button-text"
                    href="#">Technical</a>
                <a class="text-on-primary border-b-2 border-safety-orange pb-1 hover:text-safety-orange transition-colors duration-200 font-button-text text-button-text opacity-80 transition-opacity"
                    href="#">Bunker</a>
                <a class="text-on-primary-container font-medium hover:text-safety-orange transition-colors duration-200 font-button-text text-button-text"
                    href="#">Crew</a>
                <a class="text-on-primary-container font-medium hover:text-safety-orange transition-colors duration-200 font-button-text text-button-text"
                    href="#">Contact</a>
            </div>
            <div class="hidden md:flex items-center gap-base">
                <span
                    class="material-symbols-outlined text-on-primary-container hover:text-safety-orange cursor-pointer"
                    data-icon="search">search</span>
                <button
                    class="bg-safety-orange text-on-primary font-button-text text-button-text px-4 py-2 rounded uppercase tracking-wider hover:bg-secondary-container transition-colors focus:ring-2 focus:ring-offset-2 focus:ring-safety-orange">Request
                    Quote</button>
            </div>
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-on-primary">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </nav>
    <main>
        <!-- Hero Section -->
        <section class="relative w-full h-[60vh] min-h-[500px] flex items-center">
            <div class="absolute inset-0 z-0">
                <img alt="Strategic Bunker Trading" class="w-full h-full object-cover object-center"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4dMV1a2W5rLHECT7ECT-69e0_FarRbBNT1QFnHordoMNW1Cafzf1vWtMDa9yx7CWRrXhuUNQz4fW3tJNQ2ymdqu64qTkbslRucXEBZFybDkHuXDo4UPMN_3Ut1NgL3QUvF72CBwwivLQrpJjOJEDKQlJ2BgDsc3CBykAs-nota6X4Xvi1uX5KhAWTCqZ-PehEswXK3QVF-9-aze7_WT0J72JKeZOyX9_pwDP_piT-Ncd3_QXYXmdDdg">
                <div class="absolute inset-0 bg-ocean-navy/60"></div>
            </div>
            <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full">
                <div class="max-w-3xl">
                    <span
                        class="font-label-caps text-label-caps text-safety-orange uppercase mb-4 block tracking-widest">Global
                        Energy Logistics</span>
                    <h1 class="font-headline-xl text-headline-xl text-on-primary mb-6">Strategic Bunker Trading &amp;
                        Precision Fueling</h1>
                    <p class="font-body-lg text-body-lg text-on-primary-container mb-8 max-w-2xl">Ensuring operational
                        continuity for global maritime fleets with ISO-certified marine fuels, advanced lubricants, and
                        reliable 24/7 logistics across all Egyptian ports.</p>
                    <button
                        class="bg-safety-orange text-on-primary font-button-text text-button-text px-8 py-4 rounded hover:bg-secondary-container transition-colors shadow-lg hover:shadow-xl inline-flex items-center gap-2 uppercase tracking-wide">
                        Initiate Quotation Workflow
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Services Bento Grid -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface max-w-container-max mx-auto">
            <div class="mb-12">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4 border-l-4 border-safety-orange pl-4">
                    Core Trading Competencies</h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">Our integrated bunker solutions
                    prioritize quality assurance, precise delivery scheduling, and strict compliance with international
                    maritime standards.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Marine Fuel Oils -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant p-8 rounded hover:border-surface-tint transition-colors group flex flex-col md:col-span-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
                        <span class="material-symbols-outlined text-9xl text-ocean-navy"
                            style="font-variation-settings: 'FILL' 1;">oil_barrel</span>
                    </div>
                    <div class="mb-6 flex items-center justify-between">
                        <div class="p-3 bg-sea-foam-gray rounded inline-flex">
                            <span class="material-symbols-outlined text-ocean-navy text-3xl">water_drop</span>
                        </div>
                        <span
                            class="bg-surface-container-high text-on-surface-variant font-label-caps text-label-caps px-3 py-1 rounded-full border border-outline-variant">ISO
                            8217 Certified</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4 relative z-10">Marine Fuel Oils
                        (VLSFO/LSMGO)</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow relative z-10">Premium,
                        quality-assured low-sulfur marine gasoil and very low sulfur fuel oil. Sourced from globally
                        recognized refineries, our fuels guarantee optimal engine performance and strict adherence to
                        current emission regulations.</p>
                    <ul class="space-y-2 mb-6 font-body-md text-body-md text-on-surface-variant relative z-10">
                        <li class="flex items-center gap-2"><span
                                class="material-symbols-outlined text-safety-orange text-sm">check_circle</span>
                            Pre-delivery quality testing</li>
                        <li class="flex items-center gap-2"><span
                                class="material-symbols-outlined text-safety-orange text-sm">check_circle</span>
                            Transparent density &amp; viscosity reporting</li>
                    </ul>
                    <a class="font-button-text text-button-text text-ocean-navy hover:text-safety-orange transition-colors inline-flex items-center gap-1 uppercase tracking-wide relative z-10 mt-auto"
                        href="#">
                        View Specifications <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </a>
                </div>
                <!-- Lubricants & Specialty Chemicals -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant p-8 rounded hover:border-surface-tint transition-colors group flex flex-col">
                    <div class="mb-6">
                        <div class="p-3 bg-sea-foam-gray rounded inline-flex">
                            <span class="material-symbols-outlined text-ocean-navy text-3xl">science</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Lubricants &amp; Specialty Chemicals
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">A complete range of
                        high-performance engine oils, hydraulic fluids, and specialty maritime chemicals designed to
                        extend machinery lifespan under extreme conditions.</p>
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-center justify-between border-b border-outline-variant pb-2">
                            <span class="font-body-md text-on-surface-variant">Main Engine Oils</span>
                            <span class="material-symbols-outlined text-outline text-sm">arrow_outward</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-outline-variant pb-2">
                            <span class="font-body-md text-on-surface-variant">Auxiliary Oils</span>
                            <span class="material-symbols-outlined text-outline text-sm">arrow_outward</span>
                        </div>
                    </div>
                </div>
                <!-- Logistics Container -->
                <div
                    class="bg-tertiary text-on-tertiary p-8 rounded md:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-gutter items-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('placeholder')] bg-cover bg-center opacity-10"
                        data-alt="A highly detailed industrial port setting at night under stark white floodlights. Huge fuel storage tanks dominate the foreground with geometric precision, while a sleek, modern bunker barge is moored nearby. The lighting creates a high-contrast, modern light-mode aesthetic against the dark night sky. The scene feels organized, technologically advanced, and focused on maritime logistics.">
                    </div>
                    <div class="relative z-10">
                        <h3 class="font-headline-lg text-headline-lg mb-4 flex items-center gap-3">
                            <span class="material-symbols-outlined text-safety-orange text-4xl">local_shipping</span>
                            24/7 Bunkering Logistics
                        </h3>
                        <p class="font-body-lg text-body-lg text-tertiary-fixed-dim mb-6">Our dedicated logistical fleet
                            ensures reliable, precision delivery across all major Egyptian ports. We operate
                            round-the-clock to minimize your vessel's downtime.</p>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint">Port
                                Said</span>
                            <span
                                class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint">Alexandria</span>
                            <span
                                class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint">Suez</span>
                            <span
                                class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint">Damietta</span>
                        </div>
                    </div>
                    <div class="relative z-10 flex justify-end">
                        <div
                            class="bg-industrial-slate p-6 rounded border border-outline-variant/30 w-full max-w-sm backdrop-blur-sm">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 bg-safety-orange rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-on-primary">support_agent</span>
                                </div>
                                <div>
                                    <h4 class="font-headline-md text-headline-md text-on-tertiary">Operations Center
                                    </h4>
                                    <span class="font-body-md text-tertiary-fixed-dim text-sm">Always Active</span>
                                </div>
                            </div>
                            <p class="font-body-md text-tertiary-fixed-dim mb-4">Direct communication line for urgent
                                bunkering requests or ETA updates.</p>
                            <button
                                class="w-full bg-transparent border border-on-tertiary text-on-tertiary font-button-text text-button-text px-4 py-3 rounded hover:bg-on-tertiary hover:text-primary transition-colors uppercase tracking-wide">
                                Contact Logistics
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Workflow CTA -->
        <section
            class="py-section-gap px-margin-mobile md:px-margin-desktop bg-sea-foam-gray border-t border-b border-outline-variant">
            <div class="max-w-4xl mx-auto text-center">
                <span class="material-symbols-outlined text-5xl text-ocean-navy mb-4">description</span>
                <h2 class="font-headline-lg text-headline-lg text-primary mb-6">Streamlined Quotation Workflow</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-8">Access real-time pricing and secure
                    your bunker allocations with our precision digital quotation system. Designed for rapid procurement
                    and full transparency.</p>
                <div class="flex justify-center gap-4">
                    <button
                        class="bg-safety-orange text-on-primary font-button-text text-button-text px-8 py-4 rounded hover:bg-secondary-container transition-colors shadow-lg uppercase tracking-wide">
                        Request Bunker Quote
                    </button>
                    <button
                        class="bg-transparent border border-ocean-navy text-ocean-navy font-button-text text-button-text px-8 py-4 rounded hover:bg-ocean-navy hover:text-on-primary transition-colors uppercase tracking-wide">
                        View Product Catalog
                    </button>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-industrial-slate dark:bg-industrial-slate full-width border-t border-outline-variant">
        <div
            class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop py-section-gap max-w-container-max mx-auto">
            <div class="md:col-span-1">
                <a class="text-headline-md font-headline-md font-bold text-on-tertiary mb-4 block" href="#">
                    Hanil Marine Egypt
                </a>
                <p class="font-body-md text-body-md text-on-tertiary-container mb-6 max-w-xs">Industrial Reliability
                    &amp; Maritime Precision. Connecting global shipping lanes with premium supplies.</p>
                <p class="font-label-caps text-label-caps text-on-tertiary-container">© 2024 Hanil Marine Egypt. All
                    rights reserved.</p>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps text-on-tertiary mb-4 tracking-wider uppercase">Provisions
                    &amp; Stores</h4>
                <ul class="space-y-3 font-body-md text-body-md text-on-tertiary-container">
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Fresh Provisions</a></li>
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Bonded Stores</a></li>
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Technical Spares</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps text-on-tertiary mb-4 tracking-wider uppercase">Marine
                    Services</h4>
                <ul class="space-y-3 font-body-md text-body-md text-on-tertiary-container">
                    <li><a class="text-safety-orange hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Bunker Trading</a></li>
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Underwater Services</a></li>
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Repair Services</a></li>
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Crew Change</a></li>
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Chemicals &amp; Lubrications</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps text-on-tertiary mb-4 tracking-wider uppercase">Legal</h4>
                <ul class="space-y-3 font-body-md text-body-md text-on-tertiary-container">
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Privacy Policy</a></li>
                    <li><a class="hover:text-on-tertiary transition-colors focus:ring-2 focus:ring-safety-orange"
                            href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>