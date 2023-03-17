<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>COACHTECH</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        @yield('css')


        <!-- Scripts -->
        < src="{{ asset('js/app.
    </head>
    <body class="font-sans antialiased">
        <div class="container bg-gray-100">
            <!-- Page Heading -->
            <div class="card bg-white shadow">
              @yield('content')
            </div>
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
