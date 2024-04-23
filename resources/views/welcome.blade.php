<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UT Daerah Jambi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <header class="sticky top-0 z-50">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{asset('images/logo_utjambi.png')}}" class="h-7 lg:h-9" alt="Logo UT Jambi" />
                </a>
                <div class="flex items-center xl:order-2 space-x-1 xl:space-x-2 rtl:space-x-reverse">
                    <a href="#"
                        class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 xl:px-5 xl:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800  hover:text-blue-600">Masuk</a>
                    <a href="#"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 xl:px-5 xl:py-2.5 dark:bg-blue-600 flex items-center dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="mr-2 -ml-1 w-4 h-4" fill="currentColor"><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V299.6l-94.7 94.7c-8.2 8.2-14 18.5-16.8 29.7l-15 60.1c-2.3 9.4-1.8 19 1.4 27.8H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/></svg>
                        Registrasi</a>
                    <button data-collapse-toggle="mega-menu-icons" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mega-menu-icons" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div id="mega-menu-icons"
                    class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1 text-sm">
                    <ul class="flex flex-col mt-4 font-medium xl:flex-row xl:mt-0 xl:space-x-8 rtl:space-x-reverse">
                        <li>
                            <button id="profil-menu-button" data-dropdown-toggle="profil-menu"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 xl:w-auto hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-600 xl:p-0 dark:text-white xl:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 xl:dark:hover:bg-transparent dark:border-gray-700">
                                Profil
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="profil-menu"
                                class="absolute max-h-96 overflow-auto z-10 grid hidden text-sm bg-white border border-gray-100 rounded-lg shadow-xl dark:border-gray-700 w-full lg:grid-cols-3  p-4 pt-0 xl:justify-center xl:items-center dark:bg-gray-700">
                                <div class="order-2 px-10 py-4 text-base xl:text-xl font-bold text-center justify-center items-center lg:flex flex-col gap-4 text-gray-900 dark:text-white">
                                    <img src="{{asset('images/kantor-ut-jambi.jpg')}}" alt="Kantor UT Jambi" class="w-full lg:max-w-md mx-auto rounded-lg">
                                    <h5 class="py-4 lg:py-0">Kantor UT Daerah Jambi</h5>
                                    <a href="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 w-full max-w-md py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat Lokasi</a>
                                </div>
                                <div class="order-1 p-4 pb-0 lg:text-lg lg:leading-10 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="profil-menu-button">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Sejarah UT</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                Sejarah UT
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Visi & Misi</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
                                                    <path
                                                        d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                </svg>
                                                Visi & Misi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Struktur Organisasi</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Struktur Organisasi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Akreditasi BAN-PT</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Akreditasi BAN-PT
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Staf UT Daerah Jambi</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Brosur Digital
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 lg:text-lg lg:leading-10 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="profil-menu-button">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Direktur UT Daerah Jambi</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                Direktur UT Daerah Jambi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Kepala Sub-Bagian Tata Usaha</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
                                                    <path
                                                        d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                </svg>
                                                Kepala Sub-Bagian Tata Usaha
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Manajer Registrasi & Marketing</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Manajer Registrasi & Marketing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Manajer Pembelajaran & Ujian</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Manajer Pembelajaran & Ujian
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Staf UT Daerah Jambi</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Staf UT Daerah Jambi
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <button id="akademik-menu-button" data-dropdown-toggle="akademik-menu"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 xl:w-auto hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-600 xl:p-0 dark:text-white xl:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 xl:dark:hover:bg-transparent dark:border-gray-700">
                                Akademik
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="akademik-menu"
                                class="absolute z-10 grid hidden w-auto mx-20 grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-xl dark:border-gray-700 lg:w-full lg:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="akademik-menu-button">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">About us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Library</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                    <path
                                                        d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                    <path
                                                        d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                                </svg>
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Resources</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
                                                    <path
                                                        d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                </svg>
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Pro Version</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Blog</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
                                                    <path d="M6 5H5v1h1V5Z" />
                                                </svg>
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Newsletter</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Playground</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z" />
                                                </svg>
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">License</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 text-gray-900 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Contact Us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z" />
                                                </svg>
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Support Center</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 21 21">
                                                    <path
                                                        d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z" />
                                                </svg>
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Terms</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 20">
                                                    <path
                                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="mahasiswa-menu-button" data-dropdown-toggle="mahasiswa-menu"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 xl:w-auto hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-600 xl:p-0 dark:text-white xl:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 xl:dark:hover:bg-transparent dark:border-gray-700">
                                Mahasiswa
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="mahasiswa-menu"
                                class="absolute z-10 grid hidden w-auto mx-20 grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-xl dark:border-gray-700 lg:w-full lg:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mahasiswa-menu-button">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">About us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Library</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                    <path
                                                        d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                    <path
                                                        d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                                </svg>
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Resources</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
                                                    <path
                                                        d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                </svg>
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Pro Version</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Blog</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
                                                    <path d="M6 5H5v1h1V5Z" />
                                                </svg>
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Newsletter</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Playground</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z" />
                                                </svg>
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">License</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 text-gray-900 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Contact Us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z" />
                                                </svg>
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Support Center</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 21 21">
                                                    <path
                                                        d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z" />
                                                </svg>
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Terms</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 20">
                                                    <path
                                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="layanan-menu-button" data-dropdown-toggle="layanan-menu"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 xl:w-auto hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-600 xl:p-0 dark:text-white xl:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 xl:dark:hover:bg-transparent dark:border-gray-700">
                                Layanan
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="layanan-menu"
                                class="absolute z-10 grid hidden w-auto mx-20 grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-xl dark:border-gray-700 lg:w-full lg:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="layanan-menu-button">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">About us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Library</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                    <path
                                                        d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                    <path
                                                        d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                                </svg>
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Resources</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
                                                    <path
                                                        d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                </svg>
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Pro Version</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Blog</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
                                                    <path d="M6 5H5v1h1V5Z" />
                                                </svg>
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Newsletter</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Playground</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z" />
                                                </svg>
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">License</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 text-gray-900 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Contact Us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z" />
                                                </svg>
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Support Center</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 21 21">
                                                    <path
                                                        d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z" />
                                                </svg>
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Terms</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 20">
                                                    <path
                                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="kegiatan-menu-button" data-dropdown-toggle="kegiatan-menu"
                                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 xl:w-auto hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-600 xl:p-0 dark:text-white xl:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 xl:dark:hover:bg-transparent dark:border-gray-700">
                                Kegiatan
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="kegiatan-menu"
                                class="absolute z-10 grid hidden w-auto mx-20 grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-xl dark:border-gray-700 lg:w-full lg:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="kegiatan-menu-button">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">About us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Library</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                    <path
                                                        d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                    <path
                                                        d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                                </svg>
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Resources</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
                                                    <path
                                                        d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                </svg>
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Pro Version</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                                </svg>
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 xl:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Blog</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
                                                    <path d="M6 5H5v1h1V5Z" />
                                                </svg>
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Newsletter</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                                </svg>
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Playground</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 18">
                                                    <path
                                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z" />
                                                </svg>
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">License</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 text-gray-900 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Contact Us</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 14 20">
                                                    <path
                                                        d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z" />
                                                </svg>
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Support Center</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500 group-hover:border-primary-600"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 21 21">
                                                    <path
                                                        d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z" />
                                                </svg>
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                <span class="sr-only">Terms</span>
                                                <svg class="w-8 h-8 me-2 border border-gray-400 p-2 rounded-lg border-spacing-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 18 20">
                                                    <path
                                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                                </svg>
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-600 xl:p-0 dark:text-white xl:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 xl:dark:hover:bg-transparent dark:border-gray-700">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="bg-white min-h-screen dark:bg-gray-900">
        <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="w-full grid lg:grid-cols-2 gap-10 justify-center items-center">
                <div class="w-full text-center lg:text-left pt-10 lg:pt-0">
                    <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
                        <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">Pendaftaran Magister S2 Sedang Dibuka!</span> 
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                    <div class="flex justify-center lg:justify-start items-center gap-2 italic text-sm lg:text-lg">
                        <p>
                            <span class="font-extrabold">#</span>KuliahOnline
                        </p>
                        <p>
                            <span class="font-extrabold">#</span>KampusNegeri
                        </p>
                        <p>
                            <span class="font-extrabold">#</span>KualitasDunia
                        </p>
                    </div>
                    <h2 class="mb-4 text-4xl lg:text-6xl tracking-tight font-bold text-gray-900 dark:text-white">
                        Universitas Terbuka Daerah Jambi</h2>
                    <p class="mb-8 lg:text-2xl text-gray-500 dark:text-gray-400">Perguruan Tinggi Negeri (PTN)
                        dengan sistem pembelajaran jarak jauh terbaik di Indonesia kini hadir di wilayah Provinsi Jambi.
                    </p>
                    <div
                        class="flex flex-col space-y-4 sm:flex-row sm:justify-center lg:justify-start sm:space-y-0 sm:space-x-4">
                        <a href="#"
                            class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="mr-2 -ml-1 w-5 h-5" fill="currentColor"><path d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z"/></svg>
                            Daftar Sekarang
                        </a>
                        <a href="#"
                            class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 -ml-1 w-5 h-5" fill="currentColor"><path d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"/></svg>
                            Tanya Admin
                        </a>
                    </div>
                </div>
                <div class="flex justify-end items-center">
                    <div class="relative w-full">
                        <div class="absolute right-52 top-8 md:right-52 md:top-14 lg:right-72 lg:top-28 xl:right-80 xl:top-32 ">
                            <a href="#" class="block max-w-sm p-4 bg-gradient-to-r from-gray-200 via-gray-100 to-gray-50 rounded-lg shadow  border border-gray-100">
                                <h5 class="mb-2 text-sm lg:text-base font-bold tracking-tight text-gray-900 dark:text-white">Biaya Terjangkau!</h5>
                                <p class="font-normal text-xs lg:text-sm text-gray-800 dark:text-gray-500">SPP Mulai Dari <span class="font-bold text-primary-700">Rp. 1,3 Jutaan</span></p>
                                </a>  
                        </div>
                        <img class="rounded-lg ml-auto h-96 lg:h-[640px] object-cover"
                            src="{{asset('/images/mahasiswi-min.png')}}"
                            alt="Mahasiswi UT">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary-700 dark:bg-primary-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                <dl class="grid max-w-screen-lg gap-8 mx-auto text-white sm:grid-cols-2 md:grid-cols-4 dark:text-white">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">2,078,192</dt>
                        <dd class="font-light text-gray-300 dark:text-gray-100">Alumni</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">550,052</dt>
                        <dd class="font-light text-gray-300 dark:text-gray-100">Mahasiswa Aktif</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">46</dt>
                        <dd class="font-light text-gray-300 dark:text-gray-100">Program Studi</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">39</dt>
                        <dd class="font-light text-gray-300 dark:text-gray-100">UT Daerah</dd>
                    </div>
                </dl>
            </div>
          </div> 
    </section>   

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto text-center max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mx-auto mb-8 lg:mb-16">
                <h2 class="mb-4 text-2xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Keunggulan Universitas Terbuka Dari Universitas Konvensional Lainnya</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Universitas Terbuka hadir membantu masyarakat hingga Polosok Negeri untuk dapat melanjutkan Pendidikan di Perguruan Tinggi Negeri.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-8 md:space-y-0">
                <div class="flex flex-col justify-center items-center bg-primary-100  p-4 rounded-lg hover:shadow-lg hover:bg-primary-200 hover:cursor-pointer">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-white lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Terakreditasi A & B</h3>
                    <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka telah terakreditasi oleh BAN-PT dengan nilai A (unggul) & B (sangat baik).</p>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary-100  p-4 rounded-lg hover:shadow-lg hover:bg-primary-200 hover:cursor-pointer">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-white lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M112 0C99.1 0 87.4 7.8 82.5 19.7l-66.7 160-13.3 32c-6.8 16.3 .9 35 17.2 41.8s35-.9 41.8-17.2L66.7 224h90.7l5.1 12.3c6.8 16.3 25.5 24 41.8 17.2s24-25.5 17.2-41.8l-13.3-32-66.7-160C136.6 7.8 124.9 0 112 0zm18.7 160H93.3L112 115.2 130.7 160zM256 32v96 96c0 17.7 14.3 32 32 32h80c44.2 0 80-35.8 80-80c0-23.1-9.8-43.8-25.4-58.4c6-11.2 9.4-24 9.4-37.6c0-44.2-35.8-80-80-80H288c-17.7 0-32 14.3-32 32zm96 64H320V64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16zm-32 64h32 16c8.8 0 16 7.2 16 16s-7.2 16-16 16H320V160zM566.6 310.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L352 434.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0l192-192z"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Bisa Alih Kredit</h3>
                    <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka menerima peralihan kredit dari kampus lama kamu sehingga kamu tidak perlu mengulang perkuliahan dari awal lagi.</p>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary-100  p-4 rounded-lg hover:shadow-lg hover:bg-primary-200 hover:cursor-pointer">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-white lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Biaya Terjangkau</h3>
                    <p class="text-gray-500 dark:text-gray-400">Biaya kuliah di Universitas Terbuka sangat terjangkau sehingga tidak membuat kantong kering.</p>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary-100  p-4 rounded-lg hover:shadow-lg hover:bg-primary-200 hover:cursor-pointer">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-white lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 352h8.2c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM320 352H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H360.2C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16v48h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V304c0-8.8 7.2-16 16-16z"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Waktu Kuliah Fleksibel</h3>
                    <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka memberikan kebebasan dalam menentukan waktu perkuliahan sehingga kamu bisa kuliah sesuai gayamu.</p>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary-100  p-4 rounded-lg hover:shadow-lg hover:bg-primary-200 hover:cursor-pointer">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-white lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M218.3 8.5c12.3-11.3 31.2-11.3 43.4 0l208 192c6.7 6.2 10.3 14.8 10.3 23.5H336c-19.1 0-36.3 8.4-48 21.7V208c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h64V416H112c-26.5 0-48-21.5-48-48V256H32c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8.1-35.2l208-192zM352 304V448H544V304H352zm-48-16c0-17.7 14.3-32 32-32H560c17.7 0 32 14.3 32 32V448h32c8.8 0 16 7.2 16 16c0 26.5-21.5 48-48 48H544 352 304c-26.5 0-48-21.5-48-48c0-8.8 7.2-16 16-16h32V288z"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Bisa Kuliah <span class="italic">Full Online</span></h3>
                    <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka memiliki sistem pembelajaran <span class="italic font-semibold">full online</span> sehingga kamu bisa kuliah dari rumah ataupun darimana saja.</p>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary-100  p-4 rounded-lg hover:shadow-lg hover:bg-primary-200 hover:cursor-pointer">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-white lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M218.3 8.5c12.3-11.3 31.2-11.3 43.4 0l208 192c6.7 6.2 10.3 14.8 10.3 23.5H336c-19.1 0-36.3 8.4-48 21.7V208c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h64V416H112c-26.5 0-48-21.5-48-48V256H32c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8.1-35.2l208-192zM352 304V448H544V304H352zm-48-16c0-17.7 14.3-32 32-32H560c17.7 0 32 14.3 32 32V448h32c8.8 0 16 7.2 16 16c0 26.5-21.5 48-48 48H544 352 304c-26.5 0-48-21.5-48-48c0-8.8 7.2-16 16-16h32V288z"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Tanpa Batasan Usia</h3>
                    <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka memberi kesempatan kepada siapa saja yang ingin melanjutkan pendidikan tanpa memandang usia.</p>
                </div>
                <div class="flex flex-col justify-center items-center bg-primary-100  p-4 rounded-lg hover:shadow-lg hover:bg-primary-200 hover:cursor-pointer">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-white lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Tidak Ada Sistem DO <span class="italic">(Drop Out)</span></h3>
                    <p class="text-gray-500 dark:text-gray-400">Di Universitas Terbuka kamu bisa mengambil cuti jika lelah dalam berkuliah dan kembali kapanpun kamu siap untuk melanjutkan perkuliahan.</p>
                </div>
                <div class="text-left flex flex-col justify-center gap-4 items-start p-4 rounded-lg">
                    <p class="text-gray-500 dark:text-gray-400">Bergabung sekarang menjadi mahasiswa Universitas Terbuka, jangan tunda waktumu untuk kuliah!
                    </p>
                    <a href="" class="ml-auto flex gap-2 items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Registrasi
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3 h-3  lg:w-4 lg:h-4 dark:text-primary-300" fill="currentColor"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                    </a>
                </div>
            </div>
        </div>
      </section>

    <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{asset('images/logo_utjambi.png')}}" alt="" width="300">
            </a>
            <p class="my-6 text-gray-500 dark:text-gray-400">Open-source library of over 400+ web components and
                interactive elements built for better web.</p>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Premium</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Campaigns</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Blog</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Affiliate Program</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">FAQs</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Contact</a>
                </li>
            </ul>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023-{{date('Y')}} <a href="#"
                    class="hover:underline">jambi.ut.ac.id</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>