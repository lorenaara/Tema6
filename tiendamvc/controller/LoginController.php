<?

if(isset($_REQUEST['registro'])){
    $_SESSION['controlador']=$controladores['registro'];
    $_SESSION['vista']=$vista['registro'];
}else{
    if(isset($_REQUEST['usuario'])){
        $user =$_REQUEST['usuario'];
        $pass= $_REQUEST['pass'];
        if(empty($user)){
            $_SESSION['error']='Debe rellenar el nombre';
        }elseif(empty($pass)){
            $_SESSION['error']='Debe rellenar la contraseña';
        }else{
           $usuario= UsuarioDAO::valida($user, $pass);
           if($usuario!=null){
                $_SESSION['validado']=true;
                $_SESSION['user']=$user;
                $_SESSION['nombre']=$usuario->nombre;
                $_SESSION['perfil']=$usuario->perfil;
                $vistas['home'];
                $_SESSION['controlador'] = $controladores['home'];
                $_SESSION['pagina'] = 'home';     
                require  $_SESSION['controlador'];
           }
        }    
    }
}