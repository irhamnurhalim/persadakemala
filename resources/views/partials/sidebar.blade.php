@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.dashboard')</span>
                </a>
            </li>

            
            @can('activityreport_access')
            <li class="{{ $request->segment(1) == 'activityreports' ? 'active' : '' }}">
                <a href="{{ route('activityreports.index') }}">
                    <i class="fa fa-header"></i>
                    <span class="title">@lang('quickadmin.activityreport.title')</span>
                </a>
            </li>
            @endcan
            
            @can('user_management_access')
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                
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
                @can('user_action_access')
                <li class="{{ $request->segment(1) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('contact_management_access')
            <li>
                <a href="#">
                    <i class="fa fa-phone-square"></i>
                    <span class="title">@lang('quickadmin.contact-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                
                @can('company_access')
                <li class="{{ $request->segment(1) == 'companies' ? 'active active-sub' : '' }}">
                        <a href="{{ route('companies.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span class="title">
                                @lang('quickadmin.companies.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                <li class="{{ $request->segment(1) == 'contacts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('contacts.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                @lang('quickadmin.contacts.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('work_type_access')
            <li class="{{ $request->segment(1) == 'work_types' ? 'active' : '' }}">
                <a href="{{ route('work_types.index') }}">
                    <i class="fa fa-th"></i>
                    <span class="title">@lang('quickadmin.work-types.title')</span>
                </a>
            </li>
            @endcan
            
            @can('product_management_access')
            <li>
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">@lang('quickadmin.product-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                
                @can('category_access')
                <li class="{{ $request->segment(1) == 'categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('categories.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.categories.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('tag_access')
                <li class="{{ $request->segment(1) == 'tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('tags.index') }}">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                @lang('quickadmin.tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('product_access')
                <li class="{{ $request->segment(1) == 'products' ? 'active active-sub' : '' }}">
                        <a href="{{ route('products.index') }}">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="title">
                                @lang('quickadmin.products.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('project_access')
            <li class="{{ $request->segment(1) == 'projects' ? 'active' : '' }}">
                <a href="{{ route('projects.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">@lang('quickadmin.projects.title')</span>
                </a>
            </li>
            @endcan
            
            @can('time_entry_access')
            <li class="{{ $request->segment(1) == 'time_entries' ? 'active' : '' }}">
                <a href="{{ route('time_entries.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">@lang('quickadmin.time-entries.title')</span>
                </a>
            </li>
            @endcan
            
            @can('report_access')
            <li class="{{ $request->segment(1) == 'reports' ? 'active' : '' }}">
                <a href="{{ route('reports.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">@lang('quickadmin.reports.title')</span>
                </a>
            </li>
            @endcan
            
            @can('setting_access')
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.settings.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                
                @can('expense_category_access')
                <li class="{{ $request->segment(1) == 'expense_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('expense_categories.index') }}">
                            <i class="fa fa-list"></i>
                            <span class="title">
                                @lang('quickadmin.expense-category.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('income_category_access')
                <li class="{{ $request->segment(1) == 'income_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('income_categories.index') }}">
                            <i class="fa fa-list"></i>
                            <span class="title">
                                @lang('quickadmin.income-category.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('income_access')
            <li class="{{ $request->segment(1) == 'incomes' ? 'active' : '' }}">
                <a href="{{ route('incomes.index') }}">
                    <i class="fa fa-arrow-circle-right"></i>
                    <span class="title">@lang('quickadmin.income.title')</span>
                </a>
            </li>
            @endcan
            
            @can('expense_access')
            <li class="{{ $request->segment(1) == 'expenses' ? 'active' : '' }}">
                <a href="{{ route('expenses.index') }}">
                    <i class="fa fa-arrow-circle-left"></i>
                    <span class="title">@lang('quickadmin.expense.title')</span>
                </a>
            </li>
            @endcan
            
            @can('monthly_report_access')
            <li class="{{ $request->segment(1) == 'monthly_reports' ? 'active' : '' }}">
                <a href="{{ route('monthly_reports.index') }}">
                    <i class="fa fa-line-chart"></i>
                    <span class="title">@lang('quickadmin.monthly-report.title')</span>
                </a>
            </li>
            @endcan
            

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.logout')</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}