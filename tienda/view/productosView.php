<?php
require_once('./core/funcionesSesiones.php');
if(esAdmin()){
?>
<form action="./index.php">
<input type="submit" name="insertProductos" value="Insertar Productos">
</form>
<!--Donde nos lleva el boton-->
<?
}
?>

<sesion>
    <div id="producto">
        <article>
        <img src='./<?echo $producto->img?>'>
        <h3><?echo $producto->nombre?></h3>
        <p><?echo $producto->descripcion?>...</p>
        <p><?echo $producto->precio?></p>
    <?php
    if(esAdmin()){
?>
<form action="./index.php">
<input type="submit" name="modProductos" value="Mod Productos">
<input type="submit" name="borrarProducto" value="Borrar">
    </form>
</div>
    </article>
<?
    }elseif(esUsuario()){
?>
<form action="./index.php">
<input type="submit" name="comprar" value="Comprar">
    </form>
</div>
    </article>
<?
    }else{
?>
<sesion>
    <div id="producto">
        <article>
        <img src='./<?echo $producto->img?>'>
        <h3><?echo $producto->nombre?></h3>
        <p><?echo $producto->descripcion?>...</p>
        <p><?echo $producto->precio?></p>
    </div>
    </article>
<?        
    }
    ?>
    </article>
    </div>
</sesion>
<?php
