<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SymbolOptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'symbol' => $this->code,
            'symbolName' => $this->name,
            'symbolShortName' => $this->short_name,
            'securityType' => $this->security_type,
            'symbolType' => $this->type,
            'tradeStart' => $this->trade_start->format('Ymd'),
            'tradeEnd' =>$this->trade_end->format('Ymd'),
            'derivMonth' => $this->deriv_month->format('Ym'),
            'tradeUnit' => $this->trade_unit,
            'underlyer' => $this->underlyer,
            'exchanges' => ExchangeLimitationResource::collection($this->exchanges),
        ];
    }
}
