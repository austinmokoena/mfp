<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Container\Attributes\Log;
use GuzzleHttp\Exception\GuzzleException;

class VaultMarketsService
{
    protected $client;
    protected $baseUri;
    protected $publicKey;
    protected $privateKey;

    public function __construct()
    {
        $this->baseUri = config('vaultmarkets.api_url');
        $this->publicKey = config('vaultmarkets.public_key');
        $this->privateKey = config('vaultmarkets.private_key');
        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
        ]);
    }

    public function getLeads($user, $fromDt = null, $toDt = null)
    {
        try {
            $response = $this->client->post('/gateway/ib/5/api.cfc?method=get_leads', [
                'form_params' => [
                    'user' => $user,
                    'public_key' => $this->publicKey,
                    'private_key' => $this->privateKey,
                    'from_dt' => $fromDt,
                    'to_dt' => $toDt,
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            // Log the error
            \Log::error('Vault Markets API Error: ' . $e->getMessage());
            return null;
        }
    }

    // Add more methods for other API endpoints (e.g., create_lead, get_clients_activity, etc.)
}