<?php
session_start();

if (isset($_POST["login"])) {
    include("../partials/conexion.php");

    $email = $_POST["email"];
    $password = $_POST["password"];
    foreach ($pdo->query("SELECT * FROM customers where username = '$email'") as $row) {
        //print_r($row["name"] . $row["name"]);

        $_SESSION["email"] = $row['username'];
        $_SESSION["password"] = $row['password'];

        if ($email == $row['username'] and $password == $row['password']) {
            header("location: ../cart.php");
        } else {
            echo "<script> 
    alert('WRONG CREDENTIALS');
    window.location.href='../customerForms.php'; 
     </script>";
        }
    }
} else {
    header("location: ../customerForms.php");
}
