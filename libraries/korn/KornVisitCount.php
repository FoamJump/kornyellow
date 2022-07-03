<?php

namespace libraries\korn;

class KornVisitCount {
	private static int $visitCount = -1;
	
	public static function getVisitCount(): int {
		if (self::$visitCount == -1)
			self::updateVisitCount();
		
		return self::$visitCount;
	}
	
	private static function updateVisitCount(): void {
		$filePath = KornNetwork::getDocumentRoot().'/.CREDENTIAL/visitcount';
		$fileRead = fopen($filePath, 'r');
		self::$visitCount = intval(fgets($fileRead));
		fclose($fileRead);
		
		if (array_key_exists('visitcount', $_SESSION))
			return;
		
		$fileWrite = fopen($filePath, 'w');
		fwrite($fileWrite, ++self::$visitCount);
		fclose($fileWrite);
		
		$_SESSION['visitcount'] = self::$visitCount;
	}
}
