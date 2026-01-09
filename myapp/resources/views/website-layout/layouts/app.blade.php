<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Website')</title>
</head>
<body>

    @include('website-layout.partials.header')
    @include('website-layout.partials.navbar')

    <div style="padding:20px;">
        @yield('content')
    </div>

    @include('website-layout.partials.footer')
    
</body>
</html>
