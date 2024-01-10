<?php

namespace App\UseCases\User;

use App\Services\User\ListUserService;

class ListUseCase
{
    public function __construct(
        private ListUserService $listUserService
    ) {}

    public function __invoke($page = 1, $perPage = 10)
    {
        return $this->listUserService->__invoke($page, $perPage);
    }
}