<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreValuationReportRequest extends FormRequest
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
            'land_id' => [ "required"],
            'evaluated_at' => [ "required"],
            'land' => [ "required"],
            'improvement' => [ "required"],
            'file' => [ "required"],
            'status' => [ "required"],
        ];
    }
}
