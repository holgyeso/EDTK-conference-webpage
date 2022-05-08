
<?php


    const SECTIONLOGOS = [
            "Biológia" =>   '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>',
            
            "Fizika" => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.871 4A17.926 17.926 0 003 12c0 2.874.673 5.59 1.871 8m14.13 0a17.926 17.926 0 001.87-8c0-2.874-.673-5.59-1.87-8M9 9h1.246a1 1 0 01.961.725l1.586 5.55a1 1 0 00.961.725H15m1-7h-.08a2 2 0 00-1.519.698L9.6 15.302A2 2 0 018.08 16H8" />
                        </svg>',
            "Földrajz" => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                           </svg>',
            "Marketing" => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                                    </svg>',
            "Menedzsment" => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                              </svg>',
                                                        
    ];

    const STATUSHU = [
        "New" => "Új",
        "Accepted" => "Elfogadva",
        "Confirmed" => "Visszaigazolva",
        "Rejected" => "Elutasítva"
    ];

    function sections_presenter() {

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_SESSION["email"];

        //milyen szekciókba jelentkezett
        $section_stmt = $pdo->query("SELECT SectionID, Document, Title, Status FROM paper WHERE Email = '$email'");
        $sections =  $section_stmt->fetchAll();

        $section_docs=[];

        //az összes szekció nevét és ennek megfelelő feltöltött (vagy nem) dokumentumot beteszem egy tömbbe
        foreach ($sections as $section => $section_name) {

            $sectionID = $section_name["SectionID"];

            $sectionName_stmt = $pdo->query("SELECT Name FROM section WHERE SectionID = '$sectionID'");
            $sectionName = $sectionName_stmt->fetchAll();
                
            $section_docs[$sectionName[0]["Name"]] = ["doc" => $section_name["Document"], "doc_title" => $section_name["Title"] , "status" => $section_name["Status"]];

        }
        return $section_docs;

    } catch (PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
    }
    
    function all_sections_papers() {
        try {

            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $sections_stmt = $pdo->prepare("SELECT SectionID, Name FROM section");
            $sections_stmt->execute();
            $sections = $sections_stmt->fetchAll();
    
            $papers_stmt = $pdo->prepare("SELECT Title, CoAuthors, FirstName, LastName, SectionID FROM paper INNER JOIN user ON paper.Email = user.Email WHERE Status='Confirmed'");
            $papers_stmt->execute();
            $papers = $papers_stmt->fetchAll();

            $section_papers = [];

            foreach ($sections as $section => $sectionInfo) {

                $paper_array = [];

                $i = 0;

                foreach ($papers as $paper => $paperInfo) {

                    if ($paperInfo["SectionID"] == $sectionInfo["SectionID"]) {

                        //authors
                        $authors = $paperInfo["LastName"] . " " . $paperInfo["FirstName"];
                        if($paperInfo["CoAuthors"] != "") $authors .= ", " . $paperInfo["CoAuthors"];

                        $paper_array[$i] = ["title" => $paperInfo["Title"], "authors" => $authors];
                        $i++;

                    }

                }

                // var_dump($sectionInfo["Name"],  $paper_array, "*****************");

                $section_papers[$sectionInfo["SectionID"]] = ["section_name" => $sectionInfo["Name"], "papers" => $paper_array];

                unset($paper_array);
            } 

            // var_dump($section_papers);
    

            return $section_papers;
    
        } catch (PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
    }

    function sections_papers_admin() {
        try {

            $pdo = new PDO('mysql:host=localhost;dbname=conferencedb', 'root', '');
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sections_stmt = $pdo->prepare("SELECT SectionID, Name FROM section WHERE Email=?");
            $sections_stmt->execute([$_SESSION["email"]]);
            $sections = $sections_stmt->fetchAll();

            $section_paper = [];
            
            foreach ($sections as $section => $sectionInfo) {

                $papers_stmt = $pdo->prepare("SELECT Document, Title, Abstract, FirstName, LastName, Status, SectionID, paper.Email FROM paper INNER JOIN user ON paper.Email = user.Email WHERE SectionID = ? AND Document!=''");
                $papers_stmt->execute([$sectionInfo["SectionID"]]);
                $papers = $papers_stmt->fetchAll();

                $papers_from_section = [];
                foreach ($papers as $paper => $paperInfo) {

                    //prepare DocName for download 
                    $path = "C:/xampp/htdocs/Konferencia/uploads/";

                    array_push($papers_from_section, ["title" => $paperInfo["Title"], "presenter" => $paperInfo["LastName"] . " " . $paperInfo["FirstName"], "abstract" => $paperInfo["Abstract"],  "email" => $paperInfo["Email"], "status" => STATUSHU[$paperInfo["Status"]], "doc_name" => $paperInfo["Document"] ]);
                }


                $section_paper[$sectionInfo["Name"]] = $papers_from_section;

                unset($papers_from_section);

            }

            return $section_paper;


        } catch (PDOException $e) {
            echo "Connection failed! : " . $e;
        }
        $pdo = null;
    }

?> 

