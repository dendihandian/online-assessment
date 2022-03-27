<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin._partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin._partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <main>
                    @yield('content')
                </main>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; {{ config('app.name', 'Laravel') }} {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('admin._partials.logout-modal')

    <!-- Scripts -->
    <script src="{{ mix('js/sbadmin/jquery.min.js') }}"></script>
    <script src="{{ mix('js/sbadmin/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ mix('js/sbadmin/jquery.easing.min.js') }}"></script>
    <script src="{{ mix('js/sbadmin/sb-admin-2.min.js') }}"></script>
    <script src="{{ mix('js/admin.js') }}"></script>

    @include('admin._partials.scripts')

    <!-- The Page Specific Script -->
    @yield('script')

</body>
</html>
