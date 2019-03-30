<?php

namespace Modules\Icommerce\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class StoreTransformer extends Resource
{
    public function toArray($request)
    {
        $data = [
            'id' => $this->when($this->id, $this->id),
            'name' => $this->when($this->name, $this->name),
            'address' => $this->when($this->address, $this->address),
            'shipping' => $this->when($this->shipping, $this->shipping),
            'mapareas' => MapAreaTransformer::collection($this->whenLoaded('mapareas')),
        ];
        return $data;
    }
}