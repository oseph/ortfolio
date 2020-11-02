<?php
include __DIR__."/../config.php";
$projects = glob($ROOT.'/'.$sectionName."/*", GLOB_ONLYDIR);
$blogImages = Array();
foreach($images as $key=>$imagePath) {
  $blogImages[$key] = "<img src='".$ORTFOLIO_LOCATION.$BLOG_DIR."/".$projectName."/images/".basename($imagePath)."'>";
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include $ROOT."/templates/ortfolio-credit.php"; ?>
<head>
  <?php include $ROOT."/templates/google-analytics.php"; ?>
  <meta charset="utf-8">
  <title><?php echo $artistName .": " . $blog_title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $ORTFOLIO_LOCATION."/static/style.css"; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include $ROOT.'/templates/favicon.php';?>
</head>
<body>
  <?php include($ROOT. "/templates/sidenav.php"); ?>
  <div class="content"> 
    <div class="blog-post-content">
      <h3><?php echo $blog_title; ?></h3>
      <div class="date"><?php 
          if ($blog_date) {
            $date = strtotime($blog_date);
            $newFormat = date('l, F j,  Y',$date);
            echo $newFormat; 
          }
        ?></div>
        <?php 
        include ($ROOT.$BLOG_DIR."/".$projectName."/post.php");
        include $ROOT."/templates/blog-nav.php"; ?>
    </div>  
  <?php 
        $order = $curr;
        if ($curr > 0) {
          include($ROOT."/templates/blog-list-entries.php"); 
        }
        ?>
  </div>
</body>
</html>