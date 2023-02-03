<?php
require_once('./core/valida.php');

if(isset($_REQUEST['guardar'])){
    if(empty($_REQUEST['usuario'])){
        $_SESSION['error']='Debes  rellenar el usuario';
    }elseif (empty($_REQUEST['nombre'])) {
        $_SESSION['error']='Debes rellenar el nombre';
    }elseif(empty($_REQUEST['email'])){
        $_SESSION['error']='Debes rellenar el correo';
    }elseif(empty($_REQUEST['fecha'])){
        $_SESSION['error']='Debes de rellenar la fecha';
    }elseif(empty($_REQUEST['pass'])){
        $_SESSION['error']='Debes de rellenar la clave';
    }elseif($_REQUEST['pass']){
        $_SESSION['error']='Debes de rellenar la clave';
    }elseif(pass()){
        $_SESSION['error']='Clave incorrecta';
    }elseif(comprobarPass()){
        $_SESSION['error']='Las claves deben de ser iguales';
    }else{
        $usuario=new Usuario($_REQUEST['usuario'], sha1($_REQUEST['pass']), $_REQUEST['nombre'], $_REQUEST['fecha'], 'USER');
        if(UsuarioDAO::insert($usuario)){
            $_SESSION['controlador'] = $controladores['home'];
            $_SESSION['vista'] = $vistas['home'];
            $_SESSION['validado'] = true;
            $_SESSION['user'] = $user->usuario;
            $_SESSION['nombre'] = $user->nombre;
            $_SESSION['perfil'] = $user->perfil;
        }else{
            $_SESSION['error'] = 'No se ha podido registrar';
        }
        
        require_once $_SESSION['controlador'];
    }
}