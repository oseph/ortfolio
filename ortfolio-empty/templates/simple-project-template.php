<?php 
include __DIR__."/../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include $ROOT."/templates/ortfolio-credit.php"; ?>
<head>
  <?php include $ROOT ."/templates/google-analytics.php"; ?>
  <meta charset="utf-8">
  <title><?php echo $artistName .": ". $title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css";?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include $ROOT.'/templates/favicon.php';?>
</head>
<body>
  <?php include($ROOT. "/templates/sidenav.php"); ?>
  <div class="content"> 
    <div class="project-section">
      <h3><?php echo $title;?></h3>
      <div class="credits">
        <?php 
          if (isset($creditOne)) echo '<p>'.$creditOne.'</p>'.PHP_EOL; 
          if (isset($creditTwo)) echo '        <p>'.$creditTwo.'</p>'.PHP_EOL; 
        ?>
      </div>
      <p><?php echo $description; ?></p>
      
        <?php
          foreach ($images as $img) {
            $path = $ORTFOLIO_LOCATION."/".$sectionName."/".$projectName."/images";
            echo '<img src="' .$path ."/". basename($img) . '" alt="'.basename($img).'">';
          }
        ?>

    </div>
  <?php include("gallery.php"); ?>
  </div>
</body>
</html>