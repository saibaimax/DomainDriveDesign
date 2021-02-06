<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

final class PostID
{
	private $post_id;

	public function __construct(string $value)
	{
		if ($value === "") {
			throw new \Exception("Post ID is Empty");
		}
		$this->post_id = $value;
	}

	public function getPostID(): string
	{
		return $this->post_id;
	}
}
