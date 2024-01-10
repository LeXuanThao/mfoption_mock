<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\UseCases\User\CreateUseCase;

class CreateUserController extends Controller
{
    public function __invoke(
        CreateUserRequest $request,
        CreateUseCase $useCase
    )
    {
        return response()->json(
            $useCase(
                $request->only('username', 'password')
            )
        );
    }
}