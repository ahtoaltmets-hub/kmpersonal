<?php
/**
 * Template Name: Homepage
 *
 * The homepage template for KM Personal
 *
 * @package KM_Personal
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php
    // Include all homepage sections
    get_template_part('template-parts/hero');
    get_template_part('template-parts/mission');
    // Trust section removed
    get_template_part('template-parts/services-overview');
    get_template_part('template-parts/booking');
    get_template_part('template-parts/testimonials');
    // CTA section now included in footer
    ?>

</main>

<?php get_footer(); ?>
