<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>Wisuda UT Daerah Jambi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="m-0">
    <section class="bg-gray-50 min-h-screen dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:min-h-screen lg:py-4">
            <div
                class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md lg:max-w-2xl dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <div class="flex flex-col lg:flex-row justify-between items-center gap-10">
                    <div>
                        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                            <img src="{{asset('images/logo_utjambi.webp')}}" width="240" alt="logo">
                        </a>
                        <h1
                            class="mb-1 text-lg font-bold leading-tight tracking-tight text-gray-900 md:text-xl dark:text-white">
                            Data Wisudawan
                        </h1>
                        <p class="font-light text-gray-500 dark:text-gray-400">Universitas Terbuka Daerah Jambi Periode
                            I <br />
                            Tahun Akademik 2023/2024</p>
                    </div>
                    <div class="text-black bg-white p-5">
                        {{QrCode::size(128)->generate($wisudawan->nim)}}
                    </div>
                </div>
                <div class="relative overflow-auto w-full mt-10">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" colspan="2" class="px-6 py-3">
                                    Data Wisudawan/wati
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    nim
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->nim}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    nama
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->nama}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    fakultas
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->fakultas}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    prodi
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->prodi}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    kabko
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->kabko}}
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    No. Bangku
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if(strlen(strval($wisudawan->no_bangku)) == 1)
                                    {{"00".$wisudawan->no_bangku}}
                                    @elseif(strlen(strval($wisudawan->no_bangku)) == 2)
                                    {{"0".$wisudawan->no_bangku}}
                                    @elseif(strlen(strval($wisudawan->no_bangku)) == 3)
                                    {{$wisudawan->no_bangku}}
                                    @endif
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    Tanggal seminar
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{date('d-m-Y', strtotime($wisudawan->tgl_seminar))}} /
                                    {{$wisudawan->waktu_seminar}} WIB
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    tanggal wisuda
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{date('d-m-Y', strtotime($wisudawan->tgl_wisuda))}} / {{$wisudawan->waktu_wisuda}}
                                    WIB
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    lokasi
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$wisudawan->lokasi}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table class="my-5 w-full text-sm text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <th>Waktu Hadir Seminar</th>
                            <th>Waktu Hadir Wisuda</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$wisudawan->absensi_seminar != null ? $wisudawan->absensi_seminar : "-"}}</td>
                                <td>{{$wisudawan->absensi_wisuda != null ? $wisudawan->absensi_wisuda : "-"}}</td>
                            </tr>    
                        </tbody>
                    </table>
                    <a href="{{$wisudawan->gmap}}" target="_blank"
                        class="text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                        Lokasi</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>