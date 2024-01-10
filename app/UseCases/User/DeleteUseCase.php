<?php

namespace App\UseCases\User;

use App\Services\User\DeleteUserService;

class DeleteUseCase
{
    public function __construct(
        protected DeleteUserService $service
    ) {}

    public function __invoke($id)
    {
        return $this->service->__invoke($id);
    }
}