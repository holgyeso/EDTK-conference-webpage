<?php
    session_start();
    session_destroy();
    header("Location: http://localhost/Konferencia/Homepage.php")
?>