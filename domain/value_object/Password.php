<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final class Password
{
	private $password;

	public function __construct(string $value)
	{
		if ($value === "") {
			throw new \Exception("Password is Empty");
		}
		$this->password = $value;
	}

	public function getPassword(): string
	{
		return $this->password;
	}

}
