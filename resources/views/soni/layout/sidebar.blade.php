<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{asset('assets/img/xs/avatar9.jpg')}}" class="rounded-circle user-photo"
                alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Soni
                        Setiabudi
                    </strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{route('pages.profile1')}}"><i class="icon-user"></i>My Profile</a></li>
                    <!-- <li><a href="{{route('app.inbox')}}"><i class="icon-envelope-open"></i>Messages</a></li> -->
                    <!-- <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li> -->
                    <li class="divider"></li>
                    <li><a href="{{route('authentication.login')}}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Events</small>
                    <h6>456</h6>
                </li>
                <li class="col-4">
                    <small>Courses</small>
                    <h6>1350</h6>
                </li>
                <li class="col-4">
                    <small>Jobs</small>
                    <h6>12</h6>
                </li>
            </ul>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="{{ Request::segment(1) === 'admin' ? 'nav-link active' : 'nav-link' }}"
                    data-toggle="tab" href="#menu">Admin</a></li>
            <li class="nav-item"><a class="{{ Request::segment(1) === 'report' ? 'nav-link active' : 'nav-link' }}"
                    data-toggle="tab" href="#report"><i class="icon-book-open">
                    </i> Report</a>
            </li>
            <li class="nav-item"><a class="{{ Request::segment(1) === 'setting' ? 'nav-link active' : 'nav-link' }}"
                    data-toggle="tab" href="#setting"><i class="icon-settings"></i></a>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i
                        class="icon-question"></i></a></li> -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="{{ Request::segment(1) === 'admin' ? 'tab-pane active' : 'tab-pane' }}" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}">
                            <a href="{{route('dashboard.analytical')}}"><i class="icon-home"></i>
                                <span>Dashboard</span></a>

                        </li>
                        <!-- <li class="{{ Request::segment(1) === 'app' ? 'active' : null }}">
                            <a><i class="icon-grid"></i> <span>Event</span></a>
                        </li> -->
                        <li class="{{ Request::segment(2) === 'event' ? 'active' : null }}">
                            <a href="#Event" class="has-arrow"><i class="icon-tag"></i> <span>Events</span></a>
                            <ul>
                                <li class="{{ Request::segment(3) === 'new-event' ? 'active' : null }}"><a
                                        href="{{route('event.new-event')}}">New Event</a> </li>
                                <li class="{{ Request::segment(3) === 'category-event' ? 'active' : null }}"><a
                                        href="{{route('event.category')}}">Category Event</a> </li>
                                <li class="{{ Request::segment(3) === 'list-event' ? 'active' : null }}"><a
                                        href="{{route('event.list')}}">Event List</a> </li>


                            </ul>
                        </li>
                        <li class="{{ Request::segment(2) === 'courses' ? 'active' : null }}">
                            <a href="#Courses" class="has-arrow"><i class="icon-grid"></i>
                                <span>Courses</span></a>
                            <ul>
                                <!-- <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a
                                        href="{{route('blog.dashboard')}}">Dashboard</a></li> -->
                                <li class="{{ Request::segment(3) === 'new-course' ? 'active' : null }}"><a
                                        href="{{route('courses.new-course')}}">New Course</a></li>
                                <li class="{{ Request::segment(3) === 'category-course' ? 'active' : null }}"><a
                                        href="{{route('courses.category')}}">Category Course</a></li>
                                <li class="{{ Request::segment(3) === 'list-course' ? 'active' : null }}"><a
                                        href="{{route('courses.list')}}">Course List</a></li>

                            </ul>
                        </li>
                        <!-- <li class="{{ Request::segment(1) === 'blog' ? 'active' : null }}">
                            <a href="#Blog" class="has-arrow"><i class="icon-globe"></i> <span>Article</span></a>
                            <ul>
                                
                                <li class="{{ Request::segment(2) === 'new-post' ? 'active' : null }}"><a
                                        href="{{route('blog.new-post')}}">New Article</a></li>
                                <li class="{{ Request::segment(2) === 'category' ? 'active' : null }}"><a
                                        href="{{route('blog.category')}}">Category Article</a></li>
                                <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a
                                        href="{{route('blog.list')}}">Article List</a></li>

                            </ul>
                        </li> -->
                        <li class="{{ Request::segment(2) === 'jobs' ? 'active' : null }}">
                            <a href="#Jobs" class="has-arrow"><i class="icon-folder"></i> <span>Jobs
                                </span></a>
                            <ul>
                                <!-- <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a
                                        href="{{route('jobs.dashboard')}}">Dashboard</a></li> -->
                                <li class="{{ Request::segment(3) === 'new-job' ? 'active' : null }}"><a
                                        href="{{route('jobs.new-job')}}">New Jobs</a></li>
                                <li class="{{ Request::segment(3) === 'list' ? 'active' : null }}"><a
                                        href="{{route('jobs.list')}}">Jobs List</a></li>

                            </ul>
                        </li>
                        <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}">
                            <a href="#Users" class="has-arrow"><i class="icon-user"></i> <span>Users
                                </span></a>
                            <ul>
                                <li class="{{ Request::segment(3) === 'new-user' ? 'active' : null }}"><a
                                        href="{{route('users.new-user')}}">New Users</a></li>
                                <li class="{{ Request::segment(3) === 'user-list' ? 'active' : null }}"><a
                                        href="{{route('users.user-list')}}">Users List</a></li>
                                <!-- <li class="{{ Request::segment(2) === 'role' ? 'active' : null }}"><a
                                        href="{{route('users.role')}}">Role Permission</a></li> -->
                                <li class="{{ Request::segment(3) === 'member-list' ? 'active' : null }}"><a
                                        href="{{route('users.member-list')}}">Member List</a></li>
                                <li class="{{ Request::segment(3) === 'client-list' ? 'active' : null }}"><a
                                        href="{{route('users.client-list')}}">Client List</a></li>
                                <li class="{{ Request::segment(3) === 'partner-list' ? 'active' : null }}"><a
                                        href="{{route('users.partner-list')}}">Partner List</a></li>
                                <li class="{{ Request::segment(3) === 'expert-list' ? 'active' : null }}"><a
                                        href="{{route('users.expert-list')}}">Expert List</a></li>

                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
            <div class="{{ Request::segment(1) === 'report' ? 'tab-pane p-l-0 p-r-0 active' : 'tab-pane p-l-0 p-r-0' }}"
                id="report">
                <!-- <div class="tab-pane active" id="menu"> -->
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="{{ Request::segment(2) === 'transaction' ? 'active' : null }}">
                            <a href="{{route('report.transaction')}}"><i class="icon-credit-card"></i>
                                <span>Transaction</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
            <div class="{{ Request::segment(1) === 'setting' ? 'tab-pane p-l-15 p-r-15 active' : 'tab-pane p-l-15 p-r-15' }}"
                id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <!-- <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li> -->
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>blue</span>
                    </li>
                    <!-- <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li> -->
                    <!-- <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li> -->
                </ul>
                <hr>
                <h6>Mobile Apps Settings</h6>
                <div class="setting-list list-unstyled p-l-0 p-r-0">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">
                            <li class="{{ Request::segment(2) === 'banner-login-phone' ? 'active' : null }}">
                                <a href="{{route('setting.bannerloginphone')}}"><i class="icon-screen-smartphone"></i>
                                    <span>Banner Login</span></a>

                            </li>
                            <li class="{{ Request::segment(2) === 'banner-home-phone' ? 'active' : null }}">
                                <a href="{{route('setting.bannerhomephone')}}"><i class="icon-screen-smartphone"></i>
                                    <span>Banner Home</span></a>

                            </li>
                        </ul>
                    </nav>
                </div>
                <hr>
                <h6>Web Frontend Settings</h6>
                <ul class="setting-list list-unstyled">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">
                            <li class="{{ Request::segment(2) === 'banner-home-web' ? 'active' : null }}">
                                <a href="{{route('setting.bannerhomeweb')}}"><i class="icon-screen-desktop"></i>
                                    <span>Banner Home</span></a>

                            </li>
                            <!-- <li class="{{ Request::segment(2) === 'transaction' ? 'active' : null }}">
                                <a href="{{route('report.transaction')}}"><i class="icon-screen-desktop"></i>
                                    <span>Banner Home</span></a>

                            </li> -->
                        </ul>
                    </nav>
                </ul>
            </div>
            <!-- <div class="tab-pane p-l-15 p-r-15" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button m-t-30">
                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need
                            Help?</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</div>