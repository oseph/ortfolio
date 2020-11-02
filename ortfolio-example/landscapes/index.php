<?php
include __DIR__."/../config.php";
include("section-config.php"); 
?>
<!DOCTYPE html>
<html>
<?php include $ROOT."/templates/ortfolio-credit.php"; ?>
<head>
  <?php include $ROOT."/templates/google-analytics.php"; ?>
  <meta charset="utf-8">
  <title><?php echo $artistName . ": " . $sectionName; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include $ROOT.'/templates/favicon.php';?>
</head>
<body>
  <?php include $ROOT."/templates/sidenav.php"; ?>
  <div class="content">
  <?php include $ROOT."/templates/gallery.php"; ?>
  </div>
</body>
</html>