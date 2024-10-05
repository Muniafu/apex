<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;

class DealController extends Controller
{
    // Handle the form submission to add a new deal
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'stage' => 'required|string|max:255',
        ]);

        // Create a new deal using the validated data
        Deal::create([
            'title' => $request->input('title'),
            'stage' => $request->input('stage'),
        ]);

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'New deal added successfully!');
    }
}
