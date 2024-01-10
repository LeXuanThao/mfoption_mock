<?php

namespace App\Console\Commands;

use App\Events\PricingChangeEvent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class PriceGenerator extends Command
{
    const SLEEP_TIME = 1;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:price-generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mock generate pricing for symbols';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('Start generate price');
        do {
            // TODO: Get all symbols with exchanges;
            $this->info('Pricing season =====');
            $symbols = \App\Models\Symbol::all();
            if ($symbols->isEmpty()) {
                $this->info('No symbol found');
                sleep(self::SLEEP_TIME);
                continue;
            }
            $pricing_table = [];
            foreach($symbols as $symbol) {
                $exchanges = $symbol->exchanges;
                if ($exchanges->isEmpty()) {
                    // $this->info('No exchange found');
                    continue;
                }
                
                foreach($exchanges as $exchange) {
                    $cache_key = 'PRICE_' . $symbol->id . '_' . $exchange->id;
                    $old_price = Cache::get($cache_key, function () use ($symbol, $exchange) {
                        return $this->ask('No price found, please enter price for symbol [' . $symbol->code . '@' . $exchange->code . ']');
                    });
                    $change = rand(-10, 10);
                    $new_price = $this->makeNewPriceFromChangePercent($old_price, $change);
                    PricingChangeEvent::dispatch($exchange, $symbol, $new_price);
                    Cache::put($cache_key, $new_price);
                    $pricing_table[] = [$symbol->code, $exchange->code, $old_price, $change.'%', $new_price];
                    // $this->info('Symbol: ' . $symbol->code . '@' . $exchange->code . ' - ' . $old_price . ' -> ' . $new_price);
                }
            }
            $this->table(
                ['Symbol', 'Ex', 'Old Price', 'Change', 'New Price'],
                $pricing_table
            );
            sleep(self::SLEEP_TIME);
        }
        while(true);
    }

    private function makeNewPriceFromChangePercent($old_price, $change)
    {
        $new_price = $old_price + ($old_price * $change / 100);
        return $new_price;
    }
}