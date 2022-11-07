<?php
    session_start(); 
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Ahora estas logeado";
    unset($_SESSION['msg']);
    if (isset($_GET["returnToUrl"])){
        header('location:  ' . $_GET["returnToUrl"]);
    }else {
        header('location: login.php');
    }
?>