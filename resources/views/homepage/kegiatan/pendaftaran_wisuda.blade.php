@extends('layouts.homepage')

@section('content')
<section id="more" class="lg:pt-20 bg-gray-50">
    <div class="py-8 px-6 max-w-screen-xl mx-auto">
        <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Wisuda UT Jambi <span class="text-blue-600 dark:text-blue-500">Periode II</span> Tahun 2024.</h1>
        <p class="font-normal text-gray-500 lg:text-lg text-justify dark:text-gray-400">bagi calon wisudawan
            <strong>diwajibkan untuk mendaftar secara online</strong> melalui form yang sudah disediakan, ijazah
            diberikan langsung pada saat hari wisuda. Peserta wisuda adalah yang telah terjaring Yudisium dan Ijazah
            sudah sampai di kantor Universitas Terbuka Daerah Jambi.
        </p>

        <div class="bg-white rounded shadow-lg p-8 my-10">
            <h2
                class="mb-4 text-lg font-bold leading-none tracking-tight text-gray-900 md:text-xl lg:text-2xl dark:text-white">
                Pendaftaran Calon Peserta Wisuda</h2>

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
                @elseif(Session::has('success'))
                <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{ Session::get('success') }}
                    </div>
                  </div>
                @endif
            @if($calon_wisuda != "")
            <div class="p-4">
                <ol class="relative border-s border-gray-200 dark:border-gray-700 list-none">
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-green-100 text-green-600 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3.5 h-3.5"
                                fill="currentColor">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                            {{$calon_wisuda->nama}}
                        </h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{$calon_wisuda->nim}}</time>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Selamat, kamu telah
                            terjaring yudisium masa {{$calon_wisuda->masa_yudisium}}.</p>
                            <a href="https://aksi.ut.ac.id/alumni" target="_blank" class="inline-flex shadow items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-4 h-4 me-2.5" fill="currentColor"><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM80 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L80 96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 352c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32zm0 32l0 64 192 0 0-64L96 256zM240 416l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                                Cetak LIP Wisuda
                            </a>
                        <div class="my-4">
                            <a href="{{asset('images/tutor_cetak_lip.webp')}}" target="_blank" >
                                <img src="{{asset('images/tutor_cetak_lip.webp')}}" alt="Cara Cetak LIP Wisuda" class="rounded-lg lg:max-w-xl">
                            </a>
                        </div>
                    </li>
                    @if($calon_wisuda->bukti_pembayaran == null)
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-red-100 text-red-600 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-red-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3.5 h-3.5"
                                fill="currentColor">
                                <path
                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Upload Bukti Pembayaran LIP
                            Wisuda</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Silahkan lakukan
                            pembayaran LIP Wisuda dan upload bukti pembayarannya melalui tombol di bawah ini.</p>
                        <button data-modal-target="modal-upload-bukti-bayar"
                            data-modal-toggle="modal-upload-bukti-bayar"
                            class="inline-flex items-center shadow gap-2 px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3.5 h-3.5"
                                fill="currentColor">
                                <path
                                    d="M246.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 109.3 192 320c0 17.7 14.3 32 32 32s32-14.3 32-32l0-210.7 73.4 73.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-128-128zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-64z" />
                            </svg> Upload Bukti Pembayaran</button>
                        <div id="modal-upload-bukti-bayar" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Upload Bukti Pembayaran
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="modal-upload-bukti-bayar">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <form action="{{route('kegiatan.wisuda.pendaftaran.upload_bukti_bayar_wisuda')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">
                                        <input type="hidden" name="nim" value="{{$calon_wisuda->nim}}" readonly>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                for="file_input">Upload file</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="file_input" name="file" type="file" accept="application/pdf, image/png, image/jpg, image/jpeg">
                                        </div>

                                        <div class="flex gap-1 ml-2 items-center mb-4">
                                            <input id="ikut_seminar" type="checkbox" value="1" name="ikut_seminar"
                                                class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="ikut_seminar"
                                                class="ms-2 font-medium text-gray-900 dark:text-gray-300">Saya bersedia
                                                menghadiri seminar wisuda</label>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                        <button data-modal-hide="modal-upload-bukti-bayar" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    @elseif($calon_wisuda->bukti_pembayaran != null)
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-green-100 text-green-600 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3.5 h-3.5"
                                fill="currentColor">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Upload Bukti Pembayaran LIP
                            Wisuda</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">di upload pada {{date('d/m/Y - H:i', strtotime($calon_wisuda->tgl_upload_bukti))}} WIB</time>
                        <a href="{{asset('uploads/wisuda/bukti_bayar/'.$calon_wisuda->bukti_pembayaran)}}" target="_blank"
                            class="inline-flex shadow items-center gap-2 px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3.5 h-3.5"
                                fill="currentColor">
                                <path
                                    d="M246.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 109.3 192 320c0 17.7 14.3 32 32 32s32-14.3 32-32l0-210.7 73.4 73.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-128-128zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-64z" />
                            </svg> Lihat Bukti Pembayaran</a>
                    </li>
                    @endif
                    @if($calon_wisuda->konfirmasi_lip && $calon_wisuda->bukti_pembayaran != null)
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-green-100 text-green-600 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-3.5 h-3.5"
                                fill="currentColor">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                            Berhasil Melakukan Pendaftaran Wisuda
                        </h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">di konfirmasi
                            pada {{date('d/m/Y - H:i', strtotime($calon_wisuda->tgl_konfirmasi))}} WIB</time>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Pendaftaran wisuda anda telah dikonfirmasi oleh UT Jambi.</p>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Silahkan bergabung kedalam WAG resmi Wisuda UT Jambi Periode II Tahun 2024 melalui tombol di bawah ini.</p>
                            <a href="https://chat.whatsapp.com/IXLlEwWymz7K4BzVOmrOIl" target="_blank"
                                class="inline-flex shadow items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-green-500 border border-gray-200 rounded-lg hover:bg-green-700 hover:text-white focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-white dark:bg-green-600 dark:text-white dark:border-gray-600 dark:hover:text-white dark:hover:bg-green-700 dark:focus:ring-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5" fill="currentColor"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg> WAG Wisuda UT Jambi</a>
                        {{-- <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                                class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                <path
                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                            </svg> QR Code Absensi</a> --}}
                    </li>
                    @elseif(!$calon_wisuda->konfirmasi_lip && $calon_wisuda->bukti_pembayaran != null)
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 text-blue-600 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5"
                                fill="currentColor">
                                <path
                                    d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Sedang Melakukan Validasi
                        </h3>
                        {{-- <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                            on December 7th, 2021</time> --}}
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Petugas sedang melakukan
                            validasi pembayaran LIP Wisuda, mohon tunggu beberapa saat atau kembali lagi nanti.</p>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Silahkan bergabung kedalam WAG resmi Wisuda UT Jambi Periode II Tahun 2024 melalui tombol di bawah ini.</p>
                            <a href="https://chat.whatsapp.com/IXLlEwWymz7K4BzVOmrOIl" target="_blank"
                                class="inline-flex shadow items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-green-500 border border-gray-200 rounded-lg hover:bg-green-700 hover:text-white focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-white dark:bg-green-600 dark:text-white dark:border-gray-600 dark:hover:text-white dark:hover:bg-green-700 dark:focus:ring-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5" fill="currentColor"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg> WAG Wisuda UT Jambi</a>
                    </li>
                    @endif
                </ol>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection