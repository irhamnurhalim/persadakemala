@inject('request', 'Illuminate\Http\Request')
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Halo {{ Auth::user()->name }}!</strong>
                            </span> <span class="text-muted text-xs block">Preference <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.dashboard')</span>
                </a>
            </li>
            @can('checklist_access')
                <li class="{{ ($request->segment(1) == 'admin') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span class="title">Checklist</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        @can('role_access')
                            <li class="{{ $request->segment(2) == 'diagram' ? 'active active-sub' : '' }}">
                                <a href="{{ route('checklist.diagram') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">
                                        Flow
                                    </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('user_management_access')
            <li class="{{ ($request->segment(1) == 'roles') || ($request->segment(1) == 'users') || ($request->segment(1) == 'permissions' ) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">

                @can('role_access')
                <li class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(1) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('permission_access')
                <li class="{{ $request->segment(1) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('permissions.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.permissions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

        </ul>

    </div>
</nav>
