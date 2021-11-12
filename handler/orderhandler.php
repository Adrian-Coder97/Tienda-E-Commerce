<?php
session_start();
include("../partials/conexion.php");
$total = $_POST['total'];

$phone = $_POST['phone'];

$address = $_POST['address'];

$customerid = $_SESSION['customerid'];

//echo $total . " / " . $phone . " / " . $address . " / " . $customerid;

$sql_agregar = "INSERT INTO orders (customer_id, address, phone, total) VALUES (?,?,?,?)"; //signos de interrogacion por seguridad
$sentencia_agregar = $pdo->prepare($sql_agregar);
$sentencia_agregar->execute(array($customerid, $address, $phone, $total)); //en el array van el el mismo orden que irian en los signos de interrogracion 

$sql_leer = "SELECT id FROM orders order by id DESC limit 1"; //seleccionar el ultimo campo en orders (el mas reciente)
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll(); //obtener un array 

//var_dump($resultado); //mostrar el array

foreach ($resultado as $dato) :
    $orderid = $dato["id"];  //recorrer el array para guardar el id que viene desde la bd en la variable orderid        
endforeach;


foreach ($_SESSION['cart'] as $key => $value) {
    $proid = $value['item_id'];
    $quantity = $value['quantity'];

    $sql_agregar2 = "INSERT INTO order_details (order_id, product_id, quantity) VALUES (?,?,?)"; //signos de interrogacion por seguridad
    $sentencia_agregar2 = $pdo->prepare($sql_agregar2);
    $sentencia_agregar2->execute(array($orderid, $proid, $quantity));
}

echo "<script> alert('ORDER PLACED SUCCESSFULLY');
    window.location.href='../index.php'; 
</script>";//redirect