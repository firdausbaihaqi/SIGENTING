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
    <div class="mt-2">

        <h1 class="m-8 text-2xl text-center">Detail Kesehatan Bayi</h1>
        <div class="grid items-center ml-5">
            <div>
                <p class="text-xl text-gray-600">Nama Bayi : <span class="text-gray-700">Rizal Elsa Fanny</span></p>
            </div>
            <div>
                <button id="modalBtn" class="button mt-5 text-blue-100 bg-blue-500 hover:bg-blue-700 duration-200">
                    Tambah Data
                </button>
                <button id="modalBtn" class="button ml-2 text-blue-100 bg-green-500 hover:bg-green-700 duration-200">
                    Grafik Pertumbuhan
                </button>
            </div>

        </div>

        <!-- iki tabel -->
        <div class="w-full px-4">
            <table class="table">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="table-header w-1/12">id</th>
                        <th class="table-header ">bulan ke</th>
                        <th class="table-header ">tinggi</th>
                        <th class="table-header">berat</th>
                        <th class="table-header">lingkar kepala</th>
                        <th class="table-header">status</th>
                        <th class="table-header w-1/5">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="table-data">00001</td>
                        <td class="table-data">1</td>
                        <td class="table-data">57 cm</td>
                        <td class="table-data">3,4 kg</td>
                        <td class="table-data">??</td>
                        <td class="table-data"> <span class="button bg-green-500 text-white py-1">Sehat</span> </td>
                        <td class="table-data">
                            <a href="#" class="td-button text-gray-100 bg-green-500 hover:bg-green-700">Edit</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="table-data">00002</td>
                        <td class="table-data">2</td>
                        <td class="table-data">59 cm</td>
                        <td class="table-data">3,7 kg</td>
                        <td class="table-data">??</td>
                        <td class="table-data"> <span class="button bg-yellow-500 text-white py-1">Stunting</span> </td>
                        <td class="table-data">
                            <a href="#" class="td-button text-gray-100 bg-green-500 hover:bg-green-700">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>

        <!-- The Modal -->
        <div id="Modal" class="modal-parent">

            <div class="modal-container">
                <div class="modal-header">
                    <h4 class="text-white text-lg pl-4">Title</h4>
                    <button id="modalClose" class="pr-4 font-bold text-white text-3xl hover:text-gray-600 focus:outline-none">&times;</button>
                </div>

                <div class="modal-body p-4 center">
                    <form action="" class="w-2/3 mt-4">
                        <div class="form-group">
                            <label for="bulan" class="label pl-1">Bulan</label>
                            <input type="number" class="input-text focus:border-blue-500" name="bulan">
                        </div>
                        <div class="flex">
                            <div class="form-group">
                                <label for="tinggi" class="label pl-1">Tinggi</label>
                                <input type="number" class="input-text focus:border-blue-500" name="tinggi">
                            </div>
                            <div class="form-group pl-3">
                                <label for="beratBadan" class="label pl-1">Berat Badan</label>
                                <input type="number" class="input-text focus:border-blue-500" name="beratBadan">
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="status" class="label pl-1">Status</label>
                            <div class="m-2 text-gray-700">
                                <input type="radio" name="status" id="stunting" value="Stunting">
                                <label for="stunting" class="mr-3">Stunting</label>
                                <input type="radio" name="status" id="sehat" value="Sehat">
                                <label for="sehat">Sehat</label>
                            </div>
                        </div>
                        <button type="submit" class="mt-3 button text-blue-100 bg-blue-500 hover:bg-blue-700 duration-200 float-right">Tambahkan</button>
                    </form>
                </div>

            </div>

        </div>
        <br>


    </div>

    <script>
        const modal = document.getElementById('Modal');
        const modalBtn = document.getElementById('modalBtn');
        const modalClose = document.getElementById('modalClose');


        // modal.style.display = "block";

        modalBtn.onclick = function() {
            modal.style.display = "block";
        }

        modalClose.onclick = function() {
            modal.style.display = "none"
        }
    </script>
</body>

</html>