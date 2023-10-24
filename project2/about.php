<?php

include 'config.php';

session_start();

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

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
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/toko.jpg" alt="">
      </div>

      <div class="content">
         <h3>Kenapa memilih kami?</h3>
         <p>Pilih kami untuk pengalaman membaca yang luar biasa. </p>
         <p>Koleksi kami yang dikuratori dengan hati-hati, suasana yang nyaman, dan staf yang berpengetahuan memastikan bahwa setiap kunjungan ke toko kami adalah kenangan yang tak terlupakan.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Mark.jpg" alt="">
         <p>Keren! Dengan harga murah aku dapat memiliki buku original.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mark</h3>
      </div>

      <div class="box">
         <img src="images/Jennie.jpeg" alt="">
         <p>Tempat favorit untuk berbelanja buku dengan lengkap!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jennie</h3>
      </div>

      <div class="box">
         <img src="images/Zayn.jpg" alt="">
         <p>Selalu puas dengan keaslian barang dan pengiriman yang cepat!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Zayn</h3>
      </div>
   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/dhea.jpg" alt="">
         <div class="share">
            <a href="https://twitter.com/yaaadhe" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/aurieldhea/" class="fab fa-instagram"></a>
         </div>
         <h3>Auriel Diya Ulhaque Muntaz Waris</h3>
         <h3>213020503021</h3>
      </div>
   </div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>