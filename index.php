<?php

use libraries\korn\utils\KornNetwork;
use libraries\kornyellow\utils\KYHeader;

// Make errors visible
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_PARSE | E_ERROR);

// Set timezone
date_default_timezone_set('Asia/Bangkok');

// Libraries for autoload classes
include('vendor/autoload.php');

// Start Sessions
session_start();

// Find requested path
$requestPath  = KornNetwork::getRequestPath();
$absolutePath = KornNetwork::getAbsolutePath($requestPath);
if ($requestPath != $absolutePath) {
	KornNetwork::redirectPage('/'.$absolutePath);
}

// Preventing user from accessing direct index.php
if (str_ends_with($absolutePath, 'index.php')) {
	$absolutePath = substr($absolutePath, 0, -9);
	KornNetwork::redirectPage('/'.$absolutePath);
}

// Apply Canonical URL
KYHeader::setCanonical($absolutePath);

// Find a requested file
$requestFile = KornNetwork::getDocumentRoot().'/contents/';

if ($absolutePath == "a.js" || $absolutePath == "b.js") {
	include($requestFile.$absolutePath);
}
else {
	if (empty($absolutePath))
		$requestFile .= 'home.php';
	else if (!file_exists($requestFile.$absolutePath.'.php'))
		$requestFile .= $absolutePath.'/index.php';
	else
		$requestFile .= $absolutePath.'.php';

	// Construct an entire page
	if (file_exists($requestFile))
		include($requestFile);
	else
		include('templates/errors/404.php');
	include('templates/footer.php');
}
