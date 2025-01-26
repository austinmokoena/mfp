<?php

namespace App\Http\Controllers;

use App\Services\VaultMarketsService;
use Illuminate\Http\Request;

class VaultMarketsController extends Controller
{
    protected $vaultMarketsService;

    public function __construct(VaultMarketsService $vaultMarketsService)
    {
        $this->vaultMarketsService = $vaultMarketsService;
    }

    public function showIntroducingBroker(Request $request)
    {
        $user = 'CU858323'; // Replace with your actual user ID
        $fromDt = $request->input('from_dt'); // Optional: Format dd/mm/yyyy
        $toDt = $request->input('to_dt'); // Optional: Format dd/mm/yyyy

        $leads = $this->vaultMarketsService->getLeads($user, $fromDt, $toDt);

        // Fetch client activity data
        $clientActivity = $this->vaultMarketsService->getClientsActivity($user);

        // Pass the data to the view
        return view('introducing-broker', [
            'leads' => $leads,
            'clientActivity' => $clientActivity,
        ]);
    }

    public function createLead(Request $request)
    {
        $user = 'your_user_id'; // Replace with your actual user ID

        // Prepare the form data
        $formData = [
            'user' => $user,
            'public_key' => config('vaultmarkets.public_key'),
            'private_key' => config('vaultmarkets.private_key'),
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'currency' => $request->input('currency'),
            'country_id' => $request->input('country_id'),
            // Add other optional fields as needed
        ];

        // Call the API to create a lead
        $response = $this->vaultMarketsService->createLead($formData);

        // Redirect back with a success or error message
        if ($response && $response['success']) {
            return redirect()->route('introducing-broker')->with('success', 'Lead created successfully!');
        } else {
            return redirect()->route('introducing-broker')->with('error', 'Failed to create lead.');
        }
    }
}