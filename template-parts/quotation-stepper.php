<?php
/**
 * Quotation Progress Stepper Bar Component
 */
$current_step = isset( $args['current_step'] ) ? intval( $args['current_step'] ) : 1;
$progress_percentages = array(
	1 => '25%',
	2 => '50%',
	3 => '75%',
	4 => '100%',
);
$progress_width = isset( $progress_percentages[ $current_step ] ) ? $progress_percentages[ $current_step ] : '25%';
?>
<div class="w-full max-w-3xl mx-auto mb-10 px-margin-mobile md:px-0">
	<div class="relative">
		<!-- Background Track Line -->
		<div class="absolute left-0 top-4 -translate-y-1/2 w-full h-1 bg-surface-variant z-0 rounded-full"></div>
		<!-- Active Progress Line -->
		<div class="absolute left-0 top-4 -translate-y-1/2 h-1 bg-secondary-container z-0 rounded-full transition-all duration-500 ease-in-out" style="width: <?php echo esc_attr( $progress_width ); ?>;"></div>

		<!-- Stepper Items -->
		<div class="flex items-center justify-between relative z-10">
			<!-- Step 1 -->
			<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="flex flex-col items-center group">
				<div class="w-8 h-8 rounded-full <?php echo $current_step > 1 ? 'bg-secondary-container text-on-secondary' : ( $current_step === 1 ? 'bg-primary text-on-primary ring-4 ring-primary-fixed' : 'bg-surface-container-highest text-on-surface-variant' ); ?> flex items-center justify-center font-button-text text-sm transition-all shadow-sm">
					<?php if ( $current_step > 1 ) : ?>
						<span class="material-symbols-outlined text-base">check</span>
					<?php else : ?>
						1
					<?php endif; ?>
				</div>
				<span class="mt-2 font-label-caps text-xs <?php echo $current_step === 1 ? 'text-primary font-bold' : 'text-on-surface-variant'; ?>"><?php echo esc_html( bayrak_t( 'step_1_name', 'Service Type' ) ); ?></span>
			</a>

			<!-- Step 2 -->
			<a href="<?php echo esc_url( home_url( '/step-2' ) ); ?>" class="flex flex-col items-center group">
				<div class="w-8 h-8 rounded-full <?php echo $current_step > 2 ? 'bg-secondary-container text-on-secondary' : ( $current_step === 2 ? 'bg-primary text-on-primary ring-4 ring-primary-fixed' : 'bg-surface-container-highest text-on-surface-variant' ); ?> flex items-center justify-center font-button-text text-sm transition-all shadow-sm">
					<?php if ( $current_step > 2 ) : ?>
						<span class="material-symbols-outlined text-base">check</span>
					<?php else : ?>
						2
					<?php endif; ?>
				</div>
				<span class="mt-2 font-label-caps text-xs <?php echo $current_step === 2 ? 'text-primary font-bold' : 'text-on-surface-variant'; ?>"><?php echo esc_html( bayrak_t( 'step_2_name', 'Contact Details' ) ); ?></span>
			</a>

			<!-- Step 3 -->
			<a href="<?php echo esc_url( home_url( '/step-3' ) ); ?>" class="flex flex-col items-center group">
				<div class="w-8 h-8 rounded-full <?php echo $current_step > 3 ? 'bg-secondary-container text-on-secondary' : ( $current_step === 3 ? 'bg-primary text-on-primary ring-4 ring-primary-fixed' : 'bg-surface-container-highest text-on-surface-variant' ); ?> flex items-center justify-center font-button-text text-sm transition-all shadow-sm">
					<?php if ( $current_step > 3 ) : ?>
						<span class="material-symbols-outlined text-base">check</span>
					<?php else : ?>
						3
					<?php endif; ?>
				</div>
				<span class="mt-2 font-label-caps text-xs <?php echo $current_step === 3 ? 'text-primary font-bold' : 'text-on-surface-variant'; ?>"><?php echo esc_html( bayrak_t( 'step_3_name', 'Vessel Logistics' ) ); ?></span>
			</a>

			<!-- Step 4 -->
			<a href="<?php echo esc_url( home_url( '/step-4' ) ); ?>" class="flex flex-col items-center group">
				<div class="w-8 h-8 rounded-full <?php echo $current_step === 4 ? 'bg-primary text-on-primary ring-4 ring-primary-fixed' : 'bg-surface-container-highest text-on-surface-variant'; ?> flex items-center justify-center font-button-text text-sm transition-all shadow-sm">
					4
				</div>
				<span class="mt-2 font-label-caps text-xs <?php echo $current_step === 4 ? 'text-primary font-bold' : 'text-on-surface-variant'; ?>"><?php echo esc_html( bayrak_t( 'step_4_name', 'Review & Submit' ) ); ?></span>
			</a>
		</div>
	</div>
</div>
