<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Post;

interface PostRepository
{
	public function fetchAll(): array;

	public function findByPostID(string $id): Post;

	public function storePost(Post $post): bool;

	public function updatePost(Post $post): bool;

	public function deletePost(Post $post): bool;

}
