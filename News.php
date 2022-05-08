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
                <section class="page-title">
                    <h1 class="page-tilte-text">Hírek</h1>
                </section>

                <section class="news">
                    <div class="news-cards">
                        <div class="news-card">
                            <img class="news-card-image" src="image/news_megszervezes.jpg" alt="Zoom meeting laptopon és egy jegyzetelő személy">
                            <div class="news-card-content">
                                <a class="news-card-title" href="News-nyilatkozat-az-I-MTDK-megszervezeserol.php">Nyilatkozat az I. MTDK megszervezéséről</a>
                                <p class="news-card-date">2021.05.11</p>
                                <a class="news-card-more" href="News-nyilatkozat-az-I-MTDK-megszervezeserol.php">Tudj meg többet » </a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img class="news-card-image" src="image/news_onlinelibrary.jpg" alt="Egy könyvtár">
                            <div class="news-card-content">
                                <a class="news-card-title" href="News-a-laptop-az-uj-konyvtar.php">A laptop az új könyvtár - online könyvtárak</a>
                                <p class="news-card-date">2021.04.22</p>
                                <a class="news-card-more" href="News-a-laptop-az-uj-konyvtar.php">Tudj meg többet » </a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img class="news-card-image" src="image/news_jelentkezz.jpg" alt="Laptopon író személy">
                            <div class="news-card-content">
                                <a class="news-card-title" href="News-jelentkezni-lehet-az-I-MTDKra.php">Jelentkezni lehet az I. MTDK-ra!</a>
                                <p class="news-card-date">2021.02.01</p>
                                <a class="news-card-more" href="News-jelentkezni-lehet-az-I-MTDKra.php">Tudj meg többet » </a>
                            </div>
                        </div>
                    </div>
                </section> 
            </main>
            <?php include "Footer.php"; ?>
        </div>
    </body>
</html>