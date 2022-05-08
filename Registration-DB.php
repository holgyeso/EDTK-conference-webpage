<?php session_start() ?>
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
        <link rel="stylesheet" href="Registration-style.css">
        <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
    </head>
    <body>
        <div class="container">
            <?php include "Header.php" ?>
            <main>
            
            <div class="upload-status">

<?php

    include "Registration-DB-functions.php";

    if (isset($_POST["new-section"])) { //be van jelentkezve és egy új szekcióba jelentkezik
        new_section();
    }
    else if (isset($_POST["same-section"])) { //egy új dokumentumot tölt fel egy szekcióba ahova már be volt jelentkezve
        same_section();
    }
    else if (isset($_POST["registration"])) { //regisztrációs form
        registration();
    }
    else if (isset($_POST["make-new-section"])) { //SuperAdmin regisztrál egy form-ot
        DBregister_section();
    }
    else if (isset($_POST["make-new-admin"])) { //SuperAdmin regisztrál egy admint
        DBregister_user_admin();
    }
    else if (isset($_POST["pwd-change"])) { //jelszó változtatás
        new_pwd();
    }
    else if (isset($_POST["new-pwd-request"])) { //elfelejtett jelszó, kér egy újat
        new_pwd_request();
    }
    else if (isset($_POST["reset-pwd"])) { //elfelejtett jelszó, kért egy kódot és most változtassa meg
        reset_pwd();
    }
    else if (isset($_POST["new-doc-status"])) { //az admin meghatároz egy új státuszt a dokumentumnak
        new_doc_status();
    }

?>
                <p class="redirect-text">Átirányítás a profilra</p>
                <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                <?php header("Refresh: 3; URL = http://localhost/Konferencia/User.php");?>
            </div>


        </main>
        <?php include "Footer.php"; ?>
                    </div>
        <script src="script-header.js"></script>
</body>
</html>