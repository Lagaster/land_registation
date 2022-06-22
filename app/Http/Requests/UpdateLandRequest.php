<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLandRequest extends FormRequest
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
            'plot_no'=>["required","unique:lands,plot_no,except,id"],
            'size'=>["required"],
            'sheet_no'=>["required"],
            'title_deed'=>["required","unique:lands,plot_no,except,id"],
        ];
    }
}
