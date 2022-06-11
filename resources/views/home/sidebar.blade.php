<style>
    @media (min-width: 992px) {
        .dropdown-menu .dropdown-toggle:after {
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid;
        }

        .dropdown-menu .dropdown-menu {
            margin-left: 0;
            margin-right: 0;
        }

        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu > li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu > li:hover > .submenu {
            display: block;
        }
    }
</style>
<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a  href="{{route('home')}}" class="navbar-brand">Helpz</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
            $mainMenus = \App\Http\Controllers\HomeController::mainMenulist()
        @endphp

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <li><a href="{{route('home')}}" class="nav-item nav-link">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-item nav-link">About Us</a></li>
                <li><a href="{{route('references')}}" class="nav-item nav-link">References</a></li>
                <li><a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a></li>
                <li><a href="{{route('contact')}}" class="nav-item nav-link">Contact</a></li>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Events</a>

                            <ul class="dropdown-menu">
                                @foreach($mainMenus as $rs)
                                    <li><a class="dropdown-item" href="#"> {{$rs->title}} &raquo </a>
                                        <ul class="submenu dropdown-menu">
                                            @if(count($rs->children))
                                                @include('home.menutree',['children'=>$rs->children])
                                            @endif
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->
