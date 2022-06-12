 <div class="menu"
            @auth
                <div class="nav-user-info">

                    <h6 class="mb-1 text-black nav-user-name">
                        {{Auth::user()->name}} </h6>
                </div>
                <a class="dropdown-item" href="{{route('userpanel.index')}}"><i class="fas fa-user mr-2"></i>My Profile</a>
                <a class="dropdown-item" href="{{route('userpanel.comments')}}"><i class="fas fa-comment mr-2"></i>My Comments</a>
                <a class="dropdown-item" href="#"><i class="fas flaticon-donation mr-2"></i>Donation</a>
                <a class="dropdown-item" href="#"><i class="fas fa-star mr-2"></i>My Contents</a>
                <a class="dropdown-item" href="/logoutuser"><i class="fas fa-user-plus  mr-2"></i>Logout</a>
            @endauth
            @guest
                <a class="dropdown-item" href="/loginuser"><i class="fas fa-user mr-2"></i>Login</a>
                <a class="dropdown-item" href="/registeruser"><i class="fas fa-edit "></i>Register</a>
            @endguest
</div>
