<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"><!--begin::Sidebar Brand-->
    <div class="sidebar-brand"><!--begin::Brand Link--><a href="../index.html" class="brand-link">
            <!--begin::Brand Image--><img src="../../../dist/assets/img/AdminLTELogo.png" alt="Logo"
                                          class="brand-image opacity-75 shadow"><!--end::Brand Image-->
            <!--begin::Brand Text--><span class="brand-text fw-light">{{ trans('panel.site_title') }}</span><!--end::Brand Text--></a>
        <!--end::Brand Link--></div><!--end::Sidebar Brand--><!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"><!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>{{ trans('global.dashboard') }}</p>
                    </a>
                </li>
                <!--begin::User Management-->
                @can('user_management_access')
                    <li class="nav-header">{{ trans('cruds.userManagement.header') }}</li>
                    <li class="nav-item"><a href="#" class="nav-link">
                            <i class="nav-icon bi bi-people"></i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ms-2">
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link">
                                        <i class="bi bi-arrow-bar-right"></i>
                                        <p>{{ trans('cruds.user.title') }}</p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}"
                                       class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="bi bi-arrow-bar-right"></i>
                                        <p>{{ trans('cruds.role.title') }}</p>
                                    </a>
                                </li>
                            @endcan
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}"
                                       class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="bi bi-arrow-bar-right"></i>
                                        <p>{{ trans('cruds.permission.title') }}</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="#" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="bi bi-power"></i>
                        <p>{{ trans('global.logout') }}</p>
                    </a>
                </li>
            </ul><!--end::Sidebar Menu-->
        </nav>
    </div><!--end::Sidebar Wrapper-->
</aside>
