<!DOCTYPE HTML>
<html>

<head>
    <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="/public/templateAdmin/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="/public/templateAdmin/css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="/public/templateAdmin/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='/public/templateAdmin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->

    <!-- js-->
    <script src="/public/templateAdmin/js/jquery-1.11.1.min.js"></script>
    <script src="/public/templateAdmin/js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src="/public/templateAdmin/js/Chart.js"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="/public/templateAdmin/js/metisMenu.min.js"></script>
    <script src="/public/templateAdmin/js/custom.js"></script>
    <link href="/public/templateAdmin/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
    <script src="/public/templateAdmin/js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });
    </script>
    <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href="/public/templateAdmin/css/owl.carousel.css" rel="stylesheet">
    <script src="/public/templateAdmin/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items: 3,
                lazyLoad: true,
                autoPlay: true,
                pagination: true,
                nav: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <?php include('../admin/sidebar.php') ?>
        </div>
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        <?php include('../Admin/header.php'); ?>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="col_3">
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-dollar icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$452</strong></h5>
                                <span>Total Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$1019</strong></h5>
                                <span>Online Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-money user2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$1012</strong></h5>
                                <span>Expenses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$450</strong></h5>
                                <span>Expenditure</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>1450</strong></h5>
                                <span>Total Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>




                <!-- for amcharts js -->
                <script src="/public/templateAdmin/js/amcharts.js"></script>
                <script src="/public/templateAdmin/js/serial.js"></script>
                <script src="/public/templateAdmin/js/export.min.js"></script>
                <link rel="stylesheet" href="/public/templateAdmin/css/export.css" type="text/css" media="all" />
                <script src="/public/templateAdmin/js/light.js"></script>
                <!-- for amcharts js -->

                <script src="/public/templateAdmin/js/index1.js"></script>

                <div class="charts">
                    <div class="mid-content-top charts-grids">
                        <div class="middle-content">
                            <h4 class="title">Carousel Slider</h4>
                            <!-- start content_slider -->
                            <div id="owl-demo" class="owl-carousel text-center">
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="/public/templateAdmin/images/slider1.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="/public/templateAdmin/images/slider2.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="/public/templateAdmin/images/slider3.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="/public/templateAdmin/images/slider4.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="/public/templateAdmin/images/slider5.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="/public/templateAdmin/images/slider6.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="/public/templateAdmin/images/slider7.jpg" alt="name">
                                </div>

                            </div>
                        </div>
                        <!--//sreen-gallery-cursual---->
                    </div>
                </div>


            </div>
        </div>
        <!--footer-->
        <?php include('../admin/footer.php'); ?>
        <!--//footer-->
    </div>

    <!-- new added graphs chart js-->
