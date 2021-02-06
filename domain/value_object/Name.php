<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final class Name
{
	private $name;

	public function __construct(string $value)
	{
		if ($value === "") {
			throw new \Exception("Name is Empty");
		}
		$this->name = $value;
	}

	public function getName(): string
	{
		return $this->name;
	}
}
