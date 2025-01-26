<?php

namespace App\Services;

use GuzzleHttp\Client;

class AlphaVantageService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        // Initialize the Guzzle HTTP client
        $this->client = new Client();

        // Fetch the Alpha Vantage API key from the Laravel configuration
        $this->apiKey = config('services.alpha_vantage.api_key');
    }

    /**
     * Fetch real-time forex data for a currency pair.
     *
     * @param string $fromCurrency The base currency (e.g., USD).
     * @param string $toCurrency The target currency (e.g., EUR).
     * @return array
     */
    public function getForexData($fromCurrency, $toCurrency)
    {
        // Build the API URL
        $url = "https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency={$fromCurrency}&to_currency={$toCurrency}&apikey={$this->apiKey}";

        // Make the API request
        $response = $this->client->get($url);

        // Decode the JSON response
        return json_decode($response->getBody(), true);
    }

    /**
     * Fetch historical forex data.
     *
     * @param string $fromCurrency The base currency (e.g., USD).
     * @param string $toCurrency The target currency (e.g., EUR).
     * @param string $interval The time interval (e.g., daily, weekly, monthly).
     * @return array
     */
    public function getHistoricalForexData($fromCurrency, $toCurrency, $interval = 'daily')
    {
        // Build the API URL
        $url = "https://www.alphavantage.co/query?function=FX_{strtoupper($interval)}&from_symbol={$fromCurrency}&to_symbol={$toCurrency}&apikey={$this->apiKey}";

        // Make the API request
        $response = $this->client->get($url);

        // Decode the JSON response
        return json_decode($response->getBody(), true);
    }
}