<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'DVBFF' --}}
        @yield('title','DVBFF')
    </title>

    <meta charset='utf-8'>
    <link href="/css/foobooks.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <h1>WEB Developer's BFF</h1>
        <img
        src='http://free-photos-ls02.gatag.net/images/lgf01a201309191400.jpg'
        style='width:300px'
        alt='Developer's BFF'>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
