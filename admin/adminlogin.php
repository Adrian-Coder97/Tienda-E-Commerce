<?php
session_start(); 
include("../partials/conexion.php");
include("adminpartials/head.php");

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    foreach ($pdo->query('SELECT * FROM `admins`') as $row) {
        //print_r($row["name"] . $row["name"]);

        $_SESSION["email"] = $row['username'];
        $_SESSION["password"] = $row['password'];

        if ($email == $row['username'] and $pass == $row['password']) {
            header("location: adminindex.php");
        } else {
            header("location: adminlogin.php");
        }
    }
}
?>
<div class="row">
    <div class="col-sm-4">

    </div>

    <div class="col-sm-4">
        <h1>Admin Login</h1>
        <form class="form-horizontal" action="adminlogin.php" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-default"><a href="../index.php">Back to Store</a></button>
                <button type="submit" class="btn btn-info pull-right" name="login">Sign in</button>
            </div>
        </form>
    </div>
    <div class="col-sm-4">

    </div>
</div>