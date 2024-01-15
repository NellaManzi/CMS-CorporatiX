<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--  --}}
    @include('app.partials._head')
</head>
<body class="bg-white border-gray-200 dark:bg-gray-800 dark:border-gray-700" x-data="{ expanded: false  }">

    {{-- NAVBAR --}}
    @include('app.partials._nav')


    {{--  --}}
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">


        <div x-show="expanded"
             x-transition:enter="transition ease-out duration-400"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-400"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90">
            {{-- MENU SIDEBAR --}}
            @include('app.partials._sidebar')
        </div>

            <div id="main-content" class="relative w-full h-full bg-red-500 dark:bg-gray-900" :class="expanded ? 'overflow-y-auto lg:ml-64':'max-w-screen-2xl mx-auto'">
                {{-- CONTENT --}}
                <main>
                    @yield('content')
                </main>

                {{--  --}}
                @include('app.partials._footer')
            </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    @yield('plugins_script')

</body>

</html>
