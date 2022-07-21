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
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>FRESHLY COOKED PIZZAS AND MORE</h3>
      <p>There's no better feeling in the world than a warm pizza box on your lap.</p>
      <p>~Kevin James</p>
      <a href="shop.php" class="white-btn">order now!</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="background/aboutus.png" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>This is an online store for customers to buy pizza and other types of food.</p>
      <a href="about.php" class="white-btn">Read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>You can ask us anything or give us your opinions here</p>
       <p>↓</p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>