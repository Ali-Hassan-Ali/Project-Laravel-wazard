<!DOCTYPE html>
<html>
<head>
    <title>Sing App Dashboard - Courses</title>
    <link href="{{ asset('css/application.min.css')}}" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
    <![endif]-->
    <link href="{{ asset('css/application.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Wizard">
    <meta name="keywords" content="Wizard">
    <meta name="author" content="Wizard">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
        chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
        https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>

<body class="">
<!--
  Main sidebar seen on the left. may be static or collapsing depending on selected state.

    * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
    * Static - stays always open.
-->
<nav id="sidebar" class="sidebar" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
        <header class="logo d-none d-md-block">
            <a href="https://demo.flatlogic.com/sing-app/"><span>Wizard</span> app</a>
        </header>
        <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
             looks good, so adding it and enhancing with notifications -->
        <div class="sidebar-status d-md-none">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar float-right">
                            <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                        </span>
                <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                     should be used with bg-* and text-* classes for colors -->
                <span class="circle bg-warning fw-bold text-gray-dark">
                            13
                        </span>
                &nbsp;
                Mohamed <strong>Eways</strong>
                <b class="caret"></b>
            </a>
            <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
        </div>
        <!-- main notification links are placed inside of .sidebar-nav -->
        <ul class="sidebar-nav">
            <li class=" active ">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="/index">
                            <span class="icon">
                                <i class="fi flaticon-home"></i>
                            </span>
                    Dashboard
                </a>
            </li>
        </ul>
        <!-- every .sidebar-nav may have a title -->
        <h5 class="sidebar-nav-title">Learning <a class="action-link" href="#"><i
                    class="glyphicon glyphicon-refresh"></i></a></h5>
        <ul class="sidebar-nav">
            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="/courses">
                            <span class="icon">
                                <i class="fi flaticon-controls"></i>
                            </span>
                    Courses
                </a>
            </li>
            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="/centers">
                            <span class="icon">
                                <i class="fi flaticon-equal-1"></i>
                            </span>
                    Centers
                </a>
            </li>
            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="/educational_org">
                            <span class="icon">
                                <i class="fi flaticon-alarm"></i>
                            </span>
                    educational org
                </a>
            </li>

        </ul>
        <h5 class="sidebar-nav-title">Careers <a class="action-link" href="#"><i
                    class="glyphicon glyphicon-plus"></i></a></h5>

        <h5 class="sidebar-nav-title">Chat Room</h5>
        <!-- A place for sidebar notifications & alerts -->

    </div>
</nav>
<!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
<nav class="page-controls navbar navbar-dashboard">

    <div class="container-fluid">
        <!-- .navbar-header contains links seen on xs & sm screens -->
        <div class="navbar-header mr-md-3">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                    <a class="d-none d-lg-block nav-link" id="nav-state-toggle" href="#">
                        <i class="la la-bars"></i>
                    </a>
                    <!-- shown on xs & sm screen. collapses and expands navigation -->

                    <a class="d-lg-none nav-link" id="nav-collapse-toggle" href="#">
                        <span class="square square-lg d-md-none"><i class="la la-bars"></i></span>
                        <i class="la la-bars d-none d-md-block"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block ml-3"><a href="#" class="nav-link"><i
                            class="la la-refresh"></i></a></li>
                <li class="nav-item ml-n-xs d-none d-md-block ml-3"><a href="#" class="nav-link"><i
                            class="la la-times"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right d-md-none">
                <li class="nav-item">
                    <!-- toggles chat -->
                    <a class="nav-link" href="#" data-toggle="chat-sidebar">
                        <span class="square square-lg"><i class="la la-globe"></i></span>
                    </a>
                </li>
            </ul>
            <!-- xs & sm screen logo -->
            <a class="navbar-brand d-md-none" href="../dashboard/index.html">
                <i class="fa fa-circle text-gray mr-n-sm"></i>
                <i class="fa fa-circle text-warning"></i>
                &nbsp;
                sing
                &nbsp;
                <i class="fa fa-circle text-warning mr-n-sm"></i>
                <i class="fa fa-circle text-gray"></i>
            </a>
        </div>

        <!-- this part is hidden for xs screens -->
        <div class="navbar-header mobile-hidden">
            <!-- search form! link it to your search server -->
            <form class="navbar-form" role="search">
                <div class="form-group">
                    <div class="input-group input-group-no-border ml-4">
                        <input class="form-control" id="main-search" type="text" placeholder="Search Dashboard">
                        <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav float-right">
                <li class="dropdown nav-item">
                    <a
                        href="#"
                        role="button"
                        class="dropdown-toggle dropdown-toggle-notifications nav-link"
                        id="notifications-dropdown-toggle"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-position="bottom-middle-aligned"
                        data-disable-interaction="false"
                    >
                                    <span class="thumb-sm avatar float-left">
                                        <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                                    </span>
                        &nbsp;
                        {{ auth()->user()->first_name }} <strong> {{ auth()->user()->last_name }}
                        </strong>&nbsp;
                        <span class="circle bg-primary fw-bold text-white">
                                        15
                                    </span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-right animated fadeInUp py-0"
                        aria-labelledby="notifications-dropdown-toggle"
                        id="notifications-dropdown-menu"
                    >
                        <section class="card notifications">
                            <header class="card-header">
                                <div class="text-center mb-sm">
                                    <strong>You have 13 notifications</strong>
                                </div>
                                <div class="btn-group btn-group-sm btn-group-toggle" id="notifications-toggle"
                                     data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <!-- ajax-load plugin in action. setting data-ajax-load & data-ajax-target is the
                                             only requirement for async reloading -->
                                        <input type="radio" checked
                                               data-ajax-trigger="change"
                                               data-ajax-load="../demo/ajax/notifications.html"
                                               data-ajax-target="#notifications-list"> Notifications
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio"
                                               data-ajax-trigger="change"
                                               data-ajax-load="../demo/ajax/messages.html"
                                               data-ajax-target="#notifications-list"> Messages
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio"
                                               data-ajax-trigger="change"
                                               data-ajax-load="../demo/ajax/progress.html"
                                               data-ajax-target="#notifications-list"> Progress
                                    </label>
                                </div>
                            </header>
                            <!-- notification list with .thin-scroll which styles scrollbar for webkit -->
                            <div id="notifications-list" class="list-group thin-scroll">
                                <div class="list-group-item">
                                            <span class="thumb-sm float-left mr clearfix">
                                                <img class="rounded-circle" src="demo/img/people/a3.jpg" alt="...">
                                            </span>
                                    <p class="no-margin overflow-hidden">
                                        1 new user just signed up! Check out
                                        <a href="#">Monica Smith</a>'s account.
                                        <time class="help-block no-margin">
                                            2 mins ago
                                        </time>
                                    </p>
                                </div>
                                <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <i class="glyphicon glyphicon-upload fa-lg"></i>
                                            </span>
                                    <p class="text-ellipsis no-margin">
                                        2.1.0-pre-alpha just released. </p>
                                    <time class="help-block no-margin">
                                        5h ago
                                    </time>
                                </a>
                                <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <i class="fa fa-bolt fa-lg"></i>
                                            </span>
                                    <p class="text-ellipsis no-margin">
                                        Server load limited. </p>
                                    <time class="help-block no-margin">
                                        7h ago
                                    </time>
                                </a>
                                <div class="list-group-item">
                                            <span class="thumb-sm float-left mr clearfix">
                                                <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                                            </span>
                                    <p class="no-margin overflow-hidden">
                                        User <a href="#">Jeff</a> registered
                                        &nbsp;&nbsp;
                                        <button class="btn btn-xs btn-success">Allow</button>
                                        <button class="btn btn-xs btn-danger">Deny</button>
                                        <time class="help-block no-margin">
                                            12:18 AM
                                        </time>
                                    </p>
                                </div>
                                <div class="list-group-item">
                                                <span class="thumb-sm float-left mr">
                                                    <i class="fa fa-shield fa-lg"></i>
                                                </span>
                                    <p class="no-margin overflow-hidden">
                                        Instructions for changing your Envato Account password. Please
                                        check your account <a href="#">security page</a>.
                                        <time class="help-block no-margin">
                                            12:18 AM
                                        </time>
                                    </p>
                                </div>
                                <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <span class="square bg-primary square-lg">
                                                    <i class="fa fa-facebook text-white"></i>
                                                </span>
                                            </span>
                                    <p class="text-ellipsis no-margin">
                                        New <strong>76</strong> facebook likes received.</p>
                                    <time class="help-block no-margin">
                                        15 Apr 2014
                                    </time>
                                </a>
                                <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <span class="circle circle-lg bg-gray-dark">
                                                    <i class="fa fa-circle-o text-white"></i>
                                                </span>
                                            </span>
                                    <p class="text-ellipsis no-margin">
                                        Dark matter detected.</p>
                                    <time class="help-block no-margin">
                                        15 Apr 2014
                                    </time>
                                </a>
                            </div>
                            <footer class="card-footer text-sm">
                                <!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list
                                     when clicked -->
                                <button class="btn-label btn-link float-right"
                                        id="load-notifications-btn"
                                        data-ajax-load="demo/ajax/notifications.php"
                                        data-ajax-target="#notifications-list"
                                        data-loading-text="<i class='la la-refresh fa-spin mr-xs'></i> Loading...">
                                    <i class="la la-refresh"></i>
                                </button>
                                <span class="card-footer-text">Synced at: 21 Apr 2014 18:36</span>
                            </footer>
                        </section>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle no-caret nav-link" data-toggle="dropdown">
                        <i class="la la-cog"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            @if (auth()->user()->organization == 'TrainingOrg')
                                <a class="dropdown-item" href="{{ route('Account.show', auth()->user()->id) }}"><i
                                        class="glyphicon glyphicon-user"></i>My Account TrainingOrg</a></a>
                            @elseif (auth()->user()->organization == 'WorkOrg')
                                <a class="dropdown-item" href="{{ route('Account.show', auth()->user()->id) }}"><i
                                        class="glyphicon glyphicon-user"></i>My Account WorkOrg</a></a>
                            @elseif (auth()->user()->organization == 'EducationalOrg')
                                <a class="dropdown-item" href="{{ route('Account.show', auth()->user()->id) }}"><i
                                        class="glyphicon glyphicon-user"></i>My Account EducationalOrg</a></a>
                            @else
                                <a class="dropdown-item" href="{{ route('Account.show', auth()->user()->id) }}"><i
                                        class="glyphicon glyphicon-user"></i>My Account</a></a>
                            @endif
                        </li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Calendar</a></li>
                        <li><a class="dropdown-item" href="#">Inbox &nbsp;&nbsp;<span
                                    class="badge badge-pill bg-danger animated bounceIn">9</span></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="la la-sign-out"></i> &nbsp; Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="content" role="main">
        <!-- Page content -->

        <div class="analytics">
            <div class="analytics-side">
                <section class="sliderInLeft">
                    <div class="pb-xlg">
                        <section class="slider-content widget mb-0 ">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="../img/3727714.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../img/3808949.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="../img/3993931.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </section>
                    </div>
                </section>
                <aside class="fixed-aside">
                    <div class="pb-xlg">
                        <section class="widget mb-2 h-100">
                            <header>
                                <h5>Rewards</h5>
                            </header>
                            <div class="widget-body">
                                <div class="row">
                                        <span class="rewards-star">
                                            <i class="fa fa-star"></i>
                                        </span>
                                    <span class="rewards-star-line">
                                            <p>
                                                <span class="rewards-star-num">2</span>This is month</p>
                                        </span>
                                </div>

                                <div class="row">
                                        <span class="rewards-star">
                                            <i class="fa fa-star"></i>
                                        </span>
                                    <span class="rewards-star-line">
                                            <p>
                                                <span class="rewards-star-num">2</span>This is month</p>
                                        </span>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="pb-xlg">
                        <section class="widget joined mb-2 h-100">
                            <header>
                                <h5>Joind</h5>
                            </header>
                            <div class="widget-body">
                                <div class="row">
                                    <!--                                    <div id="anymod-baarlk"></div>-->
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="pb-xlg">
                        <section class="widget joined  h-100">
                            <div class="widget-body">
                                <div class="ads">
                                    <img class="" src="../img/images.jpg">
                                </div>
                            </div>
                        </section>
                    </div>

                </aside>
            </div>

        </div>


        <!--========== 	 start [testimonel - section] 		========== -->

        <header>
            <h5 class="align-content-center">
                testimonel
            </h5>
        </header>

        <section class="testimonel slider-content section-padding overlay widget" id="Testimonel">

            <div class="row justify-content-center">
                <!-- Blok Info -->
                <div class="client-info">
                    <div class="owl-carousel owl-theme">
                        <!-- Item Client -->
                        <div class="item-client">
                            <div class="image-client">
                                <img src="../img/clients/client.jpeg" alt="image">
                            </div>
                            <h4 class="mb-10">Awwwesome Work</h4>
                            <div class="rating mb-10">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p> " Reviews are one of the main ways that students can leave public feedback on a course
                                for other students to see. Instructors can view all.."</p>


                            <div class="info">
                                <h5>Jack Daniel</h5>
                                <h6>Graphic Designer</h6>
                            </div>
                        </div>
                        <div class="item-client col-sm-12">
                            <div class="image-client">
                                <img src="../img/clients/pexels-photo-694870.jpeg" alt="image">
                            </div>
                            <h4 class="mb-10">Awwwesome Work</h4>
                            <div class="rating mb-10">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p> " Reviews are one of the main ways that students can leave public feedback on a course
                                for other students to see. Instructors can view all.."</p>


                            <div class="info">
                                <h5>Jack Daniel</h5>
                                <h6>Graphic Designer</h6>
                            </div>
                        </div>
                        <div class="item-client col-sm-12">
                            <div class="image-client">
                                <img src="../img/clients/pexels-photo-428333.jpeg" alt="image">
                            </div>
                            <h4 class="mb-10">Awwwesome Work</h4>
                            <div class="rating mb-10">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p> " Reviews are one of the main ways that students can leave public feedback on a course
                                for other students to see. Instructors can view all.."</p>


                            <div class="info">
                                <h5>Jack Daniel</h5>
                                <h6>Graphic Designer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Row-->
        </section>

        <!--========== 	 End [testimonel - section] 		========== -->
        <div class="add_material">
            <div class="row">
                <div class="col-lg-12">
                    <section class="widget">
                        <header>
                            <h5>
                                Add <span class="fw-semi-bold">Material</span>
                            </h5>
                        </header>
                        <div class="widget-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <p class="recomment_material">Some degree and certificate programs have courses you
                                        must take in order to become eligible for admission to the program. If you are
                                        an undergraduate independent student planning on eventually pursuing a degree or
                                        a certificate, you may wish to use your independent studies to complete courses
                                        that will help you fulfill the requirements of your intended future program</p>
                                </div>
                                <div class="col-lg-2">
                                    <button class="material-btn" data-toggle="modal" data-target="#elegantModalForm">
                                        &#43; Add Material
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content form-elegant">
                    <!--Header-->
                    <form method="get" action="{{ route('addcmaterial.create') }}" enctype="multipart/form-data">
                        <div class="modal-header text-center">
                            <h3 class="modal-title w-100 dark-grey-text font-weight-bold" id="myModalLabel"><strong>Add
                                    Material</strong></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </form>
                </div>
                <form method="post" action="{{ route('addcmaterial.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('post') }}

                    <div class="modal-body mx-4">
                        <!--Body-->

                        <div class="form-group">
                            <label for="email">Enter name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Select track</label>
                            <select class="form-control" name="course_type">
                                <option>web dev</option>
                                <option>cyber</option>
                                <option>mobile</option>
                                <option>data</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">enter descrption</label>
                            <textarea type="text" name="description" class="form-control"
                                      placeholder="Enter description">
                                </textarea>
                        </div>

                        <div class="form-group">
                            <label for="email">Ener Link</label>
                            <input type="text" name="link" class="form-control" placeholder="Enter link">
                        </div>

                        <div class="form-group">
                            <label for="email">Selcte Images</label>
                            <input type="file" name="image" class="form-control" placeholder="Selcte Images"">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Course <i class="fa fa-plus"></i></button>
                </form>
            </div>
            <!--Body-->
            </form>
        </div>
        <!--/.Content-->
</div>
</div>
<!-- Modal -->

<footer class="footer-content-area ">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-4 col-md-6">
                <div class="footer-copywrite-info">
                    <!-- Copywrite -->
                    <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-logo">
                            <a href="#"> Wizard </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque
                            illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                    </div>
                    <!-- Social Icon -->
                    <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6">
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <!-- Content Info -->
                    <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                        <h5>PRIVACY &amp; TOS</h5>
                        <a href=""><p>Advertiser Agreement</p></a>
                        <a href=""><p>Acceptable Use Policy</p></a>
                        <a href=""><p>Privacy Policy</p></a>
                        <a href=""><p>Technology Privacy</p></a>
                        <a href=""><p>Developer Agreement</p></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-2 col-md-6 ">
                <!-- Content Info -->
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                        <h5>NAVIGATE</h5>
                        <a href=""><p>Advertisers</p></a>
                        <a href=""><p>Developers</p></a>
                        <a href=""><p>Resources</p></a>
                        <a href=""><p>Company</p></a>
                        <a href=""><p>Connect</p></a>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-3 col-md-6 ">
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <!-- Content Info -->
                    <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                        <h5>CONTACT US</h5>
                        <p>Mailing Address:xx00 E. Union Ave</p>
                        <p>Suite 1100. Denver, CO 80237</p>
                        <p>+999 90932 627</p>
                        <p>support@yourdomain.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
</main>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>

<!-- common libraries. required for every page-->
<script src="{{ asset('../node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('../node_modules/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{ asset('../node_modules/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{ asset('../node_modules/bootstrap/js/dist/util.js')}}"></script>
<script src="{{ asset('../node_modules/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('../node_modules/widgster/widgster.js')}}"></script>
<script src="{{ asset('../node_modules/pace.js/pace.js')}}"
        data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
<script src="{{ asset('../node_modules/hammerjs/hammer.js')}}"></script>
<script src="{{ asset('../node_modules/jquery-hammerjs/jquery.hammer.js')}}"></script>


<!-- common app js -->
<script src="{{ asset('js/settings.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/carousol.js')}}"></script>


<script id="AnyMod-script">
    (function (m, o, d, u, l, a, r, i, z, e) {
        u[m] = {
            Project: o, rq: [], Opts: r, ready: function (j) {
                u[m].rq.push(j);
            }
        };

        function j(s) {
            return encodeURIComponent(btoa(s));
        }

        z = l.getElementById(m + "-" + a);
        r = u.location;
        e = [d + "/page/" + o + "/" + j(r.pathname) + "/" + j(r.host) + "?t=" + Date.now(), d];
        e.map(function (w) {
            i = l.createElement(a);
            i.defer = 1;
            i.src = w;
            z.parentNode.insertBefore(i, z);
        });
    })("AnyMod", "library", "https://cdn.anymod.com/v2", window, document, "script", {
        toolkit: false,
        tips: true,
        priority: 3
    });
</script>
<script>
    /* owl carousel cliant
    -------------------------------------------------------*/
    $('.owl-carousel').owlCarousel({

        items: 1,
        mouseDrag: true,
        autoplay: true,
        smartSpeed: 200,

    });
</script>

<!-- page specific js -->
<script src="{{ asset('js/index.js')}}"></script>
</body>
</html>
