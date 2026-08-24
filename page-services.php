<?php
/**
 * Template Name: Services Page
 *
 * @package Bayrak
 * @author VitalDC (https://vitaldc.com)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<!-- Hero Section -->
<section class="relative h-[60vh] min-h-[400px] flex items-center bg-primary overflow-hidden">
	<div class="absolute inset-0 z-0">
		<div class="bg-cover bg-center w-full h-full opacity-40" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBYLQ0d672RovfEYsopCoJHAHOU8icvgOiSu5LdUmdOVpqHxI1tuazMgPiMvIaeG39n2ldjiVEo6v4Apzei82bV59X9tEWJ5usYfLNT0Osr3ShTCRPZ_tKSSfA-Vm1Gp0LF4MOP81kc3OymupqOPs-hMXk8TdlsVNsiCtFq9SP3Yh8nl2up64JbZLezD0u_PmQ39AdUwczDpjf3c_-1xpo3mli8ov6XeutSVXhl-n_oeLzDeSsIohoS-g')"></div>
		<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-transparent"></div>
	</div>
	<div class="relative z-10 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
		<div class="max-w-2xl text-on-primary">
			<span class="inline-block bg-secondary-container text-on-secondary px-3 py-1 rounded font-label-caps text-label-caps mb-4 uppercase tracking-wider">
				<?php echo esc_html( bayrak_t( 'sec_services_badge', '24/7 Port Delivery' ) ); ?>
			</span>
			<h1 class="font-headline-xl text-headline-xl mb-4"><?php echo esc_html( bayrak_t( 'sec_services_title', 'Comprehensive Maritime Services' ) ); ?></h1>
			<p class="font-body-lg text-body-lg mb-8 text-primary-fixed">
				<?php echo esc_html( bayrak_t( 'hero_subtitle', 'Fresh provisions, bonded stores, deck & engine spares, and rapid launch delivery across Egyptian ports.' ) ); ?>
			</p>
			<a class="inline-flex items-center justify-center bg-secondary-container text-on-secondary px-8 py-4 rounded font-button-text text-button-text hover:bg-secondary transition-colors duration-200 shadow-lg" href="#services-tabs">
				<?php echo esc_html( bayrak_t( 'view_all_services', 'Explore Services Below' ) ); ?>
			</a>
		</div>
	</div>
</section>

<!-- Functional Services Tabs Section -->
<section id="services-tabs" class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface max-w-container-max mx-auto">
	<div class="mb-12 text-center">
		<h2 class="font-headline-lg text-headline-lg text-primary mb-3"><?php echo esc_html( bayrak_t( 'sec_services_title', 'Our Core Operations' ) ); ?></h2>
		<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
			Select a service category below to view detailed capabilities, certifications, and supply specifications.
		</p>
		<div class="h-1 w-20 bg-secondary-container mt-4 mx-auto"></div>
	</div>

	<!-- Tab Buttons Header -->
	<div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-12" role="tablist" aria-label="Services Navigation">
		<!-- Tab 1: Ship Supply -->
		<button data-tab="tab-ship-supply" class="service-tab-btn active bg-primary text-on-primary shadow-lg border border-primary px-6 py-4 rounded-lg flex items-center gap-3 transition-all duration-300 cursor-pointer font-button-text" role="tab" aria-selected="true">
			<span class="material-symbols-outlined text-2xl">inventory_2</span>
			<span class="text-left leading-tight"><?php echo esc_html( bayrak_t( 'nav_provisions', 'Ship Supply' ) ); ?></span>
		</button>

		<!-- Tab 2: Logistic Services -->
		<button data-tab="tab-logistics" class="service-tab-btn bg-surface-container-lowest text-on-surface-variant border border-outline-variant hover:border-primary px-6 py-4 rounded-lg flex items-center gap-3 transition-all duration-300 cursor-pointer font-button-text" role="tab" aria-selected="false">
			<span class="material-symbols-outlined text-2xl">local_shipping</span>
			<span class="text-left leading-tight"><?php echo esc_html( bayrak_t( 'nav_logistics', 'Logistic Services' ) ); ?></span>
		</button>

		<!-- Tab 3: Crew Change -->
		<button data-tab="tab-crew-change" class="service-tab-btn bg-surface-container-lowest text-on-surface-variant border border-outline-variant hover:border-primary px-6 py-4 rounded-lg flex items-center gap-3 transition-all duration-300 cursor-pointer font-button-text" role="tab" aria-selected="false">
			<span class="material-symbols-outlined text-2xl">groups</span>
			<span class="text-left leading-tight">Crew Change</span>
		</button>

		<!-- Tab 4: Safety Supplies -->
		<button data-tab="tab-safety" class="service-tab-btn bg-surface-container-lowest text-on-surface-variant border border-outline-variant hover:border-primary px-6 py-4 rounded-lg flex items-center gap-3 transition-all duration-300 cursor-pointer font-button-text" role="tab" aria-selected="false">
			<span class="material-symbols-outlined text-2xl">verified_user</span>
			<span class="text-left leading-tight"><?php echo esc_html( bayrak_t( 'nav_safety', 'Safety Supplies' ) ); ?></span>
		</button>

		<!-- Tab 5: Technical Support -->
		<button data-tab="tab-technical" class="service-tab-btn bg-surface-container-lowest text-on-surface-variant border border-outline-variant hover:border-primary px-6 py-4 rounded-lg flex items-center gap-3 transition-all duration-300 cursor-pointer font-button-text" role="tab" aria-selected="false">
			<span class="material-symbols-outlined text-2xl">build</span>
			<span class="text-left leading-tight"><?php echo esc_html( bayrak_t( 'nav_technical', 'Technical Support' ) ); ?></span>
		</button>
	</div>

	<!-- Tab Panels Content -->
	<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-8 md:p-12 shadow-sm min-h-[420px]">

		<!-- Panel 1: Ship Supply (Active Default) -->
		<div id="tab-ship-supply" class="service-tab-panel block" role="tabpanel">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
				<div class="lg:col-span-7">
					<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-4 inline-block"><?php echo esc_html( bayrak_t( 'tab_provisions_badge', '24/7 Provisions & Stores' ) ); ?></span>
					<h3 class="font-headline-xl text-headline-lg text-primary mb-4"><?php echo esc_html( bayrak_t( 'tab_provisions_title', 'Complete Ship Supply & Bonded Stores' ) ); ?></h3>
					<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
						<?php echo esc_html( bayrak_t( 'tab_provisions_desc', 'Fresh, frozen, and dry provisions complying with HACCP & ISO 22000 standards. Full range of bonded goods, cabin stores, and galley equipment.' ) ); ?>
					</p>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold"><?php echo esc_html( bayrak_t( 'prov_fresh_title', 'Fresh & Frozen Foods' ) ); ?></span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold"><?php echo esc_html( bayrak_t( 'card_provisions_title', 'Duty-Free Bonded Goods' ) ); ?></span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold"><?php echo esc_html( bayrak_t( 'card_technical_title', 'Deck & Engine Stores' ) ); ?></span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold"><?php echo esc_html( bayrak_t( 'cert_title', 'HACCP & ISO Compliant' ) ); ?></span>
						</div>
					</div>

					<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center justify-center bg-secondary text-on-secondary px-8 py-4 rounded font-button-text hover:bg-secondary-container transition-colors">
						<?php echo esc_html( bayrak_t( 'get_quotation', 'Request Ship Supply Quote' ) ); ?>
					</a>
				</div>
				<div class="lg:col-span-5">
					<div class="h-80 w-full rounded-lg overflow-hidden border border-outline-variant relative">
						<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBYLQ0d672RovfEYsopCoJHAHOU8icvgOiSu5LdUmdOVpqHxI1tuazMgPiMvIaeG39n2ldjiVEo6v4Apzei82bV59X9tEWJ5usYfLNT0Osr3ShTCRPZ_tKSSfA-Vm1Gp0LF4MOP81kc3OymupqOPs-hMXk8TdlsVNsiCtFq9SP3Yh8nl2up64JbZLezD0u_PmQ39AdUwczDpjf3c_-1xpo3mli8ov6XeutSVXhl-n_oeLzDeSsIohoS-g')"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 2: Logistic Services -->
		<div id="tab-logistics" class="service-tab-panel hidden" role="tabpanel">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
				<div class="lg:col-span-7">
					<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-4 inline-block"><?php echo esc_html( bayrak_t( 'tab_logistics_badge', 'Zero-Delay Logistics' ) ); ?></span>
					<h3 class="font-headline-xl text-headline-lg text-primary mb-4"><?php echo esc_html( bayrak_t( 'tab_logistics_title', 'Port Clearance & Anchorage Launch Delivery' ) ); ?></h3>
					<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
						<?php echo esc_html( bayrak_t( 'tab_logistics_desc', 'Express customs clearance, bonded warehousing, launch boat dispatch at Port Said and Suez anchorages, and direct truck logistics alongside all Egyptian berths.' ) ); ?>
					</p>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Customs Clearance</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Bonded Warehousing</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Offshore Launch Delivery</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Suez Canal Transit Support</span>
						</div>
					</div>

					<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center justify-center bg-secondary text-on-secondary px-8 py-4 rounded font-button-text hover:bg-secondary-container transition-colors">
						<?php echo esc_html( bayrak_t( 'get_quotation', 'Inquire About Logistics' ) ); ?>
					</a>
				</div>
				<div class="lg:col-span-5">
					<div class="h-80 w-full rounded-lg overflow-hidden border border-outline-variant relative">
						<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDcCTNHvtyFdaejsM6Qm43gfNIrsu5w6wXke5nE4BgVUJ68_CNVAHhIYGB1L4x4Ilpy7FKhJEpMRTc4K4GPJBiVsB2sa8_GPwycvuFl8xp26xZZXnuAH4XHoCmtKcSHL3_0OEx4z3VrBlZZzcY3VWvRlH8zMNRVQmYVmVB6Ydm9UBv_FiDa21S6YwdKYoPkIheQfGpoGCvpQmN0dGUvEev_t5p7k4ao7wJ58SEFL0VyvuBtMo4s2sJwqA')"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 3: Crew Change -->
		<div id="tab-crew-change" class="service-tab-panel hidden" role="tabpanel">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
				<div class="lg:col-span-7">
					<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-4 inline-block"><?php echo esc_html( bayrak_t( 'tab_crew_badge', 'Fleet Support' ) ); ?></span>
					<h3 class="font-headline-xl text-headline-lg text-primary mb-4"><?php echo esc_html( bayrak_t( 'tab_crew_title', 'Maritime Crew Change & Transit Handling' ) ); ?></h3>
					<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
						<?php echo esc_html( bayrak_t( 'tab_crew_desc', '24/7 airport meet & assist, visa arrangements, hotel transfers, shore launches, and medical emergency assistance across Cairo, Alexandria, Port Said, and Suez.' ) ); ?>
					</p>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">OK-to-Board & Visas</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Airport Pick-up & Escort</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Hotel Accommodation</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Emergency Medical Care</span>
						</div>
					</div>

					<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center justify-center bg-secondary text-on-secondary px-8 py-4 rounded font-button-text hover:bg-secondary-container transition-colors">
						<?php echo esc_html( bayrak_t( 'get_quotation', 'Book Crew Logistics' ) ); ?>
					</a>
				</div>
				<div class="lg:col-span-5">
					<div class="h-80 w-full rounded-lg overflow-hidden border border-outline-variant relative">
						<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaQZDhso67Hm3jpGTNRV5Y0Y4kZUuVI77R6T1qB51b65XcHgWpxg95aENbe4I7ideQKxpoF0__HE0o4jBEzxOoYMpffMsW9zpEqjTVUKSQBiw5Y4TjGkLdn-qEynBg69c8K4cxv_MyLHsCRg-I1h2gt2rmMsUJ8aOaks11eX_jpD1MkbSza1zNvT2zYHpm-TCBPcvYrESTks2vAKUpOhYUa33TBPr03z6FQikP3OnKCEj192hjGZk2FA')"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 4: Safety Supplies -->
		<div id="tab-safety" class="service-tab-panel hidden" role="tabpanel">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
				<div class="lg:col-span-7">
					<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-4 inline-block"><?php echo esc_html( bayrak_t( 'tab_safety_badge', 'SOLAS Certified' ) ); ?></span>
					<h3 class="font-headline-xl text-headline-lg text-primary mb-4"><?php echo esc_html( bayrak_t( 'tab_safety_title', 'Marine Safety Gear & Life Saving Appliances' ) ); ?></h3>
					<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
						<?php echo esc_html( bayrak_t( 'tab_safety_desc', 'SOLAS approved life rafts, pyrotechnics, firefighting equipment, immersion suits, safety harnesses, and class-certified inspection services.' ) ); ?>
					</p>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Life Rafts & Life Jackets</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Fire Extinguishers & Hoses</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Pyrotechnics & Signals</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Class Re-certification</span>
						</div>
					</div>

					<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center justify-center bg-secondary text-on-secondary px-8 py-4 rounded font-button-text hover:bg-secondary-container transition-colors">
						<?php echo esc_html( bayrak_t( 'get_quotation', 'Request Safety Inspection' ) ); ?>
					</a>
				</div>
				<div class="lg:col-span-5">
					<div class="h-80 w-full rounded-lg overflow-hidden border border-outline-variant relative">
						<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAO4CDKt57V-9diGRwuU31b-kQvusEgEN3LlLy74yqqp8iq2hAf1AoY1tvUOnm0GL2Op7-uGQHWGpsg36rYX9oYHU_RytAonUY0ZM2tOtRxavrH_VvIukTa12Ya3iFYUsHOerqLsZdu3qXxhqBSKThSOfsyvsMn3-cBrvogBMjUyRn2Z3L6tYfCZjNT6tFfEh9ShjB2xfK-Ak87T2IDxiTwxK2elE3uVzSsiY4-78NzHzdCaqT3Iset5g')"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 5: Technical Support -->
		<div id="tab-technical" class="service-tab-panel hidden" role="tabpanel">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
				<div class="lg:col-span-7">
					<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-4 inline-block"><?php echo esc_html( bayrak_t( 'tab_technical_badge', 'IMPA / ISSA Coded' ) ); ?></span>
					<h3 class="font-headline-xl text-headline-lg text-primary mb-4"><?php echo esc_html( bayrak_t( 'tab_technical_title', 'Deck, Engine & Electrical Technical Spares' ) ); ?></h3>
					<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
						<?php echo esc_html( bayrak_t( 'tab_technical_desc', 'Comprehensive stock of IMPA/ISSA coded engine spares, valves, pumps, electrical components, pneumatic tools, and marine technician repairs at berth.' ) ); ?>
					</p>

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Engine & Hydraulic Repairs</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Electrical & Automation</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">OEM Spare Parts Sourcing</span>
						</div>
						<div class="flex items-center gap-3 bg-surface-container-low p-4 rounded border border-outline-variant">
							<span class="material-symbols-outlined text-secondary-container">check_circle</span>
							<span class="font-body-md text-primary font-semibold">Underwater Inspection</span>
						</div>
					</div>

					<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center justify-center bg-secondary text-on-secondary px-8 py-4 rounded font-button-text hover:bg-secondary-container transition-colors">
						<?php echo esc_html( bayrak_t( 'get_quotation', 'Request Technical Team' ) ); ?>
					</a>
				</div>
				<div class="lg:col-span-5">
					<div class="h-80 w-full rounded-lg overflow-hidden border border-outline-variant relative">
						<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA7pYiz-JCz7XIGAkm5J6WTppa7PSlGXnuvKrxARw7kWD21DTR4qpJSIL3DvGDfNY21tzU8Rr3a1RWpJ2uN-2P9w9dIgZwXm4PrMMRKTLqhMQlIGoO_EdciBAUazkaWpcqbYlI-__wT0pM1OeJBV7npM2-Z5t25Fyl4Wz3RA_3qQ9lU86U9co9nRAbXB-ZwCQtesS7WPMwD1Kq36-mm1CCoUq_LYicSOhoP2M5v3xIMui8D4ttkl06rbw')"></div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- Tab Switcher Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const tabButtons = document.querySelectorAll('.service-tab-btn');
	const tabPanels = document.querySelectorAll('.service-tab-panel');

	tabButtons.forEach(button => {
		button.addEventListener('click', function() {
			const targetId = this.getAttribute('data-tab');

			// Update button states
			tabButtons.forEach(btn => {
				btn.classList.remove('active', 'bg-primary', 'text-on-primary', 'shadow-lg', 'border-primary');
				btn.classList.add('bg-surface-container-lowest', 'text-on-surface-variant', 'border-outline-variant');
				btn.setAttribute('aria-selected', 'false');
			});

			this.classList.remove('bg-surface-container-lowest', 'text-on-surface-variant', 'border-outline-variant');
			this.classList.add('active', 'bg-primary', 'text-on-primary', 'shadow-lg', 'border-primary');
			this.setAttribute('aria-selected', 'true');

			// Update panel visibility
			tabPanels.forEach(panel => {
				if (panel.id === targetId) {
					panel.classList.remove('hidden');
					panel.classList.add('block');
				} else {
					panel.classList.add('hidden');
					panel.classList.remove('block');
				}
			});
		});
	});
});
</script>

<?php
get_footer();