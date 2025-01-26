<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AlphaVantageService;

class ForexController extends Controller
{
    protected $alphaVantageService;

    public function __construct(AlphaVantageService $alphaVantageService)
    {
        $this->alphaVantageService = $alphaVantageService;
    }

    public function showLiveRates($fromCurrency, $toCurrency)
    {
        $forexData = $this->alphaVantageService->getForexData($fromCurrency, $toCurrency);
        return view('forex.rates', compact('forexData'));
    }

    public function showHistoricalData($fromCurrency, $toCurrency)
    {
        $historicalData = $this->alphaVantageService->getHistoricalForexData($fromCurrency, $toCurrency);
        return view('forex.historical', compact('historicalData'));
    }
}
