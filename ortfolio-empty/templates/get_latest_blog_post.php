<?php
function get_latest_blog_post($ROOT)
{
	$blogPosts = glob($ROOT."/blog/*", GLOB_ONLYDIR);
	$namePairs = Array();
	// sorts the order of the files
	include $_SERVER['DOCUMENT_ROOT']."/blog/section-config.php";

	foreach ($blogPosts as $project) {
		$projConfig = $project."/project-config.php";

		if (file_exists($projConfig)) {  
		  include $projConfig;
		  // this order is imported from the config above
	  	if ($order == $recentPostId) {
	  		return array(basename($project),$blog_title);
	  	}
	  }
	}	
}

