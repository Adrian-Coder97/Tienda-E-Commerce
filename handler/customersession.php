<?php
if (empty($_SESSION['email'] and $_SESSION['password'])) {
    echo "<script> 
    alert('PLEASE LOGIN BEFORE CHECKING OUT');
    window.location.href='customerForms.php'; 
     </script>"; 
} 
