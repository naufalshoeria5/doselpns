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
            'role' => ['required'],
            'password' => ['required', 'string', 'min:5'],
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'nip.required'      => 'Nip wajib diisi dan wajib unique',
            'nip.unique'        => 'Nip ini telah digunakan',
            'name.required'     => 'Nama wajib diisi',
            'email.required'    => 'Email wajib diisi dan format email',
            'role.required'     => 'Role wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min'      => 'Password minimal 5 huruf'
        ];
    }
}
