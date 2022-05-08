<?php

// session_start();

const MESSAGES = [
    UPLOAD_ERR_OK => '<p class="upload-nok">Sikeres feltöltés!.<p>',
    UPLOAD_ERR_INI_SIZE => '<p class="upload-nok">Túl nagy a file amit fel szeretnél tölteni.</p>',
    UPLOAD_ERR_FORM_SIZE => '<p class="upload-nok">Maximum 10Mb nagyságú file feltöltése lehetséges.</p>',
    UPLOAD_ERR_NO_FILE => '<p class="upload-nok">Egyetlen file sincs feltöltve.</p>',
];

const FILE_MAX_SIZE = 10 * 1024 * 1024; //10MB


    function registration () { //regisztrációs form - egy új user regisztrál
        if (DBregister_user()) {
           
                echo "<h1 class='upload-ok'>Sikeres regisztráció.</h1>";

                include "Mail.php";

                $msgBody = '<h1 style="font-family: inherit; font-size: 1.2rem; font-weight: 700; color: #056571"> Kedves ' . $_POST["knev"] .', </h1> 
                            <p style="font-family: inherit; font-size: 1rem; color: #414141">Ezúton is értesítünk, hogy sikeresen regisztráltál az I MTDK-ra!</p>
                            <br>';

                if(isset($_POST["role"])) {
                    $section = str_replace('_', ' ', $_POST["section"]);
                    $msgBody .= '<hr style="border: 0.5px solid rgb(242, 242, 242);">
                                 <p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">A dolgozatod címe: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. $_POST["title"] . '</span></p>
                                 <p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">Szekció neve amelyikbe jelentkeztél: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. $section . '</span></p>';
                }

                $doc_status = "Nincs feltöltött dolgozat.";

                if(!empty($_FILES["document"]["name"])) 
                    $doc_status = "Sikeresen feltöltött dolgozat.";
                $msgBody .= '<p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">A dolgozat státusza: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. $doc_status . '</span></p>';

                prepareEmail($_POST["email"], 
                            "Sikeres regisztráció az I.MTDK-ra",
                            $msgBody
                             );                              


        }

    }

    function new_section() { //be van jelentkezve egy felhasználó és egy új szekcióba jelentkezik
        if (DBregister_doc()) {
            $section = str_replace('_', ' ', $_POST["section"]);
            echo "<h1 class='upload-ok'>Sikeres regisztráció a ". $section ." szekcióba.</h1>";

            include "Mail.php";

            $msgSubject = "Sikeres regisztráció az I. MTDK ". $section ." szekciójába";

            $msgBody = '<h1 style="font-family: inherit; font-size: 1.2rem; font-weight: 700; color: #056571"> Kedves ' . $_SESSION["fname"] .', </h1> 
            <p style="font-family: inherit; font-size: 1rem; color: #414141">Ezúton is értesítünk, hogy sikeresen regisztráltál az I MTDK ' . $section . ' szekciójába!</p>
            <br>
            <hr style="border: 0.5px solid rgb(242, 242, 242);">
            <p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">A dolgozatod címe: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. $_POST["title"] . '</span></p>';

            $doc_status = "Nincs feltöltött dolgozat.";
            if(!empty($_FILES["document"]["name"])) $doc_status = "Sikeresen feltöltött dolgozat.";
                $msgBody .= '<p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">A dolgozat státusza: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. $doc_status . '</span></p>';
                        
            prepareEmail($_POST["email"], $msgSubject, $msgBody);
        } else {
            echo "<h1 class='upload-nok'>Hiba lépett fel, kérjük próbálkozz újra.</h1>";
        }

    }

    function same_section() {  //egy új dokumentumot tölt fel egy szekcióba ahova már be volt jelentkezve

        if (empty($_FILES["document"]["name"])) $doc_name="";
        else {

        $section_name = $_POST["section_name"];
        
        if (isset($_SESSION["email"])) 
            $doc_name = $_SESSION["email"] . "_" . $section_name . ".pdf";
        else 
            $doc_name = $_POST["email"] . "_" . $section_name . ".pdf";

        if(doc_update($doc_name, $_POST["section_name"], $_POST["email"])) {
            $section = str_replace('_', ' ', $_POST["section_name"]);
            echo "<h1 class='upload-ok'>Sikeresen feltültötted a dolgozatod a ". $section ." szekcióba.</h1>";

            include "Mail.php";

            $msgSubject = "Sikeresen feltöltött dolgozat az I. MTDK-ra";

            $msgBody = '<h1 style="font-family: inherit; font-size: 1.2rem; font-weight: 700; color: #056571"> Kedves ' . $_SESSION["fname"] .', </h1> 
            <p style="font-family: inherit; font-size: 1rem; color: #414141">Ezúton is értesítünk, hogy sikeresen feltöltötted a dolgozatod az I MTDK ' . $section . ' szekciójába!</p>
            <br>
            <hr style="border: 0.5px solid rgb(242, 242, 242);">';
            
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
                $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $email = $_POST["email"];

                $docName_stmt = $pdo->query("SELECT Document FROM paper WHERE Email= '$email' AND SectionID = (SELECT SectionID FROM section WHERE Name = '$section')");
                $docName = $docName_stmt->fetchAll();

            } catch(PDOException $e) {
                echo "Connection failed! : " . $e;
            }
            $pdo = null;
            
            $msgBody .= '<p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">A dolgozatod címe: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. $docName[0]["Document"] . '</span></p>';

            prepareEmail($_POST["email"], $msgSubject, $msgBody);

        }
        else {
            echo "<h1 class='upload-nok'>Hiba lépett fel, kérjük próbálkozz újra.</h1>";
        }
    }
    }
    function new_pwd() { //jelszó változtatás
        if (DBregister_new_pwd_prepare()) {
            echo "<h1 class='upload-ok'>Sikeres jelszóváltoztatás.</h1>";

            include "Mail.php";

            prepareEmail($_POST["email"], 'Sikeresen megváltoztatott jelszó', '
                <h1 style="font-family: inherit; font-size: 1.2rem; font-weight: 700; color: #056571"> Kedves' . $_SESSION["fname"] .', </h1> 
                <p style="font-family: inherit; font-size: 1rem; color: #414141">Ezúton is értesítünk, hogy sikeresen megváltoztattad a jelszavad az I MTDK fiókodban.</p>');


        } else {
            echo "<h1 class='upload-nok'>Hiba lépett fel, kérjük próbálkozz újra.</h1>";
        }
    }

    function new_pwd_request() { //elfelejtett jelszó, kér egy újat
        if (valid_email($_POST["email"])) {
            $pwd_to_send = DBregister_generated_pwd();
            if ($pwd_to_send != "") {

                include "Mail.php";

                $msgBody = '<h1 style="font-family: inherit; font-size: 1.2rem; font-weight: 700; color: #056571"> Kedves felhasználó, </h1> 
                <p style="font-family: inherit; font-size: 1rem; color: #414141">Az új jelszó beállításáért klikkelj a gombra, majd írd be az alábbi kódot:</p>
                <h2 style="font-family: inherit; font-size: 1rem; font-weight: 700; color: #056571"> ' . $pwd_to_send . '
                <br>
                <br>
                <a href="http://localhost/Konferencia/Password-forgotten.php" style="font-family: inherit; padding:1rem; margin-top: 5rem; text-decoration: none; font-size: 1rem; border-radius: 25px; background-color: #056571; color: #F2F2F2">Jelszó megváltoztatása</a>';

                prepareEmail($_POST["email"], "Elfelejtett jelszó", $msgBody);

                echo "<h1 class='upload-ok'>A kód sikeresen el lett küldve a megadott e-mail címre.</h1>";

                }
        }
        else {echo "<h1 class='upload-nok'>Hiba lépett fel, kérjük próbálkozz újra.</h1>";}
        
    }

    function reset_pwd() { //elfelejtett jelszó, kért egy kódot és most változtassa meg

        //ellenőrzöm ha jó-e a kód
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $email_pwd_hash = sha1($_POST["email_pwd"]); 

            $credentials_stmt = $pdo->prepare("SELECT Email FROM user WHERE Email = ? AND Password = ?");
            $credentials_stmt->execute([$_POST["email"], $email_pwd_hash]);
            $credentials = $credentials_stmt->fetchAll();

            if (count($credentials) > 0) { //oké a megadott kód
                if(DBregister_new_pwd($_POST["email"], $_POST["new_pwd1"])) {
                    echo "<h1 class='upload-ok'>Sikeres jelszóváltoztatás.</h1>";

                    include "Mail.php";

                prepareEmail($_POST["email"], 'Sikeresen megváltoztatott jelszó', '
                <h1 style="font-family: inherit; font-size: 1.2rem; font-weight: 700; color: #056571"> Kedves felhasználó, </h1> 
                <p style="font-family: inherit; font-size: 1rem; color: #414141">Ezúton is értesítünk, hogy sikeresen megváltoztattad a jelszavad az I MTDK fiókodban.</p>');

                }
            }
            else {
                echo "<h1 class='upload-nok'>Hiba lépett fel, kérjük próbálkozz újra.</h1>";
            }

        } catch (PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
    }

    function new_doc_status() { //az admin meghatároz egy új státuszt a dokumentumnak

        if(DBRegister_new_doc_status()) {
            echo "<h1 class='upload-ok'>Sikeresen megváltoztatott státusz.</h1>";

            include "Mail.php";

            $msgSubject = "Megváltozott egy feltöltött dokumentumod státusza";

            include 'Sections-logo.php';

            $msgBody = '<h1 style="font-family: inherit; font-size: 1.2rem; font-weight: 700; color: #056571"> Kedves jelentkező, </h1> 
            <p style="font-family: inherit; font-size: 1rem; color: #414141">Ezúton is értesítünk, hogy megváltozott az I MTDK ' . $_POST["section_name"] . ' szekciójába feltöltött dolgozatod státusza!</p>
            <br>
            <hr style="border: 0.5px solid rgb(242, 242, 242);">
            <p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">A dolgozatod címe: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. $_POST["doc_title"] . '</span></p>
            <p style="font-family: inherit; font-size: 1rem; color: #414141; font-weight: normal;">A dolgozatod új státusza: <span style="font-family: inherit; font-size: 1rem; color: #056571; font-weight: bold">'. STATUSHU[$_POST["new_status_name"]] . '</span></p>';

            

            prepareEmail($_POST["email"], $msgSubject, $msgBody);

        } else {
            echo "<h1 class='upload-nok'>Hiba lépett fel, kérjük próbálkozz újra.</h1>";
        }


    }


  //--------------------------------------------------------------------------------------------------------//  

    function valid_email($email) { //létezik-e user a megadott e-mal címen
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->query("SELECT Email FROM user WHERE Email = '$email'");
            $user = $stmt->fetchAll();

            if (count($user) > 0) return true;
            else return false;

        } catch (PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
    }

    function DBregister_user() { //registers user to database
        $state = false;
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (valid_email($_POST["email"])) {
                echo "<h1 class='upload-nok'>A megadott e-mail cím már regisztrálva van.</h1>";
            }
            
            else { // regisztráljuk az új usert
                $role = 'Guest';

                if (isset($_POST["role"])) {
                    $role = 'Presenter';
                }
                
                //beszúrjuk az új felhasználót a user táblába
                $hashpwd = sha1($_POST["pwd1"]);
                
                $statement = $pdo->prepare("INSERT INTO user (Email, FirstName, LastName, Institution, AcademicDegree, Position, PhoneNumber, Role, Password, ConferenceID)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");                
                
                $statement->execute([$_POST["email"], $_POST["knev"], $_POST["vnev"], $_POST["inst"], $_POST["acdeg"], $_POST["position"], $_POST["phone"], $role, $hashpwd, 1]);
            
                $state = true;

                if($role == "Presenter" && !DBregister_doc()) $state=false;
            
            }

        } catch (PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
        return $state;
    }

    function DBregister_doc() { //registers file to database
        $state = false;
        try {

            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $paper_stmt = $pdo->prepare("INSERT INTO paper (Document, Status, Abstract, Title, CoAuthors, Email, SectionID)
                                        VALUES (?, ?, ?, ?, ?, ?, ?)");
            //sectionID meghatározása 
            $section_name = str_replace('_', ' ', $_POST["section"]);
            $sectionID_q = $pdo->query("SELECT SectionID FROM section WHERE Name = '$section_name'");
            $section = $sectionID_q->fetchAll();

            if (empty($section)) {
                echo "<h1 class='upload-nok'>Hiba lépett fel a szekció kikeresésekor.</h1>";
            }
            else {
                if (empty($_FILES["document"]["name"])) $doc_name="";
                else {
                
                if (isset($_SESSION["email"])) 
                    $doc_name = $_SESSION["email"] . "_" . $section_name . ".pdf"; 
                else 
                    $doc_name = $_POST["email"] . "_" . $section_name . ".pdf";
                
                if(!doc_register($_FILES["document"], $doc_name)) $doc_name=""; //ha feltöltéskor hiba lépett fel, ne jelenjen meg az adatbázisban mintha lenne dokumentuma

                }

                $paper_stmt->execute([$doc_name, 'New', $_POST["abstract"], $_POST["title"], $_POST["authors"], $_POST["email"], $section[0]['SectionID']]);
            
                $state=true;
            
            }

        } catch (PDOException $e) {
        echo "Connection failed! : " . $e;
        }
        $pdo = null;
        return $state;
    }

    function doc_register ($file, $new_name) { //registers file to server

        if ($file["error"]) {
            echo "<p class='upload-nok'>Hiba:</p> ";
            echo MESSAGES[$file["error"]];
        } else {
            if ($file["type"] == "application/pdf") {
                if ($file["size"] <= FILE_MAX_SIZE) {
                    move_uploaded_file($file["tmp_name"], "C:/xampp/htdocs/Konferencia/uploads/" . $new_name);
                    echo "<p class='upload-ok'>A dokumentum feltöltése sikeres.<p>";
                    return true;
                }
                else echo "<p class='upload-nok'>Hiba: A feltöltött file túl nagy</p>";
            }
            else echo "<p class='upload-nok'>Hiba: A feltöltött file kiterjesztése vagy .pdf vagy .PDF kell legyen</p>";
        }
        return false;
    }    
    
    function doc_update($doc_name, $section_name, $email) {
        $state = false;
        try {

            $section_name = str_replace('_', ' ', $section_name);

            if(doc_register($_FILES["document"], $doc_name)) {

                $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
                $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $stmt = $pdo->prepare('UPDATE paper SET Document=?, Status = ? WHERE Email = ? AND SectionID = (SELECT SectionID FROM section WHERE Name=?)');
                $stmt->execute([$doc_name,'New', $email, $section_name]);

                $state = true;
            }
            } catch (PDOException $e) {
                echo "Connection failed! : " . $e;
            }
            $pdo = null; 
            return $state;
    }

    function DBregister_section() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // szekció létezik-e már?
            $new_section = $_POST["section-name"];
            $sections_stmt = $pdo->query("SELECT Name FROM section WHERE Name = '$new_section'");
            $sections = $sections_stmt->fetchAll();

            if (count($sections) > 0) {
                echo "<h1 class='upload-nok'>Hiba: Már létezik szekció a megadott névvel.</h1>";
            } else {
                $insert_section = $pdo->prepare("INSERT INTO section (ConferenceID, Name, Description, Email) VALUES (?, ?, ?, ?)");
                $insert_section->execute([1, $_POST["section-name"], $_POST["desc"], $_POST["section-admin"]]);
                echo "<h1 class='upload-ok'>Szekció sikeresen létrehozva.</h1>";
            }

            

        } catch(PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
    }


    function DBregister_user_admin() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // user létezik-e már?
            $email = $_POST['email'];
            $stmt = $pdo->query("SELECT Email FROM user WHERE Email = '$email'");
            $user = $stmt->fetchAll();
            
            if (count($user) > 0) {
                echo "<h1 class='upload-nok'>Hiba: A megadott e-mail cím már regisztrálva van.</h1>";
            }
            else {
                $pwd = "*Admin12345";
                $hashpwd = sha1($pwd);

                $statement = $pdo->prepare("INSERT INTO user (Email, FirstName, LastName, Institution, AcademicDegree, Position, PhoneNumber, Role, Password, ConferenceID)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");                
                
                $statement->execute([$_POST["email"], $_POST["knev"], $_POST["vnev"], $_POST["inst"], $_POST["acdeg"], $_POST["position"], $_POST["phone"], 'Admin', $hashpwd, 1]);

                echo "<h1 class='upload-ok'>Sikeres regisztráció.</h1>";

            }

        } catch(PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
    }

    function DBregister_new_pwd_prepare() {
        $status = false;
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $old_pwd_hash = sha1($_POST["old_pwd"]);

            $email = $_POST["email"];
            $old_pwd_statement = $pdo->query("SELECT Password FROM user WHERE Email = '$email'");
            $old_pwd = $old_pwd_statement->fetchAll();

            if ($old_pwd_hash == $old_pwd[0]["Password"]) {
                
               if (DBregister_new_pwd($email, $_POST["new_pwd1"])) $status=true;

            } else {
                echo "<h1 class='upload-nok'>Helytelen régi jelszó.</h1>";
            }


        } catch(PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
        return $status;
    }

    function DBregister_new_pwd($email, $pwd) {
        $status = false;
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $new_pwd_stmt = $pdo->prepare("UPDATE user SET Password = ? WHERE Email = ?");
            $new_pwd_hash=sha1($pwd);

            $new_pwd_stmt->execute([$new_pwd_hash, $email]);

            $status = true;

        } catch(PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
        return $status;
    }

    function DBregister_generated_pwd() {
        $return_pwd = "";

        //generate pwd
        $pwd_chars = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pwd_length = rand(8, 16);

        $generated_pwd = "";

        //hogy biztos legyen benne kisbetű, nagybetű és szám
        $generated_pwd[0] = $pwd_chars[rand(0, 25)];
        $generated_pwd[1] = $pwd_chars[rand(26, 50)];
        $generated_pwd[2] = $pwd_chars[rand(51, strlen($pwd_chars) - 1)];

        for ($i=3; $i<$pwd_length; $i++) {
            $generated_pwd[$i] = $pwd_chars[rand(0, strlen($pwd_chars) - 1)];
        }

        //elmentem az adatbázisba a generált pwd-t és visszatérítem hogy majd emailben is el tudjam küldeni

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $new_pwd_stmt = $pdo->prepare("UPDATE user SET Password = ? WHERE Email = ?");
            $new_pwd_hash=sha1($generated_pwd); 
            $new_pwd_stmt->execute([$new_pwd_hash, $_POST["email"]]);

            $return_pwd = $generated_pwd;

        } catch(PDOException $e) {
            echo "Connection failed!: " . $e;
        }
        $pdo = null;
        return $return_pwd;

    }

    function DBRegister_new_doc_status() {
        $status = false;
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $section_id_stmt = $pdo->prepare("SELECT SectionID FROM section WHERE Name = ?");
            $section_id_stmt->execute([$_POST["section_name"]]);
            $section_id = $section_id_stmt->fetchAll();

            $doc_update_stmt = $pdo->prepare("UPDATE paper SET Status = ? WHERE Email = ? AND SectionID = ?");
            $doc_update_stmt->execute([$_POST["new_status_name"], $_POST["email"], $section_id[0]["SectionID"]]);

            $status = true;

        } catch(PDOException $e) {
            echo "Connection failed!: " . $e;
        }
        $pdo = null;
        return $status;

    }


?>