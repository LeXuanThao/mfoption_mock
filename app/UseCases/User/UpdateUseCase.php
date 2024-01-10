<?php

namespace App\UseCases\User;

use App\Services\User\UpdateUserService;

class UpdateUseCase
{
    public function __construct(
        protected UpdateUserService $service
    ) {}

    public function __invoke($id, $params = [])
    {
        return $this->service->__invoke($id, $params);
    }
}