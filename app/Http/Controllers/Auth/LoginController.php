<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed, retrieve the authenticated user
            $user = Auth::user();

            // Check the user's role
            switch ($user->role) {
                case 'admin':
                    return response()->json(['message' => 'Welcome Admin!'], 200);
                case 'user':
                    return response()->json(['message' => 'Welcome User!'], 200);
                case 'company':
                    return response()->json(['message' => 'Welcome Company!'], 200);
                case 'agent':
                    return response()->json(['message' => 'Welcome Agent!'], 200);
                default:
                    return response()->json(['message' => 'Role not recognized.'], 403);
            }
        }

        // Authentication failed
        return response()->json(['message' => 'Invalid credentials.'], 401);
    }
}