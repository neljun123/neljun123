<header class="header">
   <link rel="stylesheet" href="css/creative.css">

   <div class="flex">

      <a href="#" class="logo">creative stuffs</a>

      <nav class="navbar">
         <a href="user_page.php">home</a>
         <a href="products.php">products</a>
         <a href="myorder.php">my order</a>
         <a href="logout.php">logout</a>
      </nav>

      <?php

      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
