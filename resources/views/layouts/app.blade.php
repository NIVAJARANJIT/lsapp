<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{config('app.name','lsapp')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>