<?php

namespace App\Commands\User;

use App\Commands\BaseCommand;

class DeleteUserCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('User delete command');
    }
}