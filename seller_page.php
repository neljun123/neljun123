<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['seller_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>seller page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

  <?php include 'seller_header.php'; ?>

<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['seller_name'] ?></span></h1>
      <p>this is a seller page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>
