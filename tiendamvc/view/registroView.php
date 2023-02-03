<?php

if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset ($_SESSION['error']);
}
?>

<form action="./index.php" method="post">
<input type="text" name="usuario" id="usuario" placeholder="Usuario">
<input type="text" name="nombre" id="nombre" placeholder="Nombre">
<input type="email" name="email" id="email" placeholder="Email">
<input type="text" placeholder="Fecha Nacimiento" onfocus="(this.type='date')" onblur="(this.type='text')" name="fecha">
<input type="password" name="pass" id="pass" placeholder="Contraseña">
<input type="password" name="pass1" id="pass1" placeholder=" Repita Contraseña">
<input type="submit" value="Guardar" name="guardar">
</form>