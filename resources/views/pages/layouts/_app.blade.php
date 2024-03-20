<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>SN2K24</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('assets/images/favicon.io')}}">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        <!-- App css -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/theme.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Dans votre fichier de mise en page principal -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>
            #map { height: 400px; }
        </style>

    </head>

    <body>
        @include('pages\layouts\_sidebar')
        @include('pages\layouts\_navbar')
        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        2024 © SENEGAL 2024.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Devgalsen
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Overlay-->
<div class="menu-overlay"></div>


<!-- jQuery  -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/js/metismenu.min.js')}}"></script>
<script src="{{url('assets/js/waves.js')}}"></script>
<script src="{{url('assets/js/simplebar.min.js')}}"></script>



<!-- Sparkline Js-->
<script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Js-->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- Chart Custom Js-->
<script src="{{url('assets/pages/knob-chart-demo.js')}}"></script>


<!-- Morris Js-->
<script src="../plugins/morris-js/morris.min.js"></script>

<!-- Raphael Js-->
<script src="../plugins/raphael/raphael.min.js"></script>

<!-- Custom Js -->
<script src="{{url('assets/pages/dashboard-demo.js')}}"></script>

<!-- App js -->
<script src="{{url('assets/js/theme.js')}}"></script>

</body>

</html>