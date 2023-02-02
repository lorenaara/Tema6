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
            ////sdkjf`pdifòef`+pdsgfòldgòl
        }    
    }
}