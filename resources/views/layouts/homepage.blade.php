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
                        <a href="https://www.instagram.com/ut_jambi/" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                        <a href="https://www.facebook.com/UTDaerahJambi/" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="https://twitter.com/utjambi" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="https://www.tiktok.com/@ut_jambi17" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                            </svg>
                            <span class="sr-only">Tiktok page</span>
                        </a>
                        <a href="https://www.youtube.com/channel/UCxP2d1LhWCImVwz5I-aMSWA" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
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
    <header class="sticky top-0 z-40 ">
        <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900 shadow">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="{{route('homepage')}}" class="flex items-center space-x-3 mt-2 rtl:space-x-reverse">
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
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-6 text-sm rtl:space-x-reverse items-center">
                        <li>
                            <a href="{{route('homepage')}}"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 capitalize">beranda</a>
                        </li>
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
                            <button id="menu-mahasiswa-button"
                                data-collapse-toggle="menu-mahasiswa-dropdown"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 capitalize">mahasiswa
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </li>
                        <li>
                            <button id="menu-layanan-button"
                                data-collapse-toggle="menu-layanan-dropdown"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 capitalize">layanan
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </li>
                        <li>
                            <button id="menu-kegiatan-button"
                                data-collapse-toggle="menu-kegiatan-dropdown"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 capitalize">kegiatan
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 capitalize">hubungi kami</a>
                        </li>
                        <li>
                            <div class="flex flex-row gap-2 items-center justify-end">
                                <a href="{{route('login')}}" class="py-2.5 px-5 text-sm text-gray-400 focus:outline-none bg-white rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">Masuk</a>
                                <a href="https://admisi-sia.ut.ac.id/auth/registrasi/mahasiswa-baru/v2" target="_blank" class="text-white bg-gradient-to-r from-primary-500 via-primary-600 to-primary-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Registrasi</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu-profil-dropdown" class="mt-1 megamenu hidden">
                <div
                    class="grid max-w-screen-xl gap-5 absolute left-0 right-0 bg-white shadow-lg rounded-lg px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
                    <a href="https://maps.app.goo.gl/PXbNFdXnyaAY6uwy9" target="_blank"
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
                            <a href="{{route('profil.direktur')}}" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Direktur UT Jambi
                            </a>
                        </li>
                        <li>
                            <a href="{{route('profil.manajer_administrasi')}}" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Administrasi Umum
                            </a>
                        </li>
                        <li>
                            <a href="{{route('profil.manajer_marketing')}}" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Marketing & Registrasi
                            </a>
                        </li>
                        <li>
                            <a href="{{route('profil.manajer_pembelajaran')}}" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                Manajer Pembelajaran & Ujian
                            </a>
                        </li>
                        <li>
                            <a href="{{route('profil.staf')}}" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
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
            <div id="menu-mahasiswa-dropdown" class="mt-1 megamenu hidden">
                <div
                    class="grid max-w-screen-xl absolute left-0 right-0 bg-white shadow-lg rounded-lg px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
                    <ul class="mb-4 space-y-4 md:mb-0" aria-labelledby="menu-mahasiswa-button">
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
            <div id="menu-layanan-dropdown" class="mt-1 megamenu hidden">
                <div
                    class="grid max-w-screen-xl absolute left-0 right-0 bg-white shadow-lg rounded-lg px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
                    <ul class="mb-4 space-y-4 md:mb-0" aria-labelledby="menu-layanan-button">
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
            <div id="menu-kegiatan-dropdown" class="mt-1 megamenu hidden">
                <div
                    class="grid max-w-screen-xl absolute left-0 right-0 bg-white shadow-lg rounded-lg px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
                    <ul class="mb-4 space-y-4 md:mb-0" aria-labelledby="menu-kegiatan-button">
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
                <div class="mb-6 md:mb-0 max-w-md">
                    <a href="" class="flex items-center mb-5">
                        <img src="{{asset('images/logo_utjambi.webp')}}"
                            class="h-14 bg-gray-100 dark:bg-white px-4 py-2 rounded-lg" alt="Logo UT Jambi" />
                    </a>
                    <ul class="text-gray-300  dark:text-white font-medium flex flex-col gap-4">
                        <li>
                            <a href="https://maps.app.goo.gl/PXbNFdXnyaAY6uwy9" target="_blank" class="flex flex-row gap-3 items-center hover:underline hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-4 h-4" fill="currentColor"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            Jl. Gajah Mada No.51, Lb. Bandung, Kec. Jelutung, Kota Jambi, Jambi 36135
                            </a>
                        </li>
                        <li>
                            <a href="mailto:jambi@ecampus.ut.ac.id" target="_blank" class="flex flex-row gap-3 items-center hover:underline hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M215.4 96H144 107.8 96v8.8V144v40.4 89L.2 202.5c1.6-18.1 10.9-34.9 25.7-45.8L48 140.3V96c0-26.5 21.5-48 48-48h76.6l49.9-36.9C232.2 3.9 243.9 0 256 0s23.8 3.9 33.5 11L339.4 48H416c26.5 0 48 21.5 48 48v44.3l22.1 16.4c14.8 10.9 24.1 27.7 25.7 45.8L416 273.4v-89V144 104.8 96H404.2 368 296.6 215.4zM0 448V242.1L217.6 403.3c11.1 8.2 24.6 12.7 38.4 12.7s27.3-4.4 38.4-12.7L512 242.1V448v0c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64v0zM176 160H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                                jambi@ecampus.ut.ac.id
                            </a>
                        </li>
                        <li>
                            <a href="tel:074125753" target="_blank" class="flex flex-row gap-3 items-center hover:underline hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>
                                (0741) 25753
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col mt-10 lg:mt-0 lg:flex-row gap-10 lg:gap-20">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Fakultas & Pascasarjana</h2>
                        <ul class="text-gray-300  dark:text-white font-medium flex flex-col gap-4">
                            <li>
                                <a href="https://fkip.ut.ac.id/" target="_blank" class="hover:underline hover:text-gray-100">Fakultas Keguruan dan Ilmu Pendidikan</a>
                            </li>
                            <li>
                                <a href="https://fhisip.ut.ac.id/" target="_blank" class="hover:underline hover:text-gray-100">Fakultas Hukum, Ilmu Sosial, dan Ilmu Politik</a>
                            </li>
                            <li>
                                <a href="https://fst.ut.ac.id/" target="_blank" class="hover:underline hover:text-gray-100">Fakultas Sains dan Teknologi</a>
                            </li>
                            <li>
                                <a href="https://feb.ut.ac.id/" target="_blank" class="hover:underline hover:text-gray-100">Fakultas Ekonomi dan Bisnis</a>
                            </li>
                            <li>
                                <a href="https://pasca.ut.ac.id/" target="_blank" class="hover:underline hover:text-gray-100">Sekolah Pascasarjana</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-row gap-20">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Follow us</h2>
                            <ul class="text-gray-300  dark:text-white font-medium flex flex-col gap-4">
                                <li>
                                    <a href="https://www.youtube.com/channel/UCxP2d1LhWCImVwz5I-aMSWA" target="_blank"
                                        class="hover:underline hover:text-gray-100 ">YouTube</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ut_jambi/" target="_blank"
                                        class="hover:underline hover:text-gray-100 ">Instagram</a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/UTDaerahJambi/" target="_blank"
                                        class="hover:underline hover:text-gray-100">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/@ut_jambi17" target="_blank"
                                        class="hover:underline hover:text-gray-100">Tiktok</a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/utjambi" target="_blank"
                                        class="hover:underline hover:text-gray-100">X Twitter</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/ut-jambi" target="_blank"
                                        class="hover:underline hover:text-gray-100">LinkedIn</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Quick Links</h2>
                            <ul class="text-gray-300  dark:text-white font-medium flex flex-col gap-4">
                                <li>
                                    <a href="https://admisi-sia.ut.ac.id/" target="_blank"
                                        class="hover:underline hover:text-gray-100">Admisi SIA</a>
                                </li>
                                <li>
                                    <a href="https://ut.ac.id" target="_blank" class="hover:underline hover:text-gray-100">UT Pusat</a>
                                </li>
                                <li>
                                    <a href="https://aceh.ut.ac.id/ut-daerah" target="_blank" class="hover:underline hover:text-gray-100">UT Daerah</a>
                                </li>
                                <li>
                                    <a href="http://ecampus.ut.ac.id/" target="_blank" class="hover:underline hover:text-gray-100">WEBMAIL</a>
                                </li>
                                <li>
                                    <a href="http://www.kemdikbud.go.id/" target="_blank" class="hover:underline hover:text-gray-100">KEMDIKBUD</a>
                                </li>
                                <li>
                                    <a href="https://pddikti.kemdikbud.go.id/" target="_blank" class="hover:underline hover:text-gray-100">PD-DIKTI</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-100 sm:text-center dark:text-white">© 2023-{{date('Y')}} <a href=""
                        class="hover:underline">jambi.ut.ac.id</a>. All Rights Reserved.
                </span>
                <div class="flex sm:justify-center">
                    <a href="https://www.instagram.com/ut_jambi/" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4"
                            fill="currentColor">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="https://www.facebook.com/UTDaerahJambi/" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4"
                            fill="currentColor">
                            <path
                                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="https://twitter.com/utjambi" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                            fill="currentColor">
                            <path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="https://www.tiktok.com/@ut_jambi17" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4"
                            fill="currentColor">
                            <path
                                d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                        </svg>
                        <span class="sr-only">Tiktok page</span>
                    </a>
                    <a href="https://www.youtube.com/channel/UCxP2d1LhWCImVwz5I-aMSWA" target="_blank" class="text-white hover:text-primary-700 hover:bg-white hover:rounded p-1 ms-5">
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
    </footer>
</body>

@yield('script')

</html>