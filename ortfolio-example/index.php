<?php include (__DIR__)."/config.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include $ROOT."/templates/google-analytics.php"; ?>
    <meta charset="utf-8">
    <title><?php echo $artistName; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  </head>
<body>
  <!-- SIDEBAR NAVIGATION -->
  <?php include $ROOT."/templates/sidenav.php"; ?>
  <!-- CONTENT (aka Thumbfest!) -->
  <div class="content">
  <?php include "templates/super-gallery.php"; ?>
  </div>
  <script type="text/javascript" src="lib/masonry.pkgd.min.js"></script>
  <script type="text/javascript" src="lib/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="lib/initGrid.js"></script>
</body>
</html>