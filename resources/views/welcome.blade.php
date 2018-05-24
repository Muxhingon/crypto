
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Crypto Currency - Home</title>
  <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/js/semantic.min.js"></script>

  <script>
    $(document).ready(function(){
        $('.ui.dropdown').dropdown({maxSelections:10});

        $('form').form({
                on: 'blur',
                fields: {
                    amounts: {
                        rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter a value'
                        }
                        ]
                    },
                    dropdown: {
                        identifier  : 'dropdown',
                        rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please select a dropdown value'
                        }
                        ]
                    },
                }
        });
    });
  </script>

</head>
<body>
<br>

<div class="ui text container">

<h2 class="ui header">Estimation of Exchange </h2>

<h4 class="ui top attached block header">
  Select up to 10 CryptoCurrencies and Currencies
</h4>
<div class="ui bottom attached segment">
  <form class="ui two column grid" method="POST" action="{{route('consult')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="ui column">Please insert the Amount to calculate</div>
      <div class="ui column input">
          <input type="text" name="amounts" placeholder="10000,5000,6000"/>
      </div>
      <div class="ui column">
          <select name="crypto[]" multiple="" class="ui fluid search dropdown" >
              @foreach($coins as $coin)
              <option value="{{$coin->Symbol}}"> {{$coin->FullName}}</option>
              @endforeach
          </select>
      </div>
      <div class="ui column">
          <select name="currencies[]"  multiple="" class="ui fluid search dropdown" >
              @foreach($currency as $key=>$curr)
              <option value="{{$key}}"> {{$curr}}</option>
              @endforeach
          </select>
      </div>
      <div class="ui column">
      </div>
      <div class="ui column">
          <button class="ui right floated button blue">SEND</button>
      </div>
      
  <form>

</div>



</div>




<div class="ui container">

  @if ($errors->any())
  <div class="ui error message"></div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="ui section divider"></div>

  <h2 class="ui header">Top crypto currencies converted to MXN</h2>
    <div class="ui five column grid">
        @foreach($top->Data as $t)
        <div class="column">
            <div class="ui card">
                <div class="image">
                    <img src="https://www.cryptocompare.com{{$t->CoinInfo->ImageUrl}}">
                </div>
                <div class="content">
                    <span class="header">{{$t->CoinInfo->FullName}}</span>
                    <div class="meta">
                        <span class="date">{{$t->CoinInfo->Internal}}</span>
                    </div>
                </div>
                <div class="extra content">
                    <a href="https://www.cryptocompare.com{{$t->CoinInfo->Url}}"><i class="chart line icon"></i>Total Volume 24H {{$t->ConversionInfo->TotalVolume24H}} </a>
                    <br><hr><p>Algorithm: {{$t->CoinInfo->Algorithm}}</p>
                    <p>Block Number: {{$t->CoinInfo->BlockNumber}}</p>
                    <p>BlockReward: {{$t->CoinInfo->BlockReward}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




<br><br><br>

</body>

</html>
