@extends('layouts.homepage')
@section('content')
<section class="mt-4 flex flex-col dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="w-full grid lg:grid-cols-2 gap-10 justify-center items-center">
            <div class="w-full text-center lg:text-left pt-10 lg:pt-0">
                <a href="#"
                    class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                    role="alert">
                    <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span
                        class="text-sm font-medium">Pendaftaran Magister S2 Sedang Dibuka!</span>
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="mr-2 -ml-1 w-5 h-5"
                            fill="currentColor">
                            <path
                                d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z" />
                        </svg>
                        Daftar Sekarang
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 -ml-1 w-5 h-5"
                            fill="currentColor">
                            <path
                                d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z" />
                        </svg>
                        Tanya Admin
                    </a>
                </div>
            </div>
            <div class="flex justify-end items-center">
                <div class="relative w-full">
                    <div
                        class="absolute right-52 top-8 md:right-52 md:top-14 lg:right-72 lg:top-28 xl:right-80 xl:top-32 ">
                        <a href="#"
                            class="block max-w-sm p-4 bg-gradient-to-r from-gray-200 via-gray-100 to-gray-50 rounded-lg shadow  border border-gray-100">
                            <h5
                                class="mb-2 text-sm lg:text-base font-bold tracking-tight text-gray-900 dark:text-white">
                                Biaya Terjangkau!</h5>
                            <p class="font-normal text-xs lg:text-sm text-gray-800 dark:text-gray-500">SPP Mulai
                                Dari <span class="font-bold text-primary-700">Rp. 1,3 Jutaan</span></p>
                        </a>
                    </div>
                    <img class="rounded-lg ml-auto h-96 lg:h-[640px] object-cover"
                        src="{{asset('/images/mahasiswi-min.webp')}}" alt="Mahasiswi UT">
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
            <h2 class="mb-4 text-2xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Keunggulan Universitas Terbuka Dari Universitas Konvensional Lainnya</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Universitas Terbuka hadir membantu masyarakat
                hingga Polosok Negeri untuk dapat melanjutkan Pendidikan di Perguruan Tinggi Negeri.</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-8 md:space-y-0">
            <div
                class="flex flex-col justify-center items-center bg-white border border-primary-300  p-4 rounded-lg hover:bg-gray-100 hover:cursor-pointer">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                        class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Terakreditasi A & B</h3>
                <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka telah terakreditasi oleh BAN-PT
                    dengan nilai A (unggul) & B (sangat baik).</p>
            </div>
            <div
                class="flex flex-col justify-center items-center bg-white border border-primary-300  p-4 rounded-lg hover:bg-gray-100 hover:cursor-pointer">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                        class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M112 0C99.1 0 87.4 7.8 82.5 19.7l-66.7 160-13.3 32c-6.8 16.3 .9 35 17.2 41.8s35-.9 41.8-17.2L66.7 224h90.7l5.1 12.3c6.8 16.3 25.5 24 41.8 17.2s24-25.5 17.2-41.8l-13.3-32-66.7-160C136.6 7.8 124.9 0 112 0zm18.7 160H93.3L112 115.2 130.7 160zM256 32v96 96c0 17.7 14.3 32 32 32h80c44.2 0 80-35.8 80-80c0-23.1-9.8-43.8-25.4-58.4c6-11.2 9.4-24 9.4-37.6c0-44.2-35.8-80-80-80H288c-17.7 0-32 14.3-32 32zm96 64H320V64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16zm-32 64h32 16c8.8 0 16 7.2 16 16s-7.2 16-16 16H320V160zM566.6 310.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L352 434.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0l192-192z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Bisa Alih Kredit</h3>
                <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka menerima peralihan kredit dari
                    kampus lama kamu sehingga kamu tidak perlu mengulang perkuliahan dari awal lagi.</p>
            </div>
            <div
                class="flex flex-col justify-center items-center bg-white border border-primary-300  p-4 rounded-lg hover:bg-gray-100 hover:cursor-pointer">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Biaya Terjangkau</h3>
                <p class="text-gray-500 dark:text-gray-400">Biaya kuliah di Universitas Terbuka sangat terjangkau
                    sehingga tidak membuat kantong kering.</p>
            </div>
            <div
                class="flex flex-col justify-center items-center bg-white border border-primary-300  p-4 rounded-lg hover:bg-gray-100 hover:cursor-pointer">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 352h8.2c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM320 352H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H360.2C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16v48h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V304c0-8.8 7.2-16 16-16z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Waktu Kuliah Fleksibel</h3>
                <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka memberikan kebebasan dalam
                    menentukan waktu perkuliahan sehingga kamu bisa kuliah sesuai gayamu.</p>
            </div>
            <div
                class="flex flex-col justify-center items-center bg-white border border-primary-300  p-4 rounded-lg hover:bg-gray-100 hover:cursor-pointer">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M218.3 8.5c12.3-11.3 31.2-11.3 43.4 0l208 192c6.7 6.2 10.3 14.8 10.3 23.5H336c-19.1 0-36.3 8.4-48 21.7V208c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h64V416H112c-26.5 0-48-21.5-48-48V256H32c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8.1-35.2l208-192zM352 304V448H544V304H352zm-48-16c0-17.7 14.3-32 32-32H560c17.7 0 32 14.3 32 32V448h32c8.8 0 16 7.2 16 16c0 26.5-21.5 48-48 48H544 352 304c-26.5 0-48-21.5-48-48c0-8.8 7.2-16 16-16h32V288z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Bisa Kuliah <span class="italic">Full
                        Online</span></h3>
                <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka memiliki sistem pembelajaran <span
                        class="italic font-semibold">full online</span> sehingga kamu bisa kuliah dari rumah ataupun
                    darimana saja.</p>
            </div>
            <div
                class="flex flex-col justify-center items-center bg-white border border-primary-300  p-4 rounded-lg hover:bg-gray-100 hover:cursor-pointer">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M218.3 8.5c12.3-11.3 31.2-11.3 43.4 0l208 192c6.7 6.2 10.3 14.8 10.3 23.5H336c-19.1 0-36.3 8.4-48 21.7V208c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h64V416H112c-26.5 0-48-21.5-48-48V256H32c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8.1-35.2l208-192zM352 304V448H544V304H352zm-48-16c0-17.7 14.3-32 32-32H560c17.7 0 32 14.3 32 32V448h32c8.8 0 16 7.2 16 16c0 26.5-21.5 48-48 48H544 352 304c-26.5 0-48-21.5-48-48c0-8.8 7.2-16 16-16h32V288z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Tanpa Batasan Usia</h3>
                <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka memberi kesempatan kepada siapa saja
                    yang ingin melanjutkan pendidikan tanpa memandang usia.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary-700 dark:bg-primary-900 border-b-8 border-b-yellow-300">
    <div class="grid lg:grid-cols-2 py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="w-full lg:border-r">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-100 dark:text-white">#AyooMasukUT</h2>
            <p class="mb-8 font-light text-gray-200 sm:text-xl dark:text-gray-100">Dapatkan informasi pendaftaran
                Universitas Terbuka Daerah Jambi Melalui WhatsApp.</p>
            <form action="" method="post" class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 mb-5">
                @csrf
                <div class="relative">
                    <input type="text" id="nama"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-100 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-100 peer"
                        placeholder=" " />
                    <label for="nama"
                        class="absolute text-sm bg-primary-700 dark:bg-primary-900 text-gray-100 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-gray-100 peer-focus:dark:text-gray-100 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nama</label>
                </div>
                <div class="relative">
                    <input type="text" id="telp"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-100 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-100 focus:outline-none focus:ring-0 focus:border-gray-100 peer"
                        placeholder=" " />
                    <label for="telp"
                        class="absolute text-sm bg-primary-700 dark:bg-primary-900 text-gray-100 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-gray-100 peer-focus:dark:text-gray-100 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">No.
                        WhatsApp</label>
                </div>
                <button type="submit"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium flex items-center justify-center text-primary-700 focus:outline-none bg-white rounded-lg  hover:bg-gray-300   focus:z-10 focus:ring-4 focus:ring-gray-100 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 -ml-1 w-5 h-5"
                        fill="currentColor">
                        <path
                            d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z" />
                    </svg>
                    Kirim</button>
            </form>
        </div>
        <div class="border-t lg:border-none w-full">
            <div class="py-4 px-8">
                <div class="mt-5 flex flex-col justify-center items-center gap-4">
                    <h5 class="text-xl lg:text-3xl text-center font-bold lg:font-extrabold text-gray-100 dark:text-white">
                        Jalur Pendaftaran Universitas Terbuka Melalui:
                    <h5>
                    <div class="mt-2 lg:mt-5 grid grid-cols-3 gap-2">
                        <a href="" type="button"
                            class="text-blue-700 text-center flex justify-center items-center bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-white dark:hover:bg-gray-100 focus:outline-none dark:focus:ring-blue-900">Online</a>
                        <a href="" type="button"
                            class="text-blue-700 text-center flex justify-center items-center bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-white dark:hover:bg-gray-100 focus:outline-none dark:focus:ring-blue-900">Kantor
                            UT Jambi</a>
                        <a href="" type="button"
                            class="text-blue-700 text-center flex justify-center items-center bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-white dark:hover:bg-gray-100 focus:outline-none dark:focus:ring-blue-900">Pokjar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita
                Seputar Kegiatan di Universitas Terbuka Daerah Jambi</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Ikuti perkembangan dan informasi
                mengenai kehidupan kampus di Universitas Terbuka khususnya untuk daerah Jambi.</p>
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                        Tutorial
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How to
                        quickly deploy a static website</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                    bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                    both web designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="Jese Leos avatar" />
                        <span class="font-medium dark:text-white">
                            Jese Leos
                        </span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                clip-rule="evenodd"></path>
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                        </svg>
                        Article
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Our
                        first project with React</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                    bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                    both web designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Bonnie Green avatar" />
                        <span class="font-medium dark:text-white">
                            Bonnie Green
                        </span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                        Tutorial
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How to
                        quickly deploy a static website</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                    bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                    both web designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="Jese Leos avatar" />
                        <span class="font-medium dark:text-white">
                            Jese Leos
                        </span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                clip-rule="evenodd"></path>
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                        </svg>
                        Article
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Our
                        first project with React</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to
                    bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                    both web designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Bonnie Green avatar" />
                        <span class="font-medium dark:text-white">
                            Bonnie Green
                        </span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 lg:px-6 mx-auto max-w-screen-xl px-4 grid lg:grid-cols-2 gap-4">
        <div class="max-w-lg">
            <h2 class=" text-gray-900 dark:text-white md:text-4xl font-extrabold mb-4">Mitra Kerjasama Universitas
                Terbuka</h2>
            <p>Dalam penyelenggaraan pendidikan tinggi terbuka dan jarak jauh, UT bekerjasama dengan berbagai pihak
                dalam berbagai hal, seperti penyediaan beasiswa, fasilitas penunjang dan tenaga ahli</p>
        </div>
        <img src="{{asset('images/mitra.webp')}}" alt="" class="w-full max-w-screen-sm mx-auto">
    </div>
</section>
@endsection