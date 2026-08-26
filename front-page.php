<?php get_header(); ?>

<!-- Hero Section -->
<header class="relative h-[80vh] flex items-center bg-surface-container-highest overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="bg-cover bg-center w-full h-full opacity-80" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBYLQ0d672RovfEYsopCoJHAHOU8icvgOiSu5LdUmdOVpqHxI1tuazMgPiMvIaeG39n2ldjiVEo6v4Apzei82bV59X9tEWJ5usYfLNT0Osr3ShTCRPZ_tKSSfA-Vm1Gp0LF4MOP81kc3OymupqOPs-hMXk8TdlsVNsiCtFq9SP3Yh8nl2up64JbZLezD0u_PmQ39AdUwczDpjf3c_-1xpo3mli8ov6XeutSVXhl-n_oeLzDeSsIohoS-g')"></div>
<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/85 to-transparent"></div>
</div>
<div class="relative z-10 w-full max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
<div class="max-w-2xl text-on-primary">

<h1 class="font-headline-xl text-headline-xl mb-4"><?php echo esc_html( bayrak_t( 'hero_title', 'Complete Ship Supplies & Port Services in Egypt' ) ); ?></h1>
<p class="font-body-lg text-body-lg mb-8 text-primary-fixed"><?php echo esc_html( bayrak_t( 'hero_subtitle', 'Fresh provisions, bonded stores, deck & engine spares, and rapid launch delivery at Port Said, Suez Canal, Alexandria, Damietta, and Ain Sokhna. 24/7 operational dispatch.' ) ); ?></p>
<a class="inline-flex items-center justify-center bg-secondary-container text-on-secondary px-8 py-4 rounded font-button-text text-button-text hover:bg-secondary transition-colors duration-200 shadow-[0_12px_24px_-4px_rgba(229,169,60,0.3)]" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
                    <?php echo esc_html( bayrak_t( 'hero_cta', 'Get Quotation Now' ) ); ?>
                </a>
</div>
</div>
</header>
<!-- Services Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface max-w-[1280px] mx-auto" id="services">
	<div class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
		<div>
			<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-label-caps mb-3 inline-block"><?php echo esc_html( bayrak_t( 'sec_services_badge', '24/7 Port Delivery' ) ); ?></span>
			<h2 class="font-headline-lg text-headline-lg text-primary"><?php echo esc_html( bayrak_t( 'sec_services_title', 'Marine Supplies & Port Agency Services' ) ); ?></h2>
			<div class="h-1 w-20 bg-secondary-container mt-4"></div>
		</div>
		<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="inline-flex items-center gap-2 bg-primary text-on-primary px-6 py-3 rounded font-button-text hover:bg-primary-container transition-colors shadow-sm self-start md:self-auto">
			<span><?php echo esc_html( bayrak_t( 'view_all_services', 'View All Services' ) ); ?></span>
		</a>
	</div>

	<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
		<!-- Ship Supply & Provisions -->
		<a href="<?php echo esc_url( home_url( '/provisions' ) ); ?>" class="service-card group bg-surface-container-lowest border border-outline-variant p-8 relative overflow-hidden transition-all duration-300 hover:border-primary hover:shadow-lg flex flex-col justify-between">
			<div>
				<div class="flex justify-between items-start mb-6">
					<h3 class="font-headline-md text-headline-md text-primary group-hover:text-secondary transition-colors"><?php echo esc_html( bayrak_t( 'card_provisions_title', 'Provisions & Bonded Stores' ) ); ?></h3>
				</div>
				<p class="font-body-md text-body-md text-on-surface-variant mb-6"><?php echo esc_html( bayrak_t( 'card_provisions_desc', 'Fresh, frozen, and dry provisions delivered in refrigerated reefers under HACCP standards. Complete stock of duty-free bonded goods and cabin supplies.' ) ); ?></p>
			
			</div>
			<div class="flex items-center text-secondary font-button-text gap-1 group-hover:translate-x-1 transition-transform">
				<span><?php echo esc_html( bayrak_t( 'services', 'View Details' ) ); ?></span>
			</div>
		</a>

		<!-- Logistics & Port Handling -->
		<a href="<?php echo esc_url( home_url( '/services#logistics' ) ); ?>" class="service-card group bg-surface-container-lowest border border-outline-variant p-8 relative overflow-hidden transition-all duration-300 hover:border-primary hover:shadow-lg flex flex-col justify-between">
			<div>
				<div class="flex justify-between items-start mb-6">
					<h3 class="font-headline-md text-headline-md text-primary group-hover:text-secondary transition-colors"><?php echo esc_html( bayrak_t( 'card_logistics_title', 'Port Logistics & Transit Clearance' ) ); ?></h3>
				</div>
				<p class="font-body-md text-body-md text-on-surface-variant mb-6"><?php echo esc_html( bayrak_t( 'card_logistics_desc', 'Customs clearance, bonded warehousing, launch boat delivery at anchorage, and zero-delay logistics for Suez Canal transit and port calls.' ) ); ?></p>
				
			</div>
			<div class="flex items-center text-secondary font-button-text gap-1 group-hover:translate-x-1 transition-transform">
				<span><?php echo esc_html( bayrak_t( 'services', 'View Details' ) ); ?></span>
			</div>
		</a>

		<!-- Technical Parts & Repairs -->
		<a href="<?php echo esc_url( home_url( '/services#technical' ) ); ?>" class="service-card group bg-surface-container-lowest border border-outline-variant p-8 relative overflow-hidden transition-all duration-300 hover:border-primary hover:shadow-lg flex flex-col justify-between">
			<div>
				<div class="flex justify-between items-start mb-6">
					<h3 class="font-headline-md text-headline-md text-primary group-hover:text-secondary transition-colors"><?php echo esc_html( bayrak_t( 'card_technical_title', 'Technical Spares & Engine Stores' ) ); ?></h3>
				</div>
				<p class="font-body-md text-body-md text-on-surface-variant mb-6"><?php echo esc_html( bayrak_t( 'card_technical_desc', 'IMPA & ISSA coded engine, deck, and electrical spare parts, SOLAS safety gear, and qualified marine technicians for urgent port repairs.' ) ); ?></p>
				
			</div>
			<div class="flex items-center text-secondary font-button-text gap-1 group-hover:translate-x-1 transition-transform">
				<span><?php echo esc_html( bayrak_t( 'services', 'View Details' ) ); ?></span>
			</div>
		</a>
	</div>

	<!-- Bottom Quotation Banner -->
	<div class="mt-12 bg-primary text-on-primary rounded-xl p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg">
		<div>
			<h3 class="font-headline-md text-headline-md mb-2"><?php echo esc_html( bayrak_t( 'banner_quote_title', 'Need Immediate Port Delivery or Transit Supplies?' ) ); ?></h3>
			<p class="font-body-md text-primary-fixed"><?php echo esc_html( bayrak_t( 'banner_quote_desc', 'Submit your requisition list (PDF, XLSX) for an instant quotation from our dispatch desk.' ) ); ?></p>
		</div>
		<div class="flex flex-wrap gap-4">
			<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="bg-surface-container-lowest text-primary px-6 py-3 rounded font-button-text hover:bg-surface transition-colors">
				<?php echo esc_html( bayrak_t( 'view_all_services', 'View All Services' ) ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="bg-secondary-container text-on-secondary px-6 py-3 rounded font-button-text hover:bg-secondary transition-colors shadow-md">
				<?php echo esc_html( bayrak_t( 'get_quotation', 'Request Quotation Now' ) ); ?>
			</a>
		</div>
	</div>
</section>

<!-- Trust Section -->
<section class="bg-surface-container-low py-section-gap px-margin-mobile md:px-margin-desktop" id="about">
<div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-section-gap items-center">
<div>
<h2 class="font-headline-lg text-headline-lg text-primary mb-6"><?php echo esc_html( bayrak_t( 'about_sec_title', 'Established Ship Supplies & Port Operations in Egypt' ) ); ?></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-8"><?php echo esc_html( bayrak_t( 'about_sec_desc', 'Hanil Marine (Al-Bayrak) provides direct ship chandlery, bonded logistics, and technical supplies across all Egyptian ports. Operating temperature-controlled warehouses and dedicated supply launches to ensure zero vessel delay.' ) ); ?></p>
<div class="flex items-center gap-4 bg-surface-container-lowest p-6 border border-outline-variant rounded">
<div>
<h4 class="font-headline-md text-headline-md text-primary"><?php echo esc_html( bayrak_t( 'cert_title', 'Certified Quality Assurance' ) ); ?></h4>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'cert_desc', 'HACCP & ISO 22000 certified storage with strict IMPA/ISSA sourcing standards.' ) ); ?></p>
</div>
</div>
</div>
<div class="relative h-96 w-full">
<div class="absolute inset-0 bg-cover bg-center rounded border border-outline-variant" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDcCTNHvtyFdaejsM6Qm43gfNIrsu5w6wXke5nE4BgVUJ68_CNVAHhIYGB1L4x4Ilpy7FKhJEpMRTc4K4GPJBiVsB2sa8_GPwycvuFl8xp26xZZXnuAH4XHoCmtKcSHL3_0OEx4z3VrBlZZzcY3VWvRlH8zMNRVQmYVmVB6Ydm9UBv_FiDa21S6YwdKYoPkIheQfGpoGCvpQmN0dGUvEev_t5p7k4ao7wJ58SEFL0VyvuBtMo4s2sJwqA')"></div>
</div>
</div>
</section>

<!-- Quick Quote Section -->
<section class="bg-tertiary text-on-tertiary py-section-gap px-margin-mobile md:px-margin-desktop" id="quote">
	<div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-section-gap">
		<div>
			<h2 class="font-headline-lg text-headline-lg mb-4 text-on-tertiary"><?php echo esc_html( bayrak_t( 'quick_quote_title', 'Direct Quotation Request' ) ); ?></h2>
			<p class="font-body-lg text-body-lg text-tertiary-fixed-dim mb-6"><?php echo esc_html( bayrak_t( 'quick_quote_desc', 'Submit your vessel schedule and requisition list. Our port dispatchers respond within 2 hours with itemized pricing.' ) ); ?></p>
			
			<div class="space-y-4 mb-8">
				<div class="flex items-center gap-3 text-tertiary-fixed-dim font-body-md">
					<span class="text-secondary-container font-bold">✓</span>
					<span>24/7 Port Dispatch &amp; Technical Support</span>
				</div>
				<div class="flex items-center gap-3 text-tertiary-fixed-dim font-body-md">
					<span class="text-secondary-container font-bold">✓</span>
					<span>Instant Requisition Upload (PDF, XLSX, DOCX, Images)</span>
				</div>
				<div class="flex items-center gap-3 text-tertiary-fixed-dim font-body-md">
					<span class="text-secondary-container font-bold">✓</span>
					<span>Direct Delivery Across All Major Egyptian Ports</span>
				</div>
			</div>

			<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="inline-flex items-center gap-2 bg-secondary-container text-on-secondary px-8 py-4 rounded font-button-text text-button-text hover:bg-secondary transition-colors shadow-md">
				<?php echo esc_html( bayrak_t( 'get_quotation', 'Launch Multi-Step Quotation Form' ) ); ?>
			</a>
		</div>

		<div class="bg-surface-container-lowest p-8 rounded border border-outline-variant text-on-surface">
			<form id="quick-quote-form" class="space-y-4">
				<div id="quick-quote-error" class="hidden p-3 bg-red-100 border border-red-400 text-red-700 text-sm rounded font-bold mb-3"></div>

				<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
					<div>
						<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'full_name', 'Contact Name' ) ); ?> <span class="text-error">*</span></label>
						<input id="quick-name" required class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" placeholder="e.g. Capt. John Smith" type="text" name="full_name">
					</div>
					<div>
						<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'email_address', 'Email Address' ) ); ?> <span class="text-error">*</span></label>
						<input id="quick-email" required class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" placeholder="ops@shipping.com" type="email" name="email">
					</div>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
					<div>
						<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'phone_number', 'Phone / WhatsApp' ) ); ?> <span class="text-error">*</span></label>
						<input id="quick-phone" required class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" placeholder="+20 100 000 0000" type="tel" name="phone">
					</div>
					<div>
						<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'vessel_name', 'Vessel Name' ) ); ?> <span class="text-error">*</span></label>
						<input id="quick-vessel" required class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" placeholder="e.g. MV Hanil Star" type="text" name="vessel_name">
					</div>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
					<div>
						<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'imo_number', 'IMO Number' ) ); ?></label>
						<input id="quick-imo" class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" placeholder="e.g. 9839430" type="text" name="imo_number">
					</div>
					<div>
						<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'port_of_call', 'Port of Call (Egypt)' ) ); ?></label>
						<select id="quick-port" class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" name="port_of_call">
							<option value="Port Said (East &amp; West)">Port Said (East &amp; West)</option>
							<option value="Suez Canal Zone">Suez Canal Zone</option>
							<option value="Alexandria &amp; El Dekheila">Alexandria &amp; El Dekheila</option>
							<option value="Damietta Port">Damietta Port</option>
							<option value="Ain Sokhna &amp; Adabeyah">Ain Sokhna &amp; Adabeyah</option>
							<option value="Safaga &amp; Red Sea Ports">Safaga &amp; Red Sea Ports</option>
						</select>
					</div>
				</div>

				<div>
					<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'step_1_name', 'Service Category' ) ); ?></label>
					<select id="quick-service" class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" name="service_type">
						<option value="Provisions Supply">Provisions Supply</option>
						<option value="Bonded Stores">Bonded Stores</option>
						<option value="Technical Parts &amp; Spares">Technical Support &amp; Spares</option>
						<option value="Logistics &amp; Port Handling">Logistics &amp; Port Transit</option>
						<option value="Safety &amp; SOLAS Equipment">Safety &amp; SOLAS Equipment</option>
						<option value="General Requisition">General Requisition</option>
					</select>
				</div>

				<div>
					<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'notes', 'Requirements / Store Items' ) ); ?></label>
					<textarea id="quick-notes" class="w-full bg-surface border border-outline-variant rounded px-3 py-2.5 text-on-surface focus:outline-none focus:border-primary focus:border-2 transition-all font-body-md" placeholder="Briefly specify provisions, engine spares, or bonded store items needed..." rows="2" name="notes"></textarea>
				</div>

				<!-- Upload Button & Dropzone -->
				<div>
					<label class="block font-label-caps text-label-caps text-on-surface mb-1 uppercase"><?php echo esc_html( bayrak_t( 'upload_title', 'Requisition File Upload (PDF, XLSX, DOCX, Images)' ) ); ?></label>
					<div id="quick-dropzone" class="border-2 border-dashed border-outline-variant rounded-lg p-4 flex flex-col items-center justify-center bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer text-center" onclick="document.getElementById('quick-file-input').click()">
						<p class="font-body-md text-on-surface mb-1 font-bold">📄 Click or drag &amp; drop file here</p>
						<p class="text-xs text-on-surface-variant">PDF, XLSX, DOCX, PNG, JPG up to 15MB</p>
						<input type="file" id="quick-file-input" class="hidden" accept=".pdf,.xlsx,.xls,.doc,.docx,.png,.jpg,.jpeg" name="quotation_file">
					</div>
					<div id="quick-file-preview" class="hidden mt-2 p-2 bg-surface border border-outline-variant rounded flex items-center justify-between">
						<span id="quick-file-name" class="font-bold text-xs text-primary truncate max-w-[200px]">filename.pdf</span>
						<button type="button" id="quick-remove-file" class="text-error hover:text-red-700 font-bold text-sm px-2">✕</button>
					</div>
				</div>

				<button id="quick-submit-btn" type="submit" class="w-full bg-secondary-container text-on-secondary text-center py-3.5 rounded font-button-text text-button-text hover:bg-secondary transition-colors duration-200 shadow-md flex items-center justify-center gap-2">
					<span><?php echo esc_html( bayrak_t( 'get_quotation', 'Submit Quotation Request' ) ); ?></span>
				</button>
			</form>

			<!-- Quick Success Modal -->
			<div id="quick-success-modal" class="hidden mt-4 p-6 bg-surface-container-low border border-primary/20 rounded-lg text-center">
				<div class="w-12 h-12 bg-secondary-container text-on-secondary rounded-full flex items-center justify-center mx-auto mb-3 font-bold text-2xl">✓</div>
				<h3 class="font-headline-md text-headline-md text-primary mb-1">Quotation Request Submitted!</h3>
				<p class="text-xs text-on-surface-variant mb-3">Thank you for you request, our team will respond within 2 hours.</p>
				<div class="bg-surface p-3 rounded border border-outline-variant mb-3">
					<span class="text-xs font-bold text-on-surface-variant block uppercase">Your Reference ID</span>
					<span id="quick-ref-id" class="text-lg font-bold text-primary">HM-2026-XXXX</span>
				</div>
				<button type="button" onclick="document.getElementById('quick-success-modal').classList.add('hidden');" class="text-xs text-primary underline font-bold">Submit Another Request</button>
			</div>
		</div>
	</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
	const dropzone = document.getElementById('quick-dropzone');
	const fileInput = document.getElementById('quick-file-input');
	const filePreview = document.getElementById('quick-file-preview');
	const fileNameSpan = document.getElementById('quick-file-name');
	const removeBtn = document.getElementById('quick-remove-file');
	const form = document.getElementById('quick-quote-form');
	const errorDiv = document.getElementById('quick-quote-error');
	const submitBtn = document.getElementById('quick-submit-btn');

	if (!form) return;

	// File Selection
	fileInput.addEventListener('change', (e) => {
		if (e.target.files && e.target.files[0]) {
			const file = e.target.files[0];
			if (file.size > 15 * 1024 * 1024) {
				alert("File size exceeds 15MB limit.");
				fileInput.value = '';
				filePreview.classList.add('hidden');
				return;
			}
			fileNameSpan.textContent = file.name + ' (' + (file.size / 1024 / 1024).toFixed(2) + ' MB)';
			filePreview.classList.remove('hidden');
		}
	});

	removeBtn.addEventListener('click', (e) => {
		e.stopPropagation();
		fileInput.value = '';
		filePreview.classList.add('hidden');
	});

	// Drag and Drop
	dropzone.addEventListener('dragover', (e) => {
		e.preventDefault();
		dropzone.classList.add('bg-surface-container');
	});
	dropzone.addEventListener('dragleave', (e) => {
		e.preventDefault();
		dropzone.classList.remove('bg-surface-container');
	});
	dropzone.addEventListener('drop', (e) => {
		e.preventDefault();
		dropzone.classList.remove('bg-surface-container');
		if (e.dataTransfer.files && e.dataTransfer.files[0]) {
			fileInput.files = e.dataTransfer.files;
			const event = new Event('change');
			fileInput.dispatchEvent(event);
		}
	});

	// Form Submission with Validation
	form.addEventListener('submit', (e) => {
		e.preventDefault();
		errorDiv.classList.add('hidden');

		const name = document.getElementById('quick-name').value.trim();
		const email = document.getElementById('quick-email').value.trim();
		const phone = document.getElementById('quick-phone').value.trim();
		const vessel = document.getElementById('quick-vessel').value.trim();

		if (!name || !email || !phone || !vessel) {
			errorDiv.textContent = "Please fill in all required fields marked with *.";
			errorDiv.classList.remove('hidden');
			return;
		}

		if (!email.includes('@') || !email.includes('.')) {
			errorDiv.textContent = "Please enter a valid work email address.";
			errorDiv.classList.remove('hidden');
			return;
		}

		submitBtn.disabled = true;
		submitBtn.innerHTML = '<span>Transmitting Request & File...</span>';

		const formData = new FormData(form);
		formData.append('action', 'bayrak_submit_quotation');

		fetch("<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>", {
			method: 'POST',
			body: formData
		})
		.then(res => res.json())
		.then(data => {
			if (data.success) {
				document.getElementById('quick-ref-id').textContent = data.data.ref_id;
				document.getElementById('quick-success-modal').classList.remove('hidden');
				form.reset();
				filePreview.classList.add('hidden');
			} else {
				errorDiv.textContent = data.data ? data.data.message : 'Submission failed. Please try again.';
				errorDiv.classList.remove('hidden');
			}
			submitBtn.disabled = false;
			submitBtn.innerHTML = '<span>Submit Quotation Request</span>';
		})
		.catch(err => {
			console.error(err);
			errorDiv.textContent = "Network error. Please check your connection and try again.";
			errorDiv.classList.remove('hidden');
			submitBtn.disabled = false;
			submitBtn.innerHTML = '<span>Submit Quotation Request</span>';
		});
	});
});
</script>

<!-- Ports Coverage Section -->
<main class="w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap flex flex-col lg:flex-row gap-gutter" id="ports">
<!-- Sidebar: Port List -->
<aside class="w-full lg:w-1/3 flex flex-col gap-base bg-surface-container rounded-xl p-gutter border border-outline-variant shadow-sm h-[896px] overflow-y-auto">
<div class="mb-4">
<h2 class="font-headline-lg text-headline-lg text-primary mb-2"><?php echo esc_html( bayrak_t( 'ports_title', 'Egyptian Port Operations' ) ); ?></h2>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'ports_sub', '24/7 delivery at berth and anchorage across all key Egyptian gateways and Suez Canal transit points.' ) ); ?></p>
</div>
<ul class="flex flex-col gap-2">
<!-- 01. Port Said -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="port-said">
	<h3 class="font-headline-md text-headline-md text-primary"><?php echo esc_html( bayrak_t( 'port_said', 'Port Said (East & West)' ) ); ?></h3>
</li>
<!-- 02. Suez Canal Zone -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="suez">
	<h3 class="font-headline-md text-headline-md text-primary"><?php echo esc_html( bayrak_t( 'port_suez', 'Suez Canal Zone' ) ); ?></h3>
</li>
<!-- 03. Damietta Port -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="damietta">
	<h3 class="font-headline-md text-headline-md text-primary"><?php echo esc_html( bayrak_t( 'port_damietta', 'Damietta Port' ) ); ?></h3>
</li>
<!-- 04. Alexandria Port -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="alexandria">
	<h3 class="font-headline-md text-headline-md text-primary"><?php echo esc_html( bayrak_t( 'port_alexandria', 'Alexandria Port' ) ); ?></h3>
</li>
<!-- 05. Ain Sokhna -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="ain-sokhna">
	<h3 class="font-headline-md text-headline-md text-primary"><?php echo esc_html( bayrak_t( 'port_sokhna', 'Ain Sokhna & Adabeyah' ) ); ?></h3>
</li>
<!-- 06. Safaga Port -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="safaga">
	<h3 class="font-headline-md text-headline-md text-primary"><?php echo esc_html( bayrak_t( 'port_redsea', 'Safaga & Red Sea Ports' ) ); ?></h3>
</li>
<!-- 10. Abu Qir -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="abu-qir">
	<h3 class="font-headline-md text-headline-md text-primary">Abu Qir</h3>
</li>
<!-- 11. Sidi Kerir -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="sidi-kerir">
	<h3 class="font-headline-md text-headline-md text-primary">Sidi Kerir</h3>
</li>
<!-- 12. Gargoub Port -->
<li class="port-item group cursor-pointer p-4 bg-surface rounded-lg border border-outline-variant hover:border-primary hover:bg-surface-container-high transition-colors" data-port="gargoub">
	<h3 class="font-headline-md text-headline-md text-primary">Gargoub Port</h3>
</li>
</ul>
</aside>

<!-- Map Canvas Area -->
<section class="w-full lg:w-2/3 h-[896px] rounded-xl relative overflow-hidden">
    <div class="absolute inset-0 p-6 lg:p-10">
        <div class="relative w-full h-full rounded-xl overflow-hidden">
            <!-- Egypt Map -->
            <img src="/wp-content/uploads/2026/08/eg.svg" alt="Egypt Map" class="absolute inset-0 w-full h-full object-contain">

            <!-- Interactive Map Layer -->
            <div class="absolute inset-0 map-container">
                <!-- Alexandria -->
                <div class="absolute left-[28%] top-[18%] group cursor-pointer map-pin" data-target="alexandria">
                    <span class="absolute -inset-2 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-4 h-4 rounded-full bg-secondary-container border-2 border-white shadow-[0_0_10px_rgba(229,169,60,0.85)]"></span>
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface text-on-surface px-3 py-1 rounded-md shadow-md border border-outline-variant opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none z-20">
                        <span class="font-button-text text-button-text">Alexandria</span>
                    </div>
                </div>

                <!-- Dekhila -->
                <div class="absolute left-[26%] top-[19%] group cursor-pointer map-pin" data-target="dekhila">
                    <span class="absolute -inset-1.5 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-3 h-3 rounded-full bg-secondary-container border border-white shadow-[0_0_8px_rgba(229,169,60,0.8)]"></span>
                </div>

                <!-- Sidi Kerir -->
                <div class="absolute left-[24%] top-[20%] group cursor-pointer map-pin" data-target="sidi-kerir">
                    <span class="absolute -inset-1.5 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-3 h-3 rounded-full bg-secondary-container border border-white shadow-[0_0_8px_rgba(229,169,60,0.8)]"></span>
                </div>

                <!-- Abu Qir -->
                <div class="absolute left-[30%] top-[17%] group cursor-pointer map-pin" data-target="abu-qir">
                    <span class="absolute -inset-1.5 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-3 h-3 rounded-full bg-secondary-container border border-white shadow-[0_0_8px_rgba(229,169,60,0.8)]"></span>
                </div>

                <!-- Damietta -->
                <div class="absolute left-[40%] top-[15%] group cursor-pointer map-pin" data-target="damietta">
                    <span class="absolute -inset-2 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-4 h-4 rounded-full bg-secondary-container border-2 border-white shadow-[0_0_10px_rgba(229,169,60,0.85)]"></span>
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface text-on-surface px-3 py-1 rounded-md shadow-md border border-outline-variant opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none z-20">
                        <span class="font-button-text text-button-text">Damietta</span>
                    </div>
                </div>

                <!-- Port Said -->
                <div class="absolute left-[52%] top-[18%] group cursor-pointer map-pin" data-target="port-said">
                    <span class="absolute -inset-2 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-4 h-4 rounded-full bg-secondary-container border-2 border-white shadow-[0_0_10px_rgba(229,169,60,0.85)]"></span>
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface text-on-surface px-3 py-1 rounded-md shadow-md border border-outline-variant opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none z-20">
                        <span class="font-button-text text-button-text">Port Said</span>
                    </div>
                </div>

                <!-- Arish -->
                <div class="absolute left-[65%] top-[16%] group cursor-pointer map-pin" data-target="arish">
                    <span class="absolute -inset-1.5 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-3 h-3 rounded-full bg-secondary-container border border-white shadow-[0_0_8px_rgba(229,169,60,0.8)]"></span>
                </div>

                <!-- Cairo -->
                <div class="absolute left-[42%] top-[29%] group cursor-pointer map-pin" data-target="cairo">
                    <span class="absolute -inset-2 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-4 h-4 rounded-full bg-secondary-container border-2 border-white shadow-[0_0_12px_rgba(229,169,60,0.9)]"></span>
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface text-on-surface px-3 py-1 rounded-md shadow-md border border-outline-variant opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none z-20">
                        <span class="font-button-text text-button-text">Cairo</span>
                    </div>
                </div>

                <!-- Suez -->
                <div class="absolute left-[53%] top-[35%] group cursor-pointer map-pin" data-target="suez">
                    <span class="absolute -inset-2 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-4 h-4 rounded-full bg-secondary-container border-2 border-white shadow-[0_0_10px_rgba(229,169,60,0.85)]"></span>
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface text-on-surface px-3 py-1 rounded-md shadow-md border border-outline-variant opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none z-20">
                        <span class="font-button-text text-button-text">Suez Canal</span>
                    </div>
                </div>

                <!-- Adabeyah -->
                <div class="absolute left-[52%] top-[38%] group cursor-pointer map-pin" data-target="adabeyah">
                    <span class="absolute -inset-1.5 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-3 h-3 rounded-full bg-secondary-container border border-white shadow-[0_0_8px_rgba(229,169,60,0.8)]"></span>
                </div>

                <!-- Ain Sokhna -->
                <div class="absolute left-[54%] top-[45%] group cursor-pointer map-pin" data-target="ain-sokhna">
                    <span class="absolute -inset-2 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-4 h-4 rounded-full bg-secondary-container border-2 border-white shadow-[0_0_10px_rgba(229,169,60,0.85)]"></span>
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface text-on-surface px-3 py-1 rounded-md shadow-md border border-outline-variant opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none z-20">
                        <span class="font-button-text text-button-text">Ain Sokhna</span>
                    </div>
                </div>

                <!-- Safaga -->
                <div class="absolute left-[62%] top-[70%] group cursor-pointer map-pin" data-target="safaga">
                    <span class="absolute -inset-2 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-4 h-4 rounded-full bg-secondary-container border-2 border-white shadow-[0_0_10px_rgba(229,169,60,0.85)]"></span>
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-surface text-on-surface px-3 py-1 rounded-md shadow-md border border-outline-variant opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none z-20">
                        <span class="font-button-text text-button-text">Safaga</span>
                    </div>
                </div>

                <!-- Gargoub -->
                <div class="absolute left-[10%] top-[24%] group cursor-pointer map-pin" data-target="gargoub">
                    <span class="absolute -inset-1.5 rounded-full border-2 border-secondary-container pulse-ring"></span>
                    <span class="relative z-10 block w-3 h-3 rounded-full bg-secondary-container border border-white shadow-[0_0_8px_rgba(229,169,60,0.8)]"></span>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const portListItems = document.querySelectorAll('.port-item');
        const mapPins = document.querySelectorAll('.map-pin');

        portListItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                const targetPort = item.dataset.port;
                highlightPin(targetPort);
            });
            item.addEventListener('mouseleave', resetPins);
        });

        mapPins.forEach(pin => {
            pin.addEventListener('mouseenter', () => {
                const targetPort = pin.dataset.target;
                highlightListItem(targetPort);
            });
            pin.addEventListener('mouseleave', resetListItems);
        });

        function highlightPin(portId) {
            mapPins.forEach(pin => {
                if (pin.dataset.target === portId) {
                    const innerCircle = pin.querySelector('.bg-secondary-container');
                    if (innerCircle) {
                        innerCircle.classList.add('scale-150', 'bg-white');
                        innerCircle.classList.remove('bg-secondary-container');
                    }
                } else {
                    pin.style.opacity = '0.5';
                }
            });
        }

        function resetPins() {
            mapPins.forEach(pin => {
                pin.style.opacity = '1';
                const innerCircle = pin.querySelector('div:first-child');
                if (innerCircle) {
                    innerCircle.classList.remove('scale-150', 'bg-white');
                    innerCircle.classList.add('bg-secondary-container');
                }
            });
        }

        function highlightListItem(portId) {
            portListItems.forEach(item => {
                if (item.dataset.port === portId) {
                    item.classList.add('border-primary', 'bg-surface-container-high');
                } else {
                    item.style.opacity = '0.5';
                }
            });
        }

        function resetListItems() {
            portListItems.forEach(item => {
                item.style.opacity = '1';
                item.classList.remove('border-primary', 'bg-surface-container-high');
            });
        }
    });
</script>

<?php get_footer(); ?>