<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
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
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #1f2122;">
            <!-- Content Header (Page header) -->
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content" style="margin: 0% 0%">
                            <div class="col-sm-12">
                                <h2 style="font-size: 45px;
                                text-transform: uppercase;
                                text-align: center;
                                margin: 20px 0px;    color: #fff;
                                    font-weight: 700;">EDIT GAMES</h2>
                            </div>
                            <section class="content">
                                <div class="container-fluid">
                
                
                
                                    <!--Refactor code -->
                
                
                                    <form method='post' action="{{ route('admin.games.update', $game->id) }}"
                                        enctype="multipart/form-data" class="col-lg-8 flex m-auto">
                                        @csrf
                                        @method('PUT')
                
                
                                        <a href='{{ route('admin.games.index') }}' class="btn btn-secondary">kembali</a>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Nama Game</label>
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                value="{{ $game->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Deskripsi Game</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi Game"
                                                value="{{ $game->deskripsi }}">{{ $game->deskripsi }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga" class="text-white">Harga Game</label>
                                            <input type="number" name="harga" class="form-control" id="harga"
                                                value="{{ $game->harga }}">
                                        </div>
                
                                        <h5 class="text-white">Spesifikasi Game</h4><br>
                
                
                                        <div class="form-group">
                                            <label for="os" class="text-white">OS</label>
                                            <input type="text" name="os" class="form-control" id="os"
                                                value=" {{ $game->os }}">
                
                                        </div>
                                        <div class="form-group">
                                            <label for="processor" class="text-white">Processor</label>
                                            <input type="text" name="processor" class="form-control" id="processor"
                                                value="{{ $game->processor }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Memory</label>
                                            <input type="text" name="memory" class="form-control" id="memory"
                                                value="{{ $game->memory }}">
                
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Storage</label>
                                            <input type="text" name="storage" class="form-control" id="storage"
                                                value="   {{ $game->storage }}">
                
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Direct X</label>
                                            <input type="text" name="direct_x" class="form-control" id="direct">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Graphics</label>
                                            <input type="text" name="graphics" class="form-control" id="exampleInputEmail1"
                                                value=" {{ $game->graphics }}">
                
                                        </div>
                
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Gambar Game</label>
                                            <input type="text" name="image" class="form-control" id="image"
                                                value=" {{ $game->image }}">
                
                                        </div>
                                        <button type="submit" class="btn-lg btn-secondary"
                                            style="background-color: #64A19D;">Submit</button>
                
                                    </form>
                
                                </div>
                                <!-- /.row -->
                        </div><!-- /.container-fluid -->
                        </section>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            
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
