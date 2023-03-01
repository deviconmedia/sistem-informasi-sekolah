<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    @include('layouts.backend.style')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('layouts.backend.header')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('layouts.backend.menu')
        <!-- END SIDEBAR-->
        <div class="content-wrapper my-4">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->
           @include('layouts.backend.footer')
        </div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    @include('layouts.backend.scripts')
</body>

</html>