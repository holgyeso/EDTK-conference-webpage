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
        <link rel="stylesheet" href="User-style.css">
        <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
    </head>
    <body>
        <div class="container">
            <?php include "Header.php" ?>
            <main>

                <?php if(!isset($_SESSION["email"])): ?>

                    <form class="logon-form" id="loginForm" method="post" action="Password-change.php" enctype="multipart/form-data"> 

                    <h3>Új jelszó</h3>

                    <p>Add meg az e-mail címed és az e-mailben kapott kódot.</p>

                    <button type="submit" name="pwd-request-again" id="resend-button">Kód újraküldése</button>

                </form>

                <form class="logon-form" id="pwd-forgotten" method="post" action="Registration-DB.php" enctype="multipart/form-data"> 

                    <input name = "email" type="email" class="logon-form-field" placeholder="E-mail*" required> 
                    <input name = "email_pwd" type="password" class="logon-form-field" placeholder="E-mail-ben kapott kód*" required>
                    <input name = "new_pwd1" id="pwd1" type="password" class="logon-form-field" placeholder="Új jelszó*" required>
                    <input name = "new_pwd2" id="pwd2" type="password" class="logon-form-field" placeholder="Új jelszó mégegyszer*" required>

                    <button type="submit" name="reset-pwd">Jelszó megváltoztatása</button>

                </form>

                <?php else: header("Location: http://localhost/Konferencia/Password-change.php") ?>
                <?php endif ?>

            </main>
        <?php include "Footer.php"; ?>
                    </div>
        <script src="script-header.js"></script>
        <script src="script-pwdchange.js"></script>
</body>
</html>