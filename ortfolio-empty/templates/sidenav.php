<?php
include __DIR__."/../config.php";
require_once($ROOT."/templates/get_latest_blog_post.php");
?>
<div class="sidenav">
  <div class="artist-name">
    <a href="<?php echo $ORTFOLIO_LOCATION; ?>"><?php echo $artistName; ?></a>
  </div>
<?php
  if (!isset($sectionName)) { $sectionName = "";}

  foreach($sectionNames as $folderName => $linkText) { 
  ?>

  <div class="sidenav-item <?php echo ($folderName == $sectionName) ? "active" : ""; ?>">
    <a href="<?php echo $ORTFOLIO_LOCATION."/".$folderName; ?>/"><?php echo $linkText; ?></a>
  </div>
<?php } 
if (empty($BLOG_DIR)) { ?>
    <div class="sidenav-item <?php echo ($sectionName == "blog") ? "active" : ""; ?>">
      <?php 
      {
        list ($_link, $_blog_title) = get_latest_blog_post($ROOT);
        printf("<a href='/blog/%s'>blog</a>",$_link);
        unset($_link);
        unset($_blog_title);
      }
    ?>  
    </div>
<?php
  }
  if (isset($socialMedia)) {
  foreach($socialMedia as $key => $name) { ?>
  <div class="sidenav-item">
    <a href="<?php echo $key; ?>"><?php echo $name; ?></a>
  </div>
<?php }
} ?>
</div>
