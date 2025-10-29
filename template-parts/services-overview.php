<?php
/**
 * Template part for displaying the Services Overview section
 *
 * @package KM_Personal
 */

// Get ACF fields
$services_heading = get_field('services_heading');
$services_subtitle = get_field('services_subtitle');
$services = get_field('services');

// Set defaults
$services_heading = $services_heading ?: 'MEIE TEENUSED';
$services_subtitle = $services_subtitle ?: 'Pakume terviklikke personalijuhtimise lahendusi, mis kohanduvad teie ettevõtte vajadustega';

// Default services if ACF repeater is empty
if (empty($services)) {
    $services = array(
        array(
            'icon' => 'fa-handshake',
            'title' => 'Paindlik Personalipartner',
            'excerpt' => 'Personalidokumentide loomine ja korrastamine, personalitöö protsesside väljaarendamine, juhtide nõustamine, töötajate arenguvestlused, sisemine kommunikatsioon ja jooksev tugi.',
            'link' => '/teenused/paindlik-personalipartner',
        ),
        array(
            'icon' => 'fa-clipboard-check',
            'title' => 'Siseaudit',
            'excerpt' => 'Tööelukeskkonna hindamine, mis ühendab töötajate rahulolu, tööanalüüsi ja tööohutuse vaatenurgad ning annab sisendeid edasiseks arenguks.',
            'link' => '/teenused/siseaudit',
        ),
        array(
            'icon' => 'fa-hard-hat',
            'title' => 'Töökeskkond ja Tööohutus',
            'excerpt' => 'Spetsialistiteenused sh auditid, dokumentatsioon, riskianalüüs, töötervishoiu ja tööohutuse dokumentide koostamine ning valmisolek Tööinspektsiooni järelevalveks.',
            'link' => '/teenused/tookeskkond-ja-tooohutus',
        ),
        array(
            'icon' => 'fa-chart-bar',
            'title' => 'Personaliuuringute Läbiviimine',
            'excerpt' => 'Küsimustike koostamine, anonüümne läbiviimine, tulemuste analüüs, juhtide nõustamine ja soovituste tegemine organisatsiooni arengu toetamiseks.',
            'link' => '/teenused/personaliuuringud',
        ),
        array(
            'icon' => 'fa-laptop-code',
            'title' => 'HR-Tarkvarade Juurutamine',
            'excerpt' => 'Vajaduste analüüs, sobiva tarkvara valimine ja juurutamise tugi palgaarvestuse, värbamise ja dokumendihalduse süsteemide jaoks.',
            'link' => '/teenused/hr-tarkvarad',
        ),
        array(
            'icon' => 'fa-user-tie',
            'title' => 'Personalijuht Väikeettevõttesse',
            'excerpt' => 'Paindlik ja professionaalne personalijuhtimise tugi väikeettevõtetele, kes vajavad abi lepingute, kommunikatsiooni ja töökohtade vastavusega.',
            'link' => '/teenused/personalijuht-vaikeettevottesse',
        ),
    );
}
?>

<section class="services-overview" id="teenused">
    <div class="container">

        <?php if ($services_heading) : ?>
            <h2 class="section-title">
                <?php echo esc_html($services_heading); ?>
            </h2>
        <?php endif; ?>

        <?php if ($services_subtitle) : ?>
            <p class="section-subtitle">
                <?php echo esc_html($services_subtitle); ?>
            </p>
        <?php endif; ?>

        <?php if ($services) : ?>
            <div class="services-grid">
                <?php foreach ($services as $service) : ?>
                    <div class="service-card">
                        <?php if (!empty($service['icon'])) : ?>
                            <div class="service-icon">
                                <?php
                                // SVG icons as fallback
                                $svg_icons = array(
                                    'fa-handshake' => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C10.9 2 10 2.9 10 4C10 4.5 10.2 5 10.5 5.3L8.5 7.3C8.2 7.2 7.9 7 7.5 7C6.4 7 5.5 7.9 5.5 9C5.5 9.5 5.7 10 6 10.3L3 13.3C2.7 13.2 2.4 13 2 13C0.9 13 0 13.9 0 15C0 16.1 0.9 17 2 17C3.1 17 4 16.1 4 15C4 14.5 3.8 14 3.5 13.7L6.5 10.7C6.8 10.8 7.1 11 7.5 11C8.6 11 9.5 10.1 9.5 9C9.5 8.5 9.3 8 9 7.7L11 5.7C11.3 5.8 11.6 6 12 6C13.1 6 14 5.1 14 4C14 2.9 13.1 2 12 2Z" fill="currentColor"/><path d="M18 8C16.9 8 16 8.9 16 10C16 10.5 16.2 11 16.5 11.3L13.5 14.3C13.2 14.2 12.9 14 12.5 14C11.4 14 10.5 14.9 10.5 16C10.5 17.1 11.4 18 12.5 18C13.6 18 14.5 17.1 14.5 16C14.5 15.5 14.3 15 14 14.7L17 11.7C17.3 11.8 17.6 12 18 12C19.1 12 20 11.1 20 10C20 8.9 19.1 8 18 8Z" fill="currentColor"/><path d="M20 14C18.9 14 18 14.9 18 16C18 17.1 18.9 18 20 18C21.1 18 22 17.1 22 16C22 14.9 21.1 14 20 14Z" fill="currentColor"/></svg>',
                                    'fa-clipboard-check' => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="2" width="18" height="20" rx="2" stroke="currentColor" stroke-width="2"/><path d="M7 6H17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M7 10L9 12L13 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 16H17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
                                    'fa-hard-hat' => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 3L2 8L12 13L22 8L12 3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M12 13V21" stroke="currentColor" stroke-width="2"/><path d="M6 10.5V16L12 19L18 16V10.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>',
                                    'fa-chart-bar' => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><rect x="7" y="13" width="3" height="5" fill="currentColor"/><rect x="11" y="10" width="3" height="8" fill="currentColor"/><rect x="15" y="7" width="3" height="11" fill="currentColor"/></svg>',
                                    'fa-laptop-code' => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="3" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/><path d="M8 21H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M12 17V21" stroke="currentColor" stroke-width="2"/><path d="M7 9L9 11L13 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                                    'fa-user-tie' => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M5 21C5 16.5817 8.13401 13 12 13C15.866 13 19 16.5817 19 21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M12 13V17" stroke="currentColor" stroke-width="2"/><path d="M10 15H14" stroke="currentColor" stroke-width="2"/></svg>',
                                );
                                echo isset($svg_icons[$service['icon']]) ? $svg_icons[$service['icon']] : '<i class="fas ' . esc_attr($service['icon']) . '"></i>';
                                ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($service['title'])) : ?>
                            <h3 class="service-title">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if (!empty($service['excerpt'])) : ?>
                            <p class="service-excerpt">
                                <?php echo esc_html($service['excerpt']); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (!empty($service['link'])) : ?>
                            <a href="<?php echo esc_url($service['link']); ?>" class="service-link">
                                Loe edasi
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
