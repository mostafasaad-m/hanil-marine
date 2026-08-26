<?php
/**
 * Template Name: Repair Services Page
 * Description: Marine Repair Services and Technical Maintenance template for Hanil Marine.
 *
 * @package Bayrak
 */

get_header();
?>

<main class="flex-grow flex flex-col">
	<!-- Hero Section -->
	<section class="relative w-full h-[60vh] min-h-[400px] flex items-center justify-start px-margin-mobile md:px-margin-desktop bg-surface-container-highest border-b border-outline-variant overflow-hidden">
		<div class="absolute inset-0 z-0">
			<img alt="<?php echo esc_attr( bayrak_t( 'repair_hero_title', 'Comprehensive Marine Repairs & Technical Maintenance' ) ); ?>" class="w-full h-full object-cover opacity-80 mix-blend-multiply filter grayscale-[30%]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhNdBXDB4yll4Opi4Uy-8HNGEHs4KzejJJOaRBtTE9_9Qa738cg1jE1aylOpdeP4_H5ATJjI7ftdwqdK3NNlXLF0xs29PXTgU5Cq5BPS4J_OvZrCvpTYPcJiUfpEV2rD1AsY-tauvPJD79rrkym58BLaJaQ7VPcPCSxc1OAbip8Wf-EQXeI_msZ6uVzTnb5SB2Kp_vDf1NKRZ04oj4VNKqTRxh2zxugMghyrcyXRWv65wHmQu4KbvyEA">
			<div class="absolute inset-0 bg-gradient-to-r from-ocean-navy/90 to-transparent"></div>
		</div>
		<div class="relative z-10 max-w-container-max mx-auto w-full flex flex-col items-start gap-4">
			<span class="font-label-caps text-label-caps text-secondary-fixed uppercase tracking-widest bg-ocean-navy/50 px-3 py-1 rounded backdrop-blur-sm border border-outline-variant/30"><?php echo esc_html( bayrak_t( 'repair_hero_badge', 'Technical Operations' ) ); ?></span>
			<h1 class="font-headline-xl text-headline-xl text-on-primary max-w-3xl leading-tight"><?php echo esc_html( bayrak_t( 'repair_hero_title', 'Comprehensive Marine Repairs & Technical Maintenance' ) ); ?></h1>
			<p class="font-body-lg text-body-lg text-on-primary-container max-w-2xl mt-2"><?php echo esc_html( bayrak_t( 'repair_hero_sub', 'Delivering precision engineering and structural integrity for global maritime assets. Expert troubleshooting and restoration when operational readiness is non-negotiable.' ) ); ?></p>
			<div class="mt-6 flex gap-4">
				<a class="bg-safety-orange text-on-primary font-button-text text-button-text px-6 py-3 rounded shadow-md hover:opacity-90 transition-opacity flex items-center gap-2" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'repair_hero_cta', 'Initiate Repair Request' ) ); ?></span>
					<span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
				</a>
			</div>
		</div>
	</section>

	<!-- Services Section - Bento Grid -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-background">
		<div class="max-w-container-max mx-auto">
			<div class="mb-12">
				<h2 class="font-headline-lg text-headline-lg text-ocean-navy mb-4 border-l-4 border-safety-orange pl-4"><?php echo esc_html( bayrak_t( 'repair_sec_title', 'Core Repair Capabilities' ) ); ?></h2>
				<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl"><?php echo esc_html( bayrak_t( 'repair_sec_sub', 'Our highly trained technical teams provide around-the-clock repair and maintenance services, minimizing vessel downtime through industrial reliability and logistical precision.' ) ); ?></p>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
				<!-- Service 1: Main & Auxiliary Engine Overhaul -->
				<div class="col-span-1 md:col-span-2 bg-surface-container-lowest border border-outline-variant rounded flex flex-col md:flex-row overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
					<div class="w-full md:w-1/2 h-64 md:h-auto relative bg-surface-container-high border-r border-outline-variant">
						<div class="w-full h-full bg-cover bg-center absolute inset-0 mix-blend-luminosity opacity-80 group-hover:opacity-100 transition-opacity duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCvH3nPcIgsC5zXWdoARZqV_3iAHcm5WMo2A98YcTHsQ8TWSUr_ObVXM-Rqi-g8f1z0ptDc0HnAEQ0bmhNPQc5aBMdkrykxSY1KHEVYfPefDeXZOcUgrGwwW2f0ri7eyEOTbLTCfcPWMVfho7q7ie803n11UkBgPSbvwrRlT3eyshjNlXGopKQHb7tFGGJCWw2fhF1Oj3LRWBC4z2UFT4JKY5ZZpQWFFWWFgiDIDXR-z7ga1aNZSOrsuw')"></div>
					</div>
					<div class="p-8 w-full md:w-1/2 flex flex-col justify-center bg-surface-container-lowest">
						<span class="material-symbols-outlined text-ocean-navy text-4xl mb-4" data-icon="settings">settings</span>
						<h3 class="font-headline-md text-headline-md text-ocean-navy mb-2"><?php echo esc_html( bayrak_t( 'repair_engine_title', 'Main & Auxiliary Engine Overhaul' ) ); ?></h3>
						<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow"><?php echo esc_html( bayrak_t( 'repair_engine_desc', 'Expert mechanical engineering and part replacement. Routine maintenance, emergency repairs, and complete overhauls to ensure optimal propulsion efficiency and reliability.' ) ); ?></p>
						<a class="text-safety-orange font-button-text text-button-text flex items-center gap-1 hover:underline w-fit" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
							<span><?php echo esc_html( bayrak_t( 'repair_specs_link', 'View Technical Specs' ) ); ?></span>
							<span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
						</a>
					</div>
				</div>

				<!-- Service 2: Steel & Piping -->
				<div class="col-span-1 bg-surface-container-lowest border border-outline-variant rounded p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
					<div class="absolute top-0 right-0 p-4 opacity-10">
						<span class="material-symbols-outlined text-8xl" data-icon="construction">construction</span>
					</div>
					<span class="material-symbols-outlined text-ocean-navy text-4xl mb-4 relative z-10" data-icon="build">build</span>
					<h3 class="font-headline-md text-headline-md text-ocean-navy mb-2 relative z-10"><?php echo esc_html( bayrak_t( 'repair_steel_title', 'Steel & Piping Fabrication' ) ); ?></h3>
					<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow relative z-10"><?php echo esc_html( bayrak_t( 'repair_steel_desc', 'Precision welding, hull repairs, and complex piping system fabrication. Executed to class-approved standards, both in-port and riding squads at-sea.' ) ); ?></p>
					<div class="mt-auto pt-4 border-t border-outline-variant/30 flex gap-2 relative z-10">
						<span class="bg-surface-container px-2 py-1 rounded font-label-caps text-label-caps text-on-surface-variant"><?php echo esc_html( bayrak_t( 'class_approved', 'Class Approved' ) ); ?></span>
						<span class="bg-surface-container px-2 py-1 rounded font-label-caps text-label-caps text-on-surface-variant"><?php echo esc_html( bayrak_t( 'in_port_at_sea', 'In-Port / At-Sea' ) ); ?></span>
					</div>
				</div>

				<!-- Service 3: Electrical & Automation -->
				<div class="col-span-1 md:col-span-3 bg-ocean-navy text-on-primary rounded border border-ocean-navy p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 shadow-sm relative overflow-hidden">
					<div class="absolute inset-0 z-0 opacity-20 pointer-events-none" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.05) 10px, rgba(255,255,255,0.05) 20px);"></div>
					<div class="flex-1 relative z-10">
						<div class="flex items-center gap-3 mb-4">
							<span class="material-symbols-outlined text-safety-orange text-3xl" data-icon="bolt">bolt</span>
							<h3 class="font-headline-md text-headline-md text-on-primary"><?php echo esc_html( bayrak_t( 'repair_elec_title', 'Electrical & Automation Repairs' ) ); ?></h3>
						</div>
						<p class="font-body-md text-body-md text-on-primary-container max-w-2xl"><?php echo esc_html( bayrak_t( 'repair_elec_desc', 'Rapid troubleshooting and meticulous restoration of critical ship systems. From switchboard maintenance to complex automation panel repairs, ensuring navigational safety and operational continuity.' ) ); ?></p>
					</div>
					<div class="flex-shrink-0 relative z-10 w-full md:w-auto">
						<div class="bg-surface-container-highest/10 backdrop-blur border border-outline-variant/20 p-6 rounded text-center">
							<p class="font-label-caps text-label-caps text-primary-fixed uppercase tracking-wider mb-2"><?php echo esc_html( bayrak_t( 'rapid_response_badge', '24/7 Rapid Response' ) ); ?></p>
							<a class="inline-block bg-transparent border border-on-primary text-on-primary font-button-text text-button-text px-6 py-2 rounded hover:bg-on-primary hover:text-ocean-navy transition-colors w-full md:w-auto" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>"><?php echo esc_html( bayrak_t( 'request_technician', 'Request Technician' ) ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low border-t border-b border-outline-variant">
		<div class="max-w-container-max mx-auto flex flex-col items-center text-center">
			<span class="material-symbols-outlined text-4xl text-ocean-navy mb-4" data-icon="description">description</span>
			<h2 class="font-headline-lg text-headline-lg text-ocean-navy mb-4"><?php echo esc_html( bayrak_t( 'repair_cta_title', 'Need Immediate Technical Assistance?' ) ); ?></h2>
			<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mb-8"><?php echo esc_html( bayrak_t( 'repair_cta_desc', 'Submit a detailed service request through our quotation workflow for expedited review and mobilization.' ) ); ?></p>
			<a class="bg-safety-orange text-on-primary font-button-text text-button-text px-8 py-3 rounded shadow-md hover:opacity-90 transition-opacity" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>"><?php echo esc_html( bayrak_t( 'access_quote_workflow', 'Access Quotation Workflow' ) ); ?></a>
		</div>
	</section>
</main>

<?php get_footer(); ?>