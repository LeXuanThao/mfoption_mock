<?php

namespace App\Http\Controllers;

use App\Http\Resources\Symbol as SymbolResource;
use App\Models\Symbol;

class ListSymbolController extends Controller
{
    public function __invoke()
    {
        return SymbolResource::collection(Symbol::all());
    }
}
