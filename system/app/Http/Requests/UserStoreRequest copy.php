<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
        ];
    }
    public function messages()
{
    return [
        'nama.required' => 'isi nama terlebih dahulu',
        'username.required' => 'isi username terlebih dahulu',
        'username.unique' => 'username telah digunakan',
        'email.required' => 'isi email  dahulu',
    ];
}
}