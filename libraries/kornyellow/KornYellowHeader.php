<?php

namespace libraries\kornyellow;

class KornYellowHeader {
	private static string $title       = "KORNYELLOW";
private static string $description = "ผม กร โรจน์รัตนปัญญา ยินดีต้อนรับเข้าสู่เว็บไซต์ของผม สนใจร่วมงานกับผมทำเว็บ ทำเกม เขียนโปรแกรมหลายภาษา และอีกมายมาย ติดต่อเข้ามาเลย";
	private static string $abstract    = "หน้าแรกของเว็บไซต์ เกริ่นถึงตัวเอง งานที่รับทำ และอื่น ๆ";
	
	public static function getTitle(): string {
		return self::$title;
	}
	public static function getDescription(): string {
		return self::$description;
	}
	public static function getAbstract(): string {
		return self::$abstract;
	}
	
	public static function constructHeader($title = null, $description = null, $abstract = null): void {
		if ($title != null) self::$title = $title;
		if ($description != null) self::$description = $description;
		if ($abstract != null) self::$abstract = $abstract;
		
		include('templates/header.php');
	}
}
