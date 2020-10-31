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
    <div class="about-section">
      <h3>ortFolio</h3>
      <p><i>ortFolio</i> is a free, open, minimal website template for image-based portfolios.</p>
      <p><a href="https://github.com/oseph/ortfolio">Get it and learn about it here.</a></p>

      <p>ortFolio is released under the <a href="license.txt">MIT license.</a></p>

      <p> All images and image credits on this demo have been pulled from the wonderful archives over at the <a href="https://www.rijksmuseum.nl">Rijksmuseum</a>.</p>

      <p><i>Created by <a href="https://www.holinaty.com">Josh Holinaty</a></i></p>
    </div>
  </div>
</body>
</html>
