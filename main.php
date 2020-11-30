<?php
  setcookie("name", $_POST["name"]);
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>购物车</title>
  </head>
  <frameset rows="60, *" border="0">
    <frame name="top" noresize scrolling="no" src="show_link.htm">
    <frame name="bottom" noresize src="catalog.php">
  </frameset>
</html>