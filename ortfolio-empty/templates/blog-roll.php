<?php
/*
* List all blog posts (aka folders) in this section
*/
// include $ROOT."/config.php";
$projects = glob($ROOT."/".$sectionName."/*", GLOB_ONLYDIR);
$blogFolders = Array();

// sorts the order of the files
foreach ($blogFolders as $project) {
  if (file_exists($project."/project-config.php")) {  
    include $project."/project-config.php";
    $projectName = basename($project);
    $namePairs[$order] = $projectName;
  }
}

unset($order);
include($ROOT."/templates/blog-list-entries.php");