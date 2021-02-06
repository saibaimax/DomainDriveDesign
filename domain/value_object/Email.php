<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final class Email
{
	private $email;

	public function __construct(string $value)
	{
		if ($value === "") {
			throw new \Exception("Email is Empty");
		}
		$this->email = $value;
	}

	public function getEmail(): string
	{
		return $this->email;
	}
}
