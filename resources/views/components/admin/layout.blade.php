<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ENV('app_name') }}</title>

    <!-- CSS Files -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-topx`">
    <div id="wrapper">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <x-admin.navbar></x-admin.navbar>
                <!-- End of Topbar -->

                <!-- Main Content -->
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
