<?php
require_once('./core/funcionesSesiones.php');
if(esAdmin()){
?>
<input type="submit" name="admProductos" value="Adm. Productos">
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
<input type="submit" name="modProductos" value="Mod Productos">
<input type="submit" name="borrarProducto" value="Borrar">
<?
    }elseif(esUsuario()){
?>
<input type="submit" name="comprar" value="Comprar">
<?
    }
    ?>
    </article>
    </div>
</sesion>
<?php
