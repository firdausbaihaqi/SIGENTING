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
    <link href="{{ asset('css/bootstrap/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    @yield('style')
</head>

<body class="bg-gray-100">
    <nav class="navigation-bar">
        <div class="navigation-logo">
            Logo Sigenting
        </div>
        <div class="navigation-links">
            <a href="{{route('authBidan')}}" class="navigation-link">Home</a>
            <a href="{{route('post.index')}}" class="navigation-link">Data Postingan</a>
            <a href="{{route('data.ibu')}}" class="navigation-link">Data Ibu</a>
            <div class="dropdown">
                <a href="{{route('data.anak')}}" class="dropdown-trigger">
                    Data Anak
                    <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div class="dropdown-content duration-500">
                    <a href="{{route('ska.index')}}" style="text-align: center;" class="navigation-link">Data Status Kesehatan Anak</a>                    
                    <a href="{{route('tracking')}}" class="navigation-link">Tracking</a>
                </div>
            </div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="navigation-link">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    @yield('content')
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    @yield('script')

    @stack('scriptTest')
</body>

</html>