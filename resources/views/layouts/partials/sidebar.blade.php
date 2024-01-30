<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"><!--begin::Sidebar Brand-->
    <div class="sidebar-brand"><!--begin::Brand Link-->
        <a href="{{ route('admin.home') }}"
           class="brand-link"><!--begin::Brand Image-->
            <img
                src="./assets/img/AdminLTELogo.png"
                alt="Logo"
                class="brand-image opacity-75 shadow"><!--end::Brand Image--><!--begin::Brand Text-->
            <span
                class="brand-text fw-light">SpaceTours</span><!--end::Brand Text-->
        </a><!--end::Brand Link-->
    </div><!--end::Sidebar Brand--><!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"><!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header text-secondary">STATISTIC & REPORT</li>
                <li class="nav-item"><a href="{{ route('admin.home') }}" class="nav-link"><i
                            class="nav-icon bi bi-speedometer text-primary"></i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-header text-secondary">CMS</li>
                <li class="nav-item"><a href="#" class="nav-link"><i
                            class="nav-icon bi bi-globe text-secondary"></i>
                        <p>
                            Portfolio Website
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="PortfolioContactRequest.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-secondary"></i>
                                <p>Contact Request</p>
                            </a></li>
                        <li class="nav-item"><a href="PortfolioPages.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-primary"></i>
                                <p>Pages</p>
                            </a></li>
                    </ul>
                </li>
                @can('user_management_access')
                <li class="nav-header text-secondary">{{ trans('cruds.userManagement.title') }}</li>
                @can('user_access')
                    <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link"><i
                                class="nav-icon bi bi-person-bounding-box text-success"></i>
                            <p>
                                {{ trans('cruds.user.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                    <li class="nav-item"><a href="{{ route('admin.roles.index') }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}"><i
                                class="nav-icon bi bi-r-circle-fill text-info"></i>
                            <p>
                                {{ trans('cruds.role.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('permission_access')
                    <li class="nav-item"><a href="{{ route('admin.permissions.index') }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}"><i
                                class="nav-icon bi bi-file-earmark-lock text-secondary"></i>
                            <p>
                                {{ trans('cruds.permission.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @endcan
                <li class="nav-item"><a href="#" class="nav-link"><i
                            class="nav-icon bi bi-substack text-primary"></i>
                        <p>
                            Records
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="RecordAuth.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-primary"></i>
                                <p>Auth records</p>
                            </a></li>
                        <li class="nav-item"><a href="RecordDB.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-warning"></i>
                                <p>DB records</p>
                            </a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logoutform').submit();"><i
                            class="nav-icon bi bi-power text-danger"></i>
                        <p>{{ trans('global.logout') }}</p>
                    </a></li>
            </ul><!--end::Sidebar Menu-->
        </nav>
    </div><!--end::Sidebar Wrapper-->
</aside>
