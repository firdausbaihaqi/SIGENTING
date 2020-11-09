<!DOCTYPE html>
<html>

<head>
    <title>Data Ibu</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap/app.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<nav class="navigation-bar">
        <div class="navigation-logo">
            Logo Sigenting
        </div>
        <div class="navigation-links">
            <a href="" class="navigation-link">Home</a>
            <a href="" class="navigation-link">Data Postingan</a>
            <a href="" class="navigation-link">Data Ibu</a>
            <div class="dropdown">
                <a href="#" class="dropdown-trigger">
                    Data Anak
                    <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div class="dropdown-content duration-500">
                    <a href="" class="navigation-link">List Data Anak</a>
                    <a href="" class="navigation-link">Laporan</a>
                    <a href="" class="navigation-link">Tracking</a>
                </div>
            </div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="navigation-link">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>
<body class="bg-gray-100">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="container">
                <div>
                    <div class="title text-gray-700 mb-8">
                        <h2>Data Ibu</h2>
                    </div>
                    <div>
                        @if (session()->has('$message'))
                        <div class="alert alert-success">
                            {{ session('$message') }}
                        </div>
                        @endif
                        @livewire('bidan.ibu.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
        window.livewire.on('userUpdate', () => {
            $('#updateModal').modal('hide');
        });
    </script>

</body>

</html>