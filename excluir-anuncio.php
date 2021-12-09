<?php 
    session_start();
    if(empty($_SESSION['cLogin'])){
        header("Location: login.php");
        exit;
    }
require 'config.php';
require 'classes/anuncios.class.php';
$a = new Anuncios();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $a->delAnuncio($_GET['id']);
}

header("Location: meus-anuncios.php");

?>