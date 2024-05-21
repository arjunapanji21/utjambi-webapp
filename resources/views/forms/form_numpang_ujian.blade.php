<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>{{$title}}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="m-0">
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <img src="{{asset('images/logo_utjambi.webp')}}" class="h-14 mx-auto mb-8" alt="">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">FORM NUMPANG UJIAN</h2>

            <div class="w-full mb-4">
                <ol
                    class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                    <li
                        class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Tahap 1
                        </span>
                    </li>
                    <li
                        class="flex md:w-full items-center @if(isset($mahasiswa) && !empty($mahasiswa)) text-blue-600 dark:text-blue-500 @endif after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                        <span
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Tahap 2
                        </span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                        Selesai
                    </li>
                </ol>
            </div>

            @if(empty($mahasiswa))
            <form action="{{route('form.numpang_ujian')}}" method="get">
                <div class="flex flex-col gap-4">
                    <div class="">
                        <label for="nim"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan NIM</label>
                        <input type="number" name="nim" id="nim"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nomor Induk Mahasiswa" required="">
                    </div>
                    <div>
                        <label for="ut_daerah_tujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pindah Lokasi ke UT
                            Daerah</label>
                        <select name="ut_daerah_tujuan" id="ut_daerah_tujuan" class="select2  text-sm rounded-lg  block w-full p-2.5 ">
                            <option disabled selected="">Pilih UT Daerah</option>
                            @foreach($ut_daerah_tujuan as $row)
                            <option value="{{$row['kode_upbjj']}}">UT {{$row['nama_upbjj']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Next
                </button>
            </form>
            @endif

            @if(isset($mahasiswa) && !empty($mahasiswa))
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nim"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="number" name="nim" id="nim"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nomor Induk Mahasiswa" value="{{$mahasiswa->nim}}" readonly required="">
                    </div>
                    <div class="w-full">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Mahasiswa</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nama Sesuai Kartu Mahasiswa" value="{{$mahasiswa->nama}}" readonly required="">
                    </div>
                    <div class="w-full">
                        <label for="prodi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                            Studi</label>
                        <input type="text" name="prodi" id="prodi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Program Studi Mahasiswa" value="{{$mahasiswa->prodi}}" readonly required="">
                    </div>
                    <div class="w-full">
                        <label for="ut_daerah_asal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UT Daerah Asal</label>
                        <input type="text" name="ut_daerah_asal" id="ut_daerah_asal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="UT Daerah Asal" value="{{$mahasiswa->upbjj}}" readonly required="">
                    </div>
                    <div class="w-full">
                        <label for="wilayah_ujian_asal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Ujian
                            Asal</label>
                        <input type="text" name="wilayah_ujian_asal" id="wilayah_ujian_asal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Wilayah Ujian Asal" value="{{$mahasiswa->tpu}}" readonly required="">
                    </div>

                    <div class="w-full">
                        <label for="ut_daerah_tujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UT Daerah Tujuan</label>
                        <input type="text" name="ut_daerah_tujuan" id="ut_daerah_tujuan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="UT Daerah Tujuan" value="{{$ut_daerah_tujuan}}" readonly required="">
                    </div>

                    <div>
                        <label for="wilayah_ujian_tujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Ujian</label>
                        <select id="wilayah_ujian_tujuan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected="">Pilih Wilayah Ujian</option>
                        </select>
                    </div>

                    <div>
                        <label for="tgl_pindah_lokasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pindah
                            Lokasi</label>
                        <select id="tgl_pindah_lokasi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Tanggal Pindah</option>
                            <option value="22 Juni 2024 (H1)">22 Juni 2024 (H1)</option>
                            <option value="23 Juni 2024 (H2)">22 Juni 2024 (H2)</option>
                            <option value="22-23 Juni 2024 (H1-H2)">22-23 Juni 2024 (H1-H2)</option>
                        </select>
                    </div>

                    <div>
                        <label for="matakuliah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matakuliah</label>
                        <select id="matakuliah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Matakuliah UTM</option>
                            <option value="22 Juni 2024 (H1)">22 Juni 2024 (H1)</option>
                            <option value="23 Juni 2024 (H2)">22 Juni 2024 (H2)</option>
                            <option value="22-23 Juni 2024 (H1-H2)">22-23 Juni 2024 (H1-H2)</option>
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="alasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan
                            Pindah</label>
                        <textarea id="alasan" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Isi alasan mengajukan pindah ujian"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                            WhatsApp Mahasiswa</label>
                        <input type="text" name="no_wa" id="no_wa"
                            class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="No. WhatsApp Mahasiswa" required="">
                    </div>
                </div>
                <button type="submit"
                    class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Kirim dan Simpan
                </button>
            </form>
            @endif
        </div>
    </section>
</body>
<script type="module">
    $(".select2").select2();
</script>

</html>