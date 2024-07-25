<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the user dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can fetch any necessary data for the user dashboard here
        // For example, user-specific notifications, messages, etc.
        
        return response()->json(['message' => 'welcome to user dashboard '], 200);
    }

    // Additional methods for user functionality can be added here
}