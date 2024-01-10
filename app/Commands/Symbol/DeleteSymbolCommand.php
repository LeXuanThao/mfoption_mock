<?php

namespace App\Commands\Symbol;

use App\Commands\BaseCommand;

class DeleteSymbolCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Symbol delete command');
    }
}