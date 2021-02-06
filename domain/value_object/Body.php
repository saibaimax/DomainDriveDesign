<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final class Body
{
	private $body;

	public function __construct(string $value)
	{
		if ($value === "") {
			throw new \Exception("Body is Empty");
		}
		$this->body = $value;
	}

	public function getBody(): string
	{
		return $this->body;
	}
}
