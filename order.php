<?php

@include 'config.php';

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:order.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:order.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>list of orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/creative.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'seller_header.php'; ?>

<br>

<section class="display-product-table">

   <table>

      <thead>
         <th>name</th>
         <th>number</th>
         <th>email</th>
         <th>method</th>
         <th>address</th>
         <th>products</th>
         <th>total</th>
      </thead>

      <tbody>
         <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `order`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['method']; ?></td>
            <td><?php echo $row['flat']; ?>, <?php echo $row['street']; ?>, <?php echo $row['city']; ?>, <?php echo $row['state']; ?>, <?php echo $row['country']; ?>, <?php echo $row['pin_code']; ?></td>
            <td><?php echo $row['total_products']; ?></td>
            <td>$<?php echo $row['total_price']; ?></td>
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




<!-- custom js file link  -->
<script src="js/javascript.js"></script>

</body>
</html>
