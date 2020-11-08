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

        <h1 class="m-8 text-2xl">Data Bayi</h1>
        <div class="flex">
            <div class="pt-2 relative text-gray-600">
                <input class="input-search text-sm duration-500" type="search" name="search" placeholder="Pencarian">
                <!-- svg search -->
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" viewBox="0 0 56.966 56.966" xml:space="preserve" width="512px" height="512px">
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

        <div class="sm:w-32 md:w-full px-4">
            <table class="table">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="table-header w-1/12">id</th>
                        <th class="table-header ">nama bayi</th>
                        <th class="table-header ">nama ibu</th>
                        <th class="table-header">jenis kelamin</th>
                        <th class="table-header">tgl lahir</th>
                        <th class="table-header lg:w-1/5">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="table-data">00001</td>
                        <td class="table-data">Rizal Elsa Fany</td>
                        <td class="table-data">
                            Sulistiani
                        </td>
                        <td class="table-data">laki-laki</td>
                        <td class="table-data">27-03-1997</td>
                        <td class="table-data">
                            <a href="#" class="td-button text-gray-100 bg-green-500 hover:bg-green-700">Edit</a>
                            <a href="#" class="td-button text-blue-100 bg-blue-500 hover:bg-blue-700">Detail Kesehatan</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-100">
                        <td class="table-data">00002</td>
                        <td class="table-data">Ida Prawesti</td>
                        <td class="table-data">
                            Erlistina Puji
                        </td>
                        <td class="table-data">Perempuan</td>
                        <td class="table-data">08-10-2002</td>
                        <td class="table-data">
                            <a href="#" class="td-button text-gray-100 bg-green-500 hover:bg-green-700">Edit</a>
                            <a href="#" class="td-button text-blue-100 bg-blue-500 hover:bg-blue-700">Detail Kesehatan</a>
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
                            <label for="namaBayi" class="label pl-1">Nama Bayi</label>
                            <input type="text" class="input-text focus:border-blue-500" name="namaBayi">
                        </div>

                        <div class="form-group">
                            <label for="namaIbu" class="label pl-1">Nama Ibu</label>
                            <input type="text" class="input-text focus:border-blue-500" name="namaIbu">
                        </div>
                        <div class="form-group mb-2">
                            <label for="jenisKelamin" class="label pl-1">Jenis Kelamin</label>
                            <div class="m-2 text-gray-700">
                                <input type="radio" name="jenisKelamin" id="laki-laki" value="laki-laki">
                                <label for="laki-laki" class="mr-3">Laki-Laki</label>
                                <input type="radio" name="jenisKelamin" id="perempuan" value="perempuan">
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahir" class="label pl-1">Tanggal Lahir</label>
                            <input type="date" class="input-text focus:border-blue-500" name="tanggalLahir">
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