<?

require_once('Persona2.php');

/*$p1=new Persona('lore', 21, 'lore@gmail.com');
$p1->setNombre('pepe');

echo $p1; //metodo toString()
//var_dump($p1);
//misma referencia, por lo que son iguales
$p2= $p1;
//solo tienen los mismos valores
    //$p2= clone $p1;
echo $p2;

//diferenciar mismo valores a mismo objeto
if($p1==$p2){
    echo "<br>Tienen los mismos valores";
}
if($p1===$p2){
    echo '<br>Es el mismo';
}*/


$p1=new Persona('lore', 21, 'lore@gmail.com');
echo $p1->__get('edad');
echo $p1->nombre;
$p1->edad=25;
echo $p1->edad;
$p2=new Persona('lore', 21, 'lore@gmail.com');
unset($p2); //borra una persona

echo Persona::$id;  //atributo estatico 
echo Persona::elProximoId(); //llamada a un metodo estatico

echo '<br>Propiedades que no existen <br> ',
print_r(get_class_vars('Persona'));
echo '<br>';
print_r($p1->verVariables());

echo "<br>";
//combertir un objeto a string para que se pueda pasar informacion por internet
setcookie('objeto', serialize($p1));
echo "<br>";
var_dump(unserialize($_COOKIE['objeto']));//lo vuelve a combertir en un objeto
echo "<br>";
echo $_COOKIE['objeto'];

?>

<a  href="./serializa.php?objeto=O%3A7%3A%22Persona%22%3A3%3A%7Bs%3A15%3A%22%00Persona%00nombre%22%3Bs%3A4%3A%22lore%22%3Bs%3A13%3A%22%00Persona%00edad%22%3Bi%3A25%3Bs%3A14%3A%22%00Persona%00email%22%3Bs%3A14%3A%22lore%40gmail.com%22%3B%7D">Enviar</a>