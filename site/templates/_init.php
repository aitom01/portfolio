<?php

/***************************************************************************************
 * This is the global init file included before all template files.
 *
 * Use of this is optional and set via $config->prependTemplateFile in /site/config.php.
 * We are using this init file to define shared functions and variables. 
 * See _out.php for the main markup file where everything is output.
 *
 */

/***************************************************************************************
 * SHARED VARIABLES
 *
 * These are the variables we've decided template files may choose to populate.
 * These variables are ultimately output by _out.php. Here we are establishing 
 * default values for them. 
 *
 */
$homepage = $pages->get("/");
$browserTitle = $homepage->title; 	// what appears in the <title> tag

if($page->summary) $browserDescription = strip_tags($page->summary);
else $browserDescription = strip_tags($homepage->summary);

$browserKeywords = $homepage->keywords;
if($page->keywords && $page!=$homepage) $browserKeywords = $browserKeywords.", ".$page->keywords; 

if($page!=$homepage) $browserTitle = $page->title." / ".$homepage->title;
if($page->headline) $browserTitle = $homepage->title.strip_tags($page->headline);
$headline = $page->title; 		// primary h1 headline
$content = $page->body; 		// bodycopy area

// if the current page number is > 1, append that in the browserTitle
if($input->pageNum > 1) $browserTitle .= " - Page {$input->pageNum}";


/***************************************************************************************
 * SHARED FUNCTIONS
 *
 * We include a set of shared functions here so that they can be used by any of our
 * template files as needed. 
 *
 */

include("./includes/functions.php"); 
