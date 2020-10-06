<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Calculator</h1>
<form class="form-inline" action="{{ route('calculate') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="number-1">Number 1:</label>
        <input type="text" class="form-control" id="number-1" name="number_1">
    </div>
    <br>
    <div class="form-grop">
        <label for="">Action:</label>
        <select id="" class="form-control" name="action">
            @foreach($actions as $action)
                <option value="{{ $action }}">{{ $action }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="pwd">Number 2:</label>
        <input type="text" class="form-control" id="number-2" name="number_2">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <div>
        @if(session()->has('result'))
            <h2>Result: {{ session()->get('actionString') }} = {{ session()->get('result') }}</h2>
        @endif
    </div>
</form>
</body>
</html>
