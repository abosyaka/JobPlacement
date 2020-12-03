<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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

<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

        $( "#search" ).autocomplete({
            source: function( request, response ) {
                // Fetch data
                $.ajax({
                    url:"{{route('autocomplete.search')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                    },
                    success: function( data ) {
                        response( data );
                    },
                });
            },
            select: function (event, ui) {
                // Set selection
                $('#search').val(ui.item.label); // display the selected text
                window.location = ui.item.value;
                return false;
            }
        });

    });
</script>

</body>
</html>
