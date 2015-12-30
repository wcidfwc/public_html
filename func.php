<?php
function nb() {
$find = file('data/next.txt');
shuffle($find);
$text = $find[0];
$next = preg_replace("/[\n\r]/","", $text);
echo "$next";
}

function par() {
$find = file('data/find.txt');
shuffle($find);
$text = $find[0];
$wiki = array("[[", "|", "]]");
$html = array("<a herf = \"https://commons.wikimedia.org/wiki/", "\">", "</a>");
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
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
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
