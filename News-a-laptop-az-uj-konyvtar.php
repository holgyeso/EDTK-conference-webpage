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
                    <div class="single-news-image" id="laptop-az-uj-konyvtar">
                    </div>
                    <h2 class="single-news-title">A laptop az új könyvtár - online könyvtárak</h2>
                    <p class="single-news-date">2021.04.22</p>
                </div>
                <div class="single-news-desc">
                    <p class="single-news-desc-subtitle">Bár a jelenlegi helyzet nem teszi lehetővé, hogy könyvtári, levéltári kutatómunkát végezzünk, több online adatbázis is a rendelkezésünkre áll. Eredményes keresést, böngészést, kutatást!</p>
                    <p class="single-news-desc-text"><a href="https://www.arcanum.hu/hu/adt/">Arcanum adatbázis</a></p>
                    <p class="single-news-desc-text">Március 16-tól kezdődően egy hónapra nyilvánossá teszi Magyarország legnagyobb, jelenleg közel 27 millió folyóirat és újság oldalt tartalmazó periodika adatbázisát, az Arcanum Digitális Tudománytárat. A nyilvános időszak alatt az előfizetéssel nem rendelkező felhasználók a tartalomletöltés kivételével a szolgáltatás minden funkcióját igénybe vehetik. Egyszeri regisztrációval 1-1 oldal letöltésére is lehetőség nyílik.</p>
                    <p class="single-news-desc-text"><a href="https://www.szaktars.hu/">Szaktárs Adatbázis Portál</a></p>
                    <p class="single-news-desc-text">Április 23-ig mindenki számára hozzáférhetővé teszik a SZAKTÁRSON keresztül elérhető szakkönyv adatbázisait. A portálhoz csatlakozott kiadók művei mindenki számára szabadon kereshetők, a nyílt hónap alatt megjeleníthetők, a tartalmak letöltésére azonban csak intézményi előfizetőknek van lehetősége.</p>
                    <p class="single-news-desc-text"><a href="http://eisz.mtak.hu/index.php/hu/378-a-koronavirus-jarvany-ideje-alatt-szabadon-hozzaferheto-nemzetkozi-szakirodalmi-forrasok.html?fbclid=IwAR2IHPwxt0iLPA1KGJMsPdv4RsCIaatwKi-h7BFBNQ546K2XW3dAx2fbp_g#szakirodalmi-forrasok-a-felsooktatasnak"><strong>Összefoglaló a koronavírus-járvány ideje alatt szabadon hozzáférhető nemzetközi szakirodalmi források</strong></a>
                    <p class="single-news-desc-text">Rendszeresen frissülő gyűjtemény a koronavírus-járvány idején szabadon hozzáférhető online szakirodalmi forrásokról.</p>
                    <p class="single-news-desc-text"><a style="font-weight: normal" href="https://docs.google.com/spreadsheets/d/1pFSA-yEDixl5ZKtQmEUOuW_vdDFLdzDbhjP5Cjrkajo/edit?usp=sharing">A teljes táblázatért kattints ide »</a>
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
    <script src="script-header.js"></script>
</body>
</html>