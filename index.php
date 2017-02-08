<?php
$getContent = $_GET["content"];
$entries = scandir("billets", SCANDIR_SORT_DESCENDING);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" style="text/css" href="blogstyle.css">
    <script src="https://use.fontawesome.com/abd2365aee.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>Journal de bord</title>
</head>

<body>
  <header id="headercontainer">
      <h2 class="animated bounceIn">Blog de Mahana</h2>
      <h2>Tableau de bord</h2>
          <p>La seule constante est le changement</p>
  </header>

  <main id="maincontainer">

    <!-- <a href= "#"><img id="maingauche" src="img/gauche.png"/>
    </a>-->


    <article id="article">

    <?php

                 $articles_dir = "billets";
                 $show_article = false;

                 if (isset($_GET['content']))
                 {
                   $article_path = "$articles_dir/" . $_GET["content"] ;
                   if (
                     dirname(
                       realpath($article_path)
                       ) == (
                         realpath("./$articles_dir")
                         )
                   )
                   {
                     $show_article = true;
                     include $article_path;

                   }
                 }
                 ?>

    </article>
    <div id="maindroite"></div>


    <aside id="aside">
      <ul>
          <?php

            foreach($entries as $entry)
            {
              if ($entry!=".."&&$entry!=".")
              {
              $justname = pathinfo($entry);
              echo '<li><a  href="index.php?content=' . $entry .'">' . $justname['filename'] . '</a></li>';
            }
            }
          ?>
      </ul>
  </aside>
  </main>
  <footer id="footercontainer">
    <ul class="social">
      <a target="_blank" href="https://www.facebook.com/mahana.houdini"><i class="fa fa-facebook"></i></a>
      <a target="_blank" href="https://twitter.com/MahanaD2"><i class="fa fa-twitter"></i></a>
      <a target="_blank" href="https://www.instagram.com/mahana_delacour/"><i class="fa fa-instagram"></i></a>
      <a target="_blank" href="http://m-a-h-a-n-a.tumblr.com/"><i class="fa fa-tumblr"></i></a>
    </ul>
  </footer>

</body>
</html>


<!--
Solution de Max:
$path_parts = pathinfo($entry);
echo "<li><a href='index.php?content=$entry'>" . $path_parts['filename'] . "</a></li>";

solution Daniel:
$justname = basename($entry, ".php");
echo "<li><a href='index.php?content=$justname'>$justname</a></li>";

romain:
$article_dir = "billets";

if(isset($_GET['content']))
{
  $article_path = "$article_dir/" . $_GET["content"] . ".php";

  if(
    dirname(
      realpath($article_path)
      ) == (
      realpath("./$articles_dir")
        )
    )
}


  <li><a href="index.php?content=home.php" <?php if ($_GET["content"] == 'home.php')  { echo "class='current'"; }; ?>>Tableau de bord</a></li>
  <li><a href="index.php?content=06_02_2017.php" <?php if ($_GET["content"] == '06_02_2017.php')  { echo "class='current'"; }; ?>>Article du 6 Février</a></li>
  <li><a href="index.php?content=07_02_2017.php" <?php if ($_GET["content"] == '07_02_2017.php')  { echo "class='current'"; }; ?>>Article du 7 Février</a></li>
-->
