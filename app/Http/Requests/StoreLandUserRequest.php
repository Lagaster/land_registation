<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLandUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'land_id'=>['required'],
            'user_id'=>['required'],
            'status'=>['required'],
            'start'=>['required'],
            'end'=>['nullable'],
            'verified_at'=> ['nullable'],
            'verified_by'=>['nullable']
        ];
    }
}
