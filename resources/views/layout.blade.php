<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="jumbotron">
    <div class="row">
    <div class="col">
    <h1>Soy un layout! Admira mi belleza</h1>
    </div>
    <div class="col">
    <a href="{{route('products.index') }}" class="btn btn-secondary btn-block">Main</a>
    </div>
    </div>
</div>
    <div class="container">
    @yield('content')
    </div>
</body>
</html>