<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="background/aboutus.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our pizza shop started with just one store in 1990. The founder traded his half of the business to a friend in 2000, and in 1978 the 120th store opened, and things really began to cook. Delivering more than 10 thousand pizzas a day in the country, this company is the country's leading and fastest growing pizza delivery company committed to upholding the industry in product quality and operational excellence.

         By 1983 there were 1,000 Domino's stores, and in the same year Domino's opened its first international store in Winnipeg, Canada, followed by its first store on the Australasian continent in Queensland, Australia in the same year. By 1989 Domino's had 5,000 stores in operation, making it the fastest-growing pizza company in the world, with stores in the UK, Japan, and South America</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>