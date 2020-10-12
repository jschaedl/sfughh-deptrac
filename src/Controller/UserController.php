<?php

declare(strict_types=1);

namespace App\Controller;

use App\Domain\UseCase\User as UserUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("users", methods={"GET"})
 */
final class UserController extends AbstractController
{
    private UserUseCase $userUseCase;

    public function __construct(UserUseCase $userUseCase)
    {
        $this->userUseCase = $userUseCase;
    }

    public function __invoke(): Response
    {
        return $this->json(
            $this->userUseCase->list()
        );
    }
}
