<?php
include __DIR__."/../config.php";
include "section-config.php"; 
?>
<!DOCTYPE html>
<html>
  <head>
  <?php include($ROOT ."/templates/google-analytics.php");?>
  <meta charset="utf-8">
  <title><?php echo $artistName; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
  <?php include($ROOT . "/templates/sidenav.php"); ?>
  <div class="content">
    <p>Enter your content here.</p>
  </div>
</body>
</html>
