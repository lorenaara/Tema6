<?
require './config/configuracion.php';
session_start();

if(isset($_REQUEST['home'])){
    //$_SESSION['controlador']=$controlador['home'];
    $_SESSION['pagina']='home';
    $_SESSION['vista']=$vista['home'];
    header('Location:index.php');

}elseif (isset($_REQUEST['logout'])) {
    session_destroy();
    header('Location: ./index.php');
    exit;
} else {
    if(!isset($_SESSION['pagina'])){
        //$_SESSION['controlador']=$controlador['home'];
        $_SESSION['pagina']='home';
        $_SESSION['vista']=$vista['home'];
    }elseif((!estaValidado() && !isset($_SESSION['pagina'])) || isset($_REQUEST['login'])){
        $_SESSION['pagina']='login';
        $_SESSION['controlador']=$controlador['login'];
        $_SESSION['vista']=$vista['login'];
    }elseif(isset($_SESSION['pagina'])){
        //iria lo de ver mi perfil 
        if((esAdmin() || esModerador()) && isset($_REQUEST['admin'])){
            $_SESSION['controlador']=$controlador['admin'];
            $_SESSION['pagina']='admin';
            $_SESSION['vista']=$vista['admin'];
            require_once $_SESSION['controlador'];
        }else{
           // require_once $_SESSION['controlador'];
        }  
    }
}

require_once('./view/layout.php');