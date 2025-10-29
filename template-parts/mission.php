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
            'icon' => 'fa-sync-alt',
            'title' => 'Paindlikkus',
            'description' => 'Iga organisatsioon on erinev – meie lahendused kohanduvad teie vajaduste, tempo ja tööstiiliga.',
        ),
        array(
            'icon' => 'fa-heart',
            'title' => 'Inimlikkus',
            'description' => 'Meie töös on keskmes inimene – kuulame, mõistame ja loome lahendusi, mis toetavad päriselt teie meeskonda.',
        ),
        array(
            'icon' => 'fa-chess-knight',
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
                                <?php
                                // SVG icons as fallback
                                $svg_icons = array(
                                    'fa-sync-alt' => '<svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                                    'fa-heart' => '<svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.84 4.61C19.5 3.28 17.76 2.5 15.92 2.5C14.08 2.5 12.34 3.28 11 4.61L10 5.61L9 4.61C7.66 3.28 5.92 2.5 4.08 2.5C2.24 2.5 0.5 3.28 0.16 4.61C-0.18 5.94 0.16 7.5 1.5 8.84L10 17.34L18.5 8.84C19.84 7.5 20.18 5.94 19.84 4.61C19.5 3.28 17.76 2.5 15.92 2.5Z" fill="currentColor" transform="translate(2, 3)"/></svg>',
                                    'fa-chess-knight' => '<svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="2" fill="currentColor"/><line x1="12" y1="2" x2="12" y2="6" stroke="currentColor" stroke-width="2"/><line x1="12" y1="18" x2="12" y2="22" stroke="currentColor" stroke-width="2"/></svg>',
                                );
                                echo isset($svg_icons[$value['icon']]) ? $svg_icons[$value['icon']] : '<i class="fas ' . esc_attr($value['icon']) . '"></i>';
                                ?>
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
