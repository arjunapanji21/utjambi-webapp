@extends('layouts.homepage')

@section('content')
@if(isset($data))
<section id="more" class="py-10 px-4 lg:px-8 lg:py-20 bg-gray-50">
    <div class="max-w-screen-xl mx-auto text-center mb-10">
        <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Cek Jadwal <span class="text-blue-600 dark:text-blue-500">Perkuliahan</span></h1>
        <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">Tatap Muka Masa 20241 Universitas Terbuka Daerah Jambi</p>

        <div class="bg-white rounded-lg shadow-lg p-5 lg:p-10 my-5 lg:my-10">
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
            <form action="{{route('kegiatan.jadwal_perkuliahan')}}" method="get" class="w-full lg:inline-flex items-center gap-4 text-left">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="input" id="input"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="input"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Input Nomor
                        Induk Mahasiswa / Kode Tutor</label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
            </form>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto text-center">
        @if($guest == 'mahasiswa')
        <div class="border-b mb-4">
            <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            {{$data[0]->nim}} <span class="text-blue-600 dark:text-blue-500">{{$data[0]->nama_mahasiswa}}</span></h1>
        </div>
        <div class="grid lg:grid-cols-2 gap-4">
            @foreach($data as $row)
            <div class="overflow-auto p-4 bg-white rounded-lg shadow">
                <table class="table w-full text-sm text-left text-gray-800 dark:text-gray-600">
                    <tbody>
                        <tr class="border-b">
                            <td class="bg-gray-100">Kelas</td>
                            <td>{{$row->kode_kelas}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="bg-gray-100">Matakuliah</td>
                            <td class="font-bold">{{$row->nama_matakuliah}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="bg-gray-100">Tutor</td>
                            <td>{{$row->nama_tutor}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="bg-gray-100">Layanan</td>
                            <td>{{$row->layanan}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="bg-gray-100">Lokasi</td>
                            <td class="font-bold">{{$row->lokasi}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="bg-gray-100">Jadwal</td>
                            <td class="font-bold">{{$row->jadwal}} WIB</td>
                        </tr>
                        @if(!is_null($row->link))
                        <tr class="border-b">
                            <td class="bg-gray-100">Link</td>
                            <td><a href="{{$row->link}}" class="text-primary-600 hover:text-primary-800 hover:underline" target="_blank">{{$row->link}}</a></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            @endforeach
        </div>
        @elseif($guest == 'tutor')
        <div class="border-b mb-4">
            <h1
            class="border-l-4 lg:border-none border-yellow-300 pl-2 text-left lg:text-center mb-4 text-2xl font-bold italic leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white flex flex-col lg:flex-row justify-between">
            {{$tutor['kode']}} <span class="text-primary-600 dark:text-primary-500">{{$tutor['nama']}}</span></h1>
            <div class="my-4">
                <a target="_blank" href="https://drive.google.com/drive/folders/1DsKAhItNMh3ialbGaQj8rInCV36EDbag?usp=sharing" class="flex items-center justify-center lg:w-max lg:ml-auto lg:justify-end text-primary-700 bg-primary-100 hover:bg-primary-200 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-200 dark:hover:bg-primary-300 focus:outline-none dark:focus:ring-primary-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5 me-2" fill="currentColor"><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 242.7-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7 288 32zM64 352c-35.3 0-64 28.7-64 64l0 32c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-32c0-35.3-28.7-64-64-64l-101.5 0-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352 64 352zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                    Unduh Template KIT Tutorial</a>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-4">
            @foreach($data as $kelas=>$row)
            <div class="overflow-auto p-4 bg-white rounded-lg shadow">
                <div class="text-left">
                    <h3 class="font-bold text-left pb-2">{{$kelas . ' | ' . $row[0]->lokasi . ' | ' . $row[0]->jadwal}} WIB</h3>
                    @if(!is_null($row[0]->link))
                    <p>
                        Link Tuweb: <a href="{{$row[0]->link}}" target="_blank" class="text-primary-600 hover:text-primary-800 hover:underline italic">{{$row[0]->link}}</a>
                    </p>
                    @endif
                    <a href="{{route('kegiatan.download_pemberkasan', $kelas)}}" target="_blank" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-3.5 py-1.5 text-center me-2 my-2 inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5 me-2" fill="currentColor"><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 242.7-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7 288 32zM64 352c-35.3 0-64 28.7-64 64l0 32c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-32c0-35.3-28.7-64-64-64l-101.5 0-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352 64 352zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                        Unduh Pemberkasan</a>
                </div>
                <table class="table w-full text-sm text-left text-gray-800 dark:text-gray-600">
                    <thead class="sticky top-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3 uppercase">#</th>
                            <th scope="col" class="px-4 py-3 uppercase">Nim</th>
                            <th scope="col" class="px-4 py-3 uppercase">Nama Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($row as $r)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$loop->iteration}}</th>
                            <td class="px-4 py-3">{{$r->nim}}</td>
                            <td class="px-4 py-3">{{$r->nama_mahasiswa}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endforeach
        </div>
        @endif
</section>
@else
<section
    class="grid justify-center items-center lg:grid-cols-2 bg-fixed bg-no-repeat bg-cover bg-gradient-to-r from-primary-600 to-cyan-400 dark:bg-gray-900"
    style="background-image: url({{asset('images/background/blue1.webp')}})">
    <div class="py-8 w-full px-4 text-center lg:text-right lg:py-16 lg:px-12">
        <h1
            class="mb-4 text-6xl lg:text-8xl font-extrabold tracking-tight leading-none drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r  from-yellow-200 via-yellow-300 to-orange-500">
            Jadwal Tutorial Tatap Muka</h1>
        <p class="mb-8 text-lg font-semibold text-gray-100 lg:text-3xl dark:text-gray-400 drop-shadow-lg">Universitas
            Terbuka Daerah Jambi</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-end sm:space-y-0 sm:space-x-4">
            {{-- <a href="{{route('wisuda.cari_data_wisudawan')}}" target="_blank"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-yellow-800 rounded-lg bg-gradient-to-r from-yellow-200 via-yellow-300 to-yellow-400  focus:ring-4 border border-gray-300 hover:text-white focus:ring-primary-300 dark:focus:ring-primary-900 shadow-lg">
                Jadwal & Lokasi
            </a> --}}
            <a href="#more"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-100 rounded-lg border border-gray-300 hover:bg-primary-800 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 shadow-lg">
                Selengkapnya
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
        <img src="{{asset('images/gallery/model/tutorial.webp')}}" alt="">
    </div>
</section>

<section id="more" class="lg:pt-20 bg-gray-50">
    <div class="py-8 px-4 lg:py-16 lg:px-6 max-w-screen-xl mx-auto text-center">
        <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Cek Jadwal <span class="text-blue-600 dark:text-blue-500">Perkuliahan</span></h1>
        <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">Tatap Muka Masa 20241 Universitas Terbuka Daerah Jambi</p>

        <div class="bg-white rounded-lg shadow-lg p-10 my-10">
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
            <form action="{{route('kegiatan.jadwal_perkuliahan')}}" method="get" class="w-full lg:inline-flex items-center gap-4 text-left">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="input" id="input"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="input"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Input Nomor
                        Induk Mahasiswa / Kode Tutor</label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
            </form>
        </div>
    </div>
</section>
@endif
@endsection