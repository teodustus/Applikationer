<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <title>{{config('app.name')}}</title> 
    </head>
    <body>
            <div class="container">
                @include('inc.messages')
      
     
                @include('inc.navbar')
                @yield('content')
        </div>
       
    </body>
</html>
