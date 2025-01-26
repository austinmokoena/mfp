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

    public function getLeads(Request $request)
    {
        $user = 'your_user_id'; // Replace with your actual user ID
        $fromDt = $request->input('from_dt'); // Optional: Format dd/mm/yyyy
        $toDt = $request->input('to_dt'); // Optional: Format dd/mm/yyyy

        $leads = $this->vaultMarketsService->getLeads($user, $fromDt, $toDt);

        return view('leads', ['leads' => $leads]);
    }
}