<!DOCTYPE html>
<html>

<head>
    <base href="{{ asset('frontend') }}/">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Welcome </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100'
        rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href="css/sequence-looptheme.css" rel="stylesheet" media="all" />
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>

<body id="home">
    <div class="wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo"><a href="{{ asset('') }}"><img src="images/40.png" alt="xgear"
                                    style="width: 124px;height: 63px;"></a></div>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="header_top">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="option_nav">
                                        <li class="dorpdown">
                                            <a href="#">Eng</a>
                                            <ul class="subnav">
                                                <li><a href="#">Eng</a></li>
                                                <li><a href="#">Vns</a></li>
                                                <li><a href="#">Fer</a></li>
                                                <li><a href="#">Gem</a></li>
                                            </ul>
                                        </li>
                                        <li class="dorpdown">
                                            <a href="#">USD</a>
                                            <ul class="subnav">
                                                <li><a href="#">USD</a></li>
                                                <li><a href="#">UKD</a></li>
                                                <li><a href="#">FER</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="topmenu">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Recruiment</a></li>
                                        <li><a href="#">Media</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="usermenu">
                                        <li><a href="{{ asset('login') }}" class="log">Login</a></li>
                                        <li><a href="" class="reg">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="header_bottom">
                            <ul class="option">
                                <li id="search" class="search">
                                    <form  action="{{ asset('searchname') }}" method="get">
                                        <input
                                            class="search-submit" type="submit" value=""><input class="search-input"
                                            placeholder="Enter your search term..." type="text" value="" name="search" >
                                            {{ csrf_field() }}
                                    </form>
                                </li>

                                <li class="option-cart">
                                    <a href="{{ asset('cart/show') }}" class="cart-icon" >
                                        <span class="cart_no"> {{Cart :: getContent()->count()}}</span></a>

                                </li>
                            </ul>
                            <div class="navbar-header"><button type="button" class="navbar-toggle"
                                    data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle
                                        navigation</span><span class="icon-bar"></span><span
                                        class="icon-bar"></span><span class="icon-bar"></span></button></div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="{{ asset('') }}">Trang chủ</a>

                                    </li>
                                    <li><a href="{{ asset('product') }}">Sản phẩm</a></li>
                                    <li><a href="#">Tin tức </a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @yield('main')
        <div class="clearfix"></div>
        <div class="footer">
            <div class="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-logo"><a href="#"><img src="images/40.png" alt=""></a></div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4 class="title">Contact <strong>Info</strong></h4>
                            <p>No. 08, Nguyen Trai, Hanoi , Vietnam</p>
                            <p>Call Us : (084) 1900 1008</p>
                            <p>Email : michael@leebros.us</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h4 class="title">Customer<strong> Support</strong></h4>
                            <ul class="support">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Payment Option</a></li>
                                <li><a href="#">Booking Tips</a></li>
                                <li><a href="#">Infomation</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                            <p>Lorem ipsum dolor ipsum dolor.</p>
                            <form class="newsletter">
                                <input type="text" name="" placeholder="Type your email....">
                                <input type="submit" value="SignUp" class="button">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Copyright © 2012. Designed by <a href="#">Michael Lee</a>. All rights reseved</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-icon">
                                <li><a href="#" class="linkedin"></a></li>
                                <li><a href="#" class="google-plus"></a></li>
                                <li><a href="#" class="twitter"></a></li>
                                <li><a href="#" class="facebook"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript==================================================-->
    
   

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    
</body>

</html>
