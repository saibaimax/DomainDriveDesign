<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\User;

interface UserRepository
{

	public function fetchAll(): array;

	public function findByUserID(stirng $id): User;

	public function storeUser(User $user): bool;

	public function updateUser(User $user): bool;

	public function deleteUser(User $user): bool;

}
