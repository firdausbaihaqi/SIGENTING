<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="center mt-56">
        
            <h1 class="m-8 text-2xl">Admin Panel</h1>
        

        <div class="card-adminPanel mt-4">
            <a href="{{route('data.ibu')}}" class="button-admin bg-blue-400 hover:bg-blue-500">
                Data Ibu
            </a>
            <a href="{{route('data.anak')}}"" class="button-admin bg-green-400 hover:bg-green-500">
                Data Bayi
            </a>
            <a href="route('post.index')" class="button-admin bg-orange-400 hover:bg-orange-500">
                Post
            </a>
        </div>
    </div>
</body>

</html>