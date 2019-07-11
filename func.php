<?php
include "translations.php";

function i18n($translation) {
  $text = $translation;
  $wiki = array("[[", "|", "]]");
  $html = array("<a href = \"", "\">", "</a>");
  $htmlback = str_replace($wiki, $html, $text);
  echo $htmlback;
}

function curid() {
  $fastr = $_GET["curid"];
  $repl = preg_replace("/[^a-zA-Z0-9]/", "", $fastr);
    if (is_numeric($repl)) {
      $curid = $repl;
    } else {
      $curid = rand(1,5);
    }
  return $curid;
}

function wikify($w2t) {
  $wiki = array("[[", "|", "]]");
  $html = array("<a href = \"https://commons.wikimedia.org/wiki/", "\">", "</a>");
  $htmlback = str_replace($wiki, $html, $w2t);
  return $htmlback;
}

function par($loc) {
  $find = file($loc);
  shuffle($find);
  $text = $find[0];
  $wiki = array("[[", "|", "]]");
  $html = array("<a href = \"https://commons.wikimedia.org/wiki/", "\">", "</a>");
  $rand = str_replace($wiki, $html, $text);
  echo "$rand";
}

function footer() {
    echo "</body>\n</html>";
}

function start($name) {
    echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex, nofollow\">
    <title>$name</title>
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
  </head>
  <body>
    <div class=\"container\">";
}

function counter() {
  $fl = ( "counter.txt" );
  $wx = file( $fl );
  $wx[0] ++;
  $fp = fopen( $fl , "w" );
  fputs( $fp , "$wx[0]" );
  fclose( $fp );
}
?>
