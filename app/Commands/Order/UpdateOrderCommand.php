<?php

namespace App\Commands\Order;

use App\Commands\BaseCommand;

class UpdateOrderCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Order update command');
    }
}