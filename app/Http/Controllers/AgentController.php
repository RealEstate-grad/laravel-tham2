<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display the agent dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can fetch any necessary data for the agent dashboard here
        // For example, leads, tasks, etc.
        
        return response()->json(['message' => 'welcome to agent dashboard '], 200);
    }

    // Additional methods for agent functionality can be added here
}