<div class="grid">
<?php 
$projects = glob($ROOT .'/'.$sectionName."/*", GLOB_ONLYDIR);

// loop through each project, and for each of it's thumbnails, create a HTML for a thumbnail linking to that project.
function createThumbs($projects, $sectionName, $ROOT, $ORTFOLIO_LOCATION): array {
  $thumbdivs = array();
  foreach ($projects as $project) {
    $projectName = basename($project);
    $projectPath = "/".$sectionName."/".$projectName;
    $thumbs = glob($ROOT ."/".$projectPath."/thumbnail/"."*.{jpg,jpeg,gif,png}", GLOB_BRACE);
        
    foreach ($thumbs as $thumb) {
      $thumbdivs[] = sprintf('<div class="grid-item">'.PHP_EOL.'<a href="%s">
    <img src="%s" alt="%s"></a></div>'.PHP_EOL, 
      $ORTFOLIO_LOCATION.$projectPath,
      $ORTFOLIO_LOCATION.$projectPath."/thumbnail/".basename($thumb),
      basename($project));
    }
  }
  return $thumbdivs;
}

$thumbdivs = createThumbs($projects, $sectionName, $ROOT, $ORTFOLIO_LOCATION);

if ($shuffleThumbnails) { 
  shuffle($thumbdivs);
}

foreach ($thumbdivs as $thumb) {
  echo $thumb;
}
?>
</div>
<script type="text/javascript" src="/lib/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/lib/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/lib/initGrid.js"></script>