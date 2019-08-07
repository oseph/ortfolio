<?php 
include $_SERVER['DOCUMENT_ROOT'] ."/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <?php include $_SERVER['DOCUMENT_ROOT'] ."/templates/google-analytics.php"; ?>
  <meta charset="utf-8">
  <title><?php echo $artistName .": ". $title; ?></title>
  <link rel="stylesheet" type="text/css" href="/static/style.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/sidenav.php"); ?>
  <div class="content"> 
    <div class="project-section">
      <h3><?php echo $title; ?></h3>
      <div class="credits">
        <?php 
          if ($creditOne) echo '<p>'.$creditOne.'</p>'; 
          if ($creditTwo) echo '<p>'.$creditTwo.'</p>'; 
        ?>
      </div>

      <p><?php echo $description; ?></p>
      
      <div class="project-image">
        <?php
          foreach ($images as $imgDir) {
            $path = "/".$sectionName."/".$projectName."/images";
            echo '<img src="' .$path ."/". basename($imgDir) . '" alt="'.basename($imgDir).'">';
          }
        ?>
      </div>
    </div>
  <?php include("gallery.php"); ?>
  </div>
</body>
</html>