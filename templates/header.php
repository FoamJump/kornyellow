<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preload" href="/static/fonts/SOV_monomon.ttf" as="font" type="font/ttf" crossorigin>
	<link rel="stylesheet" href="/static/css/root.css">
	<link rel="stylesheet" href="/static/css/header.css">
</head>

<body>

<div class="header">
	<header class="logo">
		<a href="/home" class="kornyellow">
			<span class="korn">KORN</span>
			<span class="yellow">YELLOW</span>
		</a>
		<button type="button" id="navOpenButton">[=]</button>
	</header>
	<nav id="nav">
		<div id="navCloseOverlay"></div>
		<button type="button" id="navCloseButton">[x]</button>
		<ul>
			<li><a class="js-nav-button" href="/home">หน้าหลัก</a></li>
			<li><a class="js-nav-button" href="/introduce">แนะนำตัว</a></li>
			<li><a class="js-nav-button" href="/blog">บทความ</a></li>
			<li><a class="js-nav-button" href="/portfolio">ผลงาน</a></li>
			<li><a class="js-nav-button" href="/contact">ติดต่อผม</a></li>
		</ul>
	</nav>
</div>

<main class="content">
