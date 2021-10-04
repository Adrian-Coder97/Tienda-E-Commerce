<?php
if ($_POST) {
    include("../partials/conexion.php");

    /*recibir los datos*/
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    /*enviarlos a la base de datos*/
    $sql_agregar = "INSERT INTO contact(email,msg) VALUES (?,?)"; //signos de interrogacion por seguridad
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($email, $msg)); //en el array van el el mismo orden que irian en los signos de interrogracion 

    /*cerrar la conexion de agregar:*/
    $sentencia_agregar = null;
    $pdo = null;
    header("location:../contact.php");//recargar la pagina cuando se envien los datos 
}

//FORMA SIMPLE: 

/*
include("../partials/conexion.php");
$email = $_POST["email"];
$msg = $_POST["msg"];
//echo $email; 
//echo $msg; 

$sql = "INSERT INTO contact(email,msg) VALUES('$email','$msg')";

$connect->query($sql);
*/