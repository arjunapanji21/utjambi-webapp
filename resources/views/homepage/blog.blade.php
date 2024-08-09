@extends('layouts.homepage')

@section('content')
@if(count($posts) > 0)
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita
                Seputar Kegiatan di Universitas Terbuka Daerah Jambi</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Ikuti perkembangan dan informasi
                mengenai kehidupan kampus di Universitas Terbuka khususnya untuk daerah Jambi.</p>
        </div>
        <div class="grid grid-cols-3 gap-5">
            @foreach($posts as $post)
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
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
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white "><a href="{{route('show_post_detail', [$post->category->name, $post->slug])}}">{{$post->title}}</a></h2>
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
                    <a href="{{route('show_post_detail', [$post->category->name, $post->slug])}}"
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
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="#"
            class="inline-flex items-center font-medium justify-center text-primary-600 dark:text-primary-500 hover:underline">
            Artikel Lainnya
            <svg class="ml-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
        </a>
        </div>
    </div>
</section>
@endif
@endsection