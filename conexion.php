<?php

//Variables: $nombreVariable;
//para la conexión necesitamos 4 parámetros:
//servidor, usuario. contraseña, nombre de la base de datos

$servidor='localhost';
$user='root'; //usuario por defecto
$password='';
$database='crudphpdb';

$conexion=new mysqli($servidor, $user, $password, $database); //lista la conexion

//comprobar si existe algun error de conexion
if($conexion->connect_errno){
    echo 'nuestra conexion presenta fallas';
    exit();
}


?>