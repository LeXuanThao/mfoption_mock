<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;
use App\Mock\Quote;

class QuoteIndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $quoteIndex = new Quote();
        $quoteIndex->symbol = '101';
        $quoteIndex->exchange = 'T';
        $quoteIndex->price = 21814.47;
        $quoteIndex->priceTime = '103000';
        $quoteIndex->change = -9.55;
        $quoteIndex->percentChange = -0.04;
        $quoteIndex->open = 21742.45;
        $quoteIndex->openTime = '090000';
        $quoteIndex->high = 21842.26;
        $quoteIndex->highTime = '094500';
        $quoteIndex->low = 21700.78;
        $quoteIndex->lowTime = '140900';
        $quoteIndex->close = 346;
        $quoteIndex->closeTime = '2018/04/24';

        array_push($data, $quoteIndex);
        return response()->json($data);
    }
}