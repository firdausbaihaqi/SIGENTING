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

<body class="bg-gray-400 ">
    <div class="block sm:hidden md:hidden w-full fixed rounded-bl-3xl rounded-br-3xl overflow-hidden bg-blue-500" style="height: 75vh; background: url({{ asset('img/login.png') }}) rgba(66, 153, 225, 0.9);
    background-size: cover; background-blend-mode: multiply;">
        <div class="w-2/3">
            <h1 class="mx-6 text-white text-3xl font-semibold" style="margin-top: 20%;">
                Sistem Informasi Pencegahan Stunting
            </h1>
        </div>

    </div>
    <div class="center">

        <div class="card-login fixed bottom-0 md:relative mb-8 md:mb-0 mt-12 md:mt-32 mx-6 md:w-1/3 ">
            <div class="hidden md:block">
                <center>
                    <img src="{{asset('img/logo.png')}}" class="w-24">
                </center>
            </div>
            <p class="text-gray-700 mt-6">mohon masuk terlebih dahulu untuk melanjutkan</p>
            <form action="{{ route('login') }}" method="POST" class="mt-4 block">
                @csrf
                <label for="username" class="label">Username atau Nomor Telepon</label>
                <input type="text" class="input-text focus:outline-none focus:shadow-outline focus:border-blue-300" name="username" id="">
                @error('username')
                <span class="text-red-700 text-sm">
                    <p>{{$message}}</p>
                </span>
                @enderror
                <label for="password" class="label">Kata sandi</label>
                <input type="password" class="input-text focus:outline-none focus:shadow-outline focus:border-blue-300" name="password" id="">
                @error('password')
                <span class="text-red-700 text-sm">
                    <p>{{$message}}</p>
                </span>
                @enderror
                @if (session('error'))
                <span class="text-red-700 text-sm mt-2">
                    {{ session('error') }}
                </span>
                @endif
                <input type="submit" value="Masuk" class="btn-login text-white mt-6">
            </form>
            <p class="mt-6 label text-center">belum punya akun? Silahkan hubungi posyandu terdekat</p>
        </div>
    </div>
</body>

</html>