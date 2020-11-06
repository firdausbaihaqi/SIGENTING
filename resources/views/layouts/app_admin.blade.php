<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <style>
        nav a {
            margin-right: 5px;
        }
    </style>
    <script src="{{ asset('js/bootstrap/app.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    @yield('style')
</head>

<body>
    <nav>
        <a href="">Home</a>
        <a href="">Data Postingan</a>
        <a href="">Data Ibu</a>
        <a href="">Data Anak</a>
        <a href="">Laporan</a>
        <a href="">Tracking</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>

    @yield('script')

    @stack('scriptTest')
</body>

</html>