
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Planet</title>
    <link rel="stylesheet" href="./webroot/css/estilos.css">
    <link rel="shortcut icon" href="./img/logo-footer.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./webroot/css/productos.css">
    <link rel="stylesheet" href="./webroot/css/form.css">
</head>
<body>
    <header>
        <a href="index.php"><img src="./webroot/img/logo.png" alt="toy Planet" id="logo"></a>
        <h1>TOY PLANET</h1>
        <div id="iconos">
        <form action="./index.php" method="post">
            <input type="submit" value="Login" name="login">
        </form>
             
        </div>
    <?
       if(estaValidado()){
        //logoout y perfil
    ?>

    <h2><?echo $_SESSION['user']?></h2>
    <img src="./webroot/img/icons8-usuario-de-género-neutro-32.png" alt="login" class="icono" >
    <input type="submit" name="logout" value="Logout">
    <?
        if(esAdmin() || esModerador()){
    ?>
    <input type="submit" name="admin" value="Admin">
    <?
        }
    }
    ?>
    </header>
<main>
    <? require $_SESSION['vista'];?>
</main>

    <footer>
        <img src="./webroot/img/logo-footer.svg" alt="toy Planet" id="logoFooter">
        <section>
        <article id="redes">
            <a href="#"><img src="./webroot/img/icons8-facebook-50.png" alt="facebook"></a>
            <a href="#"><img src="./webroot/img/icons8-instagram-50.png" alt="instagram"></a>
            <a href="#"><img src="./webroot/img/icons8-twitter-50.png" alt="twitter"></a>
        </article>
        <article class="text">
            <a href="#"><img src="./webroot/img/icons8-teléfono-50.png" alt="telefono">666 654 632</a>  
             <a href="#"><img src="./webroot/img/icons8-casa-50.png" alt="direccion">c/Corredera 85</a>
        </article>
        <article class="frame">
         <img src="./webroot/img/frame.png" alt="QR">
        </article>
    </section>
    </footer>
</body>
</html>