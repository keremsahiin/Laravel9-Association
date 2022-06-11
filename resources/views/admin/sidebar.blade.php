<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('admin.index')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('assets')}}/admin/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            </li>
                            <li class="nav-item"> <a href="{{route('admin.index')}}" class="nav-link"><i class="fa fa-home text-danger"></i>Dashboard</a>
                            </li>
                            <li><a><i class="fa fa-money text-success"></i>Payment<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index2.html">Accepted payment</a></li>
                                    <li><a href="index3.html">Completed payment</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a href="{{route('admin.menu.index')}}" class="nav-link"><i class="fa fa-table text-warning"></i>Menus</a>
                            </li>

                            <li class="nav-item"> <a href="{{route('admin.content.index')}}" class="nav-link"><i class="fa fa-folder text-warning"></i>Contents</a>
                            </li>

                            <li class="nav-item"> <a href="{{route('admin.comment.index')}}" class="nav-link"><i class="fa fa-comment text-warning"></i>Comments</a>
                            </li>

                            <li class="nav-item"> <a href="{{route('admin.faq.index')}}" class="nav-link"><i class="fa fa-question text-warning"></i>FAQ</a>
                            </li>

                            <li class="nav-item"> <a href="{{route('admin.message.index')}}" class="nav-link"><i class="fa fa-paper-plane text-warning"></i>Messages</a>
                            </li>

                            <li class="nav-item"> <a href="admin/users" class="nav-link"><i class="fa fa-user text-warning"></i>Users</a>
                            </li>

                            <li class="nav-item"> <a href="admin/social" class="nav-link"><i class="fa fa-share-alt text-warning"></i>Social</a>
                            </li>

                            <li><a><i class="fa fa-gears text-danger"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('admin.setting')}}">Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
</div>
</div>
