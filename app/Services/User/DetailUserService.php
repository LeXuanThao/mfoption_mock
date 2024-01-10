<?php

namespace App\Services\User;

use App\Models\User;

class DetailUserService
{
    public function __invoke($id)
    {
        return User::find($id);
    }
}