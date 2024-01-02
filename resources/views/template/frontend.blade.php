<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YHA</title>
    <link rel="icon" href="{{ asset('image/logo/logo.png') }}">
    {{-- css  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- fontawesome cdn js  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- home style css  --}}
    <link rel="stylesheet" href="{{ asset('css/client/home.css') }}">
    {{-- course style css  --}}
    <link rel="stylesheet" href="{{ asset('css/client/course.css') }}">
    {{-- photo gallery css  --}}
    <link rel="stylesheet" href="{{ asset('css/client/photogallery.css') }}">
    {{-- event css  --}}
    <link rel="stylesheet" href="{{ asset('css/client/event.css') }}">
    {{-- footer css  --}}
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>

<body>

    @include('client.parts.navbar')

    @yield('content')

    @include('client.parts.footer')

</body>

{{-- bootstrap js  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="{{ asset('js/course/course.js') }}"></script>

</html>
