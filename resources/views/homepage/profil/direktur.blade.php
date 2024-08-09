@extends('layouts.homepage')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Direktur <br><span class="font-bold text-2xl">Universitas Terbuka Daerah Jambi</span></h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Dari masa ke masa :</p>
        </div> 
        <img class="w-full lg:w-1/3 mx-auto rounded-lg shadow-xl mb-10" src="{{asset('images/gallery/direktur/periode14.webp')}}">
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-4">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode13.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode12.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode11.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode10.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode9.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode8.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode7.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode6.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode5.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode4.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode3.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode2.webp')}}">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/direktur/periode1.webp')}}">
            
        </div>  
    </div>
  </section>
@endsection