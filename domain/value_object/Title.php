<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final class Title
{
	private $title;

	public function __construct(string $value)
	{
		if ($value === "") {
			throw new \Exception("title is empty");
		}
		$this->title = $value;
	}

	public function getTitle(): string
	{
		return $this->title;
	}
}


