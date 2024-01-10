<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;
use App\Mock\Symbol;
use App\Mock\Exchange;

class SymbolFutureController extends Controller
{
    public function __invoke() {
        $data = [];
        $symbol = new Symbol();
        $symbol->symbol = "163120018";
        $symbol->symbolName = "日経平均先物 18/12";
        $symbol->symbolShortName = "日経平均先物 12";
        $symbol->securityType = "101";
        $symbol->underlyer = "NK225";
        $symbol->derivMonth = "201812";
        $symbol->tradeStart = "20140207";
        $symbol->tradeEnd = "20181213";
        $symbol->tradeUnit = 1;
        $exchanges = [];
        $exchange = new Exchange();
        $exchange->exchange = "O";
        $exchange->tickSizeGroup = "10118";
        $exchange->limitUp = 25050;
        $exchange->limitDown = 22390;
        array_push($exchanges, $exchange);
        $exchange = new Exchange();
        $exchange->exchange = "OD";
        $exchange->tickSizeGroup = "10118";
        $exchange->limitUp = 25050;
        $exchange->limitDown = 22390;
        array_push($exchanges, $exchange);
        $exchange = new Exchange();
        $exchange->exchange = "OE";
        $exchange->tickSizeGroup = "10118";
        $exchange->limitUp = 25050;
        $exchange->limitDown = 22390;
        array_push($exchanges, $exchange);
        $symbol->exchanges = $exchanges;
        array_push($data, $symbol);

        return response()->json($data);
    }
}