<!DOCTYPE html>
<html lang="en">

<head>  
    
    @include('/admin/head')
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #27292A;">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('/admin/sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #27292A;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    
                  
                    <div class="game-details">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="content" style="margin: 0% 10%">
                                    <div class="col-sm-12">
                                        <h2 style="font-size: 45px;
                                        text-transform: uppercase;
                                        text-align: center;
                                        margin: 20px 0px;    color: #fff;
                                            font-weight: 700;">{{ $game->nama }}</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="{{ url($game->image) }}" alt="{{ $game->nama }}" style="border-radius: 23px; margin-bottom: 30px; width:100%;" />
                                        </div>

                                        <div class="col-sm-12">
                                            <p style="font-size: 20px;    color: #666;
                                            line-height: 30px;
                                            margin-bottom: 0px;">
                                               {{ $game->deskripsi }}
                                            </p>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="harga-game">
                                                <h1 style="font-size: 2, 7rem; text-align: center; margin-bottom: -20px;font-size: 35px;
                                                text-transform: uppercase;
                                                text-align: center;
                                                margin: 20px 0px;    color: #fff;
                                                    font-weight: 700;"> Rp {{ $game->harga }}</h1>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ***** Details End ***** -->

                <!-- ***** Other Start ***** -->
                    <div class="other-games" style="margin: 10% 10%; box-sizing:border-box;">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="heading-section" >
                                    <h4 style="font-size: 34px;
                        
                                    color: #fff;
                                       font-weight: 700;">Specifications</h4>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom:50px">
                                <div class="item">
                                    <h3 style="font-size: 34px;
                        
                                    color: #fff;
                                       font-weight: 700; text-align:center">MINIMUM/RECOMENDED</h3>
                                </div>
                            </div>
                           
                            <div class="col-sm-6" style="text-align:center">
                                <div class="item">
                                    <h5 style="font-size: 30px;
                        
                                    color: #fff;
                                       font-weight: 700; ">OS</h5>
                                    <span style="font-size: 20px;    color: #666;
                                    line-height: 30px;
                                    margin-bottom: 0px;">{{ $game->OS }}</span>
                                </div>
                            </div>
                            
                            <div class="col-sm-6" style="text-align:center">
                                <div class="item">
                                    <h5 style="font-size: 30px;
                        
                                    color: #fff;
                                       font-weight: 700; ">Processor</h5>
                                    <span style="font-size: 20px;    color: #666;
                                    line-height: 30px;
                                    margin-bottom: 0px;">{{ $game->processor }}</span>
                                </div>
                            </div>
                           
                            <div class="col-sm-6" style="text-align:center">
                                <div class="item">
                                    <h5 style="font-size: 30px;
                        
                                    color: #fff;
                                       font-weight: 700; ">Memory</h5>
                                    <span style="font-size: 20px;    color: #666;
                                    line-height: 30px;
                                    margin-bottom: 0px;">{{ $game->memory }}</span>
                                </div>
                            </div>
                            
                            
                            <div class="col-sm-6" style="text-align:center">
                                <div class="item">
                                    <h5 style="font-size: 30px;
                        
                                    color: #fff;
                                       font-weight: 700; ">Storage</h5>
                                    <span style="font-size: 20px;    color: #666;
                                    line-height: 30px;
                                    margin-bottom: 0px;">{{ $game->storage }}</span>
                                </div>
                            </div>
                            
                            <div class="col-sm-6" style="text-align:center">
                                <div class="item">
                                    <h5 style="font-size: 30px;
                        
                                    color: #fff;
                                       font-weight: 700; ">Direct X</h5>
                                    <span style="font-size: 20px;    color: #666;
                                    line-height: 30px;
                                    margin-bottom: 0px;">{{ $game->direct_x }}</span>
                                </div>
                            </div>
                           
                            <div class="col-sm-6" style="text-align:center">
                                <div class="item">
                                    <h5 style="font-size: 30px;
                        
                                    color: #fff;
                                       font-weight: 700; ">Graphics</h5>
                                    <span style="font-size: 20px;    color: #666;
                                    line-height: 30px;
                                    margin-bottom: 0px;">{{ $game->graphics }}</span>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div><!-- /.container-fluid -->
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