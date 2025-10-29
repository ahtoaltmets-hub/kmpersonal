<?php
/**
 * Template Name: Meist
 * Description: About Us page for KM Personal
 *
 * @package KM_Personal
 */

get_header(); ?>

<main id="main" class="site-main about-page" role="main">

    <!-- About Hero -->
    <section class="about-hero">
        <div class="container">
            <h1 class="page-title">MEIST</h1>
            <p class="page-subtitle">Oleme mõttepartnerid ja liitlased, kes aitavad luua toimivaid süsteeme</p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="about-story">
        <div class="container">
            <h2>Meie Lugu</h2>
            <div class="story-content">
                <p>KM Personal sündis personalispetsialistide kogemusest. Me nägime, et väikesed ja keskmise suurusega ettevõtted ei oma sageli pühendatud personali, kes süsteemselt haldaks personali- ja töökohaküsimusi.</p>

                <p>Juhid rabelesid nii määruste kui ka töötajate probleemidega, püüdes samal ajal oma ettevõtteid kasvatada. See lõhe inspireeris meid looma <strong>paindlikku ja professionaalset tuge täpselt siis, kui seda kõige rohkem vajatakse</strong>.</p>

                <div class="story-highlight">
                    "Meie lähenemine ühendab kättesaadavuse praktilisusega – muutes keerulise seadusandluse mõistetavateks lahendusteks."
                </div>

                <p>Usume, et toimivad personaliprotsessid, selge tööorganisatsioon ja turvaline töökeskkond võimaldavad juhtidel ja meeskondadel keskenduda põhitegevuse kasvule, samal ajal kui personalitöö jääb turvaliseks.</p>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="about-philosophy">
        <div class="container">
            <h2>Meie Filosoofia</h2>
            <div class="philosophy-content">
                <p>Usume, et iga organisatsioon väärib professionaalset personalituge – olenemata suurusest või valdkonnast. Meie eesmärk on olla partner, kes mõtleb teiega kaasa, mõistab teie väljakutseid ja loob lahendusi, mis töötavad ka siis, kui juhtimisel pole aega detailideks.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="about-team">
        <div class="container">
            <h2>Meie Meeskond</h2>

            <div class="team-grid">

                <!-- Karen Mutle -->
                <div class="team-member">
                    <div class="team-photo">
                        <div class="team-photo-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="team-name">Karen Mutle</h3>
                    <p class="team-role">Personalispetsialist & Töökeskkonna Ekspert</p>

                    <div class="team-strengths">
                        <h4>Tugevused:</h4>
                        <ul>
                            <li>Süsteemne mõtlemine</li>
                            <li>Inimkeskne lähenemine</li>
                            <li>Strateegiline perspektiiv</li>
                        </ul>
                    </div>

                    <p class="team-description">Ekspert personaliprotsesside, töökoha organiseerimise ja turvalist keskkonna loomisel.</p>

                    <div class="team-contact">
                        <a href="mailto:karen@kmpersonal.ee">
                            <i class="fas fa-envelope"></i> karen@kmpersonal.ee
                        </a>
                        <a href="tel:+37256283286">
                            <i class="fas fa-phone"></i> +372 5628 3286
                        </a>
                    </div>
                </div>

                <!-- Marina Rodina -->
                <div class="team-member">
                    <div class="team-photo">
                        <div class="team-photo-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="team-name">Marina Rodina</h3>
                    <p class="team-role">Personalipartner</p>

                    <div class="team-strengths">
                        <h4>Kogemus:</h4>
                        <ul>
                            <li>13+ aastat personalitöös</li>
                            <li>Töötajate arendamine</li>
                            <li>Organisatsioonikultuuri tugevdamine</li>
                        </ul>
                    </div>

                    <p class="team-description">Keskendub töötajate arengule, sujuvamatele protsessidele ja tugevama organisatsioonikultuuri loomisele.</p>

                    <div class="team-contact">
                        <a href="mailto:marina@kmpersonal.ee">
                            <i class="fas fa-envelope"></i> marina@kmpersonal.ee
                        </a>
                        <a href="tel:+37258414096">
                            <i class="fas fa-phone"></i> +372 58414096
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="about-clients">
        <div class="container">
            <h2>Meie Kliendid</h2>

            <div class="clients-grid">
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/amv-logo.png" alt="AMV Metall">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/centrum.png" alt="Viljandi Centrum">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/kmtransport.png" alt="KM Transport">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/magusattuba.png" alt="Magusattuba">
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
