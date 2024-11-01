@extends('layouts.homepage')

@section('meta')
<meta property="og:title" content="Panduan Cara Bayar SPP | Universitas Terbuka Jambi">
<meta property="og:description" content="Panduan Cara Bayar SPP UT Melalui Mobile Banking">
<meta property="og:image" content="{{asset('images/gallery/thumbnail/1.JPG')}}" >
<meta property="og:url" content="{{route('mahasiswa.pembayaran_spp')}}">
@endsection

@section('content')
<section class="grid justify-center items-center lg:grid-cols-2 bg-fixed bg-no-repeat bg-cover bg-gradient-to-r from-primary-600 to-cyan-400 dark:bg-gray-900" style="background-image: url({{asset('images/background/blue1.webp')}})">
    <div class="w-full p-10 text-center lg:text-right lg:py-16 lg:px-12">
        <h1 class="mb-4 text-7xl lg:text-9xl font-extrabold tracking-tight leading-none drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r  from-yellow-200 via-yellow-300 to-orange-500">Panduan</h1>
        <p class="mb-8 text-lg font-semibold text-gray-100 lg:text-3xl dark:text-gray-400 drop-shadow-lg">Pembayaran SPP Universitas Terbuka <br/>Melalui Mobile Banking</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-end sm:space-y-0 sm:space-x-4">
            <a href="#more" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-100 rounded-lg border border-gray-300 hover:bg-primary-800 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 shadow-lg">
                Selengkapnya
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>  
        </div>
    </div>
    <div class="w-full mt-10 max-w-lg">
        <img src="{{asset('images/gallery/model/hp.webp')}}" alt="">
    </div>
</section>

<section id="more" class="lg:pt-20 bg-gradient-to-br from-white to-gray-100 dark:bg-gray-900">
    <div class="grid gap-4 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid-cols-2 lg:py-8 lg:px-6">
        @for($i=2;$i<10;$i++)
        <div class="bg-white rounded-lg shadow-lg p-2.5 font-normal text-gray-800 sm:text-lg ">
            <img src="{{asset('images/gallery/pembayaran/'.$i.".jpeg")}}" alt="">
        </div>
        @endfor
    </div>
</section>
@endsection