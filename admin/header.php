<?php
if(!isset($_SESSION['username'])) {   // If not Logged In
  header("location:logout.php");
}
include 'function.php';

?>

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<style>

</style>
 
</head>
<body class="my-white" style="background-color:#F1F1F1">
<a href="logout.php" class="w3-button w3-black" style="position:absolute;right:25px;top:25px;">Logout</a>
<div class="w3-bar w3-padding w3-teal">
<div class="w3-bar-item"><h3><a href="../index.php">Book Cellar</a></h3></div>

  </div>

<div class="w3-center">
<div class="w3-bar w3-white">
<a href="slide_info.php" class="w3-bar-item w3-button w3-mobile" id="slider">Slider</a>
<a href="post.php" class="w3-bar-item w3-button w3-mobile" id="post">Post</a>
<a href="category.php" id="cat" class="w3-bar-item w3-button w3-mobile">Category</a>
<a href="user_category.php" id="use-cat0" class="w3-bar-item w3-button w3-mobile">User-side Category</a>
<a href="book_info.php" id="book_info" class="w3-bar-item w3-button w3-mobile">Book Information</a>
<a href="order.php" id="order" class="w3-bar-item w3-button w3-mobile">Customer Order</a>
<a href="confirm.php" id="confirm" class="w3-bar-item w3-button w3-mobile">Order Confirmed</a>
<a href="deliver.php" id="deliver" class="w3-bar-item w3-button w3-mobile">Order Delivered</a>
<a href="bin.php" id="bin" class="w3-bar-item w3-button w3-mobile">Order Canceled</a>
</div>
</div>
</body>

</html>