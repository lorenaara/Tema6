<?
require_once('Persona2.php');
echo $_GET['objeto'];
echo '<br>';
var_dump(unserialize(($_GET['objeto'])));