<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use Ramsey\Uuid\Uuid;

final class User
{
    private string $identifier;
    private string $username;
    private string $email;

    public function __construct(string $username, string $email)
    {
        $this->identifier = Uuid::uuid4()->toString();
        $this->username = $username;
        $this->email = $email;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
