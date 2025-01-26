<!DOCTYPE html>
<html>
<head>
    <title>Leads</title>
</head>
<body>
    <h1>Leads</h1>
    @if(isset($leads['data']) && count($leads['data']) > 0)
        <ul>
            @foreach($leads['data'] as $lead)
                <li>{{ $lead['name'] }} - {{ $lead['email'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No leads found.</p>
    @endif
</body>
</html>