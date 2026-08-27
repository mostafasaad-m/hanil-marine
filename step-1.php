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
@keyframes pulse-ring {
	0% { box-shadow: 0 0 0 0 rgba(166, 59, 0, 0.4); }
	70% { box-shadow: 0 0 0 12px rgba(166, 59, 0, 0); }
	100% { box-shadow: 0 0 0 0 rgba(166, 59, 0, 0); }
}
.card-highlighted {
	animation: pulse-ring 1.5s infinite;
}
</style>

<main id="swipe-wrapper" class="swipe-container flex-grow flex flex-col items-center pt-10 pb-section-gap px-margin-mobile md:px-margin-desktop w-full max-w-container-max mx-auto">
	<!-- Progress Stepper -->
	<?php get_template_part( 'template-parts/quotation-stepper', null, array( 'current_step' => 1 ) ); ?>

	<!-- Auto-Selection Banner (hidden by default) -->
	<div id="auto-select-banner" class="hidden w-full max-w-3xl mb-8 p-4 bg-secondary-container text-on-secondary rounded-lg shadow-lg flex flex-col sm:flex-row items-center justify-between gap-4 transition-all">
		<div class="flex items-center gap-3">
			<span class="font-bold text-base md:text-lg">✓ Selected Category: <strong id="selected-service-name"></strong></span>
			<span id="countdown-label" class="text-xs md:text-sm opacity-90">(Redirecting to Step 2 in <span id="countdown-timer">7</span>s...)</span>
		</div>
		<button id="undo-auto-select-btn" onclick="cancelAutoAdvance()" type="button" class="px-4 py-2 bg-on-secondary text-secondary font-bold text-xs rounded hover:bg-surface-container transition-colors shadow shrink-0">
			Undo / Change Selection
		</button>
	</div>

	<!-- Section Header -->
	<div class="text-center mb-12">
		<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-3 inline-block"><?php echo esc_html( bayrak_t( 'step_1_badge', 'Step 1 of 4' ) ); ?></span>
		<h1 class="font-headline-lg text-headline-lg md:font-headline-xl md:text-headline-xl text-primary mb-4"><?php echo esc_html( bayrak_t( 'step_1_title', 'Select Primary Service Category' ) ); ?></h1>
		<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto"><?php echo esc_html( bayrak_t( 'step_1_sub', 'Choose the primary service category your vessel requires to start your quotation.' ) ); ?></p>
	</div>

	<!-- Service Cards Grid -->
	<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter w-full mb-12">
		<!-- Card 1: Provisions -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Provisions Supply" onclick="selectServiceAuto('Provisions Supply', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Provisions Supply</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Fresh, frozen, and dry provisions sourced for quality and crew sustenance during long international voyages.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
			</div>
		</div>

		<!-- Card 2: Bonded Stores -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Bonded Stores" onclick="selectServiceAuto('Bonded Stores', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Bonded Stores</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Duty-free beverages, tobacco, confectionery, electronics, and personal welfare supplies efficiently stocked.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
			</div>
		</div>

		<!-- Card 3: Technical Parts -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Technical Parts & Spares" onclick="selectServiceAuto('Technical Parts & Spares', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Technical Support & Spares</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Engine, deck, electrical, cabin spare parts and OEM quality components for immediate vessel maintenance.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
			</div>
		</div>

		<!-- Card 4: Bunker & Fuel Trading -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Bunker & Fuel Trading" onclick="selectServiceAuto('Bunker & Fuel Trading', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Bunker & Fuel Trading</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">ISO-certified marine gasoil (VLSFO/LSMGO), lubricants, and specialty marine energy logistics across Egyptian ports.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
			</div>
		</div>

		<!-- Card 5: Repair Services -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Repair Services" onclick="selectServiceAuto('Repair Services', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Repair Services</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Main & auxiliary engine overhauls, steel & piping fabrication, electrical, and automation repairs.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
			</div>
		</div>

		<!-- Card 6: Crew Change Logistics -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Crew Change Logistics" onclick="selectServiceAuto('Crew Change Logistics', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Crew Change Logistics</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Safe personnel transfers, visa & port clearance support, lodging, and emergency medical logistics.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
			</div>
		</div>

		<!-- Card 7: Safety & SOLAS Equipment -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Safety & SOLAS Equipment" onclick="selectServiceAuto('Safety & SOLAS Equipment', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Safety & SOLAS Equipment</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Certified life rafts, pyrotechnics, firefighting gear, and maritime safety equipment conforming to SOLAS regulations.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
			</div>
		</div>

		<!-- Card 8: Port Logistics -->
		<div class="service-card group flex flex-col text-left bg-surface-container-lowest border border-outline-variant rounded-lg p-6 cursor-pointer hover:border-primary hover:shadow-lg transition-all duration-200" data-service="Logistics & Port Handling" onclick="selectServiceAuto('Logistics & Port Handling', this)">
			<h3 class="font-headline-md text-headline-md text-primary mb-3 group-hover:text-secondary transition-colors">Logistics & Port Transit</h3>
			<p class="font-body-md text-body-md text-on-surface-variant flex-grow mb-6">Port logistics, customs clearance, bonded warehousing, and rapid vessel delivery across all Egyptian ports.</p>
			<div class="font-button-text text-button-text text-secondary flex items-center mt-auto">
				<span>Select Category</span>
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
		</button>
	</div>
</main>

<script>
let isTransitioning = false;
let autoAdvanceTimer = null;
let countdownInterval = null;

function selectServiceAuto(serviceName, cardElement, isAuto = false) {
	if (isTransitioning && !isAuto) return;

	document.querySelectorAll('.service-card').forEach(card => {
		card.classList.remove('ring-4', 'ring-secondary', 'border-secondary', 'bg-surface-container-low', 'card-highlighted');
	});

	if (cardElement) {
		cardElement.classList.add('ring-4', 'ring-secondary', 'border-secondary', 'bg-surface-container-low');
		if (isAuto) {
			cardElement.classList.add('card-highlighted');
		}
	}
	sessionStorage.setItem('quotation_service_type', serviceName);

	const nextBtn = document.getElementById('next-btn');
	if (nextBtn) {
		nextBtn.disabled = false;
		nextBtn.classList.remove('bg-outline-variant', 'text-outline', 'cursor-not-allowed');
		nextBtn.classList.add('bg-secondary-container', 'text-on-secondary', 'hover:bg-secondary', 'shadow-md', 'cursor-pointer');
	}

	if (!isAuto) {
		isTransitioning = true;
		const wrapper = document.getElementById('swipe-wrapper');
		wrapper.classList.add('swipe-out-left');

		setTimeout(() => {
			window.location.href = "<?php echo esc_url( home_url( '/step-2' ) ); ?>";
		}, 280);
	}
}

function cancelAutoAdvance() {
	if (autoAdvanceTimer) {
		clearTimeout(autoAdvanceTimer);
		autoAdvanceTimer = null;
	}
	if (countdownInterval) {
		clearInterval(countdownInterval);
		countdownInterval = null;
	}
	isTransitioning = false;
	const banner = document.getElementById('auto-select-banner');
	if (banner) {
		banner.innerHTML = `
			<div class="flex items-center gap-2">
				<span class="font-bold">✓ Category Selection Saved</span>
				<span class="text-xs opacity-80">(Auto-redirect paused. Select a different category or click Next to continue.)</span>
			</div>
		`;
		banner.classList.remove('bg-secondary-container', 'text-on-secondary');
		banner.classList.add('bg-surface-container-high', 'text-primary');
	}
}

document.addEventListener('DOMContentLoaded', () => {
	const urlParams = new URLSearchParams(window.location.search);
	const serviceFromUrl = urlParams.get('service') || urlParams.get('category');
	
	let targetService = serviceFromUrl || sessionStorage.getItem('quotation_service_type');

	if (targetService) {
		// Clean URL parameter alias matching
		const cardElements = Array.from(document.querySelectorAll('.service-card'));
		let targetCard = cardElements.find(card => card.dataset.service.toLowerCase() === targetService.toLowerCase());

		if (!targetCard) {
			targetCard = cardElements.find(card => card.dataset.service.toLowerCase().includes(targetService.toLowerCase()));
		}

		if (targetCard) {
			const matchedName = targetCard.dataset.service;
			selectServiceAuto(matchedName, targetCard, true);

			if (serviceFromUrl) {
				// Show auto-selection banner with notice & undo button
				const banner = document.getElementById('auto-select-banner');
				const serviceNameElem = document.getElementById('selected-service-name');
				const timerElem = document.getElementById('countdown-timer');

				if (banner && serviceNameElem) {
					serviceNameElem.textContent = matchedName;
					banner.classList.remove('hidden');

					let timeLeft = 7;
					if (timerElem) timerElem.textContent = timeLeft;

					countdownInterval = setInterval(() => {
						timeLeft--;
						if (timerElem && timeLeft >= 0) timerElem.textContent = timeLeft;
						if (timeLeft <= 0) clearInterval(countdownInterval);
					}, 1000);

					isTransitioning = true;
					autoAdvanceTimer = setTimeout(() => {
						const wrapper = document.getElementById('swipe-wrapper');
						wrapper.classList.add('swipe-out-left');
						setTimeout(() => {
							window.location.href = "<?php echo esc_url( home_url( '/step-2' ) ); ?>";
						}, 280);
					}, timeLeft * 1000);
				}
			}
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