<?php 
  include __DIR__."/../config.php";
  $projects = glob($ROOT .'/'.$sectionName."/*", GLOB_ONLYDIR);
  if ($shuffleSectionThumbnails) { shuffle($projects); }
?>

<div class="grid">
<?php 
  foreach ($projects as $project) {
    echo "<div class='grid-item'>". PHP_EOL;
    $projectName = basename($project);
    $projectPath = $ORTFOLIO_LOCATION."/".$sectionName."/".$projectName."/";
    $thumbs = glob($project."/thumbnail/"."*.{jpg,jpeg,gif,png}", GLOB_BRACE);
  
    foreach ($thumbs as $thumb) {
      printf('<a href="%s"><img src="%s" alt="%s"></a>'. PHP_EOL, 
        $projectPath,
        $projectPath."/thumbnail/".basename($thumb),
        basename($project)
      );
    }
    echo "</div>" . PHP_EOL;
  }
?>
</div>
<script type="text/javascript" src="<?php echo $ORTFOLIO_LOCATION."/lib/masonry.pkgd.min.js";?>"></script>
<script type="text/javascript" src="<?php echo $ORTFOLIO_LOCATION."/lib/imagesloaded.pkgd.min.js";?>"></script>
<script type="text/javascript" src="<?php echo $ORTFOLIO_LOCATION."/lib/initGrid.js";?>"></script>
