@extends('layouts.homepage')
@section('content')
<section class="relative flex flex-col bg-gradient-to-br from-gray-50 to-primary-50 min-h-[90vh] overflow-hidden">
    <div class="absolute inset-0 bg-center bg-no-repeat bg-cover opacity-[0.03]" style="background-image: url({{asset('images/background/hero-pattern.svg')}})"></div>
    
    <div class="relative px-4 mx-auto mt-20 max-w-screen-xl lg:px-6 py-8 lg:py-16 flex items-center min-h-[90vh]">
        <div class="w-full grid lg:grid-cols-2 gap-12 lg:gap-16 justify-between items-center">
            <div class="w-full space-y-8 fade-in">
                <!-- Main Content -->
                <div class="space-y-6 text-center lg:text-left">
                    <!-- Hashtags -->
                    <div class="flex flex-wrap gap-4 text-sm justify-center lg:justify-start lg:text-base">
                        <span class="px-4 py-1 rounded-full bg-primary-100 text-primary-700 font-medium">#KuliahOnline</span>
                        <span class="px-4 py-1 rounded-full bg-yellow-100 text-yellow-700 font-medium">#KampusNegeri</span>
                        <span class="px-4 py-1 rounded-full bg-emerald-100 text-emerald-700 font-medium">#KualitasDunia</span>
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight text-gray-900 leading-tight reveal-on-scroll">
                        Universitas<br/><span class="text-primary-600">Terbuka Jambi</span>
                    </h1>
                    <p class="text-lg lg:text-xl text-gray-600 leading-relaxed max-w-2xl">
                        PTN dengan sistem pembelajaran jarak jauh terbaik di Indonesia, kini hadir di Provinsi Jambi.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 fade-in fade-in-delay-1">
                    <a href="https://admisi-sia.ut.ac.id/auth/registrasi/mahasiswa-baru/v2" target="_blank"
                        class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-primary-600 rounded-xl hover:bg-primary-700 shadow-lg hover:shadow-xl transition duration-300 btn-hover">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M219.3.5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8.4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z"/>
                        </svg>
                        Daftar Sekarang
                    </a>
                    <a href="https://web.whatsapp.com/send?text=&phone=6282259528388" target="_blank"
                        class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-gray-700 bg-white rounded-xl border-2 border-gray-200 hover:bg-gray-50 shadow-lg hover:shadow-xl transition duration-300 btn-hover">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                        Hubungi Admin
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="hidden lg:block relative w-full fade-in fade-in-delay-2">
                <div class="absolute -top-20 -right-20 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob"></div>
                <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-primary-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob animation-delay-2000"></div>
                <img class="relative w-full max-w-md ml-auto rounded-2xl shadow-2xl bg-gradient-to-b from-primary-50 via-primary-100 to-primary-200 animate-float" src="{{asset('/images/mahasiswi-min.webp')}}" alt="Mahasiswi UT">
                <div class="absolute top-1/4 -left-8 transform -translate-y-1/2 bg-white p-6 rounded-2xl shadow-xl animate-float-delayed backdrop-blur-sm border border-gray-100">
                    <h3 class="text-lg font-bold text-primary-700 mb-2">Biaya Terjangkau!</h3>
                    <p class="text-gray-700">SPP Mulai Dari <span class="font-bold text-red-600">Rp. 1,3 Jt</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-b-8 border-b-yellow-300 relative overflow-hidden">
    <div class="absolute inset-0 bg-primary-600 opacity-95"></div>
    <div class="relative">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-lg gap-8 mx-auto text-white sm:grid-cols-2 md:grid-cols-4 dark:text-white">
                <div class="flex flex-col items-center justify-center fade-in stat-count reveal-on-scroll">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold" data-target="2078192" data-increment="10000">0</dt>
                    <dd class="font-medium text-gray-100 dark:text-gray-100">Alumni</dd>
                </div>
                <div class="flex flex-col items-center justify-center fade-in stat-count reveal-on-scroll">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold" data-target="551030" data-increment="1000">0</dt>
                    <dd class="font-medium text-gray-100 dark:text-gray-100">Mahasiswa Aktif</dd>
                </div>
                <div class="flex flex-col items-center justify-center fade-in stat-count reveal-on-scroll">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold" data-target="50" data-increment="1">0</dt>
                    <dd class="font-medium text-gray-100 dark:text-gray-100">Program Studi</dd>
                </div>
                <div class="flex flex-col items-center justify-center fade-in stat-count reveal-on-scroll">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold" data-target="40" data-increment="1">0</dt>
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
        <div class="space-y-4 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-4 md:space-y-0">
            <div
                class="border border-primary-600 flex flex-col justify-center items-center bg-primary-100   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition card-hover feature-card">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-700 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                        class="w-5 h-5  text-white lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl text-primary-800 font-bold dark:text-white">Terakreditasi A & B</h3>
                <p class="text-primary-700 dark:text-gray-400">Universitas Terbuka telah terakreditasi oleh BAN-PT
                    dengan nilai A (unggul) & B (sangat baik).</p>
            </div>
            <div
                class="border border-yellow-500 flex flex-col justify-center items-center bg-yellow-50   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition card-hover feature-card">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-yellow-500 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                        class="w-5 h-5  text-white lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M112 0C99.1 0 87.4 7.8 82.5 19.7l-66.7 160-13.3 32c-6.8 16.3 .9 35 17.2 41.8s35-.9 41.8-17.2L66.7 224h90.7l5.1 12.3c6.8 16.3 25.5 24 41.8 17.2s24-25.5 17.2-41.8l-13.3-32-66.7-160C136.6 7.8 124.9 0 112 0zm18.7 160H93.3L112 115.2 130.7 160zM256 32v96 96c0 17.7 14.3 32 32 32h80c44.2 0 80-35.8 80-80c0-23.1-9.8-43.8-25.4-58.4c6-11.2 9.4-24 9.4-37.6c0-44.2-35.8-80-80-80H288c-17.7 0-32 14.3-32 32zm96 64H320V64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16zm-32 64h32 16c8.8 0 16 7.2 16 16s-7.2 16-16 16H320V160zM566.6 310.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L352 434.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0l192-192z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl text-yellow-700 font-bold dark:text-white">Bisa Alih Kredit</h3>
                <p class="text-yellow-500 dark:text-gray-400">Universitas Terbuka menerima peralihan kredit dari
                    kampus lama kamu sehingga kamu tidak perlu mengulang perkuliahan dari awal lagi.</p>
            </div>
            <div
                class="border border-primary-700 flex flex-col justify-center items-center bg-primary-100 p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition card-hover feature-card">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-700 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="w-5 h-5  text-white lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl text-primary-800 font-bold dark:text-white">Biaya Terjangkau</h3>
                <p class="text-primary-700 dark:text-gray-400">Biaya kuliah di Universitas Terbuka sangat terjangkau
                    sehingga tidak membuat kantong kering.</p>
            </div>
            <div
                class="border border-yellow-500 flex flex-col justify-center items-center bg-yellow-50   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition card-hover feature-card">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-yellow-500 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="w-5 h-5  text-white lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 352h8.2c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM320 352H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H360.2C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16v48h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V304c0-8.8 7.2-16 16-16z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl text-yellow-700 font-bold dark:text-white">Waktu Kuliah Fleksibel</h3>
                <p class="text-yellow-500 dark:text-gray-400">Universitas Terbuka memberikan kebebasan dalam
                    menentukan waktu perkuliahan sehingga kamu bisa kuliah sesuai gayamu.</p>
            </div>
            <div
                class="border border-primary-700 flex flex-col justify-center items-center bg-primary-100 p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition card-hover feature-card">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-700 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                        class="w-5 h-5  text-white lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor">
                        <path
                            d="M218.3 8.5c12.3-11.3 31.2-11.3 43.4 0l208 192c6.7 6.2 10.3 14.8 10.3 23.5H336c-19.1 0-36.3 8.4-48 21.7V208c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h64V416H112c-26.5 0-48-21.5-48-48V256H32c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8.1-35.2l208-192zM352 304V448H544V304H352zm-48-16c0-17.7 14.3-32 32-32H560c17.7 0 32 14.3 32 32V448h32c8.8 0 16 7.2 16 16c0 26.5-21.5 48-48 48H544 352 304c-26.5 0-48-21.5-48-48c0-8.8 7.2-16 16-16h32V288z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl text-primary-800 font-bold dark:text-white">Bisa Kuliah <span class="italic">Full
                        Online</span></h3>
                <p class="text-primary-700 dark:text-gray-400">Universitas Terbuka memiliki sistem pembelajaran <span
                        class="italic font-semibold">full online</span> sehingga kamu bisa kuliah dari rumah ataupun
                    darimana saja.</p>
            </div>
            <div
                class="border border-yellow-500 flex flex-col justify-center items-center bg-yellow-50   p-4 rounded-lg hover:shadow-lg hover:cursor-pointer hover:scale-105 transition card-hover feature-card">
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-yellow-500 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5  text-white lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"><path d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9l0 57.1c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-57.1L48 93.3l0 65.1 15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9l-32 0c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4l0-71.8C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z"/></svg>
                </div>
                <h3 class="mb-2 text-xl text-yellow-700 font-bold dark:text-white">Tanpa Batasan Usia</h3>
                <p class="text-yellow-500 dark:text-gray-400">Universitas Terbuka memberi kesempatan kepada siapa saja
                    yang ingin melanjutkan pendidikan tanpa memandang usia.</p>
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
                    class="w-full py-2.5 px-5 me-2 text-sm font-medium flex items-center justify-center text-primary-700 focus:outline-none bg-white rounded-lg  hover:bg-gray-300   focus:z-10 focus:ring-4 focus:ring-gray-100 hover:scale-105 transition btn-hover">
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
                    <a href="https://admisi-sia.ut.ac.id/auth/registrasi/mahasiswa-baru/" target="_blank" class="flex justify-center items-center text-white bg-gradient-to-r from-primary-500 via-primary-600 to-primary-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center btn-hover">Online</a>
                    <a href="https://maps.app.goo.gl/UKnAiiMB3CDAU3Aj9" target="_blank" class="flex justify-center items-center text-white bg-gradient-to-r from-emerald-500 via-emerald-600 to-emerald-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:focus:ring-emerald-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center btn-hover">Kantor UT Jambi</a>
                    <a href="#" target="_blank" class="flex justify-center items-center text-white bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center btn-hover">SALUT</a>
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
        <div class="grid gap-10 lg:grid-cols-3">
            @foreach($posts as $row)
            @php
                $firstImageSrc = null;
                // Parse the HTML
                $dom = new DOMDocument();
                libxml_use_internal_errors(true); // Suppress warnings for malformed HTML
                $dom->loadHTML($row->content);
                libxml_clear_errors();
                $images = $dom->getElementsByTagName('img');
                if ($images->length > 0) {
                    $firstImageSrc = $images->item(0)->getAttribute('src');
                }else{
                    $firstImageSrc = asset('images/no-cover.jpg');
                }
            @endphp
            <a href="{{route('show_post_detail', [$row->category->name ,$row->slug])}}">
            <article class="max-w-md bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 group transition duration-500 hover:bg-primary-50 card-hover">
                <div class="h-52 overflow-hidden rounded-t-lg">
                    <img src="{{$firstImageSrc}}" alt="" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="mr-1 w-2.5 h-2.5" fill="currentColor"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"/></svg>
                            {{$row->category == null ? 'Uncategorized' : $row->category->name}}
                        </span>
                        <span class="text-sm">{{date('d M Y', strtotime($row->date))}}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white w-80 lg:w-full truncate transition group-hover:text-primary-600">{{$row->title}}</h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400 w-80 lg:w-full truncate">{{$row->excerpt}}</p>
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
    <div class="mx-auto flex flex-col lg:flex-row justify-center items-center gap-10 max-w-screen-xl rounded-lg bg-gradient-to-r from-yellow-100 to-yellow-200 dark:bg-gray-800 shadow-lg">
      <div class="lg:mt-0">
          <img class="rounded-l-lg" src="{{asset('images/karunika.webp')}}" alt="Karunika UT Jambi Store" />
      </div>
      <div class="me-auto p-4">
        <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-yellow-800 dark:text-white md:text-4xl">
          Karunika UT Jambi Store Telah Dibuka!
        </h1>
        <p class="mb-6 text-yellow-800">Merchandise Universitas Terbuka kini dapat kamu miliki dengan berbelanja di Karunika UT Jambi Store, kunjungi kami sekarang juga!</p>
        <a href="https://www.instagram.com/karunika.utjambi/" target="_blank" class="inline-flex items-center justify-center rounded-lg bg-orange-500 px-5 py-3 text-center text-base font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 btn-hover"> Shop Now! </a>
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

<!-- Floating Buttons -->
<div class="fixed bottom-4 right-4 z-50 flex flex-col gap-4">
    <!-- Back to Top Button -->
    <button id="backToTop" class="p-3 bg-primary-600 text-white rounded-full shadow-lg hover:bg-primary-700 transition-all duration-300 opacity-0 translate-y-10 btn-hover">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
    
    <!-- AI Chat Button -->
    <a href="https://sl.ut.ac.id/TanyaUTJambi" target="_blank" 
        class="group p-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center relative btn-hover">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 640 512">
            <path d="M320 0c17.7 0 32 14.3 32 32V96H472c39.8 0 72 32.2 72 72V440c0 39.8-32.2-72-72-72H168c-39.8 0-72-32.2-72-72V168c0-39.8 32.2-72 72-72H288V32c0-17.7 14.3-32 32-32zM208 384c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H208zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H304zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H400zM264 256a40 40 0 1 0 -80 0 40 40 0 1 0 80 0zm152 40a40 40 0 1 0 0-80 40 40 0 1 0 0 80zM48 224H64V416H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H576V224h16z"/>
        </svg>
        <!-- Tooltip -->
        <span class="absolute right-full mr-2 py-1 px-2 text-sm text-white bg-gray-900 rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 whitespace-nowrap">
            Chat with AI Assistant
        </span>
    </a>
</div>

<style>
    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(0px);
        }
    }

    @keyframes float-delayed {
        0% {
            transform: translateY(-50%) translateX(0px);
        }
        50% {
            transform: translateY(-50%) translateX(-10px);
        }
        100% {
            transform: translateY(-50%) translateX(0px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-float-delayed {
        animation: float-delayed 3s ease-in-out infinite;
        animation-delay: 0.5s;
    }

    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .fade-in.appear {
        opacity: 1;
        transform: translateY(0);
    }

    .fade-in-delay-1 {
        transition-delay: 0.2s;
    }

    .fade-in-delay-2 {
        transition-delay: 0.4s;
    }

    .fade-in-delay-3 {
        transition-delay: 0.6s;
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .btn-hover {
        transition: all 0.3s ease;
    }

    .btn-hover:hover {
        transform: scale(1.05);
    }

    .stat-count {
        transition: color 0.3s ease;
    }

    .stat-count:hover {
        color: #FCD34D;
    }

    /* Enhance animations */
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .reveal-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Glass effect */
    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Gradient text */
    .gradient-text {
        background: linear-gradient(to right, #2F77F1, #1d4ed8);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    /* Enhanced cards */
    .feature-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .feature-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
</style>

@endsection

@section('script')
<script>
    function CountDownTimer(dt, id) {
        const element = document.getElementById(id);
        if (!element) return; // Exit if element doesn't exist

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
                const pendaftaranElement = document.getElementById('masa-pendaftaran');
                if (pendaftaranElement) {
                    pendaftaranElement.classList.add("hidden");
                }
                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            element.innerHTML = days + ' hari : ';
            element.innerHTML += hours + ' jam : ';
            element.innerHTML += minutes + ' menit : ';
            element.innerHTML += seconds + ' detik';
        }

        timer = setInterval(showRemaining, 1000);
    }

    // Only initialize countdown if element exists
    if (document.getElementById('countdown')) {
        CountDownTimer('02/13/2025 00:00 AM', 'countdown');
    }

    // Back to Top Button functionality
    const backToTopButton = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.remove('opacity-0', 'translate-y-10');
        } else {
            backToTopButton.classList.add('opacity-0', 'translate-y-10');
        }
    });
    
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Intersection Observer for fade-in animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('appear');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(element => {
        observer.observe(element);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Enhanced reveal on scroll
    function reveal() {
        const reveals = document.querySelectorAll('.reveal-on-scroll');
        
        reveals.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', reveal);
    window.addEventListener('load', reveal);

    // Add count-up animation
    const countUpObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('[data-target]');
                counters.forEach(counter => {
                    if (counter.getAttribute('data-counted') === 'true') return;
                    
                    const target = parseInt(counter.getAttribute('data-target'));
                    const increment = parseInt(counter.getAttribute('data-increment'));
                    let current = 0;

                    const updateCounter = () => {
                        const increment = Math.ceil((target - current) / 20);
                        if (current < target) {
                            current += increment;
                            counter.textContent = current.toLocaleString();
                            setTimeout(updateCounter, 40);
                        } else {
                            counter.textContent = target.toLocaleString();
                            counter.setAttribute('data-counted', 'true');
                        }
                    };

                    updateCounter();
                });
                countUpObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    // Observe the stats section
    const statsSection = document.querySelector('.stat-count').parentElement.parentElement;
    if (statsSection) {
        countUpObserver.observe(statsSection);
    }
</script>
@endsection