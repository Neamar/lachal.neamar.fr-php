<?php
  error_reporting(E_ALL ^ E_DEPRECATED);

  $url = parse_url(getenv("DATABASE_URL"));
  //Fichier assez utile :-)
  mysql_connect($url["host"] . ":" . $url["port"], $url["user"], $url["pass"]);
  mysql_select_db("neamar");
?>
