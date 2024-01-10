<?php

namespace App\Services\User;

use App\Models\User;

class DeleteUserService
{
    public function __invoke($id)
    {
        return User::find($id)->delete();
    }
}