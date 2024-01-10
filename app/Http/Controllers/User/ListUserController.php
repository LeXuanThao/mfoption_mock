<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\UseCases\User\ListUseCase;

class ListUserController extends Controller
{
    public function __invoke(
        ListUseCase $usecase
    ) {
        return response()->json($usecase());
    }
}