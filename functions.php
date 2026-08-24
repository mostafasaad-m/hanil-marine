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


