<?php
include('../partials/conexion.php');
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password == $password2) {
    /*enviarlos a la base de datos*/
    $sql_agregar = "INSERT INTO customers(username,password) VALUES (?,?)"; //signos de interrogacion por seguridad
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($email, $password)); //en el array van el el mismo orden que irian en los signos de interrogracion 

    /*cerrar la conexion de agregar:*/
    $sentencia_agregar = null;
    $pdo = null;
    echo "<script>
    alert('Account registered succesfully'); 
    window.location.href='../customerForms.php';
    </script>";
    //header("location: ../customerForms.php"); //esto no funciona con el alert de js 
} else {
    echo "<script>
    alert('Passwords dont match'); 
    window.location.href='../customerForms.php';
    </script>";
}
