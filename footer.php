<?php
/**
 * The template for displaying the footer
 *
 * @package KM_Personal
 */
?>

<?php
// Include CTA section on all pages
get_template_part('template-parts/cta');
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Footer Logo -->
            <div class="footer-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="site-name"><?php bloginfo('name'); ?></span>
                <?php endif; ?>
            </div>

            <!-- Footer Menu -->
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer-menu',
                    'container' => false,
                    'fallback_cb' => false,
                ));
                ?>
            </nav>

            <!-- Footer Info -->
            <div class="footer-info">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('Kõik õigused kaitstud.', 'kmpersonal'); ?></p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
