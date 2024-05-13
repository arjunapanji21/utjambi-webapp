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
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{asset('images/logo_utjambi.webp')}}" width="320" alt="logo">    
            </a>
            <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <h1 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Data Wisudawan
                </h1>
                <p class="font-light text-gray-500 dark:text-gray-400">Universitas Terbuka Daerah Jambi Periode I <br/> Tahun Akademik 2023/2024</p>
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="{{route('wisuda.show')}}" method="post">
                    @csrf
                    <div>
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan NIM Anda</label>
                        <input type="number" name="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="835******" required>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Tampilkan</button>
                </form>
            </div>
        </div>
      </section>
</body>
</html>