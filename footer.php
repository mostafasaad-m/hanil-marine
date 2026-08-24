<?php
/**
 * Bayrak Theme Footer
 *
 * @package Bayrak
 * @author VitalDC (https://vitaldc.com)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- Footer -->
<footer class="w-full py-section-gap px-margin-mobile md:px-margin-desktop bg-tertiary dark:bg-tertiary-container text-on-tertiary dark:text-on-tertiary-container font-body-md text-body-md flat no shadows mt-auto">
	<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-4 gap-gutter mb-8">
		<div class="col-span-1 md:col-span-1">
			<span class="font-headline-md text-headline-md text-on-tertiary block mb-3"><?php bloginfo( 'name' ); ?></span>
			<p class="text-xs text-tertiary-fixed-dim leading-relaxed"><?php echo esc_html( bayrak_t( 'footer_tagline', 'Licensed Ship Chandler & Maritime Logistics Provider Operating 24/7 Across All Egyptian Ports and the Suez Canal.' ) ); ?></p>
		</div>
		<div>
			<h4 class="font-button-text text-button-text mb-4 text-tertiary-fixed-dim uppercase tracking-wider text-xs"><?php echo esc_html( bayrak_t( 'footer_quick_links', 'Quick Navigation' ) ); ?></h4>
			<ul class="space-y-2 text-sm">
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( bayrak_t( 'home', 'Home' ) ); ?></a></li>
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors" href="<?php echo esc_url( home_url( '/provisions' ) ); ?>"><?php echo esc_html( bayrak_t( 'nav_provisions', 'Provisions Supply' ) ); ?></a></li>
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors" href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php echo esc_html( bayrak_t( 'services', 'Services' ) ); ?></a></li>
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php echo esc_html( bayrak_t( 'about_us', 'About Us' ) ); ?></a></li>
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><?php echo esc_html( bayrak_t( 'contact', 'Contact' ) ); ?></a></li>
			</ul>
		</div>
		<div>
			<h4 class="font-button-text text-button-text mb-4 text-tertiary-fixed-dim uppercase tracking-wider text-xs"><?php echo esc_html( bayrak_t( 'footer_ports', 'Ports Served' ) ); ?></h4>
			<ul class="space-y-2 text-xs text-tertiary-fixed-dim">
				<li><?php echo esc_html( bayrak_t( 'port_said', 'Port Said (East & West)' ) ); ?></li>
				<li><?php echo esc_html( bayrak_t( 'port_suez', 'Suez Canal Zone' ) ); ?></li>
				<li><?php echo esc_html( bayrak_t( 'port_damietta', 'Damietta Port' ) ); ?></li>
				<li><?php echo esc_html( bayrak_t( 'port_alexandria', 'Alexandria & El Dekheila' ) ); ?></li>
				<li><?php echo esc_html( bayrak_t( 'port_sokhna', 'Ain Sokhna & Adabeyah' ) ); ?></li>
				<li><?php echo esc_html( bayrak_t( 'port_redsea', 'Safaga & Red Sea Ports' ) ); ?></li>
			</ul>
		</div>
		<div>
			<h4 class="font-button-text text-button-text mb-4 text-tertiary-fixed-dim uppercase tracking-wider text-xs"><?php echo esc_html( bayrak_t( 'footer_contact_title', '24/7 Port Dispatch' ) ); ?></h4>
			<p class="text-xs text-tertiary-fixed-dim mb-2">Email: ops@hanilmarine.com</p>
			<p class="text-xs text-tertiary-fixed-dim mb-4">Operations: Port Said & Alexandria, Egypt</p>
			<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center gap-1.5 bg-secondary-container text-on-secondary px-4 py-2 rounded text-xs font-bold hover:bg-secondary transition-colors">
				<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Request Quote' ) ); ?></span>
				<span class="material-symbols-outlined text-xs rtl-flip">arrow_forward</span>
			</a>
		</div>
	</div>
	<div class="max-w-container-max mx-auto pt-6 border-t border-on-tertiary-fixed-variant/20 text-tertiary-fixed-dim text-xs text-center md:flex md:justify-between">
		<p>© <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php echo esc_html( bayrak_t( 'footer_rights', 'All rights reserved.' ) ); ?></p>
		<p class="mt-2 md:mt-0">Crafted by <a href="https://vitaldc.com" target="_blank" rel="noopener noreferrer" class="hover:underline">VitalDC</a></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
