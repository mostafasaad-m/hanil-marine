<?php
/**
 * Template Name: About Us Page
 * Description: About Hanil Marine - Licensed Ship Chandler & Marine Supplier in Egypt.
 *
 * @package Bayrak
 */

get_header();
?>

<main>
<!-- Hero Section -->
<section class="relative w-full h-[520px] min-h-[450px] flex items-center justify-start overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center w-full h-full z-0" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaQZDhso67Hm3jpGTNRV5Y0Y4kZUuVI77R6T1qB51b65XcHgWpxg95aENbe4I7ideQKxpoF0__HE0o4jBEzxOoYMpffMsW9zpEqjTVUKSQBiw5Y4TjGkLdn-qEynBg69c8K4cxv_MyLHsCRg-I1h2gt2rmMsUJ8aOaks11eX_jpD1MkbSza1zNvT2zYHpm-TCBPcvYrESTks2vAKUpOhYUa33TBPr03z6FQikP3OnKCEj192hjGZk2FA')"></div>
<div class="absolute inset-0 bg-primary/80 z-10"></div>
<div class="relative z-20 w-full px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-left text-on-primary">
<span class="inline-block bg-secondary-container text-on-secondary px-3 py-1 rounded font-label-caps text-xs uppercase tracking-wider mb-4"><?php echo esc_html( bayrak_t( 'about_hero_badge', 'About Hanil Marine' ) ); ?></span>
<h1 class="font-headline-xl text-headline-xl md:text-[52px] text-on-primary mb-6 max-w-3xl drop-shadow-lg"><?php echo esc_html( bayrak_t( 'about_hero_title', 'Licensed Ship Chandlers & Marine Logistics in Egypt' ) ); ?></h1>
<p class="font-body-lg text-body-lg max-w-2xl text-primary-fixed"><?php echo esc_html( bayrak_t( 'about_hero_sub', 'Direct marine supply, bonded stores, deck & engine spares, and port clearance across Port Said, Suez Canal, Alexandria, Damietta, and Ain Sokhna.' ) ); ?></p>
</div>
</section>

<!-- Our Operations Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface">
<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
<div class="order-2 md:order-1">
<img class="w-full h-auto object-cover rounded-lg border border-outline-variant shadow-sm" alt="Hanil Marine Port Operations" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCB7yOqf4BQEVeMuQ5M34nSXYEHt5iDeGd3PhNJRvY01f6LOjTa5-EFp2GLG6rXiuwR1Ji7u-xTaQMVBq1mzQX87IRMAILdA2N77xhuCgZphnuGbsvyYaIjo9z27Xv6yuTrtZsbfX251vkKdEtNfE8_Wx96yyo3QeRM73nk9X6Y2OMa7Pmyvf6CRgAAgYrEdqCLpyx693JNejEHz7U1LxrQwAz8U1w_2KRBo0Pp0GriWSkOGKqkACzdiw"/>
</div>
<div class="order-1 md:order-2">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-6"><?php echo esc_html( bayrak_t( 'about_ops_title', 'Built for Marine Dispatch & Fleet Operations' ) ); ?></h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-4"><?php echo esc_html( bayrak_t( 'about_ops_desc1', 'Hanil Marine (Al-Bayrak) serves shipowners, managers, charterers, and technical superintendents navigating Egyptian ports and the Suez Canal. We know that vessel turnaround time is critical, and any delay costs money.' ) ); ?></p>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'about_ops_desc2', 'Our team operates dedicated supply launch boats for anchorage delivery, refrigerated transport for fresh provisions, and bonded warehouses stocked with certified deck, engine, and cabin stores.' ) ); ?></p>
</div>
</div>
</section>

<!-- Core Operational Standards Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low border-y border-outline-variant">
<div class="max-w-container-max mx-auto text-center mb-12">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary"><?php echo esc_html( bayrak_t( 'about_cap_title', 'Operational Capabilities' ) ); ?></h2>
<div class="w-16 h-1 bg-secondary mx-auto mt-4"></div>
</div>
<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Capability 1 -->
<div class="bg-surface p-8 border border-outline-variant rounded-lg hover:border-primary transition-all shadow-sm flex flex-col items-start">
<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'about_cap1_title', '24/7 Berth & Anchorage Delivery' ) ); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'about_cap1_desc', 'Direct supply launch service for ships waiting at Port Said and Suez anchorages, plus direct truck delivery alongside all Egyptian berths.' ) ); ?></p>
</div>
<!-- Capability 2 -->
<div class="bg-surface p-8 border border-outline-variant rounded-lg hover:border-primary transition-all shadow-sm flex flex-col items-start">
<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'about_cap2_title', 'HACCP & IMPA/ISSA Compliance' ) ); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'about_cap2_desc', 'Refrigerated food storage conforming to ISO 22000 & HACCP, plus IMPA & ISSA coded technical spares sourcing.' ) ); ?></p>
</div>
<!-- Capability 3 -->
<div class="bg-surface p-8 border border-outline-variant rounded-lg hover:border-primary transition-all shadow-sm flex flex-col items-start">
<h3 class="font-headline-md text-headline-md text-primary mb-3"><?php echo esc_html( bayrak_t( 'about_cap3_title', 'Rapid Quotation & Clear Invoicing' ) ); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html( bayrak_t( 'about_cap3_desc', 'Itemized quotations delivered within 2 hours of requisition receipt with clear pricing and zero hidden port fees.' ) ); ?></p>
</div>
</div>
</section>

<!-- Call to Action Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-primary text-on-primary">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
<div class="md:max-w-xl text-center md:text-left">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-primary mb-3">Require Marine Supplies or Canal Transit Support?</h2>
<p class="font-body-lg text-body-lg text-primary-fixed">Contact our 24/7 port operations desk for instant assistance and itemized quotations.</p>
</div>
<div class="flex flex-wrap gap-4">
<a href="<?php echo esc_url( home_url( '/step-1' ) ); ?>" class="bg-secondary-container text-on-secondary font-button-text text-button-text px-8 py-4 rounded hover:bg-secondary transition-colors uppercase tracking-wider shadow-md">
    <?php echo esc_html( bayrak_t( 'get_quotation', 'Get a Quotation' ) ); ?>
</a>
<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-transparent border border-outline-variant text-on-primary font-button-text text-button-text px-8 py-4 rounded hover:bg-primary-container transition-colors uppercase tracking-wider">
    <?php echo esc_html( bayrak_t( 'contact', 'Contact Operations Desk' ) ); ?>
</a>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>