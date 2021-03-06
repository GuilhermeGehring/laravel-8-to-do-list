<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' => strtolower($this->name),
            'body' => $this->description,
            'completed' => $this->completed ? 'S' : 'N',
            'date' => Carbon::create($this->created_at)->format('Y-m-d'),
        ];
    }
}
