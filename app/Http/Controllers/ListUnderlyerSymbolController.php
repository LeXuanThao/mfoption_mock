<?php

namespace App\Http\Controllers;

use App\Enums\SymbolType;
use App\Http\Resources\Exchange as ExchangeResource;
use App\Models\Symbol;

class ListUnderlyerSymbolController extends Controller
{
    public function __invoke()
    {
        return ExchangeResource::collection(Symbol::whereType(SymbolType::index)->all());
    }
}