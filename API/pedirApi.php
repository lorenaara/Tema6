<?php
$url='https://datos.madrid.es/egob/catalogo/300600-0-comisaria.json?distrito_nombre=VILLAVERDE';

$datos=file_get_contents($url);


if($datos){
    //pasa de string a objetos y de objetos a array
    $array= json_decode($datos, true);//al pasarle el paramentro true, lo convierte en un array asociativo
    foreach($array['@graph'] as $evento){
        //print_r($evento);
        echo $evento['title'];
        echo '<br>'. $evento['location']['latitude']. ',' . $evento['location']['longitude'].'<br>';

    }
    
}