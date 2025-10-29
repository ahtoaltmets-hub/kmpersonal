# Broneerimissüsteemi Juhend

## 📅 Mis Lisandus?

Esilehele lisati **interaktiivne broneerimiskalender**, kus külastajad saavad broneerida tasuta konsultatsiooni.

### Kaks Varianti:

## 1️⃣ Calendly Integratsioon (Soovitatud) ⭐

**Miks kasutada:**
- ✅ Professionaalne
- ✅ Automaatsed e-mailid
- ✅ Google Calendar sünkroonimine
- ✅ Zoom/Teams integratsioon
- ✅ Tasuta kuni 1 kalendri jaoks

**Kuidas seadistada:**

### Samm 1: Loo Calendly Konto
1. Mine: https://calendly.com/
2. Registreeru tasuta kontoga
3. Sisesta oma nimi ja email

### Samm 2: Seadista Konsultatsiooni Tüüp
1. Calendly's: "Create New Event Type"
2. Nimetus: "Tasuta konsultatsioon"
3. Kestus: 30 minutit
4. Asukoht: Zoom/Teams või Telefon
5. Töötunnid: E-R 9:00-17:00

### Samm 3: Kopeeri URL
1. Calendly's: "Copy Link"
2. Näide: `https://calendly.com/kmpersonal/konsultatsioon`

### Samm 4: Lisa WordPressisse
1. WordPress admin: Muuda avaleht
2. Leia "Booking Section" ACF väljad
3. **Booking Type:** Vali "Calendly Integration"
4. **Calendly URL:** Kleebi oma link
5. Salvesta

✅ **Valmis!** Kalender ilmub automaatselt avalehele.

---

## 2️⃣ Custom Kalender (Oma Lahendus)

**Miks kasutada:**
- ✅ Täielik kontroll
- ✅ Bränditud disain
- ✅ Andmed jäävad sinu serverisse

**Kuidas kasutada:**

### WordPressis:
1. Muuda avaleht
2. "Booking Section" → **Booking Type:** Vali "Custom Calendar"
3. Salvesta

### Funktsioonid:
- 📅 Interaktiivne kalender
- ⏰ Ajapesad (9:00 - 17:00)
- 📝 Broneerimise vorm
- ✉️ Kliendi andmete kogumine

### Tähelepanu:
**Custom kalender vajab backend integratsiooni!**

Praegu see:
- ✅ Näitab kalendrit
- ✅ Laseb valida kuupäevi ja aegu
- ✅ Kogub andmeid vormis
- ❌ EI SALVESTA andmeid (vajab backend'i)

**Backend võimalused:**
1. **WordPress Plugin:** WP Booking Calendar, Bookly
2. **Custom PHP:** Salvesta WordPress andmebaasi
3. **API integratsioon:** Google Calendar API, proprietary API

---

## 🎨 Disain

### Värvid:
- Valitud kuupäev: Tumeroheline (#214945)
- Hover: Beež (#FCF7F0)
- Valitud aeg: Tumeroheline
- Pole saadaval: Hall

### Layout:
- **Vasakul:** Kalender (kuupäevad)
- **Paremal:** Ajapesad + vorm
- **Mobiil:** Kalender üleval, ajad all (vertikaalne)

---

## ⚙️ Seadistused

### WordPressi ACF Väljad:

**Booking Section:**
- `booking_heading` - Pealkiri (default: "BRONEERI TASUTA KONSULTATSIOON")
- `booking_subtitle` - Alapealkiri
- `booking_description` - Lisainfo (optional)
- `booking_type` - Vali: Calendly või Custom
- `calendly_url` - Sinu Calendly link (kui Calendly)

### Failid:
```
template-parts/booking.php      - Booking sektsiooni template
assets/css/homepage.css         - Kalendri CSS (rida 403-679)
assets/js/booking-calendar.js   - Kalendri JavaScript
functions.php                   - ACF väljad (rida 553-621)
```

---

## 📱 Kasutamine (Kliendi Vaade)

### Samm 1: Vali Kuupäev
- Vajuta kalendris kuupäevale
- Mineviku ja nädalavahetuse kuupäevad on keelatud

### Samm 2: Vali Kellaaeg
- Vasakul ilmuvad saadaolevad ajad
- Hõivatud ajad on hallid (pole klikitavad)

### Samm 3: Täida Vorm
- Nimi
- E-mail
- Telefon
- Lühike sõnum (optional)

### Samm 4: Kinnita
- Vajuta "Kinnita broneering"
- Saad kinnituse e-mailiga (Calendly puhul)

---

## 🔧 Kohandamine

### Muuda Tööaegu:

`assets/js/booking-calendar.js` - rida 12:

```javascript
const availableSlots = [
    '09:00', '09:30', '10:00', '10:30',
    '11:00', '11:30', '12:00', '12:30',
    '13:00', '13:30', '14:00', '14:30',
    '15:00', '15:30', '16:00', '16:30'
];
```

Lisa või eemalda aegu vastavalt vajadusele.

### Keela Nädalavahetused:

Juba keelatud! Vaata `booking-calendar.js` rida 67:

```javascript
const isWeekend = dayDate.getDay() === 0 || dayDate.getDay() === 6;
```

### Muuda Värvid:

`assets/css/homepage.css`:

```css
.calendar-day.selected {
  background: var(--dark-green);  /* Muuda siit */
  color: var(--white);
}
```

---

## 🚀 Paigaldamine

### Demo:
- ✅ Juba paigaldatud `demo.html`
- ✅ Töötab kohe
- ❌ Ei salvesta päriselt andmeid

### WordPress:
1. ✅ Template olemas: `template-parts/booking.php`
2. ✅ CSS lisatud: `assets/css/homepage.css`
3. ✅ JavaScript lisatud: `assets/js/booking-calendar.js`
4. ✅ ACF väljad olemas: `functions.php`
5. ✅ Lisatud `front-page.php`'sse

**Vaja teha:**
- Täida ACF väljad WordPressis
- Lisa Calendly URL (soovitatud)
- VÕI seadista backend custom kalendri jaoks

---

## 📊 Custom Kalendri Backend

### Variant 1: WordPress Plugin (Lihtsaim)

**Soovitatud pluginad:**
- **Bookly** - https://wordpress.org/plugins/bookly-responsive-appointment-booking-tool/
- **Amelia** - https://wordpress.org/plugins/ameliabooking/
- **Simply Schedule Appointments** - https://wordpress.org/plugins/simply-schedule-appointments/

### Variant 2: Custom PHP

Lisa `functions.php`:

```php
// Handle booking form submission
add_action('wp_ajax_book_appointment', 'handle_booking');
add_action('wp_ajax_nopriv_book_appointment', 'handle_booking');

function handle_booking() {
    // Get POST data
    $datetime = sanitize_text_field($_POST['datetime']);
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);

    // Save to database or send email
    wp_mail(
        get_option('admin_email'),
        'Uus broneering',
        "Klient: $name\nEmail: $email\nTelefon: $phone\nAeg: $datetime\nSõnum: $message"
    );

    wp_send_json_success(['message' => 'Broneering salvestatud!']);
}
```

Muuda `booking-calendar.js` (rida 148):

```javascript
// Send to server
fetch('/wp-admin/admin-ajax.php?action=book_appointment', {
    method: 'POST',
    body: new FormData(appointmentForm)
})
.then(response => response.json())
.then(data => {
    alert('✅ Broneering kinnitatud!');
});
```

---

## ❓ KKK

**K: Kas Calendly on tasuta?**
V: Jah, tasuta versioon võimaldab 1 kalendri ja piiramatu arvu broneeringuid.

**K: Kas custom kalender töötab kohe?**
V: Kalender näitab, aga andmeid ei salvesta. Vajab backend integratsiooni.

**K: Kumb variant on parem?**
V: **Calendly** - lihtsam, professionaalsem, töötab kohe!
   **Custom** - kui tahad täielikku kontrolli ja oma brändi.

**K: Kuidas muuta ajapesi?**
V: Muuda `assets/js/booking-calendar.js` failis `availableSlots` massiivi.

**K: Kas töötab mobiilis?**
V: Jah! Täielikult responsiivne. Mobiilis kalender üleval, ajad all.

**K: Kuidas lisada Google Calendar integratsioon?**
V: Kasuta Calendly't - see sünkroneerib automaatselt.

---

## 📞 Tugi

**Calendly abi:**
- https://help.calendly.com/

**Custom kalendri täiendamine:**
- Vaja backend arendust
- Soovitame kasutada WordPress booking pluginat

---

**Edu broneerimiskalendri kasutamisel! 📅**
