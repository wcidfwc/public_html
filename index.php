<?php
require('func.php');
counter();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php i18n( $i18nTtitle ); ?></title>
    <meta name="keywords" content="Commons,Wikimedia,Community,Uploading,Programming,Editing,Content,Files,Wiki">
    <meta name="robots" content="index,follow">
    <meta name="description" content="What can I do for Wikimedia Commons?">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="pdata/favicon.ico" type="image/x-icon">
    <link rel="icon" href="pdata/favicon.ico" type="image/x-icon">
    <style>
      body {
        padding-top: 60px;
      }
      footer {
        bottom: 0;
	width: 100%;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <div class="jumbotron" style = "text-align:center;">
	<p style="float:left;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/110px-Commons-logo.svg.png" alt="Wikimedia Commons community logo"></p>
	<h2 style="margin-top:30px;"><?php i18n( $i18nTtitle ); ?></h2>
	<?php i18n( $i18nTintro ); ?> | <a href="https://commons.wikimedia.org/wiki/Commons:Welcome?uselang=<?php i18n( $i18nTlang ); ?>"><?php i18n( $i18nTwis ); ?></a><br><br>
        <p><a class="btn btn-lg btn-success" href="find.php?new=yes&uselang=<?php i18n( $i18nTlang ); ?>" role="button"><?php i18n( $i18nTfind ); ?></a></p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h4><?php i18n( $i18nTmp1 ); ?></h4>
          <p><?php i18n( $i18nTmp1txt ); ?></p>
	  <br>
          <h4><?php i18n( $i18nTmp2 ); ?></h4>
          <p><?php i18n( $i18nTmp2txt ); ?></p>
	  <br>
          <h4><?php i18n( $i18nTmp3 ); ?></h4>
          <p><?php i18n( $i18nTmp3txt ); ?></p>
        </div>

        <div class="col-lg-6">
          <h4><?php i18n( $i18nTmp4 ); ?></h4>
          <p><?php i18n( $i18nTmp4txt ); ?></p>
	  <br>
          <h4><?php i18n( $i18nTmp5 ); ?></h4>
          <p><?php i18n( $i18nTmp5txt ); ?></p>
	  <br>
          <h4><?php i18n( $i18nTmp6 ); ?></h4>
          <p><?php i18n( $i18nTmp6txt ); ?></p>
        </div>
      </div>
	<br>
      <footer class="footer">
        <small><hr><p><a href="https://github.com/wcidfwc/public_html"><?php i18n( $i18nTsource ); ?></a> | <a href="disclaimer.php?uselang=<?php i18n( $i18nTlang ); ?>"><?php i18n( 
$i18nTlegal ); 
?></a> | <?php i18n( $i18nTlegal2 ); ?> | <?php i18n( $i18nTiol ); echo ": "; i18n( $allanguages ); ?></p></small>
      </footer>
    </div>
  </body>
</html>
