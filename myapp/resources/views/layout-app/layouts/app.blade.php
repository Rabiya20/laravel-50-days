<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My App')</title>
</head>
<body>

    @include('layout-app.partials.header')

    <div style="padding:20px;">
        @yield('content')
    </div>

    @include('layout-app.partials.footer')

</body>
</html>
