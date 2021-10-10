<?php
include("../partials/conexion.php");

if (isset($_POST["update"])) {
    $newid = $_POST["form_id"];
    $newname = $_POST["name"];
    $newprice = $_POST["price"];
    $newdesc = $_POST["descr"];
    $newcat = $_POST["cat"];

    //TO STORE AN IMAGE IN OUR DB: 
    $target = "uploads/";
    $file_path = $target . basename($_FILES['file']['name']);
    $file_name = $_FILES['file']['name']; 
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_store = "uploads/" . $file_name;
    move_uploaded_file($file_tmp, $file_store);


    $sql_editar = "UPDATE products SET name=?, price=?, description=?, category_id=?, picture=? WHERE id=?"; //los ? son por seguridad
    $sentencia_editar = $pdo->prepare($sql_editar);
    $sentencia_editar->execute(array($newname, $newprice, $newdesc, $newcat, $file_path, $newid)); //los campos deben corresponder a los simbolos de ?

    header("location:showProducts.php"); //para que recargue la pagina de index y no nos mande a editar.php
}
 