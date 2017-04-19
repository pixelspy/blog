

<?php
session_start();
if(isset($_SESSION["cart"])){
  if (isset($_GET["delete"])){
    array_splice($_SESSION["cart"], $_GET["delete"], 1);
  }

  foreach ($_SESSION["cart"] as $key => $items){
    echo "your cart : " . $items . "<a href='cart.php?delete=$key'>delete</a><br>"; //on ajoute le get content= delete
  }

}
// session_start();
// $_SESSION["panier"] = $_POST["nom"] : to add a username that saves on your internet nav and disappears if navigator is closed
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" style="text/css" href="eshop.css">
    <title>Your cart</title>
  </head>
  <body>
    <a href="index.php"><p>Back</p></a>
<!-- <ul class="listeItems">
  <li></li>
  <li></li>
  <li></li>
</ul> -->

  </body>
</html>
