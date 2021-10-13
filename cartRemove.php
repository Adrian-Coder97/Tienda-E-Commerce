<?php
session_start(); 
if(isset($_POST["remove"])){
    foreach ($_SESSION["cart"] as $key => $value){
        //print_r($key); 
        if($value["item_name"]==$_POST["item_name"]){
            unset($_SESSION["cart"][$key]); //delete item 
            $_SESSION["cart"]=array_values($_SESSION["cart"]); //rearrange array after deleting the item 
            echo '<script>
            alert("ITEM REMOVED FROM CART"); 
            window.location.href="cart.php"; 
            </script>'; 
        }
    }
}
