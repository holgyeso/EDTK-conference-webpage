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
    <link rel="stylesheet" href="Login-style.css">
    <title>I. MTDK - Magyar Tudományos Diákkonferencia</title>
</head>
<body>
    <div class="container">
    <?php include "Header.php"; ?>
        <main>
            <?php if (!isset($_SESSION["email"])): ?>
            <div class="login-container">
                <div class="background-img"></div>            

                <form class="login-form" id="loginForm" method="post" action="Login.php">

                    <h3>Belépés</h3>

                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // echo "<label> POST! </label>";

                            try {

                                $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
                                $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                $hashpwd = sha1($_POST["pwd"]);
                                $email = $_POST["email"];
                
                                $user_stmt = $pdo->query("SELECT * FROM user WHERE Email = '$email' AND Password = '$hashpwd'");
                                $user_info = $user_stmt->fetchAll();
                
                                if (count($user_info) > 0) { //ha létezik a user és a jelszó is jó volt

                                    //elmentjük a szükséges adatokat a SESSION tömbbe
                                    $_SESSION['email'] = $user_info[0]['Email'];
                                    $_SESSION['fname'] = $user_info[0]['FirstName'];
                                    $_SESSION['lname'] = $user_info[0]['LastName'];
                                    $_SESSION['role'] = $user_info[0]['Role'];
                                    //azt is elmentem, hogy van-e feltöltve dokumentuma
                                    $doc_stmt = $pdo->query("SELECT Document FROM paper WHERE Email = '$email'");
                                    $doc = $doc_stmt->fetchAll();
                                    $_SESSION['hasPaper'] = ($doc[0]['Document'] != '');

                                    //átírányítom a Homepage-re
                                    header("Location: http://localhost/Konferencia/Homepage.php");
                                }
                                else {
                                    echo "<label class='login-error'>Helytelen e-mail cím vagy jelszó! </label>";
                                }

                            } catch(PDOException $e) {
                                echo "Connection failed! : " . $e;
                            }

                        }  
                    ?>

                    <input name="email" type="email" class="login-form-field" placeholder="E-mail" required>
                    <input name="pwd" type="password" class="login-form-field" placeholder="Jelszó" required>
                    <button type="submit">BEJELENTKEZÉS</button>
                    <a href="Password-change.php">Elfelejtettem a jelszót</a>
                    <div class="login-form-and">
                        <p>VAGY</p>
                        <div></div>
                    </div>
                    <a href="Registration.php">REGISZTRÁLJ MOST!</a>
                    
                </form>
            </div>
        <?php else: header("Location: http://localhost/Konferencia/User.php")?>
        <?php endif ?>
        </main>
        <?php include "Footer.php"; ?>
                    </div>
        <script src="script-login.js"></script>
        <script src="script-header.js"></script>
</body>
</html>
