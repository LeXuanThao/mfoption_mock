<?php

namespace App\Commands\Order;

use App\Commands\BaseCommand;

class CreateOrderCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Order create command');
    }
}