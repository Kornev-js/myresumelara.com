<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this ->id,
            'phone' => $this -> phone,
            'email' => $this -> email,
            'address' => $this -> address,
            'link' => $this -> link,
            'education' => $this -> education,
            'skills' => $this -> skills ,
            'profile_info' => $this -> profile_info,
            'experience' => $this -> experience,
            'created_at' => $this -> created_at,
        ];
    }
}
