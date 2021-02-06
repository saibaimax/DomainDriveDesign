<?php

declare(strict_types=1);

namespace App\Infrastructure\MySQL;

final class PDO
{

	private static $instance;

	private function __construct() {}

	public final function __clone() {
		throw new \Exception("Clone is Not Allowed");
	}

	public static function getInstance(string $host, string $db_name, string $user_name, string $password): PDO
	{
		if (!isset(self::$instance)) {
			self::$instance = self::connectDB($host, $db_name, $user_name, $password);
		}
		return self::$instance;
	}

	private function connectDB(string $host, string $db_name, string $user_name, string $password)
	{
		try{
			$instance = new PDO(
				"mysql:host=" . $host . ";",
				"dbname=" . $db_name,
				$user_name,
				$password
			);
		} catch (\Exception $e) {
			$e->getMessage();
		}
		return $instance;
}
