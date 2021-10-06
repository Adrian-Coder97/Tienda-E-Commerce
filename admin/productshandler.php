<?php
if ($_POST) {
    include("../partials/conexion.php");

    /*recibir los datos*/
    $name = $_POST["name"];
    $price = $_POST["price"];
    $descr = $_POST["descr"];
    $cat = $_POST["cat"];

    //TO STORE AN IMAGE IN OUR DB: 
    $target = "../uploads/";
    $file_path = $target . basename($_FILES['file']['name']);
    $file_name = $_FILES['file']['name']; 
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_store = "../uploads/" . $file_name;
    move_uploaded_file($file_tmp, $file_store);


    /*enviarlos a la base de datos*/
    $sql_agregar = "INSERT INTO products(name,price,picture,description,category_id) VALUES (?,?,?,?,?)"; //signos de interrogacion por seguridad
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($name, $price, $file_path, $descr, $cat)); //en el array van el el mismo orden que irian en los signos de interrogracion 

    /*cerrar la conexion de agregar:*/
    $sentencia_agregar = null;
    $pdo = null;
    header("location:../admin/createProduct.php"); //recargar la pagina cuando se envien los datos 
}
