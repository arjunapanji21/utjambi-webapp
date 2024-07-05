<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_ut.ico')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>{{$title}}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="m-0 min-h-screen bg-gradient-to-br from-white to-white via-gray-300 antialiased bg-no-repeat text-white">
    <x-navbar></x-navbar>
    <footer></footer>
</body>

