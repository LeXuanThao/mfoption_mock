<?php

namespace App\Commands;

use App\Commands\Order\CreateOrderCommand;
use App\Commands\Order\DeleteOrderCommand;
use App\Commands\Order\ListOrderCommand;
use App\Commands\Order\UpdateOrderCommand;

class OrderManageCommand extends BaseCommand
{
    public function handle()
    {
        do {
            $this->displayHelp();
            $command = $this->output->ask('Order Manage - Enter command');
            $this->executeCommand($command);
        } while ($command != '5');
    }

    protected function displayHelp()
    {
        $help = [
            '1' => 'Create order',
            '2' => 'Update order',
            '3' => 'Delete order',
            '4' => 'List order',
            '5' => 'Back',
        ];
        $this->output->writeln('Order Manage commands:');
        foreach ($help as $command => $description) {
            $this->output->writeln("  $command: $description");
        }
    }

    protected function executeCommand($command)
    {
        return match ($command) {
            '1' => CreateOrderCommand::run($this->output),
            '2' => UpdateOrderCommand::run($this->output),
            '3' => DeleteOrderCommand::run($this->output),
            '4' => ListOrderCommand::run($this->output),
            '5' => $this->output->info('Back'),
            default => $this->output->error('Invalid command'),
        };
    }
}