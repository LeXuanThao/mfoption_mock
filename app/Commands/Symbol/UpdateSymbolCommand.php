<?php

namespace App\Commands\Symbol;

use App\Commands\BaseCommand;

class UpdateSymbolCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Symbol update command');
    }
}