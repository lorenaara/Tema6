<?
//base de datos
require_once('./config/conexion.php');

//funciones
require_once('./core/funcionesSesiones.php');
require_once('./core/valida.php');

//modelo
require_once('./dao/DAO.php');
require_once('./dao/FactoryBD.php');
require_once('./dao/AlbaranDAO.php');
require_once('./dao/ProductosDAO.php');
require_once('./dao/UsuarioDAO.php');
require_once('./dao/VentasDAO.php');
require_once('./model/Albaran.php');
require_once('./model/Producto.php');
require_once('./model/Usuario.php');
require_once('./model/Venta.php');

//controladores
$controlador= array(
    'login'=>'./controller/LoginController.php',
    'registro'=>'./controller/RegistroControler.php',
    'productos'=>'./controller/ProductosController.php'
);

//vistas
$vista= array(
    'home'=>'homeView.php',
    'login'=>'loginView.php',
    'registro'=>'registroView.php',
    'productos'=>'productosView.php',
    'insertProductos'=>'insertProductosView.php',
    'modProductos'=>'editarProductosView.php'
);