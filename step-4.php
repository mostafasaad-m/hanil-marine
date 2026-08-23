<?php
/**
 * Template Name: Quotation Step 4 - Review & Submit
 * Description: Fourth and final step of the multi-step vessel quotation request form with swiping page transition.
 */
get_header();
?>

<style>
.swipe-container {
	opacity: 0;
	transform: translateX(40px);
	transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.35s ease-in-out;
}
.swipe-in {
	opacity: 1 !important;
	transform: translateX(0) !important;
}
.swipe-out-left {
	transform: translateX(-60px) !important;
	opacity: 0 !important;
}
.swipe-out-right {
	transform: translateX(60px) !important;
	opacity: 0 !important;
}
</style>

<main id="swipe-wrapper" class="swipe-container flex-grow flex flex-col items-center pt-10 pb-section-gap px-margin-mobile md:px-margin-desktop w-full max-w-container-max mx-auto">
	<!-- Progress Stepper -->
	<?php get_template_part( 'template-parts/quotation-stepper', null, array( 'current_step' => 4 ) ); ?>

	<div class="w-full max-w-4xl">
		<!-- Header -->
		<div class="text-center mb-10">
			<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-3 inline-block">Final Step 4 of 4</span>
			<h1 class="font-headline-lg text-headline-lg md:font-headline-xl md:text-headline-xl text-primary mb-3">Review & Submit Request</h1>
			<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Please review your quotation details below before submitting to our 24/7 port operations team.</p>
		</div>

		<!-- Summary Panel -->
		<div class="bg-surface-container-low rounded-xl p-6 md:p-10 mb-8 border border-outline-variant shadow-sm">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<!-- Service Summary -->
				<div class="bg-surface-container-lowest p-6 rounded-lg border border-outline-variant">
					<div class="flex items-center mb-4 text-primary">
						<span class="material-symbols-outlined mr-2 text-secondary">inventory_2</span>
						<h3 class="font-headline-md text-headline-md">Service Category</h3>
					</div>
					<dl class="space-y-3">
						<div class="flex justify-between border-b border-outline-variant/30 pb-2">
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Selected Service</dt>
							<dd id="sum-service" class="font-body-md text-primary font-bold">Provisions Supply</dd>
						</div>
					</dl>
				</div>

				<!-- Contact Summary -->
				<div class="bg-surface-container-lowest p-6 rounded-lg border border-outline-variant">
					<div class="flex items-center mb-4 text-primary">
						<span class="material-symbols-outlined mr-2 text-secondary">contact_mail</span>
						<h3 class="font-headline-md text-headline-md">Contact Information</h3>
					</div>
					<dl class="space-y-2 text-sm">
						<div class="flex justify-between border-b border-outline-variant/30 pb-1.5">
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Name</dt>
							<dd id="sum-name" class="font-bold text-primary">-</dd>
						</div>
						<div class="flex justify-between border-b border-outline-variant/30 pb-1.5">
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Email</dt>
							<dd id="sum-email" class="font-bold text-primary">-</dd>
						</div>
						<div class="flex justify-between border-b border-outline-variant/30 pb-1.5">
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Company</dt>
							<dd id="sum-company" class="font-bold text-primary">-</dd>
						</div>
						<div class="flex justify-between pb-1">
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase">Phone</dt>
							<dd id="sum-phone" class="font-bold text-primary">-</dd>
						</div>
					</dl>
				</div>

				<!-- Vessel Summary (Full Width) -->
				<div class="md:col-span-2 bg-surface-container-lowest p-6 rounded-lg border border-outline-variant">
					<div class="flex items-center mb-4 text-primary">
						<span class="material-symbols-outlined mr-2 text-secondary">directions_boat</span>
						<h3 class="font-headline-md text-headline-md">Vessel & Port Schedule</h3>
					</div>
					<div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-sm mb-4">
						<div>
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-1">Vessel Name</dt>
							<dd id="sum-vessel" class="font-bold text-primary text-base">-</dd>
						</div>
						<div>
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-1">IMO Number</dt>
							<dd id="sum-imo" class="font-bold text-primary text-base">-</dd>
						</div>
						<div>
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-1">Port of Call</dt>
							<dd id="sum-port" class="font-bold text-primary text-base">-</dd>
						</div>
						<div>
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-1">ETA</dt>
							<dd id="sum-eta" class="font-bold text-primary text-base">-</dd>
						</div>
					</div>
					
					<div class="pt-3 border-t border-outline-variant/30 space-y-3">
						<div>
							<dt class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-1">Additional Notes</dt>
							<dd id="sum-notes" class="font-body-md text-on-surface italic bg-surface p-3 rounded">No special instructions provided.</dd>
						</div>

						<div id="sum-file-wrapper" class="hidden flex items-center justify-between bg-surface p-3 rounded border border-outline-variant/30">
							<div class="flex items-center gap-2">
								<span class="material-symbols-outlined text-secondary">attach_file</span>
								<span id="sum-file-name" class="font-bold text-sm text-primary">filename.pdf</span>
							</div>
							<span class="text-xs text-secondary-container font-bold px-2 py-1 bg-surface-container rounded-full">Requisition File Attached</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Action Area -->
		<div class="flex flex-col items-center space-y-6">
			<div class="flex items-start bg-surface-container p-4 rounded-lg border border-outline-variant w-full max-w-2xl">
				<div class="flex items-center h-5">
					<input id="terms" type="checkbox" class="w-5 h-5 text-secondary-container bg-surface border-outline-variant rounded focus:ring-primary">
				</div>
				<div class="ml-3 text-sm">
					<label for="terms" class="font-body-md text-on-surface cursor-pointer">
						I confirm that all details provided are accurate and I authorize Hanil Marine to process this quotation request.
					</label>
				</div>
			</div>

			<div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
				<button id="edit-btn" type="button" class="px-8 py-4 rounded border border-primary text-primary font-button-text text-button-text hover:bg-surface-container transition-colors text-center">
					Edit Details
				</button>
				<button id="submit-btn" type="button" class="px-10 py-4 rounded bg-secondary-container text-on-secondary font-button-text text-button-text hover:bg-secondary transition-all shadow-lg flex items-center justify-center gap-2">
					<span>Submit Quotation Request</span>
					<span class="material-symbols-outlined text-sm">send</span>
				</button>
			</div>
		</div>
	</div>

	<!-- Success Overlay Modal -->
	<div id="success-overlay" class="fixed inset-0 bg-primary/90 backdrop-blur-sm z-50 hidden flex items-center justify-center opacity-0 transition-opacity duration-300 p-4">
		<div id="success-modal" class="bg-surface-container-lowest p-8 md:p-12 rounded-xl max-w-lg w-full text-center shadow-2xl transform scale-95 transition-transform duration-300">
			<div class="w-20 h-20 bg-surface-container rounded-full flex items-center justify-center mx-auto mb-6 ring-8 ring-secondary-container/20">
				<span class="material-symbols-outlined text-secondary-container text-4xl">check_circle</span>
			</div>
			<h2 class="font-headline-lg text-headline-lg text-primary mb-2">Request Submitted Successfully!</h2>
			<p class="font-body-md text-body-md text-on-surface-variant mb-6">Your quotation request and attachments have been logged in WordPress. Our dispatch team will respond within 2 hours.</p>
			<div class="bg-surface-container p-4 rounded-lg mb-6 border border-outline-variant inline-block w-full">
				<span class="font-label-caps text-label-caps text-on-surface-variant uppercase block mb-1">Your Unique Reference ID</span>
				<span id="res-ref-id" class="font-headline-md text-headline-md font-bold text-primary">HM-2026-XXXX</span>
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-button-text text-button-text px-8 py-3.5 rounded bg-primary text-on-primary hover:bg-primary-container transition-colors inline-block w-full">
				Return to Homepage
			</a>
		</div>
	</div>
</main>

<script>
function dataURLtoFile(dataurl, filename) {
	let arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
		bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
	while(n--){
		u8arr[n] = bstr.charCodeAt(n);
	}
	return new File([u8arr], filename, {type:mime});
}

document.addEventListener('DOMContentLoaded', () => {
	const wrapper = document.getElementById('swipe-wrapper');
	requestAnimationFrame(() => {
		wrapper.classList.add('swipe-in');
	});

	// Guard check
	if (!sessionStorage.getItem('quotation_vesselName')) {
		window.location.href = "<?php echo esc_url( home_url( '/step-3' ) ); ?>";
		return;
	}

	// Populate summary
	document.getElementById('sum-service').textContent = sessionStorage.getItem('quotation_service_type') || '-';
	document.getElementById('sum-name').textContent = sessionStorage.getItem('quotation_fullName') || '-';
	document.getElementById('sum-email').textContent = sessionStorage.getItem('quotation_email') || '-';
	document.getElementById('sum-company').textContent = (sessionStorage.getItem('quotation_companyName') || '') + (sessionStorage.getItem('quotation_jobTitle') ? ' (' + sessionStorage.getItem('quotation_jobTitle') + ')' : '');
	document.getElementById('sum-phone').textContent = sessionStorage.getItem('quotation_phone') || '-';

	document.getElementById('sum-vessel').textContent = sessionStorage.getItem('quotation_vesselName') || '-';
	document.getElementById('sum-imo').textContent = sessionStorage.getItem('quotation_imoNumber') || '-';
	document.getElementById('sum-port').textContent = sessionStorage.getItem('quotation_portOfCall') || '-';
	document.getElementById('sum-eta').textContent = sessionStorage.getItem('quotation_eta') ? sessionStorage.getItem('quotation_eta').replace('T', ' ') : '-';
	
	const notes = sessionStorage.getItem('quotation_notes');
	if (notes) {
		document.getElementById('sum-notes').textContent = '"' + notes + '"';
	}

	const fileName = sessionStorage.getItem('quotation_file_name');
	if (fileName) {
		document.getElementById('sum-file-name').textContent = fileName;
		document.getElementById('sum-file-wrapper').classList.remove('hidden');
	}

	document.getElementById('edit-btn').addEventListener('click', () => {
		wrapper.classList.remove('swipe-in');
		wrapper.classList.add('swipe-out-right');
		setTimeout(() => {
			window.location.href = "<?php echo esc_url( home_url( '/step-3' ) ); ?>";
		}, 280);
	});

	// Submit handler
	document.getElementById('submit-btn').addEventListener('click', () => {
		const terms = document.getElementById('terms');
		if (!terms.checked) {
			alert("Please confirm the details and accept the authorization checkbox.");
			return;
		}

		const btn = document.getElementById('submit-btn');
		btn.disabled = true;
		btn.innerHTML = '<span>Transmitting Request & File...</span><span class="material-symbols-outlined text-sm animate-spin">sync</span>';

		const formData = new FormData();
		formData.append('action', 'bayrak_submit_quotation');
		formData.append('service_type', sessionStorage.getItem('quotation_service_type') || '');
		formData.append('full_name', sessionStorage.getItem('quotation_fullName') || '');
		formData.append('email', sessionStorage.getItem('quotation_email') || '');
		formData.append('company_name', sessionStorage.getItem('quotation_companyName') || '');
		formData.append('job_title', sessionStorage.getItem('quotation_jobTitle') || '');
		formData.append('phone', sessionStorage.getItem('quotation_phone') || '');
		formData.append('vessel_name', sessionStorage.getItem('quotation_vesselName') || '');
		formData.append('imo_number', sessionStorage.getItem('quotation_imoNumber') || '');
		formData.append('port_of_call', sessionStorage.getItem('quotation_portOfCall') || '');
		formData.append('eta', sessionStorage.getItem('quotation_eta') || '');
		formData.append('etd', sessionStorage.getItem('quotation_etd') || '');
		formData.append('notes', sessionStorage.getItem('quotation_notes') || '');

		// Handle file if present
		const fileBase64 = sessionStorage.getItem('quotation_file_base64');
		if (fileBase64 && fileName) {
			try {
				const fileObj = dataURLtoFile(fileBase64, fileName);
				formData.append('quotation_file', fileObj);
			} catch (e) {
				console.error("Error processing file:", e);
			}
		}

		fetch("<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>", {
			method: 'POST',
			body: formData
		})
		.then(res => res.json())
		.then(data => {
			if (data.success) {
				document.getElementById('res-ref-id').textContent = data.data.ref_id;
				
				// Clear session storage
				sessionStorage.clear();

				// Show modal
				const overlay = document.getElementById('success-overlay');
				const modal = document.getElementById('success-modal');
				overlay.classList.remove('hidden');
				void overlay.offsetWidth;
				overlay.classList.remove('opacity-0');
				overlay.classList.add('opacity-100');
				modal.classList.remove('scale-95');
				modal.classList.add('scale-100');
			} else {
				alert(data.data ? data.data.message : 'Submission failed. Please try again.');
				btn.disabled = false;
				btn.innerHTML = '<span>Submit Quotation Request</span><span class="material-symbols-outlined text-sm">send</span>';
			}
		})
		.catch(err => {
			console.error(err);
			alert('Network error. Please check your connection and try again.');
			btn.disabled = false;
			btn.innerHTML = '<span>Submit Quotation Request</span><span class="material-symbols-outlined text-sm">send</span>';
		});
	});
});
</script>

<?php get_footer(); ?>