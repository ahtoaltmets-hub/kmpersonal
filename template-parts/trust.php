<?php
/**
 * Template part for displaying the Trust section
 *
 * @package KM_Personal
 */

// Get ACF fields
$trust_heading = get_field('trust_heading');
$trust_text = get_field('trust_text');
$trust_image = get_field('trust_image');
$trust_button_text = get_field('trust_button_text');
$trust_button_link = get_field('trust_button_link');

// Set defaults
$trust_heading = $trust_heading ?: 'KA SIIS, KUI ON RASKE JA TORMINE!';
$trust_text = $trust_text ?: 'Meie eesmärk on luua pikaajalisi koostöösuhteid, kus meie klient saab kindel olla, et kogu töötaja elukaarega seotud personalitöö on läbimõeldult hallatud – alates tööle võtmisest kuni lahkumiseni. Kõik dokumendid, protsessid ja nõuded on korrektselt vormistatud, et sinu ettevõttes valitseks selgus, süsteemsus ja turvatunne.';
$trust_button_text = $trust_button_text ?: 'Võta ühendust';
$trust_button_link = $trust_button_link ?: '#kontakt';
?>

<section class="trust" id="turvatunne">
    <div class="container">
        <div class="trust-grid">

            <!-- Image Column -->
            <div class="trust-image">
                <?php if ($trust_image) : ?>
                    <?php if (is_array($trust_image)) : ?>
                        <img src="<?php echo esc_url($trust_image['url']); ?>"
                             alt="<?php echo esc_attr($trust_image['alt'] ?: $trust_heading); ?>"
                             loading="lazy">
                    <?php else : ?>
                        <img src="<?php echo esc_url($trust_image); ?>"
                             alt="<?php echo esc_attr($trust_heading); ?>"
                             loading="lazy">
                    <?php endif; ?>
                <?php else : ?>
                    <!-- Placeholder image if none is uploaded -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lighthouse-placeholder.jpg"
                         alt="<?php echo esc_attr($trust_heading); ?>"
                         loading="lazy">
                <?php endif; ?>
            </div>

            <!-- Content Column -->
            <div class="trust-content">
                <?php if ($trust_heading) : ?>
                    <h2 class="trust-title">
                        <?php echo wp_kses_post(nl2br($trust_heading)); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($trust_text) : ?>
                    <p class="trust-text">
                        <?php echo esc_html($trust_text); ?>
                    </p>
                <?php endif; ?>

                <?php if ($trust_button_text && $trust_button_link) : ?>
                    <a href="<?php echo esc_url($trust_button_link); ?>" class="btn btn-primary">
                        <?php echo esc_html($trust_button_text); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
