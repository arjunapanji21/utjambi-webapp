<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{$title}} | UT Jambi</title>
    @vite(['resources/css/app.css'])
    
</head>
<body class="m-0">
    <div class="p-2" style="background-image: url('{{asset('images/background/blue1.webp')}}'); background-size: cover; background-repeat: no-repeat">
        <div class="mx-auto w-[1080px]">
    
            <div class="bg-white shadow-lg rounded-lg p-4 w-fit mx-auto my-10">
                <iframe width="940px" height="540px" src="https://www.youtube.com/embed/?listType=playlist&list=PLUDn43O3gwiPrcvzuo8BrCvJYQKFzKP0-&rel=0&controls=1&showinfo=0&autoplay=1&loop=1&vq=hd1080" frameborder="0" allow="autoplay" encrypted-media></iframe>
            </div>
    
            <div class="owl-carousel w-[970px] mx-auto">
                <img class="rounded-lg shadow-lg" src="{{asset('images/signage/1.jpg')}}" alt="">
                <img class="rounded-lg shadow-lg" src="{{asset('images/signage/2.jpg')}}" alt="">
                <img class="rounded-lg shadow-lg" src="{{asset('images/signage/3.jpg')}}" alt="">
                <img class="rounded-lg shadow-lg" src="{{asset('images/signage/4.jpg')}}" alt="">
                <img class="rounded-lg shadow-lg" src="{{asset('images/signage/5.jpg')}}" alt="">
                <img class="rounded-lg shadow-lg" src="{{asset('images/signage/6.jpg')}}" alt="">
            </div>
    
            <div class="mx-auto p-2 text-center">
                <button type="button" onclick="toggleFullScreen(document.body)" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Fullscreen</button>
            </div>
    
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
    function toggleFullScreen(elem) {
    // ## The below if statement seems to work better ## if ((document.fullScreenElement && document.fullScreenElement !== null) || (document.msfullscreenElement && document.msfullscreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
        if (elem.requestFullScreen) {
            elem.requestFullScreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullScreen) {
            elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
}
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
            items: 1,
            autoplay: true,
        });
    });
    </script>
</body>
</html>