<?php

namespace templates;

use libraries\korn\client\KornHeader;

echo '
<!DOCTYPE html>
<html lang="th" class="h-100">

<head>
	<!-- Metas -->
	<meta charset="UTF-8">
	
	<meta http-equiv="Content-Security-Policy" content="
		default-src \'self\' \'unsafe-inline\' fonts.googleapis.com fonts.gstatic.com cdn.jsdelivr.net;
		script-src \'self\' \'unsafe-inline\' cdn.jsdelivr.net;
		img-src \'self\';
		frame-src youtube.com www.youtube.com;
	">

	<title>'.KornHeader::getTitle().'</title>

	<meta name="title" content="'.KornHeader::getTitle().'">
	<meta name="author" content="'.KornHeader::getAuthor().'">
	<meta name="owner" content="'.KornHeader::getOwner().'">
	<meta name="keywords" content="'.KornHeader::getKeywords().'">
	<meta name="description" content="'.KornHeader::getDescription().'">
	<meta name="abstract" content="'.KornHeader::getAbstract().'">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" defer async integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="/static/css/stylesheet.css">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/static/favicons/apple.png">
	<link rel="icon" sizes="any" href="/static/favicons/favicon.ico">
	<link rel="shortcut icon" href="/static/favicons/favicon.ico">
	<link rel="manifest" href="/static/favicons/site.webmanifest">
	
	<!-- Javasript -->
	<script src="/static/js/script.js" defer async></script>
	
	<!-- Canonical -->
	<link rel="canonical"	href="https://kornyellow.com/'.KornHeader::getCanonical().'">
</head>

<body class="h-100">

<script>0</script>
<main class="container mt-5">
';
