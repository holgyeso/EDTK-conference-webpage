<?php 
    session_start();        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 

            if($_SESSION["role"] == "Admin") {

                if(isset($_GET["path"])) {

                    $filename = "C:/xampp/htdocs/Konferencia/uploads/" . $_GET["path"];

                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header("Cache-Control: no-cache, must-revalidate");
                    header("Expires: 0");
                    header('Content-Disposition: attachment; filename="'.basename($filename).'"');
                    header('Content-Length: ' . filesize($filename));
                    header('Pragma: public');

                    flush();
                    
                    readfile($filename);
                }

            }
            else header("Location: http://localhost/Konferencia/Homepage.php")

            //source: https://linuxhint.com/download_file_php/

        ?>
</body>
</html>