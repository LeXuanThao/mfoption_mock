<?php

namespace App\Commands\User;

use App\Commands\BaseCommand;
use App\UseCases\User\CreateUseCase as CreateUserUseCase;

class CreateUserCommand extends BaseCommand
{
    public function handle()
    {
        $useCase = app()->make(CreateUserUseCase::class);
        $this->output->info('User create command');
        $username = $this->output->ask('What is your name?');
        $password = $this->secret('What is the password?');
        $useCase([
            'username' => $username,
            'password' => $password,
        ]);
        $this->output->success('User created successfully');
    }
}