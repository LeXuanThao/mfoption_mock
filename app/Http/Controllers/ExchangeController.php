<?php

namespace App\Http\Controllers;

use App\Http\Resources\Exchange as ExchangeResource;
use App\Models\Exchange;

class ExchangeController extends Controller
{
    public function __invoke()
    {
        return ExchangeResource::collection(Exchange::all());
    }
}