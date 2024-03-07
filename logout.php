<?php 
    session_start();
    unset($SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["tipo"]);
    session_destroy();
    header("Location: index.php");
    exit;



?>