<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidate extends FormRequest
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
            'description'=>'required',
            'description_ar'=>'required',
            'name'=>'required',
            'name_ar'=>'required',
            'price'=>'required|Integer',
            'units'=>'required|Integer',
            'category'=>'required|Integer',
        ];
    }
}
