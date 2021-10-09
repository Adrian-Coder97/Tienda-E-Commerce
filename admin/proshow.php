<?php
include("adminpartials/session.php");
include("adminpartials/head.php");
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
        include("adminpartials/header.php");
        include("adminpartials/aside.php");
        ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="col-md-4">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                </div>
                <div class="col-sm-12">
                    <?php
                    include_once "../partials/conexion.php";
                    $id = $_GET["pro_id"];
                    foreach ($pdo->query("SELECT * FROM products where id='$id'") as $row) {
                        //print_r($row["name"]);
                    ?>
                        <h3> Name: <?php echo $row["name"]; ?>
                            <hr>
                        </h3>

                        <h3> Price: <?php echo $row["price"]; ?>
                            <hr>
                        </h3>

                        <h3> Description: <?php echo $row["description"]; ?>
                            <hr>
                        </h3>

                        <img src="../<?php echo $row["picture"]; ?>" alt="no file" style="height:300px; width:300px;">
                    <?php
                    }
                    ?>
                </div>
            </section>
        </div>

        <?php
        include("adminpartials/footer.php");
        ?>
</body>

</html>