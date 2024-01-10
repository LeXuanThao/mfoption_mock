<?php

namespace App\Http\Controllers\Mock;

use App\Enums\SymbolType;
use App\Http\Controllers\Controller;
use App\Http\Resources\SymbolOptionResource;
use App\Models\Symbol;

class SymbolOptionController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $symbols = Symbol::with(['exchanges'])->where('type', SymbolType::option)->get();
        return SymbolOptionResource::collection($symbols);
        
        // $exchange->exchange = "OE";
        // $exchange->tickSizeGroup = "10318";
        // $exchange->limitUp = 25050;
        // $exchange->limitDown = 22390;
        // array_push($exchanges, $exchange);
        // $symbol->exchanges = $exchanges;
        // array_push($data, $symbol);
    
        return response()->json($data);
    }
}