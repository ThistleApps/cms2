<!-- Main Header -->
<header class="main-header">

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>


        <div class="navbar-header">
            <button class="navbar-toggle sidebar-menu-btn">
                <span class="fa fa-bars nav-open"></span>
                <span class="fa fa-close nav-close"></span>
            </button>
            <span class="navbar-brand">
                <span class="quarx-logo"></span> {{ config('quarx.frontend-title', 'Quarx') }}
            </span>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                <span class="fa fa-gear"></span>
            </button>
        </div>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">



                @if ( config('app.context_help_area') && (isset($context_help_area)))
                {!! $context_help_area   !!}
                @endif


                        <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- Staff Image -->
                                            <img src="{{ asset("/bower_components/admin-lte/dist/img/generic_user_160x160.jpg") }}"
                                                 class="img-circle" alt="Staff Image"/>
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li><!-- /.messages-menu -->
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-staff text-aqua"></i> 5 new members joined today
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>


                        <!-- Staff Account Menu -->
                <li class="dropdown staff staff-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The staff image in the navbar-->
                        <img src="#" class="staff-image"
                             alt="Staff Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            @if (Auth::user())
                                <p class="navbar-text navbar-left raw-m-hide">Signed in as {{ Auth::user()->name }}</p>
                            @endif
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The staff image in the menu -->
                        <li class="staff-header">
                            <img src="#" class="img-circle"
                                 alt="Staff Image"/>
                            <p>
                                {{ Auth::user()->full_name }}
                                <small>Member since {{ Auth::user()->created_at->format("F, Y") }}</small>
                            </p>
                        </li>

                        @if ( config('app.extended_staff_menu') )
                                <!-- Menu Body -->
                        <li class="staff-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        @endif

                                <!-- Menu Footer-->
                        <li class="staff-footer">

                            @if ( config('app.staff_profile_link') )
                                <div class="pull-left">
                                    {!! link_to_route('staff.profile', 'Profile', [], ['class' => "btn btn-default btn-flat"]) !!}
                                </div>
                            @endif

                            <div class="pull-right">
                                Logout button
                            </div>
                        </li>
                    </ul>
                </li>

                @if ( config('app.right_sidebar') )
                        <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
                @endif

            </ul>
        </div>



        <div class="collapse navbar-collapse navbar-right" id="mainNavbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/') }}"><span class="fa fa-arrow-left"></span> Back To Site </a></li>
                @if (Auth::user())
                    <li><a href="/logout"><span class="fa fa-sign-out"></span> Logout</a></li>
                @endif
            </ul>
        </div>


    </nav>
</header>
