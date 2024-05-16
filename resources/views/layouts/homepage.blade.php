<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>UT Daerah Jambi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="m-0">
    <div class="hidden md:block bg-primary-700 text-white text-xs">
        <div class="flex flex-wrap justify-between items-center max-w-screen-xl mx-auto px-6 py-2">
            <div class="flex flex-wrap justify-start gap-4">
                <p class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3" fill="currentColor">
                        <path
                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                    </svg>
                    Senin-Kamis: 08.00 - 16.30 WIB | Jum'at: 08.00 - 17.00 WIB
                </p>
                <p class="flex flex-wrap gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3" fill="currentColor">
                        <path
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    Jl. Gajah Mada No.51, Lb. Bandung, Kec. Jelutung, Kota Jambi
                </p>
            </div>
            <div class="flex flex-wrap items-center">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="#" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                        <a href="#" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                            </svg>
                            <span class="sr-only">Tiktok page</span>
                        </a>
                        <a href="#" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                            </svg>
                            <span class="sr-only">YouTube page</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="sticky top-0 z-50 ">


        <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{asset('images/logo_utjambi.webp')}}" class="h-9" alt="UT Jambi Logo" />
                </a>
                <button id="main-menu-drawer" data-collapse-toggle="main-menu" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="main-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div id="main-menu"
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                        <li>
                            <button id="menu-profil-button"
                                data-collapse-toggle="menu-profil-dropdown"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 capitalize">profil
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </li>
                        <li>
                            <button id="menu-akademik-button"
                                data-collapse-toggle="menu-akademik-dropdown"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 capitalize">akademik
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu-profil-dropdown" class="mt-1 megamenu hidden">
                <div
                    class="grid max-w-screen-xl gap-5 absolute left-0 right-0 bg-white shadow-lg rounded-lg px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
                    <a href="#"
                        class="p-8 bg-local w-full bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken flex flex-col justify-end"
                        style="background-image: url('{{asset('images/kantor-ut-jambi.webp')}}')">
                        <p class="max-w-xl mb-5 font-bold leading-tight tracking-tight text-white">Kantor Universitas Terbuka Daerah Jambi</p>
                        <button type="button"
                            class="inline-flex w-max items-center px-2.5 py-1.5 font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                            Lihat Lokasi
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </a>
                    <ul class="mb-4 space-y-4 md:mb-0 lg:border-l-2 lg:pl-5" aria-labelledby="menu-profil-button">
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Direktur UT Jambi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Administrasi Umum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Marketing & Registrasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Pembelajaran & Ujian
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Staf UT Jambi
                            </a>
                        </li>
                    </ul>
                    <ul class="mb-4 space-y-4 md:mb-0 lg:border-l-2 lg:pl-5">
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Visi & Misi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Struktur Organisasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                UT Pusat
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Akreditasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Brosur Digital
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu-akademik-dropdown" class="mt-1 megamenu hidden">
                <div
                    class="grid max-w-screen-xl absolute left-0 right-0 bg-white shadow-lg rounded-lg px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
                    <ul class="mb-4 space-y-4 md:mb-0" aria-labelledby="menu-akademik-button">
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Direktur UT Jambi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Administrasi Umum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Marketing & Registrasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Pembelajaran & Ujian
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Staf UT Jambi
                            </a>
                        </li>
                    </ul>
                    <ul class="mb-4 space-y-4 md:mb-0">
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Visi & Misi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Struktur Organisasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                UT Pusat
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Akreditasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Brosur Digital
                            </a>
                        </li>
                    </ul>
                    <a href="#"
                        class="p-8 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken flex flex-col justify-end"
                        style="background-image: url('{{asset('images/kantor-ut-jambi.webp')}}')">
                        <p class="max-w-xl mb-5 font-bold leading-tight tracking-tight text-white">Kantor Universitas Terbuka Daerah Jambi</p>
                        <button type="button"
                            class="inline-flex w-max items-center px-2.5 py-1.5 font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                            Lihat Lokasi
                            <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </nav>

    </header>

    @yield('content')

    <footer class="border-t-8 border-t-yellow-300 bg-primary-700 dark:bg-primary-900">
        <div class="max-w-screen-xl mx-auto w-full p-4 py-6 lg:py-8 lg:px-6">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="" class="flex items-center">
                        <img src="{{asset('images/logo_utjambi.webp')}}"
                            class="h-14 bg-gray-100 dark:bg-white px-4 py-2 rounded-lg" alt="Logo UT Jambi" />
                    </a>
                    <p class="text-gray-100 dark:text-white mt-4">Jl. Gajah Mada No.51, Lb. Bandung, Kec. Jelutung, Kota
                        Jambi, Jambi 36135</p>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-300  dark:text-white font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline hover:text-gray-100">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline hover:text-gray-100">Tailwind
                                    CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-300  dark:text-white font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite"
                                    class="hover:underline hover:text-gray-100 ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy"
                                    class="hover:underline hover:text-gray-100">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Quick Links</h2>
                        <ul class="text-gray-300  dark:text-white font-medium">
                            <li class="mb-4">
                                <button data-modal-target="authentication-modal"
                                    data-modal-toggle="authentication-modal"
                                    class="hover:underline hover:text-gray-100">Login Admin</button>
                            </li>
                            <li>
                                <a href="#" class="hover:underline hover:text-gray-100">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-100 sm:text-center dark:text-white">© 2023-{{date('Y')}} <a href=""
                        class="hover:underline">jambi.ut.ac.id</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-300 hover:text-gray-100 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-100 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-100 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-100 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-gray-100 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- modal login admin -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Dashboard UT Jambi
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{route('auth')}}" method="post">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="name@company.com" required />
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-primary-700 dark:focus:ring-blue-800">Login
                            as Admin</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Forgot password? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Reset
                                account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>