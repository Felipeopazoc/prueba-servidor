<?php

try{

    //Credenciales para la conexion a phpmyadmin
    $host = "localhost";
    $dbname= "6soft2021";
    $username= "root";
    $password = "";
    //Creamos un nuevo objeto PDO para crear una conexion a mysql
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

}catch(PDOException $e){
    die("No se ha podido conectar la base de datos".$e->getMessage());
}

?>