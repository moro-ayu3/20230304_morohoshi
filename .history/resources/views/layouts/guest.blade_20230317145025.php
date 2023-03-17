<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
        .th {
         font-size: 15px;
         color: #808080;
         margin-top: 15px;
         margin-left: 15px;
        }

        .td_1 {
         width: 200px;
         height: 30px;
         border: solid 1px #c0c0c0;
         border-radius: 5px 5px 5px 5px;
         margin-left: 15px;
         margin-right: 15px;
         margin-bottom: 15px;
         text-align: center;
        }

        .td_2 {
         width: 15px;
         height: auto;
         border: solid 1px #c0c0c0;
         border-radius: 5px 5px 5px 5px;
         margin-left: 15px;
         display: inline-block;
        }
        .remember-me {
         font-size: 15px;
         color: #808080;
         display: inline-block;
        }

        .register-btn {
         width: 40px;
         height: 20px;
         border-radius: 5px 5px 5px 5px;
         background-color: black;
         font-size: 15px;
         color: #fff;
         text-align: center;
         padding: 15px 15px;
         margin-bottom: 15px;
         margin-right: 15px;
        }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot}}
        </div>
    </body>
</html>
