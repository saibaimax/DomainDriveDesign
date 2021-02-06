<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\PostID;
use App\Domain\ValueObject\UserID;
use App\Domain\ValueObject\Title;
use App\Domain\ValueObject\Body;

class Post
{

	private $post_id;
	private $user_id;
	private $title;
	private $body;

	public function __construct(
		PostID $post_id,
		UserID $user_id,
		Title $title,
		Body $body
	) {
		$this->post_id = $post_id;
		$this->user_id = $user_id;
		$this->title = $title;
		$this->body = $body;
	}

	public function getPostID(): PostID
	{
		return $this->post_id;
	}

	public function getUserID(): UserID
	{
		return $this->user_id;
	}

	public function getTitle(): Title
	{
		return $this->title;
	}

	public function getBody(): Body
	{
		return $this->body;
	}

	public function changeTitle(string $title, Post $post): Post
	{
		if ($title === "") {
			throw new \Exception("Title is Empty");
		}
		$post->title = $title;
		return $post;
	}

	public function changeBody(string $body, Post $post): Post
	{
		if ($body === "") {
			throw new \Exception("Body is Empty";
		}
		$post->body = $body;
		return $post
	}

}


