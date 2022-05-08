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
    <link rel="stylesheet" href="Home-style.css">
    <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
</head>
<body>
    <div class="container">
    <?php include "Header.php"; ?>
    <main>
        <section class="hero">
            <div class="hero-text">
                <p class="hero-location">KOLOZSVÁR • 2021. JÚNIUS 1–10</p>
                <h1 class="hero-title"> I. MAGYAR TUDOMÁNYOS DIÁKKONFERENCIA </h1>
                <p class="hero-desc">2021 nyarán megrendezésre kerül az első MTDK Kolozsváron. A jelentkezési határidő április 1.</p>
                
                <?php
                    if(!isset($_SESSION["email"]))
                    echo '<a href="Registration.php" class="hero-button" id="hero-button">Regisztrálj most!</a>';
                ?>

            </div>
            <div class="hero-image">
            </div>
        </section>

        <section class="advantages">
            <h2 class="advantages-title">Miért jelentkezz?</h2>
            <p class="advantages-desc">Az MTDK a Babeș-Bolyai Tudományegyetem legújabb versenye, amely a tapasztalatszerzésen, kapcsolati háló bővítésén és a tudományos dolgozatok viágába való bevezetésen kívül számos előnnyel jár.</p>
            <div class="advantages-cards">
                <div class="advantages-card">
                    <div class="advantages-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                          </svg>
                    </div>
                    <h3 class="advantages-card-title">Publikáció</h3>
                    <p class="advantages-card-desc">Az MTDK első három helyezettje és a különdíjban részesülő dolgozatai szakmai publikációnak számítanak</p>
                </div>
                <div class="advantages-card">
                    <div class="advantages-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                    <h3 class="advantages-card-title">Részvétel a XXV. ETDK-n</h3>
                    <p class="advantages-card-desc">Az MTDK-ra jelentkezett dolgozatok közül lesz kiválasztva, hogy mely dolgozatok képviselhetik a BBTE-t a XXV. ETDK-n.</p>
                </div>
                <div class="advantages-card">
                    <div class="advantages-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                    </div>
                    <h3 class="advantages-card-title">Pénzbeli jutalom</h3>
                    <p class="advantages-card-desc">A nyertes csapatok anyagi támogatásban is részesülnek: szekciónkként 10 000 RON pénznyeremény</p>
                </div>
            </div>
        </section>

        <section class="conditions">
            <div class="conditions-image"></div>
            <div class="conditions-content">
                <h2 class="conditions-title">Általános részvételi feltételek</h2> 
                <p class="conditions-text">Minden diák a Babeș-Bolyai Tudományegyetemről MTDK-n való részvételre jogosult. A hallgatók több szekcióba is jelentkezhetnek, viszont szekciónként kizárólag egy dolgozatot adhatnak be. Többszerzős dolgozatok esetén a szerzők száma nem haladhatja meg az 5 személyt. Továbbá, minden dolgozat esetében kell legyen legalább egy, legfennebb három témavezető tanár.</p>
            </div>
    </section>

        <section class="steps">
            <div class="steps-about">
                <h2 class="steps-title">
                    Jelentkezés lépései
                </h2>
            </div>
            <div class="steps-cards">
                <div class="steps-card">
                    <h3 class="steps-card-title">Online jelentkezés</h3>
                    <p class="steps-card-desc">április 1-ig</p>
                </div>
                <div class="steps-card">
                    <h3 class="steps-card-title">Kivonatok feltöltése</h3>
                    <p class="steps-card-desc">április 1-ig</p>
                </div>
                <div class="steps-card">
                    <h3 class="steps-card-title">Dolgozatok online beküldése</h3>
                    <p class="steps-card-desc">május 14-ig</p>
                </div>
            </div>
        </section>
        <div class="steps-countdown">
            <h3 class="steps-countdown-title" id="headline">A jelentkezések lejártak de várunk vissza a döntőre: </h3>
            <ul class="steps-countdown-timer" id="countdown">
                <li><span id="days"></span id="content">nap</li>
                <li><span id="hours"></span id="content">óra</li>
                <li><span id="minutes"></span id="content">perc</li>
                <li><span id="seconds"></span id="content">másodperc</li>
              </ul>
        </div>

        <section class="sponsors">
            <h2 class="sponsors-title">Támogatók:</h2>
            <div class="sponsors-logo">
                <a href="https://bgazrt.hu/tamogatasok/" target="_blank">
                    <img src="image/BethlenGaborAlap.jpg" alt="Bethlen Gábor Alap logója">
                </a>
                <a href="https://theprismaplatform.com/" target="_blank">
                    <img src="image/PrismaPlatform.png" alt="Prisma Platform logója">
                </a>
                <a href="https://www.codespring.ro/" target="_blank">
                    <img src="image/Codespring.jpg" alt="Codespring logója">
                </a>
                <a href="https://softech.ro/" target="_blank">
                    <img src="image/Softech.png" alt="Softech logója">
                </a>
                <a href="https://adrenalinpark.ro/ro/" target="_blank">
                    <img src="image/AdrenalinPark.png" alt="Adrenalin Park logója">
                </a>
            </div>
        </section>

        <section class="news">
            <h2 class="news-title">Legfrissebb hírek</h2>
            <div class="news-cards">
                <div class="news-card">
                    <a class="news-card-title" href="News-nyilatkozat-az-I-MTDK-megszervezeserol.html">Nyilatkozat az I. MTDK megszervezéséről</a>
                    <p class="news-card-date">2021.05.11</p>
                    <a class="news-card-more" href="News-nyilatkozat-az-I-MTDK-megszervezeserol.html">Tudj meg többet » </a>
                </div>
                <div class="news-card">
                    <a class="news-card-title" href="News-a-laptop-az-uj-konyvtar.html">A laptop az új könyvtár - online könyvtárak</a>
                    <p class="news-card-date">2021.04.22</p>
                    <a class="news-card-more" href="News-a-laptop-az-uj-konyvtar.html">Tudj meg többet » </a>
                </div>
                <div class="news-card">
                    <a class="news-card-title" href="News-jelentkezni-lehet-az-I-MTDKra.html">Jelentkezni lehet az I. MTDK-ra!</a>
                    <p class="news-card-date">2021.02.01</p>
                    <a class="news-card-more" href="News-jelentkezni-lehet-az-I-MTDKra.html">Tudj meg többet » </a>
                </div>
            </div>
            <a class="news-action-title" href="News.html">Tovább a hírek menüpontra »</a>
        </section>
    </main>
    <?php include "Footer.php"; ?>
    </div>
    <script src="script-home.js"></script>
</body>
</html>