<?php
require('func.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php i18n( $i18nTtitle ); ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="pdata/favicon.ico" type="image/x-icon">
    <link rel="icon" href="pdata/favicon.ico" type="image/x-icon">
	<style>
      body {
        padding-top: 60px;
	 background-color: transparent;
      }
      footer {
        bottom: 0;
	width: 100%;
      }
	</style>
  </head>

  <body>

    <div class="container">

<?php
echo "<h2>"; i18n( $i18nTtitle ); echo "</h2>";
if ( isset( $_GET['new'] ) && !empty( $_GET['new'] ) ) {
echo "<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\"> <a href=\"find.php?nextid=rand&uselang="; i18n($i18nTlang); echo"\" type=\"button\" class=\"close\" 
aria-label=\"Close\"><span aria-hidden=\"true\">×</span></a>";
i18n( $i18nTnewac );
echo "</div>";
}
?>
      <div class="jumbotron">
	<h2><?php $thiscurid = curid(); $ret = $i18nTwcid[$thiscurid]; echo wikify($ret); ?></h2>
	<br><br>
        <p>
          <a class="btn btn-lg btn-primary" href="find.php?uselang=<?php i18n( $i18nTlang ); ?>&curid=<?php $larrand = array_rand($i18nTwcidq); echo $larrand; echo "&rid="; echo rand(200, 9876); ?>" role="button"><?php $arrand = array_rand($i18nTwcidq); echo $i18nTwcidq[$arrand];  ?> &raquo;</a>
        </p>
      </div>
	<small><div style = "float: left;"><a href="index.php?uselang=<?php i18n( $i18nTlang ); ?>"><?php i18n( strtolower($i18nThome) ); ?></a> | <a href="javascript:history.back()"><?php 
i18n( strtolower($i18nTback) ); ?></a> | <a href="find.php?help&uselang=<?php i18n( $i18nTlang ); ?>"><?php i18n( strtolower($i18nThelp) ); ?></a></div></small>
    <?php if(isset($_GET['help'])) {
    echo "<br><div class=\"alert alert-info alert-dismissible fade in\" role=\"alert\"> <a href=\"find.php?uselang=";
    i18n( $i18nTlang );
    echo "\" type=\"button\" class=\"close\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></a> <strong>";
    i18n($i18nThome);
    echo "</strong><br>";
    i18n($i18nThomehelp); 
    }
    echo "</div>"; 
    footer()
?>
