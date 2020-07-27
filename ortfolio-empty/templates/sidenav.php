<?php
include __DIR__."/../config.php";?>
<div class="sidenav">
  <div class="artist-name">
    <a href="<?php echo $ORTFOLIO_LOCATION."/";?>"><?php echo $artistName; ?></a>
  </div>
  <?php
  foreach($sectionNames as $folderName => $linkText) { ?>
  <div class="sidenav-item <?php echo ($folderName == $sectionName) ? "active" : ""; ?>">
    <a href="<?php echo $ORTFOLIO_LOCATION."/".$folderName; ?>/"><?php echo $linkText; ?></a>
  </div>
  <?php } ?>
  <!-- padding between list of sections and social media links -->
  <div class="sidenav-item" style="padding-top:0.75em;"></div>
  <?php
  foreach($socialMedia as $key => $name) { ?>
  <div class="sidenav-item">
    <a href="<?php echo $key; ?>"><?php echo $name; ?></a>
  </div>
  <?php } ?>
</div>
