<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => ["required","string"],
            'email' => ["required","email"],
            'password' =>  ["string","nullable"], // password
            'dob'=> ["required","date"],
            'image'=> ["nullable","file"],
            'national_id'=> ["required","numeric"],
            'id_image'=> ["nullable","file"],
            'phone'=> ["required","string"],
            'address'=> ["required","string"],
            'role'=> ["required"],
            'kra_pin'=> ["required","string"],
            'gender'=> ["required","string"]
        ];
    }
}
