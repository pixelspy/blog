<?php
switch($_GET["content"])
{
  case "index.php":
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
