<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display the company dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can fetch any necessary data for the company dashboard here
        // For example, company statistics, projects, etc.
        
        return response()->json(['message' => 'welcome to company dashboard '], 200);
    }

    // Additional methods for company functionality can be added here
}