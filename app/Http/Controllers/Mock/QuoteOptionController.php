<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;
use App\Mock\QuoteOption;

class QuoteOptionController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $quoteOption = new QuoteOption();
        $quoteOption->symbol = '133128518';
        $quoteOption->exchange = 'OD';
        $quoteOption->price = 21580;
        $quoteOption->priceTime = '095700';
        $quoteOption->change = -140;
        $quoteOption->percentChange = -0.64;
        $quoteOption->open = 21720;
        $quoteOption->openTime = '090000';
        $quoteOption->high = 21730;
        $quoteOption->highTime = '094500';
        $quoteOption->low = 21510;
        $quoteOption->lowTime = '140900';
        $quoteOption->close = 21720;
        $quoteOption->closeTime = '2018/04/24';
        $quoteOption->dayVolume = 23317;
        $quoteOption->bid = 21610;
        $quoteOption->bidSize = 59300;
        $quoteOption->ask = 21600;
        $quoteOption->askSize = 24400;
        $quoteOption->actualPrice = 21580;
        $quoteOption->delta = 0.2773;
        $quoteOption->impliedDelta = 0.3534;
        $quoteOption->impliedGamma = 0.0001;
        $quoteOption->impliedTheta = -4.9362;
        $quoteOption->impliedVega = 62.3508;
        $quoteOption->impliedVolatility = 19.95;
        $quoteOption->optionTheoretical = 725.97;
        array_push($data, $quoteOption);

        return response()->json($data);
    }
}