<?php
require('func.php');
start("What can I do for Wikimedia Commons?");
?>

<?php
echo "<h2>"; i18n( $i18nTtitle ); echo "</h2>";
if ( isset( $_GET['new'] ) && !empty( $_GET['new'] ) ) {
echo "<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\"> <a href=\"find.php?nextid=0\" type=\"button\" class=\"close\" 
aria-label=\"Close\"><span aria-hidden=\"true\">×</span></a> <strong>New at Wikimedia Commons?</strong> You should probably read <a href=\"https://commons.wikimedia.org/wiki/Commons:Welcome\">Commons:Welcome</a> first! :-)</div>";
}
?>
      <div class="jumbotron">
	<h2><?php $thiscurid = curid(); $ret = $i18nTwcid[$thiscurid]; echo wikify($ret); ?></h2>
	<br><br>
        <p>
          <a class="btn btn-lg btn-primary" href="find.php?curid=<?php $larrand = array_rand($i18nTwcidq); echo $larrand; echo "&rid="; echo rand(200, 9876); ?>" role="button"><?php $arrand = array_rand($i18nTwcidq); echo $i18nTwcidq[$arrand];  ?> &raquo;</a>
        </p>
      </div>
	<small><div style = "float: left;"><a href="index.php?uselang=<?php i18n( $i18nTlang ); ?>">home</a> | <a href="javascript:history.back()">back</a></div> <div style="text-align: 
right;"><?php help("<span class=\"caret\"></span> "); ?><a href="find.php?help&uselang=<?php i18n( $i18nTlang ); help("back"); ?>">help</a></div></small>
    <?php help("<br><div class=\"alert alert-info alert-dismissible fade in\" role=\"alert\"> <a href=\"find.php\" type=\"button\" class=\"close\" 
aria-label=\"Close\"><span aria-hidden=\"true\">×</span></a> <strong>Help</strong><br>This pags shows random stuff/tasks which you can do for Wikimedia Commons.<br><br>
    If you are looking for a general overview you can take a look at <a href=\"https://commons.wikimedia.org/wiki/Commons:Welcome\">Commons:Welcome</a> and <a href=\"https://commons.wikimedia.org/wiki/Commons:Community_portal\">Commons:Community portal</a>.</div>");
    echo "</div>"; 
    footer()
?>
