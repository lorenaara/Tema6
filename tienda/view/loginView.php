<?
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<div>
    <form action="./index.php" method="post">
        <h2>Iniciar Sesión</h2>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario">
            <input type="password" name="pass" id="pass" placeholder="Contraseña">
        <input type="submit" value="Iniciar Sesión" id="sesion">
    </form>
</div>