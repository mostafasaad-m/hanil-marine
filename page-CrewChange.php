<?php
/**
 * Template Name: Crew Change Page
 * Description: Maritime Crew Change & Personnel Logistics template for Hanil Marine.
 *
 * @package Bayrak
 */

get_header();
?>

<main class="flex-grow">
	<!-- Hero Section -->
	<section class="relative w-full h-[60vh] min-h-[400px] flex items-center justify-center">
		<div class="absolute inset-0 z-0">
			<img alt="<?php echo esc_attr( bayrak_t( 'crew_hero_title', 'Efficient Crew Change & Maritime Personnel Logistics' ) ); ?>" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQIYoPlt_fQngtQbnk3iBm5b9rY_WEItI15jouvADiYdriDs5tjsufY6EdnZK3k_Qh23f8CAJEV1OqcbIIn0tIztSeRpzzYBD3ScQiQ1n5YmiewePYanH_mYdprPFUYTpilREFpgTX8A1qfQ0QPyRzYaY5DWQk25vylYxak83iaWn0aGGyAggc5-VfsjkReX7YFUGeIybhScz9gsVzYNQUPuEd1Xe23ckBWagr8qWY9fq_dY4zAGtdAw">
			<div class="absolute inset-0 bg-primary opacity-60"></div>
		</div>
		<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-on-primary">
			<span class="font-label-caps text-label-caps tracking-widest uppercase mb-4 block text-inverse-primary"><?php echo esc_html( bayrak_t( 'crew_hero_badge', 'Maritime Personnel Logistics' ) ); ?></span>
			<h1 class="font-headline-xl text-headline-xl mb-6 max-w-4xl mx-auto"><?php echo esc_html( bayrak_t( 'crew_hero_title', 'Efficient Crew Change & Maritime Personnel Logistics' ) ); ?></h1>
			<p class="font-body-lg text-body-lg max-w-2xl mx-auto mb-8 text-surface-container-low"><?php echo esc_html( bayrak_t( 'crew_hero_sub', 'Ensuring safe, compliant, and seamless transitions for your most valuable asset.' ) ); ?></p>
			<a class="inline-flex items-center gap-2 bg-safety-orange text-on-primary font-button-text text-button-text px-6 py-3 rounded hover:bg-secondary-container transition-colors shadow-sm" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
				<span><?php echo esc_html( bayrak_t( 'crew_hero_cta', 'Initiate Crew Change' ) ); ?></span>
				<span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
			</a>
		</div>
	</section>

	<!-- Main Content -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
		<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
			<!-- Service 1 -->
			<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded shadow-sm hover:shadow-md transition-shadow">
				<div class="w-12 h-12 bg-sea-foam-gray text-primary flex items-center justify-center rounded mb-4">
					<span class="material-symbols-outlined text-2xl" data-icon="directions_boat">directions_boat</span>
				</div>
				<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'crew_s1_title', 'Personnel Transfer Services' ) ); ?></h3>
				<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'crew_s1_desc', 'Safe and reliable transportation for crew members between port facilities and vessels, utilizing certified transport.' ) ); ?></p>
			</div>

			<!-- Service 2 -->
			<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded shadow-sm hover:shadow-md transition-shadow">
				<div class="w-12 h-12 bg-sea-foam-gray text-primary flex items-center justify-center rounded mb-4">
					<span class="material-symbols-outlined text-2xl" data-icon="description">description</span>
				</div>
				<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'crew_s2_title', 'Visa & Immigration Support' ) ); ?></h3>
				<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'crew_s2_desc', 'Expert handling of all Egyptian maritime port formalities, documentation, and expedited clearance processes.' ) ); ?></p>
			</div>

			<!-- Service 3 -->
			<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded shadow-sm hover:shadow-md transition-shadow">
				<div class="w-12 h-12 bg-sea-foam-gray text-primary flex items-center justify-center rounded mb-4">
					<span class="material-symbols-outlined text-2xl" data-icon="local_hospital">local_hospital</span>
				</div>
				<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'crew_s3_title', 'Accommodation & Medical Logistics' ) ); ?></h3>
				<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'crew_s3_desc', 'Seamless arrangements for crew welfare, including secure lodging and immediate medical facilitation if required.' ) ); ?></p>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="bg-tertiary text-on-tertiary py-section-gap px-margin-mobile md:px-margin-desktop text-center" id="quote">
		<div class="max-w-3xl mx-auto">
			<h2 class="font-headline-lg text-headline-lg mb-4"><?php echo esc_html( bayrak_t( 'crew_cta_title', 'Ready to Schedule a Crew Change?' ) ); ?></h2>
			<p class="font-body-md text-body-md text-tertiary-fixed-dim mb-8"><?php echo esc_html( bayrak_t( 'crew_cta_sub', 'Our operations team is available 24/7 to manage your personnel logistics with industrial precision.' ) ); ?></p>
			<div class="flex flex-col sm:flex-row justify-center gap-4">
				<a class="bg-safety-orange text-on-primary font-button-text text-button-text px-8 py-3 rounded shadow-[0_4px_12px_rgba(0,0,0,0.1)] hover:opacity-90 transition-opacity" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'request_quotation', 'Request a Quotation' ) ); ?></span>
				</a>
				<a class="border border-outline text-on-tertiary font-button-text text-button-text px-8 py-3 rounded hover:bg-on-tertiary-fixed transition-colors" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'contact_operations', 'Contact Operations' ) ); ?></span>
				</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>