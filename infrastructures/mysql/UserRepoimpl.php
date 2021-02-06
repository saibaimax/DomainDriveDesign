<?php

namespace App\Infrastructures\MySQL;

use App\Domain\Entity\User;
use App\Domain\Repository\UserRepository;
use App\Constant;

final class UserRepoimpl implements UserRepository
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

	public function findByUserID(string $id): User
	{

	}

	public function storeUser(User $user): bool
	{

	}

	public function updateUser(User $user): bool
	{

	}

	public function deleteUser(User $user): bool
	{

	}

}


