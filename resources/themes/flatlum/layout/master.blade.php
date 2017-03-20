<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

        <title>Quarx: {{ ucfirst(request()->segment(2)) }}</title>

        <meta name="description" content="@yield('seoDescription')">
        <meta name="keywords" content="@yield('seoKeywords')">
        <meta name="author" content="">
        <link rel="icon" type="image/ico" href="{!! Quarx::asset('images/favicon.ico', 'image/ico') !!}?v2">
        <link rel="icon" type="image/png" sizes="32x32" href="{!! Quarx::asset('images/favicon-32x32.png', 'image/png') !!}?v2">
        <link rel="icon" type="image/png" sizes="96x96" href="{!! Quarx::asset('images/favicon-96x96.png', 'image/png') !!}?v2">
        <link rel="icon" type="image/png" sizes="16x16" href="{!! Quarx::asset('images/favicon-16x16.png', 'image/png') !!}?v2">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap Theme -->

        <link rel="stylesheet" type="text/css" href="themes/flatlum/css/flatlum.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('stylesheets')
    </head>

    <body>

        @include('quarx-frontend::layout.loading-overlay')

        <div class="quarx-notification">
            <div class="quarx-notify">
                <p class="quarx-notify-comment"></p>
            </div>
            <div class="quarx-notify-closer">
                <span class="glyphicon glyphicon-remove quarx-notify-closer-icon"></span>
            </div>
        </div>


        @include('partials._body')

    </body>

    <script type="text/javascript">
        var _token = '{!! csrf_token() !!}';
        var _url = '{!! url("/") !!}';
    </script>
    @yield("pre-javascript")
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{!! Quarx::asset('dist/js/all.js', 'application/javascript') !!}"></script>
    <script type="text/javascript">
        @include('quarx::notifications')
    </script>
    @yield('javascript')
</html>
