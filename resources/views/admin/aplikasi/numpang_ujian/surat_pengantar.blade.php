@extends('layouts.dashboard')
@section('content')
<div class="mb-2 flex flex-col-reverse lg:flex-row justify-between">
    <h1 class="text-xl font-bold text-gray-700 dark:text-gray-400">Surat Pengantar Numpang Ujian Ke UT Daerah Lain</h1>
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
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Surat Pengantar</span>
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
            <option value="no_surat" >Nomor Surat</option>
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
                        Nomor Surat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tujuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Mahasiswa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if(isset($data))
                @foreach($data as $key=>$row)
                <tr class="border-b dark:border-gray-700">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$loop->iteration}}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        
                    </th>
                    <td class="px-6 py-4">
                        17 / UT JAMBI
                    </td>
                    <td class="px-6 py-4">
                        {{$key}}
                    </td>
                    <td class="px-6 py-4">
                        {{count($row)}}
                    </td>
                    <td class="px-4 py-3 flex items-center justify-end">
                        <form target="_blank" action="{{route('surat.permohonan_numpang_ujian_panutan_batch')}}" method="get">
                            <input type="hidden" name="ut_daerah_tujuan" value="{{$key}}">
                            <button type="submit"
                                class="block text-primary-700 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg p-2 text-sm text-center dark:text-primary-600 dark:hover:text-primary-700 dark:focus:ring-primary-800"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                                    fill="currentColor">
                                    <path
                                        d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                </svg>
                            </button>
                        </form>
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