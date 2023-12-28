<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--  --}}
    @include('app.partials._head')
</head>
<body class="bg-white border-gray-200 dark:bg-gray-800 dark:border-gray-700">

    {{-- NAVBAR --}}
    @include('app.partials._nav')

{{--  --}}
<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
    {{-- MENU SIDEBAR --}}
    @include('app.partials._sidebar')

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">

        {{-- CONTENT --}}
        <main>
            @yield('content')
        </main>

        {{--  --}}
{{--        @include('app.partials._footer')--}}
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
