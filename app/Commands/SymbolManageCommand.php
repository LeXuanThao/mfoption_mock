<?php

namespace App\Commands;

use App\Commands\Symbol\CreateSymbolCommand;
use App\Commands\Symbol\DeleteSymbolCommand;
use App\Commands\Symbol\ListSymbolCommand;
use App\Commands\Symbol\UpdateSymbolCommand;

class SymbolManageCommand extends BaseCommand
{
    public function handle()
    {
        do {
            $this->displayHelp();
            $command = $this->output->ask('Symbol Manage - Enter command');
            $this->executeCommand($command);
        } while ($command != '5');
    }

    protected function displayHelp()
    {
        $help = [
            '1' => 'Create symbol',
            '2' => 'Update symbol',
            '3' => 'Delete symbol',
            '4' => 'List symbol',
            '5' => 'Back',
        ];
        $this->output->writeln('Symbol Manage commands:');
        foreach ($help as $command => $description) {
            $this->output->writeln("  $command: $description");
        }
    }

    protected function executeCommand($command)
    {
        return match ($command) {
            '1' => CreateSymbolCommand::run($this->output),
            '2' => UpdateSymbolCommand::run($this->output),
            '3' => DeleteSymbolCommand::run($this->output),
            '4' => ListSymbolCommand::run($this->output),
            '5' => $this->output->info('Back'),
            default => $this->output->error('Invalid command'),
        };
    }
}