<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukStoreRequest extends FormRequest
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
            'stok' => 'required|int:255',
            'provinsi' => 'required|max:255',
            'kabupaten' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'desa' => 'required|max:255',
            'harga' => 'required|int:11',
            'berat' => 'required|decimal:5',
            'deskripsi' => 'required|max:255',
            'foto' => 'required|jpg',
        ];
    }
    public function messages()
{
    return [
     
    ];
}
}