<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/logo_tokontol.png') }}" />
    <title>PAPHARDWARE | @yield('title')</title>
    {{-- style css --}}
    @include('includes.index.style')
</head>

<body>
    {{-- navbar --}}
    @include('includes.profile.navbar')

    <!-- Main -->
    @yield('content')
    <!-- End Main -->

    {{-- Footer --}}
    @include('includes.profile.footer')

    {{-- Script --}}
    @include('includes.index.script')
</body>

</html>
