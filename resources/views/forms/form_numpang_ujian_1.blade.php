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

    <section id="pilihan" class="bg-white dark:bg-gray-900 min-h-screen flex flex-col justify-center items-center">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h3 class="text-center font-bold text-xl mb-4 pb-2 border-b">
                Halo, selamat datang di aplikasi numpang ujian UT Jambi !<br>Silahkan pilih UT Daerahmu.. &#128522;
            </h3>
            <div class="grid lg:grid-cols-2 gap-5">
                <a href="{{route('form.numpang_ujian_2')}}" class="bg-primary-900 text-gray-100 shadow rounded-lg flex flex-col justify-center items-center gap-4 p-4 hover:bg-primary-600 hover:text-yellow-300 hover:shadow-lg">
                    Mahasiswa UT Jambi
                </a>
                <a href="{{route('form.numpang_ujian_3')}}" class="bg-primary-900 text-gray-100 shadow rounded-lg flex flex-col justify-center items-center gap-4 p-4 hover:bg-primary-600 hover:text-yellow-300 hover:shadow-lg">
                    Mahasiswa UT Daerah Lain
                </a>
            </div>
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