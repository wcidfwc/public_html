<?php
require('func.php');
start("What can I do for Wikimedia Commons?");
?>
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php?action=back">What can I do for Wikimedia Commons?</a>
        </div>
      </div>
    </nav>
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
