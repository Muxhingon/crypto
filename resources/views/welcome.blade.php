
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

</head>
<body>
<br>

<div class="ui container">
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

<br><br>

<div class="ui text container">

  <h2 class="ui header">Header Groups</h2>

  <h4 class="ui top attached block header">
    Top Block Header
  </h4>
  <div class="ui bottom attached segment">
    Segment
  </div>

  <div class="ui section divider"></div>

  <div class="ui top attached segment">
    Segment
  </div>
  <h4 class="ui bottom attached block header">
    Bottom Block Header
  </h4>

  <div class="ui section divider"></div>

  <h4 class="ui top attached block header">
    Top Block Header
  </h4>
  <div class="ui attached segment">
    Segment
  </div>
  <h4 class="ui attached block header">
    Middle Block Header
  </h4>
  <div class="ui attached segment">
    Segment
  </div>
  <h4 class="ui bottom attached block header">
    Bottom Block Header
  </h4>


  <h2 class="ui header">Mixed Attached Content</h2>

  <div class="ui section divider"></div>

  <div class="ui top attached segment">Segment</div>
  <div class="ui attached three item menu">
    <a class="item">Item</a>
    <a class="item">Item</a>
    <a class="item">Item</a>
  </div>
  <div class="ui attached segment">
    1
  </div>
  <div class="ui attached icon info message">
    <i class="help circle icon"></i>
    <div class="content">
      Message
    </div>
  </div>
  <table class="ui bottom attached table">
    <thead>
      <th>Header</th>
      <th>Header</th>
      <th>Header</th>
    </thead>
    <tbody>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>

  <div class="ui section divider"></div>

  <div class="ui top attached warning icon message">
    <i class="attention icon"></i>
    <div class="content">
      Message
    </div>
  </div>
  <table class="ui attached table">
    <thead>
      <th>Header</th>
      <th>Header</th>
      <th>Header</th>
    </thead>
    <tbody>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
  <div class="ui bottom attached three item menu">
    <a class="item">Item</a>
    <a class="item">Item</a>
    <a class="item">Item</a>
  </div>

  <div class="ui section divider"></div>

  <div class="ui top attached three item inverted menu">
    <a class="item">Item</a>
    <a class="item">Item</a>
    <a class="item">Item</a>
  </div>
  <table class="ui attached inverted table">
    <thead>
      <th>Header</th>
      <th>Header</th>
      <th>Header</th>
    </thead>
    <tbody>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
  <div class="ui bottom attached inverted segment">
    Segment
  </div>


</div>

</body>

</html>
