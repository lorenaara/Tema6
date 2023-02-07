<?
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<form action="./index.php" method="post" enctype="multipart/form-data">
<input type="text" name="codProd" id="codProd" placeholder="Codigo Producto">
<input type="text" name="nombre" id="nombre" placeholder="Nombre">
<input type="text" name="descripcion" id="descripcion" placeholder="descripcion">
<input type="number" name="precio" id="precio" placeholder="precio">
<input type="number" name="stock" id="stock" placeholder="stock">
<input type="file" id="img" name="img" accept="image/png, image/jpeg">
<input type="submit" value="Insertar Producto" id="sesion" name="enviar">
</form>
