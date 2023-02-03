<?php
require_once('./config/conexion.php');

//funcion de enviar y si esta vacia no haran falta ya que hay funciones que nos lo haran solo 
function pass(){
    $patron='/(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,}$/';
    if(preg_match($patron,$_REQUEST['pass'])){
        return true;
    }
    return false;
}
function comprobarPass(){
    if($_REQUEST['pass']==$_REQUEST['pass1']){
        return true;
    }
    return false;
}