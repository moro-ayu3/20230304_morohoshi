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
        @extends('layouts.default')
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
        }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
            @section('content')
             <div class="font-sans text-gray-900 antialiased">
                  {{ $slot }}
             </div>
             <form action="/auth" method="post">
                <table>
                @csrf
                  <tr>
                    <th>Email</th>
                    <td class="td_1"><input type="email" name="email"></td>
                  </tr>
                  <tr>
                    <th>Password</th>
                    <td class="td_1"><input type="password" name="password"></td>
                  </tr>
                  <tr>
                    <td class="td_2"><input type="text" name=""></td><th><p class="remember-me">Remember me</p></th>
                  </tr>
                </table>
                <button type="submit" class="login-btn">LOG IN</button>
             </form>
            @endsection
            </main>
    </body>
</html>
