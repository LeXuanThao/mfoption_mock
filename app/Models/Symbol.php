<?php

namespace App\Models;

use App\Enums\SymbolType;
use App\Models\Pivot\SymbolExchange;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symbol extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'code',
        'name',
        'short_name',
        'security_type',
        'type',
        'trade_start',
        'trade_end',
        'deriv_month',
        'trade_unit',
        'underlyer',
    ];

    protected $casts = [
        'trade_start' => 'date:Ymd',
        'trade_end' => 'date:Ymd',
        'deriv_month' => 'date:Ym',
        'type' => SymbolType::class,
    ];

    public function exchanges()
    {
        return $this->belongsToMany(Exchange::class, 'symbols_exchanges')->using(SymbolExchange::class)->withPivot(['tick_size_group', 'limit_up', 'limit_down']);
    }
}
