<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\UserID;
use App\Domain\ValueObject\Name;
use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\Password;


final class User
{
	private $user_id;
	private $name;
	private $email;
	private $password;

	public function __construct(
		UserID $user_id,
		Name $name,
		Email $email,
		Password $password
	){
		$this->user_id = $user_id;
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
	}


	public function getUserID(): UserID
	{
		return $this->user_Id;
	}

	public function getName(): Name
	{
		return $this->name;
	}

	public function getEmail(): Email
	{
		return $this->email;
	}

	public function getPassword(): Password
	{
		return $this->password;
	}

	public function changeName(stirng $name): User
	{
		if (count($name) < 0) {
			throw new \Exception("Name is Empty");
		}
		return $this->name = $name;
	}

	public function changeEmail(string $email): User
	{
		if (count($email) < 0) {
			throw new \Exception("Email is Empty");
		}
		return $this->email = $email;
	}

}


