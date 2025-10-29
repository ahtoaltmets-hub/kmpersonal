# KM Personal - Lokaalne Paigaldus

## Variant 1: Local by Flywheel (Kõige Lihtsam) ⭐ SOOVITATUD

### Samm 1: Paigalda Local by Flywheel

1. Lae alla: https://localwp.com/
2. Paigalda programm
3. Käivita Local

### Samm 2: Loo Uus WordPressi Sait

1. Local'is vajuta **"+ Create a new site"**
2. Sisesta saidi nimi: **KM Personal**
3. Vali **Preferred** keskkond
4. Sisesta admin andmed:
   - Username: `admin`
   - Password: `admin` (või turvaline parool)
   - Email: `admin@kmpersonal.local`
5. Vajuta **Add Site**

### Samm 3: Paigalda Teema

1. Kui sait on loodud, vajuta **"Go to site folder"**
2. Liigu kausta: `app/public/wp-content/themes/`
3. Kopeeri KOGU `kmpersonal` kaust sinna
4. Tagasi Local'is vajuta **"Admin"** (avaneb WordPress admin)
5. Logi sisse (admin / sinu parool)

### Samm 4: Aktiveeri Teema

1. WordPress adminis: **Välimus** > **Teemad**
2. Leia **KM Personal** teema
3. Vajuta **Aktiveeri**

### Samm 5: Paigalda ACF Plugin

1. **Pistikprogrammid** > **Lisa uus**
2. Otsi: **Advanced Custom Fields**
3. Vajuta **Paigalda kohe**
4. Vajuta **Aktiveeri**

### Samm 6: Loo Avaleht

1. **Lehed** > **Lisa uus**
2. Pealkiri: **Avaleht**
3. Vajuta **Avalda**
4. **Seaded** > **Lugemine**
5. Vali **Staatiline leht**
6. Avalehena vali äsja loodud **Avaleht**
7. Salvesta muudatused

### Samm 7: Täida Sisu

1. Mine tagasi **Lehed** > **Avaleht** > **Muuda**
2. Keeri alla - näed 6 ACF välja gruppi:
   - Hero Section
   - Mission Section
   - Trust Section
   - Services Section
   - Testimonials Section
   - CTA Section
3. Täida väljad (vaata `CONTENT.md` faili vaikesisu jaoks)
4. Laadi üles pildid
5. Vajuta **Uuenda**

### Samm 8: Vaata Saiti

Local'is vajuta **"Open Site"** - sait avaneb brauseris!

---

## Variant 2: MAMP (macOS/Windows)

### Samm 1: Paigalda MAMP

1. Lae alla: https://www.mamp.info/
2. Paigalda MAMP
3. Käivita MAMP

### Samm 2: Lae alla WordPress

1. Mine: https://wordpress.org/download/
2. Lae alla uusim WordPress
3. Paki lahti `htdocs` kausta MAMP'is:
   - macOS: `/Applications/MAMP/htdocs/kmpersonal/`
   - Windows: `C:\MAMP\htdocs\kmpersonal\`

### Samm 3: Loo Andmebaas

1. MAMP'is vajuta **Start Servers**
2. Ava brauser: `http://localhost:8888/phpMyAdmin/`
3. Vajuta **Andmebaasid** (Databases)
4. Loo uus andmebaas nimega: `kmpersonal`

### Samm 4: Paigalda WordPress

1. Ava brauser: `http://localhost:8888/kmpersonal/`
2. Vali keel: **Eesti**
3. Vajuta **Jätka**
4. Sisesta andmebaasi andmed:
   - Andmebaasi nimi: `kmpersonal`
   - Kasutajanimi: `root`
   - Parool: `root`
   - Andmebaasi host: `localhost`
   - Tabeli prefiks: `wp_`
5. Vajuta **Edasta**
6. Sisesta saidi info:
   - Saidi pealkiri: **KM Personal**
   - Kasutajanimi: `admin`
   - Parool: (tugev parool)
   - Email: `admin@kmpersonal.local`
7. Vajuta **Paigalda WordPress**

### Samm 5: Paigalda Teema

1. Kopeeri `kmpersonal` teema kaust:
   - macOS: `/Applications/MAMP/htdocs/kmpersonal/wp-content/themes/`
   - Windows: `C:\MAMP\htdocs\kmpersonal\wp-content\themes\`
2. Logi WordPressisse sisse: `http://localhost:8888/kmpersonal/wp-admin/`
3. **Välimus** > **Teemad** > Aktiveeri **KM Personal**

### Samm 6-8: Sama kui Variant 1

---

## Variant 3: XAMPP (Windows/Mac/Linux)

### Samm 1: Paigalda XAMPP

1. Lae alla: https://www.apachefriends.org/
2. Paigalda XAMPP
3. Käivita XAMPP Control Panel

### Samm 2: Käivita Serverid

1. XAMPP Control Panel'is:
2. Vajuta **Start** Apache juures
3. Vajuta **Start** MySQL juures

### Samm 3: Lae alla WordPress

1. Lae alla WordPress: https://wordpress.org/download/
2. Paki lahti `htdocs` kausta:
   - Windows: `C:\xampp\htdocs\kmpersonal\`
   - macOS: `/Applications/XAMPP/htdocs/kmpersonal/`
   - Linux: `/opt/lampp/htdocs/kmpersonal/`

### Samm 4: Loo Andmebaas

1. Ava brauser: `http://localhost/phpmyadmin/`
2. Vajuta **New** (Uus)
3. Andmebaasi nimi: `kmpersonal`
4. Vajuta **Create** (Loo)

### Samm 5: Paigalda WordPress

1. Ava brauser: `http://localhost/kmpersonal/`
2. Järgi paigalduse samme (nagu MAMP variant)
3. Andmebaasi andmed:
   - Nimi: `kmpersonal`
   - Kasutaja: `root`
   - Parool: `` (tühi)
   - Host: `localhost`

### Samm 6-8: Sama kui Variant 1

---

## Kiire Testimine (Ilma WordPressita)

Kui tahad lihtsalt HTML/CSS-i vaadata:

### Loo HTML Demo Fail

Loo fail `demo.html`:

```html
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KM Personal - Demo</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/homepage.css">
</head>
<body>

<!-- Hero Section -->
<section class="hero" style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920');">
    <div class="hero-overlay">
        <div class="hero-content container">
            <div class="hero-badge">✨ Esimene konsultatsioon TASUTA! ✨</div>
            <h1 class="hero-title">KAASA PERSONALIPARTNER<br>TÄPSELT SIIS, KUI VAJAD!</h1>
            <p class="hero-subtitle">Pakume paindlikke ja professionaalseid personalilahendusi ettevõtetele</p>
            <div class="hero-buttons">
                <a href="#kontakt" class="btn btn-primary">Broneeri konsultatsioon</a>
                <a href="#teenused" class="btn btn-secondary">Vaata teenuseid</a>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission">
    <div class="container">
        <h2 class="section-title">MEIE EESMÄRK</h2>
        <p class="mission-text">Viia professionaalne personalijuhtimine igasse organisatsiooni</p>

        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-arrows-alt"></i></div>
                <h3 class="value-title">Paindlikkus</h3>
                <p class="value-description">Meie lahendused kohanduvad teie vajadustega</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-heart"></i></div>
                <h3 class="value-title">Inimlikkus</h3>
                <p class="value-description">Keskmes on inimene</p>
            </div>
            <div class="value-card">
                <div class="value-icon"><i class="fas fa-chess"></i></div>
                <h3 class="value-title">Strateegia</h3>
                <p class="value-description">Pikaajaline mõtlemine</p>
            </div>
        </div>
    </div>
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>
</section>

<script src="assets/js/homepage.js"></script>
</body>
</html>
```

Ava `demo.html` brauseris - näed disaini ilma WordPressita!

---

## Probleemide Lahendamine

### ACF väljad ei ole nähtavad
✅ Kontrolli, et ACF pistik on aktiveeritud
✅ Veendu, et muudad avaleht lehte (front page)

### Pildid ei laadi
✅ WordPress piltide kaust peab olema kirjutatav (permissions 755)
✅ Laadi pildid üles ACF väljade kaudu

### Sait ei ava
✅ MAMP/XAMPP serverid peavad töötama
✅ Kontrolli URL-i: `http://localhost:8888/kmpersonal/`

### Slider ei tööta
✅ Lisa vähemalt 2 testimoniaali
✅ Kontrolli, et homepage.js laeb

---

## Kasulikud Käsud

### Local by Flywheel
- **Ava sait:** Vajuta "Open Site"
- **Ava admin:** Vajuta "Admin"
- **Ava kaust:** Vajuta "Go to site folder"
- **Logi:** Vajuta "Log" (kui on vigu)

### MAMP/XAMPP
- **WordPress admin:** `http://localhost:8888/kmpersonal/wp-admin/`
- **PHPMyAdmin:** `http://localhost:8888/phpmyadmin/`
- **Sait:** `http://localhost:8888/kmpersonal/`

---

## Soovitused

### 1. Kasuta Local by Flywheel
✅ Kõige lihtsam
✅ Ei vaja käsitsi seadistamist
✅ Hea arendajatele

### 2. Test Mobiilis
Oma telefonis:
1. Leia oma arvuti IP: macOS `ifconfig`, Windows `ipconfig`
2. MAMP/XAMPP seadetes luba väline ligipääs
3. Telefonis ava: `http://192.168.x.x:8888/kmpersonal/`

### 3. Loo Backup
Regulaarselt:
- Ekspordi andmebaas (PHPMyAdmin > Export)
- Kopeeri failid

---

## Järgmised Sammud

1. ✅ Paigalda lokaalne keskkond
2. ✅ Aktiveeri teema
3. ✅ Paigalda ACF
4. ✅ Täida sisu (kasuta CONTENT.md)
5. ✅ Testi mobiilis
6. ✅ Testi tahvelarvutis
7. ✅ Optimeeri pildid
8. ✅ Kopeeri tootmisserverisse

---

**Kui sul on küsimusi, vaata:**
- README.md (täielik dokumentatsioon)
- SETUP.md (kiire juhend)
- CONTENT.md (sisu näidised)

Edu! 🚀
