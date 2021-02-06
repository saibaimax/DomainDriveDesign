<?php

declare(strict_types=1);

namespace App\UseCases;

use App\Domain\ValueObject\UserID;
use App\Domain\ValueObject\Name;
use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\Password;
use App\Domain\Entity\User;
use App\Domain\Repository\UserRepository;

final class UserUseCase
{

	private $user_repository;

	public function __construct(
		UserRepository $user_repotirory
	){
		$this->user_repository = $user_repository;
	}

	public function login()
	{

	}

	public function logout()
	{

	}

	public function fetchAllUsers()
	{

	}

	public function detailUser()
	{

	}

	public function registerUser()
	{

	}

	public function updateUser()
	{

	}

	public function deleteUser()
	{

	}


}


