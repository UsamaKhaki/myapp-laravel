<!--  Top bar  -->
<div class="main-header hor-header">
    <div class="container">
        <div class="main-header-left"><a class="main-header-menu-icon d-lg-none" href="{{ route('index') }}" id="mainNavShow"><span></span></a> <a class="main-logo" href="index.html">
                <img src="{{ asset('img/logo.png') }}" class="header-brand-img desktop-logo" alt="logo"> <img
                    src="{{ asset('img/icon.png') }}" class="header-brand-img icon-logo" alt="logo"> <img
                    src="{{ asset('img/logo-light.png') }}" class="header-brand-img desktop-logo theme-logo"
                    alt="logo"> <img src="{{ asset('img/icon-light.png') }}"
                                     class="header-brand-img icon-logo theme-logo" alt="logo"> </a></div>
        <div class="main-header-right">
            <div class="dropdown d-md-flex header-search"><a class="nav-link icon header-search"> <i
                        class="fe fe-search"></i> </a>
                <div class="dropdown-menu">
                    <div class="main-form-search p-2"><input class="form-control" placeholder="Search"
                                                             type="search">
                        <button class="btn"><i class="fe fe-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="dropdown d-md-flex"><a class="nav-link icon full-screen-link"> <i
                        class="fe fe-maximize fullscreen-button"></i> </a></div>
            <div class="dropdown main-header-notification"><a class="nav-link icon" href=""> <i
                        class="fe fe-bell"></i> <span class="pulse bg-danger"></span> </a>
                <div class="dropdown-menu">
                    <div class="header-navheading"><p class="main-notification-text">You have 1 unread
                            notification<span class="badge badge-pill badge-primary ml-3">View all</span></p></div>
                    <div class="main-notification-list">
                        <div class="media new">
                            <div class="main-img-user online"><img alt="avatar" src="{{ asset('img/5.jpg') }}">
                            </div>
                            <div class="media-body"><p>Congratulate <strong>Olivia James</strong> for New template
                                    start</p><span>Oct 15 12:32pm</span></div>
                        </div>
                        <div class="media">
                            <div class="main-img-user"><img alt="avatar" src="{{ asset('img/2.jpg') }}"></div>
                            <div class="media-body"><p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="main-img-user online"><img alt="avatar" src="{{ asset('img/3.jpg') }}">
                            </div>
                            <div class="media-body"><p><strong>Elizabeth Lewis</strong> added new schedule realease
                                </p><span>Oct 12 10:40pm</span></div>
                        </div>
                    </div>
                    <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                </div>
            </div>
            <div class="dropdown main-profile-menu"><a class="main-img-user" href=""><img alt="avatar"
                                                                                          src="{{ asset('img/1.jpg') }}"></a>
                <div class="dropdown-menu">
                    <div class="header-navheading"><h6 class="main-notification-title">Sonia Taylor</h6>
                        <p class="main-notification-text">Web Designer</p></div>
                    <a class="dropdown-item border-top" href=""> <i class="fe fe-user"></i> My Profile </a> <a
                        class="dropdown-item" href=""> <i class="fe fe-edit"></i> Edit Profile </a> <a
                        class="dropdown-item" href=""> <i class="fe fe-settings"></i> Account Settings </a> <a
                        class="dropdown-item" href=""> <i class="fe fe-settings"></i> Support </a> <a
                        class="dropdown-item" href=""> <i class="fe fe-compass"></i> Activity </a> <a
                        class="dropdown-item" href=""> <i class="fe fe-power"></i> Sign Out </a></div>
            </div>
            <div class="dropdown d-md-flex header-settings">
                <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right"> <i
                        class="fe fe-align-right"></i> </a>
            </div>
        </div>
    </div>
</div>
<!--  End Top bar  -->

<!-- Nav menus -->
<div class="main-navbar sticky" style="margin-bottom: -58px;">
    <div class="container">
        <ul class="nav">
            <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}"><i class="fe fe-airplay"></i>Dashboard</a>
            </li>
            <li class="nav-item"><a class="nav-link with-sub" href=""><i class="fe fe-life-buoy"></i>Tables</a>
                <ul class="nav-sub">
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('table') }}">Basic Tables</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('datatable') }}">Data Tables</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('sample') }}"><i class="fe fe-airplay"></i>Sample Page</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('404') }}"><i class="fe fe-airplay"></i>404</a></li>
        </ul>
    </div>
</div>
<!-- End Nav menus -->

<!--End Header-->
