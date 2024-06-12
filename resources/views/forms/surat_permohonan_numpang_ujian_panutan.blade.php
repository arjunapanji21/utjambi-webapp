<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>{{$title}}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<style>
@media print {
    @page { margin: 0; }
    body {
        visibility: hidden;
    }
    #section-to-print {
        visibility: visible;
        position: absolute;
        left: 0;
        top: 0;
        margin: 1.25cm;
        border: none;
    }
}
</style>

<body class="m-0">
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <div id="section-to-print" class="text-xs border bg-white p-8 lg:p-14 leading-3">
                <div class="flex gap-4 justify-between">
                    <div>
                        <p>Perihal : Permohonan Numpang Ujian Ke {{explode("/", $mahasiswa->ut_daerah_tujuan)[1]}}</p>
                    </div>
                </div>

                <br>

                <div class="flex flex-col gap-4">
                    <p class="text-justify">
                        Bersama ini disampaikan permohonan untuk menumpang Ujian Akhir Semester di wilayah {{explode("/", $mahasiswa->ut_daerah_tujuan)[1]}} ({{explode("/", $mahasiswa->wilayah_ujian_tujuan)[1]}} ), dengan data mahasiswa sebagai berikut:
                    </p>
                    <table class="leading-none">
                        <tr>
                            <td width="80">Nama</td>
                            <td width="20">:</td>
                            <td><b>{{$mahasiswa->nama}}</b></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><b>{{$mahasiswa->nim}}</b></td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td>:</td>
                            <td>{{$mahasiswa->prodi}}</td>
                        </tr>
                        <tr>
                            <td>UPBJJ-UT</td>
                            <td>:</td>
                            <td>{{$mahasiswa->ut_daerah_asal}}</td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td>:</td>
                            <td>{{$mahasiswa->no_wa}}</td>
                        </tr>
                    </table>
                    <p class="text-justify">
                        Mohon kiranya mahasiswa tersebut dapat menumpang ujian di {{explode("/", $mahasiswa->ut_daerah_tujuan)[1]}} masa 20241 dengan lokasi dan matakuliah sebagai berikut :
                    </p>
                    <div class="w-full text-center">
                        <table class="leading-none mx-auto">
                            <thead>
                                <th width="20" class="border text-center">Hari</th>
                                <th width="80" class="border text-center">Lokasi Ujian</th>
                                <th width="80" class="border text-center">Jam Ke-1</th>
                                <th width="80" class="border text-center">Jam Ke-2</th>
                                <th width="80" class="border text-center">Jam Ke-3</th>
                                <th width="80" class="border text-center">Jam Ke-4</th>
                                <th width="80" class="border text-center">Jam Ke-5</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border text-center">1</td>
                                    <td class="border text-center">{{$mahasiswa->wilayah_ujian_tujuan}}</td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 11 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 12 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 13 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 14 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 15 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border text-center">2</td>
                                    <td width="100" class="border text-center">{{$mahasiswa->wilayah_ujian_tujuan}}</td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 21 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 22 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 23 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 24 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                    <td class="border text-center">
                                        @foreach(explode('|',$mahasiswa->matakuliah) as $row)
                                        {{json_decode($row)->kode_waktu_ujian == 25 ? json_decode($row)->kode : ""}}
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-justify">
                        Kepada mahasiswa yang bersangkutan diharuskan melapor ke {{explode("/", $mahasiswa->ut_daerah_tujuan)[1]}} tempat menumpang ujian paling lambat 10 (sepuluh) hari sebelum pelaksanaan ujian dan diminta mencantumkan kode UT Daerah asal pada Lembar Jawab Ujian (LJU).
                    </p>
                    <p class="text-justify">
                        Atas perhatian dan bantuan kami ucapkan terima kasih.
                    </p>
                </div>
            </div>
            
            <button onclick="window.print()"
                class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Print
            </button>
        </div>
    </section>
</body>

</html>