<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final class UserID
{
	private $user_id;

	public function __construct(string $value)
	{
		if ($value === "") {
			throw new \Exception("UserID is Empty");
		}
		$this->user_id = $value;
	}

	public function getUserID(): string
	{
		return $this->user_id;
	}
}
