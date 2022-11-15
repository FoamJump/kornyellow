<?php

namespace templates;

use libraries\korn\client\KornHeader;

?>

<!DOCTYPE html>
<html lang="th" data-theme="wireframe">

<head>
	<!-- Metas -->
	<meta charset="UTF-8">

	<meta http-equiv="Content-Security-Policy" content="
		default-src 'self' 'unsafe-inline';
		script-src 'self' 'unsafe-inline';
		img-src 'self';
		frame-src youtube.com www.youtube.com;
	">

	<title><?php KornHeader::getTitle() ?></title>

	<meta name="title" content="<?php KornHeader::getTitle() ?>">
	<meta name="author" content="<?php KornHeader::getAuthor() ?>">
	<meta name="owner" content="<?php KornHeader::getOwner() ?>">
	<meta name="keywords" content="<?php KornHeader::getKeywords() ?>">
	<meta name="description" content="<?php KornHeader::getDescription() ?>">
	<meta name="abstract" content="<?php KornHeader::getAbstract() ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="/static/css/output.css">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/static/favicons/apple.png">
	<link rel="icon" sizes="any" href="/static/favicons/favicon.ico">
	<link rel="shortcut icon" href="/static/favicons/favicon.ico">
	<link rel="manifest" href="/static/favicons/site.webmanifest">

	<!-- Javasript -->
	<script src="/static/js/script.js" defer async></script>

	<!-- Canonical -->
	<link rel="canonical" href="https://kornyellow.com/<?php KornHeader::getCanonical() ?>">
</head>

<body>

<script>0</script>
<main class="flex justify-center">
