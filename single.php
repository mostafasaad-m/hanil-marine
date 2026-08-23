<?php
/**
 * Single Post Template
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
			<div class="mb-6">
				<span class="text-sm text-outline"><?php echo get_the_date(); ?></span>
				<h1 class="font-headline-xl text-headline-xl text-primary mt-2 mb-4"><?php the_title(); ?></h1>
			</div>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-8 overflow-hidden rounded">
					<?php the_post_thumbnail( 'full', array( 'class' => 'w-full max-h-[450px] object-cover' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="prose max-w-none text-on-surface-variant font-body-lg text-body-lg leading-relaxed mb-8">
				<?php
				the_content();
				wp_link_pages();
				?>
			</div>

			<div class="border-t border-outline-variant pt-6 mt-8 flex justify-between">
				<div><?php previous_post_link( '%link', '&larr; %title' ); ?></div>
				<div><?php next_post_link( '%link', '%title &rarr;' ); ?></div>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php
get_footer();
