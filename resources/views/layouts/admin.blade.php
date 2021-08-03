<!doctype html>
<html lang="ru-RU">
<head>
    @include('admin.includes.head')
</head>
<body class="g-sidenav-show bg-gray-100">

    @include('admin.includes.aside')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

        @include('admin.includes.navbar')

        <div class="container-fluid py-4">

            @yield('content')
            @include('admin.includes.footer')

        </div>

    @include('admin.includes.foot')
    @stack('scripts')
</body>
</html>