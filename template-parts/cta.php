<?php
/**
 * Template part for displaying the CTA (Call-to-Action) section
 *
 * @package KM_Personal
 */

// Get ACF fields
$cta_heading = get_field('cta_heading');
$cta_text = get_field('cta_text');
$cta_primary_btn_text = get_field('cta_primary_button_text');
$cta_primary_btn_link = get_field('cta_primary_button_link');
$cta_secondary_btn_text = get_field('cta_secondary_button_text');
$cta_secondary_btn_link = get_field('cta_secondary_button_link');
$cta_email = get_field('cta_email');
$cta_phone = get_field('cta_phone');

// Set defaults
$cta_heading = $cta_heading ?: 'VALMIS ALUSTAMA?';
$cta_text = $cta_text ?: 'Broneeri oma tasuta konsultatsioon juba täna ja alustame teie ettevõtte personalijuhtimise paremaks tegemist!';
$cta_primary_btn_text = $cta_primary_btn_text ?: 'Broneeri tasuta konsultatsioon';
$cta_primary_btn_link = $cta_primary_btn_link ?: '/#broneerimine';
$cta_secondary_btn_text = $cta_secondary_btn_text ?: 'Helista kohe';
$cta_secondary_btn_link = $cta_secondary_btn_link ?: 'tel:+37256283286';
$cta_email = $cta_email ?: 'info@kmpersonal.ee';
?>

<section class="cta-section" id="kontakt">
    <div class="container">

        <?php if ($cta_heading) : ?>
            <h2 class="cta-title">
                <?php echo esc_html($cta_heading); ?>
            </h2>
        <?php endif; ?>

        <?php if ($cta_text) : ?>
            <p class="cta-text">
                <?php echo esc_html($cta_text); ?>
            </p>
        <?php endif; ?>

        <div class="cta-buttons">
            <?php if ($cta_primary_btn_text && $cta_primary_btn_link) : ?>
                <a href="<?php echo esc_url($cta_primary_btn_link); ?>" class="btn btn-light btn-large">
                    <?php echo esc_html($cta_primary_btn_text); ?>
                </a>
            <?php endif; ?>

            <?php if ($cta_secondary_btn_text && $cta_secondary_btn_link) : ?>
                <a href="<?php echo esc_url($cta_secondary_btn_link); ?>" class="btn btn-outline-light">
                    <?php echo esc_html($cta_secondary_btn_text); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="cta-contact-info">
            <div class="cta-contact-grid">
                <div class="cta-contact-item">
                    <h4>KMpersonal OÜ</h4>
                    <p>Registrikood: 17286377</p>
                    <p>KMKR: EE102882427</p>
                    <p>IBAN: EE942200221092169893</p>
                </div>
                <div class="cta-contact-item">
                    <h4>Telefon</h4>
                    <p><a href="tel:+37256283286">+372 56283286</a></p>
                </div>
                <div class="cta-contact-item">
                    <h4>Email</h4>
                    <p><a href="mailto:karen@kmpersonal.ee">karen@kmpersonal.ee</a></p>
                    <p><a href="mailto:marina@kmpersonal.ee">marina@kmpersonal.ee</a></p>
                </div>
                <div class="cta-contact-item">
                    <h4><a href="<?php echo esc_url(home_url('/kkk/')); ?>">KKK</a></h4>
                </div>
            </div>
        </div>

    </div>

    <!-- Decorative circles -->
    <div class="decorative-circle circle-cta-1"></div>
    <div class="decorative-circle circle-cta-2"></div>
</section>
