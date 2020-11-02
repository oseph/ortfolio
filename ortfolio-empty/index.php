<?php include (__DIR__)."/config.php" ?>
<!DOCTYPE html>
<html>
<?php include($ROOT ."/templates/ortfolio-credit.php");?>
<head>
    <?php include $ROOT."/templates/google-analytics.php";?>
<meta charset="utf-8">
    <title><?php echo $artistName; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  </head>
<body>
  <!-- SIDEBAR NAVIGATION -->
  <?php include $ROOT."/templates/sidenav.php"; ?>
  <!-- THUMBNAIL GALLERY -->
  <div class="content">
    <div class="grid">
  <?php include "templates/super-gallery.php"; ?>
    </div>
  </div>
  <script type="text/javascript" src="lib/masonry.pkgd.min.js"></script>
  <script type="text/javascript" src="lib/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="lib/initGrid.js"></script>
</body>
</html>
