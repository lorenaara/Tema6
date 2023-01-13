<?
require_once('./Alumno.php');
require_once('./Abstracta.php');
require_once('./AbsH1.php');
require_once('./AbsH2.php');

$a= new Alumno('lore', '21', 'lorena@gmail.com', 'DAW2');
echo $a;
$a->darBaja();
echo $a;
//diferencias entre la herencia y una interfaz
//en una clase solo se puede hacer un extend en cambio en una interfaz se puede hacer mucho import

$nueva=  new AbsH2();
$nueva->muestra();
echo '<br>';
$nueva->soy();
echo '<br>';
$nueva->soy2();
