<?php
/* You shouldn't need to edit this file. But if you do.... */

/* This fetches global site configurations from the root directory */
include($_SERVER['DOCUMENT_ROOT']."/config.php");

/* This fetches the current section name */
include("../section-config.php");

/* This reads folder name. This is for proper URL linking. */
$projectName = basename(__DIR__);
$currPath = $_SERVER['DOCUMENT_ROOT'] ."/".$sectionName. "/".$projectName;
// This reads all the images in the images directory
$images = glob($currPath."/images/*.{jpg,jpeg,gif,png}", GLOB_BRACE);

include("project-config.php");
include($_SERVER["DOCUMENT_ROOT"] . "/templates/simple-project-template.php");