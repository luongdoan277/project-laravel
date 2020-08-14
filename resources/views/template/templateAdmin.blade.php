<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link href="{{asset('css/styleAdmin.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,531;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/wrapper.css')}}">
    <script src="{{asset('js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('js/raphael-min.js')}}"></script>
    <script src="{{asset('js/morris.js')}}"></script>
</head>
<body>
@if(Auth::user())
    <section id="container">
        <header class="header fixed-top clearfix">
            <div class="brand">
                <a href="index.html" class="logo">
                    BerryBerri
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <div class="top-nav clearfix">
                <ul class="nav pull-right top-menu">
                    <li class="bell">
                        <a href=""><i class="far fa-bell"></i></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username">
                        @if(Auth::check())

                            @endif
                        </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="logout-admin"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{route('Dashboard')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Overwrite</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Information</span>
                                <i id="icon-1" class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Content</a></li>
                                <li><a href="#">Những dự án dã hoàn thành</a></li>
                                <li><a href="#">những dự án đang thực hiện</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Account management</span>
                                <i id="icon-2" class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="sub">
                                <li><a href="">Account list</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">
                                <i class="fa fa-tasks"></i>
                                <span>Product management</span>
                                <i id="icon-3" class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('product-list')}}">Product list</a></li>
                                <li><a href="{{url('products')}}">Add new product</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>Email </span>
                                <i id="icon-mail" class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="sub">
                                <li><a href="mail.html">Inbox</a></li>
                                <li><a href="">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">
                                <i class="fa fa-image"></i>
                                <span>Order management</span>
                                <i id="icon-img" class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('order')}}">Order list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
        </section>
    </section>
@endif
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.js')}}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('chart', {

            title: {
                text: 'BIỂU ĐỒ TỔNG DOANH THU HÀNG THÁNG'
            },

            subtitle: {
                text: '.......'
            },

            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },

            series: [{
                type: 'column',
                colorByPoint: true,
                data: [30, 80, 100, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                showInLegend: false
            }]
        });
        $('#plain').click(function () {
            chart.update({
                chart: {
                    inverted: false,
                    polar: false
                },
                subtitle: {
                    text: 'Plain'
                }
            });
        });
        $('#polar').click(function () {
            chart.update({
                chart: {
                    inverted: false,
                    polar: true
                },
                subtitle: {
                    text: 'Polar'
                }
            });
        });
    });
</script>
</body>
</html>

