@extends('layouts.homepage')

@section('content')
<section class="grid justify-center items-center lg:grid-cols-2 bg-fixed bg-no-repeat bg-cover bg-gradient-to-r from-primary-600 to-cyan-400 dark:bg-gray-900" style="background-image: url({{asset('images/background/blue1.webp')}})">
    <div class="py-8 w-full px-4 text-center lg:text-right lg:py-16 lg:px-12">
        <h1 class="mb-4 text-6xl lg:text-8xl font-extrabold tracking-tight leading-none drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r  from-yellow-200 via-yellow-300 to-orange-500">WT & KU</h1>
        <p class="mb-8 text-lg font-semibold text-gray-100 lg:text-2xl dark:text-gray-400 drop-shadow-lg">Workshop Tugas & Klinik Ujian</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-end sm:space-y-0 sm:space-x-4">
            <a href="#more" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-yellow-800 rounded-lg bg-gradient-to-r from-yellow-200 via-yellow-300 to-yellow-400  focus:ring-4 border border-gray-300 hover:text-white focus:ring-primary-300 dark:focus:ring-primary-900 shadow-lg">
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

<section id="more" class="lg:pt-20 bg-gray-50">
    <div class="py-8 px-4 lg:py-16 lg:px-6 max-w-screen-xl mx-auto">
        <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Workshop Tugas & Klinik Ujian UT Daerah Jambi</h1>
        <p class="font-normal text-gray-500 lg:text-lg text-justify dark:text-gray-400"></p>

        <div class="bg-white rounded-lg shadow-lg p-10 my-10">
            <h2
                class="mb-4 text-lg font-bold leading-none tracking-tight text-gray-900 md:text-xl lg:text-2xl dark:text-white">
                Cek Jadwal Peserta WT-KU</h2>
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full">
                        <form class="flex items-center">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="overflow-hidden min-h-28 max-h-44 lg:max-h-28 px-4">
                    <table id="table" class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="sticky top-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3 uppercase">MAHASISWA</th>
                                <th scope="col" class="px-4 py-3 uppercase">Workshop Tugas</th>
                                <th scope="col" class="px-4 py-3 uppercase">Klinik Ujian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($data))
                            @foreach($data as $key=>$row)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{$row->nim}}</br><span class="font-bold">{{$row->nama}}</span></td>
                                <td class="px-4 py-3">
                                    {{date('d/m/Y', strtotime($row->tgl_wt))}} 16:00 WIB</br>
                                    @if($row->gmap_wt != null)
                                    <a href="{{$row->gmap_wt}}" target="_blank" class="text-primary-600 hover:text-primary-900 hover:underline">{{$row->lokasi_wt}}</a></br>
                                    @endif
                                    @if($row->zoom_wt != null)
                                    <a href="{{$row->zoom_wt}}" target="_blank" class="text-primary-600 hover:text-primary-900 hover:underline">{{$row->zoom_wt}}</a></br>
                                    @endif
                                    KELAS: <span class="font-bold">{{$row->kelas}}</span>
                                </td>
                                <td class="px-4 py-3">
                                    {{date('d/m/Y', strtotime($row->tgl_ku))}} 16:00 WIB</br>
                                    @if($row->gmap_ku != null)
                                    <a href="{{$row->gmap_ku}}" target="_blank" class="text-primary-600 hover:text-primary-900 hover:underline">{{$row->lokasi_ku}}</a></br>
                                    @endif
                                    @if($row->zoom_ku != null)
                                    <a href="{{$row->zoom_ku}}" target="_blank" class="text-primary-600 hover:text-primary-900 hover:underline">{{$row->zoom_ku}}</a></br>
                                    @endif
                                    KELAS: <span class="font-bold">{{$row->kelas}}</span>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script type="module">
    $("#search").keyup(function () {
        var value = this.value.toLowerCase().trim();

        $("table tr").each(function (index) {
            if (!index) return;
            $(this).find("td").each(function () {
                var id = $(this).text().toLowerCase().trim();
                var not_found = (id.indexOf(value) == -1);
                $(this).closest('tr').toggle(!not_found);
                return not_found;
            });
        });
    });
</script>
@endsection