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
            <div id="section-to-print" class="text-xs border bg-white p-8 lg:p-14 leading-6">
                <h3 class="uppercase text-sm font-bold text-center mb-8">Surat Permohonan</h3>
                <div class="flex gap-4 justify-between">
                    <div>
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
                            <td>{{$mahasiswa->nama}}</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td>{{$mahasiswa->nim}}</td>
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
                </div>

                <div class="flex flex-col gap-5">
                    <p class="text-justify">
                        Dengan ini mengajukan permohonan untuk dapat Pindah Tempat UTM Masa 2024.1 yang semula di <span class="font-bold underline">{{$mahasiswa->wilayah_ujian_asal}}</span> menjadi <span class="font-bold underline">{{$mahasiswa->wilayah_ujian_tujuan}}</span> untuk tanggal <span class="font-bold underline">{{$mahasiswa->tgl_pindah_lokasi}}</span> dengan alasan <span class="font-bold underline capitalize">{{$mahasiswa->alasan}}</span>. Adapun jadwal ujian saya adalah sebagai berikut:
                    </p>
                    <table class="w-full leading-none">
                        <thead>
                            <th class="border text-center">No.</th>
                            <th class="border text-center">Kode MK</th>
                        </thead>
                        <tbody>
                            @foreach(explode(',',$mahasiswa->matakuliah) as $mk)
                            <tr>
                                <td class="border text-center">{{$loop->iteration}}</td>
                                <td class="border text-center">{{$mk}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p class="text-justify">
                        Demikian surat permohonan ini saya ajukan, atas berkenan dikabulkannya permohonan ini saya ucapkan terima kasih.
                    </p>
                    <p class="ml-auto">
                        Jambi, {{date('d M Y', strtotime($mahasiswa->created_at))}}
                        <br>
                        Pemohon,
                        <img src="data:{{$mahasiswa->ttd}}" alt="" class="w-32 py-2">
                        <span class="font-bold underline">{{$mahasiswa->nama}}</span>
                        <br>
                        NIM. {{$mahasiswa->nim}}
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
<script type="module">
    $(".select2").select2();
</script>

</html>