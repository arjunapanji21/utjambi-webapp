@extends('layouts.homepage')
@section('content')
<section class="pt-8 flex flex-col dark:bg-gray-900 bg-white bg-center bg-no-repeat bg-cover" style="background-image: url({{asset('images/background/hero-pattern.svg')}})">
    <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="w-full grid lg:grid-cols-2 gap-10 justify-center items-start">
            <div class="w-full text-center lg:text-left pt-2 lg:pt-10">
                <a href="{{route('kegiatan.wisuda')}}"
                    class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-primary-50 rounded-lg dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 shadow animate-bounce"
                    role="alert">
                    <span class="text-sm bg-gradient-to-r from-yellow-100 to-yellow-300 rounded-lg font-medium text-yellow-600 px-4 py-1.5 mr-3">#FYI</span> <span
                        class="text-sm font-medium">Penerimaan Mahasiswa Baru Telah Dibuka!</span>
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
                <h2 class="mb-2 text-4xl lg:text-6xl tracking-tight font-extrabold text-primary-500">
                    Universitas Terbuka Daerah Jambi</h2>
                <p class="mb-4 lg:text-xl text-gray-500 dark:text-gray-400">Perguruan Tinggi Negeri (PTN)
                    dengan sistem pembelajaran jarak jauh terbaik di Indonesia kini hadir di wilayah Provinsi Jambi.
                </p>
                <div id="masa-pendaftaran" class="my-8">
                    <div class="text-yellow-500 font-medium mb-2">
                        <span class="text-lg font-bold">Penerimaan Mahasiswa Baru</span></br/>Program Sarjana & Diploma Telah Dibuka:
                    </div>
                    <div id="countdown" class="animate-pulse bg-primary-100 font-bold text-xl text-primary-600 inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-primary-400 border border-primary-400"></div>
                </div>
                <div
                    class="flex flex-col space-y-4 sm:flex-row sm:justify-center lg:justify-start sm:space-y-0 sm:space-x-4">
                    <a href="https://admisi-sia.ut.ac.id/auth/registrasi/mahasiswa-baru/v2" target="_blank"
                        class="inline-flex items-center justify-center shadow px-4 py-2.5 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 hover:scale-105 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="mr-2 -ml-1 w-5 h-5"
                            fill="currentColor">
                            <path
                                d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z" />
                        </svg>
                        Daftar Sekarang
                    </a>
                    <a href="https://web.whatsapp.com/send?text=&phone=6282259528388" target="_blank"
                        class="inline-flex items-center shadow justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600 hover:scale-105 transition">
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
                        class="hover:-translate-y-4 transition-all absolute right-52 top-8 md:right-52 md:top-14 lg:right-72 lg:top-28 xl:right-80 xl:top-32 ">
                        <a href="#"
                            class="block max-w-sm p-4 bg-gradient-to-br from-white via-primary-100 to-primary-50 rounded-lg shadow  border border-primary-100">
                            <h5
                                class="mb-2 text-sm lg:text-base font-bold tracking-tight text-primary-900 dark:text-white">
                                Biaya Terjangkau!</h5>
                            <p class="text-xs lg:text-sm text-primary-800 dark:text-primary-500">SPP Mulai
                                Dari <span class="font-bold text-red-600">Rp. 1,3 Jt</span></p>
                        </a>
                    </div>
                    <img class="rounded-lg ml-auto h-96 lg:h-[640px] object-cover"
                        src="{{asset('/images/mahasiswi-min.webp')}}" alt="Mahasiswi UT">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-b-8 border-b-yellow-300 bg-cover bg-fixed bg-no-repeat" style="background-image: url('{{asset("images/background/blue1.webp")}}')">
    <div>
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-lg gap-8 mx-auto text-white sm:grid-cols-2 md:grid-cols-4 dark:text-white">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">2,078,192</dt>
                    <dd class="font-medium text-gray-100 dark:text-gray-100">Alumni</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">551,030</dt>
                    <dd class="font-medium text-gray-100 dark:text-gray-100">Mahasiswa Aktif</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">50</dt>
                    <dd class="font-medium text-gray-100 dark:text-gray-100">Program Studi</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">40</dt>
                    <dd class="font-medium text-gray-100 dark:text-gray-100">UT Daerah</dd>
                </div>
            </dl>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900 block justify-between">
    <div class="py-8 px-4 mx-auto text-center max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mx-auto mb-8 lg:mb-16">
            <h2 class="mb-4 text-2xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Keunggulan Universitas Terbuka Dari Universitas Konvensional Lainnya</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Universitas Terbuka hadir membantu masyarakat
                hingga Polosok Negeri untuk dapat melanjutkan Pendidikan di Perguruan Tinggi Negeri.</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-8 md:space-y-0">
            <div
                class="border border-gray-300 flex flex-col justify-center items-center bg-white   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition">
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
                class="border border-gray-300 flex flex-col justify-center items-center bg-white   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition">
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
                class="border border-gray-300 flex flex-col justify-center items-center bg-white   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition">
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
                class="border border-gray-300 flex flex-col justify-center items-center bg-white   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition">
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
                class="border border-gray-300 flex flex-col justify-center items-center bg-white   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition">
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
                class="border border-gray-300 flex flex-col justify-center items-center bg-white   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9l0 57.1c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-57.1L48 93.3l0 65.1 15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9l-32 0c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4l0-71.8C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z"/></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Tanpa Batasan Usia</h3>
                <p class="text-gray-500 dark:text-gray-400">Universitas Terbuka memberi kesempatan kepada siapa saja
                    yang ingin melanjutkan pendidikan tanpa memandang usia.</p>
            </div>
        </div>
    </div>
    <div class="py-8 px-4 mx-auto block lg:flex gap-5 justify-center items-center max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-md text-center p-8">
            <img class="mb-2" src="{{asset('images/dies40.png')}}">
            <h2 class="mb-4 text-2xl lg:text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Fakultas & Prodi</h2>
            <p class="text-gray-500 dark:text-gray-400">UT memiliki 4 Fakultas Program Sarjana/Diploma dan Sekolah Pascasarjana S2 Serta Doktoral S3 dengan jumlah total lebih dari 46 Program Studi yang Terakreditasi A & B.</p>
        </div>
        <div class="flex flex-col gap-5">
            <div class="lg:space-y-8 grid gap-2 grid-cols-2 lg:grid-cols-3 md:gap-8">
                <a href="https://fkip.ut.ac.id" target="_blank"
                    class="flex flex-col  bg-white border border-purple-300  p-4 rounded-lg hover:bg-purple-50 hover:cursor-pointer hover:scale-105 transition">
                    <div class="flex justify-between items-start">
                        <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-purple-100 lg:h-12 lg:w-12 dark:bg-purple-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            class="w-5 h-5  text-purple-600 lg:w-6 lg:h-6 dark:text-purple-300" fill="currentColor">
                            <path
                                d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                        </svg>
                    </div>
                    <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-purple-900 dark:text-purple-300">12 Prodi</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">FKIP</h3>
                    <p class="text-gray-500 dark:text-gray-400">Fakultas Keguruan dan Ilmu Pendidikan.</p>
                </a>
                <a href="https://fhisip.ut.ac.id" target="_blank"
                    class="flex flex-col  bg-white border border-orange-300  p-4 rounded-lg hover:bg-orange-50 hover:cursor-pointer hover:scale-105 transition">
                    <div class="flex justify-between items-start">
                        <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-orange-100 lg:h-12 lg:w-12 dark:bg-orange-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            class="w-5 h-5  text-orange-600 lg:w-6 lg:h-6 dark:text-orange-300" fill="currentColor">
                            <path
                                d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                        </svg>
                    </div>
                    <span class="bg-orange-100 text-orange-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-orange-900 dark:text-orange-300">11 Prodi</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">FHISIP</h3>
                    <p class="text-gray-500 dark:text-gray-400">Fakultas Hukum, Ilmu Sosial, dan Ilmu Politik.</p>
                </a>
                <a href="https://fst.ut.ac.id" target="_blank"
                    class="flex flex-col  bg-white border border-primary-300  p-4 rounded-lg hover:bg-primary-50 hover:cursor-pointer hover:scale-105 transition">
                    <div class="flex justify-between items-start">
                        <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            class="w-5 h-5  text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                            <path
                                d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                        </svg>
                    </div>
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-primary-900 dark:text-primary-300">7 Prodi</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">FST</h3>
                    <p class="text-gray-500 dark:text-gray-400">Fakultas Sains dan Teknologi</p>
                </a>
                <a href="https://feb.ut.ac.id" target="_blank"
                    class="flex flex-col  bg-white border border-gray-300  p-4 rounded-lg hover:bg-gray-50 hover:cursor-pointer hover:scale-105 transition">
                    <div class="flex justify-between items-start">
                        <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-gray-100 lg:h-12 lg:w-12 dark:bg-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            class="w-5 h-5  text-gray-600 lg:w-6 lg:h-6 dark:text-gray-300" fill="currentColor">
                            <path
                                d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                        </svg>
                    </div>
                    <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-900 dark:text-gray-300">6 Prodi</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">FEB</h3>
                    <p class="text-gray-500 dark:text-gray-400">Fakultas Ekonomi dan Bisnis</p>
                </a>
                <a
                href="https://pascasarjana.ut.ac.id" target="_blank"
                    class="flex flex-col  bg-white border border-cyan-300  p-4 rounded-lg hover:bg-cyan-50 hover:cursor-pointer hover:scale-105 transition">
                    <div class="flex justify-between items-start">
                        <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-cyan-100 lg:h-12 lg:w-12 dark:bg-cyan-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            class="w-5 h-5  text-cyan-600 lg:w-6 lg:h-6 dark:text-cyan-300" fill="currentColor">
                            <path
                                d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                        </svg>
                    </div>
                    <span class="bg-cyan-100 text-cyan-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-cyan-900 dark:text-cyan-300">7 Prodi</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Pascasarjana</h3>
                    <p class="text-gray-500 dark:text-gray-400">Magister S2</p>
                </a>
                <a href="https://lppm.ut.ac.id/" target="_blank"
                    class="flex flex-col  bg-white border border-lime-300  p-4 rounded-lg hover:bg-lime-50 hover:cursor-pointer hover:scale-105 transition">
                    <div class="flex justify-between items-start">
                        <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-lime-100 lg:h-12 lg:w-12 dark:bg-lime-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            class="w-5 h-5  text-lime-600 lg:w-6 lg:h-6 dark:text-lime-300" fill="currentColor">
                            <path
                                d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                        </svg>
                    </div>
                    <span class="bg-lime-100 text-lime-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-lime-900 dark:text-lime-300">5 Program</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Program</h3>
                    <p class="text-gray-500 dark:text-gray-400">Sertifikat</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="border-b-8 border-b-yellow-300 bg-cover bg-fixed bg-no-repeat" style="background-image: url('{{asset("images/background/blue1.webp")}}')">
    <div class="grid lg:grid-cols-2 gap-5 py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="w-full">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-100 dark:text-white">#AyooMasukUT</h2>
            <p class="mb-8 font-light text-gray-200 sm:text-xl dark:text-gray-100">Dapatkan informasi pendaftaran
                Universitas Terbuka Daerah Jambi Melalui WhatsApp.</p>
            <form action="" method="post" class="block lg:flex space-y-4 items-end lg:flex-row lg:space-y-0 lg:space-x-4 mb-5">
                @csrf
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="John Doe" required />
                </div>
                <div>
                    <label for="telp" class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">No. WhatsApp</label>
                    <input type="text" id="telp" name="telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="+628XXXXXXX" required />
                </div>
                <div class="">
                    <button type="submit"
                    class="w-full py-2.5 px-5 me-2 text-sm font-medium flex items-center justify-center text-primary-700 focus:outline-none bg-white rounded-lg  hover:bg-gray-300   focus:z-10 focus:ring-4 focus:ring-gray-100 hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 -ml-1 w-5 h-5"
                        fill="currentColor">
                        <path
                            d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z" />
                    </svg>
                    Kirim</button>
                </div>
            </form>
        </div>
        <div class="w-full rounded-lg p-4" style="background: linear-gradient(to right, rgba(255,255,255,0.85), rgba(255,255,255,0.85)),url('{{asset('images/kantor-ut-jambi.webp')}}')">
            <div class="h-full flex flex-col justify-center items-center gap-5 lg:gap-10">
                <h5 class="text-xl lg:text-3xl text-center font-bold lg:font-extrabold text-primary-900 dark:text-white">
                    Jalur Pendaftaran<br/>Universitas Terbuka Melalui:
                <h5>
                <div class="grid grid-cols-3 gap-8 p-4">
                    <a href="https://admisi-sia.ut.ac.id/auth/registrasi/mahasiswa-baru/" target="_blank" class="text-white bg-gradient-to-r from-primary-500 via-primary-600 to-primary-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center justify-center">Online</a>
                    <a href="https://maps.app.goo.gl/UKnAiiMB3CDAU3Aj9" target="_blank" class="text-white bg-gradient-to-r from-emerald-500 via-emerald-600 to-emerald-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:focus:ring-emerald-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Kantor UT Jambi</a>
                    <a href="#" target="_blank" class="text-white bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">POKJAR & SALUT</a>
                </div>
            </div>
        </div>
    </div>
</section>

@if(count($posts) > 0)
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita
                Seputar Kegiatan di Universitas Terbuka Daerah Jambi</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Ikuti perkembangan dan informasi
                mengenai kehidupan kampus di Universitas Terbuka khususnya untuk daerah Jambi.</p>
        </div>
        <div class="grid lg:grid-cols-3 gap-5">
            @foreach($posts as $post)
            <a href="{{route('show_post_detail', [strtolower($post->category->name), $post->slug])}}">
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 hover:shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <img src="{{explode('"', substr($post->content, strpos($post->content,'src="')))[1]}}" width="640px" alt="">
                <div class="flex justify-between items-center mb-5 text-gray-500 mt-5">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-2.5 h-2.5 me-1" fill="currentColor"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/></svg>
                        {{$post->category->name}}
                    </span>
                    <span class="text-sm">{{date('d/m/Y', strtotime($post->date))}}</span>
                </div>
                <div class="px-4">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">{{$post->title}}</h2>
                {{-- <p class="mb-5 font-light text-gray-500 dark:text-gray-400 ">{{$post->excerpt}}...</p> --}}
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        {{-- <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-900 rounded-full dark:bg-gray-600">
                            @foreach(explode(' ',$post->author->name) as $row)
                            <span class="font-medium text-gray-100 dark:text-white">
                                {{$row[0]}}
                            </span>
                            @endforeach
                        </div>
                        <span class="font-medium dark:text-white">
                            {{$post->author->name}}
                        </span> --}}
                    </div>
                    <span class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
            </article>
            </a>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{route('blog')}}"
            class="inline-flex items-center font-medium justify-center text-primary-600 dark:text-primary-500 hover:underline">
            Artikel Lainnya
            <svg class="ml-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
        </a>
        </div>
    </div>
</section>
@endif

<section class="bg-white px-4 py-8 antialiased dark:bg-gray-900">
    <div class="mx-auto flex flex-col lg:flex-row justify-center items-center gap-10 max-w-screen-xl rounded-lg bg-gradient-to-br from-yellow-100 to-yellow-300 p-8 dark:bg-gray-800">
      <div class="lg:mt-0">
          <img class="rounded-3xl shadow-lg border-8 border-white" src="{{asset('images/karunika.webp')}}" alt="Karunika UT Jambi Store" />
      </div>
      <div class="me-auto">
        <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-yellow-800 dark:text-white md:text-4xl">
          Karunika UT Jambi Store Telah Dibuka!
        </h1>
        <p class="mb-6 text-yellow-800">Merchandise Universitas Terbuka kini dapat kamu miliki dengan berbelanja di Karunika UT Jambi Store, kunjungi kami sekarang juga!</p>
        <a href="https://www.instagram.com/karunika.utjambi/" target="_blank" class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-5 py-3 text-center text-base font-medium text-white shadow-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"> Shop Now! </a>
      </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900 py-8 lg:py-16 lg:px-6 px-4">
    <div class="grid lg:grid-cols-2 gap-4 mb-10 mx-auto max-w-screen-xl">
        <div class="max-w-lg flex flex-col gap-4">
            <h2 class=" text-gray-900 dark:text-white md:text-4xl font-extrabold text-justify">Mitra Kerjasama Universitas
                Terbuka</h2>
            <p class="text-justify">Dalam penyelenggaraan pendidikan tinggi terbuka dan jarak jauh, UT bekerjasama dengan berbagai pihak
                dalam berbagai hal, seperti penyediaan beasiswa, fasilitas penunjang dan tenaga ahli.</p>
            <img src="{{asset('images/mitra.webp')}}" alt="" class="w-full max-w-screen-sm mx-auto">
        </div>
        <div>
            <iframe class="w-full h-full rounded-xl shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2384713124848!2d103.60367577404784!3d-1.6124386360676153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588c61674acf1%3A0xd8b3792e2d51fc8!2sUniversitas%20Terbuka%20Jambi!5e0!3m2!1sid!2sid!4v1717656619076!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>

    CountDownTimer('02/13/2025 00:00 AM', 'countdown');

    function CountDownTimer(dt, id)
    {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {
                
                clearInterval(timer);
                document.getElementById('masa-pendaftaran').classList.add("hidden");

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            document.getElementById(id).innerHTML = days + ' hari : ';
            document.getElementById(id).innerHTML += hours + ' jam : ';
            document.getElementById(id).innerHTML += minutes + ' menit : ';
            document.getElementById(id).innerHTML += seconds + ' detik';
        }

        timer = setInterval(showRemaining, 1000);
    }

</script>
@endsection