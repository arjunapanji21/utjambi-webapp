@extends('layouts.dashboard')

@section('content')
<div class="space-y-6">
  <section id="stats">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-primary-100 transition-all">
        <div class="flex items-center justify-between mb-4">
          <h3 class="font-medium text-gray-600">Jumlah Artikel</h3>
          <span class="p-2 bg-blue-50 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M19.5 2h-15A2.5 2.5 0 0 0 2 4.5v15A2.5 2.5 0 0 0 4.5 22h15a2.5 2.5 0 0 0 2.5-2.5v-15A2.5 2.5 0 0 0 19.5 2zM8 19H5v-9h3zm-1.5-10.75A1.75 1.75 0 1 1 8.25 6.5 1.75 1.75 0 0 1 6.5 8.25zm11.5 10.75h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0 0 11 14.19a.66.66 0 0 0 0 .14V19H8v-9h2.9v1.3a3.11 3.11 0 0 1 2.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>
          </span>
        </div>
        <p class="font-bold text-3xl mb-1">{{$jumlah_artikel}}</p>
        <p class="text-sm text-gray-500">Total artikel yang dipublikasikan</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-primary-100 transition-all">
        <div class="flex items-center justify-between mb-4">
          <h3 class="font-medium text-gray-600">Pengunjung Hari Ini</h3>
          <span class="p-2 bg-green-50 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="currentColor"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </span>
        </div>
        <p class="font-bold text-3xl mb-1">{{$pengunjung_hari_ini}}</p>
        <p class="text-sm text-gray-500">Pengunjung dalam 24 jam terakhir</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-primary-100 transition-all">
        <div class="flex items-center justify-between mb-4">
          <h3 class="font-medium text-gray-600">Total Pengunjung</h3>
          <span class="p-2 bg-purple-50 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-500" viewBox="0 0 24 24" fill="currentColor"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-4-4h-2"></path><circle cx="9" cy="7" r="4"></circle></svg>
          </span>
        </div>
        <p class="font-bold text-3xl mb-1">{{$jumlah_pengunjung}}</p>
        <p class="text-sm text-gray-500">Total pengunjung keseluruhan</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-primary-100 transition-all">
        <div class="flex items-center justify-between mb-4">
          <h3 class="font-medium text-gray-600">Total Views</h3>
          <span class="p-2 bg-orange-50 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-500" viewBox="0 0 24 24" fill="currentColor"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </span>
        </div>
        <p class="font-bold text-3xl mb-1">{{$total_views}}</p>
        <p class="text-sm text-gray-500">Total views dari seluruh artikel</p>
      </div>
    </div>
  </section>

  <div class="grid lg:grid-cols-2 gap-6">
    <section id="post">
      <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
          <div class="w-full md:w-1/2">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Popular Posts</h3>
            <p class="mt-1 text-sm text-gray-500">Artikel dengan jumlah views terbanyak</p>
          </div>
          <div
              class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
              <a href="{{route('admin.post.new')}}"
                  class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                  <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true">
                      <path clip-rule="evenodd" fill-rule="evenodd"
                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                  </svg>
                  New Post
              </a>
          </div>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50/50">
              <tr>
                <th scope="col" class="px-4 py-3">#</th>
                <th scope="col" class="px-4 py-3">Title</th>
                <th scope="col" class="px-4 py-3">Category</th>
                <th scope="col" class="px-4 py-3">Views</th>
                <th scope="col" class="px-4 py-3 text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              @foreach($posts as $post)
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-3">{{$loop->iteration}}</td>
                <td class="px-4 py-3 font-medium">
                  <div class="max-w-[200px] truncate">{{$post->title}}</div>
                  <div class="text-xs text-gray-500">By {{$post->author->name}}</div>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 text-xs rounded-full bg-gray-100">{{$post->category->name}}</span>
                </td>
                <td class="px-4 py-3">{{number_format($post->views)}}</td>
                <td class="px-4 py-3">
                  <div class="flex items-center justify-end gap-2">
                    @if(auth()->user()->role == "author" && $post->author_id == auth()->user()->id)
                    <a href="{{route('admin.post.edit', $post->id)}}" class="p-2 rounded-full hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                    </a>
                    @elseif(auth()->user()->role == "superadmin" || auth()->user()->role == "admin")
                    <a href="{{route('admin.post.edit', $post->id)}}" class="p-2 rounded-full hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                    </a>
                    @endif
                    <a href="{{route('show_post_detail', [strtolower($post->category->name), $post->slug])}}" class="p-2 rounded-full hover:bg-gray-100" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5" fill="currentColor"><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="visitor">
      <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Latest Visitors</h3>
            <p class="mt-1 text-sm text-gray-500">Pengunjung website terbaru</p>
          </div>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50/50">
              <tr>
                <th scope="col" class="px-4 py-3">#</th>
                <th scope="col" class="px-4 py-3">IP Address</th>
                <th scope="col" class="px-4 py-3">Visits</th>
                <th scope="col" class="px-4 py-3">Last Visit</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              @foreach($visitors as $visitor)
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-3">{{$loop->iteration}}</td>
                <td class="px-4 py-3 font-medium">{{$visitor->ip_add}}</td>
                <td class="px-4 py-3">{{number_format($visitor->visits)}}</td>
                <td class="px-4 py-3">
                  <div class="max-w-[200px] truncate">
                    <a href="{{$visitor->last_visit_url}}" class="text-primary-600 hover:underline" target="_blank">
                      {{$visitor->last_visit_url}}
                    </a>
                  </div>
                  <div class="text-xs text-gray-500">{{date('d M Y H:i', strtotime($visitor->updated_at))}}</div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection