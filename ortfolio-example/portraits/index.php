<?php
include __DIR__."/../config.php";
$ROOT = $_SERVER["DOCUMENT_ROOT"].$ORTFOLIO_LOCATION;
include("section-config.php"); 
?>
<!DOCTYPE html>
<html>
  <?php include $ROOT."/templates/google-analytics.php"; ?>
  <head>
  <meta charset="utf-8">
  <title><?php echo $artistName . ": " . $sectionName; ?></title>
  <link rel="stylesheet" type="text/css"href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
  <?php include $ROOT."/templates/sidenav.php"; ?>
  <div class="content">
  <?php include $ROOT."/templates/gallery.php"; ?>
  </div>
</body>
</html>