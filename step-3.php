<?php
/**
 * Template Name: Quotation Step 3 - Vessel Details
 * Description: Third step of the multi-step vessel quotation request form.
 */
get_header();
?>

<main class="flex-grow flex flex-col items-center pt-10 pb-section-gap px-margin-mobile md:px-margin-desktop w-full max-w-container-max mx-auto">
	<!-- Progress Stepper -->
	<?php get_template_part( 'template-parts/quotation-stepper', null, array( 'current_step' => 3 ) ); ?>

	<div class="w-full max-w-3xl bg-surface-container-lowest border border-outline-variant rounded-xl p-8 md:p-12 shadow-sm">
		<!-- Section Header -->
		<div class="mb-8">
			<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-3 inline-block">Step 3 of 4</span>
			<h1 class="font-headline-lg text-headline-lg text-primary mb-2">Vessel Schedule & Port Logistics</h1>
			<p class="font-body-md text-body-md text-on-surface-variant">Provide your vessel details and upcoming port call schedule in Egypt.</p>
		</div>

		<!-- Form -->
		<form id="step3-form" class="space-y-6" onsubmit="event.preventDefault();">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<!-- Vessel Name -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="vesselName">Vessel Name <span class="text-error">*</span></label>
					<input required class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="vesselName" name="vesselName" placeholder="e.g. MV Hanil Star" type="text">
				</div>
				<!-- IMO Number -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="imoNumber">IMO Number <span class="text-error">*</span></label>
					<input required class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="imoNumber" name="imoNumber" placeholder="e.g. 9839430" type="text">
				</div>
			</div>

			<!-- Port of Call -->
			<div>
				<label class="block font-label-caps text-label-caps text-primary mb-2" for="portOfCall">Port of Call (Egypt) <span class="text-error">*</span></label>
				<select required class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="portOfCall" name="portOfCall">
					<option value="" disabled selected>Select Egyptian Gateway Port</option>
					<option value="Port Said (East & West)">Port Said (East & West)</option>
					<option value="Suez Canal Zone">Suez Canal Zone</option>
					<option value="Damietta Port">Damietta Port</option>
					<option value="Alexandria Port">Alexandria Port</option>
					<option value="Ain Sokhna">Ain Sokhna</option>
					<option value="Adabeyah Port">Adabeyah Port</option>
					<option value="Safaga Port">Safaga Port</option>
					<option value="Arish Port">Arish Port</option>
					<option value="El Dekheila">El Dekheila</option>
					<option value="Abu Qir">Abu Qir</option>
					<option value="Sidi Kerir">Sidi Kerir</option>
					<option value="Gargoub Port">Gargoub Port</option>
				</select>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<!-- ETA -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="eta">Estimated Time of Arrival (ETA) <span class="text-error">*</span></label>
					<input required class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="eta" name="eta" type="datetime-local">
				</div>
				<!-- ETD -->
				<div>
					<label class="block font-label-caps text-label-caps text-primary mb-2" for="etd">Estimated Time of Departure (ETD)</label>
					<input class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="etd" name="etd" type="datetime-local">
				</div>
			</div>

			<!-- Additional Notes -->
			<div>
				<label class="block font-label-caps text-label-caps text-primary mb-2" for="notes">Additional Requirements / Specifications</label>
				<textarea class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="notes" name="notes" placeholder="Specify any food preferences, technical part codes, or urgent delivery notes..." rows="3"></textarea>
			</div>

			<!-- Navigation Buttons -->
			<div class="mt-10 pt-6 border-t border-outline-variant flex justify-between items-center">
				<a href="<?php echo esc_url( home_url( '/step-2' ) ); ?>" class="px-6 py-3 border border-primary text-primary rounded font-button-text text-button-text hover:bg-surface-container transition-colors flex items-center gap-2">
					<span class="material-symbols-outlined text-sm">arrow_back</span>
					<span>Back</span>
				</a>
				<button id="next-btn" type="button" class="px-8 py-3 bg-secondary-container text-on-secondary font-button-text text-button-text rounded shadow-md hover:bg-secondary transition-all flex items-center gap-2">
					<span>Next: Review Request</span>
					<span class="material-symbols-outlined text-sm">arrow_forward</span>
				</button>
			</div>
		</form>
	</div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
	// Guard check
	if (!sessionStorage.getItem('quotation_fullName')) {
		window.location.href = "<?php echo esc_url( home_url( '/step-2' ) ); ?>";
		return;
	}

	// Prefill saved fields
	const fields = ['vesselName', 'imoNumber', 'portOfCall', 'eta', 'etd', 'notes'];
	fields.forEach(field => {
		const val = sessionStorage.getItem('quotation_' + field);
		if (val) {
			document.getElementById(field).value = val;
		}
	});

	document.getElementById('next-btn').addEventListener('click', () => {
		const vesselName = document.getElementById('vesselName').value.trim();
		const imoNumber = document.getElementById('imoNumber').value.trim();
		const portOfCall = document.getElementById('portOfCall').value;
		const eta = document.getElementById('eta').value;
		const etd = document.getElementById('etd').value;
		const notes = document.getElementById('notes').value.trim();

		if (!vesselName || !imoNumber || !portOfCall || !eta) {
			alert("Please fill in all required vessel details marked with *.");
			return;
		}

		sessionStorage.setItem('quotation_vesselName', vesselName);
		sessionStorage.setItem('quotation_imoNumber', imoNumber);
		sessionStorage.setItem('quotation_portOfCall', portOfCall);
		sessionStorage.setItem('quotation_eta', eta);
		sessionStorage.setItem('quotation_etd', etd);
		sessionStorage.setItem('quotation_notes', notes);

		window.location.href = "<?php echo esc_url( home_url( '/step-4' ) ); ?>";
	});
});
</script>

<?php get_footer(); ?>