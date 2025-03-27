@extends('layouts.homepage')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 flex items-center justify-center px-4">
    <div class="max-w-lg w-full space-y-8 text-center">
        <div class="space-y-6">
            <!-- Modern wrench icon -->
            <svg class="h-16 w-16 mx-auto text-indigo-500 dark:text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white tracking-tight">
                {{isset($description) ? $description : "Under Maintenance"}}
            </h1>
            
            <div class="space-y-2">
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    Our team is performing scheduled maintenance to improve your experience.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-300">Expected completion:</p>
            </div>
        </div>

        <div id="countdown" class="inline-flex items-center justify-center space-x-2 text-2xl sm:text-3xl md:text-4xl font-mono font-bold bg-white dark:bg-gray-800 text-indigo-600 dark:text-indigo-400 py-4 px-6 rounded-xl shadow-sm"></div>
        
        <div class="pt-6">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Thank you for your patience.
            </p>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    CountDownTimer('{{$until}}', 'countdown');

    function CountDownTimer(dt, id) {
        var end = new Date(dt);
        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            
            if (distance < 0) {
                clearInterval(timer);
                document.getElementById(id).innerHTML = "Maintenance Complete";
                return;
            }

            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            var timeString = [
                days + 'd',
                hours + 'h',
                minutes + 'm',
                seconds + 's'
            ].join(' : ');

            document.getElementById(id).innerHTML = timeString;
        }

        timer = setInterval(showRemaining, 1000);
    }
</script>
@endsection