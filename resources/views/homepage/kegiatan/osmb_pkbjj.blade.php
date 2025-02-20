@extends('layouts.homepage')

@section('content')
<section class="grid justify-center items-center lg:grid-cols-2 bg-fixed bg-no-repeat bg-cover bg-gradient-to-r from-primary-600 to-cyan-400 dark:bg-gray-900" style="background-image: url({{asset('images/background/blue1.webp')}})">
    <div class="py-8 w-full px-4 text-center lg:text-right lg:py-16 lg:px-12">
        <h1 class="mb-4 text-8xl lg:text-9xl font-extrabold tracking-tight leading-none drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r  from-yellow-200 via-yellow-300 to-orange-500">OSMB & PKBJJ</h1>
        <p class="mb-8 text-lg font-semibold text-gray-100 lg:text-3xl dark:text-gray-400 drop-shadow-lg">Orientasi Studi Mahasiswa Baru &<br/> Pelatihan Keterampilan Belajar Jarak Jauh</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-end sm:space-y-0 sm:space-x-4">
            <a href="#jadwal" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-yellow-800 rounded-lg bg-gradient-to-r from-yellow-200 via-yellow-300 to-yellow-400  focus:ring-4 border border-gray-300 hover:text-white focus:ring-primary-300 dark:focus:ring-primary-900 shadow-lg">
                Jadwal & Lokasi
            </a>
            <a href="#more" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-100 rounded-lg border border-gray-300 hover:bg-primary-800 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 shadow-lg">
                Selengkapnya
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>  
        </div>
    </div>
    <div class="w-full mt-10 max-w-lg">
        <img src="{{asset('images/gallery/model/osmb.webp')}}" alt="">
    </div>
</section>

<section id="more" class="lg:pt-20 bg-gradient-to-br from-white to-gray-100 dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="bg-white rounded-lg shadow-lg px-8 py-4 font-normal text-gray-800 sm:text-lg ">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-800 border-l-4 border-l-yellow-300 pl-2">Pengenalan Proses Belajar di UT</h2>
            <p class="mb-4">OSMB merupakan kegiatan pengenalan mengenai proses belajar di perguruan tinggi. Khusus di UT yang menerapkan sistem belajar jarak jauh, maka OSMB di UT ditekankan pada proses belajar mandiri.</p>
            <p class="mb-4">OSMB di UT wajib diselenggarakan oleh pimpinan UPBJJ – UT minimal satu kali per semester di Kota UPBJJ – UT. Seluruh mahasiswa baru dihimbau untuk mengikuti OSMB dan berhak mendapatkan KIT OSMB.</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/osmb/2.webp')}}" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg shadow-lg" src="{{asset('images/gallery/osmb/3.webp')}}" alt="office content 2">
        </div>
    </div>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="bg-white rounded-lg shadow-lg px-8 py-4 order-2 font-normal text-gray-800 sm:text-lg ">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-800 border-l-4 border-l-yellow-300 pl-2">Kegiatan Wajib Mahasiswa Baru</h2>
            <p class="mb-4">Bagi mahasiswa baru yang berhalangan hadir pada acara OSMB, wajib mempelajari materi OSMB yang terdapat dalam KIT OSMB. Adapun cara mahasiswa baru memperoleh KIT OSMB yaitu dapat diambil di UPBJJ – UT tempat mahasiswa terdaftar.</p>
            <a href="https://ut.ac.id/osmb" target="_blank" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center bg-primary-600 text-gray-100 rounded-lg border border-gray-300 hover:bg-primary-800 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="mr-2 -ml-1 w-5 h-5" fill="currentColor"><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM216 232l0 102.1 31-31c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-72 72c-9.4 9.4-24.6 9.4-33.9 0l-72-72c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l31 31L168 232c0-13.3 10.7-24 24-24s24 10.7 24 24z"/></svg>
                Download KIT OSMB & PKBJJ
            </a>  
        </div>
        <div class="order-1 grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg shadow-lg" src="{{asset('images/gallery/osmb/1.webp')}}" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg shadow-lg" src="{{asset('images/gallery/osmb/4.webp')}}" alt="office content 2">
        </div>
    </div>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="mb-8">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-800 dark:text-white">Ketentuan Peserta OSMB</h2>
                <p class="text-gray-500 sm:text-lg dark:text-gray-400">Berikut beberapa ketentuan yang harus dilakukan oleh peserta OSMB Universitas Terbuka Jambi.</p>
            </div>
            <div class="flex items-center">            
                <ul class="space-y-4 text-left text-gray-900 dark:text-gray-400">
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Cek jadwal pada laman jambi.ut.ac.id/dashboard</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Mengenakan Sepatu, Pakaian sopan dan rapi serta mengenakan almamater</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Membawa Buku dan Alat Tulis</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Membawa perangkat smartphone / laptop</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Membawa KTP</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Hadir tepat waktu dilokasi kegiatan</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Mengakses dan Mengikuti Kelas pada silayar.ut.ac.id</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="mb-8">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-800 dark:text-white">Cara Akses SILAYAR</h2>
                <p class="text-gray-500 sm:text-lg dark:text-gray-400">Sistem Layanan Belajar Universitas Terbuka</p>
            </div>
            <div class="flex items-center">            
                <ul class="space-y-4 text-left text-gray-900 dark:text-white">
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Buka link <a href="https://silayar.ut.ac.id/login" target="_blank" class="hover:underline text-primary-600 font-bold">silayar.ut.ac.id/login</a> pada browser</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Masukkan NIM pada kolom <span class="italic">username</span></span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Masukkan Tanggal lahir dengan format tanggalbulantahun tanpa tanda hubung, contoh 23072002 pada kolom <span class="italic">password</span></span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Setelah berhasil login akan terlihat kelas OSMB, kemudian klik kelas OSMB</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Baca materi yang diberikan dan kerjakan Quiz yang tersedia pada tiap sesinya.</span>
                    </li>
                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                        <span>Setelah mengikuti kegiatan Tatap Muka sesuai jadwal, peserta dapat mengunduh sertifikat</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="py-8 px-4 lg:py-16 lg:px-6 max-w-screen-xl mx-auto" id="jadwal">
        <div class="bg-white rounded-lg shadow-lg p-10 my-10">
            <h2
                class="mb-4 text-lg font-bold leading-none tracking-tight text-primary-800 md:text-xl lg:text-2xl dark:text-white">
                Cek Jadwal Peserta OSMB-PKBJJ</h2>
<form class="w-full" action="{{route('kegiatan.osmb.show')}}" method="get">
    @csrf
    <div class="mb-5">
      <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Nomor Induk Mahasiswa</label>
      <input type="number" name="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="05123XXXX" required />
    </div>
    <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tampilkan</button>
  </form>
  
        </div>
    </div>
</section>
@endsection