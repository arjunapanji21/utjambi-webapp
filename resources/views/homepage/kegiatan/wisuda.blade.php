@extends('layouts.homepage')

@section('content')
<section
    class="grid justify-center items-center lg:grid-cols-2 bg-fixed bg-no-repeat bg-cover bg-gradient-to-r from-primary-600 to-cyan-400 dark:bg-gray-900"
    style="background-image: url({{asset('images/background/blue1.webp')}})">
    <div class="py-8 w-full px-4 text-center lg:text-right lg:py-16 lg:px-12">
        <h1
            class="mb-4 text-8xl lg:text-9xl font-extrabold tracking-tight leading-none drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r  from-yellow-200 via-yellow-300 to-orange-500">
            Wisuda</h1>
        <p class="mb-8 text-lg font-semibold text-gray-100 lg:text-3xl dark:text-gray-400 drop-shadow-lg">Universitas
            Terbuka Daerah Jambi</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-end sm:space-y-0 sm:space-x-4">
            {{-- <a href="{{route('wisuda.cari_data_wisudawan')}}" target="_blank"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-yellow-800 rounded-lg bg-gradient-to-r from-yellow-200 via-yellow-300 to-yellow-400  focus:ring-4 border border-gray-300 hover:text-white focus:ring-primary-300 dark:focus:ring-primary-900 shadow-lg">
                Jadwal & Lokasi
            </a> --}}
            <a href="#more"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-100 rounded-lg border border-gray-300 hover:bg-primary-800 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 shadow-lg">
                Pendaftaran
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class="w-full mt-10 max-w-lg">
        <img src="{{asset('images/gallery/model/wisuda.webp')}}" alt="">
    </div>
</section>

<section id="more" class="lg:pt-20 bg-gray-50 min-h-screen flex justify-center items-center">
    <div class="py-8 px-4 lg:py-16 lg:px-6 max-w-screen-xl mx-auto">
        {{-- <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Wisuda UT Jambi <span class="text-blue-600 dark:text-blue-500">Periode II</span> Tahun 2024.</h1>
        <p class="font-normal text-gray-500 lg:text-lg text-justify dark:text-gray-400">bagi calon wisudawan
            <strong>diwajibkan untuk mendaftar secara online</strong> melalui form yang sudah disediakan, ijazah
            diberikan langsung pada saat hari wisuda. Peserta wisuda adalah yang telah terjaring Yudisium dan Ijazah
            sudah sampai di kantor Universitas Terbuka Daerah Jambi.</p> --}}
        <div class="flex flex-col justify-center items-center space-y-4 max-w-3xl">
            <h1
            class="mb-4 text-2xl font-extrabold text-center leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Pendaftaran Wisuda UT Jambi <br>Periode II Tahun 2024 <br><span class="text-red-600 dark:text-red-500">Telah Memenuhi Kuota</span></h1>
        <p class="font-normal text-gray-500 lg:text-lg text-center dark:text-gray-400">Bagi calon wisudawan
            <strong>yang belum mendaftar dan ingin mengikuti acara wisuda</strong> silahkan langsung menghubungi kantor UT Jambi.</p>
            <p class="font-normal text-gray-500 lg:text-lg text-center dark:text-gray-400">Hitung Mundur Menuju Wisuda Universitas Terbuka Daerah Jambi:</p>
            <div id="countdown" class="animate-pulse bg-gray-100 font-extrabold text-3xl lg:text-6xl text-gray-600 inline-flex items-center px-3.5 py-1.5 rounded-lg dark:bg-gray-700 dark:text-gray-400 border border-gray-400"></div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-10 my-10" hidden>
            <h2
                class="mb-4 text-lg font-bold leading-none tracking-tight text-gray-900 md:text-xl lg:text-2xl dark:text-white">
                Pendaftaran Calon Peserta Wisuda</h2>
                @if(Session::has('alert'))
                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <span class="sr-only">Info</span>
                  <div>
                      {{ Session::get('alert') }}
                  </div>
                </div>
                @endif
            <form action="{{route('kegiatan.wisuda.pendaftaran')}}" method="get" class="w-full lg:inline-flex items-center gap-4">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="nim" id="nim"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="nim"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                        Induk Mahasiswa</label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    CountDownTimer('11/16/2024 07:00 AM', 'countdown');
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

            document.getElementById(id).innerHTML = days + 'd : ';
            document.getElementById(id).innerHTML += hours + 'h : ';
            document.getElementById(id).innerHTML += minutes + 'm : ';
            document.getElementById(id).innerHTML += seconds + 's';
        }

        timer = setInterval(showRemaining, 1000);
    }
</script>
    
@endsection