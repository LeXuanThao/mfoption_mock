<?php

namespace App\Commands;

class HelpCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Available commands:');
    }
}