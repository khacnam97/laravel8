<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/1.12.1/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css')  }}">
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js')}}"></script>
    <!-- Fonts -->
    <link href="{{ asset('css/familyNunito.css') }}" rel="stylesheet">



    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    {{-- Datatable responsive --}}
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.responsive.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/responsive.dataTables.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
    @yield('custom-header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content" style="padding: 8px">
            <div class="container-fluid" style="padding: 8px">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="min-height: calc( 100vh - 88px); margin-bottom: 0">
                            <div class="card-body">
                                 @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <script>
        let basePath = '{{ url('') }}'
    </script>
    <script src="{{ asset('js/utility.js') }}"></script>
    <script>
        <?php
            $route = Route::currentRouteName();
            if (
                $route !== 'set.create' && $route !== 'set.edit'
                && $route !== 'script.getCreate' && $route !== 'script.getEdit'
            ) {
        ?>
        setChosenList([]);
        <?php
            }
        ?>
    </script>
    @yield('custom-js')
</div>
<!-- ./wrapper -->

</body>
</html>
