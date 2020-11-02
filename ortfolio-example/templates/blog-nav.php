<div class="blog-nav">    
<?php 
// get all blogs
$projects = glob($ROOT."/".$BLOG_DIR."/*", GLOB_ONLYDIR);
$blogFolders = Array();
$curr = $order;

class BlogPost {
  public $title = 'none';
  public $link = 'none';
  public $order = -1;
}

foreach ($projects as $project) {
  if (file_exists($project."/project-config.php")) {  
    include $project."/project-config.php";
    $post = new BlogPost();
    $post->title = $blog_title;
    $post->order = $order;
    $post->link = basename($project);
    // this `$order` is read from project-config above
    $blogFolders[$order] = $post;
  }
}
?>
<div class="blog-prev-post">
<?php
if (array_key_exists($curr-1, $blogFolders)) { 
  $link = $blogFolders[$curr-1]->link;
  $title = $blogFolders[$curr-1]->title;
  ?>
  <a href="<?php echo $ORTFOLIO_LOCATION.$BLOG_DIR."/".$link; ?>"><?php echo $title; ?></a><strong>⬅ Previous entry</strong>
<?php } ?>
</div>
<div class="blog-all-posts">
  <a href="<?php echo $ORTFOLIO_LOCATION.$BLOG_DIR;?>">(all entries)</a>
</div>
<div class="blog-next-post">
<?php
if (array_key_exists($curr+1, $blogFolders)) { 
  $link = $blogFolders[$curr+1]->link;
  $title = $blogFolders[$curr+1]->title;
  ?>
  
  <a href="<?php echo $ORTFOLIO_LOCATION.$BLOG_DIR."/".$link; ?>"><?php echo $title; ?></a><span><strong>Next entry ➡</strong></span>
<?php } ?>
</div>
</div>
