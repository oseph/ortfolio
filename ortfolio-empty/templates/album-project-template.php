<?php 
include __DIR__."/../config.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <?php include $ROOT ."/templates/google-analytics.php"; ?>
  <meta charset="utf-8">
  <title><?php echo $artistName .": ". $title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
  <?php include($ROOT . "/templates/sidenav.php"); ?>
  <div class="content"> 
    <div class="project-section">
      <h3><?php echo $title; ?></h3>
      <div class="credits">
        <?php 
          if ($creditOne) echo '<p>'.$creditOne.'</p>'; 
          if ($creditTwo) echo '<p>'.$creditTwo.'</p>'; 
        ?>
      </div>

      <?php if ($description) echo '<p>'.$description.'</p>';?>

      <div id="player-and-album">
      <?php
          echo $iframe;
          $path = $ORTFOLIO_LOCATION."/".$sectionName."/".$projectName."/cover";
          echo '<img src="'.$path ."/". basename($albumCover) .'" alt="'.basename($albumCover) .'">';
        ?>
      </div>

      <div class="project-image">
        <?php
          foreach ($images as $imgDir) {
            $path = $ORTFOLIO_LOCATION."/".$sectionName."/".$projectName."/images";
            echo '<img src="' .$path ."/". basename($imgDir) . '" alt="'.basename($imgDir).'">';
          }
        ?>
      </div>
    </div>
  <?php include("gallery.php"); ?>
  </div>
</body>
</html>