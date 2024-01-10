<?php

namespace App\Commands\Order;

use App\Commands\BaseCommand;

class DeleteOrderCommand extends BaseCommand
{
    public function handle()
    {
        $this->output->info('Order delete command');
    }
}