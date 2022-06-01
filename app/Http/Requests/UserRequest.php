<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            'nip' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        return $rules;
    }

    public function messages()
    {
        return[
            'nip.required'      => 'Foto Wajib Diisi Dan Wajib Unik',
            'name.required'     => 'Nama Wajib Diisi',
            'email'             => 'Email Wajib Diisi Dan Format Email',
            'password'          => 'Password Wajib Diisi'
        ]   
    }
}
