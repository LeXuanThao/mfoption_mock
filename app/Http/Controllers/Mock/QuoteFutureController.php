<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;
use App\Mock\QuoteFuture;

class QuoteFutureController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $quote = new QuoteFuture();
        $quote->symbol = '163120018';
        $quote->exchange = 'OD';
        $quote->price = 21580;
        $quote->priceTime = '095700';
        $quote->change = -140;
        $quote->percentChange = -0.64;
        $quote->open = 21720;
        $quote->openTime = '090000';
        $quote->high = 21730;
        $quote->highTime = '094500';
        $quote->low = 21510;
        $quote->lowTime = '140900';
        $quote->close = 21720;
        $quote->closeTime = '2018/04/24';
        $quote->dayVolume = 23317;
        $quote->bid = 21610;
        $quote->bidSize = 59300;
        $quote->ask = 21600;
        $quote->askSize = 24400;
        $quote->actualPrice = 21600;
        array_push($data, $quote);

        return response()->json($data);
    }
}