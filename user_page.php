<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

  <?php include 'user_header.php'; ?>

<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1><span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Welcome to Creative Stuffs!</p>
      <p>Arts and Crafts Online Shop for Everyone</p>
      <a href="products.php" class="btn">shop now</a>
   </div>

</div>

</body>
</html>
