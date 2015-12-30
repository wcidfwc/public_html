<?php
require('func.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What can I do for Wikimedia Commons?</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
	footer{
	bottom:0;
	width:100%;
      }
    </style>
  </head>

  <body>

    <div class="container">

      <div class="jumbotron" style = "text-align:center;">
	<p style="float:left;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/90px-Commons-logo.svg.png" alt="Wikimedia Commons community logo"></p>
	<h2 style="margin-top:30px;">What can I do for Wikimedia Commons?</h2>
	Uplaoding, editing, translating, reviewing files, create graphics, ... | <a href="https://commons.wikimedia.org/wiki/Commons:Welcome">What is Wikimedia Commons?</a><br><br>
        <p><a class="btn btn-lg btn-success" href="find.php?new=yes" role="button">Find me a project!</a></p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h4>Uploading</h4>
          <p>If you're a good photographer or designer don't histate to upload your files (Wikimedia Commons only accepts free content).</p>
	  <br>
          <h4>Editing</h4>
          <p>Help with fixing broken pages and categorising files.</p>
	  <br>
          <h4>Maintenance</h4>
          <p>There are a number of maintenance backlogs on commons which requiring attention.</p>
        </div>

        <div class="col-lg-6">
          <h4>Translating</h4>
          <p>Wikimedia Commons is a <a href="https://commons.wikimedia.org/wiki/Commons:Language_policy" title="Commons:Language policy">multilingual project</a>. You can help with <a href="https://commons.wikimedia.org/wiki/Special:LanguageStats">translating pages</a> into a language other than English.</p>
	  <br>
          <h4>????</h4>
          <p>Nominate your Photos at the </p>
	  <br>
          <h4>Coding</h4>
          <p>Help writing user scripts and tools.</p>
        </div>
      </div>
	<br>
      <footer class="footer">
        <small><hr><p><a href="https://github.com/wcidfwc/public_html">View source / Edit</a> | <a href="disclaimer.php">Disclaimer & Privacy</a> | Not officially affiliated with the 
Wikimedia Foundation</p></small>
      </footer>
    </div>
  </body>
</html>

