<?php

namespace templates;

use libraries\kornyellow\KornYellowHeader;

echo '
<!DOCTYPE html>
<html lang="th">

<head>
	<!-- Metas -->
	<meta charset="utf-8">

	<meta name="title" content="kornyellow">
	<meta name="author" content="กร โรจน์รัตนปัญญา (กร)">
	<meta name="owner" content="kornkubzaza@gmail.com (กร)">

	<title>'.KornYellowHeader::getTitle().'</title>

	<meta name="keywords" content="สร้างเกม, ทำเกม, gamemaker, เขียนเกม, ตัดต่อเพลง,เขียนเว็บไซต์, พัฒนาเว็บไซต์, เขียนโปรแกรม, เขียนโค้่ด, html, css, javascript, php, mysql, nodejs, mongodb, korn rojrattanapanya, kornyellow, korn, กร โรจน์รัตนปัญญา">
	<meta name="description" content="'.KornYellowHeader::getDescription().'">
	<meta name="abstract" content="'.KornYellowHeader::getAbstract().'">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="/static/css/root.css">
	<link rel="stylesheet" href="/static/css/header.css">
	<link rel="stylesheet" href="/static/css/footer.css">
	<link rel="stylesheet" href="/static/css/portfolio.css">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/static/favicons/apple.png">
	<link rel="icon" sizes="any" href="/static/favicons/favicon.ico">
	<link rel="shortcut icon" href="/static/favicons/favicon.ico">
	<link rel="manifest" href="/static/favicons/site.webmanifest">
</head>

<body>

<!-- Navigation -->
<div class="header">
	<header class="logo">
		<a href="/home" class="kornyellow" title="kornyellow.com">
			<span class="korn">KORN</span>
			<span class="yellow">YELLOW</span>
		</a>
		<button type="button" id="navOpenButton" title="เปิดเมนู">[...]</button>
	</header>
	<nav id="nav">
		<div id="navCloseOverlay"></div>
		<ul>
			<li><a class="js-nav-button" title="หน้าหลัก" href="/home">หน้าหลัก</a></li>
			<li><a class="js-nav-button" title="แนะนำตัว" href="/introduce">แนะนำตัว</a></li>
			<li><a class="js-nav-button" title="ืบทความ" href="/blog">บทความ</a></li>
			<li><a class="js-nav-button" title="ผลงาน" href="/portfolio">ผลงาน</a></li>
			<li><a class="js-nav-button" title="คอร์สเรียน" href="/courses">คอร์สเรียน</a></li>
			<li><a class="js-nav-button" title="ติดต่อผม" href="/contact">ติดต่อผม</a></li>
			<li><a class="js-nav-button" title="เข้าสู่ระบบ" href="/login">เข้าสู่ระบบ</a></li>
		</ul>
	</nav>
</div>

<main>
';
