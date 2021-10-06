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

                    <?php

                    $newid = $_GET["up_id"];
                    include_once "../partials/conexion.php";

                    foreach ($pdo->query("SELECT * FROM `products` WHERE id='$newid'") as $row) {
                        echo $row["id"];
                    }
                    ?>
                    <form role="form" action="proupdatehandler.php" method="POST" enctype="multipart/form-data">
                        <h1>Products</h1>
                        <div class="form-group">
                            <input type="text" class="form-control my-2" placeholder="Product Name" name="name" value="<?php echo $row["name"]; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Price" name="price" value="<?php echo $row["price"]; ?>">
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" id="file">
                        </div>
                        <div class="form-group">
                            <textarea name="descr" cols="100" rows="10" placeholder="Enter description"><?php echo $row["description"]; ?></textarea>
                        </div>
                        <div class="form-group">
                            <select name="cat" >
                                <?php
                                foreach ($pdo->query('SELECT * FROM `categories`') as $catrow) {
                                    //print_r($catrow["name"]);
                                    echo "<option value=" . $catrow['id'] . ">" . $catrow['name'] . "</option>";
                                }
                                ?>
                            </select>
                            </select>
                        </div>
                        <input type="hidden" name="form_id" value="<?php echo $row["id"]; ?>">
                        <button type="submit" class="btn btn-success" name="update">Update</button>
                    </form>
                </div>

            </section>
        </div>

        <?php
        include("adminpartials/footer.php");
        ?>
</body>

</html>