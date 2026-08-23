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
<footer class="w-full py-section-gap px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter bg-tertiary dark:bg-tertiary-container text-on-tertiary dark:text-on-tertiary-container font-body-md text-body-md flat no shadows mt-auto">
	<div class="col-span-1 md:col-span-3 mb-8">
		<span class="font-headline-md text-headline-md text-on-tertiary"><?php bloginfo( 'name' ); ?></span>
	</div>
	<div>
		<h4 class="font-button-text text-button-text mb-4 text-tertiary-fixed-dim">Quick Links</h4>
		<?php
		if ( has_nav_menu( 'footer' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => 'space-y-2',
					'fallback_cb'    => false,
				)
			);
		} else {
			?>
			<ul class="space-y-2">
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors opacity-90 hover:opacity-100" href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a></li>
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors opacity-90 hover:opacity-100" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a></li>
				<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors opacity-90 hover:opacity-100" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact</a></li>
			</ul>
			<?php
		}
		?>
	</div>
	<div>
		<h4 class="font-button-text text-button-text mb-4 text-tertiary-fixed-dim">Legal</h4>
		<ul class="space-y-2">
			<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors opacity-90 hover:opacity-100" href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a></li>
			<li><a class="text-tertiary-fixed-dim hover:text-secondary-container transition-colors opacity-90 hover:opacity-100" href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>">Terms of Service</a></li>
		</ul>
	</div>
	<div class="col-span-1 md:col-span-3 mt-8 pt-8 border-t border-on-tertiary-fixed-variant text-tertiary-fixed-dim">
		<p>© <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. Standalone Theme by <a href="https://vitaldc.com" target="_blank" rel="noopener noreferrer" class="hover:underline">VitalDC</a>.</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
