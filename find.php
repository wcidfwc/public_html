<?php
require('func.php');
start("What can I do for Wikimedia Commons?");
?>
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">What can I do for Wikimedia Commons?</a>
        </div>
      </div>
    </nav>
<?php
if ( isset( $_GET['new'] ) && !empty( $_GET['new'] ) ) {
echo "<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\"> <a href=\"find.php?nextid=0\" type=\"button\" class=\"close\" 
aria-label=\"Close\"><span aria-hidden=\"true\">×</span></a> <strong>New at Wikimedia Commons?</strong> You probably schould read <a href=\"https://commons.wikimedia.org/wiki/Commons:Welcome\">Commons:Welcome</a> first! :-)</div>";
}
?>
      <div class="jumbotron">
	<h2><?php par() ?></h2>
	<br><br>
        <p>
          <a class="btn btn-lg btn-primary" href="find.php?nextid=<?php echo rand(111, 99999); ?>" role="button"><?php nb() ?> &raquo;</a>
        </p>
      </div>
	<small><a href="index.php">home</a> | <a href="javascript:history.back()">back</a></small>
    </div> 
<?php
footer()
?>
