<?php

namespace App\Services\User;

use App\Models\User;

class ListUserService
{
    public function __invoke($page = 1, $perPage = 10)
    {
        return User::paginate($perPage, ['*'], 'page', $page);
    }
}