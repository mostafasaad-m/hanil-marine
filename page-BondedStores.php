<?php
/**
 * Template Name: Bonded Stores Page
 * Description: Global Bonded Stores & Duty-Free Supply page template for Hanil Marine.
 *
 * @package Bayrak
 */

get_header();
?>

<main class="flex-grow">
	<!-- Hero Section -->
	<section class="relative w-full h-[600px] flex items-center">
		<div class="absolute inset-0 z-0">
			<img class="w-full h-full object-cover" alt="<?php echo esc_attr( bayrak_t( 'bonded_hero_title', 'Global Bonded Stores & Duty-Free Supply' ) ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCz7s6jIqBM9JQDw43JmVP0g0D7PZJUo5RRWSTNvg5NgmvsGyt28kwSxJWPmKrZtMgD-zYDZOIfJUGWCb_cK0_3IgQC158fQRv-ZFvNSgdX_zzWjDHhvJnzydDnHHN9M3sY8O6Yu5oaEdAXIBp2aCQxq7WI-nj4GKnqPna4FN6q0SCS4FCNDZGoYg72HATlk8HkFgS7Jw36wwyiJBxVaQ7Yb51N08WJ4IMiSMNQB7ecX0BHWmtO3H5aqA">
			<div class="absolute inset-0 bg-ocean-navy/70 mix-blend-multiply"></div>
		</div>
		<div class="relative z-10 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
			<div class="max-w-2xl text-on-primary">
				<span class="font-label-caps text-label-caps uppercase text-secondary-fixed mb-4 block"><?php echo esc_html( bayrak_t( 'bonded_hero_badge', 'Marine Services' ) ); ?></span>
				<h1 class="font-headline-xl text-headline-xl mb-6"><?php echo esc_html( bayrak_t( 'bonded_hero_title', 'Global Bonded Stores & Duty-Free Supply' ) ); ?></h1>
				<p class="font-body-lg text-body-lg text-surface-container-lowest/90 mb-8"><?php echo esc_html( bayrak_t( 'bonded_hero_sub', 'Providing premium duty-free goods and secure storage solutions for vessels across all Egyptian ports.' ) ); ?></p>
				<a class="bg-secondary text-on-secondary px-8 py-4 rounded font-button-text text-button-text hover:bg-secondary-container transition-colors inline-flex items-center gap-2" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
					<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Get a Quotation' ) ); ?></span>
					<span class="material-symbols-outlined text-sm">arrow_forward</span>
				</a>
			</div>
		</div>
	</section>

	<!-- Product Categories (Bento Grid Style) -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-lowest">
		<div class="max-w-container-max mx-auto">
			<div class="mb-12">
				<h2 class="font-headline-lg text-headline-lg text-primary mb-4"><?php echo esc_html( bayrak_t( 'bonded_sec_title', 'Premium Bonded Supplies' ) ); ?></h2>
				<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl"><?php echo esc_html( bayrak_t( 'bonded_sec_sub', 'Comprehensive duty-free inventory managed with strict compliance and delivered directly to your vessel.' ) ); ?></p>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
				<!-- Category 1 -->
				<div class="group relative overflow-hidden rounded border border-outline-variant bg-surface group-hover:border-primary transition-colors h-[400px]">
					<img class="w-full h-48 object-cover border-b border-outline-variant" alt="<?php echo esc_attr( bayrak_t( 'bonded_c1_title', 'Premium Beverages & Tobacco' ) ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9RzySit9zMwxz1STmEDnsLt6WcZ19U8XVDRqPLSmtgmyhkYDAm8sAvLFxPsq_fJ4AdPI4ZZF5d3N2pvvopU9M5DZDzPGri7UeHjTpyYTCYHYu802bLMHjh2QTPGkzF2mx4EY9ht0zW4boBc_k3Va0LMPTY-TgTBSv2QRenJLspVeuYzKkyc_tkJrxY5q1DVnyNVEy0uapxVRNiHGJ8XhBNmzrtWXiIiuJlijzymtyP-HUehERYc3Clw">
					<div class="p-6">
						<h3 class="font-headline-md text-headline-md text-primary mb-2"><?php echo esc_html( bayrak_t( 'bonded_c1_title', 'Premium Beverages & Tobacco' ) ); ?></h3>
						<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3"><?php echo esc_html( bayrak_t( 'bonded_c1_desc', 'High-quality selection of international spirits, wines, and premium tobacco products sourced from global distributors.' ) ); ?></p>
					</div>
				</div>

				<!-- Category 2 -->
				<div class="group relative overflow-hidden rounded border border-outline-variant bg-surface group-hover:border-primary transition-colors h-[400px]">
					<img class="w-full h-48 object-cover border-b border-outline-variant" alt="<?php echo esc_attr( bayrak_t( 'bonded_c2_title', 'Luxury Confectionery & Care' ) ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDteGMDk28DzUhLk7ltghBZsCzZsVpLL-IWHThz0Mg3u8t3OHpQ2iVX0gDMe-69swva0rQGYV7hZoK3BxTkRvUwOaxZKmxqFsKW5NPlkYs47IyGtH8Q53Yr9SxkO0elOfjlSFzoRI61QSWBdpPPrWhXuj0_eNJaWl-GHhOtm4CkWoFTOAdc9xmtB-YWnoFLkanouyWcD1FE8pu1mnqWlrc-jDrwy8fHKnuBPpU7hiqIxyUufuhvu4evjg">
					<div class="p-6">
						<h3 class="font-headline-md text-headline-md text-primary mb-2"><?php echo esc_html( bayrak_t( 'bonded_c2_title', 'Luxury Confectionery & Care' ) ); ?></h3>
						<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3"><?php echo esc_html( bayrak_t( 'bonded_c2_desc', 'Premium chocolates, designer perfumes, and high-end toiletries to ensure superior crew welfare during long voyages.' ) ); ?></p>
					</div>
				</div>

				<!-- Category 3 -->
				<div class="group relative overflow-hidden rounded border border-outline-variant bg-surface group-hover:border-primary transition-colors h-[400px]">
					<img class="w-full h-48 object-cover border-b border-outline-variant" alt="<?php echo esc_attr( bayrak_t( 'bonded_c3_title', 'High-End Electronics' ) ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIao-mlseBS1CwAHkkJHKQBUN8jSe1AGYUB0oq-jYcddbkQ90onnqQ3luzj3nFxTRSTG0JM4uDAnssJTF5XwueQa2mmor13BslN6n5BwXehVJ38tAkiKkmVGYwm7wEsAhgPuqa4f6KbuRwYR-iImcV0f_5deh3G9BzK4BJi2MpjdADp1jamd4M9YImN1OeuiRa6Q6ZZMyMy5ablNiAM9xvpcxfAnZpnJEZz-sksWiAS6mle_6lR7GBxQ">
					<div class="p-6">
						<h3 class="font-headline-md text-headline-md text-primary mb-2"><?php echo esc_html( bayrak_t( 'bonded_c3_title', 'High-End Electronics' ) ); ?></h3>
						<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3"><?php echo esc_html( bayrak_t( 'bonded_c3_desc', 'Professional maritime gadgets, communication devices, and duty-free consumer electronics for onboard use.' ) ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Security & Compliance Section -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-tertiary text-on-tertiary">
		<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
			<div>
				<span class="font-label-caps text-label-caps uppercase text-secondary-fixed mb-4 block"><?php echo esc_html( bayrak_t( 'bonded_ops_badge', 'Operational Integrity' ) ); ?></span>
				<h2 class="font-headline-lg text-headline-lg mb-6"><?php echo esc_html( bayrak_t( 'bonded_compliance_title', 'Security & Customs Compliance' ) ); ?></h2>
				<p class="font-body-lg text-body-lg text-tertiary-fixed-dim mb-8"><?php echo esc_html( bayrak_t( 'bonded_compliance_sub', 'Our bonded stores operate under strict regulatory frameworks, ensuring seamless customs clearance and secure custody of all duty-free goods.' ) ); ?></p>
				<div class="space-y-6">
					<div class="flex gap-4">
						<div class="w-12 h-12 rounded bg-surface-tint/20 flex items-center justify-center shrink-0">
							<span class="material-symbols-outlined text-secondary-fixed">warehouse</span>
						</div>
						<div>
							<h4 class="font-headline-md text-headline-md mb-1"><?php echo esc_html( bayrak_t( 'storage_fac_title', 'Secure Storage Facilities' ) ); ?></h4>
							<p class="font-body-md text-body-md text-tertiary-fixed-dim"><?php echo esc_html( bayrak_t( 'storage_fac_desc', 'Climate-controlled, monitored warehousing ensuring product integrity.' ) ); ?></p>
						</div>
					</div>
					<div class="flex gap-4">
						<div class="w-12 h-12 rounded bg-surface-tint/20 flex items-center justify-center shrink-0">
							<span class="material-symbols-outlined text-secondary-fixed">inventory_2</span>
						</div>
						<div>
							<h4 class="font-headline-md text-headline-md mb-1"><?php echo esc_html( bayrak_t( 'inventory_mgmt_title', 'Inventory Management' ) ); ?></h4>
							<p class="font-body-md text-body-md text-tertiary-fixed-dim"><?php echo esc_html( bayrak_t( 'inventory_mgmt_desc', 'Real-time tracking and precise stock control for reliable supply.' ) ); ?></p>
						</div>
					</div>
					<div class="flex gap-4">
						<div class="w-12 h-12 rounded bg-surface-tint/20 flex items-center justify-center shrink-0">
							<span class="material-symbols-outlined text-secondary-fixed">verified_user</span>
						</div>
						<div>
							<h4 class="font-headline-md text-headline-md mb-1"><?php echo esc_html( bayrak_t( 'customs_comp_title', 'Customs Compliance' ) ); ?></h4>
							<p class="font-body-md text-body-md text-tertiary-fixed-dim"><?php echo esc_html( bayrak_t( 'customs_comp_desc', 'Full adherence to Egyptian customs regulations for rapid clearance.' ) ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="relative h-[500px] rounded overflow-hidden border border-surface-tint/30">
				<img class="w-full h-full object-cover grayscale opacity-80" alt="<?php echo esc_attr( bayrak_t( 'bonded_compliance_title', 'Security & Customs Compliance' ) ); ?>" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC65pgfllaW8W7hERBP0C41IE4XqF_jSnkTcpZvclygx3xCj3o_taaYw-hFcaqD6QgKEUCvOn8W_nD46G5MR9Ay7zUiy4_BKNC8gBEw_vLAUkY-ipQHSPSrlukebl2Gj8h8Uk2S79hP3Hrpxpmd98crVKZKcm5ybXeVzIm3ZwpyeiWJYn7HJtEIGsU48fqO77uPgQN3BJfdL8Wir3rEBv9wncC6jHyQnVQ_zSRG-efOy2CN-b7UlFkYGw">
				<div class="absolute inset-0 bg-ocean-navy/40 mix-blend-multiply"></div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface border-t border-outline-variant">
		<div class="max-w-3xl mx-auto text-center">
			<h2 class="font-headline-lg text-headline-lg text-primary mb-6"><?php echo esc_html( bayrak_t( 'bonded_cta_title', 'Secure Your Bonded Supply Today' ) ); ?></h2>
			<p class="font-body-lg text-body-lg text-on-surface-variant mb-8"><?php echo esc_html( bayrak_t( 'bonded_cta_desc', 'Partner with Hanil Marine for reliable, compliant, and premium duty-free provisions across all major Egyptian ports.' ) ); ?></p>
			<a class="bg-secondary text-on-secondary px-8 py-4 rounded font-button-text text-button-text hover:bg-secondary-container transition-colors inline-flex items-center gap-2" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
				<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Start Quotation Request' ) ); ?></span>
				<span class="material-symbols-outlined text-sm">assignment</span>
			</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>