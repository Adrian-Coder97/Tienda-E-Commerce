<aside class="main-sidebar">
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"><p><?php echo $_SESSION["email"]; ?>  </p></li>

      <li>
        <a href="categories.php">
          <i class="fa fa-th"></i> <span>Category</span>
        </a>
      </li>
      <li>
        <a href="createProduct.php">
          <i class="fa fa-th"></i> <span>Add Products</span>
        </a>
      </li>

      <li>
        <a href="showProducts.php">
          <i class="fa fa-th"></i> <span>Products List</span>
        </a>
      </li>

      <li>
        <a href="showOrders.php">
          <i class="fa fa-th"></i> <span>Orders</span>
        </a>
      </li>


      <li>
        <a href="adminpartials/logout.php">
          <i class="fa fa-th"></i> <span>Sign out</span>
        </a>
      </li>

    </ul>
  </section>
</aside>