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