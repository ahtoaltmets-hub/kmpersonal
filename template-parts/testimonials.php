<?php
/**
 * Template part for displaying the Testimonials section
 *
 * @package KM_Personal
 */

// Get ACF fields
$testimonials_heading = get_field('testimonials_heading');
$testimonials = get_field('testimonials');

// Set defaults
$testimonials_heading = $testimonials_heading ?: 'MIDA MEIE KLIENDID ÜTLEVAD';

// Default testimonials if ACF repeater is empty
if (empty($testimonials)) {
    $testimonials = array(
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
    );
}
?>

<section class="testimonials">
    <div class="container">

        <?php if ($testimonials_heading) : ?>
            <h2 class="section-title">
                <?php echo esc_html($testimonials_heading); ?>
            </h2>
        <?php endif; ?>

        <?php if ($testimonials) : ?>
            <div class="testimonials-slider">
                <?php foreach ($testimonials as $index => $testimonial) : ?>
                    <div class="testimonial-card <?php echo $index === 0 ? 'active' : ''; ?>">

                        <div class="quote-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                            </svg>
                        </div>

                        <?php if (!empty($testimonial['text'])) : ?>
                            <p class="testimonial-text">
                                <?php echo esc_html($testimonial['text']); ?>
                            </p>
                        <?php endif; ?>

                        <div class="testimonial-author">
                            <?php if (!empty($testimonial['client_photo'])) : ?>
                                <div class="author-photo">
                                    <img src="<?php echo esc_url($testimonial['client_photo']); ?>"
                                         alt="<?php echo esc_attr($testimonial['client_name']); ?>"
                                         loading="lazy">
                                </div>
                            <?php endif; ?>

                            <div class="author-info">
                                <?php if (!empty($testimonial['client_name'])) : ?>
                                    <h4 class="author-name">
                                        <?php echo esc_html($testimonial['client_name']); ?>
                                    </h4>
                                <?php endif; ?>

                                <?php if (!empty($testimonial['client_position'])) : ?>
                                    <p class="author-position">
                                        <?php echo esc_html($testimonial['client_position']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (count($testimonials) > 1) : ?>
                <div class="slider-controls">
                    <button class="slider-prev" aria-label="Previous testimonial">‹</button>
                    <div class="slider-dots">
                        <?php foreach ($testimonials as $index => $testimonial) : ?>
                            <button class="dot <?php echo $index === 0 ? 'active' : ''; ?>"
                                    aria-label="Go to testimonial <?php echo $index + 1; ?>"></button>
                        <?php endforeach; ?>
                    </div>
                    <button class="slider-next" aria-label="Next testimonial">›</button>
                </div>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</section>
