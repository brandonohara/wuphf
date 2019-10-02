<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WuphfRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'text' => 'required|min:5|max:255',
            'url' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
        ];
    }
}
