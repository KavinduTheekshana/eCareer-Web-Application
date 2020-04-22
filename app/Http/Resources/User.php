<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'nic' => $this->nic,
            'phone' => $this->phone,
            'university' => $this->university,
            'student_id' => $this->student_id,
            'company' => $this->company,
            'user_type' => $this->user_type,
            'status' => $this->status,
            'profile_pic' => $this->profile_pic
        ];
    }
}
