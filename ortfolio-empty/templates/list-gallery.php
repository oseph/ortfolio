<?php
include __DIR__."/../config.php";
$projects = glob($ROOT .'/'.$sectionName."/*", GLOB_ONLYDIR);
$namePairs = Array();

// sorts the order of the files
foreach ($projects as $project) {
  if (file_exists($project."/project-config.php")) {  
    include $project."/project-config.php";
    $projectName = basename($project);
    $namePairs[$projectName] = $order;

  }
}
arsort($namePairs);

foreach ($namePairs as $project=>$value) {
  $projectName = basename($project);
  $projectPath = $ORTFOLIO_LOCATION."/".$sectionName."/".$projectName."/";
  $skip = false;
  if (file_exists($project."/project-config.php")) {  
    include $project."/project-config.php";
    
      $thumbs = glob($project."/thumbnail/"."*.{jpg,jpeg,gif,png}", GLOB_BRACE);                      
      foreach ($thumbs as $thumb) { ?>
        <div class="list-gallery-item">
          <div class="list-gallery-item-thumbnail">
        <?php printf('<a href="%s"><img src="%s" alt="%s" ></a>'. PHP_EOL, 
          $projectPath,
          $projectPath."/thumbnail/".basename($thumb),
          basename($project)
        );?>
          </div>
        <div class="list-gallery-item-info">
          <a href="<?php echo $projectPath;?>"><strong><?php echo $title;?></strong></a>
          <div class="credits"><p><?php echo $creditOne;?></p></div>
          <p><?php echo $description;?>
        </div>
        </div>
      <?php }
  }
}
