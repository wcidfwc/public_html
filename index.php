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
    <meta name="robots" content="nofollow" />
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
      <div class="bs-callout bs-callout-danger" id="callout-input-needs-type"> <h4>This is a draft!</h4> <p>This page is a work in progress page.</p> </div>
      <div class="jumbotron" style = "text-align:center;">
	<p style="float:left;"><img src="pdata/Commons-logo.png" alt="Wikimedia Commons community logo"></p>
	<h2 style="margin-top:30px;">What can I do for Wikimedia Commons?</h2>
	Uploading, editing, translating, reviewing files, create graphics, ... | <a href="https://commons.wikimedia.org/wiki/Commons:Welcome">What is Wikimedia Commons?</a><br><br>
        <p><a class="btn btn-lg btn-success" href="find.php?new=yes" role="button">Find a project for me!</a></p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h4>Uploading</h4>
          <p>Are you a good photographer or illustrator? Don't hesitate to <a href="https://commons.wikimedia.org/wiki/Commons:Uploading">upload your files</a> (Wikimedia Commons accepts only <a href="https://commons.wikimedia.org/wiki/COM:L">free content</a>).</p>
	  <br>
          <h4>Editing</h4>
          <p>Help with <a href="https://commons.wikimedia.org/wiki/Commons:Categories">categorising</a> pages. There is a huge backlog at <a href="https://commons.wikimedia.org/wiki/Category:Media_needing_categories">Category:Media needing categories</a>.</p>
	  <br>
          <h4>Maintenance</h4>
          <p>There are a number of <a href="https://commons.wikimedia.org/wiki/Category:Commons_maintenance_content">maintenance backlogs</a> on commons which requiring attention.</p>
        </div>

        <div class="col-lg-6">
          <h4>Translating</h4>
          <p>Wikimedia Commons is a <a href="https://commons.wikimedia.org/wiki/Commons:Language_policy" title="Commons:Language policy">multilingual project</a>. You can help with <a href="https://commons.wikimedia.org/wiki/Special:LanguageStats">translating pages</a> into a language other than English. For example: Help translating the <a href="https://commons.wikimedia.org/wiki/Template:Potd">picture of the day's description</a>.</p>
	  <br>
          <h4>Vandalism</h4>
          <p>Wikimedia Commons is a wiki which everyone can edit. Help identifying <a href="https://commons.wikimedia.org/wiki/COM:CVU">vandalism</a> and help with detecting <a href="https://commons.wikimedia.org/wiki/Commons:How_to_detect_copyright_violations">copyright violations.</a></p>.
	  <br>
          <h4>Coding</h4>
          <p>Help <a href="https://commons.wikimedia.org/wiki/Commons:User_scripts">developing</a> user scripts & tools for the community.</p>
        </div>
      </div>
	<br>
      <footer class="footer">
        <small><hr><p><a href="https://github.com/wcidfwc/public_html">View source / Edit</a> | <a href="disclaimer.php">Legal</a> | Not officially affiliated with the Wikimedia Foundation</p></small>
      </footer>
    </div>
  </body>
</html>

