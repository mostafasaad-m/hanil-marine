<?php
/**
 * Main Template File (Fallback)
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
	<?php if ( have_posts() ) : ?>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-surface-container-lowest border border-outline-variant p-6 rounded transition-all duration-300 hover:border-primary' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="mb-4 overflow-hidden rounded">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-48 object-cover' ) ); ?>
							</a>
						</div>
					<?php endif; ?>
					<h2 class="font-headline-md text-headline-md text-primary mb-2">
						<a href="<?php the_permalink(); ?>" class="hover:text-secondary transition-colors"><?php the_title(); ?></a>
					</h2>
					<div class="text-sm text-outline mb-4">
						<?php echo get_the_date(); ?>
					</div>
					<div class="font-body-md text-body-md text-on-surface-variant mb-4">
						<?php the_excerpt(); ?>
					</div>
					<a href="<?php the_permalink(); ?>" class="inline-flex items-center text-secondary font-button-text hover:underline">
						<?php esc_html_e( 'Read More', 'bayrak' ); ?> &rarr;
					</a>
				</article>
			<?php endwhile; ?>
		</div>
		
		<div class="mt-12 flex justify-between items-center">
			<div><?php previous_posts_link( '&larr; Previous' ); ?></div>
			<div><?php next_posts_link( 'Next &rarr;' ); ?></div>
		</div>
	<?php else : ?>
		<div class="text-center py-16">
			<h1 class="font-headline-lg text-headline-lg text-primary mb-4"><?php esc_html_e( 'Nothing Found', 'bayrak' ); ?></h1>
			<p class="font-body-lg text-body-lg text-on-surface-variant"><?php esc_html_e( 'It seems we can’t find what you’re looking for.', 'bayrak' ); ?></p>
		</div>
	<?php endif; ?>
</main>

<?php
get_footer();
