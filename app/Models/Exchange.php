<?php

namespace App\Models;

use App\Models\Pivot\SymbolExchange;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'code',
        'name',
    ];

    public function symbols()
    {
        return $this->belongsToMany(Symbol::class, 'symbols_exchanges')->using(SymbolExchange::class)->withPivot(['tick_size_group', 'limit_up', 'limit_down']);
    }
}