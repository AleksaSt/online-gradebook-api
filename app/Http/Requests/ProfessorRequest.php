<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:professors|email|max:255',
            'photos' => 'required',
            'photos.*' => 'required',
            // 'photos.*' => 'mimes:jpg,jpeg,png' validacija uvek failuje
        ];
    }

    public function messages(){
        return [
            'photos.required' => 'Please add at least one image!', 
            'photos.*.required' => 'Enter photo field is required!', 
        ];
    }
}
