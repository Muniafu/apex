<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Deal;
use App\Models\Contact;

class DashboardController extends Controller
{
    // Ensure the user is authenticated to view the dashboard
    public function __construct()
    {

    }

    // Index method to show dashboard
    public function index()
    {
        // Fetch relevant CRM data (you can add other models as required)
        $accounts = Account::all();
        $contacts = Contact::all();
        $deals = Deal::all();

        // Pass the data to the dashboard view
        return view('dashboard', [
            'accounts' => $accounts,
            'contacts' => $contacts,
            'deals' => $deals,
        ]);
    }
}
