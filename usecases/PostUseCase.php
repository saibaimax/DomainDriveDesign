<?php

declare(strict_types=1);

namespace App\UseCases;

use App\Domain\ValueObject\PostID;
use App\Domain\ValueObject\UserID;
use App\Domain\ValueObject\Titl;
use App\Domain\ValueObject\Body;
use App\Domain\Entity\Post;
use App\Domain\Repository\PostRepository;

final class PostUseCase
{

	private $post_repository;

	public function __construct(
		PostRepository $post_repository
	){
		$this->post_repository = $post_repository;
	}

	public function fetchAllUsers()
	{

	}

	public function findPost()
	{

	}

	public function storePost()
	{

	}

	public function updatePost()
	{

	}

	public function deletePost()
	{

	}

}

