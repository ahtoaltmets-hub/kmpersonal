<?php
/**
 * Template part for displaying the Hero section
 *
 * @package KM_Personal
 */

// Get ACF fields
$hero_bg = get_field('hero_background_image');
$hero_badge_visible = get_field('hero_badge_visible');
$hero_badge_text = get_field('hero_badge_text');
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_primary_btn_text = get_field('hero_primary_button_text');
$hero_primary_btn_link = get_field('hero_primary_button_link');
$hero_secondary_btn_text = get_field('hero_secondary_button_text');
$hero_secondary_btn_link = get_field('hero_secondary_button_link');

// Set defaults if fields are empty
$hero_title = $hero_title ?: 'KAASA PERSONALIPARTNER TÄPSELT SIIS, KUI VAJAD!';
$hero_subtitle = $hero_subtitle ?: 'Pakume paindlikke ja professionaalseid personalilahendusi ettevõtetele, kes vajavad teadmisi, süsteeme ja tuge – ilma täiskohaga personalispetsialisti palkamata';
$hero_badge_text = $hero_badge_text ?: 'Esimene konsultatsioon TASUTA!';
$hero_primary_btn_text = $hero_primary_btn_text ?: 'Broneeri konsultatsioon';
$hero_primary_btn_link = $hero_primary_btn_link ?: '#kontakt';
$hero_secondary_btn_text = $hero_secondary_btn_text ?: 'Vaata teenuseid';
$hero_secondary_btn_link = $hero_secondary_btn_link ?: '#teenused';
$hero_badge_visible = $hero_badge_visible !== false ? $hero_badge_visible : true;
?>

<section class="hero" style="background-image: url('<?php echo esc_url($hero_bg); ?>');">
    <div class="hero-overlay">
        <div class="hero-content container">

            <?php if ($hero_badge_visible && $hero_badge_text) : ?>
                <div class="hero-badge">
                    <?php echo esc_html($hero_badge_text); ?>
                </div>
            <?php endif; ?>

            <h1 class="hero-title">
                <?php echo wp_kses_post(nl2br($hero_title)); ?>
            </h1>

            <?php if ($hero_subtitle) : ?>
                <p class="hero-subtitle">
                    <?php echo esc_html($hero_subtitle); ?>
                </p>
            <?php endif; ?>

            <div class="hero-buttons">
                <?php if ($hero_primary_btn_text && $hero_primary_btn_link) : ?>
                    <a href="<?php echo esc_url($hero_primary_btn_link); ?>" class="btn btn-primary">
                        <?php echo esc_html($hero_primary_btn_text); ?>
                    </a>
                <?php endif; ?>

                <?php if ($hero_secondary_btn_text && $hero_secondary_btn_link) : ?>
                    <a href="<?php echo esc_url($hero_secondary_btn_link); ?>" class="btn btn-secondary">
                        <?php echo esc_html($hero_secondary_btn_text); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
