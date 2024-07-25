<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
{
    // Validate the role field
    $request->validate([
        'role' => ['required', 'in:user,admin,company,agent'],
    ]);

    // Create a new user instance with the role
    $user = User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'username' => $request->username,
        'role' => $request->role,
    ]);

    // Optionally, you can log the user in or return a success response
    // Auth::login($user);

    return response()->json(['message' => 'User registered successfully!'], 201);
}
}