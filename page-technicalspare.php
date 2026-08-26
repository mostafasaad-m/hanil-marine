<?php
/**
 * Template Name: Technical Spares Page
 * Description: Global Technical Spares & Maritime Engineering Support page template for Hanil Marine.
 *
 * @package Bayrak
 */

get_header();
?>

<main class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
	<!-- Hero Section -->
	<header class="relative w-full h-[60vh] min-h-[500px] flex items-center justify-start overflow-hidden rounded-xl mb-section-gap">
		<div class="absolute inset-0 z-0">
			<div class="absolute inset-0 bg-ocean-navy/70 z-10"></div>
			<img alt="<?php echo esc_attr( bayrak_t( 'tech_hero_title', 'Global Technical Spares & Maritime Engineering Support' ) ); ?>" class="w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/aida/AEtjO1U9fmKEFTQ6gKyV_qJr56tcqceXeacPvcgV-DcCC0Dl_rUD3FJtku8zhWydvR3jjSizbDGWn6MMk4Uul9nbkDPWsE0uxh5Mi-u5dCtsqja7Wk3nQ5pNDaeAfVklesWY8ANeBy5flY4mkH0ZVygEID0VtHjeFOH9f0E0NUHpXN02HQxenSLls3Sf3jciuI_x0Mh6wgBF-vsJor1ceRIKH78oEnDRywEh9XC--eFxvYhaWNba4Tt8ebkoy1Y"/>
		</div>
		<div class="relative z-20 w-full px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
			<div class="max-w-3xl">
				<span class="inline-block px-3 py-1 mb-4 border border-safety-orange text-safety-orange font-label-caps text-label-caps uppercase rounded-sm"><?php echo esc_html( bayrak_t( 'tech_hero_badge', 'Operational Readiness' ) ); ?></span>
				<h1 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl text-white mb-6">
					<?php echo esc_html( bayrak_t( 'tech_hero_title', 'Global Technical Spares & Maritime Engineering Support' ) ); ?>
				</h1>
				<p class="font-body-lg text-body-lg text-surface-dim mb-8 max-w-2xl">
					<?php echo esc_html( bayrak_t( 'tech_hero_sub', 'Providing certified OEM and high-quality replacement parts for deck, engine, and electrical systems across all Egyptian ports. We ensure your vessel remains fully operational with precise, timely logistics.' ) ); ?>
				</p>
				<a class="bg-safety-orange hover:bg-secondary text-white font-button-text text-button-text px-8 py-4 rounded transition-colors duration-200 inline-flex items-center gap-2 shadow-lg shadow-safety-orange/20" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Technical Parts & Spares' ) ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'submit_rfq_now', 'Submit RFQ Now' ) ); ?></span>
				</a>
			</div>
		</div>
	</header>

	<!-- Section Header -->
	<div class="mb-12 border-l-4 border-safety-orange pl-4">
		<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-ocean-navy"><?php echo esc_html( bayrak_t( 'tech_sec_title', 'Technical Supply Categories' ) ); ?></h2>
		<p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-3xl"><?php echo esc_html( bayrak_t( 'tech_sec_sub', 'Comprehensive inventory management for critical maritime operations.' ) ); ?></p>
	</div>

	<!-- Service Categories Grid (Bento-style layout) -->
	<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-section-gap">
		<!-- Category 1: Engine & Deck Spares -->
		<div class="group bg-surface-container-lowest border border-outline-variant rounded hover:shadow-lg transition-all duration-300 flex flex-col overflow-hidden h-full">
			<div class="h-48 w-full relative overflow-hidden bg-surface-container-low">
				<img alt="<?php echo esc_attr( bayrak_t( 'tech_c1_title', 'Engine & Deck Spares' ) ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1V_z1cmLDbCIOWeMm8C7-euWReaGjwtWZkV9ekXQbZXO06Y2iFcsNs7o8B-WhNwM8PQXfLe3glPtuW46WuoX0DxDKZ2umZjnKEwCk12vrWCoaLn9o2wkHwX4ws6AP3TNiafygG909GsEGiubdBVgp6ayBW2jStU-SaBlMMNGsPIaZrFcpScFQ-ycoy6lcLTe-4Q62t9xGFRuea2HLuDnebbtUyKDSUmsu5uc6i8i1hVODOb5TlyO57iDCw"/>
				<div class="absolute inset-0 bg-gradient-to-t from-ocean-navy/80 to-transparent"></div>
				<div class="absolute bottom-4 left-4 flex items-center gap-2 text-white">
					<h3 class="font-headline-md text-headline-md"><?php echo esc_html( bayrak_t( 'tech_c1_title', 'Engine & Deck Spares' ) ); ?></h3>
				</div>
			</div>
			<div class="p-6 flex-grow flex flex-col justify-between">
				<p class="font-body-md text-body-md text-on-surface-variant mb-6">
					<?php echo esc_html( bayrak_t( 'tech_c1_desc', 'Complete range of mechanical components, gaskets, and filters sourced from trusted manufacturers to ensure vessel reliability.' ) ); ?>
				</p>
				<ul class="space-y-2 font-body-md text-sm text-ocean-navy/80 mb-6 border-t border-outline-variant/30 pt-4">
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c1_item1', 'Pumps & Compressors' ) ); ?></li>
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c1_item2', 'Valves & Bearings' ) ); ?></li>
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c1_item3', 'Filtration Systems' ) ); ?></li>
				</ul>
				<a class="inline-flex items-center gap-1 font-button-text text-button-text text-ocean-navy hover:text-safety-orange transition-colors mt-auto" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Technical Parts & Spares' ) ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'view_inv_details', 'View Inventory Details' ) ); ?></span>
				</a>
			</div>
		</div>

		<!-- Category 2: Electrical & Automation -->
		<div class="group bg-surface-container-lowest border border-outline-variant rounded hover:shadow-lg transition-all duration-300 flex flex-col overflow-hidden h-full">
			<div class="h-48 w-full relative overflow-hidden bg-surface-container-low">
				<img alt="<?php echo esc_attr( bayrak_t( 'tech_c2_title', 'Electrical & Automation' ) ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1U7uO4f7pa2wwBoveSkM-e7o-bgHcZdYHcYq5U1KHhCLtmKoUFy6lVUzssk7ZOR5oAF74U2v8EgxWW8TSfxO_aXkqx4DXWSXr68u0lSmSTgOMPkEnaeSnjwP5EZmEbNGqehUe_JzDUFsY9jr3ScnoOja0K52xBIwp-cN_AhxAXJ6s1dCxhdC4A6g9Otl0lz3RRjRNJi4JiN7AyGATigPmifpckVRwOcIF24w4yqARsbIVsWazsPBe-IA2na"/>
				<div class="absolute inset-0 bg-gradient-to-t from-ocean-navy/80 to-transparent"></div>
				<div class="absolute bottom-4 left-4 flex items-center gap-2 text-white">
					<h3 class="font-headline-md text-headline-md"><?php echo esc_html( bayrak_t( 'tech_c2_title', 'Electrical & Automation' ) ); ?></h3>
				</div>
			</div>
			<div class="p-6 flex-grow flex flex-col justify-between">
				<p class="font-body-md text-body-md text-on-surface-variant mb-6">
					<?php echo esc_html( bayrak_t( 'tech_c2_desc', 'Specialized sensors, control panels, and automation modules to ensure modern vessel operational readiness.' ) ); ?>
				</p>
				<ul class="space-y-2 font-body-md text-sm text-ocean-navy/80 mb-6 border-t border-outline-variant/30 pt-4">
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c2_item1', 'Navigational Equipment' ) ); ?></li>
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c2_item2', 'Sensors & Transmitters' ) ); ?></li>
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c2_item3', 'Switchgear & Breakers' ) ); ?></li>
				</ul>
				<a class="inline-flex items-center gap-1 font-button-text text-button-text text-ocean-navy hover:text-safety-orange transition-colors mt-auto" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Technical Parts & Spares' ) ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'view_inv_details', 'View Inventory Details' ) ); ?></span>
				</a>
			</div>
		</div>

		<!-- Category 3: Cabin & Safety Stores -->
		<div class="group bg-surface-container-lowest border border-outline-variant rounded hover:shadow-lg transition-all duration-300 flex flex-col overflow-hidden h-full">
			<div class="h-48 w-full relative overflow-hidden bg-surface-container-low">
				<img alt="<?php echo esc_attr( bayrak_t( 'tech_c3_title', 'Cabin & Safety Stores' ) ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1V9hajpkmBgIb6NhnytPAvtFvjlCj1vmi5g8qrZC-I9xbvqxt6fHBsIBZQqKai6O1qUKlnPen-7fcNm54JhJMFvv87TUHJgc3WWdhXDLZjBQHKkXwhM6vWWNoei5GkdWfeKyR8Y-ZbgrA1BdrzmK2wj1IXcOT7NtJaNZaP4rvLSYyWq_0nYO6KCZsQ2nt4HcLm4W3P_nDIYaiPdLAU0hxT4EL_PlRAOsTGjCLa14h9YJImbGcAwnbyqQ7jV"/>
				<div class="absolute inset-0 bg-gradient-to-t from-ocean-navy/80 to-transparent"></div>
				<div class="absolute bottom-4 left-4 flex items-center gap-2 text-white">
					<h3 class="font-headline-md text-headline-md"><?php echo esc_html( bayrak_t( 'tech_c3_title', 'Cabin & Safety Stores' ) ); ?></h3>
				</div>
			</div>
			<div class="p-6 flex-grow flex flex-col justify-between">
				<p class="font-body-md text-body-md text-on-surface-variant mb-6">
					<?php echo esc_html( bayrak_t( 'tech_c3_desc', 'Certified safety equipment, life-saving appliances, and comprehensive cabin supplies for crew protection.' ) ); ?>
				</p>
				<ul class="space-y-2 font-body-md text-sm text-ocean-navy/80 mb-6 border-t border-outline-variant/30 pt-4">
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c3_item1', 'Life Saving Appliances (LSA)' ) ); ?></li>
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c3_item2', 'Fire Fighting Equipment (FFE)' ) ); ?></li>
					<li class="flex items-start gap-2"><span class="text-safety-orange font-bold text-sm">✓</span> <?php echo esc_html( bayrak_t( 'tech_c3_item3', 'General Cabin Consumables' ) ); ?></li>
				</ul>
				<a class="inline-flex items-center gap-1 font-button-text text-button-text text-ocean-navy hover:text-safety-orange transition-colors mt-auto" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Technical Parts & Spares' ) ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'view_inv_details', 'View Inventory Details' ) ); ?></span>
				</a>
			</div>
		</div>
	</div>

	<!-- Engineering Excellence / Info Panel -->
	<div class="bg-tertiary-fixed rounded border border-outline-variant/50 p-8 md:p-12 flex flex-col md:flex-row gap-12 items-center justify-between mb-section-gap">
		<div class="md:w-1/2">
			<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-ocean-navy mb-4"><?php echo esc_html( bayrak_t( 'eng_excellence_title', 'Engineering Excellence & Logistics' ) ); ?></h2>
			<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
				<?php echo esc_html( bayrak_t( 'eng_excellence_desc', 'We understand that time in port is critical. Our dedicated technical team operates with precision to ensure the correct parts are identified, procured, and delivered seamlessly to your vessel.' ) ); ?>
			</p>
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
				<div class="flex items-start gap-3">
					<div class="w-8 h-8 rounded-full bg-safety-orange/10 text-safety-orange flex items-center justify-center font-bold text-sm shrink-0">✓</div>
					<div>
						<h4 class="font-headline-md text-[18px] text-ocean-navy"><?php echo esc_html( bayrak_t( 'oem_certified_title', 'OEM Certified' ) ); ?></h4>
						<p class="font-body-md text-sm text-on-surface-variant"><?php echo esc_html( bayrak_t( 'oem_certified_desc', 'Sourced directly from certified global manufacturers.' ) ); ?></p>
					</div>
				</div>
				<div class="flex items-start gap-3">
					<div class="w-8 h-8 rounded-full bg-safety-orange/10 text-safety-orange flex items-center justify-center font-bold text-sm shrink-0">✓</div>
					<div>
						<h4 class="font-headline-md text-[18px] text-ocean-navy"><?php echo esc_html( bayrak_t( 'rapid_delivery_title', 'Rapid Delivery' ) ); ?></h4>
						<p class="font-body-md text-sm text-on-surface-variant"><?php echo esc_html( bayrak_t( 'rapid_delivery_desc', 'Expedited customs clearance for all Egyptian ports.' ) ); ?></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Quick RFQ CTA Area -->
		<div class="md:w-5/12 w-full bg-white p-6 md:p-8 rounded shadow-sm border border-outline-variant/30 text-center">
			<h3 class="font-headline-md text-headline-md text-ocean-navy mb-2"><?php echo esc_html( bayrak_t( 'sec_tech_supply_title', 'Secure Your Technical Supply' ) ); ?></h3>
			<p class="font-body-md text-sm text-on-surface-variant mb-6"><?php echo esc_html( bayrak_t( 'sec_tech_supply_sub', 'Submit your IMPA codes or technical specifications for immediate processing.' ) ); ?></p>
			<a class="block w-full bg-ocean-navy hover:bg-primary-container text-white font-button-text text-button-text py-4 rounded transition-colors duration-200" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Technical Parts & Spares' ) ) ); ?>">
				<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Proceed to Full Quotation' ) ); ?></span>
			</a>
		</div>
	</div>
</main>

<?php get_footer(); ?>