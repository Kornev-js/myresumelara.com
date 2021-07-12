<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'link' => 'required',
            'education' => 'required',
            'skills' => 'required',
            'profile_info' => 'required',
            'experience' => 'required',
            'created_at'=> 'required',
        ];
    }
}
