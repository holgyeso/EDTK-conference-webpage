

                <?php if(isset($_SESSION["email"])): ?>


    <div class="docs-container">
                            <p class="docs-container-title">A kiválasztott dolgozatok szekciókként, amelyek be lesznek mutatva:</p>

                    <?php    
                        include "Sections-logo.php"; 

                        $section_papers = all_sections_papers();

                        // $sections = all_sections();
                        // $papers = all_papers();

                        // var_dump($sections);
                        // var_dump($papers);

                        foreach ($section_papers as $section => $section_info) {

                            //milyen szekciók vannak az adatbázisban
                            echo '<div class="docs-doc" id ="guest-paper">
                            <div class="docs-section">'
                                . SECTIONLOGOS[$section_info["section_name"]]
                                .'<p>' . mb_strtoupper($section_info["section_name"], 'UTF-8') . '</p>
                            </div>';

                            //a dolgozaok kiíratása

                            echo   '<div class="docs-status">';

                            if (empty($section_info["papers"])) {

                                echo '<p class="guest-agenda-doc-title" id = "no-doc"> Még egyetlen visszaigazolt dolgozat sincs a szekcióban </p>';

                            } else {
                                
                                foreach ($section_info["papers"] as $paper => $paper_info) {
                                
                                    echo   '<div class="guest-agenda">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                                <div class="class-agenda-doc">

                                                    <p class="guest-agenda-doc-title">' .  $paper_info["title"] . '</p>
                                                    <p class="guest-agenda-doc-author">' . $paper_info["authors"] . '</p>
                                                    
                                                </div>
                                            </div>';
                                }
                            }

                            echo '</div>';

                            // foreach ($papers as $paper )

                             echo '</div>';

                        }


                    ?>
                    </p>
                    </div>

<?php else: header("Location: http://localhost/Konferencia/Login.php"); ?>
<?php endif ?>