<?php
use libraries\methods\utils\Network;

// Make errors visible
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set timezone
date_default_timezone_set('Asia/Bangkok');

// Autoload dependencies for PHP Classes
include('vendor/autoload.php');

// Find requested path
$requestPath = Network::getRequestPath();
$absolutePath = Network::getAbsolutePath($requestPath);
if ($requestPath != $absolutePath) {
	Network::redirectPage(Network::getCurrentDomainURL().'/'.$absolutePath);
	exit;
}


// Cannot access direct index.php
if (str_ends_with($absolutePath, 'index.php')) {
	$absolutePath = substr($absolutePath, 0, -9);
	Network::redirectPage(Network::getCurrentDomainURL().'/'.$absolutePath);
	exit;
}

// Construct page
$requestFile = Network::getDocumentRoot().'/contents/';
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
