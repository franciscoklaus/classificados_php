<?php
    session_start();
    global $pdo;
    try {
        $pdo = new PDO("mysql:dbname=teste_php_mysql;host=85.10.205.173:3306","franciscoklaus","@Ez'EB3K*wBz4h@");
    } catch (PDOException $e) {
        echo "FALHOU! " .$e->getMessage();
        exit;
    }
   

?>