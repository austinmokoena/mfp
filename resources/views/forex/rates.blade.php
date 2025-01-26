<h1>Live Forex Rates</h1>
@if(isset($forexData['Realtime Currency Exchange Rate']))
    <p>
        {{ $forexData['Realtime Currency Exchange Rate']['1. From_Currency Code'] }} to
        {{ $forexData['Realtime Currency Exchange Rate']['3. To_Currency Code'] }}:
        {{ $forexData['Realtime Currency Exchange Rate']['5. Exchange Rate'] }}
    </p>
@else
    <p>No data available.</p>
@endif