<?
require_once './controlador/ControladorPadre.php';
require_once './controlador/ConciertosControlador.php.php';
$recurso=ControladorPadre::recurso();
if($recurso){
    if($recurso[1]=='conciertos'){
        $controlador= new ConciertosCOntrolador();
        $controlador->controlar();

    }
}