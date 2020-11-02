<?php
include("../config.php");
include("section-config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include $ROOT."/templates/ortfolio-credit.php"; ?>
<head>
  <meta charset="utf-8">
  <title><?php echo $artistName . ": " . $sectionName; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include $ROOT."/templates/google-analytics.php"; ?>
<?php include $ROOT.'/templates/favicon.php';?>
</head>
<body>
 <?php include $ROOT."/templates/sidenav.php"; ?>
<div class="content">
	<?php include $ROOT."/templates/blog-roll.php"; ?>
</div>
</body>
</html>