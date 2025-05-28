<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Full Stack Tech Test</title>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <h1>Welcome to the Full Stack Tech Test!</h1>
            <book-listing></book-listing>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
