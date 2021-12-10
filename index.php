<?php require 'pages/header.php'; ?>
<?php 
    if(empty($_SESSION['cLogin'])){ 
?>
<script type='text/javascript'>
    window.location.href='login.php';
</script>
<?php
    exit;
    }
?>
<?php require 'classes/anuncios.class.php'; ?>
<?php require 'classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();
$total_anuncios = $a->getTotalAnuncios();
$total_usuarios = $u->getTotalUsuarios();
$p = 1;

if(isset($_GET['p']) && !empty($_GET['p'])){
    $p = addslashes($_GET['p']);
}

$por_pagina = 3;
$total_paginas = ceil($total_anuncios / $por_pagina);
//COMO VAI TER PAGINACAO PRECISA TRABALHAR COM OFFSET
$anuncios = $a->getUltimosAnuncios($p, $por_pagina);

?>
<div class="container-fluid">
    <div class="jumbotron">
        <h3>Nos temos hoje <?php echo $total_anuncios; ?> anúncios.</h3>
        <p>E mais de <?php echo $total_usuarios; ?> usuários cadastrados.</p>
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
            <table class="table table-striped">
                <tbody>
                    <?php foreach($anuncios as $anuncio): ?>
                        <tr>
                        <td class="align-middle">
                            <?php if(!empty($anuncio['url'])): ?>
                                
                            <img src="assets/images/anuncios/<?php echo $anuncio['url'];?>" height="50" border="0" alt='foto'>
                            <?php else: ?>
                                <img src="assets/images/anuncios/no-pictures.png" height='50' border='0' alt="">
                            <?php endif; ?>
                        </td>
                            
                        <td class="align-middle">
                            <a href="produto.php?id=<?php echo $anuncio['id'];?>"><?php echo $anuncio['titulo'];?></a><br>
                            <?php echo $anuncio['categoria'];?>
                        </td>
                        <td class="align-middle">R$ <?php echo number_format($anuncio['valor'],2);?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <ul class="pagination menu_pagination">
                <?php for ($q=1;$q<=$total_paginas;$q++):?>
                    <li class="<?php echo($p==$q)?'active':'';?>">
                        <a href="index.php?p=<?php echo $q ;?>"><?php echo $q;?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>

<?php require "pages/footer.php"; ?>