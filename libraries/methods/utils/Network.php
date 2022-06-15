<?php
namespace libraries\methods\utils;

class Network {
	public static function getRequestPath(): string {
		$requestURI = $_SERVER['REQUEST_URI'];
		if ($requestURI == "/")
			return "";

		return substr($requestURI, 1);
	}
	public static function getRemoteIP(): string {
		$clientIP = $_SERVER['HTTP_CLIENT_IP'];
		if (filter_var($clientIP ?? "", FILTER_VALIDATE_IP))
			return $clientIP;

		return $_SERVER['REMOTE_ADDR'];
	}
	public static function getCurrentDomain(): string {
		return $_SERVER['HTTP_HOST'];
	}
	public static function getCurrentDomainURL(): string {
		if (self::isHTTPS())
			return "https://".self::getHost();

		return "http://".self::getHost();
	}
	public static function getDocumentRoot(): string {
		return $_SERVER['DOCUMENT_ROOT'];
	}
	public static function getHost(): string {
		return $_SERVER['HTTP_HOST'];
	}
	public static function getAbsolutePath(string $path): string {
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

	public static function isLocalHost(): bool {
		if (self::getRemoteIP() == '127.0.0.1')
			return true;

		return false;
	}
	public static function isHTTPS(): bool {
		if ($_SERVER['HTTPS'] ?? false)
			return true;

		return false;
	}

	public static function redirectPage($url, $delay = 0) {
		echo '<meta http-equiv="refresh" content="'.$delay.' url='.$url.'" />';
	}
}
