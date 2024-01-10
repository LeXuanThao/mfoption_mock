<?php

namespace App\Services\User;

use App\Models\User;

class UpdateUserService
{
    public function __invoke($id, $params = [])
    {
        $user = User::find($id);
        $user->fill($params);
        $user->save();
        return $user;
    }
}