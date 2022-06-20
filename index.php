<?php

use libraries\methods\utils\Network;

// Make errors visible
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set timezone
date_default_timezone_set('Asia/Bangkok');

// Libraries for autoload classes
include('vendor/autoload.php');

// Find requested path
$currentDomainURL = Network::getCurrentDomainURL();

$requestPath  = Network::getRequestPath();
$absolutePath = Network::getAbsolutePath($requestPath);
if($requestPath != $absolutePath) {
	Network::redirectPage($currentDomainURL.'/'.$absolutePath);
}

// Preventing user from accessing direct index.php
if(str_ends_with($absolutePath, 'index.php')) {
	$absolutePath = substr($absolutePath, 0, -9);
	Network::redirectPage($currentDomainURL.'/'.$absolutePath);
}

// Find a requested file
$requestFile = Network::getDocumentRoot().'/contents/';

if($absolutePath == '')
	$requestFile .= 'home.php';
else if(!file_exists($requestFile.$absolutePath.'.php'))
	$requestFile .= $absolutePath.'/index.php';
else
	$requestFile .= $absolutePath.'.php';

// Construct an entire page
include('templates/header.php');

if(file_exists($requestFile))
	include($requestFile);
else
	include('templates/errors/404.php');
include('templates/footer.php');
