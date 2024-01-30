<!DOCTYPE html>
<html lang="{{ strtoupper(app()->getLocale()) }}"><!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('panel.site_title') }}</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Sidebar Mini">
    <meta name="author" content="ColorlibHQ">
    <meta name="description"
          content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <!--end::Primary Meta Tags--><!--begin::Required Styles(Template)-->
    @vite(['resources/sass/app.scss'])<!--end::Required Style(Template)-->
</head><!--end::Head--><!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary"><!--begin::App Wrapper-->
<div class="app-wrapper"><!--begin::Header-->
    @include('layouts.partials.navbar')<!--end::Header--><!--begin::Sidebar-->
    @include('layouts.partials.sidebar')<!--end::Sidebar--><!--begin::App Main-->
    <main class="app-main"><!--begin::App Content Header-->
        <div class="app-content-header"><!--begin::Container-->
            <div class="container-fluid"><!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Sidebar Mini</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Sidebar Mini
                            </li>
                        </ol>
                    </div>
                </div><!--end::Row-->
            </div><!--end::Container-->
        </div><!--end::App Content Header--><!--begin::App Content-->
        <div class="app-content"><!--begin::Container-->
            <div class="container-fluid"><!--begin::Session Message-->
                @if(session('message'))
                    <div class="callout callout-danger mb-4">
                        <h5 class="fw-bold">Success</h5>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif
                @if($errors->count() > 0)
                    <div class="callout callout-danger mb-4">
                        <h5 class="fw-bold">Error</h5>
                        <p>{{ $error }}</p>
                    </div>
                @endif<!--end::Session Message--><!--begin::Content-->
                @yield('content')<!--end::Content-->
            </div><!--end::Container-->
        </div><!--end::App Content-->
    </main><!--end::App Main--><!--begin::Footer-->
    @include('layouts.partials.footer')<!--end::Footer-->
</div><!--end::App Wrapper--><!--begin::Log out-->
<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form><!--end::Log out--><!--begin::Required Plugins(Template)-->
@vite(['resources/js/app.js'])<!--end::Required Plugins(Template)--><!--begin::Global JS Configure(Template)-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };
    document.addEventListener("DOMContentLoaded", function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script><!--end::OverlayScrollbars Configure-->
<script>
    // Color Mode Toggler
    (() => {
        "use strict";

        const storedTheme = localStorage.getItem("theme");

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme;
            }

            return window.matchMedia("(prefers-color-scheme: dark)").matches ?
                "dark" :
                "light";
        };

        const setTheme = function (theme) {
            if (
                theme === "auto" &&
                window.matchMedia("(prefers-color-scheme: dark)").matches
            ) {
                document.documentElement.setAttribute("data-bs-theme", "dark");
            } else {
                document.documentElement.setAttribute("data-bs-theme", theme);
            }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
            const themeSwitcher = document.querySelector("#bd-theme");

            if (!themeSwitcher) {
                return;
            }

            const themeSwitcherText = document.querySelector("#bd-theme-text");
            const activeThemeIcon = document.querySelector(
                ".theme-icon-active i"
            );
            const btnToActive = document.querySelector(
                `[data-bs-theme-value="${theme}"]`
            );
            const svgOfActiveBtn = btnToActive
                .querySelector("i")
                .getAttribute("class");

            for (const element of document.querySelectorAll(
                "[data-bs-theme-value]"
            )) {
                element.classList.remove("active");
                element.setAttribute("aria-pressed", "false");
            }

            btnToActive.classList.add("active");
            btnToActive.setAttribute("aria-pressed", "true");
            activeThemeIcon.setAttribute("class", svgOfActiveBtn);
            const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
            themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

            if (focus) {
                themeSwitcher.focus();
            }
        };

        window
            .matchMedia("(prefers-color-scheme: dark)")
            .addEventListener("change", () => {
                if (storedTheme !== "light" || storedTheme !== "dark") {
                    setTheme(getPreferredTheme());
                }
            });

        window.addEventListener("DOMContentLoaded", () => {
            showActiveTheme(getPreferredTheme());

            for (const toggle of document.querySelectorAll(
                "[data-bs-theme-value]"
            )) {
                toggle.addEventListener("click", () => {
                    const theme = toggle.getAttribute("data-bs-theme-value");
                    localStorage.setItem("theme", theme);
                    setTheme(theme);
                    showActiveTheme(theme, true);
                });
            }
        });
    })();
</script><!--end::Global JS Configure(Template)--><!--begin::Script Section-->
@yield('scripts')<!--end::Script Section--><!--end::Script-->
</body><!--end::Body-->

</html>
