<?php 

/* This tells ortFolio where it's located relative to the root of your webserver.
 * Leave empty/do not touch if serving ortFolio from your server's root directory.
 * For example, if serving ortFolio from a folder named `ortfolio` in your root directory, 
 * then enter the absolute web path: $ORTFOLIO_LOCATION = "/ortfolio"; */
$ORTFOLIO_LOCATION = "";
$ROOT = $_SERVER["DOCUMENT_ROOT"].$ORTFOLIO_LOCATION;

/* Enter your name here: */
$artistName = "Ort Folio";

/* Section names appear in the sidebar navigation menu, and appear in the
 * same order as they are listed below. Section names must have the same 
 * name as the folders you create for them. Comma separated list of values 
 * within quotations. */
$sectionNames['section1']    = 'section one';
$sectionNames['section2']    = 'section two';

/* The super gallery is the grid composed of all project thumbnails, pulled from 
 * the following list of sections. Enter the sections you want the super gallery 
 * to pull thumbnails from. You can omit sections too. */
$superGallerySections = array("section1");

/* This will randomly shuffle the order of all the thumbnails on the homepage. */
$shuffleThumbnails = true;

/* This is an array of your social media/outbound links: $socialMedia['key'] = value;
 * key   = URL to your social media page 
 * value = link text that will appear in side bar */ 
$socialMedia['http://www.twitter.com']   = 'twitter';


/* If you have a Google Analytics tracking code, paste it into the 
 * googleAnalytics.php file located in the templates folder and set the
 * following variable to `true` */
$usingGoogleAnalytics = false;


