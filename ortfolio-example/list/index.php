<?php
include __DIR__."/../config.php";
include("section-config.php"); 
?>
<!DOCTYPE html>
<html>
  <?php include $ROOT."/templates/google-analytics.php"; ?>
  <head>
  <meta charset="utf-8">
  <title><?php echo $artistName . ": " . $sectionName; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include $ROOT.'/templates/favicon.php';?>
</head>
<body>
  <?php include $ROOT."/templates/sidenav.php"; ?>
  <div class="content">
    <p>This is an example of the list-gallery template, which might be handy if you want to list projects in a particular order, e.g. books or albums or ...<p>
  <?php include $ROOT."/templates/list-gallery.php"; ?>
  </div>
</body>
</html>