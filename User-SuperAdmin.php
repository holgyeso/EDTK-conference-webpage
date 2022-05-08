
                <?php if(isset($_SESSION["email"])): ?>

    <div class="docs-container">
                            <p class="docs-container-title">A konferencia kezelése:</p>
                                <!-- ÚJ SZEKCIÓ LÉTREHOZÁSA -->
                                <div class="docs-doc">
                                    <div class="docs-section">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        <p>ÚJ SZEKCIÓ LÉTREHOZÁSA</p>
                                    </div>
                                    <div class="docs-status" id="make-new-section">
                                        <form class="make-new-section" id="newSectionForm" method="post" action="Registration-DB.php" enctype="multipart/form-data">
                                            <input name = "section-name" type="text" class="logon-form-field" placeholder="Szekció neve*" required>
                                            <textarea name = "desc" id="desc" class="logon-form-field-presenter" placeholder="Leírás*"></textarea>
                                            
                                            <select name="section-admin" class="logon-form-field-presenter" id="section-admin">
                                                <option value = "Default">Válassz szekcióvezetőt az alábbi listából*</option>
                                                <?php
                                                    try {
                                                        //csatlakozás az AB-hoz
                                                        $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
                                                        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                                                        //szekciók lekérése
                                                        $stmt = $pdo->query("SELECT Email FROM user WHERE Role='Admin'");
                                                        $admins = $stmt->fetchAll();
                                                        foreach ($admins as $admin => $admin_email)
                                                            echo "<option value = " . $admin_email['Email'] . ">" . $admin_email['Email']  . "</option>" . "<br>";

                                                    } catch (PDOException $e) {
                                                        echo "No connection with database";
                                                    }
                                                    $pdo=null;
                                                    
                                                ?>
                                            </select>
                                        
                                            <button type="submit" name="make-new-section">LÉTREHOZÁS</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="docs-doc">
                                    <div class="docs-section">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        <p>ÚJ ADMIN REGISZTRÁLÁSA</p>
                                    </div>
                                    <div class="docs-status" id="new-section">
                                        <!-- Az adminokat regisztrálja a SuperAdmin a *Admin12345 jelszóval és első bejelentkezéskor meg kell változtassa az Admin -->
                                        <form class="make-new-admin" id="new-admin" method="post" action="Registration-DB.php" enctype="multipart/form-data">
                                            
                                            <input name = "vnev" type="text" class="logon-form-field" placeholder="Vezetéknév*" required>
                                            <input name = "knev" type="text" class="logon-form-field" placeholder="Keresztnév*" required>
                                            <input name = "email" type="email" class="logon-form-field" placeholder="E-mail*" required>
                                            <input name = "phone" type="number" pattern="^(+4){0,1}0[0-9]{9}$" class="logon-form-field" placeholder="Telefonszám">
                                            <input name ="inst" type="text" class="logon-form-field" placeholder="Intézmény*" required>
                                            <input name = "position" type="text" class="logon-form-field" placeholder="Pozició*" required>
                                            <input name = "acdeg" type="text" class="logon-form-field" placeholder="Tudományos fokozat">
                                            <button type="submit" name="make-new-admin">REGISZTRÁLÁS</button>

                                        </form>
                                    </div>
                                </div>
                        </div>


<?php else: header("Location: http://localhost/Konferencia/Login.php"); ?>
<?php endif ?>