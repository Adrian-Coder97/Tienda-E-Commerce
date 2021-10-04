<?php
if ($_POST) {
    include("../partials/conexion.php");

    /*recibir los datos*/
    $name = $_POST["name"]; 

    /*enviarlos a la base de datos*/
    $sql_agregar = "INSERT INTO categories(name) VALUES (?)"; //signos de interrogacion por seguridad
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($name)); //en el array van el el mismo orden que irian en los signos de interrogracion 

    /*cerrar la conexion de agregar:*/
    $sentencia_agregar = null;
    $pdo = null;
    header("location:../admin/categories.php"); //recargar la pagina cuando se envien los datos 
}
