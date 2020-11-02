<?php
include __DIR__.'/../config.php';

$thumbdivs = createSuperGalleryThumbnails($superGallerySections, $ROOT, $ORTFOLIO_LOCATION);

if ($shuffleThumbnails) { 
  shuffle($thumbdivs);
}
foreach ($thumbdivs as $thumb) {
  echo $thumb;
}

/**
 * Given an array of $sectionNames (folder names), read through all of the
 * projects in each section and return an array of HTML strings for 
 * each project's thumbnail image(s) linking to that project...
 */
function createSuperGalleryThumbnails($sections, $ROOT, $ORTFOLIO_LOCATION): array {
  $projects  = array();
  $namePairs = array();
  $thumbdivs = array();

  foreach ($sections as $section) { 
    $sectionProjects = glob($ROOT."/".$section."/*", GLOB_ONLYDIR);

    // keep track of the section name that is affiliated with each project; 
    // this will help you to link to the projects appropriately.
    foreach ($sectionProjects as $projectName) { 
      $namePairs[$projectName] = $section; 
    }
    $projects = array_merge($sectionProjects, $projects);
  } 

  foreach ($projects as $project) {
    $projectName = basename($project);
    $projectPath = $ORTFOLIO_LOCATION."/". $namePairs[$project]."/".$projectName;
    $skip = false;

    if (file_exists($projectPath."/project-config.php")) {
      include $projectPath."/project-config.php";
      if ($omit == true) {   
        $skip = true;                      
      }
    }
    
    if (!$skip) {   
      $thumbs = glob($project."/thumbnail/"."*.{jpg,jpeg,gif,png}", GLOB_BRACE);                   
      foreach ($thumbs as $thumb) {
        $thumbdivs[] = sprintf('   <div class="grid-item">'.PHP_EOL.'      <a href="%s"><img src="%s" alt="%s"></a>'.PHP_EOL.'   </div>'.PHP_EOL, 
        $projectPath,
        $projectPath."/thumbnail/".basename($thumb),
        basename($project));
      }
    }
  }
  
  return $thumbdivs;
}


