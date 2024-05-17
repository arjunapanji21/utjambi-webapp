<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>Form Numpang Ujian UT Jambi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="m-0">
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <img src="{{asset('images/logo_utjambi.webp')}}" class="h-14 mx-auto mb-8" alt="">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">FORM NUMPANG UJIAN</h2>
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="number" name="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nomor Induk Mahasiswa" required="">
                    </div>
                    <div class="w-full">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mahasiswa</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Sesuai Kartu Mahasiswa" required="">
                    </div>
                    <div class="w-full">
                        <label for="prodi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program Studi</label>
                        <input type="text" name="prodi" id="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Program Studi Mahasiswa" required="">
                    </div>
                    <div class="w-full">
                        <label for="fakultas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
                        <input type="text" name="fakultas" id="fakultas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Fakultas Mahasiswa" required="">
                    </div>
                    <div class="w-full">
                        <label for="ut_daerah_asal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UT Daerah Asal</label>
                        <input type="text" name="ut_daerah_asal" id="ut_daerah_asal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="UT Daerah Asal" required="">
                    </div>
                    <div class="w-full">
                        <label for="wilayah_ujian_asal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Ujian Asal</label>
                        <input type="text" name="wilayah_ujian_asal" id="wilayah_ujian_asal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Wilayah Ujian Asal" required="">
                    </div>
                    <div class="w-full">
                        <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. WhatsApp Mahasiswa</label>
                        <input type="text" name="no_wa" id="no_wa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="No. WhatsApp Mahasiswa" required="">
                    </div>
                    
                    <div>
                        <label for="ut_daerah_tujuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pindah Lokasi ke UT Daerah</label>
                        <select id="ut_daerah_tujuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih UT Daerah</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>

                    <div>
                        <label for="wilayah_ujian_tujuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Ujian</label>
                        <select id="wilayah_ujian_tujuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Wilayah Ujian</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>

                    <div>
                        <label for="tgl_pindah_lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pindah Lokasi</label>
                        <select id="tgl_pindah_lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Tanggal Pindah</option>
                            <option value="22 Juni 2024 (H1)">22 Juni 2024 (H1)</option>
                            <option value="23 Juni 2024 (H2)">22 Juni 2024 (H2)</option>
                            <option value="22-23 Juni 2024 (H1-H2)">22-23 Juni 2024 (H1-H2)</option>
                        </select>
                    </div>

                    <div>
                        <label for="matakuliah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matakuliah</label>
                        <select id="matakuliah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Matakuliah UTM</option>
                            <option value="22 Juni 2024 (H1)">22 Juni 2024 (H1)</option>
                            <option value="23 Juni 2024 (H2)">22 Juni 2024 (H2)</option>
                            <option value="22-23 Juni 2024 (H1-H2)">22-23 Juni 2024 (H1-H2)</option>
                        </select>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="alasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan Pindah</label>
                        <textarea id="alasan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Isi alasan mengajukan pindah ujian"></textarea>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Kirim dan Simpan
                </button>
            </form>
        </div>
      </section>
</body>
</html>