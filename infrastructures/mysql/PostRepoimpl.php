<?php

namespace App\Infrastructures\MySQL;

use App\Domain\Entity\Post;
use App\Domain\Repository\PostRepository;
use App\Constant;

final class PostRepoimpl implements PostRepository
{

	private $dbh;

	public function __construct(
		PDO $pdo
	){
		$this->dbh = $pdo::getInstance(
			Constant\HOST,
			Constant\DB_NAME,
			Constant\USER_NAME,
			Constant\PASSWORD,
		);
	}

	public function fetchAll(): array
	{

	}

	public function findByPostID(string $id): Post
	{

	}

	public function storePost(Post $post): bool
	{

	}

	public function updatePost(Post $post): bool
	{

	}

	public function deletePost(Post $post): bool
	{

	}

}


