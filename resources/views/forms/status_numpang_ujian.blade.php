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
                                <span
                                    class="bg-primary-100 text-primary-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg dark:bg-primary-900 dark:text-primary-300">{{$data->status}}</span>
                            </td>
                        </tr>
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