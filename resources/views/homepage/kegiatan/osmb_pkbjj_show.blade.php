@extends('layouts.homepage')

@section('content')
@if(is_null($data))
<div class="py-8 px-4 min-h-[80vh] flex items-center justify-center">
    <div class="bg-white max-w-screen-xl rounded-lg shadow-lg p-4">
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <div class="flex items-center">
                <svg class="shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium">NIM tidak ditemukan</h3>
            </div>
            <div>
                <span class="font-medium">Berikut beberapa alasan mengapa NIM kamu tidak bisa ditemukan:</span>
                <ul class="mt-1.5 list-disc list-inside">
                    <li>Kesalahan dalam mengetik NIM, silahkan periksa kembali NIM kamu.</li>
                    <li>NIM kamu belum terdaftar pada OSMB-PKBJJ Batch saat ini, silahkan menunggu Batch berikutnya.
                    </li>
                </ul>
            </div>
        </div>
        <a href="{{route('kegiatan.osmb')}}"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</a>

    </div>
</div>
</div>
@else
<div class="flex justify-center items-center p-4 bg-primary-50" id="jadwal">
    <div class="bg-white rounded-lg shadow-lg p-6 my-8 w-full max-w-screen-xl">
        <h2
            class="mb-4 text-lg font-bold leading-none tracking-tight text-primary-800 md:text-xl lg:text-2xl dark:text-white">
            Peserta OSMB-PKBJJ Masa {{$data->masa}} Batch {{$data->batch}}</h2>
        <form class="w-full" action="{{route('kegiatan.osmb.show')}}" method="get">
            @csrf
            <div class="grid lg:grid-cols-2 gap-4 mb-5">
                <div>
                    <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                    <input type="number" name="nim" id="nim"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{$data->nim}}" required readonly />
                </div>
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{$data->nama}}" required readonly />
                </div>
                <div>
                    <label for="tgl_osmb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tgl.
                        OSMB</label>
                    <input type="text" name="tgl_osmb" id="tgl_osmb"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{date('d F Y', strtotime($data->tgl_osmb))}} / 07:30 WIB" required readonly />
                </div>
                <div>
                    <label for="lokasi_osmb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                        OSMB</label>

                    <form class="mx-auto">
                        <label for="lokasi_osmb"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Lokasi OSMB</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <input type="search" id="lokasi_osmb"
                                class="block w-full p-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{$data->lokasi_osmb}}" readonly required />
                            @if(!is_null($data->gmap_osmb))
                            <a href="{{$data->gmap_osmb}}" target="_blank"
                                class="text-white absolute end-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Open
                                Link</a>
                            @elseif(!is_null($data->zoom_osmb))
                            <a href="{{$data->zoom_osmb}}" target="_blank"
                                class="text-white absolute end-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Open
                                Link</a>
                            @endif
                        </div>
                    </form>
                </div>
                <div>
                    <label for="tgl_osmb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tgl.
                        PKBJJ</label>
                    <input type="text" name="tgl_pkbjj" id="tgl_pkbjj"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{date('d F Y', strtotime($data->tgl_pkbjj))}} / 07:30 WIB" required readonly />
                </div>
                <div>
                    <label for="lokasi_pkbjj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                        PKBJJ</label>

                    <form class="mx-auto">
                        <label for="lokasi_pkbjj"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Lokasi PKBJJ</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <input type="search" id="lokasi_pkbjj"
                                class="block w-full p-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{$data->lokasi_pkbjj}}" readonly required />
                            @if(!is_null($data->gmap_pkbjj))
                            <a href="{{$data->gmap_pkbjj}}"
                                class="text-white absolute end-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Open
                                Link</a>
                            @elseif(!is_null($data->zoom_pkbjj))
                            <a href="{{$data->zoom_pkbjj}}"
                                class="text-white absolute end-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Open
                                Link</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            @if(is_null($data->hadir_osmb))
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Belum Konfirmasi Kehadiran OSMB</span> - silahkan lakukan konfirmasi melalui tombol konfirmasi kehadiran!
                </div>
              </div>
            @else
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Terima kasih</span> - kamu sudah melakukan konfirmasi bahwa akan <span class="font-medium">{{$data->hadir_osmb}}</span> pada OSMB!
                </div>
              </div>
              @endif
            @if(is_null($data->hadir_pkbjj))
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Belum Konfirmasi Kehadiran PKBJJ</span> - silahkan lakukan konfirmasi melalui tombol konfirmasi kehadiran!
                </div>
              </div>
            @else
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Terima kasih</span> - kamu sudah melakukan konfirmasi bahwa akan <span class="font-medium">{{$data->hadir_pkbjj}}</span> pada PKBJJ!
                </div>
              </div>
              @endif
            <div class="flex flex-col lg:flex-row gap-4 justify-end items-center border-t pt-4 border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-target="modal-konfirmasi" data-modal-toggle="modal-konfirmasi" type="button" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Konfirmasi Kehadiran</button>
                <a href="{{route('kegiatan.osmb')}}" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white w-full text-center dark:hover:bg-gray-700">Kembali</a>
            </div>
        </form>

    </div>
</div>

<div id="modal-konfirmasi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <form class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700" action="{{route('kegiatan.osmb.konfirmasi', $data->id)}}" method="post">
            @csrf
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Konfirmasi Kehadiran
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-konfirmasi">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div>
                    <label for="hadir_osmb" class="block mb-2 font-medium text-gray-900 dark:text-white">Apakah kamu akan menghadiri kegiatan OSMB yang diadakan pada tanggal {{date('d F Y', strtotime($data->tgl_osmb))}} nanti ?</label>
                    <select required id="hadir_osmb" name="hadir_osmb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option disabled selected>Pilih jawabanmu:</option>
                      <option value="Hadir">Ya</option>
                      <option value="Tidak Hadir">Tidak</option>
                    </select>
                </div>
                <div>
                    <label for="hadir_pkbjj" class="block mb-2 font-medium text-gray-900 dark:text-white">Apakah kamu akan menghadiri kegiatan PKBJJ yang diadakan pada tanggal {{date('d F Y', strtotime($data->tgl_pkbjj))}} nanti ?</label>
                    <select required id="hadir_pkbjj" name="hadir_pkbjj" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Pilih jawabanmu:</option>
                        <option value="Hadir">Ya</option>
                        <option value="Tidak Hadir">Tidak</option>
                    </select>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                <button data-modal-hide="modal-konfirmasi" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
            </div>
        </form>
    </div>
</div>
@endif
@endsection