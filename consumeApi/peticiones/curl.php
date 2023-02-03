<?

function get(){
    $ch =curl_init();
    $url= 'http://192.168.2.205/ServidorClase/Tema7/api/conciertos.php/conciertos';
    curl_setopt($ch,CURLOPT_URL, $url);
    //que retorne algo
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $resultado= curl_exec($ch);
    curl_close($ch);
    return $resultado;
}