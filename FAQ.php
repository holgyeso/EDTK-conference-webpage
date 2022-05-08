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
    <link rel="stylesheet" href="FAQ-style.css">
    <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
</head>
<body>
    <div class="container">
    <?php include "Header.php"; ?>
        <main>
            <div id="accordion">
                <h3><span class="accordion-img">+</span>Mikor kerül megrendezésre az I. MTDK?</h3>
                <div>
                  <p>
                    Június 1-10 között lesz megszervezve az I. Magyar Tudományos Diákköri Konferencia (MTDK).
                  </p>
                </div>
                <h3><span class="accordion-img">+</span>Lehet-e más magyar nyelvű egyetemekről jelentkezni?</h3>
                <div>
                  <p>
                  Nem, az MTDK-ra kizárólag a Babeș-Bolyai Tudományegyetemen aktív egyetemi státusszal rendelkező hallgatók jelentkezhetnek
                  </p>
                </div> 
                <h3><span class="accordion-img">+</span>Mutathat be egy adott szerző több dolgozatot is?</h3>
                <div>
                  <p>
                  Igen, egy szerző akár több dolgozattal is jelentkezhet egy szekcióba.
                  </p>
                </div>
                <h3><span class="accordion-img">+</span>Lehet-e több szekcióba is jelentkezni?</h3>
                <div>
                  <p>Egy hallgató akárhány szekcióba nevezhet.</p>
                </div>
              </div>
        </main>
        <?php include "Footer.php"; ?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="script-jquery.js"></script>

</body>
</html>