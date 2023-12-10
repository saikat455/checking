<header class="header">

   <div class="flex">

      <a href="#" class="logo">PRODUCTS</a>

      <nav class="navbar">
         <a href="home.php">HOME</a>
         <a href="logout.php">LOGOUT</a>
        
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

     <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
     

   </div>

</header>