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
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-400 ">
    <div class="center">
        <div class="card-login mt-32">
            <h1 class="title">Ini Logo</h1>
            <p class="text-gray-700 mt-6">mohon masuk terlebih dahulu untuk melanjutkan</p>
               <form action="" class="mt-4 block">
                    <label for="email" class="label">Email atau Nomor Telepon</label>
                   <input type="text" class="input-text focus:border-blue-400" name="email" id="">
                   <label for="password" class="label">Kata sandi</label>
                   <input type="password" class="input-text focus:outline-none focus:shadow-outline focus:border-blue-300" name="password" id="">
                   <input type="submit" value="Masuk" class="btn-login text-white mt-12">
               </form>
            <p class="mt-6 label text-center">belum punya akun? Silahkan hubungi posyandu terdekat</p>
        </div>
    </div>
</body>

</html>