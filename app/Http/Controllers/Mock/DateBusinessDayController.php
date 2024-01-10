<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;
use App\Mock\BusinessDay;

class DateBusinessDayController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $businessDay = new BusinessDay();
        $businessDay->t = '0';
        $businessDay->day = '20180424';
        array_push($data, $businessDay);
        return response()->json($data);
    }
}