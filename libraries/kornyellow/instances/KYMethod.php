<?php

namespace libraries\kornyellow\instances;

use libraries\korn\server\query\KornQuery;

abstract class KYMethod {
	abstract public static function browse(string $query, int $limit = 15, int $offset = 0): array;
	abstract public static function get(int $id): ?KYInstance;
	abstract public static function getAll(): array;

	abstract public static function add(KYInstance $instance): int;
	abstract public static function update(KYInstance $instance): void;
	abstract public static function remove(KYInstance $instance): void;

	abstract protected static function processObject(KornQuery $query, bool $isArray = false): KYInstance|array|null;
}
