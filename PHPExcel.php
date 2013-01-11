<?php

if (!defined('MEDIAWIKI')) {
	die('Not an entry point.');
}

if (!extension_loaded('zip')) {
	die('Missing zip extension.');
}

if (!extension_loaded('xml')) {
	die('Missing xml extension.');
}

if (!extension_loaded('iconv')) {
	die('Missing iconv extension.');
}

$wgExtensionCredits['other'][] = array(
       'path' => __FILE__,
       'name' => 'PHPExcel',
       'author' =>'Kim Eik', 
       'url' => 'https://www.mediawiki.org/wiki/Extension:PHPExcel', 
       'description' => 'This extension is a container for the PHPExcel library',
       'version'  => '1.7.8',
);

## PHPExcel library
$wgAutoloadClasses['PHPExcel'] = dirname(__FILE__) . '/includes/PHPExcel.php';
