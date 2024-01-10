<?php

namespace App\Console\Commands;

use App\Commands\HelpCommand;
use App\Commands\OrderManageCommand;
use App\Commands\PricingManageCommand;
use App\Commands\SymbolManageCommand;
use App\Commands\UserManageCommand;
use Illuminate\Console\Command;

class ManageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:manage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage the application';

    protected $commands = [
        UserManageCommand::class,
        SymbolManageCommand::class,
        OrderManageCommand::class,
        PricingManageCommand::class,
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        do {
            $this->displayHelp();
            $command = $this->ask('Enter command');
            $this->executeCommand($command);
        } while ($command != 'exit');
    }

    protected function displayHelp()
    {
        $help = [
            'u' => 'Manage users',
            's' => 'Manage symbols',
            'o' => 'Manage orders',
            'p' => 'Manage pricing',
            'e' => 'Exit the application',
        ];
        $this->line('Available commands:');
        foreach ($help as $command => $description) {
            $this->line("  $command: $description");
        }
    }

    protected function executeCommand($command)
    {
        return match($command) {
            'u' => UserManageCommand::run($this->output),
            's' => SymbolManageCommand::run($this->output),
            'o' => OrderManageCommand::run($this->output),
            'p' => PricingManageCommand::run($this->output),
            'e' => $this->exitApplication(),
            default => $this->error('Invalid command'),
        };
    }

    protected function exitApplication()
    {
        $this->info('Exiting Application');
        exit(0);
    }
}
