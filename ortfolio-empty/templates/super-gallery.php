<?php
include $_SERVER["DOCUMENT_ROOT"].'/config.php';
$projects = array();
$namePairs = array();
echo '<div class="grid">'.PHP_EOL;

// first add all the section names
foreach ($superGallerySections as $sectionName) { 
  $sectionProjects = glob($_SERVER['DOCUMENT_ROOT'] ."/".$sectionName."/*", GLOB_ONLYDIR);

  // keep track of the section name that is affiliated with each project; this will
  // help you to link to the projects appropriately.
  foreach ($sectionProjects as $projectName) { 
    $namePairs[$projectName] = $sectionName; 
  }
  $projects = array_merge($sectionProjects , $projects);
} 

if ($shuffleThumbnails) { 
  shuffle($projects);
}

foreach ($projects as $project) {
  $projectName = basename($project);
  $projectPath = $namePairs[$project]."/".$projectName;
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
      echo "<div class='grid-item'>". PHP_EOL;
      printf('<a href="%s"><img src="%s" alt="%s"></a>'. PHP_EOL, 
      $projectPath,
      $projectPath."/thumbnail/".basename($thumb),
      basename($project));
      echo "</div>" . PHP_EOL;
    }
  }
}
echo "</div>" . PHP_EOL;
