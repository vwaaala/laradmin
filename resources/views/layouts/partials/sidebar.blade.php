<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"><!--begin::Sidebar Brand-->
    <div class="sidebar-brand"><!--begin::Brand Link--><a href="../index.html" class="brand-link">
            <!--begin::Brand Image--><img src="../../../dist/assets/img/AdminLTELogo.png" alt="Logo"
                                          class="brand-image opacity-75 shadow"><!--end::Brand Image-->
            <!--begin::Brand Text--><span class="brand-text fw-light">{{ trans('panel.site_title') }}</span>
            <!--end::Brand Text--></a>
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
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"><!--begin::Sidebar Brand-->
    <div class="sidebar-brand"><!--begin::Brand Link-->
        <a href="../index.html"
           class="brand-link"><!--begin::Brand Image--><img
                src="./assets/img/AdminLTELogo.png"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"><!--end::Brand Image--><!--begin::Brand Text-->
            <span
                class="brand-text fw-light">AdminLTE 4</span><!--end::Brand Text-->
        </a><!--end::Brand Link-->
    </div><!--end::Sidebar Brand--><!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"><!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header text-secondary">GENERAL</li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-table text-info"></i>
                        <p>
                            Appointments
                            <span class="nav-badge badge text-bg-secondary me-3">6</span><i
                                class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="Appointment.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-info"></i>
                                <p>History</p>
                            </a></li>
                        <li class="nav-item"><a href="AppointmentCreate.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-primary"></i>
                                <p>Create</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i
                            class="nav-icon bi bi-prescription text-warning"></i>
                        <p>
                            Prescriptions
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="Prescription.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-warning"></i>
                                <p>History</p>
                            </a></li>
                        <li class="nav-item"><a href="PrescriptionCreate.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-primary"></i>
                                <p>Create</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i
                            class="nav-icon bi bi-person-walking text-success"></i>
                        <p>
                            Therapy Session
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="TherapySession.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-success"></i>
                                <p>History</p>
                            </a></li>
                        <li class="nav-item"><a href="TherapySessionCreate.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-primary"></i>
                                <p>Create</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-header text-secondary">STATISTIC & REPORT</li>
                <li class="nav-item"><a href="Dashboard.html" class="nav-link"><i
                            class="nav-icon bi bi-speedometer text-primary"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"><i
                            class="nav-icon bi bi-file-bar-graph text-warning"></i>
                        <p>
                            Reports
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="ReportExpense.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-warning"></i>
                                <p>Expense</p>
                            </a></li>
                        <li class="nav-item"><a href="ReportSalary.html" class="nav-link"><i
                                    class="nav-icon bi bi-circle text-primary"></i>
                                <p>Salary</p>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-header text-secondary">CMS</li>
                <li class="nav-item"><a href="Package.html" class="nav-link"><i
                            class="nav-icon bi bi-box2-heart text-danger"></i>
                        <p>
                            Therapy Packages
                        </p>
                    </a>
                </li>
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
                <li class="nav-header text-secondary">AUTH GUARD</li>
                <li class="nav-item"><a href="Users.html" class="nav-link"><i
                            class="nav-icon bi bi-person-bounding-box text-success"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item"><a href="Roles.html" class="nav-link"><i
                            class="nav-icon bi bi-r-circle-fill text-info"></i>
                        <p>
                            Roles
                        </p>
                    </a>
                </li>
                <li class="nav-item"><a href="Permissions.html" class="nav-link"><i
                            class="nav-icon bi bi-file-earmark-lock text-secondary"></i>
                        <p>
                            Permissions
                        </p>
                    </a>
                </li>
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
                        <p>{{ __('Logout') }}</p>
                    </a></li>
            </ul><!--end::Sidebar Menu-->
        </nav>
    </div><!--end::Sidebar Wrapper-->
</aside>
