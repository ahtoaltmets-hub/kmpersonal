<?php
/**
 * KM Personal Theme Functions
 *
 * @package KM_Personal
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function kmpersonal_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'kmpersonal'),
        'footer' => __('Footer Menu', 'kmpersonal'),
    ));
}
add_action('after_setup_theme', 'kmpersonal_setup');

/**
 * Enqueue scripts and styles
 */
function kmpersonal_scripts() {
    // Google Fonts - Open Sans
    wp_enqueue_style('kmpersonal-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', array(), null);

    // Font Awesome 6
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Main stylesheet
    wp_enqueue_style('kmpersonal-style', get_stylesheet_uri(), array(), '1.0.0');

    // Homepage specific styles
    if (is_front_page()) {
        wp_enqueue_style('kmpersonal-homepage', get_template_directory_uri() . '/assets/css/homepage.css', array('kmpersonal-style'), '1.0.0');
        wp_enqueue_script('kmpersonal-homepage-js', get_template_directory_uri() . '/assets/js/homepage.js', array(), '1.0.0', true);
        wp_enqueue_script('kmpersonal-booking-js', get_template_directory_uri() . '/assets/js/booking-calendar.js', array(), '1.0.0', true);
    }

    // Services page specific styles
    if (is_page_template('page-teenused.php')) {
        wp_enqueue_style('kmpersonal-services', get_template_directory_uri() . '/assets/css/services.css', array('kmpersonal-style'), '1.0.0');
    }

    // About page specific styles
    if (is_page_template('page-meist.php')) {
        wp_enqueue_style('kmpersonal-about', get_template_directory_uri() . '/assets/css/about.css', array('kmpersonal-style'), '1.0.0');
    }

    // Contact page specific styles
    if (is_page_template('page-kontakt.php')) {
        wp_enqueue_style('kmpersonal-contact', get_template_directory_uri() . '/assets/css/contact.css', array('kmpersonal-style'), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'kmpersonal_scripts');

/**
 * ACF Field Groups for Homepage
 */
if (function_exists('acf_add_local_field_group')) {

    // HERO SECTION FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_hero',
        'title' => 'Hero Section',
        'fields' => array(
            array(
                'key' => 'field_hero_bg',
                'label' => 'Hero Background Image',
                'name' => 'hero_background_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'large',
                'instructions' => 'Upload a high-quality image (minimum 1920x1080px). Suggested: hands holding, teamwork photo with warm tones.',
            ),
            array(
                'key' => 'field_hero_badge_visible',
                'label' => 'Show Free Consultation Badge?',
                'name' => 'hero_badge_visible',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
            ),
            array(
                'key' => 'field_hero_badge',
                'label' => 'Free Consultation Badge Text',
                'name' => 'hero_badge_text',
                'type' => 'text',
                'default_value' => 'Esimene konsultatsioon TASUTA!',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_hero_badge_visible',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'KAASA PERSONALIPARTNER TÄPSELT SIIS, KUI VAJAD!',
                'maxlength' => 100,
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'Pakume paindlikke ja professionaalseid personalilahendusi ettevõtetele, kes vajavad teadmisi, süsteeme ja tuge – ilma täiskohaga personalispetsialisti palkamata',
            ),
            array(
                'key' => 'field_hero_primary_btn_text',
                'label' => 'Primary Button Text',
                'name' => 'hero_primary_button_text',
                'type' => 'text',
                'default_value' => 'Broneeri konsultatsioon',
            ),
            array(
                'key' => 'field_hero_primary_btn_link',
                'label' => 'Primary Button Link',
                'name' => 'hero_primary_button_link',
                'type' => 'text',
                'default_value' => '#kontakt',
            ),
            array(
                'key' => 'field_hero_secondary_btn_text',
                'label' => 'Secondary Button Text',
                'name' => 'hero_secondary_button_text',
                'type' => 'text',
                'default_value' => 'Vaata teenuseid',
            ),
            array(
                'key' => 'field_hero_secondary_btn_link',
                'label' => 'Secondary Button Link',
                'name' => 'hero_secondary_button_link',
                'type' => 'text',
                'default_value' => '#teenused',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
    ));

    // MISSION SECTION FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_mission',
        'title' => 'Mission Section',
        'fields' => array(
            array(
                'key' => 'field_mission_heading',
                'label' => 'Mission Heading',
                'name' => 'mission_heading',
                'type' => 'text',
                'default_value' => 'MEIE EESMÄRK',
            ),
            array(
                'key' => 'field_mission_text',
                'label' => 'Mission Text',
                'name' => 'mission_text',
                'type' => 'textarea',
                'rows' => 5,
                'default_value' => 'Viia professionaalne personalijuhtimine igasse organisatsiooni – sõltumata töötajate arvust või tegevuspiirkonnast. Meie eesmärk on muuta personalitugi kättesaadavaks ka neile ettevõtetele, kellel puudub oma personaliosakond, kuid kellel on selge vajadus teadmiste, süsteemide ja inimkesksete lahenduste järele.',
            ),
            array(
                'key' => 'field_values',
                'label' => 'Values',
                'name' => 'values',
                'type' => 'repeater',
                'min' => 3,
                'max' => 3,
                'layout' => 'block',
                'button_label' => 'Add Value',
                'sub_fields' => array(
                    array(
                        'key' => 'field_value_icon',
                        'label' => 'Icon Class',
                        'name' => 'icon',
                        'type' => 'text',
                        'instructions' => 'FontAwesome class (e.g., fa-heart, fa-lightbulb, fa-chart-line)',
                        'default_value' => 'fa-heart',
                    ),
                    array(
                        'key' => 'field_value_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_value_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                ),
                'default_value' => array(
                    array(
                        'icon' => 'fa-arrows-alt',
                        'title' => 'Paindlikkus',
                        'description' => 'Iga organisatsioon on erinev – meie lahendused kohanduvad teie vajaduste, tempo ja tööstiiliga.',
                    ),
                    array(
                        'icon' => 'fa-heart',
                        'title' => 'Inimlikkus',
                        'description' => 'Meie töös on keskmes inimene – kuulame, mõistame ja loome lahendusi, mis toetavad päriselt teie meeskonda.',
                    ),
                    array(
                        'icon' => 'fa-chess',
                        'title' => 'Strateegia',
                        'description' => 'Tugev personalijuhtimine algab selgest eesmärgist – aitame teil ehitada süsteeme, mis toetavad pikaajalist kasvu.',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 1,
    ));

    // TRUST SECTION FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_trust',
        'title' => 'Trust Section',
        'fields' => array(
            array(
                'key' => 'field_trust_heading',
                'label' => 'Trust Section Heading',
                'name' => 'trust_heading',
                'type' => 'text',
                'default_value' => 'KA SIIS, KUI ON RASKE JA TORMINE!',
            ),
            array(
                'key' => 'field_trust_text',
                'label' => 'Trust Section Text',
                'name' => 'trust_text',
                'type' => 'textarea',
                'rows' => 5,
                'default_value' => 'Meie eesmärk on luua pikaajalisi koostöösuhteid, kus meie klient saab kindel olla, et kogu töötaja elukaarega seotud personalitöö on läbimõeldult hallatud – alates tööle võtmisest kuni lahkumiseni. Kõik dokumendid, protsessid ja nõuded on korrektselt vormistatud, et sinu ettevõttes valitseks selgus, süsteemsus ja turvatunne.',
            ),
            array(
                'key' => 'field_trust_image',
                'label' => 'Trust Section Image',
                'name' => 'trust_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'instructions' => 'Upload an image (suggested: lighthouse in stormy sea or similar symbolic image)',
            ),
            array(
                'key' => 'field_trust_button_text',
                'label' => 'Button Text',
                'name' => 'trust_button_text',
                'type' => 'text',
                'default_value' => 'Võta ühendust',
            ),
            array(
                'key' => 'field_trust_button_link',
                'label' => 'Button Link',
                'name' => 'trust_button_link',
                'type' => 'text',
                'default_value' => '#kontakt',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 2,
    ));

    // SERVICES SECTION FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_services',
        'title' => 'Services Section',
        'fields' => array(
            array(
                'key' => 'field_services_heading',
                'label' => 'Services Heading',
                'name' => 'services_heading',
                'type' => 'text',
                'default_value' => 'MEIE TEENUSED',
            ),
            array(
                'key' => 'field_services_subtitle',
                'label' => 'Services Subtitle',
                'name' => 'services_subtitle',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'Pakume terviklikke personalijuhtimise lahendusi, mis kohanduvad teie ettevõtte vajadustega',
            ),
            array(
                'key' => 'field_services',
                'label' => 'Services',
                'name' => 'services',
                'type' => 'repeater',
                'min' => 2,
                'max' => 6,
                'layout' => 'block',
                'button_label' => 'Add Service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_service_icon',
                        'label' => 'Icon Class',
                        'name' => 'icon',
                        'type' => 'text',
                        'instructions' => 'FontAwesome class',
                    ),
                    array(
                        'key' => 'field_service_title',
                        'label' => 'Service Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_service_excerpt',
                        'label' => 'Short Description',
                        'name' => 'excerpt',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_service_link',
                        'label' => 'Link URL',
                        'name' => 'link',
                        'type' => 'text',
                    ),
                ),
                'default_value' => array(
                    array(
                        'icon' => 'fa-handshake',
                        'title' => 'Töösuhtega seotud nõustamine',
                        'excerpt' => 'Abistame tööõiguse küsimustes, lepingute koostamisel ja töösuhete korrektsel läbiviimisel.',
                        'link' => '/teenused/toosuhete-noustamine',
                    ),
                    array(
                        'icon' => 'fa-cogs',
                        'title' => 'Personalijuhtimise süsteemid',
                        'excerpt' => 'Loome selged protsessid ja süsteemid, mis toetavad teie ettevõtte kasvu ja arengut.',
                        'link' => '/teenused/personalijuhtimise-susteemid',
                    ),
                    array(
                        'icon' => 'fa-users',
                        'title' => 'Värbamine ja tööle võtmine',
                        'excerpt' => 'Aitame leida õigeid inimesi ja viia läbi professionaalset värbamisprotsessi.',
                        'link' => '/teenused/varbamine',
                    ),
                    array(
                        'icon' => 'fa-graduation-cap',
                        'title' => 'Koolitused',
                        'excerpt' => 'Pakume koolitusi juhtidele ja meeskonnale, et tugevdada inimeste juhtimise oskusi.',
                        'link' => '/teenused/koolitused',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 3,
    ));

    // TESTIMONIALS SECTION FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_testimonials',
        'title' => 'Testimonials Section',
        'fields' => array(
            array(
                'key' => 'field_testimonials_heading',
                'label' => 'Testimonials Heading',
                'name' => 'testimonials_heading',
                'type' => 'text',
                'default_value' => 'MIDA MEIE KLIENDID ÜTLEVAD',
            ),
            array(
                'key' => 'field_testimonials',
                'label' => 'Testimonials',
                'name' => 'testimonials',
                'type' => 'repeater',
                'min' => 1,
                'max' => 10,
                'layout' => 'block',
                'button_label' => 'Add Testimonial',
                'sub_fields' => array(
                    array(
                        'key' => 'field_testimonial_text',
                        'label' => 'Testimonial Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 5,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_testimonial_name',
                        'label' => 'Client Name',
                        'name' => 'client_name',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_testimonial_position',
                        'label' => 'Client Position/Company',
                        'name' => 'client_position',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_testimonial_photo',
                        'label' => 'Client Photo (Optional)',
                        'name' => 'client_photo',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                    ),
                ),
                'default_value' => array(
                    array(
                        'text' => 'Meile meeldis Kareni teenuse juures paindlikkus ja professionaalsus, personaalne lähenemine ning sügavuti kaasa mõtlemine. Me hoidsime tellijana kokku tohutu hulga aega, mis oleks kulunud endal kõigi vajaminevate seadusandlike materjalide läbitöötamiseks.',
                        'client_name' => 'Reta Lepp',
                        'client_position' => 'Viljandi Centrum AS juhataja',
                    ),
                    array(
                        'text' => 'Karen liitus AMV Metalli meeskonnaga ajal, mil meie organisatsioonil puudus selge visioon ja kujunenud töökultuur. Tema äärmiselt professionaalne lähenemine protsesside väljatöötamisele tegi need olulised muudatused nii juhatuse kui ka kogu kollektiivi jaoks sujuvaks ja mõistetavaks.',
                        'client_name' => 'AMV Metall',
                        'client_position' => 'Klient',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 4,
    ));

    // CTA SECTION FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_cta',
        'title' => 'CTA Section',
        'fields' => array(
            array(
                'key' => 'field_cta_heading',
                'label' => 'CTA Heading',
                'name' => 'cta_heading',
                'type' => 'text',
                'default_value' => 'VALMIS ALUSTAMA?',
            ),
            array(
                'key' => 'field_cta_text',
                'label' => 'CTA Text',
                'name' => 'cta_text',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Broneeri oma tasuta konsultatsioon juba täna ja alustame teie ettevõtte personalijuhtimise paremaks tegemist!',
            ),
            array(
                'key' => 'field_cta_primary_btn_text',
                'label' => 'Primary Button Text',
                'name' => 'cta_primary_button_text',
                'type' => 'text',
                'default_value' => 'Broneeri tasuta konsultatsioon',
            ),
            array(
                'key' => 'field_cta_primary_btn_link',
                'label' => 'Primary Button Link',
                'name' => 'cta_primary_button_link',
                'type' => 'text',
                'default_value' => '/kontakt',
            ),
            array(
                'key' => 'field_cta_secondary_btn_text',
                'label' => 'Secondary Button Text',
                'name' => 'cta_secondary_button_text',
                'type' => 'text',
                'default_value' => 'Helista kohe',
            ),
            array(
                'key' => 'field_cta_secondary_btn_link',
                'label' => 'Secondary Button Link',
                'name' => 'cta_secondary_button_link',
                'type' => 'text',
                'default_value' => 'tel:+372XXXXXXX',
            ),
            array(
                'key' => 'field_cta_email',
                'label' => 'Email Address',
                'name' => 'cta_email',
                'type' => 'email',
                'default_value' => 'info@kmpersonal.ee',
            ),
            array(
                'key' => 'field_cta_phone',
                'label' => 'Phone Number',
                'name' => 'cta_phone',
                'type' => 'text',
                'default_value' => '+372XXXXXXX',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 5,
    ));

    // BOOKING SECTION FIELDS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_booking',
        'title' => 'Booking Section',
        'fields' => array(
            array(
                'key' => 'field_booking_heading',
                'label' => 'Booking Heading',
                'name' => 'booking_heading',
                'type' => 'text',
                'default_value' => 'BRONEERI TASUTA KONSULTATSIOON',
            ),
            array(
                'key' => 'field_booking_subtitle',
                'label' => 'Booking Subtitle',
                'name' => 'booking_subtitle',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Vali sobiv aeg ja broneeri 30-minutiline tasuta konsultatsioon. Räägime sinu ettevõtte vajadustest ja leiame parimad lahendused.',
            ),
            array(
                'key' => 'field_booking_description',
                'label' => 'Booking Description (Optional)',
                'name' => 'booking_description',
                'type' => 'wysiwyg',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            array(
                'key' => 'field_booking_type',
                'label' => 'Booking Type',
                'name' => 'booking_type',
                'type' => 'select',
                'choices' => array(
                    'calendly' => 'Calendly Integration (Recommended)',
                    'custom' => 'Custom Calendar',
                ),
                'default_value' => 'calendly',
                'instructions' => 'Choose between Calendly integration or custom calendar widget.',
            ),
            array(
                'key' => 'field_calendly_url',
                'label' => 'Calendly URL',
                'name' => 'calendly_url',
                'type' => 'url',
                'instructions' => 'Enter your Calendly scheduling page URL (e.g., https://calendly.com/your-username)',
                'default_value' => 'https://calendly.com/kmpersonal',
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_booking_type',
                            'operator' => '==',
                            'value' => 'calendly',
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 6,
    ));

}
