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
    <div class="relative">
        <form action="{{route('wisuda.seminar_scan')}}" class="absolute opacity-0 w-0 overflow-hidden fill-transparent" method="get">
            @csrf
            <input id="qrcode" type="number" name="nim" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    @if(!isset($wisudawan))
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
                            N/A
                        </h1>
                        <p class="font-light text-gray-500 dark:text-gray-400">N/A
                        <p class="font-light text-gray-500 dark:text-gray-400">N/A
                    </div>
                    <div class="text-black bg-white p-5">
                        N/A
                    </div>
                </div>
                <div class="relative overflow-auto w-full mt-10">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    No. Bangku Seminar
                                </th>
                                <td class="px-6 py-4 text-4xl font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    N/A
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-5 text-xl font-bold">
                Jumlah Hadir: {{count($hadir)}}/{{count($data)}}
            </div>
        </div>
    </section>
    @else
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
                            {{$wisudawan->nama}} ({{$wisudawan->nim}})
                        </h1>
                        <p class="font-light text-gray-500 dark:text-gray-400">{{$wisudawan->fakultas}} / {{$wisudawan->prodi}}</p>
                        <p class="font-light text-gray-500 dark:text-gray-400">{{$wisudawan->kabko}}</p>
                    </div>
                    <div class="text-black bg-white p-5">
                        {{QrCode::size(128)->generate($wisudawan->nim)}}
                    </div>
                </div>
                <div class="relative overflow-auto w-full mt-10">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-4 uppercase">
                                    No. Bangku Seminar
                                </th>
                                <td class="px-6 py-4 text-4xl font-bold text-gray-900 whitespace-nowrap dark:text-white">
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
            </div>
            <div class="mt-5 text-xl font-bold">
                Jumlah Hadir: {{count($hadir)}}/{{count($data)}}
            </div>
        </div>
    </section>
    @endif
</body>
<script type="module">
    $(document).ready(function() {
        $("#qrcode").focus();
    });
</script>
</html>