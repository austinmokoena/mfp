<h1>Historical Forex Data</h1>
@if(isset($historicalData['Time Series FX (Daily)']))
    <ul>
        @foreach($historicalData['Time Series FX (Daily)'] as $date => $data)
            <li>
                <strong>{{ $date }}</strong>:
                Open: {{ $data['1. open'] }},
                High: {{ $data['2. high'] }},
                Low: {{ $data['3. low'] }},
                Close: {{ $data['4. close'] }}
            </li>
        @endforeach
    </ul>
@else
    <p>No historical data available.</p>
@endif