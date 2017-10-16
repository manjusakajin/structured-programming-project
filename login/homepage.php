<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
      <title>Selling website</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel=”stylesheet” type=”text/css”  href=”style.css”>
  </head>
  <body>
<header>
<div align="left">
   <?php 
   if (isset($_SESSION['username']) && $_SESSION['username']){
      echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
      echo 'Click vào đây để <a href="logout.php">Logout</a>';
   }
   else{
       echo '<a href="login.php">login</a><br/>';
   }
   ?></div>
<img src="https://blog.flippa.com/wp-content/uploads/2014/12/6-things-you-should-know-before-listing-your-site-for-sale.png" style="width:100%;height:10%;"></header>
<ul id="menu">
<li>Home</li>
<li>Search</li>
</ul>
<div>welcome</div>
    </body>
</html>
