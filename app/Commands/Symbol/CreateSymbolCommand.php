<?php

namespace App\Commands\Symbol;

use App\Commands\BaseCommand;

class CreateSymbolCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Symbol create command');
    }
}