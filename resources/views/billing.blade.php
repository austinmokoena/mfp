@extends('layouts.user_type.auth')

@section('content')

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
  {
  "width": "980",
  "height": "570",
  "symbol": "CAPITALCOM:GOLD",
  "interval": "30",
  "timezone": "Africa/Johannesburg",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "allow_symbol_change": true,
  "calendar": false,
  "support_host": "https://www.tradingview.com"
}
  </script>
</div>
<!-- TradingView Widget END -->
 
@endsection

