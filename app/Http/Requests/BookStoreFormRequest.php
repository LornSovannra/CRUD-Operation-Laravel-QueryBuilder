<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreFormRequest extends FormRequest
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
            'name' => 'required|min:5|max:100',
            'email' => 'required|min:10|max:100',
            'address' => 'required|min:5|max:100',
            'website' => 'required|min:5|max:100'
        ];
    }

    //Make customer message
    public function messages()
    {
        return [
            'name.required' => "Pleas fill in the field!",
            'name.min' => "Name at least 5 character long!"
        ];
    }
}