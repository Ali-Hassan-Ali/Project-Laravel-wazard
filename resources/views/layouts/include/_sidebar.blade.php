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
        <h5 class="sidebar-nav-title">Learning <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
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

            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="careers">
                            <span class="icon">
                                <i class="fi flaticon-alarm"></i>
                            </span>
                    Careers
                </a>
            </li>

        </ul>

        <h5 class="sidebar-nav-title">Chat Room</h5>
        <!-- A place for sidebar notifications & alerts -->

    </div>
</nav>
