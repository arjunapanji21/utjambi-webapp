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
                    <p>Perihal : Permohonan Numpang Ujian Ke {{explode("/", $ut_daerah_tujuan)[1]}}</p>
                    </div>
                </div>

                <br>

                <div class="flex flex-col gap-4">
                    <p class="text-justify">
                        Bersama ini kami sampaikan permohonan untuk menumpang Ujian Akhir Semester (UAS) 2023/2024 Genap
                        (2023 Genap) di wilayah <span class="lowercase">{{explode(" ",explode("/", $ut_daerah_tujuan)[1])[2]}}</span>, dengan data mahasiswa sebagai berikut:
                    </p>
                    @foreach($mahasiswa as $row)
                    <div class="italic"><b>{{$loop->iteration.". "}}</b>{{$row->nim." / ".$row->nama}}</div>
                    <table class="leading-none mx-auto">
                        <thead>
                            <th class="border text-center">Hari</th>
                            <th class="border text-center">Lokasi Ujian</th>
                            <th class="border text-center">Jam Ke-1</th>
                            <th class="border text-center">Jam Ke-2</th>
                            <th class="border text-center">Jam Ke-3</th>
                            <th class="border text-center">Jam Ke-4</th>
                            <th class="border text-center">Jam Ke-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border text-center">1</td>
                                <td class="border text-center">{{$row->wilayah_ujian_tujuan}}</td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 11 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 12 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 13 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 14 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 15 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td class="border text-center">2</td>
                                <td width="100" class="border text-center">{{$row->wilayah_ujian_tujuan}}</td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 21 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 22 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 23 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 24 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                                <td class="border text-center">
                                    @foreach(explode('|',$row->matakuliah) as $mk)
                                    {{json_decode($mk)->kode_waktu_ujian == 25 ? json_decode($mk)->kode : ""}}
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    @endforeach
                    <p class="text-justify">
                        Dimohon kesediaan Bapak/Ibu untuk memperlakukan mahasiswa tersebut sebagai mahasiswa yang menumpang ujian sesuai dengan ketentuan yang berlaku. 
                        <br>Kepada mahasiswa yang bersangkutan diharuskan melapor ke UT tujuan paling
lambat 7 hari sebelum pelaksanaan ujian, untuk mengkonfirmasi lokasi dan jadwal
pelaksanaan ujian.
<br>
Demikian permohonan ini kami sampaikan. atas perhatian dan kerja sama yang baik
kami ucapkan terima kasih.
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