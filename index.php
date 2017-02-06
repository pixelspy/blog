<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" style="text/css" href="blogstyle.css">
    <title>Journal de bord</title>

</head>

<body>
    <header>
          <h1>Blog de Mahana</h1>
    </header>

        <main>
              <h2>Tableau de bord</h2>
              <p>La seule constante est le changement</p>
              <h2>Article du Jour</h2>
        </main>

        <aside class="articlelist">
        <ul>

          <?php
          $entries = scandir("billets");
          foreach($entries as $entry)
          {
            if ($entry!=".."&&$entry!=".")
          {
            echo "<li><a href='billets/$entry'>$entry</a></li>\n";
          }
          }
          ?>
        </ul>
        </aside>
  <?php

  switch($_GET["content"])
  {
    case "index.php":
    case "home.php";
    case "06_02_2017.php":
    case "07_02_2017.php":
    include ($_GET["content"]);
      break;

    case NULL:
      echo "<p>Permission Denied</p>";
      break;


    default:
      echo "<p>Permission Denied</p>";
      break;
  }
  ?>

  <footer>
    <ul class="social">
      <li><a target="_blank" href="https://www.facebook.com/mahana.houdini"><i class="fa fa-facebook"></i></a></li>
      <li><a target="_blank" href="https://twitter.com/MahanaD2"><i class="fa fa-twitter"></i></a></li>
      <li><a target="_blank" href="https://www.instagram.com/mahana_delacour/"><i class="fa fa-instagram"></i></a></li>
      <li><a target="_blank" href="http://m-a-h-a-n-a.tumblr.com/"><i class="fa fa-tumblr"></i></a></li>
    </ul>
  </footer>
  </body>
</html>


<!--

  <li><a href="index.php?content=home.php" <?php if ($_GET["content"] == 'home.php')  { echo "class='current'"; }; ?>>Tableau de bord</a></li>
  <li><a href="index.php?content=06_02_2017.php" <?php if ($_GET["content"] == '06_02_2017.php')  { echo "class='current'"; }; ?>>Article du 6 Février</a></li>
  <li><a href="index.php?content=07_02_2017.php" <?php if ($_GET["content"] == '07_02_2017.php')  { echo "class='current'"; }; ?>>Article du 7 Février</a></li>
-->
