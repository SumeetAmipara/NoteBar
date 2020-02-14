<!DOCTYPE html>
<html lang="en"> 
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive blog template">
        <meta name="author" content="Zoyothemes">

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,600,700" rel="stylesheet">
        <!-- Bootstrap core CSS -->
         <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <!-- <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
        <!-- MENU CSS -->
        <link href="{{ asset('css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- MATERIALDESIGN ICON -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css')}}">
        <!-- CUSTOM STYLESHEET -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/default.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>

    <body>
          <!-- Begin page -->
        <div id="app">
            <!-- Top Bar Start -->
            <div class="topbar-mobile">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="" class="" style="height: 44px;"></a>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
            </div>
            <!-- Top Bar End -->
            @include('layouts.left-side-menu')
            @yield('content')

        </div>
          <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- js placed at the end of the document so the pages load faster -->
        <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
        <!-- <script src="{{ asset('js/popper.min.js') }}"></script> -->
        <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
        <script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
        <script src="{{ asset('js/metisMenu.min.js') }}" defer></script>
        <!--common script for all pages-->
        <script src="{{ asset('js/jquery.app.js') }}" defer></script>
    </body>
 
</html>