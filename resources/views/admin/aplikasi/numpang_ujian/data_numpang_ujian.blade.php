@extends('layouts.dashboard')
@section('content')
<div class="mb-2 flex flex-col-reverse lg:flex-row justify-between">
    <h1 class="text-xl font-bold text-gray-700 dark:text-gray-400">Data Numpang Ujian</h1>
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    {{auth()->user()->role}}
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Numpang
                        Ujian</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Data NU</span>
                </div>
            </li>
        </ol>
    </nav>
</div>


<div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
        <div class="w-full md:w-1/2">     
        <form action="{{route('admin.numpang_ujian.data_nu')}}" method="get" class="w-full flex items-center">   
            @csrf
            <label for="filter" class="block text-sm font-medium text-gray-900 dark:text-white me-2 w-fit">Filter:</label>
            <select id="filter" name="filter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option disabled>Filter:</option>
            <option value="nim" >NIM</option>
            <option value="nama" >Nama Mahasiswa</option>
            <option value="ut_daerah_asal" >UT Daerah Asal</option>
            <option value="ut_daerah_tujuan" >UT Daerah Tujuan</option>
            <option value="wilayah_ujian_asal" >Wilayah Ujian Asal</option>
            <option value="wilayah_ujian_tujuan" >Wilayah Ujian Tujuan</option>
            <option value="status" >Status Pengajuan</option>
            <option value="UT Lain Numpang Ke Jambi" >UT Lain Numpang Ke Jambi</option>
            <option value="UT Jambi Numpang Ke UT Lain" >UT Jambi Numpang Ke UT Lain</option>
            <option value="all" >Tampilkan Semua</option>
            </select>   
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <input type="text" id="search" name="search" class="block w-full p-2 text-sm text-gray-900 border border-gray-300  bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ketikkan sesuatu..." value="{{app('request')->input('search')}}"/>
            <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-r-lg border border-primary-600 text-sm px-5 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Tampilkan</button>
        </form>
        </div>
        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            <a href="{{route('admin.numpang_ujian.data_nu.tarik_data_matakuliah')}}" target="_blank"
                class="flex items-center justify-center text-purple-700 bg-purple-100 hover:bg-purple-200 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-purple-200 dark:hover:bg-purple-300 focus:outline-none dark:focus:ring-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-4 w-4 mr-2" fill="currentColor">
                    <path
                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                </svg>
                Tarik Data MK
            </a>
            <a href="{{route('form.numpang_ujian_1')}}" target="_blank"
                class="flex items-center justify-center text-primary-700 bg-primary-100 hover:bg-primary-200 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-200 dark:hover:bg-primary-300 focus:outline-none dark:focus:ring-primary-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-4 w-4 mr-2" fill="currentColor">
                    <path
                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                </svg>
                Form Input
            </a>
            <button type="button"
                class="flex items-center justify-center text-emerald-700 bg-emerald-100 hover:bg-emerald-200 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-200 dark:hover:bg-emerald-200 focus:outline-none dark:focus:ring-emerald-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-3.5 w-3.5 mr-2"
                    fill="currentColor">
                    <path
                        d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                </svg>
                Export
            </button>
        </div>
    </div>
    @if($data != null)
    <div class="overflow-auto max-h-screen px-4">
        <table class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="sticky top-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3 uppercase">#</th>
                    <th scope="col" class="px-6 py-3">
                        NIM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Mahasiswa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        UT Daerah Asal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        UT Daerah Tujuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Wilayah Ujian Asal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Wilayah Ujian Tujuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Skema
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tgl. Pengajuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status Pengajuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if(isset($data))
                @foreach($data as $row)
                <tr class="border-b dark:border-gray-700 hover:bg-gray-100">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$loop->iteration}}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$row->nim}}
                    </th>
                    <td class="px-6 py-4">
                        {{$row->nama}}
                    </td>
                    <td class="px-6 py-4">
                        {{explode('/', $row->ut_daerah_asal)[1]}}
                    </td>
                    <td class="px-6 py-4">
                        {{explode('/', $row->ut_daerah_tujuan)[1]}}
                    </td>
                    <td class="px-6 py-4">
                        {{explode('/',$row->wilayah_ujian_asal)[1]}}
                    </td>
                    <td class="px-6 py-4">
                        {{explode('/',$row->wilayah_ujian_tujuan)[1]}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row->skema}}
                    </td>
                    <td class="px-6 py-4">
                        {{date('d M Y', strtotime($row->created_at))}}
                    </td>
                    <td class="px-6 py-4">
                        @if($row->status == "Diproses")
                        <span
                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{$row->status}}</span>
                        @elseif($row->status == "Diterima")
                        <span
                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{$row->status}}</span>
                        @elseif($row->status == "Ditolak")
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{$row->status}}</span>
                        @else
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{$row->status}}</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 flex items-center justify-end">
                        <button id="modalEditButton-{{$row->id}}" data-modal-target="modalEdit-{{$row->id}}"
                            data-modal-toggle="modalEdit-{{$row->id}}"
                            class="block text-primary-700 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg p-2 text-sm text-center dark:text-primary-600 dark:hover:text-primary-700 dark:focus:ring-primary-800"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                                fill="currentColor">
                                <path
                                    d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                            </svg>
                        </button>
                        <!-- Modal Edit -->
                        <div id="modalEdit-{{$row->id}}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-screen-xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div
                                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Pengajuan Numpang Ujian
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="modalEdit-{{$row->id}}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                        <div class="grid lg:grid-cols-2 items-start justify-between gap-4 mb-4">
                                            <div class="flex items-center gap-4">
                                                <label for="status{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">status</label>
                                                <input type="text" id="status{{$row->id}}" name="status" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->status}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="nim{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">NIM</label>
                                                <input type="text" id="nim{{$row->id}}" name="nim" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->nim}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="nama{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">nama</label>
                                                <input type="text" id="nama{{$row->id}}" name="nama" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->nama}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="prodi{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">prodi</label>
                                                <input type="text" id="prodi{{$row->id}}" name="prodi" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->prodi}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="ut_daerah_asal{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">UT
                                                    Daerah Asal</label>
                                                <input type="text" id="ut_daerah_asal{{$row->id}}" name="ut_daerah_asal" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->ut_daerah_asal}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="ut_daerah_tujuan{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">UT
                                                    Daerah tujuan</label>
                                                <input type="text" id="ut_daerah_tujuan{{$row->id}}" name="ut_daerah_tujuan" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->ut_daerah_tujuan}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="wilayah_ujian_asal{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">Wilayah
                                                    Ujian Asal</label>
                                                <input type="text" id="wilayah_ujian_asal{{$row->id}}" name="wilayah_ujian_asal" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->wilayah_ujian_asal}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="wilayah_ujian_tujuan{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">Wilayah
                                                    Ujian Tujuan</label>
                                                <input type="text" id="wilayah_ujian_tujuan{{$row->id}}" name="wilayah_ujian_tujuan" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->wilayah_ujian_tujuan}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="tgl_pindah_lokasi{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">Tgl.
                                                    Pindah Lokasi</label>
                                                <input type="text" id="tgl_pindah_lokasi{{$row->id}}" name="tgl_pindah_lokasi" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->tgl_pindah_lokasi}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="alasan{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">alasan</label>
                                                <input type="text" id="alasan{{$row->id}}" name="alasan" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->alasan}}" readonly>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <label for="no_wa{{$row->id}}"
                                                    class="block  text-sm font-medium text-gray-900 dark:text-white w-24 lg:w-48 capitalize">WhatsApp</label>
                                                <input type="text" id="no_wa{{$row->id}}" name="no_wa" 
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    value="{{$row->no_wa}}" readonly>
                                            </div>
                                            <div class="grid lg:grid-cols-3 items-center justify-between gap-4">
                                                @if($row->dokumen_pendukung_alasan != null)
                                                <a href="{{asset($row->dokumen_pendukung_alasan)}}" target="_blank"
                                                    class="flex items-center justify-center text-primary-700 bg-primary-100 hover:bg-primary-200 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2.5 py-1 border border-primary-700 dark:bg-primary-200 dark:hover:bg-primary-300 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        class="w-4 h-4 mr-2" fill="currentColor">
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                    Dokumen Pendukung</a>
                                                @else
                                                <button disabled
                                                    class="flex opacity-50 items-center justify-center text-primary-700 bg-primary-100  focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2.5 py-1 border border-primary-700 dark:bg-primary-200  focus:outline-none dark:focus:ring-primary-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        class="w-4 h-4 mr-2" fill="currentColor">
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                    Dokumen Pendukung</button>
                                                @endif
                                                @if($row->surat_pengantar != null)
                                                <a href="{{asset($row->surat_pengantar)}}" target="_blank"
                                                    class="flex items-center justify-center text-primary-700 bg-primary-100 hover:bg-primary-200 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2.5 py-1 border border-primary-700 dark:bg-primary-200 dark:hover:bg-primary-300 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        class="w-4 h-4 mr-2" fill="currentColor">
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                    Surat Pengantar</a>
                                                @else
                                                <button disabled
                                                    class="flex opacity-50 items-center justify-center text-primary-700 bg-primary-100  focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2.5 py-1 border border-primary-700 dark:bg-primary-200  focus:outline-none dark:focus:ring-primary-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        class="w-4 h-4 mr-2" fill="currentColor">
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                    Surat Pengantar</button>
                                                @endif
                                                <a href="{{route('surat.permohonan_numpang_ujian', $row['id'])}}"
                                                    target="_blank"
                                                    class="flex items-center justify-center text-primary-700 bg-primary-100 hover:bg-primary-200 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2.5 py-1 border border-primary-700 dark:bg-primary-200 dark:hover:bg-primary-300 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        class="w-4 h-4 mr-2" fill="currentColor">
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                    Surat Permohonan</a>
                                                <a href="{{route('surat.permohonan_numpang_ujian_panutan', $row['id'])}}"
                                                    target="_blank"
                                                    class="flex items-center justify-center text-primary-700 bg-primary-100 hover:bg-primary-200 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-2.5 py-1 border border-primary-700 dark:bg-primary-200 dark:hover:bg-primary-300 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        class="w-4 h-4 mr-2" fill="currentColor">
                                                        <path
                                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                    Panutan</a>
                                            </div>
                                            <div class="lg:col-span-2">
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <th class="text-center">No.</th>
                                                        <th class="text-center">Kode MK</th>
                                                        <th class="text-center">Nama MK</th>
                                                        <th class="text-center">Kode Waktu Ujian</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach(explode('|',$row->matakuliah) as $mk)
                                                        <tr>
                                                            <td class="border text-center">{{$loop->iteration}}</td>
                                                            <td class="border text-center">{{json_decode($mk)->kode}}
                                                            </td>
                                                            <td class="border text-center">{{json_decode($mk)->nama}}
                                                            </td>
                                                            <td class="border text-center">
                                                                {{json_decode($mk)->kode_waktu_ujian}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="lg:col-span-2">
                                                <label for="keterangan{{$row->id}}"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan
                                                    Untuk Mahasiswa</label>
                                                <textarea  id="keterangan{{$row->id}}" name="keterangan" rows="8"
                                                    class="block px-2.5 py-1 w-full text-sm text-gray-900 bg-gray-50 h-20 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Tinggalkan catatan/keterangan untuk mahasiswa"></textarea>
                                            </div>
                                        </div>
                                        <div class="flex justify-end items-center gap-4">
                                            <form action="{{route('admin.numpang_ujian.data_nu.hapus')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$row->id}}">
                                                <button type="submit"
                                                    onclick="return confirm('Hapus data numpang ujian a.n. {{$row->nama}} ?')"
                                                    class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        class="w-4 h-4" fill="currentColor">
                                                        <path
                                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                    </svg>
                                                </button>
                                            </form>
                                            <form class="flex justify-center items-center gap-4 w-full" action="{{route('admin.numpang_ujian.data_nu.update')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$row->id}}">
                                                <select name="status" 
                                                    class="select2 text-sm rounded-lg  block w-full p-2.5 ">
                                                    <option disabled selected="">Pilih status pengajuan:</option>
                                                    <option value="Antrian">Antrian</option>
                                                    <option value="Diproses">Diproses</option>
                                                    <option value="Diterima">Diterima</option>
                                                    <option value="Ditolak">Ditolak</option>
                                                </select>
                                                <button type="submit"
                                                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 w-fit text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        class="w-4 h-4 mr-2" fill="currentColor">
                                                        <path
                                                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                                    </svg>
                                                    Simpan
                                                </button>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="p-4">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Menampilkan
            <span class="font-semibold text-gray-900 dark:text-white">{{count($data)}}</span> dari <span class="font-semibold text-gray-900 dark:text-white">{{$jumlahData}}</span> data.
        </span>
    </div>
    @endif
</div>
@endsection

@section('script')
<script type="module">
    $("#btn-submit").click(function () {
        $("#btn-submit").addClass("hidden");
        $("#btn-loading").addClass("inline-flex");
        $("#btn-loading").removeClass("hidden");
    });
</script>
<script type="module">
    $(".select2").select2();
</script>
@endsection