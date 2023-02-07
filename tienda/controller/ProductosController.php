<?php

if(isset($_REQUEST['admProductos'])){
    $_SESSION['vista']=$vistas['insertarProducto'];
    $_SESSION['controlador']=$controladores['insertarProducto'];
}elseif(isset($_REQUEST['borrarProducto'])){
    $_SESSION['producto']=$_REQUEST['codProd'];
    $producto=ProductoDAO::findById($_SESSION['producto']);
    $_SESSION['vista']=$vistas['editarProducto'];
    $_SESSION['controlador']=$controladores['editarProducto'];
}elseif(isset($_REQUEST['comprar'])){
    $_SESSION['vista']=$vistas['comprarProd'];
    $_SESSION['controlador']=$controladores['comprarProd'];
}elseif(isset($_REQUEST['borrarProducto'])){
    $_SESSION['producto']=$_REQUEST['codProd'];
    $producto = ProductoDAO::delete($_SESSION['producto']);
    $lista=ProductoDAO::findAll();
}elseif(isset($_REQUEST['enviar'])){
    if(empty($_REQUEST['codProd'])){
        $_SESSION['error']='Debe rellenara el código del producto';
    }elseif(empty($_REQUEST['nombre'])){
        $_SESSION['error']='Debe rellenar el nombre';
    }elseif(empty($_REQUEST['descripcion'])){
        $_SESSION['error']='Debe rellenar la descripción';
    }elseif(empty($_REQUEST['precio'])){
        $_SESSION['error']='Debe rellenar el precio';
    }elseif(empty($_REQUEST['stock'])){
        $_SESSION['error']='Debe rellenar el stock';
    }elseif(empty($_REQUEST['img'])){
        $_SESSION['error']='Debe selecionar una imagen';
    }else{
        $producto= new Producto($_REQUEST['codProd'], $_REQUEST['nombre'],$_REQUEST['decripcion'], $_REQUEST['precio'],$_REQUEST['stock'], $_REQUEST['img']);
        if(ProductoDAO::insert($producto)){
            $_SESSION['controlador']=$controladores['productos'];
            $_SESSION['vista']=$vista['productos'];
        }else{
            $_SESSION['error']='No se ha podido insertar el producto';
        }
        require_once $_SESSION['controlador'];
    }
}elseif(isset($_REQUEST['editar'])){
    $producto= new Producto($_REQUEST['codProd'], $_REQUEST['nombre'],$_REQUEST['decripcion'], $_REQUEST['precio'],$_REQUEST['stock'], $_REQUEST['img']);
    if(ProductoDAO::update($producto)){
        $_SESSION['controlador']=$controladores['productos'];
        $_SESSION['vista']=$vista['productos'];
    }else{
        $_SESSION['error']='No se ha podido editar el producto';
    }
    require_once $_SESSION['controlador'];
}