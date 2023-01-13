<?php

@include 'config.php';

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:product_list.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:product_list.php');
      $message[] = 'product could not be deleted';
   };
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>list of products</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

  <?php include 'admin_header.php'; ?>

  <br>

  <section class="display-product-table">

     <table>

        <thead>
           <th>name</th>
           <th>price</th>
           <th>image</th>
           <th>action</th>
        </thead>

        <tbody>
           <?php

              $select_products = mysqli_query($conn, "SELECT * FROM `products`");
              if(mysqli_num_rows($select_products) > 0){
                 while($row = mysqli_fetch_assoc($select_products)){
           ?>

           <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['price']; ?></td>
              <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
              <td>
                 <a href="product_list.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
              </td>
           </tr>

           <?php
              };
              }else{
                 echo "<div class='empty'>no product added</div>";
              };
           ?>
        </tbody>
     </table>

  </section>

</body>
</html>
