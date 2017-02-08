<main>
      <h2>Article du 08 Février</h2>
      <p>Aujourd'hui,

    J'ai appris de nouvelles fonctions PHP:  dirname, realpath, basename, pathinfo,
</br></br>
      Solution n°1:</br>
      $path_parts = pathinfo($entry);
      echo "li a href='index.php?content=$entry'>" . $path_parts['filename'] . "a li";
</br></br>
      Solution n° 2:</br>
      $justname = basename($entry, ".php");
      echo "li a href='index.php?content=$justname'>$justname ali";
</br></br>
      Solution n°3:</br>
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
 </p>
</main>
