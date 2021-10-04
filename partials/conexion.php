<?php
$link = "mysql:host=localhost;dbname=phpstore";
$usuario = "root";
$pass = "";

try {
    $pdo = new PDO($link, $usuario, $pass);
    /* echo "CONECTADO A LA BASE DE DATOS";
    foreach ($pdo->query('SELECT * FROM `categories`') as $row) {
        print_r($row["id"].$row["name"]);
    }*/
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
//FORMA SIMPLE: 

/*$host = "localhost";
$user = "root";
$password="";
$dbname ="phpstore"; 

$connect = mysqli_connect($host,$user,$password,$dbname);
if($connect->mysqli_error){
    echo "EROR DE CONEXION"; 
}else{
    echo "CONECTADO A LA BD"; 
}*/
