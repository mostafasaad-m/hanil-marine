<?php
/**
 * Template Name: Bunker & Fuel Trading Page
 * Description: Strategic Bunker Trading & Precision Fueling template for Hanil Marine.
 *
 * @package Bayrak
 */

get_header();
?>

<main class="flex-grow">
	<!-- Hero Section -->
	<section class="relative w-full h-[60vh] min-h-[500px] flex items-center">
		<div class="absolute inset-0 z-0">
			<img alt="<?php echo esc_attr( bayrak_t( 'bunker_hero_title', 'Strategic Bunker Trading & Precision Fueling' ) ); ?>" class="w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4dMV1a2W5rLHECT7ECT-69e0_FarRbBNT1QFnHordoMNW1Cafzf1vWtMDa9yx7CWRrXhuUNQz4fW3tJNQ2ymdqu64qTkbslRucXEBZFybDkHuXDo4UPMN_3Ut1NgL3QUvF72CBwwivLQrpJjOJEDKQlJ2BgDsc3CBykAs-nota6X4Xvi1uX5KhAWTCqZ-PehEswXK3QVF-9-aze7_WT0J72JKeZOyX9_pwDP_piT-Ncd3_QXYXmdDdg">
			<div class="absolute inset-0 bg-ocean-navy/60"></div>
		</div>
		<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full">
			<div class="max-w-3xl">
				<span class="font-label-caps text-label-caps text-safety-orange uppercase mb-4 block tracking-widest"><?php echo esc_html( bayrak_t( 'bunker_hero_badge', 'Global Energy Logistics' ) ); ?></span>
				<h1 class="font-headline-xl text-headline-xl text-on-primary mb-6"><?php echo esc_html( bayrak_t( 'bunker_hero_title', 'Strategic Bunker Trading & Precision Fueling' ) ); ?></h1>
				<p class="font-body-lg text-body-lg text-on-primary-container mb-8 max-w-2xl"><?php echo esc_html( bayrak_t( 'bunker_hero_sub', 'Ensuring operational continuity for global maritime fleets with ISO-certified marine fuels, advanced lubricants, and reliable 24/7 logistics across all Egyptian ports.' ) ); ?></p>
				<a class="bg-safety-orange text-on-primary font-button-text text-button-text px-8 py-4 rounded hover:bg-secondary-container transition-colors shadow-lg hover:shadow-xl inline-flex items-center gap-2 uppercase tracking-wide" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Bunker & Fuel Trading' ) ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'bunker_hero_cta', 'Initiate Quotation Workflow' ) ); ?></span>
				</a>
			</div>
		</div>
	</section>

	<!-- Services Bento Grid -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface max-w-container-max mx-auto">
		<div class="mb-12">
			<h2 class="font-headline-lg text-headline-lg text-primary mb-4 border-l-4 border-safety-orange pl-4"><?php echo esc_html( bayrak_t( 'bunker_sec_title', 'Core Trading Competencies' ) ); ?></h2>
			<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl"><?php echo esc_html( bayrak_t( 'bunker_sec_sub', 'Our integrated bunker solutions prioritize quality assurance, precise delivery scheduling, and strict compliance with international maritime standards.' ) ); ?></p>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
			<!-- Marine Fuel Oils -->
			<div class="bg-surface-container-lowest border border-outline-variant p-8 rounded hover:border-surface-tint transition-colors group flex flex-col md:col-span-2 relative overflow-hidden">
				<div class="mb-6 flex items-center justify-between">
					<span class="bg-surface-container-high text-on-surface-variant font-label-caps text-label-caps px-3 py-1 rounded-full border border-outline-variant"><?php echo esc_html( bayrak_t( 'iso_8217_badge', 'ISO 8217 Certified' ) ); ?></span>
				</div>
				<h3 class="font-headline-md text-headline-md text-primary mb-4 relative z-10"><?php echo esc_html( bayrak_t( 'bunker_c1_title', 'Marine Fuel Oils (VLSFO/LSMGO)' ) ); ?></h3>
				<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow relative z-10"><?php echo esc_html( bayrak_t( 'bunker_c1_desc', 'Premium, quality-assured low-sulfur marine gasoil and very low sulfur fuel oil. Sourced from globally recognized refineries, our fuels guarantee optimal engine performance and strict adherence to current emission regulations.' ) ); ?></p>
				<ul class="space-y-2 mb-6 font-body-md text-body-md text-on-surface-variant relative z-10">
					<li class="flex items-center gap-2">
						<span class="text-safety-orange font-bold text-sm">✓</span>
						<span><?php echo esc_html( bayrak_t( 'bunker_c1_check1', 'Pre-delivery quality testing' ) ); ?></span>
					</li>
					<li class="flex items-center gap-2">
						<span class="text-safety-orange font-bold text-sm">✓</span>
						<span><?php echo esc_html( bayrak_t( 'bunker_c1_check2', 'Transparent density & viscosity reporting' ) ); ?></span>
					</li>
				</ul>
				<a class="font-button-text text-button-text text-ocean-navy hover:text-safety-orange transition-colors inline-flex items-center gap-1 uppercase tracking-wide relative z-10 mt-auto" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Bunker & Fuel Trading' ) ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'bunker_c1_link', 'View Specifications' ) ); ?></span>
				</a>
			</div>

			<!-- Lubricants & Specialty Chemicals -->
			<div class="bg-surface-container-lowest border border-outline-variant p-8 rounded hover:border-surface-tint transition-colors group flex flex-col">
				<h3 class="font-headline-md text-headline-md text-primary mb-4"><?php echo esc_html( bayrak_t( 'bunker_c2_title', 'Lubricants & Specialty Chemicals' ) ); ?></h3>
				<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow"><?php echo esc_html( bayrak_t( 'bunker_c2_desc', 'A complete range of high-performance engine oils, hydraulic fluids, and specialty maritime chemicals designed to extend machinery lifespan under extreme conditions.' ) ); ?></p>
				<div class="space-y-4 mt-auto mb-6">
					<div class="flex items-center justify-between border-b border-outline-variant pb-2">
						<span class="font-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'main_engine_oils', 'Main Engine Oils' ) ); ?></span>
					</div>
					<div class="flex items-center justify-between border-b border-outline-variant pb-2">
						<span class="font-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'auxiliary_oils', 'Auxiliary Oils' ) ); ?></span>
					</div>
				</div>
				<a class="font-button-text text-button-text text-ocean-navy hover:text-safety-orange transition-colors inline-flex items-center gap-1 uppercase tracking-wide mt-auto" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Bunker & Fuel Trading' ) ) ); ?>">
					<span>Inquire About Lubricants &rarr;</span>
				</a>
			</div>

			<!-- Logistics Container -->
			<div class="bg-tertiary text-on-tertiary p-8 rounded md:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-gutter items-center relative overflow-hidden">
				<div class="relative z-10">
					<h3 class="font-headline-lg text-headline-lg mb-4 flex items-center gap-3">
						<span><?php echo esc_html( bayrak_t( 'bunker_c3_title', '24/7 Bunkering Logistics' ) ); ?></span>
					</h3>
					<p class="font-body-lg text-body-lg text-tertiary-fixed-dim mb-6"><?php echo esc_html( bayrak_t( 'bunker_c3_desc', 'Our dedicated logistical fleet ensures reliable, precision delivery across all major Egyptian ports. We operate round-the-clock to minimize your vessel\'s downtime.' ) ); ?></p>
					<div class="flex flex-wrap gap-3">
						<span class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint"><?php echo esc_html( bayrak_t( 'port_said', 'Port Said' ) ); ?></span>
						<span class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint"><?php echo esc_html( bayrak_t( 'port_alexandria', 'Alexandria' ) ); ?></span>
						<span class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint"><?php echo esc_html( bayrak_t( 'port_suez', 'Suez' ) ); ?></span>
						<span class="bg-primary-container text-on-primary-container font-label-caps text-label-caps px-4 py-2 rounded border border-surface-tint"><?php echo esc_html( bayrak_t( 'port_damietta', 'Damietta' ) ); ?></span>
					</div>
				</div>
				<div class="relative z-10 flex justify-end">
					<div class="bg-industrial-slate p-6 rounded border border-outline-variant/30 w-full max-w-sm backdrop-blur-sm">
						<div class="flex items-center gap-4 mb-4">
							<div>
								<h4 class="font-headline-md text-headline-md text-on-tertiary"><?php echo esc_html( bayrak_t( 'ops_center_title', 'Operations Center' ) ); ?></h4>
								<span class="font-body-md text-tertiary-fixed-dim text-sm"><?php echo esc_html( bayrak_t( 'always_active', 'Always Active' ) ); ?></span>
							</div>
						</div>
						<p class="font-body-md text-tertiary-fixed-dim mb-4"><?php echo esc_html( bayrak_t( 'bunker_ops_desc', 'Direct communication line for urgent bunkering requests or ETA updates.' ) ); ?></p>
						<a class="block w-full text-center bg-transparent border border-on-tertiary text-on-tertiary font-button-text text-button-text px-4 py-3 rounded hover:bg-on-tertiary hover:text-primary transition-colors uppercase tracking-wide" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
							<span><?php echo esc_html( bayrak_t( 'contact_logistics', 'Contact Logistics' ) ); ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Workflow CTA -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-sea-foam-gray border-t border-b border-outline-variant">
		<div class="max-w-4xl mx-auto text-center">
			<h2 class="font-headline-lg text-headline-lg text-primary mb-6"><?php echo esc_html( bayrak_t( 'bunker_cta_title', 'Streamlined Quotation Workflow' ) ); ?></h2>
			<p class="font-body-lg text-body-lg text-on-surface-variant mb-8"><?php echo esc_html( bayrak_t( 'bunker_cta_desc', 'Access real-time pricing and secure your bunker allocations with our precision digital quotation system. Designed for rapid procurement and full transparency.' ) ); ?></p>
			<div class="flex justify-center gap-4">
				<a class="bg-safety-orange text-on-primary font-button-text text-button-text px-8 py-4 rounded hover:bg-secondary-container transition-colors shadow-lg uppercase tracking-wide" href="<?php echo esc_url( home_url( '/step-1?service=' . urlencode( 'Bunker & Fuel Trading' ) ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'request_bunker_quote', 'Request Bunker Quote' ) ); ?></span>
				</a>
				<a class="bg-transparent border border-ocean-navy text-ocean-navy font-button-text text-button-text px-8 py-4 rounded hover:bg-ocean-navy hover:text-on-primary transition-colors uppercase tracking-wide" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'view_product_catalog', 'View Product Catalog' ) ); ?></span>
				</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>