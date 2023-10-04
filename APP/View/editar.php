<?php
require_once("layout/header.php");
?>
<h1 class="text-center">EDITAR</h1>
<form action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <input type="text" name="titulo" value="<?php echo $v['titulo'] ?>" > <br>
        <input type="text" name="genero" value="<?php echo $v['genero'] ?>" > <br>
        <input type="text" name="cod_autor" value="<?php echo $v['cod_autor'] ?>" > <br>
        <input type="hidden" name="isbn" value="<?php echo $v['isbn'] ?>" > <br>
        <input type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>
<?php
require_once("layout/footer.php");
?>