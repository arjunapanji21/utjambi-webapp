@extends('layouts.homepage')

@section('content')
@if(!request()->has('nim'))
<section class="grid justify-center items-center lg:grid-cols-2 bg-fixed bg-no-repeat bg-cover bg-gradient-to-r from-primary-600 to-cyan-400 dark:bg-gray-900" style="background-image: url({{asset('images/background/blue1.webp')}})">
    <div class="max-w-screen-xl mx-auto py-8 w-full px-4 text-center lg:text-right lg:py-16 lg:px-12">
        <h1 class="mb-4 text-4xl lg:text-6xl font-extrabold tracking-tight leading-none drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r  from-yellow-200 via-yellow-300 to-orange-500">NUMPANG UJIAN</h1>
        <p class="mb-8 text-lg font-semibold text-gray-100 lg:text-xl dark:text-gray-400 drop-shadow-lg">Layanan numpang ujian bagi mahasiswa yang ingin mengajukan pindah lokasi ujian pada modus Ujian Tatap Muka (UTM).</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-end sm:space-y-0 sm:space-x-4">
            <a href="#jadwal" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-yellow-800 rounded-lg bg-gradient-to-r from-yellow-200 via-yellow-300 to-yellow-400  focus:ring-4 border border-gray-300 hover:text-white focus:ring-primary-300 dark:focus:ring-primary-900 shadow-lg">
                Jadwal & Lokasi
            </a>
            <a href="#more" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-100 rounded-lg border border-gray-300 hover:bg-primary-800 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 shadow-lg">
                Pengajuan
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
@endif

<section id="more" class=" bg-gray-50">
    <div class="py-8 px-4 lg:py-16 lg:px-6 max-w-screen-xl mx-auto">
        <h2
            class="mb-4 text-2xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
            Pengajuan Numpang Ujian</h2>
            
            @if(!request()->has('nim'))
            <div class="bg-white rounded-lg shadow-lg p-10 my-10 max-w-screen-md mx-auto">
                <form action="{{route('mahasiswa.ujian')}}" method="get" class="space-y-2">
                    <div class="flex gap-2 justify-center items-center">
                    <div class="relative w-full">
                        <input type="text" id="nim" name="nim" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="nim" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Ketikkan NIM Anda</label>
                    </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
            </div>
            @else
            <div class="bg-white rounded-lg shadow-lg px-5 py-10 lg:px-10 my-10 max-w-screen-md mx-auto">
                <form action="{{route('mahasiswa.submit_numpang_utm')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="nim" id="nim" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{$mahasiswa['nim']}}" required readonly />
                        <label for="nim" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIM</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{$mahasiswa['nama_mahasiswa']}}" required readonly/>
                        <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Mahasiswa</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="prodi" id="prodi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{$mahasiswa['kode_prodi'] . " / " . $mahasiswa['nama_prodi']}}" required readonly/>
                        <label for="prodi" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Program Studi</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="fakultas" id="fakultas" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{$mahasiswa['fakultas']}}" required readonly/>
                        <label for="fakultas" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fakultas</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="upbjj_asal" id="upbjj_asal" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{$mahasiswa['kode_upbjj']. " / " .strtoupper($mahasiswa['nama_upbjj'])}}" required readonly/>
                        <label for="upbjj_asal" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">UT Daerah Asal</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="mk_utm" id="mk_utm" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{implode(', ', $mahasiswa['mk_utm'])}}" required readonly/>
                        <label for="mk_utm" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Matakuliah UTM</label>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="tgl_pindah_lokasi" id="tgl_pindah_lokasi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="14-15 Desember 2024" required readonly/>
                            <label for="tgl_pindah_lokasi" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal UTM</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="masa" id="masa" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{$mahasiswa['masa']}}" required readonly/>
                            <label for="masa" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masa</label>
                        </div>
                    </div>
                    <div class="w-full mb-5">
                        <label for="lokasi_ujian_tujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Ujian
                            Tujuan</label>
                        <select name="lokasi_ujian_tujuan" id="lokasi_ujian_tujuan"
                            class="select2 text-sm rounded-lg  block w-full p-2.5 ">
                            <option disabled selected="">Pilih Lokasi Ujian</option>
                            @foreach($wilayah_ujian as $row)
                            <option value="{{$row->id}}">
                                @if(is_null($row->lokasi_utm))
                                UT {{strtoupper($row->nama_upbjj) . " - " . $row->nama_wilayah_ujian}}</option>
                                @else
                                UT {{strtoupper($row->nama_upbjj) . " - " . $row->lokasi_utm}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="alasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan
                            Pindah</label>
                        <textarea id="alasan" name="alasan" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Isi alasan mengajukan pindah ujian" required></textarea>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">Dokumen Pendukung Alasan (Bila Ada)</label>
                        <input name="file"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file" type="file" accept="application/pdf">
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="no_wa" id="no_wa" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="no_wa" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. WhatsApp Mahasiswa</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="ttd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanda
                            Tangan</label>
                        <div class="flex gap-4">
                            <div id="signature-pad"
                                class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div>
                            <input id="ttd" name="ttd" type="hidden" required>
                            <label id="clear-signature"
                                class="flex flex-col gap-1 h-fit items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"
                                    fill="currentColor">
                                    <path
                                        d="M48.5 224H40c-13.3 0-24-10.7-24-24V72c0-9.7 5.8-18.5 14.8-22.2s19.3-1.7 26.2 5.2L98.6 96.6c87.6-86.5 228.7-86.2 315.8 1c87.5 87.5 87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3c-62.2-62.2-162.7-62.5-225.3-1L185 183c6.9 6.9 8.9 17.2 5.2 26.2s-12.5 14.8-22.2 14.8H48.5z" />
                                </svg>
                            </label>
                        </div>
                    </div>
                    
                    <div class="flex gap-2 justify-end">
                        <button type="submit" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 me-2" fill="currentColor"><path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-242.7c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32L64 32zm0 96c0-17.7 14.3-32 32-32l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 224c-17.7 0-32-14.3-32-32l0-64zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            Simpan
                        </button>
                        <a href="{{route('mahasiswa.ujian')}}" class="flex items-center justify-center text-primary-600  hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
            @endif
    </div>
</section>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Include jSignature from CDN -->
<script type="text/javascript" src="{{asset('js/jsignature/jsignature.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jsignature/flashcanvas.min.js')}}"></script>
<!-- Include select2 from CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script type="module">
    $(document).ready(function () {
        $(".select2").select2();

        const $signaturePad = $("#signature-pad").jSignature();
        $("#signature-pad").bind('change', function (e) {
            const data = $signaturePad.jSignature('getData', 'image');
            $("#ttd").val(data);
            $("#btnSubmit").prop('disabled', false);
            $("#btnSubmit").removeClass('opacity-50 cursor-not-allowed');
        })

        $('#clear-signature').click(function () {
            $signaturePad.jSignature('reset');
            $("#ttd").val('');
            $("#btnSubmit").prop('disabled', true);
            $("#btnSubmit").addClass('opacity-50 cursor-not-allowed');
        });
    });

</script>
    
@endsection