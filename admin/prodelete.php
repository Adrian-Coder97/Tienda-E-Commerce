<?php
include_once "../partials/conexion.php";
$new_id = $_GET["del_id"]; 

$sql_eliminar = "DELETE FROM products WHERE id=?";
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($new_id));

if($sentencia_eliminar){
    header("location:showProducts.php");
}else{
    echo "ERROR NOT DELETED"; 
}

?>