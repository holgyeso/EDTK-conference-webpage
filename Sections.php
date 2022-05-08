<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Magyar Tudományos Diákköri Konferenciát (MTDK) 2021-ben először szervezik a Babeș-Bolyai Tudományegyetem hallgatói számára akik magyar nyelvű tudományos dolgozattal jelentkezhetnek. A verseny döntősei közül kerülnek majd ki a dolgozatok amelyek az egyetemet képviselik a XXV. Erdélyi Tudományos Diákköri Konferencián (ETDK).">
    <meta name="keywords" content="tudományos konferencia, Babeș-Bolyai Tudományegyetem, ETDK">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💡</text></svg>">
    <link rel="stylesheet" href="HeaderFooter-style.css">
    <link rel="stylesheet" href="Sections-style.css">
    <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
</head>
<body>
    <div class="container">
    <?php include "Header.php"; ?>
        
        <main id="main">
            <section class="page-title">
                <h1 class="page-tilte-text">Általános tudnivalók a versenyről</h1>
            </section>

            <section class="inner-header">
                <p class="inner-header-desc">Kattints a megfelelő almenüpontra a gyorsabb navigációért!</p>
                <div class="inner-header-container">
                    <button class="inner-header-hamburger" type="button" id="innerHamburger">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>
                    </button>
                    <div class="inner-header-cards" id="innerHeaderCards">
                        <a href="#Versenyrol" class="inner-header-card">
                            <div class="inner-header-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h2>A versenyről</h2>
                        </a>
                        <a href="#Conditions" class="inner-header-card">
                            <div class="inner-header-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h2>Általános részvételi feltételek</h2>
                        </a>
                        <a href="#Certification" class="inner-header-card">
                            <div class="inner-header-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                            </div>
                            <h2>Témavezetői igazolás</h2>
                        </a>
                        <a href="#Abstract" class="inner-header-card">
                            <div class="inner-header-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </div>
                            <h2>Kivonatok formai követelményei</h2>
                        </a>
                        <a href="#Paper" class="inner-header-card">
                            <div class="inner-header-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h2>Dolgozatok követelményei szekciónként</h2>
                        </a>
                    </div>
                </div>
            </section>
            <section class="about-conference">
                <h2 class="general-title" id="Versenyrol">A versenyről</h2>
                <p class="general-desc">
                    A<strong> Magyar Tudományos Diákköri Konferencián (MTDK)</strong> lehetőséget nyújt a magyar anyanyelvű diákok számára, hogy összemérjék saját kutatási eredményeiket, szakmai tudásukat a bölcsészettudományok, a hittudomány, az agrártudományok, a műszaki tudományok, az orvostudományok, a társadalomtudományok, a természettudományok és a művészetek területein. <strong>A verseny döntősei közül fognak kierülni azon dolgozatok amelyek képviselik majd a Babeș-Bolyai Tudományegyetemet az Erdélyi Tudományos Diákköri Konferencián (ETDK)</strong>. A meghirdetett szekciókba <strong>április 1-ig lehet jelentkezni</strong> a szakdolgozat témájának, címének és a szakmai vezető nevének megjelölésével. <strong>A kivonatokat</strong> (a dolgozat összefoglalója) és a <strong>tanári igazolást</strong> ugyancsak <strong>április 1-ig</strong> kérjük a szervezőkhöz eljuttatni ugyancsak az online felületre belépve. <strong>A dolgozatok végleges változatát május 14-ig</strong> elektronikusan kérjük feltölteni a platformra. <strong>A szekciók döntői június 1-10 </strong>között lesznek megszervezve online. A részletes programot később tesszük majd közzé.
                </p>

                <?php
                    if (!isset($_SESSION["email"])) echo '<a href="Registration.html" class="registration-button" >Jelentkezz most!</a>'

                ?>

            </section>

            <section class="conditions">
                <h2 class="general-title" id="Conditions">Általános részvételi feltételek:</h2>
                <p class="general-desc"><strong>Minden diáknak a Babeș-Bolyai Tudományegyetemről </strong>(alapképzésben vagy mesterképzésben részt vevő) joga van az MTDK bármely szekciójában dolgozatot bemutatni, ha a jelentkezési feltételeket teljesíti a dolgozat:</p>
                <ol class="conditions-paper">
                    <li>maximum öt szerzője lehet</li>
                    <li>kötelező módon van legalább egy, legfeljebb három témavezetője;</li>
                    <li>egy szerző több dolgozatot is bemutathat; egy adott dolgozat csak egy szekcióban mutatható be</li>
                    <li>a dolgozat  feleljen meg a korszerű tudományos kritériumoknak</li>
                    <li>megközelítésében és megírásában legyen eredeti</li>
                    <li>nem lehet a tantervben előírt valamely feladat megoldása, szemináriumi dolgozat, országos vagy nemzetközi szintű konferenciákon már bemutatott dolgozat, már megvédett szakdolgozat vagy államvizsga-dolgozat, de lehet helyi (intézményi) szintű konferencián már bemutatott dolgozat.</li>
                    <li>a kivonat és a dolgozat szövege magyar nyelvű. Az MTDK szekcióinak munkálatai (beleértve a dolgozatok előadását) szintén magyar nyelven folynak. </li>
                </ol>
            </section>

            <section class="tutor-certification">
                <h2 class="general-title" id="Certification">Témavezetői igazolás:</h2>
                <p class="general-desc">
                    A témavezetői igazolást minden dolgozat esetén fel kell tölteni a regisztrációs felületre, a meghatározott határidőig, PDF formátumban. Fontos, hogy az igazolást a témavezető, vagy adott esetben a témavezetők aláírása hitelesíti, annak hiányában nem tudjuk azt elfogadni.
                </p>
                <a href="https://drive.google.com/file/d/1BOQhv8OuwbF7fwnxlWl9EMdeTOMexCU0/view" target="_blank" class="registration-button" >Javasolt példa letöltése »</a>
            </section>

            <section class="abstract">
                <h2 class="general-title" id="Abstract">Kivonatok formai követelménye:</h2>
                <p class="general-desc">A kivonat egy tájékoztató jellegű, rövid összefoglaló, ami a dolgozat tartalmát vázolja fel. Ezt a regisztrációs felület erre kijelölt mezőjébe kell bemásolni. Amennyiben a kivonat terjedelme nem felel meg a követelményeknek, a rendszer azt automatikusan visszadobja. Több dolgozattal való nevezés esetén, mindegyik dolgozathoz tartozó kivonatot és dolgozatcímet külön kell bemásolni.</p>
                <p class="general-desc-content"><strong style="color: rgb(5, 101, 113)">Tartalmi követelmények:</strong> a dolgozat címe, a dolgozat témája, a dolgozat tartalmi összefoglalója</p>
                <p class="general-desc-content"><strong style="color: rgb(5, 101, 113)">Formai követelmények:</strong> terjedelem: 1100-1200 leütés</p>
            </section>

            <section class="paper">
                <h2 class="general-title" id="Paper">Dolgozatok követelményei szekciónként:</h2>
                <p class="general-desc">Az MTDK 36 szekcióban hírdet nevezési lehetőséget. Ezek az alszekciók 10 átfogó szekcióba csoportosulnak a tudományterületeknek megfelelően. Fel szeretnénk hívni a figyelmet, hogy<strong> a szekcióknak megfelelő döntő egymástól időben és helyben független</strong>. Görgess lejjebb a további informáciokért a versenyről, a szekciók követelményeiről és a döntőkről.</p>
            </section>

           
            <section class="sections-cards">
                <div class="section-heading-allcards">
                    <!-- 1. BIOLÓGIA -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card"> 
                            <h2 class="sections-heading-card-name">BIOLÓGIA</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Biológia:</strong> Pethő Csongor - László, <a href="mailto:pethocsongor99@gmail.com?"> pethocsongor99@gmail.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>Szerzők száma:</strong>  maximum 2</p>
                            <p><strong>A dolgozat maximum oldalszáma:</strong> 40 (az esetleges Függelékekkel együtt).</p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A dolgozat javasolt felépítése: Fedőlap, Tartalomjegyzék, Bevezető, Célkitűzés, Anyag és módszer, Eredmények és értékelésük, Összefoglalás, Köszönetnyilvánítás, Irodalom, + Függelék (ha van). A pályamunka fedőlapján szerepeljen: „24. ETDK Biológia Szekció”, cím, a készítő(k) neve, szakja, évfolyama, a küldő intézmény neve (pl. Babeș-Bolyai Tudományegyetem) </p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Zoom platform</p>
                            <p><strong>Időpont:</strong> 2021. június 2, 10:00</p>
                        </div>
                    </div>
                    
                    <!-- 2. FIZIKA, FÖLDTUDOMÁNYOK ÉS MATEMATIKA SZEKCIÓK -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">FIZIKA, FÖLDTUDOMÁNYOK ÉS MATEMATIKA SZEKCIÓK</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.871 4A17.926 17.926 0 003 12c0 2.874.673 5.59 1.871 8m14.13 0a17.926 17.926 0 001.87-8c0-2.874-.673-5.59-1.87-8M9 9h1.246a1 1 0 01.961.725l1.586 5.55a1 1 0 00.961.725H15m1-7h-.08a2 2 0 00-1.519.698L9.6 15.302A2 2 0 018.08 16H8" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Fizika:</strong> Zakariás Etelka, <a href="mailto:zakariasetelka@gmail.com?">zakariasetelka@gmail.com</a></p>
                            <p><strong>Földrajz:</strong> Héjja Barbi, <a href="mailto:barbi.hejja.bi@gmail.com?">barbi.hejja.bi@gmail.com</a></p>
                            <p><strong>Területfejlesztés - Turizmus:</strong> Simó Orsi, <a href="mailto:simo.orsi@yahoo.com?">simo.orsi@yahoo.com</a></p>
                            <p><strong>Geológia</strong> Bencze Tamás, <a href="mailto:bencze_tamas_95@yahoo.com?">bencze_tamas_95@yahoo.com</a></p>
                            <p><strong>Matematika</strong> Kovács Lilla, <a href="mailto:kovlilla19@gmail.com?">kovlilla19@gmail.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat maximum oldalszáma:</strong> 60 oldal</p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A pályamunka a szerzők saját tudományos kutatásairól számol be.  A pályamunka az ETDK szakmai zsűrije által ellenőrzött és elfogadott saját kutatási eredményeket tartalmaz. A diákkutatási műhelymunka nem a tantervben előírt feladatok keretében valósult meg. Szemináriumi dolgozat, terepgyakorlati jelentés, többletmunka nélküli, mester- vagy osztatlan képzésbeli szakdolgozat, diplomamunka nem mutatható be.</p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Zoom platform</p>
                            <p><strong>Időpont:</strong> 2021. június 2, 15:00</p>
                        </div>
                    </div>
                    
                    <!-- 3. GYÓGYTORNA, TESTNEVELÉS- ÉS SPORTTUDOMÁNYI SZEKCIÓK -->
                    
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">GYÓGYTORNA, TESTNEVELÉS- ÉS SPORTTUDOMÁNYI SZEKCIÓK</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Gyógytorna - Testnevelés és Sport:</strong> Forró Rebeka, <a href="mailto:forro.rebeka@kmdsz.ro?">forro.rebeka@kmdsz.ro</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat maximum oldalszáma:</strong> 20 oldal</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong> nem</p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A pályamunkáknak a következő belső tagolási rendet kell követnie: Bevezetés, Célkitűzés, Anyagok és módszerek, Eredmények, Megbeszélés (vagy Eredmények és megbeszélés), Összefoglalás, Irodalomjegyzék, Köszönetnyilvánítás, Függelék. Ábrák és táblázatok bemutatása számozva történjen a szövegben, ennek megfelelő hivatkozással. </p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Teams platform</p>
                            <p><strong>Időpont:</strong> 2021. június 3, 10:00</p>
                        </div>
                    </div>
                    
                    <!-- 4. INFORMATIKA TUDOMÁNYI SZEKCIÓ -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">INFORMATIKA TUDOMÁNYI SZEKCIÓK</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Informatika I - elméleti módszerek, kísérletek, szimulációk:</strong> Kovács Lilla, <a href="mailto:kovlilla19@gmail.com?">kovlilla19@gmail.com</a></p>
                            <p><strong>12.	Informatika II - innovatív számítástechnikai termékek, alkalmazások</strong> Kovács Lilla, <a href="mailto:kovlilla19@gmail.com?">kovlilla19@gmail.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat maximum oldalszáma:</strong> 20 oldal</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong> igen (emailben, csatolmányban küldendő) </p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A kiegészítő dokumentumot/dokumentumokat egyetlen fájlban kell feltölteni, tartalmazhat tesztelési adatokat, reprezentatív eredményeket, minden olyan információt, amely az eredmények hitelességét alátámasztja, a munka reprodukcióját segíti. A kiegészítő dokumentumot tartalmazó fájl maximális mérete 10 megabájt. A pályamunkát a külső borító oldalon „ETDK-dolgozat” felirattal és a szerző(k) nevének feltüntetésével kérjük elkészíteni. A borítót követő címlap tartalmazza az intézmény, kar, tanszék megnevezését, ahol a ETDK-pályamunka készült, továbbá a szerző(k) nevét, évfolyamát, és a témavezető(k) nevét, beosztását valamint a pályamunka pontos (nevezési lapon szereplő címmel megegyező) címét. </p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Teams platform</p>
                            <p><strong>Időpont:</strong> 2021. június 4, 10:00</p>
                        </div>
                    </div>
                    
                    <!-- 5. ÁLLAM- ÉS JOGTUDOMÁNYI, JELENKOR ÉS NEMZETKÖZI KAPCSOLATOK, POLITOLÓGIA SZEKCIÓ -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">ÁLLAM- ÉS JOGTUDOMÁNYI, JELENKOR ÉS NEMZETKÖZI KAPCSOLATOK, POLITOLÓGIA SZEKCIÓ</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Állam- és jogtudomány és Jelenkor és nemzetközi kapcsolatok és Politológia:</strong> Győrbíró Izabella, <a href="mailto:izabellagyorbiro@yahoo.com?">izabellagyorbiro@yahoo.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat maximum terjedelme:</strong> 50 oldal, 2,5 szerzői ív, azaz 100 000 leütés, szóközökkel, jegyzetekkel, irodalomjegyzékkel és mellékletekkel együtt</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong> igen (emailben, csatolmányban küldendő) </p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Zoom platform</p>
                            <p><strong>Időpont:</strong> 2021. június 4, 10:00</p>
                        </div>
                    </div>
                    
                    <!-- 6. KÉMIAI ÉS VEGYIPARI SZEKCIÓ -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">KÉMIAI ÉS VEGYIPARI SZEKCIÓ</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Kémia I - Biokémia és szerves kémia:</strong> Gyéresi Kreszencia, <a href="mailto:gy_kresz5@yahoo.com?">gy_kresz5@yahoo.com</a></p>
                            <p><strong>Kémia II - Analitikai, fizikai és szervetlen kémia:</strong> Gyéresi Kreszencia, <a href="mailto:gy_kresz5@yahoo.com?">gy_kresz5@yahoo.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat maximum terjedelme:</strong> 50 oldal, 2,5 szerzői ív, azaz 100 000 leütés, szóközökkel, jegyzetekkel, irodalomjegyzékkel és mellékletekkel együtt</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong> igen (emailben, a csatolmányban küldendő) </p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A hallgató a TDK-dolgozatban fogalmazza meg egyértelműen az elvégzett munka célját, tudományos/gyakorlati jelentőségét. Foglalja össze és lehetőleg elemezze a munkájához kapcsolódó hazai és külföldi irodalmat. Sorolja fel az alkalmazott kísérleti és/vagy elméleti módszereket, továbbá írja le az elvégzett kísérletek/számítások pontos menetét. Mutassa be és értékelje elért eredményeit. </p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Teams platform</p>
                            <p><strong>Időpont:</strong> 2021. június 5, 15:00</p>
                        </div>
                    </div>
                    
                    <!-- 7. KÖZGAZDASÁGTUDOMÁNYI SZEKCIÓK -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">KÖZGAZDASÁGTUDOMÁNYI SZEKCIÓK</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Közgazdaság- és gazdálkodástudomány I - Marketing:</strong> Balázs Dániel, <a href="mailto:balazs.dani@icloud.com?">balazs.dani@icloud.com</a></p>
                            <p><strong>Közgazdaság- és gazdálkodástudomány II - Menedzsment:</strong> Jakó Evelyn, <a href="mailto:evelynernesztina@yahoo.com?">evelynernesztina@yahoo.com</a></p>
                            <p><strong>Közgazdaság- és gazdálkodástudomány III - Pénzügy:</strong> Costiniuc Norbert, <a href="mailto:costiniucnorbert@yahoo.com?">costiniucnorbert@yahoo.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat maximum terjedelme:</strong> 80 oldal, ami a Bevezetés első oldalától az Összefoglalás utolsó oldaláig értendő</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong>  a 80 oldalt meghaladó, de a dolgozatnak nem a törzsszövegét képező egyéb anyagok (képek, táblázatok, ábrák, stb.) egy külön dokumentumban, mellékletként feltölthetők (tetszőleges terjedelemben és tartalommal). A Bevezetéstől az Összefoglalásig terjedő szövegből a mellékletbe szöveg nem csoportosítható át!</p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <p><strong>Oldalszámozás:</strong> a Bevezetéssel, 1. oldalszámmal kezdődik. Az oldalszám a lap aljára, középre kerüljön.</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A pályamunkából egyértelműen ki kell derülnie, hogy mely rész, kinek a saját munkája, ezért többszerzős műveknél kérjük, hogy a tartalomjegyzékben jelöljék a hozzájárulást, szerzőséget. A dolgozat felépítése:  Külső borító, Belső borító, Tartalomjegyzék, Táblázatok jegyzéke (ha releváns), Ábrajegyzék (ha releváns), Bevezetés, Fejezetek (szakirodalom, kutatási módszertan, eredmények, értékelésük stb.), Összefoglalás, Felhasznált irodalom és források jegyzéke, Mellékletek. <br>A dolgozat tartalmazza a tudományos munkáktól elvárt három pontot lefedő kötelező elemeket:<br>   a)  a dolgozat elején (a bevezetőben) tartalmazza a szerző által megválaszolandó tudományos kutatási kérdést; <br>   b)  explicit formában megadja kutatási modelljét és/vagy módszertanát;<br>   c)  a dolgozat végén megválaszolja a feltett tudományos kérdést; tézis-szerűen összefoglalja a dolgozat tudományos szempontból új, vagy újszerű eredményeit.</p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Zoom platform</p>
                            <p><strong>Időpont:</strong> 2021. június 7, 9:00</p>
                        </div>
                    </div>
                    
                    <!-- 8. PEDAGÓGIAI, PSZICHOLÓGIAI SZEKCIÓK -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">PEDAGÓGIAI, PSZICHOLÓGIAI SZEKCIÓK</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Pedagógia I:</strong> Csíki Boróka, <a href="mailto:borokacsiki00@gmail.com?">borokacsiki00@gmail.com</a></p>
                            <p><strong>Pedagógia II - Tanulás- és tanításmódszertan:</strong> Csíki Boróka, <a href="mailto:borokacsiki00@gmail.com?">borokacsiki00@gmail.com</a></p>
                            <p><strong>Gyógypedagógia:</strong> Lengyel Mária Izabella, <a href="mailto:maria_lengyel@yahoo.com?">maria_lengyel@yahoo.com</a></p>
                            <p><strong>Pszichológia I - Szociál-iskolapszichológia:</strong> Maier Krisztina, <a href="mailto:maier.krisztina@yahoo.com?">maier.krisztina@yahoo.com</a></p>
                            <p><strong>Pszichológia II - Kognitív pszichológia:</strong> Maier Krisztina, <a href="mailto:maier.krisztina@yahoo.com?">maier.krisztina@yahoo.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat minimum terjedelme:</strong> 20 oldal</p>
                            <p><strong>A dolgozat maximum terjedelme:</strong> 40 oldal</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong> igen (emailben, a csatolmányban küldendő).  A dolgozat melléklete külön fájlban kiegészítő dokumentumként kezelendő és tölthető fel. </p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A Szekció programjában a neveléstudomány, a pszichológia, az andragógia, a könyvtártudomány és a velük rokon tudományokhoz tartozó, önálló kutatómunkán alapuló, tudományos igényű pályamunkák mutathatók be. A pályamunkának önálló és új kutatási eredményeket kell tartalmaznia!</p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Teams platform</p>
                            <p><strong>Időpont:</strong> 2021. június 6, 12:00</p>
                        </div>
                    </div>
                    
                    <!-- 9. TÁRSADALOMTUDOMÁNYI SZEKCIÓK -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">TÁRSADALOMTUDOMÁNYI SZEKCIÓ</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Kommunikáció:</strong> Almássy Eszter, <a href="mailto:almassyeszter@gmail.com?">almassyeszter@gmail.com</a></p>
                            <p><strong>Újságírás:</strong> Pilbáth Kincső, <a href="mailto:kincso_pilbath@yahoo.com?">kincso_pilbath@yahoo.com</a></p>
                            <p><strong>Gyógypedagógia:</strong> Lengyel Mária Izabella, <a href="mailto:maria_lengyel@yahoo.com?">maria_lengyel@yahoo.com</a></p>
                            <p><strong>Szociológia és antropológia:</strong> Ambrus Barbara, <a href="mailto:ambrusbarbi46@gmail.com?">ambrusbarbi46@gmail.com</a></p>
                            <p><strong>Teológia I - Protestáns teológia:</strong> Vass Lehel, <a href="mailto:vass_lehel@yahoo.com?">vass_lehel@yahoo.com</a></p>
                            <p><strong>Teológia II - Római Katolikus teológia: :</strong> Szabó Roland, <a href="mailto:rolandszabo14@gmail.com?">rolandszabo14@gmail.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat minimum terjedelme:</strong> 20 oldal</p>
                            <p><strong>A dolgozat maximum terjedelme:</strong> 60 oldal</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong> nem </p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>A dolgozat egésze legfeljebb 60 oldalt tartalmazhat. Ebből a tartalmi – azaz a címlap, a tartalomjegyzék, az irodalomjegyzék és a melléklet(ek) nélkül értendő – rész legalább 20, legfeljebb 40 oldal. A nem tartalmi rész terjedelme legfeljebb 20 oldal. Az irodalomjegyzékben, a táblázatokban és a mellékletekben 10-es betűtípus és 1-es sortáv is használható. Az ábrákat és a táblázatokat számozni kell, és a szövegben ennek megfelelően kell hivatkozni rájuk. </p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Zoom platform</p>
                            <p><strong>Időpont:</strong> 2021. június 8, 10:00</p>
                        </div>
                    </div>
                    
                    <!-- 10. HUMÁNTUDOMÁNYI SZEKCIÓK -->
                    <div class="sections-heading-cards">
                        <div class="sections-heading-card">
                            <h2 class="sections-heading-card-name">HUMÁNTUDOMÁNYI SZEKCIÓK</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                        <div class="sections-heading-card-desc">
                            <h3>A szekcióba tartozó alszekciók és vezetőik elérhetősége:</h3>
                            <p><strong>Filozófia:</strong> Biró Noémi, <a href="mailto:biroznoemi@gmail.com?">biroznoemi@gmail.com</a></p>
                            <p><strong>Magyar irodalom I - A középkor és a kora újkor irodalma:</strong> Lőrincz Reni, <a href="mailto:renilorincz@gmail.com?">renilorincz@gmail.com</a></p>
                            <p><strong>Magyar irodalom II - Klasszikus magyar irodalom és 18–19. századi világirodalom:</strong> Ágoston Zsófia, <a href="mailto:agoston.zsofia@gmail.com?">agoston.zsofia@gmail.com</a></p>
                            <p><strong>Magyar irodalom III - Modern és kortárs irodalom, irodalomelmélet:</strong> Kinda Andrea, <a href="mailto:kindaandrea99@gmail.com?">maier.krisztina@yahoo.com</a></p>
                            <p><strong>Magyar nyelvtudomány:</strong> Varga Eszter, <a href="mailto:vargaaeszter@gmail.com?">vargaaeszter@gmail.com</a></p>
                            <p><strong>Dramaturgia, filmművészet és filmelmélet:</strong> Görbe Helga, <a href="mailto:g_helga2000@yahoo.com?">g_helga2000@yahoo.com</a></p>
                            <p><strong>Képzőművészet, Zene és zeneelmélet:</strong> Mészáros Eszter, <a href="mailto:meszaroseszterke@gmail.com?">meszaroseszterke@gmail.com</a></p>
                            <p><strong>Művészettörténet:</strong> Sipos Ottilia, <a href="mailto:siposottiliaotk@gmail.com?">siposottiliaotk@gmail.com</a></p>
                            <p><strong>Néprajz:</strong> Gondos Emőke, <a href="mailto:emoke1216g@yahoo.com?">emoke1216g@yahoo.com</a></p>
                            <p><strong>Történelem:</strong> Csíki Szilád, <a href="mailto:csikiszilard99@gmail.com?">csikiszilard99@gmail.com</a></p>
                            <h3>A pályamunka formai követelményei:</h3>
                            <p><strong>A dolgozat terjedelme:</strong> minimum 40.000, maximum 90.000 leütés (karakter szóközzel) lehet, amibe a (láb)jegyzetek, a tartalom- és irodalomjegyzék is beleszámít, a mellékletek viszont ezen kívül értendők</p>
                            <p><strong>Kiegészítő dokumentum feltöltése engedélyezett:</strong> igen, a mellékletek kiegészítő dokumentumként tölthetőek fel </p>
                            <p><strong>Betűtípus:</strong> Times New Roman</p>
                            <p><strong>Betűméret:</strong> 12</p>
                            <p><strong>Sorköz:</strong> 1,5</p>
                            <p><strong>Margó:</strong> 2,5</p>
                            <p><strong>Rendezés:</strong> sorkizárt</p>
                            <h3>További szekció specifikus szabályok a pályamunkára vonatkozóan:</h3>
                            <p>Amennyiben kiegészítő dokumentum feltöltésére lehetőség van (ami a maximum oldalszámba nem számít bele), úgy azt külön, egyetlen fájlban lehet feltölteni. A kiegészítő dokumentumot tartalmazó fájl maximum mérete 10 megabyte. (emailben, a csatolmányban küldendő)</p>
                            <h3>Döntő:</h3>
                            <p><strong>Helyszín:</strong> Online, Teams platform</p>
                            <p><strong>Időpont:</strong> 2021. június 6, 12:00</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <a href="#main" class="scroll-back" id=scrollBack>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18" />
            </svg>
        </a>
    </button>
    <?php include "Footer.php"; ?>
    <script src="script-sections.js"></script>
</div>
</body>
</html>