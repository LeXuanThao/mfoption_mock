<?php

namespace App\Commands\Order;

use App\Commands\BaseCommand;

class ListOrderCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Order list command');
    }
}