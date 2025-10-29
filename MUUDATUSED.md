# KM Personal - Muudatused

## 28. Oktoober 2024

### ✅ Lisatud Broneerimiskalender Sektsioon 📅

**Mis lisandus:**
- Interaktiivne broneerimiskalender esilehele
- Võimalus valida kuupäevi ja kellaaegu
- 2 varianti: Calendly integratsioon või custom kalender
- Täielik ACF tugi WordPressis

**Uued failid:**
1. ✅ `template-parts/booking.php` - Broneerimise sektsioon
2. ✅ `assets/js/booking-calendar.js` - Kalendri JavaScript
3. ✅ `BOOKING_JUHEND.md` - Täpne seadistamise juhend

**Muudetud failid:**
1. ✅ `front-page.php` - Lisatud booking sektsioon
2. ✅ `demo.html` - Lisatud custom kalender
3. ✅ `functions.php` - Lisatud ACF väljad (rida 553-621)
4. ✅ `assets/css/homepage.css` - Lisatud kalendri stiilid (rida 403-679)

**Funktsioonid:**
- 📅 Interaktiivne kuude vahetamine
- 🗓️ Kuupäeva valimine (mineviku ja nädalavahetused keelatud)
- ⏰ Ajapesade valimine (9:00-17:00)
- 📝 Broneerimise vorm (nimi, email, telefon)
- 📱 Täielikult responsiivne
- 🎨 KM Personal brändi värvides

**2 Varianti:**

**1. Calendly Integratsioon (Soovitatud):**
- Professionaalne ja lihtne
- Automaatsed meeldetuletused
- Google Calendar sünkroonimine
- Tasuta kuni 1 kalendri jaoks
- Seadistamine: vaata `BOOKING_JUHEND.md`

**2. Custom Kalender:**
- Täielik kontroll
- Oma bränditud disain
- Vajab backend integratsiooni (praegu ainult frontend)
- Andmed jäävad sinu serverisse

**Kus asub:**
- Sektsioonide järjekord: Hero → Mission → Services → Testimonials → **CTA** → **BOOKING**
- **Bonuus:** CTA nupp "Broneeri tasuta konsultatsioon" kerib automaatselt alla broneerimiskalendri juurde!

**ACF Väljad WordPressis:**
- `booking_heading` - Pealkiri
- `booking_subtitle` - Alapealkiri
- `booking_description` - Kirjeldus (optional)
- `booking_type` - Vali: Calendly või Custom
- `calendly_url` - Sinu Calendly link

**Seadistamine:**
Vaata täpset juhendit: `BOOKING_JUHEND.md`

---

### ✅ Eemaldatud Trust Sektsioon

**Mis muutus:**
- Trust sektsioon ("KA SIIS, KUI ON RASKE JA TORMINE!") eemaldatud
- Nüüd on **6 sektsiooni** (oli 6, eemaldati 1, lisati 1)

**Muudetud failid:**
1. ✅ `front-page.php` - eemaldatud `get_template_part('template-parts/trust')`
2. ✅ `demo.html` - eemaldatud trust HTML sektsioon

**Praegused sektsioonid:**
1. Hero - Peamine hero sektsioon
2. Mission - Missiooni kirjeldus + 3 väärtust
3. Services - 4 teenuse kaarti
4. Testimonials - Klientide tagasiside slideshow
5. CTA - Kontaktisektsioon (sisaldab nuppu, mis viib broneerimisele)
6. **Booking - Broneerimiskalender** ⭐ UUS!

**ACF väljad:**
Trust sektsiooni ACF väljad on jäetud `functions.php` faili, kuid need ei ole enam nähtavad/kasutusel.

**Kui tahad Trust sektsiooni tagasi:**
1. Ava `front-page.php`
2. Lisa rida 18 tagasi:
   ```php
   get_template_part('template-parts/trust');
   ```
3. Salvesta

---

## Kokkuvõte

**Kokku 6 sektsiooni:**
1. ✅ Hero
2. ✅ Mission
3. ✅ Services
4. ✅ Testimonials
5. ✅ CTA (CTA nupp viib automaatselt broneerimisele)
6. ✅ **Booking** (UUS! 📅)

**Eemaldatud:**
- ❌ Trust section

**Lisatud:**
- ✅ Booking calendar section
- ✅ Calendly integration
- ✅ Custom calendar widget
- ✅ Booking JavaScript
- ✅ Täpne juhend (BOOKING_JUHEND.md)

**Testimine:**
- ✅ Demo.html värskendatud ja avatud brauseris
- ✅ WordPressi template värskendatud
- ✅ Kalender töötab (vali kuupäev → vali aeg → täida vorm)
- ✅ Responsiivne mobiilis
