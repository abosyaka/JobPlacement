<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>@yield('title-block')</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{url('/css/all.css')}}"/>
</head>
<body>
<div class="container-fluid">
    @include('inc.navbar')
    @yield('content')
</div>
@include('inc.footer')

<script src="{{URL::asset('js/app.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"
></script>
<script>$("multiCollapseExample1").collapse();

    $("#button1").click(function () {
        $("#multiCollapseExample2").collapse("hide");
    });

    $("#button2").click(function () {
        $("#multiCollapseExample1").collapse("hide");
    });</script>
</body>
</html>
