<?php
/**
 * Template Name: KKK
 * Description: FAQ page for KM Personal
 *
 * @package KM_Personal
 */

get_header(); ?>

<main id="main" class="site-main services-page" role="main">

    <!-- FAQ Hero -->
    <section class="services-hero">
        <div class="container">
            <h1 class="page-title">KORDUMA KIPPUVAD KÜSIMUSED</h1>
            <p class="page-subtitle">Vastused kõige sagedamini esitatud küsimustele meie teenuste kohta</p>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="faq-accordion-section" style="padding: 80px 0;">
        <div class="container">

            <div class="faq-accordion">
                <div class="faq-accordion-item">
                    <button class="faq-accordion-question">
                        <span>Millise suurusega ettevõttel oleks mõistlik kaasata väline personalipartner?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-accordion-answer">
                        <p>Personalitugi on väärtuslik, kui on vaja käsitleda töölepinguid, tööorganisatsiooni või töökohaga seotud küsimusi. Eriti kasulik on see mikro- ja väikeettevõtetele (1–50 töötajat), kellel puudub oma personalispetsialist. Suurim vajadus välise spetsialisti kaasamiseks on siis, kui töötajaid on 20–40.</p>
                    </div>
                </div>

                <div class="faq-accordion-item">
                    <button class="faq-accordion-question">
                        <span>Kas teenus on ühekordne või saab abi ka pikaajaliselt?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-accordion-answer">
                        <p>Teenuseid saab kasutada nii ühekordsete sekkumistena konkreetsete vajaduste korral kui ka pikaajalise toe saamiseks. Ühekordsed teenused lahendavad kiireloomulisi probleeme, nagu ettevalmistus Tööinspektsiooni kontrolliks. Paljud kliendid kasutavad kuupõhiseid teenuseid, et tagada abi olemasolu vajadusel.</p>
                    </div>
                </div>

                <div class="faq-accordion-item">
                    <button class="faq-accordion-question">
                        <span>Kuidas toimub suhtlus ja kujuneb teenuse maksumus?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-accordion-answer">
                        <p>Suhtlus on paindlik – e-posti, telefoni, video- või isiklike kohtumiste kaudu, sealhulgas regulaarsed ettevõtte külastused. Hinnakujundus sõltub töömahust, koostöö kestusest ja konkreetsetest vajadustest. Esmane konsultatsioon on alati tasuta ja selgitab nõudeid ning sobivat koostöö formaati.</p>
                    </div>
                </div>

                <div class="faq-accordion-item">
                    <button class="faq-accordion-question">
                        <span>Kas saan tuge ka keerulistes personaliküsimustes?</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-accordion-answer">
                        <p>Jah, toe saamiseks on olemas keerulistes personaliolukordades, sealhulgas konfliktide lahendamine, töötaja vabastamine ja tundlikud küsimused. Teenused pakuvad humaanse, seadusliku ja organisatsioonile sobiva lahenduse, mis toetab meeskonna toimimist ja ettevõtte usaldusväärsust.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<script>
// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.faq-accordion-question').forEach(button => {
        button.addEventListener('click', () => {
            const item = button.parentElement;
            const isActive = item.classList.contains('active');

            // Close all items
            document.querySelectorAll('.faq-accordion-item').forEach(i => {
                i.classList.remove('active');
            });

            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php get_footer(); ?>
