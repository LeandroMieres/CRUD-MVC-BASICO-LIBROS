<?php
require_once("layout/header.php");
?>
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table class="tabla">
    <tr>
        <td>ISBN</td>
        <td>TITULO</td>
        <td>GENERO</td>
        <td>ACCIONES</td>      
    </tr>
    <tbody>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['isbn'] ?> </td>
                        <td><?php echo $v['titulo'] ?> </td>
                        <td><?php echo $v['genero'] ?> </td>
                        <td>
                            <a class="btn" href="index.php?m=editar&isbn=<?php echo $v['isbn']?>">EDITAR</a>
                            <a class="btn" href="index.php?m=eliminar&isbn=<?php echo $v['isbn']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("layout/footer.php");