<div class="page-main-header">
    <div class="main-header-right row m-0 ">
        <div class="main-header-left" style="background-color: #2365ff;">
            <div class="logo-wrapper"><a href="{{URL::to('user/dashboard')}}"><img
                        src="{{URL::to('assets/images/logo/logo-01.png')}}" style="width:75%;" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="{{URL::to('user/dashboard')}}"><img class="img-fluid"
                                                                                        src="{{URL::to('assets/images/logo/logo-02.png')}}"
                                                                                        alt=""></a></div>
            <div class="toggle-sidebar "><i class="status_toggle middle" data-feather="align-center"
                                            id="sidebar-toggle"></i></div>
        </div>
        <div class="left-menu-header col ">
            <ul>
                <li>
                    <form class="form-inline search-form">
                        <div class="search-bg"><i class="fa fa-search"></i>
                            <input class="form-control-plaintext" placeholder="Search here.....">
                        </div>
                    </form>
                    <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                </li>
            </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown">
                    <div class="bookmark-box"><i data-feather="star"></i></div>
                    <div class="bookmark-dropdown onhover-show-div">
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                            class="fa fa-search"></i></span></div>
                                <input class="form-control" type="text" placeholder="Search for bookmark...">
                            </div>
                        </div>
                        <ul class="m-t-5">
                            <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span
                                    class="pull-right"><i data-feather="star"></i></span></li>
                            <li class="add-to-bookmark"><i class="bookmark-icon"
                                                           data-feather="message-square"></i>Chat<span
                                    class="pull-right"><i data-feather="star"></i></span></li>
                            <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span
                                    class="pull-right"><i data-feather="star"></i></span></li>
                            <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span
                                    class="pull-right"><i data-feather="star">   </i></span></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="onhover-dropdown p-0">

                </li>
                <li clas>
                    <div>
                        <h6>{{Auth::user()->name}}</h6>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div><img src="{{asset('images/logo/user.png')}}" class="img-40"  alt=""></div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li class="noti-primary">
                            <div class="media"><span class="notification-bg bg-light-primary"><i
                                        data-feather="edit"> </i></span>
                                <div class="media-body">
                                    <p>Edit Profile</p>
                                </div>
                            </div>
                        </li>
                        <li class="noti-secondary">
                            <button class="btn btn-primary-light float-end mb-2" type="button">
                                <a href="{{route('logout')}}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                    <i data-feather="log-out"></i>Log out
                                </a>
                            </button>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
