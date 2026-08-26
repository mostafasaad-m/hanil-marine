<?php
/**
 * Template Name: Safety & SOLAS Page
 * Description: Certified Maritime Safety & SOLAS Compliance page template for Hanil Marine.
 *
 * @package Bayrak
 */

get_header();
?>

<main class="flex-grow">
	<!-- Hero Section -->
	<section class="relative pt-32 pb-40 px-margin-mobile md:px-margin-desktop flex items-center justify-start min-h-[70vh]">
		<div class="absolute inset-0 z-0">
			<div class="absolute inset-0 bg-ocean-navy/70 z-10 mix-blend-multiply"></div>
			<div class="absolute inset-0 bg-gradient-to-r from-ocean-navy via-ocean-navy/80 to-transparent z-10"></div>
			<img alt="<?php echo esc_attr( bayrak_t( 'solas_hero_title', 'Certified Maritime Safety & SOLAS Compliance' ) ); ?>" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOn2ydaOMiQgd84ZFqz0kwgWdmAfiP7Zvj76JPou6Yy-9f2t3-9IqR_Pifk5Sb9OQvcq_KbemvseviO9vuomxG1639K2HV-_ZaXyBO9rj98E6MwGijf9SJ46KvsdnT1ZoeJKppUMkgFS-7gLNvoEwJ69AcKmDMFaPOCfJwgMCxZ5W9Z5bSKQNC5v2E181L7m-g9XLj-WlFmTAGE8rj-hyLSG-_lz4VCnvRI6kll6opAryKrs4G3anKVw"/>
		</div>
		<div class="relative z-20 max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop">
			<div class="max-w-3xl text-left">
				<h1 class="text-headline-xl font-headline-xl text-on-primary mb-6 leading-tight"><?php echo esc_html( bayrak_t( 'solas_hero_title', 'Certified Maritime Safety & SOLAS Compliance' ) ); ?></h1>
				<p class="text-body-lg font-body-lg text-surface-container-high mb-10 max-w-2xl"><?php echo esc_html( bayrak_t( 'solas_hero_sub', 'Equipping global fleets with reliable, class-approved life-saving and fire-fighting systems across all Egyptian ports.' ) ); ?></p>
				<a class="bg-safety-orange text-on-primary px-8 py-4 rounded text-button-text font-button-text hover:bg-secondary-container transition-colors shadow-lg shadow-safety-orange/20 inline-block" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>"><?php echo esc_html( bayrak_t( 'solas_hero_cta', 'Request Safety Inspection' ) ); ?></a>
			</div>
		</div>
	</section>

	<!-- Equipment Categories Section -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
		<div class="mb-12">
			<h2 class="text-headline-lg font-headline-lg text-ocean-navy"><?php echo esc_html( bayrak_t( 'solas_sec_title', 'Safety Equipment Categories' ) ); ?></h2>
			<div class="h-1 w-16 bg-safety-orange mt-4"></div>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
			<!-- Card 1 -->
			<div class="bg-surface-container-lowest border border-outline-variant rounded flex flex-col h-full group hover:shadow-md transition-shadow duration-300">
				<div class="h-48 overflow-hidden relative">
					<img alt="<?php echo esc_attr( bayrak_t( 'solas_c1_title', 'Life-Saving Appliances (LSA)' ) ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYiLL4fu8pOn_RjpHmMrrE8slJpbifzVDVv7fc3Wqau35_OQgmx79yGZQp33sZ-yTD_84EJBkq6b8Q5Y3itP0xrOiWaVfego79Cu9X5uPl8tcnWbIEBzae9e7TwKiGrX4ENady9e_UsII91RomdIgZllCkrE6dZ8_zPVqMSfvGJSPkdWCTJGoRp2w4qPr8CmLWZE-greTtXqDQQ2VGMDQwpqm-rsduiex_lUUpd3WDSpkh7OyLDxdepw"/>
					<div class="absolute top-4 left-4 bg-ocean-navy text-on-primary px-3 py-1 rounded text-label-caps font-label-caps">SOLAS COMPLIANT</div>
				</div>
				<div class="p-6 flex flex-col flex-grow">
					<h3 class="text-headline-md font-headline-md text-ocean-navy mb-3"><?php echo esc_html( bayrak_t( 'solas_c1_title', 'Life-Saving Appliances (LSA)' ) ); ?></h3>
					<p class="text-body-md font-body-md text-on-surface-variant flex-grow"><?php echo esc_html( bayrak_t( 'solas_c1_desc', 'Life jackets, lifebuoys, lifeboats, and survival suits certified under international standards.' ) ); ?></p>
					<a class="mt-6 text-ocean-navy font-button-text text-button-text flex items-center group-hover:text-safety-orange transition-colors" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
						<span><?php echo esc_html( bayrak_t( 'view_catalog', 'View Catalog' ) ); ?></span>
					</a>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="bg-surface-container-lowest border border-outline-variant rounded flex flex-col h-full group hover:shadow-md transition-shadow duration-300">
				<div class="h-48 overflow-hidden relative">
					<img alt="<?php echo esc_attr( bayrak_t( 'solas_c2_title', 'Fire-Fighting Equipment (FFE)' ) ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMNX5HzvbkwDMYyp_xER8sgusWraRvjlo7_c6K8YOWYYfMdFOz7UyAMft00m7-bgmq3RfJLT_P75q5AtFJHOwvryJ5AoOcTibj9CBZh0BiPpg0dgDEmMzj6UDhVUWRGlOno6RJM2hzLLJGLshsdli2BHXIqNEA4UgGqkldCXQO_8ihd8Y8EQaFwtPVm8C33SQM7FC6MEU1lbpEzPRdHVA8biuTOYEf9Sow6VayqNLOCM4IITVAbwhUcQ"/>
				</div>
				<div class="p-6 flex flex-col flex-grow">
					<h3 class="text-headline-md font-headline-md text-ocean-navy mb-3"><?php echo esc_html( bayrak_t( 'solas_c2_title', 'Fire-Fighting Equipment (FFE)' ) ); ?></h3>
					<p class="text-body-md font-body-md text-on-surface-variant flex-grow"><?php echo esc_html( bayrak_t( 'solas_c2_desc', 'Extinguishers, fire hoses, pumps, and protective gear maintained for immediate operational readiness.' ) ); ?></p>
					<a class="mt-6 text-ocean-navy font-button-text text-button-text flex items-center group-hover:text-safety-orange transition-colors" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
						<span><?php echo esc_html( bayrak_t( 'view_catalog', 'View Catalog' ) ); ?></span>
					</a>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="bg-surface-container-lowest border border-outline-variant rounded flex flex-col h-full group hover:shadow-md transition-shadow duration-300">
				<div class="h-48 overflow-hidden relative">
					<img alt="<?php echo esc_attr( bayrak_t( 'solas_c3_title', 'Pyrotechnics & Signaling' ) ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYgqyZs3LXHzx0vdXOL1t2BgH-HTF06uxaETPlUchvGhKQB7YpMyOQgI-6t_ocsp70NCL7xvdFHdz-R6lnjcTFSTHBCyLadHqd0y-VwqQdpP545jLblnBd_Z26QQcGcDbqi7F6iIgnU0i-sqMTIKg8X046DRWEavwtDPBasLnj27TDnooPz-SreWMSI2B7DfYsdjOjCyd1TlMOArRC66v5CWMLSgUolXa0Mhk0Nim9kY2Lqo8EXamfcg"/>
				</div>
				<div class="p-6 flex flex-col flex-grow">
					<h3 class="text-headline-md font-headline-md text-ocean-navy mb-3"><?php echo esc_html( bayrak_t( 'solas_c3_title', 'Pyrotechnics & Signaling' ) ); ?></h3>
					<p class="text-body-md font-body-md text-on-surface-variant flex-grow"><?php echo esc_html( bayrak_t( 'solas_c3_desc', 'Parachute flares, smoke signals, and line-throwing appliances compliant with SOLAS/IMO regulations.' ) ); ?></p>
					<a class="mt-6 text-ocean-navy font-button-text text-button-text flex items-center group-hover:text-safety-orange transition-colors" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
						<span><?php echo esc_html( bayrak_t( 'view_catalog', 'View Catalog' ) ); ?></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Compliance Section -->
	<section class="bg-sea-foam-gray py-section-gap border-y border-outline-variant">
		<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
				<div>
					<h2 class="text-headline-lg font-headline-lg text-ocean-navy mb-6"><?php echo esc_html( bayrak_t( 'uncompromising_safety_title', 'Uncompromising Safety Standards' ) ); ?></h2>
					<p class="text-body-lg font-body-lg text-on-surface-variant mb-8"><?php echo esc_html( bayrak_t( 'uncompromising_safety_sub', 'We ensure your vessel remains fully compliant with latest maritime regulations through precise sourcing and certified equipment maintenance.' ) ); ?></p>
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
						<div class="flex items-start">
							<div class="w-8 h-8 rounded-full bg-ocean-navy/10 text-ocean-navy flex items-center justify-center font-bold text-sm mr-3 shrink-0">✓</div>
							<div>
								<h4 class="text-body-md font-body-md font-bold text-ocean-navy"><?php echo esc_html( bayrak_t( 'solas_approved', 'SOLAS Approved' ) ); ?></h4>
							</div>
						</div>
						<div class="flex items-start">
							<div class="w-8 h-8 rounded-full bg-ocean-navy/10 text-ocean-navy flex items-center justify-center font-bold text-sm mr-3 shrink-0">✓</div>
							<div>
								<h4 class="text-body-md font-body-md font-bold text-ocean-navy"><?php echo esc_html( bayrak_t( 'iso_cert_logistics', 'ISO Certified Logistics' ) ); ?></h4>
							</div>
						</div>
						<div class="flex items-start">
							<div class="w-8 h-8 rounded-full bg-ocean-navy/10 text-ocean-navy flex items-center justify-center font-bold text-sm mr-3 shrink-0">✓</div>
							<div>
								<h4 class="text-body-md font-body-md font-bold text-ocean-navy"><?php echo esc_html( bayrak_t( 'annual_inspections', 'Annual Inspections & Servicing' ) ); ?></h4>
							</div>
						</div>
						<div class="flex items-start">
							<div class="w-8 h-8 rounded-full bg-ocean-navy/10 text-ocean-navy flex items-center justify-center font-bold text-sm mr-3 shrink-0">✓</div>
							<div>
								<h4 class="text-body-md font-body-md font-bold text-ocean-navy"><?php echo esc_html( bayrak_t( 'rapid_port_delivery', 'Rapid Port Delivery' ) ); ?></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="relative h-[400px] rounded border border-outline-variant overflow-hidden">
					<img class="w-full h-full object-cover" alt="<?php echo esc_attr( bayrak_t( 'uncompromising_safety_title', 'Uncompromising Safety Standards' ) ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlMjjGhPYAZWWj7LuIIgZ-sVfOYdvOKTBMosiVm8Q4MGvFYPUCKJhw-8H5WWZlWNmGoft8mXU1zpHAASLcA-ty-QQ4mmW9rie407Y6UOtmZuPJ_QtCZrdfu3VnoUH9P64nc3BTsr8LVBzDukMp3OhxGA2n24kPZsBheH_qFidl9HdFnOlG2y04nFcp_03LfeUAaQ12_ClsCq2_8CcGMhZv2JxVVx1XCy4g-7MKCxmjiGUq18A1nVSSuQ"/>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="bg-ocean-navy relative py-20 px-margin-mobile md:px-margin-desktop overflow-hidden">
		<div class="max-w-container-max mx-auto text-center relative z-10">
			<h2 class="text-headline-lg font-headline-lg text-on-primary mb-6"><?php echo esc_html( bayrak_t( 'secure_vessel_safety_title', 'Secure Your Vessel\'s Safety' ) ); ?></h2>
			<p class="text-body-lg font-body-lg text-primary-fixed-dim mb-8 max-w-2xl mx-auto"><?php echo esc_html( bayrak_t( 'secure_vessel_safety_sub', 'Contact our safety specialists today for a comprehensive quote on SOLAS-compliant equipment and maintenance services.' ) ); ?></p>
			<a class="bg-safety-orange text-on-primary px-8 py-4 rounded text-button-text font-button-text hover:bg-secondary-container transition-colors shadow-lg shadow-safety-orange/20 inline-block" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>"><?php echo esc_html( bayrak_t( 'get_quotation', 'Start Quotation Request' ) ); ?></a>
		</div>
	</section>
</main>

<?php get_footer(); ?>