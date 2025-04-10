@extends('layouts.dashboard') @section('content')
<div class="mb-2 flex flex-col-reverse lg:flex-row justify-between">
    <h1 class="text-xl font-bold text-gray-700 dark:text-gray-400">
        Pendaftaran Wisuda UT Jambi
    </h1>
    <nav class="flex italic" aria-label="Breadcrumb">
        <ol
            class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse list-none"
        >
            <li class="inline-flex items-center">
                <a
                    href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                >
                    {{auth()->user()->role}}
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg
                        class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 6 10"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 9 4-4-4-4"
                        />
                    </svg>
                    <a
                        href="#"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white"
                        >Wisuda</a
                    >
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg
                        class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 6 10"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 9 4-4-4-4"
                        />
                    </svg>
                    <span
                        class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                        >Pendaftaran Wisuda</span
                    >
                </div>
            </li>
        </ol>
    </nav>
</div>

<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 mb-4">
    <div
        data-filter="request-lip"
        class="bg-white border border-gray-200 rounded-lg shadow p-4 hover:shadow-lg transition-shadow duration-300 dark:bg-gray-800 dark:border-gray-700 cursor-pointer"
    >
        <div class="flex flex-col">
            <div class="flex items-center justify-between mb-2">
                <div>
                    <p
                        class="text-sm font-medium text-gray-500 dark:text-gray-400"
                    >
                        Request LIP Wisuda
                    </p>
                    <h3
                        class="text-2xl font-bold text-gray-700 dark:text-white"
                    >
                        {{$stats['request_lip']}}
                    </h3>
                </div>
                <div
                    class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 dark:bg-blue-900"
                >
                    <svg
                        class="w-6 h-6 text-blue-600 dark:text-blue-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                </div>
            </div>
            <div class="inline-flex items-center text-sm">
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                        class="bg-red-500 h-2 rounded-full"
                        style="width: {{$stats['request_lip_percentage']}}%"
                    ></div>
                </div>
                <span class="ml-2 text-gray-500">{{$stats['request_lip_percentage']}}%</span>
            </div>
        </div>
    </div>
    <div
        data-filter="sudah-bayar"
        class="bg-white border border-gray-200 rounded-lg shadow p-4 hover:shadow-lg transition-shadow duration-300 dark:bg-gray-800 dark:border-gray-700 cursor-pointer"
    >
        <div class="flex flex-col">
            <div class="flex items-center justify-between mb-2">
                <div>
                    <p
                        class="text-sm font-medium text-gray-500 dark:text-gray-400"
                    >
                        Sudah Bayar
                    </p>
                    <h3
                        class="text-2xl font-bold text-yellow-600 dark:text-yellow-400"
                    >
                        {{$stats['sudah_bayar']}}
                    </h3>
                </div>
                <div
                    class="flex items-center justify-center w-12 h-12 rounded-full bg-yellow-50 dark:bg-yellow-900"
                >
                    <svg 
                        class="w-6 h-6 text-yellow-600 dark:text-yellow-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </div>
            </div>
            <div class="inline-flex items-center text-sm">
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                        class="bg-yellow-500 h-2 rounded-full"
                        style="width: {{$stats['sudah_bayar_percentage']}}%"
                    ></div>
                </div>
                <span class="ml-2 text-gray-500">{{$stats['sudah_bayar_percentage']}}%</span>
            </div>
        </div>
    </div>
    <div
        data-filter="belum-verifikasi"
        class="bg-white border border-gray-200 rounded-lg shadow p-4 hover:shadow-lg transition-shadow duration-300 dark:bg-gray-800 dark:border-gray-700 cursor-pointer"
    >
        <div class="flex flex-col">
            <div class="flex items-center justify-between mb-2">
                <div>
                    <p
                        class="text-sm font-medium text-gray-500 dark:text-gray-400"
                    >
                        Belum Diverifikasi
                    </p>
                    <h3
                        class="text-2xl font-bold text-red-600 dark:text-red-400"
                    >
                        {{$stats['belum_verifikasi']}}
                    </h3>
                </div>
                <div
                    class="flex items-center justify-center w-12 h-12 rounded-full bg-red-50 dark:bg-red-900"
                >
                    <svg
                        class="w-6 h-6 text-red-600 dark:text-red-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </div>
            </div>
            <div class="inline-flex items-center text-sm">
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                        class="bg-red-400 h-2 rounded-full"
                        style="width: {{$stats['belum_verifikasi_percentage']}}%"
                    ></div>
                </div>
                <span class="ml-2 text-gray-500">{{$stats['belum_verifikasi_percentage']}}%</span>
            </div>
        </div>
    </div>
    <div
        data-filter="terverifikasi"
        class="bg-white border border-gray-200 rounded-lg shadow p-4 hover:shadow-lg transition-shadow duration-300 dark:bg-gray-800 dark:border-gray-700 cursor-pointer"
    >
        <div class="flex flex-col">
            <div class="flex items-center justify-between mb-2">
                <div>
                    <p
                        class="text-sm font-medium text-gray-500 dark:text-gray-400"
                    >
                        Terverifikasi
                    </p>
                    <h3
                        class="text-2xl font-bold text-green-600 dark:text-green-400"
                    >
                        {{$stats['terverifikasi']}}
                    </h3>
                </div>
                <div
                    class="flex items-center justify-center w-12 h-12 rounded-full bg-green-50 dark:bg-green-900"
                >
                    <svg
                        class="w-6 h-6 text-green-600 dark:text-green-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </div>
            </div>
            <div class="inline-flex items-center text-sm">
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div
                        class="bg-green-500 h-2 rounded-full"
                        style="width: {{$stats['terverifikasi_percentage']}}%"
                    ></div>
                </div>
                <span class="ml-2 text-gray-500">{{$stats['terverifikasi_percentage']}}%</span>
            </div>
        </div>
    </div>
</div>

<div
    class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden"
>
    <div
        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4"
    >
        <div class="w-full md:w-1/2">
            <form
                method="GET"
                action="{{ route('admin.wisuda.pendaftaran') }}"
                class="flex items-center"
            >
                <label for="search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="currentColor"
                            viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="search"
                        name="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search"
                        value="{{ request('search') }}"
                    />
                </div>
            </form>
        </div>
        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0"
        >
            <a 
                href="{{ route('admin.wisuda.pendaftaran.export', ['filter' => request('filter'), 'search' => request('search')]) }}"
                class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800"
            >
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 5v2h3l-4 4-4-4h3V5h2zm-2 9h2v-2H8l4 4 4-4h-3v-2h-2v4z"/>
                </svg>
                Export Data
            </a>

            <button
                type="button"
                data-modal-target="crud-modal" 
                data-modal-toggle="crud-modal"
                class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
            >
                <svg
                    class="h-3.5 w-3.5 mr-2"
                    fill="currentColor"
                    viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    />
                </svg>
                Data Calon Wisudawan
            </button>
        </div>
    </div>
    <div class="max-h-screen overflow-auto px-4 relative">
        <table
            class="table w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
            <thead
                class="sticky top-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-4 py-3">No.</th>
                    <th scope="col" class="px-4 py-3">Yudisium</th>
                    <th scope="col" class="px-4 py-3">NIM</th>
                    <th scope="col" class="px-4 py-3">NAMA</th>
                    <th scope="col" class="px-4 py-3">IKUT SEMINAR({{$stats['ikut_seminar']}}/{{$stats['total']}})</th>
                    <th scope="col" class="px-4 py-3">STATUS</th>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($paginator as $row)
                <tr class="border-b dark:border-gray-700">
                    <th
                        scope="row"
                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        {{ $loop->iteration + ($paginator->currentPage() - 1) * $paginator->perPage() }}
                    </th>
                    <td class="px-4 py-3">{{$row->masa_yudisium}}</td>
                    <td class="px-4 py-3">{{$row->nim}}</td>
                    <td class="px-4 py-3">{{$row->nama}}</td>
                    <td class="px-4 py-3">
                        @if($row->ikut_seminar == 0)
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-red-100 text-red-600 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-red-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"
                                class="w-3.5 h-3.5"
                                fill="currentColor"
                            >
                                <path
                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8-12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"
                                />
                            </svg>
                        </span>
                        @else
                        <span
                            class="flex items-center justify-center w-6 h-6 bg-green-100 text-green-600 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                                class="w-3.5 h-3.5"
                                fill="currentColor"
                            >
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"
                                />
                            </svg>
                        </span>
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        @if($row->bukti_pembayaran == 'Request LIP')
                        <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">Request LIP</span>
                        @elseif($row->bukti_pembayaran != null && $row->bukti_pembayaran != 'Request LIP' && $row->konfirmasi_lip == 0)
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-yellow-900 dark:text-yellow-300">Menunggu Verifikasi</span>
                        @elseif($row->bukti_pembayaran != null && $row->bukti_pembayaran != 'Request LIP' && $row->konfirmasi_lip == 1)
                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">Terverifikasi</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 flex gap-2 items-center justify-end">
                        @if($row->bukti_pembayaran != null && $row->bukti_pembayaran != 'Request LIP')
                        <a
                            href="{{asset('uploads/wisuda/bukti_bayar/'.$row->bukti_pembayaran)}}"
                            target="_blank"
                            class="inline-flex items-center py-1.5 px-5 text-xs font-medium text-primary-600 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        >
                            Bukti Bayar
                        </a>
                        @if($row->konfirmasi_lip == 0)
                        <button
                            data-modal-target="modal-tolak-bukti-bayar"
                            data-modal-toggle="modal-tolak-bukti-bayar"
                            class="inline-flex items-center py-1.5 px-5 text-xs font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-red-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        >
                            Tolak
                        </button>
                        <div
                            id="modal-tolak-bukti-bayar"
                            tabindex="-1"
                            aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                        >
                            <div
                                class="relative p-4 w-full max-w-md max-h-full"
                            >
                                <!-- Modal content -->
                                <div
                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                                >
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600"
                                    >
                                        <h3
                                            class="text-xl font-semibold text-gray-900 dark:text-white"
                                        >
                                            Tolak Bukti Pembayaran
                                        </h3>
                                        <button
                                            type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="modal-tolak-bukti-bayar"
                                        >
                                            <svg
                                                class="w-3 h-3"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 14 14"
                                            >
                                                <path
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                                                />
                                            </svg>
                                            <span class="sr-only"
                                                >Close modal</span
                                            >
                                        </button>
                                    </div>
                                    <form
                                        action="{{
                                            route(
                                                'kegiatan.wisuda.pendaftaran.tolak_bukti_bayar_wisuda'
                                            )
                                        }}"
                                        method="post"
                                    >
                                        @csrf
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <input
                                                type="hidden"
                                                name="nim"
                                                value="{{$row->nim}}"
                                                readonly
                                            />
                                            <div>
                                                <label
                                                    for="keterangan"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                    >Keterangan</label
                                                >
                                                <textarea
                                                    id="keterangan"
                                                    name="keterangan"
                                                    rows="4"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Write your thoughts here..."
                                                ></textarea>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600"
                                        >
                                            <button
                                                type="submit"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            >
                                                Submit
                                            </button>
                                            <button
                                                data-modal-hide="modal-tolak-bukti-bayar"
                                                type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                            >
                                                Batal
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a
                            href="{{route('kegiatan.wisuda.pendaftaran.konfirmasi', $row->id)}}"
                            onclick="return confirm('Konfirmasi data calon wisudawan a.n. {{$row->nama}} ?')"
                            class="inline-flex items-center py-1.5 px-5 text-xs font-medium text-white focus:outline-none bg-primary-600 rounded-lg border border-gray-200 hover:bg-primary-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        >
                            Konfirmasi
                        </a>
                        @endif @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td
                        colspan="8"
                        class="text-center py-4 text-gray-500 dark:text-gray-400"
                    >
                        No data found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-4">
        {{ $paginator->links('components.pagination') }}
    </div>
</div>

<!-- modal tambah peserta wisuda -->
<div
    id="crud-modal"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
>
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600"
            >
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Calon Wisudawan
                </h3>
                <button
                    type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal"
                >
                    <svg
                        class="w-3 h-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form
                class="p-4 md:p-5"
                action="{{ route('admin.wisuda.pendaftaran.import') }}"
                method="post"
                enctype="multipart/form-data"
                id="import-form"
            >
                @csrf
                <div class="grid gap-4 mb-4">
                    <div class="col-span-2">
                        <label
                            for="file"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >Upload File</label
                        >
                        <div
                            id="drop-area"
                            class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 dark:border-gray-600"
                        >
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Drag & drop your file here or click to select
                            </p>
                            <input
                                id="file"
                                name="file"
                                type="file"
                                accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                class="hidden"
                            />
                        </div>
                        <p
                            id="file-feedback"
                            class="mt-2 text-sm text-red-600 hidden"
                        >
                            Please upload a valid file.
                        </p>
                        <div id="file-preview" class="mt-4 hidden">
                            <p
                                class="text-sm font-medium text-gray-900 dark:text-white"
                            >
                                Selected File:
                            </p>
                            <p
                                id="file-name"
                                class="text-sm text-gray-500 dark:text-gray-400"
                            ></p>
                        </div>
                    </div>
                </div>
                <div id="progress-container" class="hidden mb-4">
                    <label
                        for="progress-bar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Upload Progress</label
                    >
                    <div
                        class="w-full bg-gray-200 rounded-full dark:bg-gray-700"
                    >
                        <div
                            id="progress-bar"
                            class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                            style="width: 0%"
                        >
                            0%
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-3">
                    <button
                        type="button"
                        id="cancel-upload"
                        class="hidden text-gray-900 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                    >
                        Cancel
                    </button>
                    <button
                        type="submit"
                        id="submit-button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="module">
    let searchTimeout;

    function debouncedSearch() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            const value = document
                .getElementById("search")
                .value.toLowerCase()
                .trim();
            const rows = document.querySelectorAll("table tbody tr");
            rows.forEach((row, index) => {
                if (!index) return;
                const cells = row.querySelectorAll("td");
                const match = Array.from(cells).some((cell) =>
                    cell.textContent.toLowerCase().includes(value)
                );
                row.style.display = match ? "" : "none";
            });
        }, 300);
    }

    document.addEventListener("DOMContentLoaded", () => {
        const table = document.querySelector("table");
        const spinner = document.getElementById("loading-spinner");

        table.addEventListener("loadstart", () =>
            spinner.classList.remove("hidden")
        );
        table.addEventListener("loadend", () =>
            spinner.classList.add("hidden")
        );
    });

    const dropArea = document.getElementById("drop-area");
    const fileInput = document.getElementById("file");
    const fileFeedback = document.getElementById("file-feedback");
    const filePreview = document.getElementById("file-preview");
    const fileName = document.getElementById("file-name");
    const progressBar = document.getElementById("progress-bar");
    const progressContainer = document.getElementById("progress-container");
    const cancelButton = document.getElementById("cancel-upload");
    const submitButton = document.getElementById("submit-button");
    const form = document.getElementById("import-form");
    let uploadRequest;

    // Drag-and-drop functionality
    dropArea.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropArea.classList.add("border-blue-500");
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("border-blue-500");
    });

    dropArea.addEventListener("drop", (e) => {
        e.preventDefault();
        dropArea.classList.remove("border-blue-500");
        const files = e.dataTransfer.files;
        if (files.length) {
            fileInput.files = files;
            handleFileSelection(files[0]);
        }
    });

    dropArea.addEventListener("click", () => fileInput.click());

    fileInput.addEventListener("change", () => {
        if (fileInput.files.length) {
            handleFileSelection(fileInput.files[0]);
        }
    });

    function handleFileSelection(file) {
        if (
            file &&
            (file.type ===
                "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" ||
                file.type === "application/vnd.ms-excel" ||
                file.name.endsWith(".csv"))
        ) {
            fileFeedback.classList.add("hidden");
            filePreview.classList.remove("hidden");
            fileName.textContent = file.name;
        } else {
            fileFeedback.classList.remove("hidden");
            filePreview.classList.add("hidden");
        }
    }

    // Form submission with progress
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const file = fileInput.files[0];
        if (!file) {
            fileFeedback.classList.remove("hidden");
            return;
        }

        fileFeedback.classList.add("hidden");
        progressContainer.classList.remove("hidden");
        cancelButton.classList.remove("hidden");
        submitButton.disabled = true;

        const formData = new FormData(form);
        uploadRequest = new XMLHttpRequest();

        uploadRequest.upload.addEventListener("progress", (e) => {
            if (e.lengthComputable) {
                const percentComplete = Math.round((e.loaded / e.total) * 100);
                progressBar.style.width = percentComplete + "%";
                progressBar.textContent = percentComplete + "%";
            }
        });

        uploadRequest.addEventListener("load", () => {
            alert("File uploaded successfully!");
            resetForm();
        });

        uploadRequest.addEventListener("error", () => {
            alert("An error occurred during the upload.");
            resetForm();
        });

        uploadRequest.open("POST", form.action);
        uploadRequest.setRequestHeader(
            "X-CSRF-TOKEN",
            document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content")
        );
        uploadRequest.send(formData);
    });

    cancelButton.addEventListener("click", () => {
        if (uploadRequest) {
            uploadRequest.abort();
            alert("Upload canceled.");
            resetForm();
        }
    });

    function resetForm() {
        progressContainer.classList.add("hidden");
        cancelButton.classList.add("hidden");
        submitButton.disabled = false;
        progressBar.style.width = "0%";
        progressBar.textContent = "0%";
        filePreview.classList.add("hidden");
        form.reset();
    }

    // Replace the filter implementation with URL-based filtering
    function applyFilter(filterType) {
        // Get current URL and params
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        
        // If clicking the same filter again, remove the filter
        if (params.get('filter') === filterType) {
            params.delete('filter');
            document.querySelectorAll('[data-filter]').forEach(card => {
                card.classList.remove('ring-2', 'ring-blue-500');
            });
        } else {
            // Set new filter
            params.set('filter', filterType);
            
            // Update card styles
            document.querySelectorAll('[data-filter]').forEach(card => {
                if (card.dataset.filter === filterType) {
                    card.classList.add('ring-2', 'ring-blue-500');
                } else {
                    card.classList.remove('ring-2', 'ring-blue-500');
                }
            });
        }

        // Update URL with new params and navigate
        window.location.href = `${url.pathname}?${params.toString()}`;
    }

    // Add click handlers to filter cards
    document.querySelectorAll('[data-filter]').forEach(card => {
        card.addEventListener('click', () => {
            applyFilter(card.dataset.filter);
        });
    });

    // Highlight active filter on page load
    document.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const activeFilter = urlParams.get('filter');
        
        if (activeFilter) {
            const activeCard = document.querySelector(`[data-filter="${activeFilter}"]`);
            if (activeCard) {
                activeCard.classList.add('ring-2', 'ring-blue-500');
            }
        }
    });
</script>
@endsection
