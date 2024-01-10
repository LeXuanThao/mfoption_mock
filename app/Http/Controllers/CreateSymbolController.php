<?php

namespace App\Http\Controllers;

use App\Http\Resources\Symbol as SymbolResource;
use App\Models\Symbol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreateSymbolController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'exchange_id' => 'required',
            'type' => 'required',
            'underlyer' => 'sometimes|exists:symbols,id',
        ]);

        $symbol = Symbol::create($request->all());

        return (new SymbolResource($symbol))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }
}