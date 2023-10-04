<?php
require_once("layout/header.php");
?>
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input type="text" placeholder="INGRESE TITULO:" name="titulo"> <br>
    <input type="text" placeholder="INGRESE GENERO:" name="genero"> <br>
    <input type="text" placeholder="INGRESE CODIGO:" name="cod_autor"> <br>
    <input type="submit" class="btn" name="btn" value="GUARDAR"> <br>
    <input type="hidden" name="m" value="guardar">
</form>
<?php
require_once("layout/footer.php");
?>