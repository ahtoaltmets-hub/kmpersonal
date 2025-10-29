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
                                <i class="fas <?php echo esc_attr($service['icon']); ?>"></i>
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
