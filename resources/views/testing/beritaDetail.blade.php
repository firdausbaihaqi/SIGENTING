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

<body class="bg-gray-100 mx-6 md:mx-32">
    <section class="mt-12">

        <div class="headline-container" style="height: 50vh; background: url(https://st3.depositphotos.com/3227011/15104/i/1600/depositphotos_151040356-stock-photo-top-view-laptop-document-office.jpg);
                background-size:cover;">
        </div>
        <h1 class="mt-6 text-4xl text-left">Judul Artikel</h1>
        <p class="text-lg text-gray-700">Tanggal Upload</p>

    </section>
    <section class="mt-6 mb-12">
        <div class="w-full md:w-3/4 grid bg-white rounded-lg ">
            <!-- post container -->
            <div class="m-5 text-gray-700">
                <p>
                    &nbsp; Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsa eius debitis beatae voluptatem voluptas odio minus obcaecati? Aliquid quas laudantium, eius nostrum qui iusto eos iste rerum voluptatum dicta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ratione pariatur natus at, dicta quasi consequatur! Quia, commodi! Dicta quae explicabo magni voluptates maiores ratione tempora sit provident assumenda odit.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ullam earum facilis doloribus ipsum voluptates, magnam facere voluptatem officia numquam id consectetur necessitatibus quos! Cum molestias sunt perferendis sed consequuntur.
                </p>
                <br>
                <p>
                    &nbsp; Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsa eius debitis beatae voluptatem voluptas odio minus obcaecati? Aliquid quas laudantium, eius nostrum qui iusto eos iste rerum voluptatum dicta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ratione pariatur natus at, dicta quasi consequatur! Quia, commodi! Dicta quae explicabo magni voluptates maiores ratione tempora sit provident assumenda odit.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ullam earum facilis doloribus ipsum voluptates, magnam facere voluptatem officia numquam id consectetur necessitatibus quos! Cum molestias sunt perferendis sed consequuntur.
                </p>
                <br>
                <p>
                    &nbsp; Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsa eius debitis beatae voluptatem voluptas odio minus obcaecati? Aliquid quas laudantium, eius nostrum qui iusto eos iste rerum voluptatum dicta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ratione pariatur natus at, dicta quasi consequatur! Quia, commodi! Dicta quae explicabo magni voluptates maiores ratione tempora sit provident assumenda odit.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ullam earum facilis doloribus ipsum voluptates, magnam facere voluptatem officia numquam id consectetur necessitatibus quos! Cum molestias sunt perferendis sed consequuntur.
                </p>
            </div>
            <!-- post container -->
        </div>


    </section>

</body>

</html>