<?php

namespace App\Commands\User;

use App\Commands\BaseCommand;
use App\UseCases\User\ListUseCase as ListUserUseCase;

class ListUserCommand extends BaseCommand
{
    protected $page = 1;
    protected $perPage = 10;

    public function handle()
    {
        do {
            $this->displayTable();
            $command = $this->output->ask('User List - Enter command');
            $this->executeCommand($command);
        } while ($command != '5');
    }

    public function displayTable()
    {
        $useCase = app()->make(ListUserUseCase::class);
        $this->output->writeln('User List:');
        $this->output->writeln('n to next page, p to previous page, 5 to back');
        $users = $useCase($this->page, $this->perPage);
        if ($users->isEmpty()) {
            $this->output->writeln('No users found');
            $this->resetPage();
            return;
        }
        $this->output->table(
            ['ID', 'Username', 'Created At', 'Updated At'],
            $users->map(function ($user) {
                return [
                    $user->id,
                    $user->username,
                    $user->created_at,
                    $user->updated_at,
                ];
            })->toArray()
        );
        $this->output->writeln('Page: ' . $users->currentPage());
        $this->output->writeln('Total: ' . $users->total());
        $this->output->writeln('n to next page, p to previous page, 5 to back');
    }

    protected function executeCommand($command)
    {
        // dump($command)
        return match ($command) {
            'n' => $this->nextPage(),
            'p' => $this->previousPage(),
            '5' => $this->output->info('Back'),
            default => $this->output->error('Invalid command'),
        };
    }

    protected function nextPage()
    {
        $this->page++;
    }

    protected function previousPage()
    {
        $this->page--;
    }

    protected function resetPage()
    {
        $this->page = 1;
    }
}