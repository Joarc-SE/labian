<?php

$URL = $_SERVER['QUERY_STRING'];
$URL_DIVIDED = explode("/", $URL);

if ($URL == "start" || $URL == "") {
  $PAGE = "start";
  $PAGE_INCLUDE = "start.php";
} else if ($URL_DIVIDED[0] == "edit" && $URL_DIVIDED[1] == get)
