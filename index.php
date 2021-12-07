<?php 
    require 'pages/header.php'; 
?>
    <?php 
        if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): 
    ?>
<div class="container-fluid">
    <div class="jumbotron">
        <h3>Nos temos hoje 999 anúncios.</h3>
        <p>E mais de 999 usuários cadastrados.</p>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h4>
                Pesquisa avançada
            </h4>
        </div>
        <div class="col-sm-9">
            <h4>
                Últimos anúncios
            </h4>
        </div>
    </div>
</div>
<?php else: ?>
    <div class="container">
        <div class="alert alert-danger text-center">
            <a href="login.php" class='alert-link'>Faça o login!</a>
        </div> 
    </div>  
<?php endif; ?>
<?php 
    require "pages/footer.php"; 
?>