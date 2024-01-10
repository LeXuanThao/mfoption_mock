<?php

namespace App\Commands\User;

use App\Commands\BaseCommand;
use App\UseCases\User\UpdateUserUseCase;

class UpdateUserCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('User update command');
        $userId = $this->output->ask('What is the user id?');
        $password = $this->secret("What is the new password for user $userId?");
        $useCase = app()->make(UpdateUserUseCase::class);
        $this->output->success("User $userId updated successfully");
    }
}