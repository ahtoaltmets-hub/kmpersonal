<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <div class="site-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/170afc4d-1820-4418-bcaf-1b47eab2a553.jpeg" alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php endif; ?>
            </div>

            <!-- Navigation Menu -->
            <nav class="main-navigation">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'primary-menu',
                        'container' => false,
                    ));
                } else {
                    // Fallback menu
                    echo '<ul class="primary-menu">';
                    echo '<li><a href="' . esc_url(home_url('/teenused/')) . '">Teenused</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/meist/')) . '">Meist</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/kontakt/')) . '">Kontakt</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle menu" onclick="this.closest('header').querySelector('.main-navigation').classList.toggle('active')">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
