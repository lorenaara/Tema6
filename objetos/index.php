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

echo Persona::$id;  //atributo estatico 