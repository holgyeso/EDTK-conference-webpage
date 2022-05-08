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
        <link rel="stylesheet" href="User-style.css">

        <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
    </head>
    <body>
        <div class="container">
            <?php include "Header.php" ?>
            <main>
                <?php if(isset($_SESSION["email"])): ?> <!-- ha be van jelentkezve és úgy akar jelszót változtatni -->


                <form class="logon-form" id="pwdChangeForm" method="post" action="Registration-DB.php" enctype="multipart/form-data"> 

                    <h3>Jelszó változtatás</h3>

                    <input name = "old_pwd" type="password" class="logon-form-field" placeholder="Régi jelszó*" required> 
                    <input name = "new_pwd1" type="password" class="logon-form-field" placeholder="Új jelszó*" required> 
                    <input name = "new_pwd2" type="password" class="logon-form-field" placeholder="Új jelszó megerősítése*" required> 
                    <input type="text" name="email" value= <?php echo $_SESSION["email"] ?>  hidden>

                <button type="submit" name="pwd-change">Mentés</button>

                </form>

                <?php else:?> <!-- nincs bejelentkezve => elfelejtett jelszó -->

                <form class="logon-form" id="loginForm" method="post" action="Registration-DB.php" enctype="multipart/form-data"> 

                    <h3>Elfelejtett jelszó</h3>
                    <p>Add meg az e-mail címed és küldünk neked e-mailben egy kódot amivel megváltoztathatod a jelszavad.</p>
                    <input name = "email" type="email" class="logon-form-field" placeholder="E-mail*" required> 
                    <button type="submit" name="new-pwd-request">Küldés</button>

                </form>

                <?php endif ?>
                
            </main>
                <?php include "Footer.php" ?>
            <script src="script-header.js"></script>
            <script src="script-pwdchange.js"></script>
    </body>
</html>