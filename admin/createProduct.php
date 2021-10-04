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
          <form role="form" action="productshandler.php" method="POST" enctype="multipart/form-data">
            <h1>Products</h1>
            <div class="form-group">
              <input type="text" class="form-control my-2" placeholder="Product Name" name="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
              <input type="file" name="file" id="file">
            </div>
            <div class="form-group">
              <textarea name="descr" cols="100" rows="10" placeholder="Enter description"></textarea>
            </div>
            <div class="form-group">
              <select name="cat">
                <?php
                include_once "../partials/conexion.php";
                foreach ($pdo->query('SELECT * FROM `categories`') as $row) {
                  //print_r($row["name"]);
                  echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
                }
                ?>
              </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>

      </section>
    </div>

    <?php
    include("adminpartials/footer.php");
    ?>
</body>

</html>