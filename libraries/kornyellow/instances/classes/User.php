<?php

namespace libraries\kornyellow\instances\classes;

use libraries\kornyellow\instances\KYInstance;

class User extends KYInstance {
	private int    $id;
	private string $username;
	private string $password;

	public function __construct(
		int    $id,
		string $username,
		string $password
	) {
		$this->id       = $id;
		$this->username = $username;
		$this->password = $password;
	}

	public function getID(): int {
		return $this->id;
	}
	public function setID(int $id): User {
		$this->id = $id;

		return $this;
	}
	public function getUsername(): string {
		return $this->username;
	}
	public function setUsername(string $username): User {
		$this->username = $username;

		return $this;
	}
	public function getPassword(): string {
		return $this->password;
	}
	public function setPassword(string $password): User {
		$this->password = $password;

		return $this;
	}

}
