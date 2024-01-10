<?php

namespace App\Commands;

use App\Models\User;

class ListUserCommand extends BaseCommand
{
    protected $page = 1;
    protected $perPage = 10;
    public function handle()
    {
        while (true) {
            $this->output->writeln('Listing users...');
            $this->showTable($this->page, $this->perPage);
            $command = $this->output->ask('Enter command for listing user (h for help, q to quit, n for next page, p for previous page)');
            switch ($command) {
                case 'q':
                    $this->output->info('End of listing user');
                    break 2;
                case 'h':
                    $this->displayHelp();
                    break;
                case 'n':
                    $this->page++;
                    break;
                case 'p':
                    $this->page--;
                    break;
                default:
                    $this->output->error('Invalid command');
            }
        }
    }

    protected function showTable(int $page = 1, int $perPage = 10)
    {
        $users = User::paginate($perPage, ['*'], 'page', $page);
        if ($users->isEmpty()) {
            $this->output->writeln('No user found');
            $this->page = 1;
            return;
        }
        $this->output->table(
            ['#', 'Username', 'Token'],
            $users->map(function ($user) {
                return [$user->id, $user->name, $user->email];
            })->toArray()
        );
        $this->output->writeln('Page ' . $users->currentPage() . ' of ' . $users->lastPage());
        $this->output->writeln('Total ' . $users->total() . ' users');
    }

    protected function displayHelp()
    {
        $this->output->writeln('Available commands:');
        $this->output->writeln('  h: Display this help message');
        $this->output->writeln('  n: Next page');
        $this->output->writeln('  p: Previous page');
        $this->output->writeln('  q: Quit the application');
    }
}