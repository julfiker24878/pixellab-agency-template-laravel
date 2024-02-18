<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="./dashboard_assets/plugins/images/favicon.png">
    <title>Cubic Admin Template</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="/dashboard_assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="/dashboard_assets/plugins/components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/dashboard_assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- ===== Animation CSS ===== -->
    <link href="/dashboard_assets/css/animate.css" rel="stylesheet">
    <!-- ===== Fontawesome CSS ===== -->
    <link href="/dashboard_assets/css/all.min.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="/dashboard_assets/css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="/dashboard_assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa-solid fa-bars-progress"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="/dashboard_assets/plugins/images/logo.png" alt="home" />
                        </b>
                        <span>
                            <img src="/dashboard_assets/plugins/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="fa-solid fa-arrow-left"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Search..." class="form-control">
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="fa-solid fa-comment-dots"></i>
                            <span class="badge badge-xs badge-danger">6</span>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="/dashboard_assets/plugins/images/users/1.jpg" alt="user" class="img-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="/dashboard_assets/plugins/images/users/2.jpg" alt="user" class="img-circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="/dashboard_assets/plugins/images/users/3.jpg" alt="user" class="img-circle"><span class="profile-status away pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="/dashboard_assets/plugins/images/users/4.jpg" alt="user" class="img-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="right-side-toggle">
                        <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                            <i class="fa-solid fa-gear"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div class="profile-image">
                            <img src="/dashboard_assets/plugins/images/users/8.jpg" alt="user-img" class="img-circle">
                            <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf
                            </form>
                        </div>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> {{ Auth::user()->name }}</a></p>
                    </div>
                </div>
                <!-- ===== SIDEBAR START ===== -->
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li><!-- DASHBOARD -->
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa-solid fa-desktop"></i> <span class="hide-menu"> Dashboard <span class="label label-rounded label-info pull-right"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ route('admin') }}">Home</a> </li>
                                <li> <a href="{{ url('/') }}" target="_blank">Visit Site</a> </li>
                            </ul>
                        </li>
                        <li><!-- LOGO -->
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa-brands fa-accessible-icon"></i> <span class="hide-menu"> Logo<span class="label label-rounded label-info pull-right"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ url('/logo') }}">Add Logo</a> </li>
                                <li> <a href="{{ route('logo.view') }}">View Logo</a> </li>
                            </ul>
                        </li>
                        <li><!-- HERO SECTION -->
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa-solid fa-fax"></i> <span class="hide-menu"> Hero Section<span class="label label-rounded label-info pull-right"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ url('/hero') }}">Add Content</a> </li>
                                <li> <a href="{{ route('hero.view') }}">View Content</a> </li>
                                <li> <a href="{{ url('/heroimg') }}">Add Images</a> </li>
                                <li> <a href="{{ route('heroimg.view') }}">View Images</a> </li>
                            </ul>
                        </li>
                        <li><!-- SERVICES SECTION -->
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa-solid fa-hand-holding-medical"></i> <span class="hide-menu"> Service Section<span class="label label-rounded label-info pull-right"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ url('/service-title') }}">Add Service Title</a> </li>
                                <li> <a href="{{ route('service-title.view') }}">View Service Titles</a> </li>
                                <li> <a href="{{ url('/services') }}">Add Services</a> </li>
                                <li> <a href="{{ route('services.view') }}">View Services</a> </li>
                            </ul>
                        </li>
                        <li><!-- PORTFOLIO SECTION -->
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa-solid fa-fill-drip"></i> <span class="hide-menu"> Portfolio Section<span class="label label-rounded label-info pull-right"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ url('/tab') }}">Add Tab</a> </li>
                                <li> <a href="{{ route('tab.view') }}">View Tabs</a> </li>
                                <li> <a href="{{ url('/portfolio') }}">Add Portfolio Item</a> </li>
                                <li> <a href="{{ route('portfolio.view') }}">View Portfolio Items</a> </li>
                            </ul>
                        </li>
                        <li><!-- TEAM SECTION -->
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa-solid fa-people-group"></i> <span class="hide-menu"> Team Section<span class="label label-rounded label-info pull-right"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ url('/team') }}">Add Team Profile</a> </li>
                                <li> <a href="{{ route('team.view') }}">View Team Profiles</a> </li>
                                <li> <a href="{{ url('/account') }}">Add Team Accounts</a> </li>
                                <li> <a href="{{ route('account.view') }}">View Team Accounts</a> </li>
                            </ul>
                        </li>
                        <li><!-- CONTACT MESSAGES -->
                            <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa-solid fa-envelopes-bulk"></i> <span class="hide-menu"> Mailbox<span class="label label-rounded label-info pull-right"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ url('/contact') }}">Open Mailbox</a> </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- ===== SIDEBAR END ===== -->
                <div class="p-30">
                    <span class="hide-menu">
                        <a href="https://portfolio.julfikerali.com/" target="_blank" class="btn btn-success">Developed by Julfiker Ali</a>
                    </span>
                </div>
            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                
                    @yield('content')
                
                <!-- ===== Right-Sidebar ===== -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="fa-solid fa-xmark right-side-toggler"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="hidden-xs">
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-danger">
                                        <input id="headcheck" type="checkbox" class="fxhdr">
                                        <label for="headcheck"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="sidecheck" type="checkbox" class="fxsdr">
                                        <label for="sidecheck"> Fix Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
                                <li class="db"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/dashboard_assets/plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/dashboard_assets/plugins/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/dashboard_assets/plugins/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/dashboard_assets/plugins/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/dashboard_assets/plugins/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="/dashboard_assets/plugins/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Right-Sidebar-End ===== -->
            </div>
            <!-- ===== Page-Container-End ===== -->
            <footer class="footer t-a-c">
                © 2017 Cubic Admin
            </footer>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="/dashboard_assets/plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="/dashboard_assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="/dashboard_assets/js/jquery.slimscroll.js"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="/dashboard_assets/js/waves.js"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="/dashboard_assets/js/sidebarmenu.js"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="/dashboard_assets/js/custom.js"></script>
    <!-- ===== Plugin JS ===== -->
    <script src="/dashboard_assets/plugins/components/chartist-js/dist/chartist.min.js"></script>
    <script src="/dashboard_assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/dashboard_assets/plugins/components/sparkline/jquery.sparkline.min.js"></script>
    <script src="/dashboard_assets/plugins/components/sparkline/jquery.charts-sparkline.js"></script>
    <script src="/dashboard_assets/plugins/components/knob/jquery.knob.js"></script>
    <script src="/dashboard_assets/plugins/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
    <script src="/dashboard_assets/js/db1.js"></script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="/dashboard_assets/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- ===== Sweet Alert2 JS ===== -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('footer_script')
</body>

</html>
