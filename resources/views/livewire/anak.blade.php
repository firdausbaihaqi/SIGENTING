<!DOCTYPE html>
<html>

<head>
    <title>Data Ibu</title>
    <link href="{{ asset('css/bootstrap/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    @livewireStyles
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2>Data</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('$message'))
                        <div class="alert alert-success">
                            {{ session('$message') }}
                        </div>
                        @endif
                        @livewire('bidan.anak.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });

        $(document).ready(function() {
            var data = '';
            $('#searchFormIbu').select2();
            $('#searchFormIbu').on('change', function(e) {
                let elementName = $(this).attr('id');
                data = $(this).select2("val");
                $('#searchFormIbu').val(data)
            });
        });
    </script>

</body>

</html>