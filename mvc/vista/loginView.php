<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}

?>
<div>
<form action="./index.php" method="post">
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user">
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="Enviar" name="enviar">
    <div>
            <p>¿No tienes cuenta? </p><input type="submit" name="registro" value="Registrarse">
        </div>
</form>
</div>