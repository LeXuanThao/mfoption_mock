<?php

namespace App\Commands;

class UserManageCommand extends BaseCommand
{
    protected $commands = [
        'l' => ListUserCommand::class,
    ];

    protected $commandDescriptions = [
        'l' => 'List users',
        'a' => 'Add a user',
        'd' => 'Delete a user',
        'v' => 'View a user',
    ];

    public function handle()
    {
        while (true) {
            $command = $this->output->ask('Enter user manage command (h for help, q to quit)');
            if ($command === 'q') {
                $this->output->info('End of user manage command');
                break;
            }
            if ($command === 'h') {
                $this->displayHelp();
                continue;
            }
            $currentCommand = $this->commands[$command];
            if (! $currentCommand) {
                $this->output->error('Invalid command');
                continue;
            }
            $currentCommand::run($this->output);
        }
        // $this->output->writeln('- User Manage Command')
    }

    protected function displayHelp()
    {
        $this->output->writeln('Available commands:');
        foreach($this->commandDescriptions as $command => $description) {
            $this->output->writeln("  $command: $description");
        }
    }
}