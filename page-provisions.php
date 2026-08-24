<?php
/**
 * Template Name: Provisions Service Page
 * Description: Complete Ship Provisions Supply service page template for Hanil Marine.
 */
get_header();
?>

<main class="flex-grow">
	<!-- Hero Section -->
	<section class="relative w-full h-[520px] flex items-center bg-primary overflow-hidden">
		<div class="absolute inset-0 z-0">
			<div class="w-full h-full bg-cover bg-center opacity-40 mix-blend-luminosity" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAJL65e8a0VGY9nI-WWNDrkeDjwid_NYSggEqSGvSQu7FsiXjUS-cRYwwo9qvQxwfb7YSuDJ_1ihPgSh-U1gVwuz87HCBJmr3hezv_mjjDFVFupY1wO0HKsa_BaV5o-HzdniB5shmGoDk6NUCKpz4jmHu-vX6SWqnjqCOLREGH0gvtRaAlKT6jsrw1fXOegDgak55GifF-zY9AEtX_h0pzM7USXD13yCfNLxItZp-rkJKT1xe2tue27iA');"></div>
			<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-transparent"></div>
		</div>

		<div class="relative z-10 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
			<div class="max-w-2xl text-left text-on-primary">
				<span class="inline-block bg-secondary-container text-on-secondary px-3 py-1 rounded font-label-caps text-xs uppercase tracking-wider mb-4"><?php echo esc_html( bayrak_t( 'prov_hero_badge', 'Premier Provisions Supply' ) ); ?></span>
				<h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-xl md:text-headline-xl mb-6"><?php echo esc_html( bayrak_t( 'prov_hero_title', 'Complete Ship Provisions Supply in Egypt' ) ); ?></h1>
				<p class="font-body-lg text-body-lg text-primary-fixed mb-8"><?php echo esc_html( bayrak_t( 'prov_hero_sub', 'Ensuring every galley across Egyptian ports is stocked with fresh, frozen, and dry provisions to support your crew\'s health and well-being.' ) ); ?></p>
				<a class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary font-button-text text-button-text px-8 py-4 rounded hover:bg-secondary transition-colors duration-200 shadow-md" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Get a Quotation' ) ); ?></span>
					<span class="material-symbols-outlined text-sm rtl-flip">arrow_forward</span>
				</a>
			</div>
		</div>
	</section>

	<!-- Provisions Categories -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low max-w-container-max mx-auto">
		<div class="text-center mb-12">
			<h2 class="font-headline-lg text-headline-lg text-primary mb-4"><?php echo esc_html( bayrak_t( 'prov_sec_title', 'Comprehensive Provisioning Solutions' ) ); ?></h2>
			<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl mx-auto"><?php echo esc_html( bayrak_t( 'prov_sec_sub', 'We select every product with thought and precision, adhering to current quality procedures to safeguard the health and safety of your crew.' ) ); ?></p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
			<!-- Fresh -->
			<div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
				<div class="h-64 overflow-hidden">
					<img alt="Fresh maritime provisions" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlm5awiK_KDIw8BDdBgw3O_j3qkLhYYksHvzCNlvGxMaXCJisOCCj31vjXkqfBDslxGhb3tpRSHDkxqZKVk6w2WmzRkClY1vR90P5k-4krFMASqvtuxNzK61EchAckHFRtxI8hdrlQ8HvDoUSJukaAtpjy9saVyrc6yvyF0hKrMr61OJu1jHrl-vH5hYRmrAM8zZDYzKEjfjlo7v67iGQ_lyInwA8h9cFkUDz15_uMo_wLztSvIsyS-A"/>
				</div>
				<div class="p-6">
					<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'prov_fresh_title', 'Fresh Provisions' ) ); ?></h3>
					<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'prov_fresh_desc', 'Daily supply of fresh fruit, vegetables, dairy, and bakery products sourced from local Egyptian markets. Temperature-controlled delivery ensures peak freshness.' ) ); ?></p>
				</div>
			</div>

			<!-- Frozen -->
			<div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
				<div class="h-64 overflow-hidden">
					<img alt="Frozen maritime provisions" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_bwgKXVB3iiVyWMJ_Zip5BNk6c9EVj-PH867MBx7dQyRevJ749d5aekRSkHcNLbqgdsRa4xomcI78ip63vmw-s6JVDZqgtqFFaC5Nh88eFP8uwIZawe-htN8Jc5jTc8Cf6t9-dpdNDRILkhnh37WbQFnfafc6VMRvfYyZ85QC3rmd6QgVhIr3OiEWfwJw-YLAXh8XaYULl8ykE-OT5BN5p97UWwzzPAS7SWKwD40QdB6oLu0YZMSClg"/>
				</div>
				<div class="p-6">
					<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'prov_frozen_title', 'Frozen Provisions' ) ); ?></h3>
					<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'prov_frozen_desc', 'High-quality meat, poultry, and seafood kept under strict temperature control for safety and longevity. Consistency in food safety guaranteed.' ) ); ?></p>
				</div>
			</div>

			<!-- Dry -->
			<div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
				<div class="h-64 overflow-hidden">
					<img alt="Dry maritime provisions" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-5UDL595pRt35kNdfUwADLVTtWZ4XTc_aYfvCn4hC0Iimxah3PwSjTxuN-u5ndqL8YzaDAYj6vvjkbWnCOXt8tv23Ad9dxfCotvPzazoAP7782HyhrXDnVl4-pIAnBOIxqTjzTD-Q-BIWobmi3aTnHfxz7fTSECZ7VhZZfx3WaU-i5j_8cO8PFRWXclyCPu5jBO1VvrlzrlVKGzIM-ExWTP1XUgjI45ebLrLTDVtK9fKuN0ooXpJD0w"/>
				</div>
				<div class="p-6">
					<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'prov_dry_title', 'Dry Provisions' ) ); ?></h3>
					<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'prov_dry_desc', 'Wide range of grains, pasta, canned goods, and spices sourced for lasting quality from audited suppliers. Securely packaged for maritime transport.' ) ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Sourcing & Standards -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-primary text-on-primary">
		<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
			<div>
				<h2 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg mb-6"><?php echo esc_html( bayrak_t( 'prov_standards_title', 'Compliant to Industry Standards' ) ); ?></h2>
				<p class="font-body-lg text-body-lg text-primary-fixed mb-6"><?php echo esc_html( bayrak_t( 'prov_standards_desc', 'Hanil Marine\'s warehouses comply with global industrial standards and the requirements set by local Egyptian authorities, ensuring strict handling and control of food safety, freshness, and quality.' ) ); ?></p>
				<ul class="space-y-4 mb-8">
					<li class="flex items-start gap-3">
						<span class="material-symbols-outlined text-secondary font-bold">check_circle</span>
						<span class="font-body-md text-body-md">Best Grade Achievement Certified for Quality Control</span>
					</li>
					<li class="flex items-start gap-3">
						<span class="material-symbols-outlined text-secondary font-bold">check_circle</span>
						<span class="font-body-md text-body-md">HACCP & ISO 22000 Certified facilities</span>
					</li>
					<li class="flex items-start gap-3">
						<span class="material-symbols-outlined text-secondary font-bold">check_circle</span>
						<span class="font-body-md text-body-md">Strict adherence to IMPA and ISSA standards</span>
					</li>
				</ul>
				<a class="inline-flex items-center gap-2 border border-secondary text-secondary font-button-text text-button-text px-6 py-3 rounded hover:bg-secondary hover:text-on-secondary transition-colors duration-200" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Request Provisions Quote' ) ); ?></span>
					<span class="material-symbols-outlined text-sm rtl-flip">arrow_forward</span>
				</a>
			</div>

			<div class="bg-primary-container p-8 rounded-xl border border-outline-variant/30">
				<h3 class="font-headline-md text-headline-md mb-4 text-on-primary">Sourcing Insights</h3>
				<p class="font-body-md text-body-md text-primary-fixed mb-6">Our dedicated procurement team continuously monitors local Egyptian markets and global supply chains to secure the highest quality provisions at competitive rates.</p>
				<a class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary font-button-text text-button-text px-6 py-3 rounded hover:bg-secondary transition-colors duration-200" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Get Fast Quotation' ) ); ?></span>
					<span class="material-symbols-outlined text-sm rtl-flip">arrow_forward</span>
				</a>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface max-w-container-max mx-auto text-center" id="quotation">
		<h2 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-primary mb-6"><?php echo esc_html( bayrak_t( 'prov_cta_title', 'Streamline Your Provisioning' ) ); ?></h2>
		<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-8"><?php echo esc_html( bayrak_t( 'prov_cta_desc', 'Experience seamless ordering, transparent pricing, and guaranteed delivery schedules across all major Egyptian ports.' ) ); ?></p>
		<a class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary font-button-text text-button-text px-10 py-4 rounded hover:bg-secondary transition-colors duration-200 shadow-lg" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
			<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Start Quotation Request' ) ); ?></span>
			<span class="material-symbols-outlined text-sm rtl-flip">arrow_forward</span>
		</a>
	</section>
</main>

<?php get_footer(); ?>