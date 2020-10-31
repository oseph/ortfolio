<?php
include $_SERVER["DOCUMENT_ROOT"]."/config.php";
$projects = glob($ROOT .'/'.$sectionName."/*", GLOB_ONLYDIR);

foreach ($projects as $project) {
  $projectName = basename($project);
  $projectPath = $ORTFOLIO_LOCATION."/".$sectionName."/".$projectName."/";
  $skip = false;
  if (file_exists($project."/project-config.php")) {  
    include $project."/project-config.php";
    if ($album) {
      $thumbs = glob($project."/thumbnail/"."*.{jpg,jpeg,gif,png}", GLOB_BRACE);                      
      foreach ($thumbs as $thumb) {
        echo "<div class='music-project' style='display:inline-block;width:100%;padding-bottom:2em;'>". PHP_EOL;

        echo "<div class='music-project-album' style='float:left;padding-right:1em;'>";
        printf('<a href="%s"><img src="%s" alt="%s" ></a>'. PHP_EOL, 
          $projectPath,
          $projectPath."/thumbnail/".basename($thumb),
          basename($project)
        );
        echo "</div>";
        echo "<div class='info-container' style='max-width:50em; float:left;'>";
          echo "<div style='padding-bottom:0.5em;'><strong>".$title."</strong></div>";
          echo "<div>".$description."</div>";
        echo "</div>";
        echo "</div>";
      }
    }
  }
}
