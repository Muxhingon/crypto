
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
    });
  </script>

</head>
<body>
<br>

<div class="ui container">
  <h2 class="ui header">Crypto Exchanges</h2>
    <div class="ui two column grid">
      @foreach($exchanges as $key => $exchange)
      <div class="ui column">
        <h4 class="ui top attached block header">
         {{ $key}}
        </h4>
        <div class="ui bottom attached segment">
        <table class="ui definition table">
          <thead>
            <tr>
              <th></th>
              <th>Price</th>
              <th>High last 24H</th>
              <th>Low last 24H</th>
          </thead>
          <tbody>
            @foreach($exchange as $k=>$val)
              <tr>
                <td>{{$k}}</td>
                <td>{{$val->PRICE}}</td>
                <td>{{$val->HIGH24HOUR}}</td>
                <td>{{$val->LOW24HOUR}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
      @endforeach
    </div>
    <br>
    <a class="ui  green button" href="/">Back</a>
</div>
</body>

</html>
