@extends('layouts.homepage')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 text-center">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
            <h2 class="mb-2 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pimpinan dan Staf</h2>
            <p class="text-xl font-light text-gray-500 sm:text-xl dark:text-gray-400">Universitas Terbuka Daerah Jambi</p>
        </div> 
        
        <div class="mb-20">
            <h3 class="mb-8 text-2xl border-b-4 border-b-yellow-300 pb-2 tracking-tight font-bold text-gray-900 dark:text-white">Direktur</h3>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/rahmaddian.webp')}}">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Rahmaddian, S.E., M.M.</a>
                </h3>
                <p>Direktur Universitas Terbuka Daerah Jambi Periode XIV</p>
            </div> 
        </div> 

        <div class="mb-20">
            <h3 class="mb-8 text-2xl border-b-4 border-b-yellow-300 pb-2 tracking-tight font-bold text-gray-900 dark:text-white">Manajer</h3>
        <div class="grid gap-8 lg:gap-16 lg:grid-cols-3">
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/ardi.webp')}}">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Ardiyansyah, S.E.</a>
                </h3>
                <p>Kepala Sub Bagian Tata Usaha</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/milde.webp')}}">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Milde Wahyu, S.E., M.M.</a>
                </h3>
                <p>Manajer Layanan Pembelajaran dan Ujian</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/syifqi.webp')}}">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Achmad Syifqi, M.Kom.</a>
                </h3>
                <p>Manajer Marketing dan Registrasi</p>
            </div>
        </div>  
        </div>

        <h3 class="mb-8 text-2xl border-b-4 border-b-yellow-300 pb-2 tracking-tight font-bold text-gray-900 dark:text-white">Staf</h3>
        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/karno.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Sukarno, S.IP.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/novri.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Novri Hendry</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/ishak.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Ishak</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/esick.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Esick Gren Dolly, S.ST.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/abay.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>M. Ali Akbar, S.E.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/ceki.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Ceki Muttaqin, S.Hum.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/ella.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Ella Fitriani Sunardi, S.I.Kom.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/denok.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Denok Sih Utami, S.E.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/bowo.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Witbowo Sulisno, S.Kom.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/dia.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Dia Tami Putri, S.E.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/ayu.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Ayu Rizky Nanda, S.Pd.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/aziz.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Abdul Aziz</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/rian.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Masrianto</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/fadly.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>M. Fadly</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/susi.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Susilawati</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/yansi.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Yansi Siswanto</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/jarno.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Sujarno</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/beni.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Beni Erlis Sudaryanto</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/husaini.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Husaini, S.E.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/afiq.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>M. Afiq Kurniawan, S.Kom.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/arjuna.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Arjuna Panji Prakarsa, S.Kom.</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/adi.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Adi Sendra</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/erman.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Erman</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/yudi.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Yudi Iskandar</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/agus.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Agus Riyanto</a>
                </h3>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-400">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover object-top bg-primary-50 shadow" src="{{asset('images/gallery/staf/ismail.webp')}}">
                <h3 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    <a>Ismail</a>
                </h3>
            </div> 
        </div>  
    </div>
  </section>
@endsection