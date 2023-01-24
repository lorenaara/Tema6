<?
if(isset($_REQUEST['borrar'])){
    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::delete($_SESSION['producto']);
    $lista=ProductoDAO::findAll();
}elseif(isset($_REQUEST['editar'])){
    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::findById($_SESSION['producto']);
    $_SESSION['vista']=$vistas['editarProducto']; //formulario que no esta hecho pero deberia llevar a una pagina donde se modifiquen los productos 
}elseif(isset($_REQUEST['codProd'])){

    $_SESSION['producto'] = $_REQUEST['codProd'];
    $producto = ProductoDAO::findById($_SESSION['producto']);
    $_SESSION['vista']=$vistas['verProducto']; 
}elseif(isset($_REQUEST['admProductos'])){
        $lista=ProductoDAO::findAll();
}