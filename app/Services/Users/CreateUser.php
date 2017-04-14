<?php

namespace App\Services\Users;

use App\Events\UserWasCreated;
use App\Models\User;
use App\Repositories\UsersRepository;

class CreateUser
{
    /**
     * @var UsersRepository
     */
    private $repository;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var User
     */
    private $user;

    /**
     * CreateUser constructor.
     * @param UsersRepository $repository
     */
    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Create user process
     *
     * @return bool
     */
    public function fire()
    {
        $this->user = $this->repository->create($this->name, $this->email);

        if ($this->user instanceof User) {
            event(new UserWasCreated($this->user));

            return true;
        }

        return false;
    }
}