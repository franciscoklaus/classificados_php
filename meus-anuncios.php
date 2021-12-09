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
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class='text-center'>Foto</th>
                <th class='text-center'>Título</th>
                <th class='text-center'>Valor</th>
                <th class='text-center'>Açoes</th>
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
            <td>
                <?php if(!empty($anuncio['url'])): ?>
                <img src="assets/images/anuncios/<?php $anuncio['url']; ?>" height="50" border="0" alt='foto'>
                <?php else: ?>
                    <img src="assets/images/anuncios/no-pictures.png" height='50' border='0' alt="">
                <?php endif; ?>
            </td>
            
            <td><?php echo $anuncio['titulo'];?></td>
            <td>R$ <?php echo number_format($anuncio['valor'],2);?></td>
            <td>
                <a href="editar-anuncio.php?id=<?php echo $anuncio['id'] ;?>" class='btn btn-default'>Editar</a>
                <a href="excluir-anuncio.php?id=<?php echo $anuncio['id'] ;?>" class='btn btn-danger'>Excluir</a>
            </td>

        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php require "pages/footer.php";