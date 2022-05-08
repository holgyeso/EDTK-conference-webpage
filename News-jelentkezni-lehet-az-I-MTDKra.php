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
                    <div class="single-news-image" id="jelentkezni-lehet-az-I-MTDK-ra"></div>
                    <h2 class="single-news-title">Jelentkezni lehet az I. MTDK-ra!</h2>
                    <p class="single-news-date">2021.02.01</p>
                </div>
                <div class="single-news-desc">
                    <p class="single-news-desc-subtitle">Idén június 1-10. között szervezik meg Kolozsváron az I. Magyar Tudományos Diákköri Konferenciát (MTDK).</p>
                    <p class="single-news-desc-text">A Magyar Tudományos Diákköri Konferencia (MTDK) biztosítja a reál- és humántudományok különböző területein a Babeș-Bolyai Tudományegyetem felsőoktatási intézmény hallgatói számára, hogy összemérjék saját kutatási eredményeiket, szakmai tudásukat.</p>
                    <p class="single-news-desc-text">A kolozsvári MTDK elismertségét és szakmai hitelességét bizonyítja, hogy ez az egyedüli egyetemi szinten szervezett reál- és humántudományi konferencia, amelyen részvételi jogot szerezhetnek a hallgatók az Erdélyi Tudományos Diákköri Konferenciára (ETDK), az adott tudományterületeken belül.</p>
                    <p class="single-news-desc-text">A konferenciára nevezni vágyó egyetemi hallgatók 42 szekció közül választhatnak reál- és humántudományi területekről. Jelentkezni az online felületen lehet április 1-ig az MTDK honlapján, ahol a rengeteg hasznos információ mellett a meghírdetett szekciók is megtalálhatók.</p>
                    <p class="single-news-desc-text">A fent említett időpontig csak a személyes adatokat kell megadni. A kivonatokat (a dolgozat összefoglalója), a szakdolgozat témáját, címét illetve szakmai vezetőjét és a tanári igazolást április 1-ig kérjük a szervezőkhöz eljuttatni ugyancsak az online felületre belépve. A dolgozatok végleges változatát május 14-ig elektronikusan, május 15-16 között pedig személyesen várjuk a jelentkezőket adatellenőrzésre.</p>
                    <p class="single-news-desc-text">Az MTDK szervezői bizottsága a Babeş–Bolyai Tudományegyetem, Kolozsvári Magyar Diákszövetség és a Kolozsvári Magyar Egyetemi Intézet.</p>
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