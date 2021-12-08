<?php require "pages/header.php";?>
<?php 
    if(empty($_SESSION['cLogin'])){ 
?>
<script type='text/javascript'>
    window.location.href='./';
</script>
<?php
    exit;
    }
?>
<div class="container">

    <h1>Meus anúncios</h1>
    <a href="add-anuncios.php" class='btn btn-default'>Adicionar anúncio</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Título</th>
                <th>Valor</th>
                <th>Açoes</th>
            </tr>
        </thead>
        <tbody>
        <?php
           require 'classes/anuncios.class.php';
           $a = new Anuncios();
           $anuncios = $a->getMeusAnuncios();
           foreach($anuncios as $anuncio):
        ?>
        <tr>
            <td><img src="assets/images/anuncios/<?php $anuncio['url']; ?>" border="0" alt='foto'></td>
            <td><?php echo $anuncio['titulo'];?></td>
            <td>R$ <?php echo number_format($anuncio['valor'],2);?></td>
            <td>Açoes</td>

        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php require "pages/footer.php";