@extends('layouts.homepage')

@section('content')
<section class="grid justify-center items-center lg:grid-cols-2 bg-fixed bg-no-repeat bg-cover bg-gradient-to-r from-primary-600 to-cyan-400 dark:bg-gray-900" style="background-image: url({{asset('images/background/blue1.webp')}})">
    <div class="max-w-screen-xl mx-auto py-8 w-full px-4 text-center lg:text-right lg:py-16 lg:px-12">
        <h1 class="mb-4 text-4xl lg:text-6xl font-extrabold tracking-tight leading-none drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r  from-yellow-200 via-yellow-300 to-orange-500">NUMPANG UJIAN</h1>
        <p class="mb-8 text-lg font-semibold text-gray-100 lg:text-xl dark:text-gray-400 drop-shadow-lg">Layanan numpang ujian bagi mahasiswa yang ingin mengajukan pindah lokasi ujian pada modus Ujian Tatap Muka (UTM).</p>
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

<section id="jadwal" class="lg:pt-20 bg-gray-50">
    {{-- <div class="py-8 px-4 lg:py-16 lg:px-6 max-w-screen-xl mx-auto">
        <h2
            class="mb-4 text-2xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Jadwal & Lokasi UTM</h2>
    </div> --}}
</section>
<section id="more" class="lg:pt-20 bg-gray-50">
    <div class="py-8 px-4 lg:py-16 lg:px-6 space-y-10 max-w-screen-xl mx-auto">
        <div>
            <h2
            class="mb-4 text-2xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Tata Cara Reschedule Ujian di Universitas Terbuka</h2>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400 text-center">
                Jika Anda ingin melakukan reschedule ujian di Universitas Terbuka (UT), berikut adalah langkah-langkah yang perlu diikuti:
            </p>
        </div>
        <div class="bg-white shadow-lg rounded-lg w-full p-8">
            <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Pindah Lokasi Ujian Tatap Muka (UTM)</h3>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">UTM hanya bisa dipindahkan lokasi dan tidak bisa mengganti tanggal kegiatannya, karena ujian diadakan serentak oleh Universitas Terbuka seluruh Indonesia pada tanggal 14-15 Desember 2024. Untuk memindahkan lokasi UTM, ikuti langkah-langkah berikut:</p>
            <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                <li>Buka link <a href="https://sl.ut.ac.id/ReUTM-Jambi" target="_blank" class="text-primary-600 hover:text-primary-800 hover:underline">https://sl.ut.ac.id/ReUTM-Jambi</a>.</li>
                <li>Anda akan diarahkan ke halaman pemilihan UT daerah asal.</li>
                <li>Pilih UT Jambi jika Anda merupakan mahasiswa UT Daerah Jambi, atau pilih sesuai dengan daerah asal Anda.</li>
                <li>Isi data-data yang diperlukan seperti UT daerah tujuan dan wilayah ujian tujuan.</li>
                <li>Setelah mengisi data, hasilnya adalah sebuah surat permohonan.</li>
                <li>Periksa kembali isi surat tersebut untuk memastikan kebenarannya.</li>
                <li>Jika sudah yakin, tekan tombol submit.</li>
                <li>Setelah submit, anda dapat memonitoring perkembangan pengajuan pindah lokasi ujian dengan mengetikkan NIM anda kembali.</li>
                <li>Batas akhir pengajuan tanggal 1 Desember 2024, dan akan di proses tanggal 2 Desember 2024</li>
            </ol>
            <br>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">
                Dengan mengikuti langkah-langkah ini, Anda dapat memastikan bahwa lokasi ujian Anda telah berhasil dipindahkan sesuai keinginan. Pastikan untuk memeriksa semua data dengan teliti agar proses reschedule berjalan lancar.
            </p>
        </div>
        <div class="bg-white shadow-lg rounded-lg w-full p-8">
            <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Pindah Jadwal Ujian Ujian Online (UO)</h3>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">Untuk mengajukan pindah jadwal ujian Ujian Online (UO), Anda perlu melakukan konsultasi langsung melalui Zoom pada hari dan jam kerja. Mohon diperhatikan bahwa konsultasi harus dilakukan paling lambat H-1 sebelum pelaksanaan ujian online. Berikut adalah langkah-langkah yang perlu diikuti:</p>
            <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                <li>Akses link <a href="https://sl.ut.ac.id/ReUO-Jambi" target="_blank" class="text-primary-600 hover:text-primary-800 hover:underline">https://sl.ut.ac.id/ReUO-Jambi</a>.</li>
                <li>Bergabunglah dalam sesi Zoom untuk berkonsultasi dengan petugas terkait.</li>
                <li>Sampaikan keinginan Anda untuk pindah jadwal ujian UO kepada petugas.</li>
                <li>Ikuti arahan dan instruksi yang diberikan selama sesi konsultasi.</li>
            </ol>
            <br>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">
                Dengan mengikuti proses ini, Anda dapat mengajukan permohonan untuk pindah jadwal ujian UO dengan lebih mudah dan terstruktur. Pastikan untuk mempersiapkan semua informasi yang diperlukan sebelum sesi konsultasi dimulai.
            </p>
        </div>
        <div class="bg-white shadow-lg rounded-lg w-full p-8">
            <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Informasi tambahan:</h3>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">Tiap mata kuliah sudah ditentukan skema ujiannya dan tidak dapat diubah-ubah sesuai keinginan. Skema ujian ada 3:</p>
            <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                <li>Ujian Tatap Muka (UTM)</li>
                <li>Ujian Online (UO)</li>
                <li>Take Home Exam (THE)</li>
            </ol>
            <br>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">
                Skema Ujian UTM difasilitasi pindah lokasi ujian saja, dengan jadwal yang tertera di KTPU (jadwal:hari/tanggal tidak dapat diubah). Skema Ujian UO difasilitasi jadwal/lokasi ujiannya melalui link yang tertera. Skema Ujian THE diberikan waktu 24 jam dengan waktu pengerjaan 6 jam. Silahkan tentukan waktu terbaik untuk mengerjakan Ujian THE.
            </p>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">
                Kami harapkan semua mahasiswa dapat mengambil langkah-langkah yang diperlukan sesuai dengan prosedur yang telah ditentukan.
            </p>
            <p class="font-normal text-gray-500 lg:text-lg dark:text-gray-400">
                Terima kasih.
            </p>
        </div>
    </div>
</section>
@endsection