<?php

declare(strict_types=1);

namespace App\Infrastructure;

use App\Domain\Entity\User;
use App\Domain\Repository\UserRepositoryInterface;

final class InMemoryUserRepository implements UserRepositoryInterface
{
    public function findAll(): array
    {
        return [
            new User('jschaedl', 'jan.schaedich@sensiolabs.de'),
            new User('smoensch', 'simon.moench@sensiolabs.de'),
        ];
    }
}
