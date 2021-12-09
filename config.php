<?php
    session_start();
    global $pdo;
    try {
        //heroku
        //$pdo = new PDO("mysql:dbname=teste_php_mysql;host=85.10.205.173:3306","franciscoklaus","@Ez'EB3K*wBz4h@");
        //LOCALHOST
        $pdo = new PDO("mysql:dbname=classificados;host=127.0.0.1","root","");
    } catch (PDOException $e) {
        echo "FALHOU! " .$e->getMessage();
        exit;
    }
   

?>