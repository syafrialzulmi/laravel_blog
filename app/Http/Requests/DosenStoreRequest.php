<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenStoreRequest extends FormRequest
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
            'nidn' => 'required|max:10',
            'nama_lengkap' => 'required|max:40|min:10',
            'email' => 'required:email',
            'tanggal_lahir' => 'required',
            'status' => 'required'
        ];
    }
}
