<?php
/**
 * Template Name: Quotation Step 1 - Service Type
 * Description: First step of the multi-step vessel quotation request form with automagical swiping transition.
 */
get_header();
?>

<style>
.swipe-container {
	transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.35s ease-in-out;
}
.swipe-out-left {
	transform: translateX(-60px);
	opacity: 0;
}
</style>

<main id="swipe-wrapper" class="swipe-container flex-grow flex flex-col items-center pt-10 pb-section-gap px-margin-mobile md:px-margin-desktop w-full max-w-container-max mx-auto">
	<!-- Progress Stepper -->
	<?php get_template_part( 'template-parts/quotation-stepper', null, array( 'current_step' => 1 ) ); ?>

	<!-- Section Header -->
	<div class="text-center mb-12">
		<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-3 inline-block"><?php echo esc_html( bayrak_t( 'step_1_badge', 'Step 1 of 4' ) ); ?></span>
		<h1 class="font-headline-lg text-headline-lg md:font-headline-xl md:text-headline-xl text-primary mb-4"><?php echo esc_html( bayrak_t( 'step_1_title', 'Select Primary Service Category' ) ); ?></h1>
		<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto"><?php echo esc_html( bayrak_t( 'step_1_sub', 'Choose the primary service your vessel requires. Selecting a service will automatically advance to Step 2.' ) ); ?></p>
	</div>

	<!-- Service Cards Grid -->
	<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter w-full mb-12">
		<!-- Card 1: Provisions -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Provisions Supply" onclick="selectServiceAuto('Provisions Supply', this)">
			<div class="icon-container w-12 h-12 rounded-lg bg-surface-container text-primary flex items-center justify-center mb-6 transition-colors duration-200">
				<span class="material-symbols-outlined text-2xl">restaurant</span>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Provisions Supply</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Fresh, frozen, and dry provisions sourced for quality and crew sustenance during long international voyages.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
				<span class="material-symbols-outlined ml-1 text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
			</div>
		</div>

		<!-- Card 2: Bonded Stores -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Bonded Stores" onclick="selectServiceAuto('Bonded Stores', this)">
			<div class="icon-container w-12 h-12 rounded-lg bg-surface-container text-primary flex items-center justify-center mb-6 transition-colors duration-200">
				<span class="material-symbols-outlined text-2xl">inventory_2</span>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Bonded Stores</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Duty-free beverages, tobacco, confectionery, electronics, and personal welfare supplies efficiently stocked.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
				<span class="material-symbols-outlined ml-1 text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
			</div>
		</div>

		<!-- Card 3: Technical Parts -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Technical Parts & Spares" onclick="selectServiceAuto('Technical Parts & Spares', this)">
			<div class="icon-container w-12 h-12 rounded-lg bg-surface-container text-primary flex items-center justify-center mb-6 transition-colors duration-200">
				<span class="material-symbols-outlined text-2xl">build</span>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Technical Support & Spares</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Engine, deck, electrical, cabin spare parts and OEM quality components for immediate vessel maintenance.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
				<span class="material-symbols-outlined ml-1 text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
			</div>
		</div>

		<!-- Card 4: Port Logistics -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Logistics & Port Handling" onclick="selectServiceAuto('Logistics & Port Handling', this)">
			<div class="icon-container w-12 h-12 rounded-lg bg-surface-container text-primary flex items-center justify-center mb-6 transition-colors duration-200">
				<span class="material-symbols-outlined text-2xl">local_shipping</span>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Logistics & Port Transit</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Port logistics, customs clearance, bonded warehousing, and rapid vessel delivery across all Egyptian ports.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
				<span class="material-symbols-outlined ml-1 text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
			</div>
		</div>

		<!-- Card 5: Safety Equipment -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Safety & SOLAS Equipment" onclick="selectServiceAuto('Safety & SOLAS Equipment', this)">
			<div class="icon-container w-12 h-12 rounded-lg bg-surface-container text-primary flex items-center justify-center mb-6 transition-colors duration-200">
				<span class="material-symbols-outlined text-2xl">health_and_safety</span>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Safety & SOLAS Equipment</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Certified life rafts, pyrotechnics, firefighting gear, and maritime safety equipment conforming to SOLAS regulations.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
				<span class="material-symbols-outlined ml-1 text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
			</div>
		</div>
	</div>

	<!-- Navigation Buttons -->
	<div class="flex justify-between items-center w-full max-w-3xl pt-6 border-t border-outline-variant">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="px-6 py-3 border border-primary text-primary rounded font-button-text text-button-text hover:bg-surface-container transition-colors">
			Cancel
		</a>
		<button id="next-btn" disabled class="px-8 py-3 bg-outline-variant text-outline rounded font-button-text text-button-text cursor-not-allowed transition-all flex items-center gap-2">
			<span>Next: Contact Info</span>
			<span class="material-symbols-outlined text-sm">arrow_forward</span>
		</button>
	</div>
</main>

<script>
let isTransitioning = false;

function selectServiceAuto(serviceName, cardElement) {
	if (isTransitioning) return;
	isTransitioning = true;

	document.querySelectorAll('.service-card').forEach(card => {
		card.classList.remove('ring-2', 'ring-secondary-container', 'border-secondary-container', 'bg-surface-container-low');
	});

	cardElement.classList.add('ring-2', 'ring-secondary-container', 'border-secondary-container', 'bg-surface-container-low');
	sessionStorage.setItem('quotation_service_type', serviceName);

	// Automagical swiping transition effect
	const wrapper = document.getElementById('swipe-wrapper');
	wrapper.classList.add('swipe-out-left');

	setTimeout(() => {
		window.location.href = "<?php echo esc_url( home_url( '/step-2' ) ); ?>";
	}, 280);
}

document.addEventListener('DOMContentLoaded', () => {
	const savedService = sessionStorage.getItem('quotation_service_type');
	if (savedService) {
		const targetCard = document.querySelector(`.service-card[data-service="${savedService}"]`);
		if (targetCard) {
			targetCard.classList.add('ring-2', 'ring-secondary-container', 'border-secondary-container', 'bg-surface-container-low');
			const nextBtn = document.getElementById('next-btn');
			nextBtn.disabled = false;
			nextBtn.classList.remove('bg-outline-variant', 'text-outline', 'cursor-not-allowed');
			nextBtn.classList.add('bg-secondary-container', 'text-on-secondary', 'hover:bg-secondary', 'shadow-md', 'cursor-pointer');
		}
	}

	document.getElementById('next-btn').addEventListener('click', () => {
		const selected = sessionStorage.getItem('quotation_service_type');
		if (selected) {
			const wrapper = document.getElementById('swipe-wrapper');
			wrapper.classList.add('swipe-out-left');
			setTimeout(() => {
				window.location.href = "<?php echo esc_url( home_url( '/step-2' ) ); ?>";
			}, 280);
		}
	});
});
</script>

<?php get_footer(); ?>