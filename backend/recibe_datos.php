<?php

include_once("../conexion_bd/conexion.php");

if($_POST["submit"]){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $stock = $_POST["stock"];

    $nombre = trim($nombre);
    $precio = trim($precio);
    $descripcion = trim($descripcion);
    $stock = trim($stock);

    //Ejecutamos la query de insercion
    $sql = "INSERT INTO PRODUCTO VALUES(NULL,'$nombre',$precio,'$descripcion',$stock)";

    $conn -> query($sql);

    header("Location: ../index.php");

}

?>