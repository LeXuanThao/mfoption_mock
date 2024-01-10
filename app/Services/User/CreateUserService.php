<?php

namespace App\Services\User;

use App\Models\User;

class CreateUserService
{
    public function __invoke(array $params)
    {
        return User::create($params);
    }
}