# KM Personal - Kiirjuhend (Eesti keeles)

## 🚀 Kiire Start - 3 Võimalust

### 1️⃣ KIIREIM: Vaata Kohe Demo't

```bash
# Lihtsalt ava fail oma brauseris:
open demo.html
```

Või topeltklõpsa `demo.html` failil Finderis.

**See näitab:**
✅ Kõik 6 sektsiooni
✅ Disain ja värvid
✅ Animatsioonid
✅ Responsiivne disain (muuda brauseri suurust)

**Ei näita:**
❌ WordPressi admin paneeli
❌ ACF välju
❌ Dünaamilist sisu muutmist

---

### 2️⃣ SOOVITATAV: Local by Flywheel

**Kõige lihtsam WordPressi seadistus!**

1. **Lae alla Local:**
   - Mine: https://localwp.com/
   - Lae alla ja paigalda

2. **Loo uus sait:**
   - Ava Local
   - Vajuta "+ Create a new site"
   - Nimi: "KM Personal"
   - Vali "Preferred"
   - Loo admin kasutaja

3. **Lisa teema:**
   - Vajuta "Go to site folder"
   - Mine: `app/public/wp-content/themes/`
   - Kopeeri kogu `/Users/predator/2/` sisu uude kausta `kmpersonal`

4. **Aktiveeri:**
   - WordPress admin: Välimus > Teemad
   - Aktiveeri "KM Personal"

5. **Paigalda ACF:**
   - Pistikprogrammid > Lisa uus
   - Otsi "Advanced Custom Fields"
   - Paigalda ja aktiveeri

6. **Loo avaleht:**
   - Lehed > Lisa uus > Pealkiri "Avaleht"
   - Seaded > Lugemine > Vali "Staatiline leht"
   - Avalehena vali "Avaleht"

✅ **Valmis!** Vajuta Local'is "Open Site"

**Täpne juhend:** Vaata `LOCAL_SETUP_ET.md`

---

### 3️⃣ MANUAALNE: MAMP/XAMPP

Kui oled kogenud arendaja:

1. Paigalda MAMP või XAMPP
2. Lae alla WordPress
3. Loo andmebaas
4. Paigalda WordPress
5. Lisa teema
6. Aktiveeri ACF

**Täpne juhend:** Vaata `LOCAL_SETUP_ET.md` → Variant 2 või 3

---

## 📁 Failide Struktuur

```
/Users/predator/2/
│
├── demo.html                  ← AVA SEE KOHE!
├── LOCAL_SETUP_ET.md         ← Täpne paigaldusjuhend
├── README.md                  ← Ingliskeelne dokumentatsioon
├── CONTENT.md                 ← Kogu eestikeelne sisu
├── SETUP.md                   ← Kiirjuhend
│
├── style.css                  ← Peamine CSS
├── functions.php              ← WordPressi seaded + ACF
├── header.php                 ← Päis
├── footer.php                 ← Jalus
├── front-page.php            ← Avaleht
├── index.php                  ← Tagavaratemplaat
│
├── assets/
│   ├── css/homepage.css      ← Avaleht CSS
│   └── js/homepage.js        ← Slideshow jms
│
└── template-parts/
    ├── hero.php              ← Hero sektsioon
    ├── mission.php           ← Missioon
    ├── trust.php             ← Turvatunne
    ├── services-overview.php ← Teenused
    ├── testimonials.php      ← Tagasiside
    └── cta.php               ← Kontakt
```

---

## 🎯 Mis Toimib?

### Demo.html (Kohe Valmis)
✅ Kõik disain nähtav
✅ Slideshow töötab
✅ Nupud töötavad
✅ Responsiivne
✅ Animatsioonid

### WordPressi Versioon (Pärast Paigaldust)
✅ Kõik ülaltoodud +
✅ Admin paneel
✅ Sisu muutmine ilma koodita
✅ ACF väljad
✅ Piltide üleslaadimine
✅ Menüüd

---

## ❓ KKK

**K: Kas pean WordPressi paigaldama?**
V: Ei! Ava lihtsalt `demo.html` - näed kogu disaini. WordPress on vajalik ainult siis, kui tahad sisu hallata admin paneeli kaudu.

**K: Milline variant on parim?**
V: Kui tahad lihtsalt disaini näha → `demo.html`
   Kui tahad WordPressiga töötada → Local by Flywheel

**K: Kui kaua võtab aega?**
V: Demo.html → 5 sekundit
   Local by Flywheel → 15 minutit
   MAMP/XAMPP → 30-45 minutit

**K: Kust leian eestikeelse sisu?**
V: Vaata `CONTENT.md` - seal on kogu vaikesisu eesti keeles.

**K: Kuidas muudan värve?**
V: Muuda `style.css` failis CSS muutujaid:
   ```css
   :root {
     --beige-bg: #FCF7F0;
     --dark-green: #214945;
     ...
   }
   ```

**K: Kuidas muudan slideshow'i kiirust?**
V: Muuda `assets/js/homepage.js` failis:
   ```javascript
   setInterval(nextSlide, 5000); // 5000 = 5 sekundit
   ```

---

## 🎨 Disaini Vaatamine

### Brauseris (Demo)
```bash
open demo.html
```

### Mobiilivaates
Ava demo.html ja:
- Chrome: F12 → Device Toolbar
- Safari: Develop → Enter Responsive Design Mode
- Firefox: Ctrl+Shift+M

### Reaalajas Testmine
Local by Flywheel võimaldab vaadata saiti telefonis:
1. Local'is vajuta "Admin"
2. Leia IP aadress (Settings)
3. Telefonis ava: `http://IP-AADRESS:PORT/`

---

## 📱 Responsiivne Disain

Disain kohandub automaatselt:

- **Telefon:** < 768px (üks veerg)
- **Tahvelarvuti:** 768-1023px (2 veergu)
- **Arvuti:** ≥ 1024px (täislaius)

Testi erinevates suurustes!

---

## 🆘 Abi Vaja?

### Dokumentatsioon
- 🇪🇪 **LOCAL_SETUP_ET.md** - Paigaldusjuhend eesti keeles
- 🇬🇧 **README.md** - Täielik ingliskeelne dokumentatsioon
- 📝 **CONTENT.md** - Kogu eestikeelne sisu
- ⚡ **SETUP.md** - Kiirjuhend

### Probleemid?
1. Kontrolli `LOCAL_SETUP_ET.md` → "Probleemide Lahendamine"
2. Kontrolli brauseri konsooli (F12)
3. Kontrolli, et kõik failid on olemas

---

## ✅ Soovitatud Sammud

### Samm 1: Vaata Demo't (5 sek)
```bash
open demo.html
```

### Samm 2: Loe Dokumentatsiooni (10 min)
- Ava `LOCAL_SETUP_ET.md`
- Vali paigaldusviis

### Samm 3: Paigalda WordPress (15 min)
- Local by Flywheel (lihtsaim)
- Või MAMP/XAMPP

### Samm 4: Lisa Sisu (30 min)
- Kasuta `CONTENT.md` sisunäiteid
- Laadi üles pildid
- Kohanda tekste

### Samm 5: Testi (10 min)
- Mobiil, tahvel, arvuti
- Kõik nupud
- Slideshow
- Lingid

---

## 🚀 Valmis Tootmiseks!

Kui kõik töötab lokaalselt:

1. ✅ Ekspordi andmebaas
2. ✅ Kopeeri failid serverisse
3. ✅ Impordi andmebaas
4. ✅ Uuenda URL-id
5. ✅ Testi

**Täpne juhend:** `SETUP.md` → "Deployment Checklist"

---

## 📞 Kontakt

**Email:** info@kmpersonal.ee
**Website:** https://kmpersonal.ee

---

**Valmistatud ❤️-ga KM Personal jaoks**

_Edukat kasutamist! 🎉_
