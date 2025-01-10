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
        <div class="grid lg:grid-cols-3 gap-10">
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
            <article class="max-w-md bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 group transition duration-500 hover:bg-primary-50">
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
    </div>
</section>
@endif
@endsection