<?php

declare(strict_types=1);

namespace App\Command;

use App\Domain\Entity\User;
use App\Domain\UseCase\User as UserUseCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class UserListCommand extends Command
{
    protected static $defaultName = 'app:user:list';

    private UserUseCase $userUseCase;

    public function __construct(UserUseCase $userUseCase)
    {
        $this->userUseCase = $userUseCase;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $table = new Table($output);
        $table
            ->setHeaders(['ID', 'Name', 'E-mail'])
            ->setRows(array_map(static function (User $user) {
                return [$user->getIdentifier(), $user->getUsername(), $user->getEmail()];
            }, $this->userUseCase->list()))
        ;

        $table->render();

        return Command::SUCCESS;
    }
}
