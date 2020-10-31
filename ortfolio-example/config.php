<?php 
/* This tells ortFolio where it's located relative to the root of your webserver.
 * Leave empty/do not touch if serving ortFolio from your server's root directory.
 * For example, if serving ortFolio from a folder named `ortfolio` in your root directory, 
 * then enter the absolute web path: $ORTFOLIO_LOCATION = "/ortfolio"; */
$ORTFOLIO_LOCATION = "";
$ROOT = $_SERVER["DOCUMENT_ROOT"].$ORTFOLIO_LOCATION;

/* Enter your name here: */
$artistName = "ortFolio";
$version = "1.4.0";

/* Section names appear in the sidebar navigation menu, and appear in the
 * same order as they are listed below. Section names must have the same 
 * name as the folders you create for them. 
 *
 * Follow the template below where:
 *     $sectionNames['your-section-folder-name'] = 'Text in sidenav!';
 */
$sectionNames["flowers"] = 'flowers';
$sectionNames["portraits"] = 'portraits';
$sectionNames["landscapes"] = 'landscapes';
$sectionNames["other"] = 'other';
$sectionNames["about"] = 'about';
$sectionNames["musics"] = 'muzak';

/* The super gallery is the grid composed of all project thumbnails, pulled from 
 * the following list of sections. Enter the sections you want the super gallery 
 * to pull thumbnailsfrom. You can omit sections too. */
$superGallerySections = array("flowers","portraits", "vids","landscapes");
$shuffleThumbnails = true;

/* This is an array of your social media links: $socialMedia['key'] = value;
 * key   = URL to your social media page 
 * value = link text that will appear in side bar */ 
$socialMedia['http://www.twitter.com/']   = 'twitter';
$socialMedia['http://www.instagram.com/'] = 'instagram';

/* If you have a Google Analytics tracking code, paste it into the 
 * googleAnalytics.php file located in the templates folder and set the
 * following variable to `true` */
$usingGoogleAnalytics = false;


