<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => "http://e-api.ddev.site/storage/" . $this->image,
            'category' => CategoryResource::make($this->category->load('courses')),
            'user' => UserResource::make($this->user),
            'description' => $this->description,
            'price' => $this->price,
            'likes' => $this->likes,
            'views' => $this->views,
            'created_at' => $this->created_at,
        ];
    }
}