<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{config('app.name', 'Laravel-Workspace')}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>