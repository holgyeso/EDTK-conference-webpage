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
    <link rel="stylesheet" href="Registration-style.css">
    <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
</head>
<body>
    <div class="container">
    <?php include "Header.php"; ?>
    <main>
        <?php if(!isset($_SESSION["email"])): ?>
            <div class="logon-container">
                <div class="background-img"></div>
                <form class="logon-form" id="loginForm" method="post" action="Registration-DB.php" enctype="multipart/form-data">
                    <h3>Regisztráció</h3>
                    
                    <div class = "role-container">
                        
                        <p class="role-guest">Regisztráció mint <span>vendég</span></p>
                        
                        <label for="role" class="toggle-switch">
                            <input class="toggle-switch" type="checkbox" name="role" id="role" unchecked>
                            <span class="slider-round"></span>
                        </label>

                        <p class="role-presenter">Regisztráció mint <span>előadó </span></p>
                    </div>
                    
                    <!-- Minden bejelentkezőtől el kell kérni  -->
                    
                    <input name = "vnev" type="text" class="logon-form-field" placeholder="Vezetéknév*" required>
                    <input name = "knev" type="text" class="logon-form-field" placeholder="Keresztnév*" required>
                    <input name = "email" type="email" class="logon-form-field" placeholder="E-mail*" required>
                    <input name = "pwd1" type="password" class="logon-form-field" placeholder="Jelszó*" required> 
                    <input name = "pwd2" type="password" class="logon-form-field" placeholder="Jelszó megerősítése*" required> 
                    <input name = "phone" type="number" pattern="^(+4){0,1}0[0-9]{9}$" class="logon-form-field" placeholder="Telefonszám">
                    <input name ="inst" type="text" class="logon-form-field" placeholder="Intézmény*" required>
                    <input name = "position" type="text" class="logon-form-field" placeholder="Pozició*" required>
                    <input name = "acdeg" type="text" class="logon-form-field" placeholder="Tudományos fokozat">
                   
                    <!-- Csak az előadóktól kell elkérni -->
                    <input name = "title" type="text" class="logon-form-field-presenter" id="doc-title" placeholder="A dolgozat címe*"> 
                    <select name="section" class="logon-form-field-presenter" id="section">
                        <option value = "Default">Válassz szekciót a listából*</option>
                        <?php
                            try {
                                //csatlakozás az AB-hoz
                                $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
                                $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                //szekciók lekérése
                                $stmt = $pdo->query("SELECT Name FROM section");
                                $sections = $stmt->fetchAll();
                                foreach ($sections as $section => $sectionName)
                                    
                                    echo "<option value = " . $sectionName['Name'] . ">" . $sectionName['Name'] . "</option>" . "<br>";
                            }
                            catch (PDOException $e) {
                                echo "No connection with database";
                            }
                            $pdo=null;
                        ?>
                    </select>
                    <input name = "authors" type="text" class = "logon-form-field-presenter" id="co-authors" placeholder="A dolgozat társszerzői">
                    <textarea name = "abstract" id="abstract" class="logon-form-field-presenter"  placeholder="Absztrakt*"></textarea>

                    <div class="document" id="doc-container">
                        <label for="document">Töltsd fel a dolgozatod (ha most nem szeretnéd, a későbbiekben is lesz lehetőséged)</label>
                        <input type="file" name="document" id="document" >
                    </div>



                    <label for="cond"> <input type="checkbox" class="logon-checkbox" id="cond" name="condd" required> <span class="cond-span">Elfogadom az Adatfelhasználási feltételeket</span></label>
                    <!--<input name = "title" type="text" class="logon-form-field" id="doc-title" required disabled> 
                    <input name = "title" type="text" class="logon-form-field" id="doc-title" required disabled> 
                    <input name = "title" type="text" class="logon-form-field" id="doc-title" required disabled> 
                    <input name = "title" type="text" class="logon-form-field" id="doc-title" required disabled> 
                    <input name = "title" type="text" class="logon-form-field" id="doc-title" required disabled> 
                    <input name = "title" type="text" class="logon-form-field" id="doc-title" required disabled>  -->
                    
                    <button type="submit" name="registration">REGISZTRÁCIÓ</button>
                    
                </form>
            </div>
            <?php else: ?>  
            <?php header("Location: http://localhost/Konferencia/User.php") ?>
            <?php endif ?>
        </main>
        <?php include "Footer.php"; ?>
        <script src="script-registration.js"></script>
    </div>
</body>
<html>