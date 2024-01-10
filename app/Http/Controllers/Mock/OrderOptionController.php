<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;

class OrderOptionController extends Controller
{
    public function __invoke()
    {
        $data = [
            "result" => 0,
            "orderID" => "20180309A01N09123343"
        ];
        return response()->json($data);
    }
}