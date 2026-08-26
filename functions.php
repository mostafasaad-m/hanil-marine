<?php
/**
 * Bayrak - Standalone WordPress Theme Functions
 * Author: VitalDC (https://vitaldc.com)
 * Text Domain: bayrak
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function bayrak_theme_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	register_nav_menus(
		array(
			'primary' => __( 'Primary Mega Menu', 'bayrak' ),
			'footer'  => __( 'Footer Navigation', 'bayrak' ),
		)
	);
}
add_action( 'after_setup_theme', 'bayrak_theme_setup' );

/**
 * Enqueue Theme Stylesheet
 */
function bayrak_enqueue_scripts() {
	wp_enqueue_style( 'bayrak-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'bayrak_enqueue_scripts' );

/**
 * Dynamic Multi-Lingual Engine (EN, AR, TR) & RTL Handler
 */
function bayrak_init_language() {
	if ( isset( $_GET['lang'] ) && in_array( strtolower( $_GET['lang'] ), array( 'en', 'ar', 'tr' ), true ) ) {
		$lang = strtolower( $_GET['lang'] );
		setcookie( 'bayrak_lang', $lang, time() + ( 365 * 24 * 60 * 60 ), '/' );
		$_COOKIE['bayrak_lang'] = $lang;
	}
}
add_action( 'init', 'bayrak_init_language' );

function bayrak_get_current_lang() {
	if ( isset( $_GET['lang'] ) && in_array( strtolower( $_GET['lang'] ), array( 'en', 'ar', 'tr' ), true ) ) {
		return strtolower( $_GET['lang'] );
	}
	if ( isset( $_COOKIE['bayrak_lang'] ) && in_array( strtolower( $_COOKIE['bayrak_lang'] ), array( 'en', 'ar', 'tr' ), true ) ) {
		return strtolower( $_COOKIE['bayrak_lang'] );
	}
	return 'en';
}

function bayrak_is_rtl() {
	return bayrak_get_current_lang() === 'ar';
}

function bayrak_get_translations() {
	static $dict = null;
	if ( null !== $dict ) {
		return $dict;
	}

	$dict = array(
		'en' => array(
			'home' => 'Home',
			'services' => 'Services',
			'about_us' => 'About Us',
			'contact' => 'Contact',
			'get_quotation' => 'Get Quotation',
			'nav_provisions' => 'Provisions Supply',
			'nav_bonded' => 'Bonded Stores',
			'nav_technical' => 'Technical Spares',
			'nav_logistics' => 'Port Logistics',
			'nav_safety' => 'Safety & SOLAS',
			'nav_repair' => 'Marine Repair Services',
			'nav_crew' => 'Crew Change Logistics',
			'nav_bunker' => 'Bunker & Fuel Trading',
			'hero_badge' => 'Licensed Ship Chandler - Egypt',
			'hero_title' => 'Complete Ship Supplies & Port Services in Egypt',
			'hero_subtitle' => 'Fresh provisions, bonded stores, deck & engine spares, and rapid launch delivery at Port Said, Suez Canal, Alexandria, Damietta, and Ain Sokhna. 24/7 operational dispatch.',
			'hero_cta' => 'Get Quotation Now',
			'sec_services_badge' => '24/7 Port Delivery',
			'sec_services_title' => 'Marine Supplies & Port Agency Services',
			'view_all_services' => 'View All Services',
			'card_provisions_title' => 'Provisions & Bonded Stores',
			'card_provisions_desc' => 'Fresh, frozen, and dry provisions delivered in refrigerated reefers under HACCP standards. Complete stock of duty-free bonded goods and cabin supplies.',
			'card_logistics_title' => 'Port Logistics & Transit Clearance',
			'card_logistics_desc' => 'Customs clearance, bonded warehousing, launch boat delivery at anchorage, and zero-delay logistics for Suez Canal transit and port calls.',
			'card_technical_title' => 'Technical Spares & Engine Stores',
			'card_technical_desc' => 'IMPA & ISSA coded engine, deck, and electrical spare parts, SOLAS safety gear, and qualified marine technicians for urgent port repairs.',
			'banner_quote_title' => 'Need Immediate Port Delivery or Transit Supplies?',
			'banner_quote_desc' => 'Submit your requisition list (PDF, XLSX) for an instant quotation from our dispatch desk.',
			'about_sec_title' => 'Established Ship Supplies & Port Operations in Egypt',
			'about_sec_desc' => 'Hanil Marine (Al-Bayrak) provides direct ship chandlery, bonded logistics, and technical supplies across all Egyptian ports. Operating temperature-controlled warehouses and dedicated supply launches to ensure zero vessel delay.',
			'cert_title' => 'Certified Quality Assurance',
			'cert_desc' => 'HACCP & ISO 22000 certified storage with strict IMPA/ISSA sourcing standards.',
			'quick_quote_title' => 'Direct Quotation Request',
			'quick_quote_desc' => 'Submit your vessel schedule and requisition list. Our port dispatchers respond within 2 hours with itemized pricing.',
			'ports_title' => 'Egyptian Port Operations',
			'ports_sub' => '24/7 delivery at berth and anchorage across all key Egyptian gateways and Suez Canal transit points.',
			'step_1_title' => 'Select Primary Service Category',
			'step_1_sub' => 'Choose the primary service your vessel requires. Selecting a service will automatically advance to Step 2.',
			'step_1_badge' => 'Step 1 of 4',
			'step_1_name' => 'Service Type',
			'step_2_name' => 'Contact Details',
			'step_3_name' => 'Vessel Logistics',
			'step_4_name' => 'Review & Submit',
			'step_2_title' => 'Personal & Company Information',
			'step_2_sub' => 'Please provide your contact details so our maritime coordinators can deliver your quotation.',
			'full_name' => 'Full Name',
			'email_address' => 'Work Email Address',
			'company_name' => 'Shipping / Fleet Company',
			'job_title' => 'Job Title / Designation',
			'phone_number' => 'Phone / WhatsApp Number',
			'step_3_title' => 'Vessel Schedule & Specifications',
			'step_3_sub' => 'Provide your vessel details and upload any requisition spreadsheets or specification documents.',
			'vessel_name' => 'Vessel Name',
			'imo_number' => 'IMO Number',
			'port_of_call' => 'Port of Call (Egypt)',
			'eta' => 'Estimated Time of Arrival (ETA)',
			'etd' => 'Estimated Time of Departure (ETD)',
			'notes' => 'Additional Requirements / Description',
			'upload_title' => 'Upload Quotation Requisition File (PDF, XLSX, DOCX, Images)',
			'upload_sub' => 'Attach any requisitions, store lists, spreadsheets, or technical drawings for instant processing by our port dispatcher.',
			'click_drag' => 'Click or drag & drop file here',
			'file_formats' => 'Supports PDF, XLSX, DOCX, PNG, JPG up to 15MB',
			'step_4_title' => 'Review & Submit Request',
			'step_4_sub' => 'Please review your quotation details below before submitting to our 24/7 port operations team.',
			'terms_agree' => 'I confirm that all details provided are accurate and I authorize Hanil Marine to process this quotation request.',
			'submit_quote' => 'Submit Quotation Request',
			'edit_details' => 'Edit Details',
			'back' => 'Back',
			'next' => 'Next',
			'cancel' => 'Cancel',
			'success_title' => 'Request Submitted Successfully!',
			'success_msg' => 'Your quotation request and attachments have been logged in WordPress. Our dispatch team will respond within 2 hours.',
			'ref_id_label' => 'Your Unique Reference ID',
			'return_home' => 'Return to Homepage',
			'select_category' => 'Select Category',
			'prov_hero_badge' => 'Premier Provisions Supply',
			'prov_hero_title' => 'Complete Ship Provisions Supply in Egypt',
			'prov_hero_sub' => 'Ensuring every galley across Egyptian ports is stocked with fresh, frozen, and dry provisions to support your crew\'s health and well-being.',
			'prov_sec_title' => 'Comprehensive Provisioning Solutions',
			'prov_sec_sub' => 'We select every product with thought and precision, adhering to current quality procedures to safeguard the health and safety of your crew.',
			'prov_fresh_title' => 'Fresh Provisions',
			'prov_fresh_desc' => 'Daily supply of fresh fruit, vegetables, dairy, and bakery products sourced from local Egyptian markets. Temperature-controlled delivery ensures peak freshness.',
			'prov_frozen_title' => 'Frozen Provisions',
			'prov_frozen_desc' => 'High-quality meat, poultry, and seafood kept under strict temperature control for safety and longevity. Consistency in food safety guaranteed.',
			'prov_dry_title' => 'Dry Provisions',
			'prov_dry_desc' => 'Wide range of grains, pasta, canned goods, and spices sourced for lasting quality from audited suppliers. Securely packaged for maritime transport.',
			'prov_standards_title' => 'Compliant to Industry Standards',
			'prov_standards_desc' => 'Hanil Marine\'s warehouses comply with global industrial standards and the requirements set by local Egyptian authorities, ensuring strict handling and control of food safety, freshness, and quality.',
			'prov_cta_title' => 'Streamline Your Provisioning',
			'prov_cta_desc' => 'Experience seamless ordering, transparent pricing, and guaranteed delivery schedules across all major Egyptian ports.',
			'about_hero_badge' => 'About Hanil Marine',
			'about_hero_title' => 'Licensed Ship Chandlers & Marine Logistics in Egypt',
			'about_hero_sub' => 'Direct marine supply, bonded stores, deck & engine spares, and port clearance across Port Said, Suez Canal, Alexandria, Damietta, and Ain Sokhna.',
			'about_ops_title' => 'Built for Marine Dispatch & Fleet Operations',
			'about_ops_desc1' => 'Hanil Marine (Al-Bayrak) serves shipowners, managers, charterers, and technical superintendents navigating Egyptian ports and the Suez Canal. We know that vessel turnaround time is critical, and any delay costs money.',
			'about_ops_desc2' => 'Our team operates dedicated supply launch boats for anchorage delivery, refrigerated transport for fresh provisions, and bonded warehouses stocked with certified deck, engine, and cabin stores.',
			'about_cap_title' => 'Operational Capabilities',
			'about_cap1_title' => '24/7 Berth & Anchorage Delivery',
			'about_cap1_desc' => 'Direct supply launch service for ships waiting at Port Said and Suez anchorages, plus direct truck delivery alongside all Egyptian berths.',
			'about_cap2_title' => 'HACCP & IMPA/ISSA Compliance',
			'about_cap2_desc' => 'Refrigerated food storage conforming to ISO 22000 & HACCP, plus IMPA & ISSA coded technical spares sourcing.',
			'about_cap3_title' => 'Rapid Quotation & Clear Invoicing',
			'about_cap3_desc' => 'Itemized quotations delivered within 2 hours of requisition receipt with clear pricing and zero hidden port fees.',
			'contact_badge' => '24/7 Dispatch Desk',
			'contact_title' => 'Contact Port Operations & Dispatch',
			'contact_sub' => '24/7 Marine Supply & Logistics Support Across All Egyptian Ports. Contact our dispatchers directly for urgent vessel requirements.',
			'contact_form_title' => 'General Inquiry & Operations Desk',
			'contact_hq' => 'Operations Headquarters',
			'port_said' => 'Port Said (East & West)',
			'port_suez' => 'Suez Canal Zone',
			'port_damietta' => 'Damietta Port',
			'port_alexandria' => 'Alexandria Port',
			'port_sokhna' => 'Ain Sokhna & Adabeyah',
			'port_redsea' => 'Safaga & Red Sea Ports',
			'tab_crew_change' => 'Crew Change & Transportation',
			'tab_provisions_badge' => '24/7 Provisions & Stores',
			'tab_provisions_title' => 'Complete Ship Supply & Bonded Stores',
			'tab_provisions_desc' => 'Fresh, frozen, and dry provisions complying with HACCP & ISO 22000 standards. Full range of bonded goods, cabin stores, and galley equipment.',
			'tab_logistics_badge' => 'Zero-Delay Logistics',
			'tab_logistics_title' => 'Port Clearance & Anchorage Launch Delivery',
			'tab_logistics_desc' => 'Express customs clearance, bonded warehousing, launch boat dispatch at Port Said and Suez anchorages, and direct truck logistics alongside all Egyptian berths.',
			'tab_crew_badge' => 'Fleet Support',
			'tab_crew_title' => 'Maritime Crew Change & Transit Handling',
			'tab_crew_desc' => '24/7 airport meet & assist, visa arrangements, hotel transfers, shore launches, and medical emergency assistance across Cairo, Alexandria, Port Said, and Suez.',
			'tab_safety_badge' => 'SOLAS Certified',
			'tab_safety_title' => 'Marine Safety Gear & Life Saving Appliances',
			'tab_safety_desc' => 'SOLAS approved life rafts, pyrotechnics, firefighting equipment, immersion suits, safety harnesses, and class-certified inspection services.',
			'tab_technical_badge' => 'IMPA / ISSA Coded',
			'tab_technical_title' => 'Deck, Engine & Electrical Technical Spares',
			'tab_technical_desc' => 'Comprehensive stock of IMPA/ISSA coded engine spares, valves, pumps, electrical components, pneumatic tools, and marine technician repairs at berth.',
			'footer_tagline' => 'Licensed Ship Chandler & Maritime Logistics Provider Operating 24/7 Across All Egyptian Ports and the Suez Canal.',
			'footer_quick_links' => 'Quick Navigation',
			'footer_ports' => 'Ports Served',
			'footer_contact_title' => '24/7 Port Dispatch',
			'footer_rights' => 'All rights reserved. Professional Ship Chandlers & Marine Logistics.',
			'repair_hero_badge' => 'Technical Operations',
			'repair_hero_title' => 'Comprehensive Marine Repairs & Technical Maintenance',
			'repair_hero_sub' => 'Delivering precision engineering and structural integrity for global maritime assets. Expert troubleshooting and restoration when operational readiness is non-negotiable.',
			'repair_hero_cta' => 'Initiate Repair Request',
			'repair_sec_title' => 'Core Repair Capabilities',
			'repair_sec_sub' => 'Our highly trained technical teams provide around-the-clock repair and maintenance services, minimizing vessel downtime through industrial reliability and logistical precision.',
			'repair_engine_title' => 'Main & Auxiliary Engine Overhaul',
			'repair_engine_desc' => 'Expert mechanical engineering and part replacement. Routine maintenance, emergency repairs, and complete overhauls to ensure optimal propulsion efficiency and reliability.',
			'repair_specs_link' => 'View Technical Specs',
			'repair_steel_title' => 'Steel & Piping Fabrication',
			'repair_steel_desc' => 'Precision welding, hull repairs, and complex piping system fabrication. Executed to class-approved standards, both in-port and riding squads at-sea.',
			'class_approved' => 'Class Approved',
			'in_port_at_sea' => 'In-Port / At-Sea',
			'repair_elec_title' => 'Electrical & Automation Repairs',
			'repair_elec_desc' => 'Rapid troubleshooting and meticulous restoration of critical ship systems. From switchboard maintenance to complex automation panel repairs, ensuring navigational safety and operational continuity.',
			'rapid_response_badge' => '24/7 Rapid Response',
			'request_technician' => 'Request Technician',
			'repair_cta_title' => 'Need Immediate Technical Assistance?',
			'repair_cta_desc' => 'Submit a detailed service request through our quotation workflow for expedited review and mobilization.',
			'access_quote_workflow' => 'Access Quotation Workflow',
			'crew_hero_badge' => 'Maritime Personnel Logistics',
			'crew_hero_title' => 'Efficient Crew Change & Maritime Personnel Logistics',
			'crew_hero_sub' => 'Ensuring safe, compliant, and seamless transitions for your most valuable asset.',
			'crew_hero_cta' => 'Initiate Crew Change',
			'crew_s1_title' => 'Personnel Transfer Services',
			'crew_s1_desc' => 'Safe and reliable transportation for crew members between port facilities and vessels, utilizing certified transport.',
			'crew_s2_title' => 'Visa & Immigration Support',
			'crew_s2_desc' => 'Expert handling of all Egyptian maritime port formalities, documentation, and expedited clearance processes.',
			'crew_s3_title' => 'Accommodation & Medical Logistics',
			'crew_s3_desc' => 'Seamless arrangements for crew welfare, including secure lodging and immediate medical facilitation if required.',
			'crew_cta_title' => 'Ready to Schedule a Crew Change?',
			'crew_cta_sub' => 'Our operations team is available 24/7 to manage your personnel logistics with industrial precision.',
			'request_quotation' => 'Request a Quotation',
			'contact_operations' => 'Contact Operations',
			'bunker_hero_badge' => 'Global Energy Logistics',
			'bunker_hero_title' => 'Strategic Bunker Trading & Precision Fueling',
			'bunker_hero_sub' => 'Ensuring operational continuity for global maritime fleets with ISO-certified marine fuels, advanced lubricants, and reliable 24/7 logistics across all Egyptian ports.',
			'bunker_hero_cta' => 'Initiate Quotation Workflow',
			'bunker_sec_title' => 'Core Trading Competencies',
			'bunker_sec_sub' => 'Our integrated bunker solutions prioritize quality assurance, precise delivery scheduling, and strict compliance with international maritime standards.',
			'iso_8217_badge' => 'ISO 8217 Certified',
			'bunker_c1_title' => 'Marine Fuel Oils (VLSFO/LSMGO)',
			'bunker_c1_desc' => 'Premium, quality-assured low-sulfur marine gasoil and very low sulfur fuel oil. Sourced from globally recognized refineries, our fuels guarantee optimal engine performance and strict adherence to current emission regulations.',
			'bunker_c1_check1' => 'Pre-delivery quality testing',
			'bunker_c1_check2' => 'Transparent density & viscosity reporting',
			'bunker_c1_link' => 'View Specifications',
			'bunker_c2_title' => 'Lubricants & Specialty Chemicals',
			'bunker_c2_desc' => 'A complete range of high-performance engine oils, hydraulic fluids, and specialty maritime chemicals designed to extend machinery lifespan under extreme conditions.',
			'main_engine_oils' => 'Main Engine Oils',
			'auxiliary_oils' => 'Auxiliary Oils',
			'bunker_c3_title' => '24/7 Bunkering Logistics',
			'bunker_c3_desc' => 'Our dedicated logistical fleet ensures reliable, precision delivery across all major Egyptian ports. We operate round-the-clock to minimize your vessel\'s downtime.',
			'ops_center_title' => 'Operations Center',
			'always_active' => 'Always Active',
			'bunker_ops_desc' => 'Direct communication line for urgent bunkering requests or ETA updates.',
			'contact_logistics' => 'Contact Logistics',
			'bunker_cta_title' => 'Streamlined Quotation Workflow',
			'bunker_cta_desc' => 'Access real-time pricing and secure your bunker allocations with our precision digital quotation system. Designed for rapid procurement and full transparency.',
			'request_bunker_quote' => 'Request Bunker Quote',
			'view_product_catalog' => 'View Product Catalog',
			'bonded_hero_badge' => 'Marine Services',
			'bonded_hero_title' => 'Global Bonded Stores & Duty-Free Supply',
			'bonded_hero_sub' => 'Providing premium duty-free goods and secure storage solutions for vessels across all Egyptian ports.',
			'bonded_sec_title' => 'Premium Bonded Supplies',
			'bonded_sec_sub' => 'Comprehensive duty-free inventory managed with strict compliance and delivered directly to your vessel.',
			'bonded_c1_title' => 'Premium Beverages & Tobacco',
			'bonded_c1_desc' => 'High-quality selection of international spirits, wines, and premium tobacco products sourced from global distributors.',
			'bonded_c2_title' => 'Luxury Confectionery & Care',
			'bonded_c2_desc' => 'Premium chocolates, designer perfumes, and high-end toiletries to ensure superior crew welfare during long voyages.',
			'bonded_c3_title' => 'High-End Electronics',
			'bonded_c3_desc' => 'Professional maritime gadgets, communication devices, and duty-free consumer electronics for onboard use.',
			'bonded_ops_badge' => 'Operational Integrity',
			'bonded_compliance_title' => 'Security & Customs Compliance',
			'bonded_compliance_sub' => 'Our bonded stores operate under strict regulatory frameworks, ensuring seamless customs clearance and secure custody of all duty-free goods.',
			'storage_fac_title' => 'Secure Storage Facilities',
			'storage_fac_desc' => 'Climate-controlled, monitored warehousing ensuring product integrity.',
			'inventory_mgmt_title' => 'Inventory Management',
			'inventory_mgmt_desc' => 'Real-time tracking and precise stock control for reliable supply.',
			'customs_comp_title' => 'Customs Compliance',
			'customs_comp_desc' => 'Full adherence to Egyptian customs regulations for rapid clearance.',
			'bonded_cta_title' => 'Secure Your Bonded Supply Today',
			'bonded_cta_desc' => 'Partner with Hanil Marine for reliable, compliant, and premium duty-free provisions across all major Egyptian ports.',
			'tech_hero_badge' => 'Operational Readiness',
			'tech_hero_title' => 'Global Technical Spares & Maritime Engineering Support',
			'tech_hero_sub' => 'Providing certified OEM and high-quality replacement parts for deck, engine, and electrical systems across all Egyptian ports. We ensure your vessel remains fully operational with precise, timely logistics.',
			'tech_sec_title' => 'Technical Supply Categories',
			'tech_sec_sub' => 'Comprehensive inventory management for critical maritime operations.',
			'tech_c1_title' => 'Engine & Deck Spares',
			'tech_c1_desc' => 'Complete range of mechanical components, gaskets, and filters sourced from trusted manufacturers to ensure vessel reliability.',
			'tech_c1_item1' => 'Pumps & Compressors',
			'tech_c1_item2' => 'Valves & Bearings',
			'tech_c1_item3' => 'Filtration Systems',
			'view_inv_details' => 'View Inventory Details',
			'tech_c2_title' => 'Electrical & Automation',
			'tech_c2_desc' => 'Specialized sensors, control panels, and automation modules to ensure modern vessel operational readiness.',
			'tech_c2_item1' => 'Navigational Equipment',
			'tech_c2_item2' => 'Sensors & Transmitters',
			'tech_c2_item3' => 'Switchgear & Breakers',
			'tech_c3_title' => 'Cabin & Safety Stores',
			'tech_c3_desc' => 'Certified safety equipment, life-saving appliances, and comprehensive cabin supplies for crew protection.',
			'tech_c3_item1' => 'Life Saving Appliances (LSA)',
			'tech_c3_item2' => 'Fire Fighting Equipment (FFE)',
			'tech_c3_item3' => 'General Cabin Consumables',
			'eng_excellence_title' => 'Engineering Excellence & Logistics',
			'eng_excellence_desc' => 'We understand that time in port is critical. Our dedicated technical team operates with precision to ensure the correct parts are identified, procured, and delivered seamlessly to your vessel.',
			'oem_certified_title' => 'OEM Certified',
			'oem_certified_desc' => 'Sourced directly from certified global manufacturers.',
			'rapid_delivery_title' => 'Rapid Delivery',
			'rapid_delivery_desc' => 'Expedited customs clearance for all Egyptian ports.',
			'sec_tech_supply_title' => 'Secure Your Technical Supply',
			'sec_tech_supply_sub' => 'Submit your IMPA codes or technical specifications for immediate processing.',
			'submit_rfq_now' => 'Submit RFQ Now',
		),
		'ar' => array(
			'home' => 'الرئيسية',
			'services' => 'الخدمات البحرية',
			'about_us' => 'عن الشركة',
			'contact' => 'اتصل بنا',
			'get_quotation' => 'طلب عرض أسعار',
			'nav_provisions' => 'تموين السفن والمؤن',
			'nav_bonded' => 'المخازن الجمركية الحرة',
			'nav_technical' => 'قطع الغيار والدعم الفني',
			'nav_logistics' => 'الخدمات اللوجستية والتخليص',
			'nav_safety' => 'معدات السلامة ومكافحة الحريق',
			'nav_repair' => 'إصلاح وصيانة السفن',
			'nav_crew' => 'تغيير الأطقم البحرية',
			'nav_bunker' => 'تجارة وتزويد الوقود',
			'hero_badge' => 'تموين سفن وحندقة مرخصة - مصر',
			'hero_title' => 'تجهيز وتموين السفن بالكامل في الموانئ المصرية',
			'hero_subtitle' => 'مؤن طازجة، مخازن حرة، قطع غيار سطح ومحركات، وتوصيل سريع باللنشات في بورسعيد، قناة السويس، الإسكندرية، دمياط، والعين السخنة. خدمة 24/7.',
			'hero_cta' => 'احصل على عرض أسعار الآن',
			'sec_services_badge' => 'توصيل للميناء على مدار 24/7',
			'sec_services_title' => 'الإمدادات البحرية وخدمات التوكيل الملاحي',
			'view_all_services' => 'عرض جميع الخدمات',
			'card_provisions_title' => 'المؤن والأغذية والمخازن الحرة',
			'card_provisions_desc' => 'مؤن طازجة ومجمدة وجافة تسلم بسيارات تبريد وفق معايير الهاسب. مخزون كامل من السلع المعفاة من الجمرك ومستلزمات الكابينة.',
			'card_logistics_title' => 'الخدمات اللوجستية والتخليص الملاحي',
			'card_logistics_desc' => 'تخليص جمركي، مستودعات حرة، توصيل بلنشات الخدمة بالمخطاف، ولوجستيات بدون تأخير لعبور قناة السويس ودخول الموانئ.',
			'card_technical_title' => 'قطع الغيار الفنية ومهمات المحركات',
			'card_technical_desc' => 'قطع غيار المحركات والسطح والكهرباء بمكودات IMPA & ISSA، ومعدات السلامة SOLAS، وفنيون بحريون مجهزون للإصلاحات العاجلة.',
			'banner_quote_title' => 'هل تحتاج إمدادات عاجلة للميناء أو أثناء العبور؟',
			'banner_quote_desc' => 'أرسل قائمة متطلباتك (PDF, XLSX) للحصول على عرض أسعار فوري من مكتب التوجيه الملاحي.',
			'about_sec_title' => 'خدمات تموين وعمليات ملاحية عريقة في مصر',
			'about_sec_desc' => 'تقدم هانيل مارين (البيرق) خدمات تموين السفن المباشرة واللوجستيات الحرة والإمدادات الفنية عبر جميع الموانئ المصرية مع تشغيل ثلاجات مجهزة ولنشات خدمة لمنع أي تأخير للسفن.',
			'cert_title' => 'ضمان جودة معتمد',
			'cert_desc' => 'تخزين معتمد بشهادات HACCP و ISO 22000 مع الالتزام الصارم بمعايير التوريد العالمية IMPA/ISSA.',
			'quick_quote_title' => 'طلب عرض أسعار مباشر',
			'quick_quote_desc' => 'أدخل جدول ملاحة سفينتك وقائمة المتطلبات. سيرد موجهو الميناء خلال ساعتين مع أسعار مفصلة.',
			'ports_title' => 'عمليات الموانئ المصرية',
			'ports_sub' => 'توصيل على مدار 24 ساعة على الرصيف والمخطاف في جميع موانئ مصر ومنافذ عبور قناة السويس.',
			'step_1_title' => 'حدد فئة الخدمة الرئيسية',
			'step_1_sub' => 'اختر الخدمة الرئيسية التي تحتاجها سفينتك. سيتنقل النظام تلقائياً للخطوة الثانية فور الاختيار.',
			'step_1_badge' => 'الخطوة 1 من 4',
			'step_1_name' => 'نوع الخدمة',
			'step_2_name' => 'بيانات الاتصال',
			'step_3_name' => 'تفاصيل السفينة والخدمات اللوجستية',
			'step_4_name' => 'المراجعة والإرسال',
			'step_2_title' => 'البيانات الشخصية وبيانات الشركة',
			'step_2_sub' => 'يرجى تقديم بيانات الاتصال الخاصة بك حتى يتمكن منسقو العمليات البحرية من إرسال عرض الأسعار.',
			'full_name' => 'الاسم بالكامل',
			'email_address' => 'البريد الإلكتروني للعمل',
			'company_name' => 'شركة الملاحة / الأسطول',
			'job_title' => 'المسمى الوظيفي',
			'phone_number' => 'رقم الهاتف / الواتساب',
			'step_3_title' => 'جدول الملاحة ومواصفات السفينة',
			'step_3_sub' => 'أدخل تفاصيل السفينة وجدول الرسو وميعاد الوصول بالجرينتش وارفق كشوف المؤن وطلبات الشراء.',
			'vessel_name' => 'اسم السفينة',
			'imo_number' => 'رقم المنظمة البحرية (IMO)',
			'port_of_call' => 'ميناء الرسو (مصر)',
			'eta' => 'الموعد المتوقع للوصول (ETA)',
			'etd' => 'الموعد المتوقع للمغادرة (ETD)',
			'notes' => 'متطلبات إضافية / الملاحظات',
			'upload_title' => 'رفع ملف طلب عرض الأسعار (PDF, XLSX, DOCX, صور)',
			'upload_sub' => 'أرفق كشوف التموين أو قوائم قطع الغيار أو الرسومات الفنية للمعالجة الفورية بواسطة موجه الميناء.',
			'click_drag' => 'انقر هنا أو اسحب الملف لرفعه',
			'file_formats' => 'يدعم PDF, XLSX, DOCX, PNG, JPG حتى 15 ميجابايت',
			'step_4_title' => 'مراجعة وتأكيد الطلب',
			'step_4_sub' => 'يرجى مراجعة تفاصيل عرض الأسعار أدناه قبل الإرسال لفريق عمليات الميناء المتاح 24/7.',
			'terms_agree' => 'أؤكد أن جميع البيانات المقدمة صحيحة وأفوض هانيل مارين بمعالجة طلب عرض الأسعار هذا.',
			'submit_quote' => 'إرسال طلب عرض الأسعار',
			'edit_details' => 'تعديل البيانات',
			'back' => 'السابق',
			'next' => 'التالي',
			'cancel' => 'إلغاء',
			'success_title' => 'تم إرسال الطلب بنجاح!',
			'success_msg' => 'تم تسجيل طلب عرض الأسعار والملفات المرفقة بنجاح. سيرد فريق عمليات الميناء خلال ساعتين.',
			'ref_id_label' => 'رقم المرجع الموحد الخاص بك',
			'return_home' => 'العودة للصفحة الرئيسية',
			'select_category' => 'اختر الفئة',
			'prov_hero_badge' => 'المورد الرئيسي للأغذية والمؤن',
			'prov_hero_title' => 'تموين السفن بالأغذية والمؤن بالكامل في مصر',
			'prov_hero_sub' => 'ضمان تزويد مطابخ السفن في جميع الموانئ المصرية بالأغذية الطازجة والمجمدة والجافة للحفاظ على صحة وسلامة الطاقم.',
			'prov_sec_title' => 'حلول التموين الغذائي الشاملة',
			'prov_sec_sub' => 'نختار كل منتج بعناية ودقة مع الالتزام بأعلى إجراءات الجودة لحماية صحة وسلامة طاقمكم.',
			'prov_fresh_title' => 'الأغذية والمؤن الطازجة',
			'prov_fresh_desc' => 'توريد يومي للفواكه والخضراوات والألبان والمخبوزات الطازجة من الأسواق المصرية. نقل مبرد يضمن أعلى مستويات الطزاجة.',
			'prov_frozen_title' => 'الأغذية والمؤن المجمدة',
			'prov_frozen_desc' => 'لحوم ودواجن ومأكولات بحرية عالية الجودة تحفظ تحت حفظ حراري صارم لضمان سلامة وجودة الأغذية.',
			'prov_dry_title' => 'الأغذية والمؤن الجافة',
			'prov_dry_desc' => 'تشكيلة واسعة من الحبوب والمكرونة والمعلبات والتوابل ذات الجودة العالية ومغلفة خصيصاً للنقل البحري.',
			'prov_standards_title' => 'مطابق لأعلى المعايير البحرية العالمية',
			'prov_standards_desc' => 'تلتزم مستودعات هانيل مارين بالمعايير العالمية والمتطلبات السلطات المصرية المحلية لضمان أعلى سلامة وجودة للأغذية.',
			'prov_cta_title' => 'بسط عمليات تموين سفينتك',
			'prov_cta_desc' => 'استمتع بطلب سلس وأسعار شفافة ومواعيد تسليم مضمونة في جميع الموانئ المصرية الرئيسية.',
			'about_hero_badge' => 'عن هانيل مارين',
			'about_hero_title' => 'تموين سفن ولوجستيات ملاحية مرخصة في مصر',
			'about_hero_sub' => 'إمدادات بحرية مباشرة، مخازن حرة، قطع غيار سطح ومحركات، وتخليص موانئ في بورسعيد وقناة السويس والإسكندرية ودمياط والعين السخنة.',
			'about_ops_title' => 'مبني خصيصاً للتوجيه الملاحي وعمليات الأساطيل',
			'about_ops_desc1' => 'تخدم هانيل مارين (البيرق) ملاك السفن والمديرين والمستأجرين والمفتشين الفنيين في الموانئ المصرية وقناة السويس. نحن نعلم أن وقت توقف السفينة حاسم وأن أي تأخير يكلف أموالاً.',
			'about_ops_desc2' => 'يدير فريقنا لنشات خدمة مخصصة للتوصيل بالمخطاف، ونقلاً مبرداً للمؤن الطازجة، ومستودعات حرة مجهزة بقطع غيار ومهمات معتمدة.',
			'about_cap_title' => 'القدرات والإمكانيات التشغيلية',
			'about_cap1_title' => 'توصيل 24/7 على الرصيف والمخطاف',
			'about_cap1_desc' => 'خدمة توصيل باللنشات للسفن المنتظرة بمخطاف بورسعيد والسويس، وتوصيل مباشر بالشاحنات بجانب الرصيف.',
			'about_cap2_title' => 'الالتزام بمعايير HACCP و IMPA/ISSA',
			'about_cap2_desc' => 'تخزين أغذية مبرد مطابق لشروط ISO 22000 و HACCP، وتوريد قطع غيار فنية وفق أكواد IMPA & ISSA.',
			'about_cap3_title' => 'عروض أسعار سريعة وفواتير واضحة',
			'about_cap3_desc' => 'عروض أسعار مفصلة تسلم خلال ساعتين من استلام الطلب بأسعار واضحة وبدون أي رسوم مخفية.',
			'contact_badge' => 'مكتب التوجيه الملاحي 24/7',
			'contact_title' => 'اتصل بعمليات الميناء والتوجيه الملاحي',
			'contact_sub' => 'دعم لوجستي وإمداد بحري 24/7 في جميع الموانئ المصرية. تواصل مباشرة مع موجهي العمليات للمتطلبات العاجلة.',
			'contact_form_title' => 'نموذج الاستفسارات المباشرة وعمليات الميناء',
			'contact_hq' => 'المقر الرئيسي للعمليات',
			'port_said' => 'ميناء بورسعيد (شرق وغرب)',
			'port_suez' => 'منطقة قناة السويس',
			'port_damietta' => 'ميناء دمياط',
			'port_alexandria' => 'ميناء الإسكندرية',
			'port_sokhna' => 'العين السخنة والأدبية',
			'port_redsea' => 'سفاجا وموانئ البحر الأحمر',
			'tab_crew_change' => 'تغيير الأطقم والنقل الملاحي',
			'tab_provisions_badge' => 'أغذية ومؤن على مدار 24/7',
			'tab_provisions_title' => 'تموين السفن الكامل والمخازن الجمركية الحرة',
			'tab_provisions_desc' => 'مؤن طازجة ومجمدة وجافة مطابقة لمعايير الهاسب وإيزو 22000. تشكيلة كاملة من البضائع الجمركية الحرة ومهمات الكابينة والمطابخ.',
			'tab_logistics_badge' => 'لوجستيات بدون أي تأخير',
			'tab_logistics_title' => 'التخليص الملاحي والتوصيل باللنشات بالمخطاف',
			'tab_logistics_desc' => 'تخليص جمركي سريع، تخزين حر، تشغيل لنشات الخدمة في مخطط بورسعيد والسويس، ولوجستيات شاحنات مباشرة بجوار الرصيف.',
			'tab_crew_badge' => 'دعم أطقم الأساطيل',
			'tab_crew_title' => 'تغيير الأطقم البحرية وإجراءات الترانزيت',
			'tab_crew_desc' => 'استقبال بالمطار 24/7، تأشيرات الدخول، انتقالات الفنادق، لنشات تسفير الأطقم، والرعاية الطبية العاجلة في القاهرة والإسكندرية وبورسعيد والسويس.',
			'tab_safety_badge' => 'معتمد وفق اتفاقية سولاس',
			'tab_safety_title' => 'معدات السلامة البحرية وأجهزة إنقاذ الحياة',
			'tab_safety_desc' => 'قوارب نجاة سولاس معتمدة، ألعاب نارية ملاحية، معدات إطفاء الحريق، بدلات غطس حرارية، وأحزمة سلامة مع خدمات فحص واختبار معتمدة.',
			'tab_technical_badge' => 'بأكواد IMPA و ISSA',
			'tab_technical_title' => 'قطع غيار ومهمات السطح والمحركات والكهرباء',
			'tab_technical_desc' => 'مخزون شامل لقطع غيار المحركات والصمامات والمضخات والمكونات الكهربائية والأدوات الهوائية بمكودات IMPA/ISSA مع فريق فني معتمد.',
			'footer_tagline' => 'مورد ومزود لوجستيات بحرية مرخص يعمل على مدار 24/7 عبر جميع الموانئ المصرية وقناة السويس.',
			'footer_quick_links' => 'روابط السريعة',
			'footer_ports' => 'الموانئ المغطاة',
			'footer_contact_title' => 'التوجيه الملاحي 24/7',
			'footer_rights' => 'جميع الحقوق محفوظة. خدمات التموين والإمداد البحري المعتمدة.',
			'repair_hero_badge' => 'العمليات الفنية وإصلاح السفن',
			'repair_hero_title' => 'خدمات الإصلاحات البحرية والصيانة الفنية الشاملة',
			'repair_hero_sub' => 'تقديم الهندسة الدقيقة والسلامة الهيكلية للأصول البحرية العالمية. استكشاف الأخطاء وإصلاحها بحرفية عندما تكون الجاهزية التشغيلية أمراً لا يقبل المساومة.',
			'repair_hero_cta' => 'بدء طلب إصلاح',
			'repair_sec_title' => 'قدرات وإمكانيات الإصلاح الرئيسية',
			'repair_sec_sub' => 'يوفر فريقنا الفني المدرب تدريباً عالياً خدمات الإصلاح والصيانة على مدار الساعة، مما يقلل من وقت توقف السفينة من خلال الاعتمادية الصناعية والدقة اللوجستية.',
			'repair_engine_title' => 'عمرة المحركات الرئيسية والمساندة',
			'repair_engine_desc' => 'هندسة ميكانيكية متخصصة واستبدال قطع الغيار. صيانة دورية وإصلاحات عاجلة وعمرة كاملة لضمان كفاءة الدفع المثلى والاعتمادية.',
			'repair_specs_link' => 'عرض المواصفات الفنية',
			'repair_steel_title' => 'تصنيع وإصلاح الأنابيب والبدن الصاج',
			'repair_steel_desc' => 'لحام دقيق وإصلاحات للبدن وتصنيع أنظمة الأنابيب المعقدة. يتم التنفيذ وفقاً لمعايير وهيئات التصنيف المعتمدة، سواء في الميناء أو فرق العمل في البحر.',
			'class_approved' => 'معتمد من هيئات التصنيف',
			'in_port_at_sea' => 'في الميناء / أثناء الإبحار',
			'repair_elec_title' => 'إصلاحات الكهرباء والتحكم الآلي',
			'repair_elec_desc' => 'استكشاف الأخطاء وإصلاحها بسرعة ودقة للأنظمة البحرية الحيوية. من صيانة لوحات التوزيع إلى إصلاح لوحات التحكم الآلي المعقدة لضمان السلامة الملاحية.',
			'rapid_response_badge' => 'استجابة سريعة على مدار 24/7',
			'request_technician' => 'طلب فني متخصص',
			'repair_cta_title' => 'هل تحتاج إلى مساعدة فنية عاجلة؟',
			'repair_cta_desc' => 'أدخل طلب الخدمة المفصل من خلال نموذج طلب العروض لدينا للمراجعة السريعة وتحريك فريق العمل.',
			'access_quote_workflow' => 'الانتقال لنموذج طلب الأسعار',
			'crew_hero_badge' => 'لوجستيات وتغيير الأطقم البحرية',
			'crew_hero_title' => 'تغيير الأطقم البحرية والخدمات اللوجستية بكفاءة',
			'crew_hero_sub' => 'ضمان تنقل آمن ومطابق للقوانين وسلس لأهم أصولكم البحرية.',
			'crew_hero_cta' => 'بدء إجراءات تغيير الطاقم',
			'crew_s1_title' => 'خدمات نقل البحارة والأطقم',
			'crew_s1_desc' => 'وسائل نقل آمنة وموثوقة لأعضاء الطاقم بين مرافق الموانئ والسفن باستخدام وسائل نقل مرخصة ومجهزة.',
			'crew_s2_title' => 'دعم التأشيرات وإجراءات الجوازات',
			'crew_s2_desc' => 'معالجة متخصصة لجميع المعاملات الرسمية بالموانئ المصرية، والوثائق، وإجراءات التخليص السريع.',
			'crew_s3_title' => 'الضيافة والرعاية الطبية',
			'crew_s3_desc' => 'ترتيبات متكاملة لراحة الطاقم تشمل الإقامة الآمنة وتسهيل الرعاية الطبية الفورية عند الحاجة.',
			'crew_cta_title' => 'هل أنت جاهز لجدولة تغيير الطاقم؟',
			'crew_cta_sub' => 'فريق العمليات لدينا متاح على مدار 24/7 لإدارة لوجستيات الأفراد الخاصة بك بدقة صناعية.',
			'request_quotation' => 'طلب عرض أسعار',
			'contact_operations' => 'التواصل مع قسم العمليات',
			'bunker_hero_badge' => 'لوجستيات الطاقة والوقود البحري',
			'bunker_hero_title' => 'تجارة الوقود البحري الاستراتيجية والتزويد الدقيق',
			'bunker_hero_sub' => 'ضمان الاستمرارية التشغيلية للأساطيل البحرية العالمية بوقود بحري معتمد بشهادات ISO، ومزيج زيوت متطور، ولوجستيات موثوقة 24/7 في جميع الموانئ المصرية.',
			'bunker_hero_cta' => 'بدء طلب عرض أسعار الوقود',
			'bunker_sec_title' => 'الكفاءات الرئيسية في تجارة الوقود',
			'bunker_sec_sub' => 'تعطي حلول الوقود المتكاملة لدينا الأولوية لضمان الجودة، وجدولة التسليم الدقيقة، والالتزام الصارم بالمعايير البحرية الدولية.',
			'iso_8217_badge' => 'مطابق لمواصفات ISO 8217',
			'bunker_c1_title' => 'زيوت الوقود البحرية (VLSFO / LSMGO)',
			'bunker_c1_desc' => 'وقود بحري منخفض الكبريت عالي الجودة ومضمون. يتم توريده من مصافي معتمدة عالمياً لضمان الأداء الأمثل للمحرك والالتزام بانبعاثات البيئة.',
			'bunker_c1_check1' => 'اختبار الجودة قبل التسليم',
			'bunker_c1_check2' => 'تقارير شفافة للكثافة واللزوجة',
			'bunker_c1_link' => 'عرض المواصفات',
			'bunker_c2_title' => 'زيوت التزييت والمواد الكيميائية المتخصصة',
			'bunker_c2_desc' => 'تشكيلة كاملة من زيوت المحركات عالية الأداء والزيوت الهيدروليكية والمواد الكيميائية البحرية المصممة لإطالة عمر الآلات في الظروف الشديدة.',
			'main_engine_oils' => 'زيوت المحرك الرئيسي',
			'auxiliary_oils' => 'زيوت المحركات المساعدة',
			'bunker_c3_title' => 'لوجستيات التزويد بالوقود 24/7',
			'bunker_c3_desc' => 'يضمن أسطولنا اللوجستي المخصص توصيلاً موثوقاً ودقيقاً عبر جميع الموانئ المصرية الرئيسية. نعمل على مدار الساعة لتقليل توقف سفينتك.',
			'ops_center_title' => 'مركز العمليات والتوجيه',
			'always_active' => 'نشط دائماً',
			'bunker_ops_desc' => 'خط تواصل مباشر لطلبات الوقود العاجلة أو تحديثات مواعيد الوصول ETA.',
			'contact_logistics' => 'التواصل مع قسم اللوجستيات',
			'bunker_cta_title' => 'نظام طلب عروض الأسعار المبسط',
			'bunker_cta_desc' => 'احصل على أسعار فورية وأمن حصص الوقود الخاصة بك عبر نظامنا الرقمي الدقيق. مصمم للشراء السريع والشفافية الكاملة.',
			'request_bunker_quote' => 'طلب عرض أسعار الوقود',
			'view_product_catalog' => 'عرض كتالوج المنتجات',
			'bonded_hero_badge' => 'الخدمات البحرية والمخازن الحرة',
			'bonded_hero_title' => 'المخازن الجمركية الحرة والإمدادات المعفاة من الجمرك',
			'bonded_hero_sub' => 'توفير بضائع جمركية حرة عالية الجودة وحلول تخزين آمنة للسفن عبر جميع الموانئ المصرية.',
			'bonded_sec_title' => 'إمدادات المخازن الحرة المتميزة',
			'bonded_sec_sub' => 'مخزون شامل معفى من الجمرك يدار بالالتزام التام ويسلم مباشرة إلى سفينتك.',
			'bonded_c1_title' => 'المشروبات الفاخرة والتبغ',
			'bonded_c1_desc' => 'تشكيلة عالية الجودة من المنتجات المعفاة من الجمرك والتبغ الفاخر المورد من موزعين عالميين.',
			'bonded_c2_title' => 'الحلويات الفاخرة ومستلزمات العناية',
			'bonded_c2_desc' => 'شوكولاتة فاخرة، عطور عالمية، ومستحضرات عناية شخصية لضمان راحة الطاقم أثناء الرحلات الطويلة.',
			'bonded_c3_title' => 'الأجهزة الإلكترونية الحديثة',
			'bonded_c3_desc' => 'أجهزة بحرية متخصصة، معدات اتصالات، وإلكترونيات استهلاكية معفاة من الجمرك للاستخدام على متن السفينة.',
			'bonded_ops_badge' => 'النزاهة والشفافية التشغيلية',
			'bonded_compliance_title' => 'الأمان والامتثال الجمركي',
			'bonded_compliance_sub' => 'تعمل مخازننا الحرة تحت أطر تنظيمية صارمة مما يضمن التخليص الجمركي السلس والحفظ الأمين للبضائع المعفاة.',
			'storage_fac_title' => 'مرافق تخزين آمنة ومجهزة',
			'storage_fac_desc' => 'مستودعات مجهزة بالتحكم الحراري والمراقبة لضمان سلامة المنتجات.',
			'inventory_mgmt_title' => 'إدارة المخزون الدقيقة',
			'inventory_mgmt_desc' => 'تتبع في الوقت الفعلي وتحديث دقيق للمخزون لضمان التوريد الموثوق.',
			'customs_comp_title' => 'الالتزام التام بالإجراءات الجمركية',
			'customs_comp_desc' => 'التزام كامل باللوائح الجمركية المصرية لضمان التخليص السريع.',
			'bonded_cta_title' => 'اطلب إمداداتك من البضائع الحرة اليوم',
			'bonded_cta_desc' => 'تعاون مع هانيل مارين للحصول على مؤن معفاة من الجمرك موثوقة ومطابقة للمواصفات في جميع الموانئ المصرية.',
			'tech_hero_badge' => 'الجاهزية التشغيلية',
			'tech_hero_title' => 'قطع الغيار الفنية والدعم الهندسي البحري العالمي',
			'tech_hero_sub' => 'توفير قطع غيار أصلية ومعتمدة عالية الجودة لأنظمة السطح والمحركات والكهرباء في جميع الموانئ المصرية مع خدمات لوجستية دقيقة.',
			'tech_sec_title' => 'فئات التوريدات والقطع الفنية',
			'tech_sec_sub' => 'إدارة مخزون شاملة للعمليات البحرية الحيوية.',
			'tech_c1_title' => 'قطع غيار المحرك والسطح',
			'tech_c1_desc' => 'مجموعة كاملة من المكونات الميكانيكية، الجوانات، والفلاتر الموردة من مصنعين موثوقين لضمان اعتمادات السفينة.',
			'tech_c1_item1' => 'المضخات والضواغط',
			'tech_c1_item2' => 'الصمامات والرولمان بلي',
			'tech_c1_item3' => 'أنظمة الفلترة والتصفية',
			'view_inv_details' => 'عرض تفاصيل المخزون',
			'tech_c2_title' => 'المعدات الكهربائية والتحكم الآلي',
			'tech_c2_desc' => 'حساسات متخصصة، لوحات تحكم، ووحدات تحكم آلي لضمان جاهزية السفن الحديثة.',
			'tech_c2_item1' => 'معدات الملاحة والتوجيه',
			'tech_c2_item2' => 'الحساسات وأجهزة الإرسال',
			'tech_c2_item3' => 'المفاتيح الكهربائية والقواطع',
			'tech_c3_title' => 'مهمات السلامة والكابينة',
			'tech_c3_desc' => 'معدات سلامة معتمدة، أجهزة إنقاذ الحياة، ومستلزمات الكابينة لحماية الطاقم.',
			'tech_c3_item1' => 'أجهزة إنقاذ الحياة (LSA)',
			'tech_c3_item2' => 'معدات مكافحة الحريق (FFE)',
			'tech_c3_item3' => 'مستهلكات الكابينة العامة',
			'eng_excellence_title' => 'التميز الهندسي واللوجستيات',
			'eng_excellence_desc' => 'نحن ندرك أن وقت التوقف بالميناء حاسم. يعمل فريقنا الفني بدقة لتحديد وتوريد وتوصيل القطع الصحيحة لسفينتك.',
			'oem_certified_title' => 'معتمد من الشركات المصنعة الأصليين',
			'oem_certified_desc' => 'موردة مباشرة من مصنعين عالميين معتمدين.',
			'rapid_delivery_title' => 'توصيل سريع',
			'rapid_delivery_desc' => 'تخليص جمركي سريع في جميع الموانئ المصرية.',
			'sec_tech_supply_title' => 'اطلب القطع والمهمات الفنية الآن',
			'sec_tech_supply_sub' => 'أدخل أكواد IMPA أو المواصفات الفنية للمعالجة الفورية.',
			'submit_rfq_now' => 'إرسال طلب الأسعار الآن',
		),
		'tr' => array(
			'home' => 'Ana Sayfa',
			'services' => 'Hizmetler',
			'about_us' => 'Hakkımızda',
			'contact' => 'İletişim',
			'get_quotation' => 'Teklif Alın',
			'nav_provisions' => 'Gemi Kumanya İkmal',
			'nav_bonded' => 'Transit & Gümrüksüz Mağaza',
			'nav_technical' => 'Teknik Yedek Parça & Destek',
			'nav_logistics' => 'Liman Lojistiği & Transit',
			'nav_safety' => 'Güvenlik & SOLAS Ekipmanları',
			'nav_repair' => 'Gemi Tamir & Bakım',
			'nav_crew' => 'Mürettebat Değişimi',
			'nav_bunker' => 'Bunker & Yakıt Ticareti',
			'hero_badge' => 'Lisanslı Gemi İkmalcisi - Mısır',
			'hero_title' => 'Mısır\'da Tam Kapsamlı Gemi İkmal ve Liman Hizmetleri',
			'hero_subtitle' => 'Taze kumanya, gümrüksüz mağaza, güverte ve makine yedek parçaları, Port Said, Süveyş Kanalı, İskenderiye, Damietta ve Ain Sokhna\'da 7/24 hızlı bot ikmali.',
			'hero_cta' => 'Hemen Teklif Alın',
			'sec_services_badge' => '7/24 Liman Teslimatı',
			'sec_services_title' => 'Denizcilik İkmal & Liman Acenteliği Hizmetleri',
			'view_all_services' => 'Tüm Hizmetleri Görüntüle',
			'card_provisions_title' => 'Kumanya & Gümrüksüz Mağaza',
			'card_provisions_desc' => 'HACCP standartlarında soğutmalı araçlarla taze, donuk ve kuru kumanya teslimatı. Gümrüksüz ürünler ve kamara malzemeleri.',
			'card_logistics_title' => 'Liman Lojistiği & Transit Gümrükleme',
			'card_logistics_desc' => 'Gümrükleme, antrepo hizmetleri, demir alanında bot ile teslimat ve Süveyş Kanalı geçişlerinde sıfır gecikmeli lojistik.',
			'card_technical_title' => 'Teknik Yedek Parça & Makine Malzemeleri',
			'card_technical_desc' => 'IMPA & ISSA kodlu makine, güverte, elektrik yedek parçaları, SOLAS güvenlik ekipmanları ve acil tamir teknik ekibi.',
			'banner_quote_title' => 'Acil Liman Teslimatı veya Transit Malzemeye mi İhtiyacınız Var?',
			'banner_quote_desc' => 'Sipariş listenizi (PDF, XLSX) gönderin, vardiya amirliğimizden anında teklif alın.',
			'about_sec_title' => 'Mısır\'da Köklü Gemi İkmal ve Liman Operasyonları',
			'about_sec_desc' => 'Hanil Marine (Al-Bayrak), tüm Mısır limanlarında doğrudan gemi ikmali, gümrüklü lojistik ve teknik malzeme tedariki sağlar. Gemilerde gecikmeyi önlemek için ikmal botları çalıştırır.',
			'cert_title' => 'Sertifikalı Kalite Güvencesi',
			'cert_desc' => 'HACCP & ISO 22000 sertifikalı depolama ve katı IMPA/ISSA tedarik standartları.',
			'quick_quote_title' => 'Doğrudan Teklif Talebi',
			'quick_quote_desc' => 'Gemi programınızı ve ihtiyaç listenizi gönderin. Liman vardiya amirimiz 2 saat içinde yanıt versin.',
			'ports_title' => 'Mısır Liman Operasyonları',
			'ports_sub' => 'Tüm Mısır limanlarında ve Süveyş Kanalı transit noktalarında rıhtımda ve demirde 7/24 ikmal.',
			'step_1_title' => 'Ana Hizmet Kategorisini Seçin',
			'step_1_sub' => 'Geminizin ihtiyaç duyduğu ana hizmeti seçin. Seçiminiz otomatik olarak 2. Adıma ilerleyecektir.',
			'step_1_badge' => 'Adım 1 / 4',
			'step_1_name' => 'Hizmet Türü',
			'step_2_name' => 'İletişim Bilgileri',
			'step_3_name' => 'Gemi Detayları & Lojistik',
			'step_4_name' => 'İncele & Gönder',
			'step_2_title' => 'Kişisel ve Şirket Bilgileri',
			'step_2_sub' => 'Denizcilik operasyon ekibimizin teklifinizi iletebilmesi için lütfen iletişim bilgilerinizi girin.',
			'full_name' => 'Ad Soyad',
			'email_address' => 'Kurumsal E-posta Adresi',
			'company_name' => 'Armatör / İşletme Şirketi',
			'job_title' => 'Unvan / Görev',
			'phone_number' => 'Telefon / WhatsApp Numarası',
			'step_3_title' => 'Gemi Programı & Teknik Detaylar',
			'step_3_sub' => 'Gemi bilgilerinizi, liman varış programınızı ve malzeme listenizi (Excel/PDF) yükleyin.',
			'vessel_name' => 'Gemi Adı',
			'imo_number' => 'IMO Numarası',
			'port_of_call' => 'Varış Limanı (Mısır)',
			'eta' => 'Tahmini Varış Zamanı (ETA)',
			'etd' => 'Tahmini Kalkış Zamanı (ETD)',
			'notes' => 'Ek İhtiyaçlar & Açıklama',
			'upload_title' => 'Teklif İhtiyaç Dosyasını Yükleyin (PDF, XLSX, DOCX, Görseller)',
			'upload_sub' => 'Liman vardiya amirimiz tarafından hızlı işlenmesi için sipariş listelerinizi veya teknik çizimlerinizi ekleyin.',
			'click_drag' => 'Dosyayı buraya tıklayın veya sürükleyip bırakın',
			'file_formats' => '15MB\'a kadar PDF, XLSX, DOCX, PNG, JPG destekler',
			'step_4_title' => 'Talebi İnceleyin & Onaylayın',
			'step_4_sub' => 'Lütfen 7/24 liman operasyon ekibimize göndermeden önce teklif detaylarınızı inceleyin.',
			'terms_agree' => 'Verilen tüm bilgilerin doğru olduğunu onaylıyor ve Hanil Marine\'e teklif talebini işleme yetkisi veriyorum.',
			'submit_quote' => 'Teklif Talebini Gönder',
			'edit_details' => 'Detayları Düzenle',
			'back' => 'Geri',
			'next' => 'İleri',
			'cancel' => 'İptal',
			'success_title' => 'Talep Başarıyla Gönderildi!',
			'success_msg' => 'Teklif talebiniz ve dosyalarınız kaydedildi. Liman operasyon ekibimiz 2 saat içinde yanıt verecektir.',
			'ref_id_label' => 'Benzersiz Referans Numaranız',
			'return_home' => 'Ana Sayfaya Dön',
			'select_category' => 'Kategori Seçin',
			'prov_hero_badge' => 'Prömiyer Kumanya İkmal',
			'prov_hero_title' => 'Mısır\'da Tam Kapsamlı Gemi Kumanya İkmali',
			'prov_hero_sub' => 'Mısır limanlarındaki tüm gemi mutfaklarının mürettebat sağlığı için taze, donuk ve kuru kumanya ile donatılması.',
			'prov_sec_title' => 'Kapsamlı Kumanya İkmal Çözümleri',
			'prov_sec_sub' => 'Mürettebatınızın sağlığını korumak için her ürünü özenle ve kalite prosedürlerine uygun seçiyoruz.',
			'prov_fresh_title' => 'Taze Kumanya',
			'prov_fresh_desc' => 'Mısır yerel pazarlarından taze meyve, sebze, süt ürünleri ve fırın ürünleri ikmali. Soğutmalı araçlarla teslimat.',
			'prov_frozen_title' => 'Donuk Kumanya',
			'prov_frozen_desc' => 'Yüksek kaliteli et, tavuk ve deniz ürünleri. Strict sıcaklık kontrolü ile gıda güvenliği garantisi.',
			'prov_dry_title' => 'Kuru Kumanya',
			'prov_dry_desc' => 'Geniş tahıl, makarna, konserve ve baharat çeşidi. Deniz taşımacılığına uygun güvenli ambalaj.',
			'prov_standards_title' => 'Endüstri Standartlarına Tam Uyum',
			'prov_standards_desc' => 'Hanil Marine depoları, gıda güvenliği ve kalitesini garanti etmek için küresel ve yerel Mısır standartlarına tam uygundur.',
			'prov_cta_title' => 'Kumanya İkmalinizi Kolaylaştırın',
			'prov_cta_desc' => 'Tüm Mısır limanlarında sorunsuz sipariş, şeffaf fiyatlandırma ve garantili teslimat programı.',
			'about_hero_badge' => 'Hanil Marine Hakkında',
			'about_hero_title' => 'Mısır\'da Lisanslı Gemi İkmalcileri ve Deniz Lojistiği',
			'about_hero_sub' => 'Port Said, Süveyş Kanalı, İskenderiye, Damietta ve Ain Sokhna\'da doğrudan gemi ikmali, gümrüklü mağaza, yedek parça ve gümrükleme.',
			'about_ops_title' => 'Denizcilik Vardiya & Filo Operasyonları İçin Yapılandırılmış',
			'about_ops_desc1' => 'Hanil Marine (Al-Bayrak), Mısır limanlarında ve Süveyş Kanalı\'nda armatörlere, işletmecilere ve teknik enspektörlere hizmet verir. Liman kalış süresinin kritik olduğunu biliyoruz.',
			'about_ops_desc2' => 'Ekibimiz demir alanında teslimat için ikmal botları, taze kumanya için soğutmalı araçlar ve gümrüklü antrepolar işletmektedir.',
			'about_cap_title' => 'Operasyonel Kabiliyetler',
			'about_cap1_title' => 'Demirde ve Rıhtımda 7/24 Teslimat',
			'about_cap1_desc' => 'Port Said ve Süveyş demir sahalarındaki gemilere botla, tüm Mısır rıhtımlarına ise kamyonla doğrudan ikmal.',
			'about_cap2_title' => 'HACCP & IMPA/ISSA Uyumlu',
			'about_cap2_desc' => 'ISO 22000 & HACCP uyumlu soğuk hava depoları ve IMPA & ISSA kodlu teknik yedek parça tedariki.',
			'about_cap3_title' => 'Hızlı Teklif & Şeffaf Faturalandırma',
			'about_cap3_desc' => 'Talep alındıktan sonra 2 saat içinde net fiyatlı ve gizli masrafsız kalem kalem teklif teslimi.',
			'contact_badge' => '7/24 Vardiya Amirliği',
			'contact_title' => 'Liman Operasyonları & İletişim',
			'contact_sub' => 'Tüm Mısır limanlarında 7/24 deniz ikmal ve lojistik desteği. Acil ihtiyaçlarınız için vardiya amirlerimize ulaşın.',
			'contact_form_title' => 'Genel Danışma & Operasyon Masası',
			'contact_hq' => 'Operasyon Merkez Karargahı',
			'port_said' => 'Port Said Limanı (Doğu & Batı)',
			'port_suez' => 'Süveyş Kanalı Bölgesi',
			'port_damietta' => 'Damietta Limanı',
			'port_alexandria' => 'İskenderiye Limanı',
			'port_sokhna' => 'Ain Sokhna & Adabeyah',
			'port_redsea' => 'Safaga & Kızıldeniz Limanları',
			'tab_crew_change' => 'Mürettebat Değişimi & Transfer',
			'tab_provisions_badge' => '7/24 Kumanya & Malzeme',
			'tab_provisions_title' => 'Tam Gemi İkmali & Gümrüksüz Mağaza',
			'tab_provisions_desc' => 'HACCP & ISO 22000 standartlarında taze, donuk ve kuru kumanya. Gümrüksüz ürünler ve kamara malzemeleri.',
			'tab_logistics_badge' => 'Sıfır Gecikmeli Lojistik',
			'tab_logistics_title' => 'Liman Gümrükleme & Bot ile Teslimat',
			'tab_logistics_desc' => 'Hızlı gümrükleme, antrepo, Port Said ve Süveyş demir alanında ikmal botu ve rıhtım teslimat lojistiği.',
			'tab_crew_badge' => 'Filo Desteği',
			'tab_crew_title' => 'Gemi Mürettebat Değişimi & Transit İşlemler',
			'tab_crew_desc' => '7/24 havalimanı karşılama, vize işlemleri, otel transferleri, bot servisi ve tıbbi acil destek.',
			'tab_safety_badge' => 'SOLAS Sertifikalı',
			'tab_safety_title' => 'Deniz Emniyet Malzemeleri & Can Kurtarma Donanımı',
			'tab_safety_desc' => 'SOLAS onaylı can salları, piroteknik, yangın söndürme ekipmanları, dalış tulumları ve sertifikalı test hizmetleri.',
			'tab_technical_badge' => 'IMPA / ISSA Kodlu',
			'tab_technical_title' => 'Güverte, Makine & Elektrik Teknik Parçaları',
			'tab_technical_desc' => 'IMPA/ISSA kodlu makine parçaları, vanalar, pompalar, elektrik malzemeleri ve rıhtımda teknik bakım desteği.',
			'footer_tagline' => 'Tüm Mısır Limanlarında ve Süveyş Kanalı\'nda 7/24 Hizmet Veren Lisanslı Gemi İkmalcisi ve Deniz Lojistiği Sağlayıcısı.',
			'footer_quick_links' => 'Hızlı Bağlantılar',
			'footer_ports' => 'Hizmet Verilen Limanlar',
			'footer_contact_title' => '7/24 Liman Vardiyası',
			'footer_rights' => 'Tüm hakları saklıdır. Lisanslı Gemi İkmal & Deniz Lojistiği.',
			'repair_hero_badge' => 'Teknik Operasyonlar',
			'repair_hero_title' => 'Kapsamlı Deniz Tamir ve Teknik Bakım Hizmetleri',
			'repair_hero_sub' => 'Denizcilik varlıkları için hassas mühendislik ve yapısal bütünlük sağlıyoruz. Operasyonel hazırlığın kritik olduğu durumlarda uzman arıza tespiti ve onarım.',
			'repair_hero_cta' => 'Tamir Talebi Başlat',
			'repair_sec_title' => 'Temel Tamir Kabiliyetleri',
			'repair_sec_sub' => 'Uzman teknik ekiplerimiz 7/24 tamir ve bakım hizmeti sunarak, endüstriyel güvenilirlik ve lojistik hassasiyetle geminizin duruş süresini en aza indirir.',
			'repair_engine_title' => 'Ana ve Yardımcı Makine Overhaul',
			'repair_engine_desc' => 'Uzman mekanik mühendislik ve parça değişimi. Rutin bakım, acil tamirler ve optimum sevk verimliliği için tam overhaul.',
			'repair_specs_link' => 'Teknik Özellikleri Görüntüle',
			'repair_steel_title' => 'Sac ve Boru Donanım İmalatı',
			'repair_steel_desc' => 'Hassas kaynak, tekne tamiri ve karmaşık boru sistemi imalatı. Hem limanda hem de seyir halinde klas onaylı standartlarda uygulama.',
			'class_approved' => 'Klas Onaylı',
			'in_port_at_sea' => 'Limanda / Seyirde',
			'repair_elec_title' => 'Elektrik ve Otomasyon Tamirleri',
			'repair_elec_desc' => 'Kritik gemi sistemlerinin hızlı arıza tespiti ve bakımı. Pano bakımından karmaşık otomasyon panellerine kadar navigasyon güvenliği ve operasyonel süreklilik.',
			'rapid_response_badge' => '7/24 Hızlı Yanıt',
			'request_technician' => 'Teknisyen Talep Et',
			'repair_cta_title' => 'Acil Teknik Desteğe mi İhtiyacınız Var?',
			'repair_cta_desc' => 'Hızlı inceleme ve saha organizasyonu için teklif sistemimiz üzerinden detaylı servis talebi oluşturun.',
			'access_quote_workflow' => 'Teklif Oluşturma Adımına Geç',
			'crew_hero_badge' => 'Denizci Personel Lojistiği',
			'crew_hero_title' => 'Etkin Personel Değişimi ve Deniz Lojistiği',
			'crew_hero_sub' => 'En değerli varlığınız olan personeliniz için güvenli, mevzuata uygun ve sorunsuz değişim.',
			'crew_hero_cta' => 'Personel Değişimi Başlat',
			'crew_s1_title' => 'Personel Transfer Hizmetleri',
			'crew_s1_desc' => 'Gemi adamlarının liman tesisleri ile gemiler arasında sertifikalı araçlarla güvenli ve güvenilir transferi.',
			'crew_s2_title' => 'Vize ve Göçmenlik Desteği',
			'crew_s2_desc' => 'Tüm Mısır liman formalitelerinin, belgelerin ve hızlı giriş-çıkış işlemlerinin profesyonel takibi.',
			'crew_s3_title' => 'Konaklama ve Tıbbi Lojistik',
			'crew_s3_desc' => 'Güvenli konaklama ve gerektiğinde acil tıbbi destek dahil olmak üzere personel refahı için eksiksiz organizasyon.',
			'crew_cta_title' => 'Personel Değişimi Planlamaya Hazır mısınız?',
			'crew_cta_sub' => 'Operasyon ekibimiz, personel lojistiğinizi profesyonel hassasiyetle yönetmek için 7/24 hizmetinizdedir.',
			'request_quotation' => 'Teklif İsteyin',
			'contact_operations' => 'Operasyonla İletişime Geçin',
			'bunker_hero_badge' => 'Küresel Enerji Lojistiği',
			'bunker_hero_title' => 'Stratejik Bunker Ticareti ve Hassas Yakıt İkmali',
			'bunker_hero_sub' => 'ISO sertifikalı denizcilik yakıtları, gelişmiş madeni yağlar ve tüm Mısır limanlarında 7/24 lojistik ile küresel filolar için kesintisiz operasyon.',
			'bunker_hero_cta' => 'Teklif Sürecini Başlat',
			'bunker_sec_title' => 'Temel Yakıt Ticareti Yetkinlikleri',
			'bunker_sec_sub' => 'Entegre bunker çözümlerimiz kalite güvencesine, zamanında teslime ve uluslararası denizcilik standartlarına tam uyuma odaklanır.',
			'iso_8217_badge' => 'ISO 8217 Sertifikalı',
			'bunker_c1_title' => 'Denizcilik Yakıtları (VLSFO/LSMGO)',
			'bunker_c1_desc' => 'Yüksek kaliteli düşük kükürtlü marine gasoil ve çok düşük kükürtlü fuel oil. Tanınmış rafinerilerden tedarik edilen yakıtlarımız maksimum performans sağlar.',
			'bunker_c1_check1' => 'Teslimat öncesi kalite testi',
			'bunker_c1_check2' => 'Şeffaf yoğunluk ve vizkozite raporlaması',
			'bunker_c1_link' => 'Özellikleri İncele',
			'bunker_c2_title' => 'Madeni Yağlar ve Özel Kimyasallar',
			'bunker_c2_desc' => 'Zorlu koşullarda makine ömrünü uzatmak için tasarlanmış yüksek performanslı motor yağları, hidrolik sıvılar ve özel deniz kimsayalları.',
			'main_engine_oils' => 'Ana Makine Yağları',
			'auxiliary_oils' => 'Yardımcı Makine Yağları',
			'bunker_c3_title' => '7/24 Yakıt Lojistiği',
			'bunker_c3_desc' => 'Özel lojistik filomuz tüm Mısır limanlarında güvenilir ve zamanında teslimat sağlar. Geminizin duruş süresini en aza indirmek için 7/24 çalışıyoruz.',
			'ops_center_title' => 'Operasyon Merkezi',
			'always_active' => 'Sürekli Aktif',
			'bunker_ops_desc' => 'Acil yakıt talepleri ve ETA güncellemeleri için doğrudan iletişim hattı.',
			'contact_logistics' => 'Lojistik İle İletişime Geçin',
			'bunker_cta_title' => 'Kolaylaştırılmış Teklif Akışı',
			'bunker_cta_desc' => 'Hassas dijital teklif sistemimizle anlık fiyatlara erişin ve yakıt tahsisinizi güvenceye alın. Hızlı satın alma ve tam şeffaflık için tasarlandı.',
			'request_bunker_quote' => 'Bunker Teklifi İsteyin',
			'view_product_catalog' => 'Ürün Kataloğunu Görüntüle',
			'bonded_hero_badge' => 'Denizcilik Hizmetleri',
			'bonded_hero_title' => 'Gümrüksüz Mağaza ve Transit İkmal Hizmetleri',
			'bonded_hero_sub' => 'Tüm Mısır limanlarındaki gemiler için yüksek kaliteli gümrüksüz ürünler ve güvenli depolama çözümleri.',
			'bonded_sec_title' => 'A Kalite Gümrüksüz Ürünler',
			'bonded_sec_sub' => 'Sıkı mevzuat uyumuyla yönetilen ve doğrudan geminize teslim edilen kapsamlı gümrüksüz ürün stoku.',
			'bonded_c1_title' => 'Kaliteli İçecekler ve Tütün Ürünleri',
			'bonded_c1_desc' => 'Küresel distribütörlerden tedarik edilen kaliteli içecek ve tütün ürünleri seçeneği.',
			'bonded_c2_title' => 'Lüks Çikolata ve Bakım Ürünleri',
			'bonded_c2_desc' => 'Uzun seferlerde mürettebat refahını sağlamak için lüks çikolatalar, parfümler ve kişisel bakım ürünleri.',
			'bonded_c3_title' => 'Üst Segment Elektronik Ürünler',
			'bonded_c3_desc' => 'Gemi kullanımı için profesyonel denizci cihazları, iletişim donanımları ve gümrüksüz elektronik eşyalar.',
			'bonded_ops_badge' => 'Operasyonel Güvenilirlik',
			'bonded_compliance_title' => 'Güvenlik ve Gümrük Uyumluğu',
			'bonded_compliance_sub' => 'Gümrüksüz depolama tesislerimiz sıkı yasal düzenlemeler altında çalışarak sorunsuz gümrükleme ve güvenli muhafaza sağlar.',
			'storage_fac_title' => 'Güvenli Depolama Tesisleri',
			'storage_fac_desc' => 'Ürün kalitesini koruyan iklim kontrollü ve sürekli izlenen depolama.',
			'inventory_mgmt_title' => 'Hassas Stok Yönetimi',
			'inventory_mgmt_desc' => 'Güvenilir ikmal için anlık takip ve hassas stok kontrolü.',
			'customs_comp_title' => 'Gümrük Mevzuat Uyumu',
			'customs_comp_desc' => 'Hızlı gümrükleme için Mısır gümrük mevzuatına tam uyum.',
			'bonded_cta_title' => 'Gümrüksüz Mağaza İkmalinizi Bugün Sağlayın',
			'bonded_cta_desc' => 'Tüm Mısır limanlarında güvenilir ve kaliteli gümrüksüz ikmal için Hanil Marine ile çalışın.',
			'tech_hero_badge' => 'Operasyonel Hazırlık',
			'tech_hero_title' => 'Küresel Teknik Yedek Parça ve Deniz Mühendisliği Desteği',
			'tech_hero_sub' => 'Tüm Mısır limanlarında güverte, makine ve elektrik sistemleri için sertifikalı OEM ve yüksek kaliteli yedek parçalar sunuyoruz.',
			'tech_sec_title' => 'Teknik Malzeme ve Parça Kategorileri',
			'tech_sec_sub' => 'Kritik denizcilik operasyonları için kapsamlı stok yönetimi.',
			'tech_c1_title' => 'Makine ve Güverte Yedek Parçaları',
			'tech_c1_desc' => 'Gemi güvenilirliğini sağlamak için güvenilir üreticilerden tedarik edilen mekanik bileşenler, contalar ve filtreler.',
			'tech_c1_item1' => 'Pompalar ve Kompresörler',
			'tech_c1_item2' => 'Vanalar ve Rulmanlar',
			'tech_c1_item3' => 'Filtreleme Sistemleri',
			'view_inv_details' => 'Stok Detaylarını İncele',
			'tech_c2_title' => 'Elektrik ve Otomasyon',
			'tech_c2_desc' => 'Modern gemi operasyonel hazırlığı için özel sensörler, kontrol panelleri ve otomasyon modülleri.',
			'tech_c2_item1' => 'Navigasyon Ekipmanları',
			'tech_c2_item2' => 'Sensörler ve Vericiler',
			'tech_c2_item3' => 'Şalterler ve Devre Kesiciler',
			'tech_c3_title' => 'Kamara ve Güvenlik Malzemeleri',
			'tech_c3_desc' => 'Personel koruması için sertifikalı güvenlik ekipmanları, can kurtarma donanımları ve kamara malzemeleri.',
			'tech_c3_item1' => 'Can Kurtarma Donanımları (LSA)',
			'tech_c3_item2' => 'Yangın Söndürme Ekipmanları (FFE)',
			'tech_c3_item3' => 'Genel Kamara Tüketim Malzemeleri',
			'eng_excellence_title' => 'Mühendislik Mükemmelliği ve Lojistik',
			'eng_excellence_desc' => 'Limandaki sürenin kritik olduğunu biliyoruz. Teknik ekibimiz doğru parçaların tespiti, tedariki ve teslimi için hassasiyetle çalışır.',
			'oem_certified_title' => 'OEM Sertifikalı',
			'oem_certified_desc' => 'Doğrudan sertifikalı küresel üreticilerden tedarik edilir.',
			'rapid_delivery_title' => 'Hızlı Teslimat',
			'rapid_delivery_desc' => 'Tüm Mısır limanlarında hızlı gümrükleme.',
			'sec_tech_supply_title' => 'Teknik Malzeme Talebinizi Oluşturun',
			'sec_tech_supply_sub' => 'Hızlı işleme için IMPA kodlarınızı veya teknik özelliklerinizi iletin.',
			'submit_rfq_now' => 'Teklif Talebini Gönder',
		),
	);

	return $dict;
}

function bayrak_t( $key, $default_en = '' ) {
	$lang = bayrak_get_current_lang();
	$dict = bayrak_get_translations();
	if ( isset( $dict[ $lang ][ $key ] ) ) {
		return $dict[ $lang ][ $key ];
	}
	if ( isset( $dict['en'][ $key ] ) ) {
		return $dict['en'][ $key ];
	}
	return $default_en ? $default_en : $key;
}


/**
 * Register Quotation Request Custom Post Type
 */
function bayrak_register_quotation_cpt() {
	$labels = array(
		'name'                  => _x( 'Quotation Requests', 'Post Type General Name', 'bayrak' ),
		'singular_name'         => _x( 'Quotation Request', 'Post Type Singular Name', 'bayrak' ),
		'menu_name'             => __( 'Quotations', 'bayrak' ),
		'all_items'             => __( 'All Quotations', 'bayrak' ),
		'add_new_item'          => __( 'Add New Quotation Request', 'bayrak' ),
		'edit_item'             => __( 'Edit Quotation Request', 'bayrak' ),
		'view_item'             => __( 'View Quotation Request', 'bayrak' ),
		'search_items'          => __( 'Search Quotations', 'bayrak' ),
		'not_found'             => __( 'No Quotations found', 'bayrak' ),
	);
	$args = array(
		'label'                 => __( 'Quotation Request', 'bayrak' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'capability_type'       => 'post',
		'has_archive'           => false,
		'hierarchical'          => false,
		'show_in_rest'          => true,
	);
	register_post_type( 'quotation_request', $args );
}
add_action( 'init', 'bayrak_register_quotation_cpt' );

/**
 * AJAX Handler for Quotation Submission
 */
function bayrak_submit_quotation_handler() {
	$service_type  = isset( $_POST['service_type'] ) ? sanitize_text_field( $_POST['service_type'] ) : '';
	$full_name     = isset( $_POST['full_name'] ) ? sanitize_text_field( $_POST['full_name'] ) : '';
	$email         = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
	$company_name  = isset( $_POST['company_name'] ) ? sanitize_text_field( $_POST['company_name'] ) : '';
	$job_title     = isset( $_POST['job_title'] ) ? sanitize_text_field( $_POST['job_title'] ) : '';
	$phone         = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
	$vessel_name   = isset( $_POST['vessel_name'] ) ? sanitize_text_field( $_POST['vessel_name'] ) : '';
	$imo_number    = isset( $_POST['imo_number'] ) ? sanitize_text_field( $_POST['imo_number'] ) : '';
	$port_of_call  = isset( $_POST['port_of_call'] ) ? sanitize_text_field( $_POST['port_of_call'] ) : '';
	$eta           = isset( $_POST['eta'] ) ? sanitize_text_field( $_POST['eta'] ) : '';
	$etd           = isset( $_POST['etd'] ) ? sanitize_text_field( $_POST['etd'] ) : '';
	$notes         = isset( $_POST['notes'] ) ? sanitize_textarea_field( $_POST['notes'] ) : '';

	if ( empty( $full_name ) || empty( $email ) || empty( $vessel_name ) ) {
		wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
	}

	$ref_id = 'HM-' . date( 'Y' ) . '-' . rand( 1000, 9999 );
	$title  = sprintf( '%s - %s (%s)', $ref_id, $vessel_name, $company_name ? $company_name : $full_name );

	$post_id = wp_insert_post( array(
		'post_type'    => 'quotation_request',
		'post_title'   => $title,
		'post_status'  => 'publish',
		'post_content' => sprintf(
			"Reference ID: %s\nService Type: %s\nContact Name: %s (%s)\nEmail: %s | Phone: %s\nCompany: %s\nVessel Name: %s (IMO: %s)\nPort of Call: %s\nETA: %s | ETD: %s\nAdditional Notes: %s",
			$ref_id, $service_type, $full_name, $job_title, $email, $phone, $company_name, $vessel_name, $imo_number, $port_of_call, $eta, $etd, $notes
		),
	) );

	if ( is_wp_error( $post_id ) ) {
		wp_send_json_error( array( 'message' => 'Error saving quotation request.' ) );
	}

	// Save Meta Fields
	update_post_meta( $post_id, 'ref_id', $ref_id );
	update_post_meta( $post_id, 'service_type', $service_type );
	update_post_meta( $post_id, 'full_name', $full_name );
	update_post_meta( $post_id, 'email', $email );
	update_post_meta( $post_id, 'company_name', $company_name );
	update_post_meta( $post_id, 'job_title', $job_title );
	update_post_meta( $post_id, 'phone', $phone );
	update_post_meta( $post_id, 'vessel_name', $vessel_name );
	update_post_meta( $post_id, 'imo_number', $imo_number );
	update_post_meta( $post_id, 'port_of_call', $port_of_call );
	update_post_meta( $post_id, 'eta', $eta );
	update_post_meta( $post_id, 'etd', $etd );
	update_post_meta( $post_id, 'notes', $notes );

	// Process file upload if provided
	if ( ! empty( $_FILES['quotation_file'] ) && ! empty( $_FILES['quotation_file']['name'] ) ) {
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		$uploaded = wp_handle_upload( $_FILES['quotation_file'], array( 'test_form' => false ) );
		if ( isset( $uploaded['url'] ) && ! isset( $uploaded['error'] ) ) {
			update_post_meta( $post_id, 'attached_file_url', $uploaded['url'] );

			$attachment = array(
				'guid'           => $uploaded['url'],
				'post_mime_type' => $uploaded['type'],
				'post_title'     => sanitize_file_name( $_FILES['quotation_file']['name'] ),
				'post_content'   => '',
				'post_status'    => 'inherit'
			);

			$attach_id = wp_insert_attachment( $attachment, $uploaded['file'], $post_id );
			if ( ! is_wp_error( $attach_id ) ) {
				$attach_data = wp_generate_attachment_metadata( $attach_id, $uploaded['file'] );
				wp_update_attachment_metadata( $attach_id, $attach_data );
				update_post_meta( $post_id, 'attached_file_id', $attach_id );
			}
		}
	}

	wp_send_json_success( array(
		'ref_id'  => $ref_id,
		'message' => 'Quotation request submitted successfully!',
	) );
}
add_action( 'wp_ajax_bayrak_submit_quotation', 'bayrak_submit_quotation_handler' );
add_action( 'wp_ajax_nopriv_bayrak_submit_quotation', 'bayrak_submit_quotation_handler' );

/**
 * Add WordPress Admin Meta Box for Quotation Requests
 */
function bayrak_quotation_admin_meta_box() {
	add_meta_box(
		'bayrak_quotation_details',
		__( 'Quotation Request Details & File Attachment', 'bayrak' ),
		'bayrak_render_quotation_admin_meta_box',
		'quotation_request',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'bayrak_quotation_admin_meta_box' );

function bayrak_render_quotation_admin_meta_box( $post ) {
	$ref_id       = get_post_meta( $post->ID, 'ref_id', true );
	$service_type = get_post_meta( $post->ID, 'service_type', true );
	$full_name    = get_post_meta( $post->ID, 'full_name', true );
	$email        = get_post_meta( $post->ID, 'email', true );
	$company_name = get_post_meta( $post->ID, 'company_name', true );
	$job_title    = get_post_meta( $post->ID, 'job_title', true );
	$phone        = get_post_meta( $post->ID, 'phone', true );
	$vessel_name  = get_post_meta( $post->ID, 'vessel_name', true );
	$imo_number   = get_post_meta( $post->ID, 'imo_number', true );
	$port_of_call = get_post_meta( $post->ID, 'port_of_call', true );
	$eta          = get_post_meta( $post->ID, 'eta', true );
	$etd          = get_post_meta( $post->ID, 'etd', true );
	$notes        = get_post_meta( $post->ID, 'notes', true );
	$file_url     = get_post_meta( $post->ID, 'attached_file_url', true );
	?>
	<style>
		.bayrak-admin-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px; }
		.bayrak-admin-card { background: #f8fafc; padding: 15px; border: 1px solid #e2e8f0; border-radius: 6px; }
		.bayrak-admin-card h4 { margin: 0 0 10px 0; color: #004aad; font-size: 14px; text-transform: uppercase; }
		.bayrak-file-btn { display: inline-block; background: #004aad; color: #fff !important; text-decoration: none; padding: 10px 18px; border-radius: 4px; font-weight: bold; margin-top: 10px; }
		.bayrak-file-btn:hover { background: #002b66; }
	</style>

	<div class="bayrak-admin-grid">
		<div class="bayrak-admin-card">
			<h4>📋 General Details</h4>
			<p><strong>Reference ID:</strong> <?php echo esc_html( $ref_id ? $ref_id : 'N/A' ); ?></p>
			<p><strong>Service Category:</strong> <?php echo esc_html( $service_type ); ?></p>
			<p><strong>Contact Name:</strong> <?php echo esc_html( $full_name ); ?> (<?php echo esc_html( $job_title ); ?>)</p>
			<p><strong>Company:</strong> <?php echo esc_html( $company_name ); ?></p>
			<p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
			<p><strong>Phone:</strong> <?php echo esc_html( $phone ); ?></p>
		</div>

		<div class="bayrak-admin-card">
			<h4>🚢 Vessel Logistics</h4>
			<p><strong>Vessel Name:</strong> <?php echo esc_html( $vessel_name ); ?></p>
			<p><strong>IMO Number:</strong> <?php echo esc_html( $imo_number ); ?></p>
			<p><strong>Port of Call:</strong> <?php echo esc_html( $port_of_call ); ?></p>
			<p><strong>ETA:</strong> <?php echo esc_html( $eta ); ?></p>
			<p><strong>ETD:</strong> <?php echo esc_html( $etd ); ?></p>
		</div>
	</div>

	<?php if ( $notes ) : ?>
		<div class="bayrak-admin-card" style="margin-bottom:15px;">
			<h4>📝 Additional Specifications / Notes</h4>
			<p><?php echo nl2br( esc_html( $notes ) ); ?></p>
		</div>
	<?php endif; ?>

	<div class="bayrak-admin-card" style="background:#eff6ff; border-color:#bfdbfe;">
		<h4>📎 Attached Requisition File</h4>
		<?php if ( $file_url ) : ?>
			<p>A file attachment was uploaded with this quotation request:</p>
			<a href="<?php echo esc_url( $file_url ); ?>" target="_blank" class="bayrak-file-btn">
				📥 Download Attached Requisition File
			</a>
		<?php else : ?>
			<p><em>No file attachment uploaded for this request.</em></p>
		<?php endif; ?>
	</div>
	<?php
}

/**
 * Custom Admin Columns for Quotation Requests CPT (All Quotations Admin Tab)
 */
function bayrak_quotation_cpt_columns( $columns ) {
	$new_columns = array(
		'cb'            => $columns['cb'],
		'title'         => __( 'Quotation Title / Ref ID', 'bayrak' ),
		'ref_id'        => __( 'Ref ID', 'bayrak' ),
		'service_type'  => __( 'Service Category', 'bayrak' ),
		'vessel_info'   => __( 'Vessel / IMO', 'bayrak' ),
		'contact_info'  => __( 'Contact Person', 'bayrak' ),
		'port_of_call'  => __( 'Port of Call', 'bayrak' ),
		'attachment'    => __( 'Requisition File', 'bayrak' ),
		'date'          => $columns['date'],
	);
	return $new_columns;
}
add_filter( 'manage_quotation_request_posts_columns', 'bayrak_quotation_cpt_columns' );

function bayrak_quotation_cpt_custom_column_content( $column, $post_id ) {
	switch ( $column ) {
		case 'ref_id':
			$ref_id = get_post_meta( $post_id, 'ref_id', true );
			echo '<strong>' . esc_html( $ref_id ? $ref_id : 'N/A' ) . '</strong>';
			break;
		case 'service_type':
			$service = get_post_meta( $post_id, 'service_type', true );
			echo '<span style="background:#e2e8f0;color:#1e293b;padding:3px 8px;border-radius:4px;font-weight:bold;font-size:11px;">' . esc_html( $service ? $service : 'General' ) . '</span>';
			break;
		case 'vessel_info':
			$vessel = get_post_meta( $post_id, 'vessel_name', true );
			$imo    = get_post_meta( $post_id, 'imo_number', true );
			echo '<strong>' . esc_html( $vessel ? $vessel : 'N/A' ) . '</strong>' . ( $imo ? '<br><small style="color:#64748b;">IMO: ' . esc_html( $imo ) . '</small>' : '' );
			break;
		case 'contact_info':
			$name  = get_post_meta( $post_id, 'full_name', true );
			$email = get_post_meta( $post_id, 'email', true );
			$phone = get_post_meta( $post_id, 'phone', true );
			echo '<strong>' . esc_html( $name ? $name : 'N/A' ) . '</strong>';
			if ( $email ) {
				echo '<br><small><a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a></small>';
			}
			if ( $phone ) {
				echo '<br><small style="color:#64748b;">' . esc_html( $phone ) . '</small>';
			}
			break;
		case 'port_of_call':
			$port = get_post_meta( $post_id, 'port_of_call', true );
			echo esc_html( $port ? $port : 'N/A' );
			break;
		case 'attachment':
			$file_url = get_post_meta( $post_id, 'attached_file_url', true );
			if ( $file_url ) {
				echo '<a href="' . esc_url( $file_url ) . '" target="_blank" class="button button-small button-primary" style="font-weight:bold;">📥 Download File</a>';
			} else {
				echo '<span style="color:#a0aec0;">No File</span>';
			}
			break;
	}
}
add_action( 'manage_quotation_request_posts_custom_column', 'bayrak_quotation_cpt_custom_column_content', 10, 2 );



