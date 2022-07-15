<?php

namespace libraries\kornyellow\instances\methods;

use JetBrains\PhpStorm\NoReturn;
use libraries\korn\client\KornCookie;
use libraries\korn\utils\KornNetwork;
use libraries\korn\client\KornSession;
use libraries\kornyellow\instances\classes\User;

class KYAuth {
	private static User|null $loggedIn = null;

	private static string $loginSessionKey = 'userLogin';

	public static function getRememberUsername(): string {
		return KornCookie::isValid(self::$loginSessionKey)
			? KornCookie::read(self::$loginSessionKey)
			: '';
	}
	public static function getLoggedInUser(): User|null {
		if (self::$loggedIn)
			return self::$loggedIn;

		if (!KornSession::isValid(self::$loginSessionKey))
			return null;

		$userID = intval(KornSession::read(self::$loginSessionKey));
		$user   = KYUser::get($userID);
		if (!$user)
			return null;

		self::$loggedIn = $user;

		return $user;
	}
	public static function login(string $username, string $password, bool $isRemember): bool {
		$user = KYUser::getByUsername($username);
		if (!$user)
			return false;

		$userPasswordHash = $user->getPassword();
		if (!password_verify($password, $userPasswordHash))
			return false;

		KornSession::set(self::$loginSessionKey, $user->getID());
		if ($isRemember)
			KornCookie::set(self::$loginSessionKey, $user->getUsername());
		else
			KornCookie::unset(self::$loginSessionKey);

		return true;
	}
	#[NoReturn] public static function logout(): void {
		KornSession::unset(self::$loginSessionKey);
		KornNetwork::redirectPage('/login');
	}
}
