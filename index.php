<?php

// Make errors visible
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set timezone
date_default_timezone_set('Asia/Bangkok');

// Essential functions
function getAbsolutePath(string $path): string {
	$path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
	$parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
	$absolutes = array();
	foreach ($parts as $part) {
		if ($part == '.')
			continue;

		if ($part == '..')
			array_pop($absolutes);
		else
			$absolutes[] = $part;
	}
	return implode(DIRECTORY_SEPARATOR, $absolutes);
}
function redirectPage($url, $delay = 0) {
	echo '<meta http-equiv="refresh" content="'.$delay.' url='.$url.'" />';
}

// Find requested path
$currentDomainURL = 'http://'.$_SERVER['HTTP_HOST'];
if ($_SERVER['HTTPS'] ?? false)
	$currentDomainURL = 'https://'.$_SERVER['HTTP_HOST'];
$requestURI = $_SERVER['REQUEST_URI'];

$requestPath = ($requestURI  == '/') ? '' : substr($requestURI, 1);
$absolutePath = getAbsolutePath($requestPath);
if ($requestPath != $absolutePath) {
	redirectPage($currentDomainURL.'/'.$absolutePath);
	exit;
}

// Cannot access direct index.php
if (str_ends_with($absolutePath, 'index.php')) {
	$absolutePath = substr($absolutePath, 0, -9);
	redirectPage($currentDomainURL.'/'.$absolutePath);
	exit;
}

// Construct page
$requestFile = $_SERVER['DOCUMENT_ROOT'].'/contents/';

if ($absolutePath == '')
	$requestFile .= 'home.php';
else if(!file_exists($requestFile.$absolutePath.'.php'))
	$requestFile .= $absolutePath.'/index.php';
else
	$requestFile .= $absolutePath.'.php';

include('templates/header.php');

if (file_exists($requestFile))
	include($requestFile);
else
	include('templates/errors/404.php');
include('templates/footer.php');
