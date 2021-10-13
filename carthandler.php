<?php
session_start();
if (isset($_SESSION["cart"])) {
    $checker=array_column($_SESSION["cart"], "item_name"); //check if element is already in cart 
    if(in_array($_GET["cart_name"], $checker)){
        echo '<script>
        alert("PRODUCT ALREADY IN CART")
        window.location.href="product.php"
        </script>';
    }else{
        $count = count($_SESSION["cart"]);//ADD ELEMENT TO CART 
        $_SESSION["cart"][$count] = array("item_id" => $_GET["cart_id"], 'item_name' => $_GET["cart_name"], 'item_price' => $_GET["cart_price"], 'quantity'=>1);
        echo '<script>
        alert("PRODUCT ADDED")
        window.location.href="product.php"
        </script>';
    }
   
} else {
    $_SESSION["cart"][0] = array("item_id" => $_GET["cart_id"], 'item_name' => $_GET["cart_name"], 'item_price' => $_GET["cart_price"], 'quantity'=>1);//CREATE NEW CART (IF THERES NO CART YET)
    echo '<script>
    alert("PRODUCT ADDED")
    window.location.href="product.php"
    </script>';
}
?>