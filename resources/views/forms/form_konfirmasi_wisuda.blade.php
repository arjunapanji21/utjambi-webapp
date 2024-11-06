<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <title>{{$title}}</title>

    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="m-0">
    <section class="bg-white dark:bg-gray-900 min-h-screen flex justify-center items-center">
        <div class="py-8 px-4 mx-auto w-full max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center uppercase">{{$title}}</h2>
            @if(Session::has('error') || $errors->any())
            <div id="alert" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Error</span>
                <div class="ms-3 text-sm font-medium">
                    {{Session::get('error') . ' ' .$errors}}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                </button>
              </div>
            @endif
           
            <form action="{{route('kegiatan.wisuda.submit_konfirmasi_kehadiran')}}" method="post">
                @csrf
                <div class="flex flex-col gap-4">
                    <div>
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                            NIM</label>
                        <input type="number" name="nim" id="nim"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nomor Induk Mahasiswa" required="">
                    </div>
                    <div>
                        <label for="konfirmasi_kehadiran"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Kehadiran</label>
                        <select name="konfirmasi_kehadiran" id="konfirmasi_kehadiran"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option disabled selected="">Apakah anda bersedia hadir di Seminar & Wisuda?</option>
                            <option value="Ya">Ya, Saya akan datang.</option>
                            <option value="Tidak">Tidak, Saya tidak bisa datang.</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Kirim
                </button>
            </form>

            <img src="{{asset('images/logo_utjambi.webp')}}" class="h-14 mx-auto mt-20" alt="">
        </div>
    </section>
</body>
<!-- Include jQuery from CDN -->
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

</html>