
 <?php

 if (!isset($_COOKIE["userName"])){
   setcookie("userName", $_POST["username"], time() + (30 * 24 * 60 * 60), "/");
   // 86400 = 1 day / jour,heure, minute, seconde : il faut mettre du plus grand au plus petit
 }

 session_start();

 if (isset($_GET["addcart"])){

   if(!isset($_SESSION["cart"])) { //si la session n existe pas
     $_SESSION["cart"] = [];  // alors le panier est vide
   }

   $_SESSION["cart"][] = $_GET["addcart"];
  //  array_push($_SESSION["cart"] , $_GET["content"]); // si la session is set alors on ajoute le contenu
 }

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" style="text/css" href="eshop.css">
  <title>e-shop</title>
</head>
<body>
  <header id="headContainer">
    <h2>e-shop</h2>
  </header>

  <header id="secondContainer">
    <form class="" action="index.php" method="post">
      <label for="username">Username:</label><input type="text" name="username">
      <input type="submit" name="" value="submit">
    </form>

    <a href="cart.php"><img id="cart" src="img/cart.jpg" alt=""></a>

  </header>

  <main id="mainContainer">

    <article id="article">
      <?php

      if(isset($_COOKIE["userName"])){
        echo $_COOKIE["userName"];
      }


      $entries = scandir("articles");

      if(isset($_GET["content"])){
        $getContent = $_GET["content"];
      }

      $articles_dir = "articles";

      if(isset($_GET["content"])){
        $article_path = "$articles_dir/" . $_GET["content"];
        if(dirname(
          realpath($article_path)
          ) == (
            realpath($articles_dir)
            )
          )
          {
            include $article_path;
            echo  "<h3><a href=index.php?content=" . $_GET['content']. "&amp;addcart=" . $_GET['content'] . ">Add to cart</a></h3>";
          }
        }else{
          include "start.php";
        }



          ?>

        </article>

        <aside id="aside">
          <ul>
            <?php
            foreach($entries as $entry){
              if ($entry!=".." && $entry!="."){
                $justname = pathinfo($entry);
                  echo '<li><a href="index.php?content=' . $entry . '">' . $justname['filename'] . '</a></li>';
                }
            }
            ?>
          </ul>
        </aside>

      </main>

    </body>
    </html>
