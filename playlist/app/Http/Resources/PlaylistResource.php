<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlaylistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' =>$this->id,
            'name' => $this->name,
            'genre_type' => $this->genre_type,
            'duration' => $this->duration,
            'is_favourite' => $this->is_favourite,
            // 'details' => $this->details
        ];
    }
}
