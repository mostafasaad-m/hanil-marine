<?php
/**
 * Template Name: Contact Us Page
 * Description: Contact Operations & Port Dispatch Desk - Hanil Marine.
 *
 * @package Bayrak
 */

get_header();
?>

<!-- Main Content -->
<main class="flex-grow pt-24 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
<!-- Contact Hero -->
<section class="mb-12">
	<span class="bg-surface-container text-primary-container px-3 py-1 rounded-full font-label-caps text-xs uppercase tracking-wider mb-3 inline-block">24/7 Dispatch Desk</span>
	<h1 class="font-headline-xl text-headline-xl text-primary mb-4">Contact Port Operations & Dispatch</h1>
	<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">24/7 Marine Supply & Logistics Support Across All Egyptian Ports. Contact our dispatchers directly for urgent vessel requirements.</p>
</section>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
	<!-- Form Area -->
	<div class="lg:col-span-7 bg-primary text-on-primary p-8 rounded-xl border border-outline-variant shadow-sm">
		<h2 class="font-headline-md text-headline-md text-on-primary mb-6 border-b border-primary-container pb-4">General Inquiry & Operations Desk</h2>
		<form class="space-y-6" action="#" method="POST" onsubmit="event.preventDefault(); alert('Message received. Our dispatch team will contact you shortly.');">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
				<div>
					<label class="block font-button-text text-button-text text-on-primary mb-2">Your Name *</label>
					<input class="w-full bg-surface text-on-surface border border-outline-variant rounded p-3 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none transition-all" required type="text" placeholder="Captain / Superintendent Name"/>
				</div>
				<div>
					<label class="block font-button-text text-button-text text-on-primary mb-2">Company Name *</label>
					<input class="w-full bg-surface text-on-surface border border-outline-variant rounded p-3 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none transition-all" required type="text" placeholder="Shipping / Management Co."/>
				</div>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
				<div>
					<label class="block font-button-text text-button-text text-on-primary mb-2">Email Address *</label>
					<input class="w-full bg-surface text-on-surface border border-outline-variant rounded p-3 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none transition-all" required type="email" placeholder="ops@company.com"/>
				</div>
				<div>
					<label class="block font-button-text text-button-text text-on-primary mb-2">Inquiry Type</label>
					<select class="w-full bg-surface text-on-surface border border-outline-variant rounded p-3 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none transition-all">
						<option>General Operational Inquiry</option>
						<option>Provisions & Bonded Stores</option>
						<option>Technical Spares & Engine Stores</option>
						<option>Suez Canal Transit Clearance</option>
					</select>
				</div>
			</div>

			<div>
				<label class="block font-button-text text-button-text text-on-primary mb-2">Message / Details *</label>
				<textarea class="w-full bg-surface text-on-surface border border-outline-variant rounded p-3 focus:border-secondary focus:ring-1 focus:ring-secondary outline-none transition-all" required rows="4" placeholder="Describe vessel schedule or general requirements..."></textarea>
			</div>

			<button class="w-full bg-secondary-container text-on-secondary py-4 rounded font-button-text text-button-text hover:bg-secondary transition-colors shadow-md" type="submit">
				Send Message to Operations
			</button>
		</form>
	</div>

	<!-- Details Sidebar -->
	<div class="lg:col-span-5 space-y-gutter">
		<!-- Fast Quotation Card -->
		<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant flex flex-col justify-between">
			<div class="flex items-start gap-4 mb-4">
				<span class="material-symbols-outlined text-secondary text-4xl">inventory_2</span>
				<div>
					<h3 class="font-headline-md text-headline-md text-primary mb-1">Need an Itemized Quotation?</h3>
					<p class="font-body-md text-body-md text-on-surface-variant">Use our step-by-step quotation builder to specify vessel details and upload requisition spreadsheets.</p>
				</div>
			</div>
			<a class="inline-flex items-center justify-center gap-2 bg-secondary-container text-on-secondary font-button-text text-button-text px-6 py-3.5 rounded hover:bg-secondary transition-colors shadow-sm" href="<?php echo esc_url( home_url( '/step-1' ) ); ?>">
				<span>Launch Quotation Form</span>
				<span class="material-symbols-outlined text-sm">arrow_forward</span>
			</a>
		</div>

		<!-- Office Details -->
		<div class="bg-surface p-6 rounded-xl border border-outline-variant">
			<h3 class="font-headline-md text-headline-md text-primary mb-6">Operations Headquarters</h3>
			<ul class="space-y-4">
				<li class="flex items-start gap-3 text-on-surface-variant">
					<span class="material-symbols-outlined text-primary mt-1">location_on</span>
					<span class="font-body-md text-body-md">Port Said & Alexandria Port Operations Areas,<br/>Suez Canal Maritime Gateway, Egypt</span>
				</li>
				<li class="flex items-center gap-3 text-on-surface-variant">
					<span class="material-symbols-outlined text-primary">mail</span>
					<span class="font-body-md text-body-md">ops@hanilmarine.com</span>
				</li>
				<li class="flex items-center gap-3 text-on-surface-variant">
					<span class="material-symbols-outlined text-primary">phone</span>
					<span class="font-body-md text-body-md">24/7 Dispatch Hotline Available</span>
				</li>
			</ul>
		</div>

		<!-- Map Banner -->
		<div class="h-48 bg-surface-container-high rounded-xl border border-outline-variant overflow-hidden relative group">
			<img class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" alt="Egyptian Maritime Ports Map" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAO4CDKt57V-9diGRwuU31b-kQvusEgEN3LlLy74yqqp8iq2hAf1AoY1tvUOnm0GL2Op7-uGQHWGpsg36rYX9oYHU_RytAonUY0ZM2tOtRxavrH_VvIukTa12Ya3iFYUsHOerqLsZdu3qXxhqBSKThSOfsyvsMn3-cBrvogBMjUyRn2Z3L6tYfCZjNT6tFfEh9ShjB2xfK-Ak87T2IDxiTwxK2elE3uVzSsiY4-78NzHzdCaqT3Iset5g"/>
			<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
				<span class="font-button-text text-button-text text-primary bg-surface/90 px-4 py-2 rounded shadow">Serving All Egyptian Ports</span>
			</div>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>