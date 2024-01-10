<?php

namespace App\UseCases\Symbol;

use App\Services\Symbol\ListSymbolService;

class ListUseCase
{
    public function __construct(
        protected ListSymbolService $service
    ) {
    }

    public function __invoke()
    {
        return $this->service->__invoke();
    }
}
