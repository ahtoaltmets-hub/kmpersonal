<?php
/**
 * Template part for displaying the Mission section
 *
 * @package KM_Personal
 */

// Get ACF fields
$mission_heading = get_field('mission_heading');
$mission_text = get_field('mission_text');
$values = get_field('values');

// Set defaults
$mission_heading = $mission_heading ?: 'MEIE EESMÄRK';
$mission_text = $mission_text ?: 'Viia professionaalne personalijuhtimine igasse organisatsiooni – sõltumata töötajate arvust või tegevuspiirkonnast. Meie eesmärk on muuta personalitugi kättesaadavaks ka neile ettevõtetele, kellel puudub oma personaliosakond, kuid kellel on selge vajadus teadmiste, süsteemide ja inimkesksete lahenduste järele.';

// Default values if ACF repeater is empty
if (empty($values)) {
    $values = array(
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
    );
}
?>

<section class="mission" id="meist">
    <div class="container">

        <?php if ($mission_heading) : ?>
            <h2 class="section-title">
                <?php echo esc_html($mission_heading); ?>
            </h2>
        <?php endif; ?>

        <?php if ($mission_text) : ?>
            <p class="mission-text">
                <?php echo esc_html($mission_text); ?>
            </p>
        <?php endif; ?>

        <?php if ($values) : ?>
            <div class="values-grid">
                <?php foreach ($values as $value) : ?>
                    <div class="value-card">
                        <?php if (!empty($value['icon'])) : ?>
                            <div class="value-icon">
                                <i class="fas <?php echo esc_attr($value['icon']); ?>"></i>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($value['title'])) : ?>
                            <h3 class="value-title">
                                <?php echo esc_html($value['title']); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if (!empty($value['description'])) : ?>
                            <p class="value-description">
                                <?php echo esc_html($value['description']); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>

    <!-- Decorative circles -->
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>
</section>
