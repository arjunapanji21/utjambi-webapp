@extends('layouts.dashboard')

@section('content')
<section id="stats">
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4">
    <div class="bg-white p-4 rounded-lg shadow">
      <h3 class="font-semibold text-lg">Jumlah Artikel</h3>
      <p class="font-bold text-4xl text-right">{{$jumlah_artikel}}</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <h3 class="font-semibold text-lg">Pengunjung Hari Ini</h3>
        <p class="font-bold text-4xl text-right">{{$pengunjung_hari_ini}}</p>
      </div>
    <div class="bg-white p-4 rounded-lg shadow">
      <h3 class="font-semibold text-lg">Jumlah Pengunjung</h3>
      <p class="font-bold text-4xl text-right">{{$jumlah_pengunjung}}</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
      <h3 class="font-semibold text-lg">Total Views</h3>
      <p class="font-bold text-4xl text-right">{{$total_views}}</p>
    </div>
  </div>
</section>

<div class="grid lg:grid-cols-2 gap-4">
    <section id="post">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
          <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
              <div class="w-full md:w-1/2">
                  <h3 class="text-xl font-semibold dark:text-white">Popular Posts</h3>
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
          <div class="overflow-x-auto p-2 pb-4">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="px-4 py-3">no</th>
                          <th scope="col" class="px-4 py-3">title</th>
                          <th scope="col" class="px-4 py-3">author</th>
                          <th scope="col" class="px-4 py-3">category</th>
                          <th scope="col" class="px-4 py-3">publish at</th>
                          <th scope="col" class="px-4 py-3">views</th>
                          <th scope="col" class="px-4 py-3">
                              <span class="sr-only">Actions</span>
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($posts as $post)
                      <tr class="border-b dark:border-gray-700">
                          <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$loop->iteration}}</th>
                          <td class="px-4 py-3 font-semibold">{{$post->title}}</td>
                          <td class="px-4 py-3">{{$post->author->name}}</td>
                          <td class="px-4 py-3">{{$post->category->name}}</td>
                      <td class="px-4 py-3">{{$post->status == "publish" ? date('d/m/Y', strtotime($post->date)) : ''}}</td>
                          <td class="px-4 py-3">{{$post->views}}</td>
                          <td class="px-4 py-3 flex items-center justify-end">
                              @if(auth()->user()->role == "author" && $post->author_id == auth()->user()->id)
                              <a href="{{route('admin.post.edit', $post->id)}}" class="p-2 rounded-full hover:bg-gray-100">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                              </a>
                              @elseif(auth()->user()->role == "superadmin" || auth()->user()->role == "admin")
                              <a href="{{route('admin.post.edit', $post->id)}}" class="p-2 rounded-full hover:bg-gray-100">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                              </a>
                              @endif
                              <a href="{{route('show_post_detail', [strtolower($post->category->name), $post->slug])}}" class="p-2 rounded-full hover:bg-gray-100" target="_blank">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5" fill="currentColor"><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                              </a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div>
      </div>
      </section>
      <section id="visitor">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
          <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
              <div class="w-full md:w-1/2">
                  <h3 class="text-xl font-semibold dark:text-white">Latest Visitor</h3>
              </div>
          </div>
          <div class="overflow-x-auto p-2 pb-4">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="px-4 py-3">No</th>
                          <th scope="col" class="px-4 py-3">IP Address</th>
                          <th scope="col" class="px-4 py-3">Visits</th>
                          <th scope="col" class="px-4 py-3">Last Visit URL</th>
                          <th scope="col" class="px-4 py-3">Updated At</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($visitors as $visitor)
                      <tr class="border-b dark:border-gray-700">
                          <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$loop->iteration}}</th>
                          <td class="px-4 py-3 font-semibold">{{$visitor->ip_add}}</td>
                          <td class="px-4 py-3">{{$visitor->visits}}</td>
                          <td class="px-4 py-3">
                              <a href="{{$visitor->last_visit_url}}" class="text-primary-600 hover:text-primary-900 hover:underline" target="_blank">
                                {{$visitor->last_visit_url}}
                            </a>
                          <td class="px-4 py-3">{{date('d/m/Y H:i T', strtotime($visitor->updated_at))}}</td>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div>
      </div>
      </section>
</div>
@endsection