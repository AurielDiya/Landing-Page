<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://twitter.com/yaaadhe" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/aurieldhea/" class="fab fa-instagram"></a>
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Store</a> 
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
         </div>

      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">BooklySweet.</a>
         <div class="icons">
         </div>
      </div>
   </div>
</header>