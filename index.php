<?php

session_start();
include("includes/pagehandler.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="labian är en enkel och snygg labbrapports hanterare på nätet!">
    <meta name="author" content="Joar Classon">
    <link rel="icon" href="/favicon.ico">
    <title>Labian - Labbrapports Hanterare på Nätet!</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/global.css" rel="stylesheet">
    <?php if ($PAGE == "start") { ?>
      <link href="/css/cover.css" rel="stylesheet">
    <?php } ?>
  </head>
  <body>
    <?php include("pages/".$PAGE_INCLUDE); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
