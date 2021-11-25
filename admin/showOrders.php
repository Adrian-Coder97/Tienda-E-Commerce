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
                    ?>
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">#Order id</th>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Adress</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pdo->query('SELECT * FROM `orders`') as $row) {
                                //print_r($row["name"]);
                            ?>
                                <tr>
                                    <th><?php echo $row["id"] ?></th>
                                    <td><?php echo $row["customer_id"] ?></td>
                                    <td><?php echo $row["address"] ?></td>
                                    <td><?php echo $row["phone"] ?></td>
                                    <td><?php echo $row["total"] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </section>
        </div>

        <?php
        include("adminpartials/footer.php");
        ?>
</body>

</html>