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
                <?php if(isset($_SESSION["email"])): ?>

                <div class="user-container">
                    <h1 class="user-hello" > Üdvözlünk, <?php echo $_SESSION["fname"] ?> </h1>

                    <?php 
                    
                    switch($_SESSION["role"]) {
                        case "Presenter": 
                            include "User-Presenter.php";
                            break;
                        case "SuperAdmin":
                            include "User-SuperAdmin.php";
                            break;
                        case "Guest":
                            include "User-Guest.php";
                            break;
                    }
                    ?>

                    <?php if ($_SESSION["role"] == "Admin"): ?>

                    <?php

                        include "Sections-logo.php";
                        $section_paper = sections_papers_admin();

                    ?>

                    <div class="admin-container">
                        <div class="select">
                        <select id="section-choose" class="admin-section-choose">
                            <option value="Default" class="admin-section">Válassz szekciót</option>

                            <?php 
                                foreach ($section_paper as $section => $sectionInfo) {
                                    $section_option = str_replace(' ', '_', $section);
                                    echo '<option value=' . $section_option . ' class="admin-section">'. $section .'</option>';
                                }
                            ?>

                        </select>

                        </div>

                        <?php 
                            echo '
                            <div class="papers-container-per-section-header" id="header">
                                <p class="paper-header">A dolgozat címe</p>
                                <p class="paper-header">A bemutató neve</p>
                                <p class="paper-header">Absztrakt</p>
                                <p class="paper-header">A dolgozat státusza</p>
                                <p class="paper-header">Státusz módosítása</p>
                            </div>';

                            //kiiratom az összes papert; a div id-ja a szekció neve lesz amelyikhez tart
                            foreach ($section_paper as $section => $sectionInfo) {
                                echo '<div class="papers-container-per-section" id='. $section .'>';

                                    foreach ($sectionInfo as $paper => $paperInfo) {
                                        echo '<div class="paper" id = '. $section .'>
                                                <p class="paper-title">'. $paperInfo["title"] .'</p>
                                                <p class="paper-presenter">' . $paperInfo["presenter"] .'</p>';

                                        if (strlen($paperInfo["abstract"]) > 250) $abstract = mb_substr($paperInfo["abstract"], 0, 250) . '...';
                                        else $abstract = $paperInfo["abstract"];
                                        echo   '<a class="paper-abstract" href="download.php?path='.$paperInfo["doc_name"].'" >'. $abstract .'<span> [Dolgozat letöltése]</span></a>
                                                <p class="paper-status">'. $paperInfo["status"] .'</p>
                                                
                                                <form class="status-change" action="Registration-DB.php" method="post" >

                                                    <select name="new_status_name"> 
                                                        <option value="Default" class="status-change-section">Státusz módosítása</option>';
                                            
                                        foreach (STATUSHU as $status_eng => $status_hu) {
                                            if ($paperInfo["status"] != $status_hu)
                                                echo '<option name="new-status" value="'. $status_eng .'" class="status-change-section">'. $status_hu .'</option>';
                                        }


                                        echo '      </select>
                                                    <input type="text" name="section_name" value=' . $section . ' hidden>
                                                    <input type="text" name="email" value=' . $paperInfo["email"] . ' hidden>
                                                    <input type="text" name="doc_title" value=' . $paperInfo["title"] . ' hidden>
                                                    <button type="submit" name="new-doc-status">Mentés</button>
                                                </form>
                                              </div>';
                                    }

                                echo '</div>';
                            }

                        ?>
                        


                    </div>

                    
                <?php endif ?>

                        
                </div>
                        <div class="logout">
                            <a href="Password-change.php" class="pwd-change">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Jelszó változtatás
                            </a>
                            <a href="Log-out.php" class = "log-out">
                                Kilépés
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    <?php else: header("Location: http://localhost/Konferencia/Login.php"); ?>
                    <?php endif ?>
                    <?php include "Footer.php"; ?>
            </main>
            <script src="script-header.js"></script>
            <script src="script-user.js"></script>
            <script src="admin-script.js"></script>
            
    </body>
</html>