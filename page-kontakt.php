<?php
/**
 * Template Name: Kontakt
 * Description: Contact page for KM Personal
 *
 * @package KM_Personal
 */

get_header(); ?>

<main id="main" class="site-main contact-page" role="main">

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <h1 class="page-title">RÄÄGIME!</h1>
            <p class="page-subtitle">Võta meiega ühendust ja leiame vastuse igale personaliküsimusele!</p>
            <div class="free-badge">ESIMENE KONSULTATSIOON TASUTA!</div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">

                <!-- Contact Info -->
                <div class="contact-info-section">
                    <h2>Kontaktandmed</h2>
                    <p>Oleme alati valmis aitama ja vastama teie personaliküsimustele. Võtke julgelt ühendust!</p>

                    <div class="contact-details">

                        <!-- Phone -->
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-item-content">
                                <h3>Telefon</h3>
                                <a href="tel:+37256283286">+372 5628 3286</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-item-content">
                                <h3>E-mail</h3>
                                <a href="mailto:karen@kmpersonal.ee">karen@kmpersonal.ee</a>
                                <a href="mailto:marina@kmpersonal.ee">marina@kmpersonal.ee</a>
                            </div>
                        </div>

                    </div>

                    <!-- Company Info -->
                    <div class="company-info">
                        <h4>Ettevõtte andmed</h4>
                        <div class="company-info-grid">
                            <div class="company-info-item">
                                <strong>Organisatsioon:</strong>
                                KMpersonal OÜ
                            </div>
                            <div class="company-info-item">
                                <strong>Registrikood:</strong>
                                17286377
                            </div>
                            <div class="company-info-item">
                                <strong>KMKR:</strong>
                                EE102882427
                            </div>
                            <div class="company-info-item">
                                <strong>IBAN:</strong>
                                EE942200221092169893
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="social-media">
                        <h4>Jälgi meid</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/KMpersonal" target="_blank" class="social-link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-section">
                    <h2>Saada meile sõnum</h2>
                    <p class="contact-form-intro">Meil on suur rõõm, et meile kirjutad! Täida vorm ja võtame teiega peagi ühendust.</p>

                    <?php echo do_shortcode('[contact-form-7 id="123" title="Kontaktvorm"]'); ?>

                    <!-- Fallback if Contact Form 7 is not installed -->
                    <form class="contact-form" method="post">

                        <div class="form-group">
                            <label for="name">Nimi *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone">
                            <p class="form-note">Valikuline, kuid võimaldab meil teiega kiiremini ühendust võtta</p>
                        </div>

                        <div class="form-group">
                            <label for="subject">Teema *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Vali teema...</option>
                                <option value="konsultatsioon">Tasuta konsultatsioon</option>
                                <option value="paindlik-partner">Paindlik Personalipartner</option>
                                <option value="siseaudit">Siseaudit</option>
                                <option value="tookeskkond">Töökeskkond ja Tööohutus</option>
                                <option value="uuringud">Personaliuuringud</option>
                                <option value="tarkvarad">HR-Tarkvarad</option>
                                <option value="vaikeettevotte">Personalijuht Väikeettevõttesse</option>
                                <option value="muu">Muu küsimus</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Sõnum *</label>
                            <textarea id="message" name="message" required></textarea>
                            <p class="form-note">Kirjelda palun oma vajadust või küsimust</p>
                        </div>

                        <button type="submit" class="btn btn-primary btn-large">
                            Saada sõnum
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
