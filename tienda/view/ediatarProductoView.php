<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<form action="./index.php" method="post">
<input type="text" name="codProd" readonly value='<?echo $producto->codProd?>'>
<input type="text" name="nombre" readonly value='<?echo $producto->nombre?>'>
<input type="text" name="descripcion" readonly value='<?echo $producto->descripcion?>'>
<input type="number" name="precio" step="0.01"  value='<?echo $producto->precio?>'>
<input type="number" name="stock" value='<?echo $producto->stock?>'>
<img src="../'<?echo $producto->img?>.'">
<input type="submit" value="Editar" name="editar">
</form>