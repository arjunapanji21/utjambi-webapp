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
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center uppercase">Form Numpang Ujian Mahasiswa UT Jambi</h2>

            <div class="w-full mb-4">
                <ol
                    class="flex items-center justify-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
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
                        class="flex md:w-full items-center @if(isset($mahasiswa) && !empty($mahasiswa) || isset($submit)) text-blue-600 dark:text-blue-500 @endif after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
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
                    <li class="flex items-center  @if(isset($submit)) text-blue-600 dark:text-blue-500 @endif">
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Selesai
                    </li>
                </ol>
            </div>

            @if(isset($submit))
            <form action="{{route('form.numpang_ujian.submit')}}" method="post">
                @csrf
                <div hidden>
                    <input type="hidden" name="nim" value="{{$submit['nim']}}" readonly>
                    <input type="hidden" name="nama" value="{{$submit['nama']}}" readonly>
                    <input type="hidden" name="prodi" value="{{$submit['prodi']}}" readonly>
                    <input type="hidden" name="ut_daerah_asal" value="{{$submit['ut_daerah_asal']}}" readonly>
                    <input type="hidden" name="ut_daerah_tujuan" value="{{$submit['ut_daerah_tujuan']}}" readonly>
                    <input type="hidden" name="wilayah_ujian_asal" value="{{$submit['wilayah_ujian_asal']}}" readonly>
                    <input type="hidden" name="wilayah_ujian_tujuan" value="{{$submit['wilayah_ujian_tujuan']}}" readonly>
                    <input type="hidden" name="tgl_pindah_lokasi" value="{{$submit['tgl_pindah_lokasi']}}" readonly>
                    @foreach($submit['matakuliah'] as $row)
                    <input type="hidden" name="matakuliah[]" value="{{$row}}" readonly>
                    @endforeach
                    <textarea hidden name="alasan" readonly>{{$submit['alasan']}}</textarea>
                    <input type="hidden" name="no_wa" value="{{$submit['no_wa']}}" readonly>
                </div>

                <div class="text-xs border shadow bg-white p-8 lg:p-14 leading-6">
                    <h3 class="uppercase text-sm font-bold text-center mb-8">Surat Permohonan</h3>
                    <div class="flex gap-4 justify-between">
                        <div>
                            <p>Nomor : </p>
                            <p>Perihal : Permohonan Pindah Tempat UTM</p>
                        </div>
                        <div>
                            <p>Kepada Yth. <br> Kepala UPBJJ-UT Jambi <br> <span>- Di Tempat</span></p>
                        </div>
                    </div>
                    <div class="mt-10 mb-4">
                        <p>Saya yang bermohon di bawah ini:</p>
                        <table class="leading-none my-2">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{$submit['nama']}}</td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td>{{$submit['nim']}}</td>
                            </tr>
                            <tr>
                                <td>Prodi</td>
                                <td>:</td>
                                <td>{{$submit['prodi']}}</td>
                            </tr>
                            <tr>
                                <td>UPBJJ-UT</td>
                                <td>:</td>
                                <td>{{$submit["ut_daerah_asal"]}}</td>
                            </tr>
                            <tr>
                                <td>Prodi</td>
                                <td>:</td>
                                <td>{{$submit['no_wa']}}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="flex flex-col gap-5">
                        <p class="text-justify">
                            Dengan ini mengajukan permohonan untuk dapat Pindah Tempat UTM Masa 2024.1 yang semula di <span class="font-bold underline">{{$submit['wilayah_ujian_asal']}}</span> menjadi <span class="font-bold underline">{{$submit['wilayah_ujian_tujuan']}}</span> untuk tanggal <span class="font-bold underline">{{$submit['tgl_pindah_lokasi']}}</span> dengan alasan <span class="font-bold underline capitalize">{{$submit['alasan']}}</span>. Adapun jadwal ujian saya adalah sebagai berikut:
                        </p>
                        <table class="w-full leading-none">
                            <thead>
                                <th class="border text-center">No.</th>
                                <th class="border text-center">Kode MK</th>
                                <th class="border text-center">Nama MK</th>
                            </thead>
                            <tbody>
                                @foreach($submit['matakuliah'] as $row)
                                <tr>
                                    <td class="border text-center">{{$loop->iteration}}</td>
                                    <td class="border text-center">{{explode('/',$row)[0]}}</td>
                                    <td class="border text-center">{{explode('/',$row)[1]}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p class="text-justify">
                            Demikian surat permohonan ini saya ajukan, atas berkenan dikabulkannya permohonan ini saya ucapkan terima kasih.
                        </p>
                        <p class="ml-auto">
                            Jambi, {{date('d M Y')}}
                            <br>
                            Pemohon,
                            <br>
                            <br>
                            <br>
                            <span class="font-bold underline">{{$submit['nama']}}</span>
                            <br>
                            NIM. {{$submit['nim']}}
                        </p>
                    </div>
                </div>


                <div class="flex gap-2 justify-center">
                    <a href="javascript:history.back()"
                        class="w-fit items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-gray-700 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-900 hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                            fill="currentColor">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                        </svg>
                    </a>
                    <button type="submit"
                        class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Submit
                    </button>
                </div>
            </form>

            @elseif(empty($mahasiswa))
            <form action="{{route('form.numpang_ujian')}}" method="get">
                <div class="flex flex-col gap-4">
                    <div class="">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                            NIM</label>
                        <input type="number" name="nim" id="nim"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nomor Induk Mahasiswa" required="">
                    </div>
                    <div>
                        <label for="ut_daerah_tujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pindah Lokasi ke UT
                            Daerah</label>
                        <select name="ut_daerah_tujuan" id="ut_daerah_tujuan"
                            class="select2  text-sm rounded-lg  block w-full p-2.5 ">
                            <option disabled selected="">Pilih UT Daerah Tujuan</option>
                            @foreach($ut_daerah_tujuan as $row)
                            <option value="{{$row['kode_upbjj']}} / UT {{$row['nama_upbjj']}}">UT {{$row['nama_upbjj']}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Next
                </button>
            </form>

            @elseif(isset($mahasiswa) && !empty($mahasiswa))
            <form action="{{route('form.numpang_ujian')}}" method="get">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div hidden class="md:col-span-2">
                        <label for="nim"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="number" name="nim" id="nim"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nomor Induk Mahasiswa" value="{{$mahasiswa->nim}}" readonly required="">
                    </div>
                    <div hidden class="w-full">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Mahasiswa</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nama Sesuai Kartu Mahasiswa" value="{{$mahasiswa->nama}}" readonly required="">
                    </div>
                    <div hidden class="w-full">
                        <label for="prodi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                            Studi</label>
                        <input type="text" name="prodi" id="prodi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Program Studi Mahasiswa" value="{{$mahasiswa->prodi}}" readonly required="">
                    </div>
                    <div hidden class="w-full">
                        <label for="ut_daerah_asal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UT Daerah Asal</label>
                        <input type="text" name="ut_daerah_asal" id="ut_daerah_asal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="UT Daerah Asal" value="{{$mahasiswa->upbjj}}" readonly required="">
                    </div>
                    <div hidden class="w-full">
                        <label for="wilayah_ujian_asal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Ujian
                            Asal</label>
                        <input type="text" name="wilayah_ujian_asal" id="wilayah_ujian_asal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Wilayah Ujian Asal" value="{{$mahasiswa->tpu}}" readonly required="">
                    </div>

                    <div hidden class="w-full">
                        <label for="ut_daerah_tujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UT Daerah
                            Tujuan</label>
                        <input type="text" name="ut_daerah_tujuan" id="ut_daerah_tujuan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="UT Daerah Tujuan" value="{{$ut_daerah_tujuan}}" readonly required="">
                    </div>

                    <div>
                        <label for="wilayah_ujian_tujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Ujian
                            Tujuan</label>
                        <select name="wilayah_ujian_tujuan" id="wilayah_ujian_tujuan"
                            class="select2 text-sm rounded-lg  block w-full p-2.5 ">
                            <option disabled selected="">Pilih Wilayah Ujian</option>
                            @foreach($wilayah_ujian as $row)
                            <option value="{{$row['kode_wilayah_ujian']}} / {{$row['nama_wilayah_ujian']}}">{{$row['nama_wilayah_ujian']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="tgl_pindah_lokasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pindah
                            Lokasi</label>
                        <select name="tgl_pindah_lokasi" id="tgl_pindah_lokasi"
                            class="select2 text-sm rounded-lg  block w-full p-2.5 ">
                            <option disabled selected="">Pilih Tanggal Pindah</option>
                            <option value="22-23 Juni 2024 / H1-H2">22-23 Juni 2024 / H1-H2</option>
                            <option value="22 Juni 2024 / H1">22 Juni 2024 / H1</option>
                            <option value="23 Juni 2024 / H2">23 Juni 2024 / H2</option>
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="alasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan
                            Pindah</label>
                        <textarea id="alasan" name="alasan" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Isi alasan mengajukan pindah ujian"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Dokumen Pendukung Alasan</label>
                        <input name="surat_permohonan" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                        text/plain, application/pdf, image/*">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                            WhatsApp Mahasiswa</label>
                        <input type="text" name="no_wa" id="no_wa"
                            class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="No. WhatsApp Mahasiswa" required="">
                    </div>
                </div>
                <div class="flex gap-2 justify-center">
                    <a href="javascript:history.back()"
                        class="w-fit items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-gray-700 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-900 hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                            fill="currentColor">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                        </svg>
                    </a>
                    <button type="submit"
                        class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Next
                    </button>
                </div>
            </form>
            @endif
        </div>
    </section>
</body>
<script type="module">
    $(".select2").select2();
</script>

</html>