<?php
include($_SERVER['DOCUMENT_ROOT'] ."/config.php");
include("section-config.php"); 
?>
<!DOCTYPE html>
<html>
  <head>
  <?php include($_SERVER["DOCUMENT_ROOT"] ."/templates/google-analytics.php");?>
  <meta charset="utf-8">
  <title><?php echo $artistName; ?></title>
  <link rel="stylesheet" type="text/css" href="/static/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/sidenav.php"); ?>
  <div class="content">
     <p>ENTER YOUR CONTENT HERE</p>
    </div>
  </div>
</body>
</html>
