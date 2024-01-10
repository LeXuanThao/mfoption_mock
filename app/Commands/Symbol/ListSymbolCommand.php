<?php

namespace App\Commands\Symbol;

use App\Commands\BaseCommand;

class ListSymbolCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Symbol list command');
    }
}