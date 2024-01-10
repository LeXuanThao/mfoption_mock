<?php

namespace App\UseCases\User;

use App\Services\User\CreateUserService;

class CreateUseCase
{
    public function __construct(
        protected CreateUserService $service
    ) {}

    public function __invoke($params = [])
    {
        return $this->service->__invoke($params);
    }
}