<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>Wisuda UT Daerah Jambi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="m-0 bg-white">
    <section class="bg-gray-50 min-h-screen dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:min-h-screen lg:py-4">
            <div
                class="w-full p-6 bg-white border-t-4 border-t-blue-700 shadow dark:border md:mt-0 sm:max-w-md lg:max-w-2xl dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <div class="w-full block text-center">
                    <div class="">
                        <h1
                            class="mb-1 text-lg font-bold leading-tight tracking-tight text-gray-900 md:text-xl dark:text-white">
                            Data Wisudawan
                        </h1>
                        <p class="font-light text-gray-500 dark:text-gray-400">Universitas Terbuka Daerah Jambi Periode
                            II Tahun Akademik 2023/2024</p>
                    </div>
                </div>
                <div class="relative overflow-auto w-full mt-5">
                    <table class="w-full text-xs lg:text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    nim
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->nim}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    nama
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->nama}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    fakultas
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->fakultas}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    prodi
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->prodi}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    Tgl. seminar
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{date('d-m-Y', strtotime($wisudawan->tgl_seminar))}} /
                                    {{$wisudawan->waktu_seminar}} WIB
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    Tgl. wisuda
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{date('d-m-Y', strtotime($wisudawan->tgl_wisuda))}} / {{$wisudawan->waktu_wisuda}}
                                    WIB
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    lokasi
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->lokasi}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 uppercase">
                                    No. Bangku
                                </td>
                                <td class="px-6 py-4 text-3xl font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    @if(strlen(strval($wisudawan->no_bangku)) == 1)
                                    {{"00".$wisudawan->no_bangku}}
                                    @elseif(strlen(strval($wisudawan->no_bangku)) == 2)
                                    {{"0".$wisudawan->no_bangku}}
                                    @elseif(strlen(strval($wisudawan->no_bangku)) == 3)
                                    {{$wisudawan->no_bangku}}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table class="my-5 w-full text-xs lg:text-sm text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <td>Hadir Seminar</td>
                            <td>Hadir Wisuda</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$wisudawan->hadir_seminar != null ? $wisudawan->hadir_seminar : "-"}}</td>
                                <td>{{$wisudawan->hadir_wisuda != null ? $wisudawan->hadir_wisuda : "-"}}</td>
                            </tr>    
                        </tbody>
                    </table>
                    <div class="flex justify-center items-center gap-4">
                        <button data-modal-target="modal-qrcode" data-modal-toggle="modal-qrcode" class="w-full text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button">
                            QR Code
                          </button>
                        <a href="{{$wisudawan->gmap}}" target="_blank"
                            class="w-full text-blue-700 hover:text-white block text-center border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                            Lokasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="modal-qrcode" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        QR-Code {{$wisudawan->nim}}
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-qrcode">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4 text-black dark:text-black bg-white dark:bg-white text-center flex justify-center items-center">
                    {{QrCode::size(320)->generate($wisudawan->nim)}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            localStorage.theme = 'light';
        });
    </script>
</body>

</html>