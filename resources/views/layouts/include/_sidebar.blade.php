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
                {{ auth()->user()->first_name }} <strong> {{ auth()->user()->last_name }}
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
                @if (auth()->user()->organization == 'TrainingOrg')
                    <a href="">
                        <span class="icon"><i class="fi flaticon-controls"></i></span>Add Training Job
                    </a>
                @elseif (auth()->user()->organization == 'WorkOrg')
                    <a href="">
                        <span class="icon"><i class="fi flaticon-controls"></i></span>Add Work Job
                    </a>
                @elseif (auth()->user()->organization == 'EducationalOrg')
                    <a href="">
                        <span class="icon"><i class="fi flaticon-controls"></i></span>Add Work Job
                    </a>
                @else

                @endif
            </li>
        </ul>

        <h5 class="sidebar-nav-title">Careers <a class="action-link" href="#"><i
                    class="glyphicon glyphicon-plus"></i></a></h5>

        <h5 class="sidebar-nav-title">Chat Room</h5>
        <!-- A place for sidebar notifications & alerts -->

    </div>
</nav>
