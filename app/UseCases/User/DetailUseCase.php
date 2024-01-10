<?php

namespace App\UseCases\User;

use App\Services\User\DetailUserService;

class DetailUseCase
{
    public function __construct(
        protected DetailUserService $service
    ) {}

    public function __invoke($id)
    {
        return $this->service->__invoke($id);
    }
}