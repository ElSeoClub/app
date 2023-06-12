<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased overflow-y-hidden">
        <div class="max-h-screen min-h-screen bg-gray-100 relative">
            <div class="h-14 w-full bg-white items-center flex p-6 border-b z-50">{{ $header }}</div>

{{--            <!-- Page Heading -->--}}
{{--            @if (isset($header))--}}
{{--                <header class="bg-white shadow">--}}
{{--                    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">--}}
{{--                        {{ $header }}--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--            @endif--}}

            <!-- Page Content -->
            <main class="h-[calc(100vh-7rem)] overflow-y-auto  z-0">
                {{ $slot }}
            </main>
            <div class="w-full bg-white absolute bottom-0 h-14 flex justify-center  border-t z-10">
                <div class="w-full flex items-center justify-between max-w-[480px] mx-auto">
                    <a href="{{route('home.index')}}" class="w-[25%] text-center h-14 flex items-center cursor-pointer justify-center border-t-4 relative @if(isset($active) && $active == 'home') border-orange-600 bg-gray-100 @else border-white hover:bg-gray-100 hover:border-orange-600 @endif"><img src="svg/home.png" width="26" alt=""></a>
                    <a href="{{route('home.subjects')}}" class="w-[25%] text-center h-14 flex items-center cursor-pointer justify-center border-t-4 relative @if(isset($active) && $active == 'subjects') border-orange-600 bg-gray-100 @else border-white hover:bg-gray-100 hover:border-orange-600 @endif"><img src="svg/judgement.png" width="26" alt=""></a>
                    <a href="{{route('home.calendar')}}" class="w-[25%] text-center h-14 flex items-center cursor-pointer justify-center border-t-4 relative @if(isset($active) && $active == 'calendars') border-orange-600 bg-gray-100 @else border-white hover:bg-gray-100 hover:border-orange-600 @endif"><img src="svg/calendar.png" width="26" alt=""> <div class="px-1 bg-red-600 absolute text-xs rounded-full font-bold text-white top-2 right-5">12</div></a>
                    <a href="{{route('home.index')}}" class="w-[25%] text-center h-14 flex items-center cursor-pointer justify-center border-t-4 relative @if(isset($active) && $active == 'home4') border-orange-600 bg-gray-100 @else border-white hover:bg-gray-100 hover:border-orange-600 @endif"><img src="svg/menu.png" width="26" alt=""></a>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
