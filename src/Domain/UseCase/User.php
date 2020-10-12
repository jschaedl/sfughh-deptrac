<?php

declare(strict_types=1);

namespace App\Domain\UseCase;

use App\Domain\Entity\User as UserEntity;
use App\Domain\Repository\UserRepositoryInterface;

final class User
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return UserEntity[]
     */
    public function list(): array
    {
        return $this->userRepository->findAll();
    }
}
