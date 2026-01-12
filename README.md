# Chronos - Svět hodinek ⌚

Vzdělávací webová stránka o hodinách a hodinářství vytvořená jako závěrečný studentský projekt.

## 📋 O projektu

Chronos je moderní webová prezentace zaměřená na hodinářství, která přináší kompletní přehled o historii, mechanice a typech hodinek. Projekt kombinuje tradiční hodinářské téma s moderním webovým designem.

## ✨ Funkce

- **Responzivní design** - Plně optimalizováno pro mobily, tablety i desktopy
- **Interaktivní navigace** - Plynulé scrollování mezi sekcemi
- **Rolex hodiny** - Živé hodiny od Rolexu v pravém horním rohu (desktop)
- **Karusel obrázků** - Automatické přehrávání úvodních snímků
- **Historie hodinek** - Chronologická časová osa vývoje hodinek
- **Komplikace** - Detailní popis hodinářských funkcí (chronograf, GMT, kalendář)
- **Typy strojků** - Porovnání mechanických a quartzových hodinek
- **Ikony hodinářství** - Představení legendárních modelů
- **Materiály pouzder** - Přehled materiálů používaných v hodinářství
- **Slovníček pojmů** - Interaktivní accordion s vysvětlením termínů
- **Kontaktní formulář** - Pro komunikaci s návštěvníky
- **Bootstrap 5** - Moderní komponenty a responzivní grid

## 🛠️ Technologie

- **PHP 8.2** - Serverová platforma
- **Apache** - Webový server
- **Bootstrap 5.3.3** - CSS framework
- **Font Awesome 6.5.2** - Ikony
- **Google Fonts (Montserrat)** - Typografie
- **Docker** - Kontejnerizace aplikace

## 🚀 Instalace a spuštění

### Předpoklady

- [Docker](https://www.docker.com/get-started) nainstalovaný na vašem počítači
- [Docker Compose](https://docs.docker.com/compose/install/)

### Spuštění projektu

1. **Naklonujte repozitář:**
   ```bash
   git clone https://github.com/0ndraM/NurHtml.git
   cd NurHtml
   ```

2. **Spusťte Docker Compose:**
   ```bash
   docker-compose up -d
   ```

3. **Otevřete v prohlížeči:**
   ```
   http://localhost:8080
   ```

### Zastavení projektu

```bash
docker-compose down
```

## 📁 Struktura projektu

```
NurHtml/
├── docker-compose.yml      # Docker konfigurace
└── www/                    # Webové soubory
    ├── index.html         # Hlavní stránka
    ├── style.css          # Vlastní styly
    └── images/            # Obrázky a fotografie
```

## 🎨 Obsah stránky

### Sekce

1. **Domů** - Úvodní sekce s hlavním nadpisem a karusel obrázků
2. **Mechanika** - Porovnání mechanických a quartzových strojků
3. **Komplikace** - Chronograf, GMT, kalendář s modálními okny
4. **Historie** - Časová osa vývoje hodinek od starověku po dnešek
5. **Ikony** - Legendární modely (Submariner, Tank, Speedmaster)
6. **Materiály** - Přehled materiálů pouzder (ocel, titan, zlato, keramika)
7. **Slovníček** - Vysvětlení základních hodinářských pojmů
8. **Péče** - Tipy pro údržbu a servis hodinek
9. **Kontakt** - Kontaktní formulář

## 🌐 Funkce designu

- **Sticky navigace** - Menu zůstává viditelné při scrollování
- **Progress bary** - Vizuální porovnání vlastností hodinek
- **Timeline** - Vertikální časová osa s obrázky
- **Modální okna** - Detailní informace o komplikacích (GMT, kalendář, chronograf)
- **Accordion** - Rozbalovací slovníček hodinářských pojmů
- **Karusel** - Automatické přehrávání úvodních obrázků s fade efekty
- **Hover efekty** - Interaktivní prvky při najetí myší
- **Hladké scrollování** - Plynulé přechody mezi sekcemi
- **Rolex iframe** - Integrované živé hodiny Rolex (viditelné na desktopu)

## 🎓 Vzdělávací účel

Tento projekt vznikl jako studentská závěrečná práce s cílem:
- Naučit se práci s moderními webovými technologiemi
- Pochopit principy responzivního designu
- Zvládnout kontejnerizaci pomocí Dockeru
- Vytvořit přehlednou a informativní prezentaci
- Zpracovat rozsáhlý obsah do strukturované formy

## 📝 Licence

Tento projekt je vytvořen pro vzdělávací účely.

## 👨‍💻 Autor

Vytvořeno jako závěrečný projekt.

## 🙏 Poděkování

- **Bootstrap** za skvělý CSS framework
- **Font Awesome** za ikony
- **Google Fonts** za typografii Montserrat
- Všem nadšencům do hodinek za inspiraci

---

⌚ **Chronos** - Objevte krásu času
