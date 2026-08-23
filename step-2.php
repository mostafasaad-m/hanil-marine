<?php
/**
 * Template Name: Quotation Step 2 - Contact Info
 * Description: Second step of the multi-step vessel quotation request form.
 */
get_header();
?>

<main class="flex-grow flex flex-col items-center pt-10 pb-section-gap px-margin-mobile md:px-margin-desktop w-full max-w-container-max mx-auto">
	<!-- Progress Stepper -->
	<?php get_template_part( 'template-parts/quotation-stepper', null, array( 'current_step' => 2 ) ); ?>

	<div class="w-full max-w-3xl bg-surface-container-lowest border border-outline-variant rounded-xl p-8 md:p-12 shadow-sm">
		<!-- Section Header -->
		<div class="mb-8">
			<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-3 inline-block">Step 2 of 4</span>
			<h1 class="font-headline-lg text-headline-lg text-primary mb-2">Personal & Company Information</h1>
			<p class="font-body-md text-body-md text-on-surface-variant">Please provide your contact details so our maritime coordinators can deliver your quotation.</p>
		</div>

		<!-- Form Fields -->
		<form id="step2-form" class="space-y-6" onsubmit="event.preventDefault();">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<!-- Full Name -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="fullName">Full Name <span class="text-error">*</span></label>
					<input required class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="fullName" name="fullName" placeholder="Captain Jane Doe" type="text">
				</div>
				<!-- Email Address -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="email">Work Email Address <span class="text-error">*</span></label>
					<input required class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="email" name="email" placeholder="jane.doe@fleetcompany.com" type="email">
				</div>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<!-- Company Name -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="companyName">Shipping / Fleet Company <span class="text-error">*</span></label>
					<input required class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="companyName" name="companyName" placeholder="Global Logistics Corp" type="text">
				</div>
				<!-- Job Title -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="jobTitle">Job Title / Designation</label>
					<input class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="jobTitle" name="jobTitle" placeholder="Supply Chain Manager / Superintendent" type="text">
				</div>
			</div>

			<!-- Phone Number -->
			<div>
				<label class="block font-label-caps text-label-caps text-primary mb-2" for="phone">Phone / WhatsApp Number <span class="text-error">*</span></label>
				<input required class="w-full md:w-1/2 bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="phone" name="phone" placeholder="+20 100 000 0000" type="tel">
			</div>

			<!-- Navigation Buttons -->
			<div class="mt-10 pt-6 border-t border-outline-variant flex justify-between items-center">
				<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="px-6 py-3 border border-primary text-primary rounded font-button-text text-button-text hover:bg-surface-container transition-colors flex items-center gap-2">
					<span class="material-symbols-outlined text-sm">arrow_back</span>
					<span>Back</span>
				</a>
				<button id="next-btn" type="button" class="px-8 py-3 bg-secondary-container text-on-secondary font-button-text text-button-text rounded shadow-md hover:bg-secondary transition-all flex items-center gap-2">
					<span>Next: Vessel Logistics</span>
					<span class="material-symbols-outlined text-sm">arrow_forward</span>
				</button>
			</div>
		</form>
	</div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
	// Guard: check if step 1 service is selected
	if (!sessionStorage.getItem('quotation_service_type')) {
		window.location.href = "<?php echo esc_url( home_url( '/step-1' ) ); ?>";
		return;
	}

	// Prefill saved fields
	const fields = ['fullName', 'email', 'companyName', 'jobTitle', 'phone'];
	fields.forEach(field => {
		const val = sessionStorage.getItem('quotation_' + field);
		if (val) {
			document.getElementById(field).value = val;
		}
	});

	document.getElementById('next-btn').addEventListener('click', () => {
		const fullName = document.getElementById('fullName').value.trim();
		const email = document.getElementById('email').value.trim();
		const companyName = document.getElementById('companyName').value.trim();
		const phone = document.getElementById('phone').value.trim();
		const jobTitle = document.getElementById('jobTitle').value.trim();

		if (!fullName || !email || !companyName || !phone) {
			alert("Please fill in all required fields marked with *.");
			return;
		}

		sessionStorage.setItem('quotation_fullName', fullName);
		sessionStorage.setItem('quotation_email', email);
		sessionStorage.setItem('quotation_companyName', companyName);
		sessionStorage.setItem('quotation_jobTitle', jobTitle);
		sessionStorage.setItem('quotation_phone', phone);

		window.location.href = "<?php echo esc_url( home_url( '/step-3' ) ); ?>";
	});
});
</script>

<?php get_footer(); ?>