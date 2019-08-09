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
      <p>This website is made using ortFolio, a free and open minimal template for image-based portfolio needs. <a href="https://gitlab.com/oseph/ortfolio">Get it and learn about it here.</a></p>

      <p> All images and image credits have been pulled from the wonderful archives over at the <a href="https://www.rijksmuseum.nl">Rijksmuseum</a>.</p>

      <p><i>Created by Josh Holinaty </i></p>
    </div>
  </div>
</body>
</html>
