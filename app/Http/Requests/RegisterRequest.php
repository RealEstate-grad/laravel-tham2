<?php

// app/Http/Requests/RegisterRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

    public function rules()
{
    return [
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:8'],
        'username' => ['required', 'unique:users'],
        'role' => ['required', 'in:user,admin,company,agent'],
    ];
}
}
