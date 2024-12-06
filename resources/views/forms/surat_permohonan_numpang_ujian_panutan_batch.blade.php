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
                    <p>Perihal : Permohonan Numpang Ujian Ke UT{{explode("/", $ut_daerah_tujuan)[1]}}</p>
                    </div>
                </div>

                <br>

                <div class="flex flex-col gap-4">
                    <p class="text-justify">
                        Bersama ini kami sampaikan permohonan untuk mengikuti Ujian Tatap Muka (UTM) di wilayah UT {{explode("/", $ut_daerah_tujuan)[1]}}, dengan data mahasiswa sebagai berikut:
                    </p>
                    <table class="leading-none mx-auto" style="border: 1px solid black ;">
                        <thead>
                            <th class="border text-center" style="border: 1px solid black ;">No.</th>
                            <th class="border text-center" style="border: 1px solid black ;">NIM</th>
                            <th class="border text-center" style="border: 1px solid black ;">NAMA</th>
                            <th class="border text-center" style="border: 1px solid black ;">Wilayah Ujian</th>
                            <th class="border text-center" style="border: 1px solid black ;">Matakuliah</th>
                            <th class="border text-center" style="border: 1px solid black ;">Kode Waktu Ujian</th>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $row)
                            <tr>
                                <td class="border text-center" style="border: 1px solid black ;">{{$loop->iteration}}</td>
                                <td class="border text-center" style="border: 1px solid black ;">{{$row->nim}}</td>
                                <td class="border text-left" style="border: 1px solid black ;">{{$row->nama}}</td>
                                <td class="border text-left" style="border: 1px solid black ;">{{$row->wilayah_ujian_tujuan}}</td>
                                <td class="border text-center" style="border: 1px solid black ;">
                                    @foreach($row->matakuliah as $mk)
                                    {{$mk->kode}}<br>
                                    @endforeach
                                </td>
                                <td class="border text-center" style="border: 1px solid black ;">
                                    @foreach($row->matakuliah as $mk)
                                    {{$mk->kode_waktu_ujian}}<br>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p class="text-justify">
                        Dimohon kesediaan Bapak/Ibu untuk memperlakukan mahasiswa tersebut sebagai mahasiswa yang menumpang ujian sesuai dengan ketentuan yang berlaku. 
                        <br>
                        <br>
                        Kepada mahasiswa yang bersangkutan diharuskan melapor ke UT tujuan paling lambat 10 hari sebelum pelaksanaan ujian, untuk mengkonfirmasi lokasi dan jadwal pelaksanaan ujian.
                        <br>
                        <br>
                        Demikian permohonan ini kami sampaikan, atas perhatian dan kerja sama yang baik kami ucapkan terima kasih.
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