<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
    @include('frontend.layout.css')
</head>
<body>
    <div class="body">
        @include('frontend.layout.header')
        <div role="main" class="main">
            @yield('content')
        </div>
        @include('frontend.layout.footer')
        @include('frontend.layout.js')
        @yield('customJS')
    </div>
</body>
</html>
