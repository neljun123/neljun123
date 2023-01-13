<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my order</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

  <?php include 'user_header.php'; ?>

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

</body>
</html>
