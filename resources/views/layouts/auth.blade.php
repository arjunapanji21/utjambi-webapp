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
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="h-14" src="{{asset('images/logo_utjambi.webp')}}" alt="logo">
            </a>
            @yield('content')
        </div>
      </section>
</body>
</html>