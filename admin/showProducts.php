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
                    foreach ($pdo->query('SELECT * FROM `products`') as $row) {
                        //print_r($row["name"]);
                    ?>
                        <a href="proshow.php?pro_id=<?php echo $row["id"]; ?>">
                        <h3> <?php
                                echo $row["id"];
                                echo ": ";
                                echo $row["name"];
                                ?>
                        </h3>
                        </a>
                        <a href="proupdate.php?up_id=<?php echo $row["id"]; ?>"> <button>Update</button> </a>
                        <hr>
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