
                <?php if(isset($_SESSION["email"])): ?>
                    <div class="docs-container">
                            <p class="docs-container-title">A dolgozataid státusza szekciókként:</p>

                            <?php 

                                    //annak megfelelően, hogy van-e feltöltött dokumentum vagy sem kiírom
                                    // 1) ha van dokumentuma - ennek státuszát és ha újra szeretné-e tölteni
                                    // 2) nincs dokumentuma -> fel szeretné-e tölteni

                                include "Sections-logo.php";

                                $section_docs = sections_presenter();

                                foreach ($section_docs as $section => $document) {

                                    //a szekció logója és nevének kiíratása
                                    echo '<div class="docs-doc">
                                            <div class="docs-section">'
                                                . SECTIONLOGOS[$section]
                                                .'<p>' . mb_strtoupper($section, 'UTF-8') . '</p>
                                            </div>';
                                    
                                    //a dolgozat státuszának kiíratása

                                    echo   '<div class="docs-status">';

                                    if ($document["doc"] != "") {
                                        echo   '<div class="docs-status-has-paper-doc">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                    </svg>
                                                    <p>' . $document["doc_title"] . '</p>
                                                </div>
                                                    
                                                    <div class="docs-status-has-paper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <p> A feltöltött dolgozatod státusza: '. STATUSHU[$document["status"]] . '</p>
                                                    </div>'; //docs-status-has-paper
                                        $form_msg = "Töltsd fel újra a dolgozatod ha szeretnéd:";
                                    }

                                    else {
                                        echo   '
                                                <div class="docs-status-has-paper-doc">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                    </svg>
                                                    <p>' . $document["doc_title"] . '</p>
                                                </div>
                                                <div class="docs-status-no-paper">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                    </svg> 
                                                    <p> Nincs feltöltött dolgozatod</p>
                                                </div>'; //docs-status-no-paper
                                        $form_msg = "Töltsd fel a dolgozatod:";
                                    }

                                    $doc_name = $_SESSION["lname"] . mb_substr($_SESSION["fname"], 0, 1) . "_" . $section . ".pdf";

                                     echo      '<form class="docs-upload" method="post" action="Registration-DB.php" enctype="multipart/form-data">
                                                    <label for="document">' . $form_msg . '</label>';

                                     echo           '<div class="docs-upload-input">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                                        </svg>
                                                        <input type="file" name="document" id="document">
                                                        <input type="text" name="section_name" value=' . $section . '>
                                                        <input type="text" name="old_doc_name" value=' . $document["doc"] . '>
                                                        <input type="text" name="new_doc_name" value=' . $doc_name . '  hidden>
                                                        <input type="text" name="email" value=' . $_SESSION["email"] . ' hidden>
                                                    </div>
                                                    <button type="submit" name="same-section">Feltöltés</button>
                                                </form>';

                                    echo        '</div>'; //docs-status
                                    echo      '</div>'; //docs-doc
                                }
                            ?>

                            <?php 
                                try {
                                    //csatlakozás az AB-hoz
                                    $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
                                    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    //szekciók lekérése amelyekbe még nem jelentkezett
                                    $email = $_SESSION["email"];
                                    $stmt = $pdo->query("SELECT Name FROM section WHERE SectionID NOT IN (SELECT SectionID FROM paper WHERE Email = '$email')");
                                    $sections = $stmt->fetchAll();
                                    
                                } catch (PDOException $e) {
                                    echo "Connection failed";
                                }
                            ?>

                            <?php 
                                if (count($sections)>0):
                            ?>

                                <div class="docs-doc">
                                <div class="docs-section">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    <p>JELENTKEZÉS ÚJ SZEKCIÓBA</p>
                                </div>
                                <div class="docs-status" id="new-section">
                                    <form class="logon-form" id="logonForm" method="post" action="Registration-DB.php" enctype="multipart/form-data">
                                        <input name = "title" type="text" class="logon-form-field-presenter" id="doc-title" placeholder="A dolgozat címe*" required> 
                                        <select name="section" class="logon-form-field-presenter" id="section" required>
                                        <option value = "Default">Válassz szekciót a listából*</option>
                                        <?php
                                            try {
                                                //csatlakozás az AB-hoz
                                                $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
                                                $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                //szekciók lekérése amelyekbe még nem jelentkezett
                                                $email = $_SESSION["email"];
                                                $stmt = $pdo->query("SELECT Name FROM section WHERE SectionID NOT IN (SELECT SectionID FROM paper WHERE Email = '$email')");
                                                $sections = $stmt->fetchAll();
                                                foreach ($sections as $section => $sectionName) {
                                                    $section_option = str_replace(' ', '_', $sectionName['Name']);
                                                    echo "<option value = " . $section_option . ">" . $sectionName['Name'] . "</option>" . "<br>";
                                                }
                                                    
                                            }
                                            catch (PDOException $e) {
                                                echo "No connection with database";
                                            }
                                            $pdo=null;
                                        ?>
                                    </select>
                                    <input name = "authors" type="text" class = "logon-form-field-presenter" id="co-authors" placeholder="A dolgozat társszerzői">
                                    <textarea name = "abstract" id="abstract" class="logon-form-field-presenter"  placeholder="Absztrakt*" required></textarea>

                                    <label for="document">Töltsd fel a dolgozatod: </label>
                                    <!-- <div class="docs-upload-input">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                            </svg> -->
                                            <input type="file" name="document" id="document">
                                    <!-- </div> -->
                                    <input type="text" name="email" value= <?php echo $_SESSION["email"]?> hidden>

                                    <!-- <?php 
                                        //$email = $_SESSION["email"];
                                        //echo ' <input type="text" name="email" value=' . $email . ' hidden>'; 
                                    ?> -->
                                    <button type="submit" name="new-section">JELENTKEZÉS</button>
                                    </form>
                                </div>
                            </div>
                            <?php endif ?>
                            
                            </div>

                 <?php else: header("Location: http://localhost/Konferencia/Login.php"); ?>
                    <?php endif ?>