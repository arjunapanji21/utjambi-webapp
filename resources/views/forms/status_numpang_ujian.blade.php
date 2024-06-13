<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>{{$title}}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="m-0">
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-lg lg:py-16">
            <img src="{{asset('images/logo_utjambi.webp')}}" class="h-14 mx-auto mb-8" alt="">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">STATUS NUMPANG UJIAN</h2>

            @if($data->status == "Diterima")
            <div id="alert-additional-content-3" class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                  <span class="sr-only">Info</span>
                  <h3 class="text-lg font-medium">Pengajuan Numpang Ujian Diterima!</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    <ul class="mt-1.5 list-disc list-inside">
                        <li>Jadwal di KTPU memang tidak berubah dan tetap sama seperti sebelumnya.</li>
                        <li>Segera melapor ke UT {{explode(" / ", $data->ut_daerah_tujuan)[1]}} untuk mengkonfirmasi lokasi dan jadwal pelaksanaan ujian.</li>
                    </ul>
                </div>
                <div class="flex">
                  <a href="{{asset($data->surat_pengantar)}}" target="_blank" download class="text-white bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="me-2 h-3 w-3" aria-hidden="true" fill="currentColor"><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 232V334.1l31-31c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-72 72c-9.4 9.4-24.6 9.4-33.9 0l-72-72c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l31 31V232c0-13.3 10.7-24 24-24s24 10.7 24 24z"/></svg>
                    Unduh Surat Pengantar
                  </a>
                </div>
            </div>
            @elseif($data->status == "Diproses")
            <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  Pengajuan numpang ujian <span class="font-medium">Sedang diproses!</span>.
                </div>
              </div>
            @endif

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 text-center bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                NIM
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Mahasiswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                UT Daerah Tujuan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Wilayah Ujian Tujuan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tgl. Pindah Lokasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tgl. Pengajuan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status Pengajuan
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$data->nim}}
                            </th>
                            <td class="px-6 py-4">
                                {{$data->nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{explode('/', $data->ut_daerah_tujuan)[1]}}
                            </td>
                            <td class="px-6 py-4">
                                {{explode('/',$data->wilayah_ujian_tujuan)[1]}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->tgl_pindah_lokasi}}
                            </td>
                            <td class="px-6 py-4">
                                {{date('d M Y', strtotime($data->created_at))}}
                            </td>
                            <td class="px-6 py-4">
                                @if($data->status == "Diproses")
                                <span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{$data->status}}</span>
                                @elseif($data->status == "Diterima")
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{$data->status}}</span>
                                @elseif($data->status == "Ditolak")
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{$data->status}}</span>
                                @else
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$data->status}}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto">
                <table
                    class="my-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <th class="text-center">No.</th>
                        <th class="text-center">Kode MK</th>
                        <th class="text-center">Nama MK</th>
                        <th class="text-center">Kode Waktu Ujian</th>
                    </thead>
                    <tbody>
                        @foreach(explode('|',$data->matakuliah) as $mk)
                        <tr>
                            <td class="border text-center">{{$loop->iteration}}</td>
                            <td class="border text-center">{{json_decode($mk)->kode}}
                            </td>
                            <td class="border text-center">{{json_decode($mk)->nama}}
                            </td>
                            <td class="border text-center">
                                {{json_decode($mk)->kode_waktu_ujian}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
            <div class="mt-5 text-center">
                <a href="{{route('form.numpang_ujian_1')}}"
                class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Kembali
            </a>
            </div>
        </div>
    </section>
</body>
<script type="module">
    $(".select2").select2();
</script>

</html>