<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Symbol;
use App\Models\Exchange;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $exO = Exchange::factory()->create([
            'code' => 'O',
            'name' => 'Day-by-day',
        ]);
        $exOD = Exchange::factory()->create([
            'code' => 'OD',
            'name' => 'In day',
        ]);
        $exOE = Exchange::factory()->create([
            'code' => 'OE',
            'name' => 'In night',
        ]);
        //Generate Symbols;
        //Index Nikkei 225
        $nk225Index = Symbol::factory()->create([
            'name' => 'Nikkei 225',
            'code' => 'NK225',
            'type' => 'index',
            'trade_start' => '2021-06-01',
            'trade_end' => null,
            'deriv_month' => null,
            'trade_unit' => 1,
        ]);
        //Option Nikkei 225 Mini expiring in 2024-06-30
        Symbol::factory()->create([
            'name' => 'Nikkei 225 Mini',
            'code' => 'N225M2106',
            'type' => 'option',
            'security_type' => '103',
            'trade_start' => '2024-06-01',
            'trade_end' => '2024-06-30',
            'deriv_month' => '2024-06',
            'trade_unit' => 1,
            'underlyer' => $nk225Index->code,
        ])->exchanges()->sync([$exO->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOD->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOE->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ]]);
        //Option Nikkei 225 Mini expiring in 2024-07-30
        Symbol::factory()->create([
            'name' => 'Nikkei 225 Mini',
            'code' => 'N225M2107',
            'type' => 'option',
            'security_type' => '103',
            'trade_start' => '2024-06-01',
            'trade_end' => '2024-07-30',
            'deriv_month' => '2024-07',
            'trade_unit' => 1,
            'underlyer' => $nk225Index->code,
        ])->exchanges()->sync([$exO->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOD->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOE->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ]]);
        //Option Nikkei 225 Mini expiring in 2024-08-30
        Symbol::factory()->create([
            'name' => 'Nikkei 225 Mini',
            'code' => 'N225M2108',
            'type' => 'option',
            'security_type' => '103',
            'trade_start' => '2024-06-01',
            'trade_end' => '2024-08-30',
            'deriv_month' => '2024-08',
            'trade_unit' => 1,
            'underlyer' => $nk225Index->code,
        ])->exchanges()->sync([$exO->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOD->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOE->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ]]);
        //Option Nikkei 225 Micro expiring in 2024-06-30
        Symbol::factory()->create([
            'name' => 'Nikkei 225 Micro',
            'code' => 'N225U2109',
            'type' => 'option',
            'security_type' => '103',
            'trade_start' => '2024-06-01',
            'trade_end' => '2024-09-30',
            'deriv_month' => '2024-09',
            'trade_unit' => 1,
            'underlyer' => $nk225Index->code,
        ])->exchanges()->sync([$exO->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOD->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOE->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ]]);
        //Option Nikkei 225 Micro expiring in 2024-07-30
        Symbol::factory()->create([
            'name' => 'Nikkei 225 Micro',
            'code' => 'N225U2110',
            'type' => 'option',
            'security_type' => '103',
            'trade_start' => '2024-06-01',
            'trade_end' => '2024-10-30',
            'deriv_month' => '2024-10',
            'trade_unit' => 1,
            'underlyer' => $nk225Index->code,
        ])->exchanges()->sync([$exO->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOD->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOE->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ]]);
        //Option Nikkei 225 Micro expiring in 2024-08-30
        Symbol::factory()->create([
            'name' => 'Nikkei 225 Micro',
            'code' => 'N225U2111',
            'type' => 'option',
            'trade_start' => '2024-06-01',
            'trade_end' => '2024-11-30',
            'deriv_month' => '2024-11',
            'trade_unit' => 1,
            'underlyer' => $nk225Index->code,
        ])->exchanges()->sync([$exO->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOD->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ], $exOE->id => [
            'tick_size_group' => '10318',
            'limit_up' => 25050,
            'limit_down' => 25050
        ]]);
    }
}
