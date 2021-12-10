<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Classificados</title>
</head>
<body>
    <nav class="navbar navbar-inverse" >
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./" class='navbar-brand'>Classificados</a>
            </div>
            <ul class='nav navbar-nav navbar-right'>
                <?php 
                    if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): 
                ?>
                    <li><a href="meus-anuncios.php">Meus anúncios</a></li>
                    <li><a href="sair.php">Sair</a></li>
                                        
                <?php else: ?>
                <!-- SE ESTIVEREM LOGADOS DEVE APARECERÁ O QUE TEM ABAIXO-->
                    <li><a href="cadastre-se.php">Cadastre-se</a></li>
                    <li><a href="login.php">Login</a></li> 
                <?php endif; ?>
            </ul>
        </div>
    </nav>