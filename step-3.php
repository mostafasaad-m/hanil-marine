<?php
/**
 * Template Name: Quotation Step 3 - Vessel Details & Attachments
 * Description: Third step of the multi-step vessel quotation request form with file upload support.
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
			<h1 class="font-headline-lg text-headline-lg text-primary mb-2">Vessel Schedule & Specifications</h1>
			<p class="font-body-md text-body-md text-on-surface-variant">Provide your vessel details and upload any requisition spreadsheets or specification documents.</p>
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

			<!-- Additional Requirements / Notes -->
			<div>
				<label class="block font-label-caps text-label-caps text-primary mb-2" for="notes">Additional Requirements / Description</label>
				<textarea class="w-full bg-surface border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all" id="notes" name="notes" placeholder="Specify food preferences, technical part codes, or urgent delivery instructions..." rows="3"></textarea>
			</div>

			<!-- File Upload Section -->
			<div class="space-y-2 pt-2">
				<label class="block font-label-caps text-label-caps text-primary mb-1">Upload Quotation Requisition File (PDF, XLSX, DOCX, Images)</label>
				<p class="text-sm text-on-surface-variant mb-3">Attach any requisitions, store lists, spreadsheets, or technical drawings for instant processing by our port dispatcher.</p>
				
				<div id="drop-zone" class="border-2 border-dashed border-outline-variant rounded-lg p-6 flex flex-col items-center justify-center bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer text-center" onclick="document.getElementById('file-input').click()">
					<span class="material-symbols-outlined text-primary text-4xl mb-2">upload_file</span>
					<p class="font-body-md text-on-surface mb-1 font-bold">Click or drag & drop file here</p>
					<p class="text-xs text-on-surface-variant">Supports PDF, XLSX, DOCX, PNG, JPG up to 15MB</p>
					<input type="file" id="file-input" class="hidden" accept=".pdf,.xlsx,.xls,.doc,.docx,.png,.jpg,.jpeg">
				</div>

				<div id="file-preview-area" class="hidden mt-3 p-3 bg-surface border border-outline-variant rounded-lg flex items-center justify-between">
					<div class="flex items-center gap-3 overflow-hidden">
						<span class="material-symbols-outlined text-secondary text-2xl">description</span>
						<div class="truncate">
							<p id="file-preview-name" class="font-bold text-sm text-primary truncate">filename.pdf</p>
							<p id="file-preview-size" class="text-xs text-on-surface-variant">0 KB</p>
						</div>
					</div>
					<button type="button" onclick="removeUploadedFile(event)" class="text-error hover:text-red-700 p-1">
						<span class="material-symbols-outlined text-xl">close</span>
					</button>
				</div>
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
		if (val && document.getElementById(field)) {
			document.getElementById(field).value = val;
		}
	});

	// File Upload Handling
	const fileInput = document.getElementById('file-input');
	const dropZone = document.getElementById('drop-zone');
	const filePreviewArea = document.getElementById('file-preview-area');
	const fileNameEl = document.getElementById('file-preview-name');
	const fileSizeEl = document.getElementById('file-preview-size');

	// Restore previously uploaded file info
	const existingFileName = sessionStorage.getItem('quotation_file_name');
	const existingFileSize = sessionStorage.getItem('quotation_file_size');
	if (existingFileName) {
		fileNameEl.textContent = existingFileName;
		fileSizeEl.textContent = existingFileSize || '';
		filePreviewArea.classList.remove('hidden');
	}

	fileInput.addEventListener('change', handleFileSelect);

	dropZone.addEventListener('dragover', (e) => {
		e.preventDefault();
		dropZone.classList.add('border-primary', 'bg-surface-container');
	});

	dropZone.addEventListener('dragleave', (e) => {
		e.preventDefault();
		dropZone.classList.remove('border-primary', 'bg-surface-container');
	});

	dropZone.addEventListener('drop', (e) => {
		e.preventDefault();
		dropZone.classList.remove('border-primary', 'bg-surface-container');
		if (e.dataTransfer.files && e.dataTransfer.files.length > 0) {
			fileInput.files = e.dataTransfer.files;
			handleFileSelect();
		}
	});

	function handleFileSelect() {
		if (fileInput.files && fileInput.files[0]) {
			const file = fileInput.files[0];
			fileNameEl.textContent = file.name;
			const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
			fileSizeEl.textContent = sizeMB + ' MB';
			filePreviewArea.classList.remove('hidden');

			// Read file as Base64 for session storage
			const reader = new FileReader();
			reader.onload = function(e) {
				sessionStorage.setItem('quotation_file_base64', e.target.result);
				sessionStorage.setItem('quotation_file_name', file.name);
				sessionStorage.setItem('quotation_file_size', sizeMB + ' MB');
			};
			reader.readAsDataURL(file);
		}
	}

	window.removeUploadedFile = function(e) {
		e.stopPropagation();
		fileInput.value = '';
		sessionStorage.removeItem('quotation_file_base64');
		sessionStorage.removeItem('quotation_file_name');
		sessionStorage.removeItem('quotation_file_size');
		filePreviewArea.classList.add('hidden');
	};

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