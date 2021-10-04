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


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <form action="cathandler.php" method="POST">
          <h1>Categories</h1>
          <div class="form-group">
            <input type="text" class="form-control my-2" placeholder="Enter new category" name="name">
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    include("adminpartials/footer.php");
    ?>
</body>

</html>