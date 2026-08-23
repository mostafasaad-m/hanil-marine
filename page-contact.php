<?php
/**
 * Template Name: Contact Us Page
 *
 * @package Bayrak
 */

get_header();
?>


<!-- Main Content -->
<main class="flex-grow pt-32 pb-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
<!-- Contact Hero -->
<section class="mb-16">
<h1 class="font-headline-xl text-headline-xl text-primary mb-4 md:hidden font-headline-lg-mobile text-headline-lg-mobile">Get in Touch</h1>
<h1 class="hidden md:block font-headline-xl text-headline-xl text-primary mb-4">Get in Touch</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">24/7 Maritime Support Across All Egyptian Ports. We are ready to assist you with reliable supply and technical support.</p>
</section>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Form Area -->
<div class="lg:col-span-7 bg-tertiary p-8 rounded-lg">
<h2 class="font-headline-md text-headline-md text-on-tertiary mb-6 border-b border-on-tertiary-container pb-4">Inquiry Form</h2>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="block font-button-text text-button-text text-on-tertiary mb-2">Name</label>
<input class="w-full bg-surface text-on-surface border border-outline rounded p-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" required="" type="text"/>
</div>
<div>
<label class="block font-button-text text-button-text text-on-tertiary mb-2">Company</label>
<input class="w-full bg-surface text-on-surface border border-outline rounded p-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" required="" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="block font-button-text text-button-text text-on-tertiary mb-2">Email</label>
<input class="w-full bg-surface text-on-surface border border-outline rounded p-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" required="" type="email"/>
</div>
<div>
<label class="block font-button-text text-button-text text-on-tertiary mb-2">Subject</label>
<select class="w-full bg-surface text-on-surface border border-outline rounded p-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
<option>General Inquiry</option>
<option>Quotation Request</option>
<option>Technical Support</option>
</select>
</div>
</div>
<div>
<label class="block font-button-text text-button-text text-on-tertiary mb-2">Message</label>
<textarea class="w-full bg-surface text-on-surface border border-outline rounded p-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" required="" rows="4"></textarea>
</div>
<button class="w-full bg-secondary text-on-secondary py-4 rounded font-button-text text-button-text hover:bg-secondary-container transition-colors shadow-[0_4px_12px_rgba(166,59,0,0.2)]" type="submit">
                        Submit Request
                    </button>
</form>
</div>
<!-- Details Sidebar -->
<div class="lg:col-span-5 space-y-gutter">
<!-- Emergency Support Card -->
<div class="bg-error-container p-6 rounded border border-error border-opacity-20 flex items-start gap-4">
<span class="material-symbols-outlined text-error text-3xl" data-icon="support_agent">support_agent</span>
<div>
<h3 class="font-headline-md text-headline-md text-on-error-container mb-2">Urgent Support</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">24/7 immediate assistance for vessels arriving at Egyptian ports.</p>
<a class="inline-flex items-center gap-2 font-button-text text-button-text text-error hover:text-on-error-container" href="tel:+201234567890">
<span class="material-symbols-outlined text-sm" data-icon="call">call</span>
                            +20 12 3456 7890
                        </a>
</div>
</div>
<!-- Office Details -->
<div class="bg-surface p-6 rounded border border-outline-variant">
<h3 class="font-headline-md text-headline-md text-primary mb-6">Headquarters</h3>
<ul class="space-y-4">
<li class="flex items-start gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-primary mt-1" data-icon="location_on">location_on</span>
<span class="font-body-md text-body-md">123 Maritime Boulevard,<br/>Alexandria Port Area,<br/>Egypt</span>
</li>
<li class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-primary" data-icon="mail">mail</span>
<span class="font-body-md text-body-md">ops@hanilmarine.com</span>
</li>
<li class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-primary" data-icon="phone">phone</span>
<span class="font-body-md text-body-md">+20 3 456 7890</span>
</li>
</ul>
</div>
<!-- Map Placeholder -->
<div class="h-48 bg-surface-container-high rounded border border-outline-variant overflow-hidden relative group">
<img class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" data-alt="A highly detailed, professional map interface showing the Mediterranean coastline of Egypt, specifically highlighting the ports of Alexandria and Port Said. The map style is modern, industrial, and clean, using a light mode color palette of whites, cool grays, and deep navy blues. The aesthetic is purely functional and navigational, conveying logistical precision without any unnecessary decorative elements." data-location="Alexandria, Egypt" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAO4CDKt57V-9diGRwuU31b-kQvusEgEN3LlLy74yqqp8iq2hAf1AoY1tvUOnm0GL2Op7-uGQHWGpsg36rYX9oYHU_RytAonUY0ZM2tOtRxavrH_VvIukTa12Ya3iFYUsHOerqLsZdu3qXxhqBSKThSOfsyvsMn3-cBrvogBMjUyRn2Z3L6tYfCZjNT6tFfEh9ShjB2xfK-Ak87T2IDxiTwxK2elE3uVzSsiY4-78NzHzdCaqT3Iset5g"/>
<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<span class="font-button-text text-button-text text-primary bg-surface/90 px-4 py-2 rounded">View Port Locations</span>
</div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>