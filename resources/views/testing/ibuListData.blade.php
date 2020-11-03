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
    <div class="center mt-2">

        <h1 class="m-8 text-2xl">Data Ibu</h1>
        <div class="flex">
            <div class="pt-2 relative text-gray-600">
                <input class="input-search text-sm focus:outline-none" type="search" name="search" placeholder="Pencarian">
                <!-- svg search -->
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
                <!-- svg search -->
            </div>
            <div class="pt-2">
                <button id="modalBtn" class="button mx-3 text-blue-100 bg-blue-500 hover:bg-blue-700 duration-200">
                    Tambah Data
                </button>
            </div>

        </div>

        <!-- iki tabel -->
        <div class="w-full px-4">
            <table class="table">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="table-header w-1/12">id</th>
                        <th class="table-header w-1/4">nama ibu</th>
                        <th class="table-header w-1/4">nama bayi</th>
                        <th class="table-header">nama alamat</th>
                        <th class="table-header w-1/5">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="table-data">00001</td>
                        <td class="table-data">Sulistiani</td>
                        <td class="table-data">
                            <ul>
                                <li>
                                    Rizal Elsa Fany
                                </li>
                            </ul>
                        </td>
                        <td class="table-data"> jl. Merdeka no 14</td>
                        <td class="table-data">
                            <a href="#" class="td-button text-gray-100 bg-green-500 hover:bg-green-700">Edit</a>
                            <a href="#" class="td-button text-blue-100 bg-blue-500 hover:bg-blue-700">View</a>
                            <a href="#" class="td-button text-red-100 bg-red-500 hover:bg-red-700">Delete</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-100">
                        <td class="table-data">00002</td>
                        <td class="table-data">Puji Winarsis</td>
                        <!-- nampilkan list semua nama anak apabila ditemui lebih dari satu -->
                        <td class="table-data">
                            <ul>
                                <li>
                                    Elsa Fany
                                </li>
                                <li>
                                    Hendra Saputra
                                </li>
                            </ul>
                        </td>
                        <td class="table-data"> jl. Merdeka no 10</td>
                        <td class="table-data">
                            <a href="#" class="td-button text-gray-100 bg-green-500 hover:bg-green-700">Edit</a>
                            <a href="#" class="td-button text-blue-100 bg-blue-500 hover:bg-blue-700">View</a>
                            <a href="#" class="td-button text-red-100 bg-red-500 hover:bg-red-700">Delete</a>
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
                            <label for="nama" class="label pl-1">Nama</label>
                            <input type="text" class="input-text focus:border-blue-500" name="nama">
                        </div>
                        <div class="flex">
                            <div class="form-group mr-2">
                                <label for="alamat" class="label pl-1">Alamat</label>
                                <input type="text" class="input-text focus:border-blue-500" name="alamat">
                            </div>
                            <div class="form-group ml-2">
                                <label for="telepon" class="label pl-1">Telepon</label>
                                <input type="text" class="input-text focus:border-blue-500" name="telepon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="label pl-1">Email</label>
                            <input type="email" class="input-text focus:border-blue-500" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="riwayatPenyakit" class="label pl-1">Riwayat Penyakit</label>
                            <input type="text" class="input-text focus:border-blue-500" name="riwayatPenyakit">
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