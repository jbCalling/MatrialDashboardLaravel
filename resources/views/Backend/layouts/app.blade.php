<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    {{--Title--}}
    <title>
        @yield('title')
    </title>


    {{--include Style--}}
    @include('Backend.partials.style')
</head>

<body class="">

    {{--Main Content--}}
    @yield('content')




    {{--Incude Script Section--}}
    @include('Backend.partials.script')

    
</body>

</html>
