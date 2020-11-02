<?php
$blogPosts = glob($ROOT."/".$BLOG_DIR."/*", GLOB_ONLYDIR);
$namePairs = Array();
if (isset($order)) {
  // this lists blogs as if we're on a blog post, only showing previous
  // posts with an '$order' less than the current post.
  $currentProjectOrder = $order;
  // sorts the order of the files
  foreach ($blogPosts as $project) {
    $projConfig = $project."/project-config.php";
    
    if (file_exists($projConfig)) {  
      include $projConfig;
      // this order is imported from the config above
      if ($order < $currentProjectOrder) {
        $previousBlogPost = basename($project);
        $namePairs[$previousBlogPost] = $order;
      }
    }
  }
} else {
  // sorts the order of the files
  foreach ($blogPosts as $project) {
    $projConfig = $project."/project-config.php";

    if (file_exists($projConfig)) {  
      include $projConfig;
      // this order is imported from the config above
        $previousBlogPost = basename($project);
        $namePairs[$previousBlogPost] = $order;
      }
    }
  }

arsort($namePairs);
?>
  <?php

foreach ($namePairs as $project=>$value) {
  $projectName = basename($project);
  $projectPath = $ROOT."/".$sectionName."/".$projectName;
  $projConfig = $projectPath."/project-config.php";

  if (file_exists($projConfig)) {  
    include $projConfig;
    $link = $ORTFOLIO_LOCATION."/".$sectionName."/".$project;
    $thumbs = glob($projectPath."/thumbnail/"."*.{jpg,jpeg,gif,png}", GLOB_BRACE);                      
  
  ?>
  <div class='blog-roll-item'>
  <?php foreach ($thumbs as $thumb) { ?>
  <div class='blog-roll-item-thumbnail'>
<?php 
  printf('<a href="%s"><img src="%s" alt="%s"></a>'. PHP_EOL, 
  $link,
  $link."/thumbnail/".basename($thumb),
  basename($project)
  );
}?>
  </div>
    <div class='blog-roll-item-info-container'>
      <div class='blog-roll-title'>
        <a href="<?php echo $link; ?>"><strong><?php echo $blog_title; ?></strong></a>
      </div>
      <div class='date'><p><?php 
      $date = strtotime($blog_date);
      $newFormat = date('l, F j,  Y',$date);
      echo $newFormat;  
?></p>
      </div>
      <div class='blog-roll-item-intro'><p><?php echo $blog_intro.PHP_EOL; ?></p></div>
    </div>
  </div>
</a>
  <?php }
  }
?>
