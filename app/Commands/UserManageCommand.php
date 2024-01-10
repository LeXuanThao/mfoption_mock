<?php

namespace App\Commands;

use App\Commands\User\CreateUserCommand;
use App\Commands\User\DeleteUserCommand;
use App\Commands\User\UpdateUserCommand;
use App\Commands\User\ListUserCommand;

class UserManageCommand extends BaseCommand
{
    public function handle()
    {
        do {
            $this->displayHelp();
            $command = $this->output->ask('User Manage - Enter command');
            $this->executeCommand($command);
        } while ($command != '5');
    }

    protected function displayHelp()
    {
        $help = [
            '1' => 'Create user',
            '2' => 'Update user',
            '3' => 'Delete user',
            '4' => 'List users',
            '5' => 'Back',
        ];
        $this->output->writeln('User Manage commands:');
        foreach ($help as $command => $description) {
            $this->output->writeln("  $command: $description");
        }
    }

    protected function executeCommand($command)
    {
        return match ($command) {
            '1' => CreateUserCommand::run($this->output),
            '2' => UpdateUserCommand::run($this->output),
            '3' => DeleteUserCommand::run($this->output),
            '4' => ListUserCommand::run($this->output),
            '5' => $this->output->info('Back'),
            default => $this->output->error('Invalid command'),
        };
    }
}