<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #1f2122;">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('/admin/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #393939;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <b>
                                <h1 class="m-0" style="color: #64a19d;font-size: 34px;text-decoration: none;text-align:center;font-family: Impact, fantasy; ">View All Games</h1>
                            </b>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item" style="color: #64A19D;"><a href="#">View All Games</a></li>
                                <li class="breadcrumb-item active">Create Games</li>
                            </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <!-- Small boxes (Stat box) -->
                    <!-- @if ($errors->any())
                    <div class="pt-3">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    @endif -->
                    <div class="row">


                        <form method="post" action="{{ url('game') }}" enctype="multipart/form-data" class="col-lg-8 flex m-auto">
                            <a href="{{ url('game') }}" class="btn btn-secondary">kembali</a>
                            {!! @csrf_field() !!}
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-white">Nama Game</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Masukkan Nama Game">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-white">Deskripsi Game</label>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Deskripsi Game"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-white">Harga Game</label>
                                <input type="number" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Harga Game">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-white">Spesifikasi Game</label><br>
                                <!-- <input type="text" name="spesifikasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Spesifikasi Game"> -->
                                <? $data["spesifikasi"] ?>
                                <input type="radio" id="Minimum" name="spesifikasi" value="Minimum">
                                <label for="spesifikasi" style="color: #fff;">Minimum</label><br>
                                <input type="radio" id="Recomendation" name="spesifikasi" value="Recomendation">
                                <label for="spesifikasi" style="color: #fff;">Recomendation</label><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">OS</label>
                                    <input type="text" name="spesifikasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan OS">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Processor</label>
                                    <input type="text" name="spesifikasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Processor">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Memory</label>
                                    <input type="text" name="spesifikasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Memory" <? $data["memory"] ?>>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Storage</label>
                                    <input type="text" name="spesifikasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Storage">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Direct X</label>
                                    <input type="text" name="spesifikasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Direct X">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Graphics</label>
                                    <input type="text" name="spesifikasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Graphics">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-white">Gambar Game</label>
                                <input type="file" name="file" class="form-control" id="exampleInputEmail1" placeholder="Upload Gambar Game">
                            </div>
                            <button type="submit" class="btn-lg btn-secondary" style="background-color: #64A19D;">Submit</button>
                        </form>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer" style="background-color: #393939;">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

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
    <script src="../../vendor/almasaeed2010/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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