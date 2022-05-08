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
    <link rel="stylesheet" href="News-style.css">
    <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
</head>
<body>
    <div class="container">
    <?php include "Header.php"; ?>
        <main>
            <selection class="single-news">
                <div class="single-news-header">
                    <div class="single-news-image" id="nyilatkozat-az-I-MTDK-megszervezeserol">
                    </div>
                    <h2 class="single-news-title">Nyilatkozat az I. MTDK megszervezeserol</h2>
                    <p class="single-news-date">2021.05.11</p>
                </div>
                <div class="single-news-desc">
                    <p class="single-news-desc-subtitle">Az I. Magyar Tudományos Diákköri Konferencia (MTDK) online lesz megszervezve 2021. június 1-10 között.</p>
                    <p class="single-news-desc-text">A jelenlegi helyzetet és korlátozásokat figyelembe véve, az MTDK szervezőcsapata úgy döntött, hogy az MTDK idén online kerül megszervezésre, de amennyiben meglesz a kellő számú pályamunka, ősszel is sor fog kerülni egy konferenciára. A döntés meghozatalakor azt tartottuk szem előtt, hogy minél több diáknak adjunk lehetőséget a részvételre.</p>
                    <p class="single-news-desc-text">Az online konferencia egy biztos megszervezési lehetőség. A résztvevők eddig befektetett munkája értékelésre kerül és a konferencián való részvétel így motiváció az akadémiai életben való aktív részvétel folytatására ebben a nehéz időszakban is. A végzős évfolyamos résztvevők számára a részvétel segítség az államvizsgára való felkészülésben, az elért eredmények pedig hasznosíthatóak lesznek a továbbtanulásban. </p>
                    <p class="single-news-desc-text">A vírus miatti korlátozások több hallgató kutatói munkájában akadályt jelentenek, így sokan nem tudnak megfelelő ütemben haladni a dolgozatokkal vagy nem megfelelő minőségű pályamunkával tudnak elkészülni. Az őszi konferenciára azon diákok jelentkezését várjuk, akik kutatása felfüggesztődött, de új résztvevők számára is megnyitjuk a felületet.</p>
                    <p class="single-news-desc-text">A fent említett időpontig csak a személyes adatokat kell megadni. A kivonatokat (a dolgozat összefoglalója), a szakdolgozat témáját, címét illetve szakmai vezetőjét és a tanári igazolást április 1-ig kérjük a szervezőkhöz eljuttatni ugyancsak az online felületre belépve. A dolgozatok végleges változatát május 14-ig elektronikusan, május 15-16 között pedig személyesen várjuk a jelentkezőket adatellenőrzésre.</p>
                    <p class="single-news-desc-text">Bízunk abban, hogy a felkínált lehetőségek által  minél több hallgató tud részt venni a konferencián és az eddig befektetett munkáját kamatoztatni tudja.</p>
                    <p class="single-news-desc-text" style="margin-bottom: 0;">Kitartást és jó munkát kíván,</p>
                    <p class="single-news-desc-text" style="font-style: italic;">az MTDK Szervezőbizottsága</p>
                </div>
            </selection>
            <selection class="further-news">
                <div class="further-news-cont">
                    <h3 class="further-news-title">Legfrissebb hírek</h3>
                    <div class="further-news-cards">
                        <div class="further-news-card">
                            <a class="news-card-title" href="News-nyilatkozat-az-I-MTDK-megszervezeserol.php">Nyilatkozat az I. MTDK megszervezéséről</a>
                            <p class="news-card-date">2021.05.11</p>
                            <a class="news-card-more" href="News-nyilatkozat-az-I-MTDK-megszervezeserol.php">Tudj meg többet » </a>
                        </div>
                        <div class="further-news-card">
                            <a class="news-card-title" href="News-a-laptop-az-uj-konyvtar.php">A laptop az új könyvtár - online könyvtárak</a>
                            <p class="news-card-date">2021.04.22</p>
                            <a class="news-card-more" href="News-a-laptop-az-uj-konyvtar.php">Tudj meg többet » </a>
                        </div>
                        <div class="further-news-card">
                            <a class="news-card-title" href="News-jelentkezni-lehet-az-I-MTDKra.php">Jelentkezni lehet az I. MTDK-ra!</a>
                            <p class="news-card-date">2021.02.01</p>
                            <a class="news-card-more" href="News-jelentkezni-lehet-az-I-MTDKra.php">Tudj meg többet » </a>
                        </div>
                    </div>
                    <div class="further-news-all">
                        <a href="News.php">Tovább az összes hírre »</a>
                    </div>
                </div>
            </selection>
        </main>
        <?php include "Footer.php"; ?>
    </div>
</body>
</html>