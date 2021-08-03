<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        <header class="header">
            @include('includes.header')
        </header>

        <main class="main py-4">
            @yield('content')
        </main>

    </div>

    <footer class="footer">
        @include('includes.foot')
    </footer>

    @stack('scripts')

</body>
</html>