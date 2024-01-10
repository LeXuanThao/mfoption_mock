<?php

namespace App\Services\Symbol;

use App\Models\Symbol;
use Illuminate\Support\Collection;

class ListSymbolService
{
    public function __invoke(): Collection
    {
        return Symbol::all();
    }
}
