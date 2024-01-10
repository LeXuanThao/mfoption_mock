<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExchangeLimitationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'exchange' => $this->code,
            'tickSizeGroup' => $this->pivot->tick_size_group,
            'limitUp' => $this->pivot->limit_up,
            'limitDown' => $this->pivot->limit_down,
        ];
    }
}
