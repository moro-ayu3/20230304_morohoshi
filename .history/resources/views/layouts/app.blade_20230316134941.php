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
        th {
         font-size: 15px;
         color: #808080;
         margin: 15px 15px;
        }

        td {
         width: 200px;
         height: 30px;
         border: solid 1px #c0c0c0;
         border-radius: 5px 5px 5px 5px;
         margin-left: 15px;
         margin-right
         margin-bottom: 15px;

        }

        .already-registered {
         font-size: 15px;
         color: #808080;
         border: solid 1px #808080;
         margin-top: 20px;
         margin-bottom: 20px;
         margin-left: 80px;
         text-align: center;
        }

        .register-btn {
         width: 60px;
         height: 20px;
         border-radius: 5px 5px 5px 5px;
         background-color: black;
         font-size: 15px;
         color: #fff;
         text-align: center;
         padding: 15px 15px;
         margin: 15px auto;
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
            <p>{{ $text }}</p>
            <form action="/auth" method="post">
              <table>
              @csrf
                <tr>
                  <th>Name</th>
                  <td><input type="text" name="name"></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><input type="email" name="email"></td>
                </tr>
                <tr>
                  <th>Password</th>
                  <td><input type="password" name="password"></td>
                </tr>
                <tr>
                  <th>Confirm Password</th>
                  <td><input type="password" name="confirm_password"></td>
                </tr>
              </table>
              <p class="already-registered">Already registered?</p>
              <button type="submit" class="register-btn">REGISTER</button>
            </form>
            @endsection
            </main>
        </div>
    </body>
</html>
