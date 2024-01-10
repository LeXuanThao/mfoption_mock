<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SymbolExchange extends Pivot
{
    protected $table = 'symbols_exchanges';
    
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'tick_size_group',
        'limit_up',
        'limit_down',
    ];
}