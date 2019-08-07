<?php 

/* Enter your name here: */
$artistName = "Ort Folio";

/* Section names appear in the sidebar navigation menu, and appear in the
 * same order as they are listed below. And remember: section names must 
 * have the same name as the folders you create for them. 
 * formatted as follows:
 * $sectionNames["sectionFolderName"] = 'link text in menu'; */
$sectionNames["flowers"] = 'flowers';
$sectionNames["portraits"] = 'portraits';
$sectionNames["landscapes"] = 'landscapes';
$sectionNames["vids"] = 'vids';
$sectionNames["about"] = 'about';

/* The super gallery is the grid composed of all project thumbnails, pulled from 
 * the following list of sections. Enter the sections you want the super gallery 
 * to pull thumbnailsfrom. You can omit sections too. */
$superGallerySections = array("flower-pics","portraits", "vids","landscapes");
$shuffleThumbnails = true;

/* This is an array of your social media links: $socialMedia['key'] = value;
 * key   = link text that will appear in side bar 
 * value = URL to your social media page */ 
$socialMedia['twitter']   = 'http://www.twitter.com/';
$socialMedia['instagram'] = 'http://www.instagram.com/';

/* If you have a Google Analytics tracking code, paste it into the 
 * googleAnalytics.php file located in the templates folder and set the
 * following variable to `true` */
$usingGoogleAnalytics = false;


