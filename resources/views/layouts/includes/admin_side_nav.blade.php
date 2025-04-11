<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li></li>
            <li>
                <a href="{{route('profile-index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-image fa-fw"></i>Posts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('posts.index')}}">My Posts</a>
                    </li>
                </ul>
            </li>
            @if (auth()->check() && auth()->user()->admin == 'true')
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('users.index')}}">All Users</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart fa-fw"></i>Analytics<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('analytics.index')}}">Show Analytics</a>
                        </li>
                    </ul>
                </li>
            @endif
            <li>
                @if (Auth::check())
                    @php $user = Auth::user(); @endphp
                    <a href="#"><i class="fa fa-user fa-fw"></i>Profile<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('users.show', $user->id)}}">Profile</a>
                            <a href="{{route('user.settings')}}">Profile Settings</a>
                        </li>
                    </ul>
                @endif
            </li>   
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

