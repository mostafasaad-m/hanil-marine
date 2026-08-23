<?php
/**
 * Default Page Template
 *
 * @package Bayrak
 * @author VitalDC (https://vitaldc.com)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full min-h-[60vh]">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-surface-container-lowest border border-outline-variant p-8 md:p-12 rounded' ); ?>>
			<h1 class="font-headline-xl text-headline-xl text-primary mb-8 border-b border-outline-variant pb-4"><?php the_title(); ?></h1>
			
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-8 overflow-hidden rounded">
					<?php the_post_thumbnail( 'full', array( 'class' => 'w-full max-h-[400px] object-cover' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="prose max-w-none text-on-surface-variant font-body-lg text-body-lg leading-relaxed">
				<?php
				the_content();
				wp_link_pages();
				?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php
get_footer();
