    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="../../vendor/almasaeed2010/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet"
            href="../../vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet"
            href="../../vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/summernote/summernote-bs4.min.css">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed" style="background-color: #393939;">
        <div class="wrapper">
            <!-- Navbar -->

            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('/admin/sidebar')


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background-color: #1f2122;">
                <!-- Content Header (Page header) -->
                
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="content" style="margin: 0% 0%">
                                        <div class="col-sm-12">
                                            <h2 style="font-size: 45px;
                                            text-transform: uppercase;
                                            text-align: center;
                                            margin: 20px 0px;    color: #fff;
                                                font-weight: 700;">Transactions</h2>
                                        </div>
                                        <div class="row">

                                            @foreach ($counts as $count)
                                                <div class="col-lg-4 col-6">
                                                    <!-- small box -->
                
                
                                                    @if ($count->status == 'paid')
                                                        <div class="small-box bg-info">
                                                            <div class="inner">
                                                                <h3>{{ $count->status }}</h3>
                                                                <p>{{ $count->count }} Transactions</p>
                                                            </div>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                                    fill="currentColor" class="bi bi-check-circle-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    @elseif ($count->status == 'cancelled')
                                                        <div class="small-box bg-danger">
                                                            <div class="inner">
                                                                <h3>{{ $count->status }}</h3>
                                                                <p>{{ $count->count }} Transactions</p>
                                                            </div>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                                    fill="currentColor" class="bi bi-dash-circle-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    @elseif ($count->status == 'pending')
                                                        <div class="small-box bg-warning">
                                                            <div class="inner">
                                                                <h3>{{ $count->status }}</h3>
                                                                <p>{{ $count->count }} Transactions</p>
                                                            </div>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                                    fill="currentColor" class="bi bi-exclamation-circle-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                
                                            <!-- ./col -->
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Small boxes (Stat box) -->
                        
                        <!-- /.row -->
                    </div>
                    <div class="col-12">
                        <div style="width: 100%">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <!--Refactor code -->
                    <script style="width: 100%;">
                        const labels = {!! json_encode($months) !!};;
                        const data = {
                            labels: labels.map(label => label.substring(5)),
                            datasets: [{
                                label: 'Total Pendapatan',
                                backgroundColor: ['blue', 'red', 'green', 'purple', 'orange', 'grey'],
                                borderColor: 'rgb(255, 99, 132)',
                                data: {!! json_encode($totals) !!},
                            }, ],
                        };

                        const config = {
                            type: 'bar',
                            data: data,
                            options: {
                                plugins: {
                                    legend: {
                                        display: false,
                                    },
                                    title: {
                                        display: true,
                                        text: 'Pendapat Per Bulan',
                                    },
                                },
                            },
                        };

                        var myChart = new Chart(document.getElementById('myChart'), config);
                    </script><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
          

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="../../vendor/almasaeed2010/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/moment/moment.min.js"></script>
        <script src="../../vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
        </script>
        <!-- Summernote -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../../vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../vendor/almasaeed2010/adminlte/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../vendor/almasaeed2010/adminlte/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../vendor/almasaeed2010/adminlte/dist/js/pages/dashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    </body>

    </html>
