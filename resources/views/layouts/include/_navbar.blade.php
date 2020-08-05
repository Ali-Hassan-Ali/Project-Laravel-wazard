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
                                        <img class="rounded-circle" src="{{ $user->image_path }}"
                                             alt="...">
                                    </span>
                        &nbsp;
                        {{ auth()->user()->first_name }} <strong>
                        </strong>{{ auth()->user()->last_name }}
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
                                                <img class="rounded-circle" src="{{ $user->image_path }}"
                                                     alt="...">
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
{{--                                                <img class="rounded-circle" src="{{ $user->image_path }}" alt="...">--}}
                                            </span>
{{--                                    <p class="no-margin overflow-hidden">{{ auth()->user()->first_name }}--}}
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
                        <li><a class="dropdown-item" href="{{ route('SignUp.index') }}"><i class="la la-sign-out"></i>
                                &nbspLog Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
