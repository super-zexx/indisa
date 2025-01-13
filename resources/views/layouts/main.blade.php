<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('title') | Smart Village</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="
            The most advanced Tailwind CSS & Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        " />
    <meta name="keywords"
        content="
            tailwind, tailwindcss, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="index.html" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->


    {{-- cdn font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside " data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">

                <!--begin::Logo-->
                <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
                    <a href="index.html">
                        <img alt="Logo" src="/assets/media/logos/demo9.svg" class="h-40px" />
                    </a>
                </div>
                <!--end::Logo-->
                <style>
                    #kt_aside_menu_wrapper {
                        max-height: calc(100vh - 100px);
                        /* Sesuaikan 100px dengan margin atas/bawah */
                        overflow-y: auto;
                        scrollbar-width: thin;
                        /* Untuk browser yang mendukung */
                        scrollbar-color: #f1eded transparent;
                        /* Untuk browser yang mendukung */
                    }

                    #kt_aside_menu_wrapper::-webkit-scrollbar {
                        width: 6px;
                        /* Lebar scrollbar */
                    }

                    #kt_aside_menu_wrapper::-webkit-scrollbar-thumb {
                        background-color: #888;
                        /* Warna scrollbar */
                        border-radius: 10px;
                    }

                    #kt_aside_menu_wrapper::-webkit-scrollbar-thumb:hover {
                        background-color: #f7f7f7;
                        /* Warna scrollbar saat hover */
                    }
                </style>
                <!--begin::Nav-->
                <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
                    <!--begin::Aside menu-->
                    <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-y scroll-lg-ms d-flex"
                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: trur}"
                        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
                        <div id="kt_aside_menu"
                            class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-500 menu-arrow-gray-500 fw-semibold fs-6 my-auto"
                            data-kt-menu="true">

                            <!--Home-->
                            {{-- here menandakan menu sedang aktif --}}
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item here show py-2">
                                <!--begin:Menu link--><span class="menu-link menu-center"><span
                                        class="menu-icon me-0"><i class="fas fa-home fs-2x"><span
                                                class="path1"></span><span
                                                class="path2"></span></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                                    <!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu content-->
                                        <div class="menu-content "><span
                                                class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span></div>
                                        <!--end:Menu content-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link active"
                                            href="index.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Dashboard</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                </div><!--end:Menu sub-->
                            </div>
                            {{-- Pelayanan Online --}}
                            {{-- here menandakan menu sedang aktif --}}
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item  py-2">
                                <!--begin:Menu link--><span class="menu-link menu-center"><span
                                        class="menu-icon me-0"><i class="fas fa-envelope fs-2x"><span
                                                class="path1"></span><span
                                                class="path2"></span></i></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                                    <!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu content-->
                                        <div class="menu-content "><span
                                                class="menu-section fs-5 fw-bolder ps-1 py-1">Pelayanan Online</span>
                                        </div>
                                        <!--end:Menu content-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link active"
                                            href="index.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Pengajuan Surat</span></a><!--end:Menu link--></div>

                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                            <span class="menu-title">Surat</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->

                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="index.html">
                                                    <span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span>
                                                    <span class="menu-title">Surat Masuk</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->

                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
                                                    <span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span>
                                                    <span class="menu-title">Surat Keluar</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <!--end:Menu link-->

                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">

                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                            href="authentication/layouts/corporate/sign-up.html">
                                                            <span class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span>
                                                            <span class="menu-title">Surat Pelayanan</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->

                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                            href="authentication/layouts/corporate/sign-up.html">
                                                            <span class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span>
                                                            <span class="menu-title">Surat Instansi</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>


                                    <!--end:Menu item--><!--begin:Menu item-->
                                </div><!--end:Menu sub-->
                            </div>
                            {{-- here menandakan menu sedang aktif --}}
                            {{-- pertah --}}
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item  py-2">
                                <!--begin:Menu link--><span class="menu-link menu-center"><span
                                        class="menu-icon me-0"><i class="fas fa-map-marker-alt fs-2x"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i>
                                    </span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                                    <!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu content-->
                                        <div class="menu-content "><span
                                                class="menu-section fs-5 fw-bolder ps-1 py-1">Pertanahan</span></div>
                                        <!--end:Menu content-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->

                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Account</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="account/overview.html"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Overview</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="account/settings.html"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Settings</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->



                                            <!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">SPPT PBB</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link--><span class="menu-link"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Kolektor</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                            href="authentication/layouts/corporate/sign-in.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Wajib
                                                                Pajak</span></a><!--end:Menu link-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                            href="authentication/layouts/corporate/sign-up.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Loket
                                                                SPPT</span></a><!--end:Menu link-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                            href="authentication/layouts/corporate/sign-up.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Data
                                                                SPPT</span></a><!--end:Menu link-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->


                                                    <!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->



                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->


                        </div>
                    </div>
                    <!--end::Aside menu-->
                </div>
                <!--end::Nav-->

                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
                    <!--begin::Menu-->
                    <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip"
                        data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">
                        <button type="button" class="btn btn-custom" data-kt-menu-trigger="click"
                            data-kt-menu-overflow="true" data-kt-menu-placement="top-start">

                            <i class="ki-duotone ki-entrance-left fs-2x"><span class="path1"></span><span
                                    class="path2"></span></i> </button>

                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Ticket
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Customer
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Admin Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Staff Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Member Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                        Generate Reports
                                    </a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->


            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header tablet and mobile-->
                <div class="header-mobile py-3">
                    <!--begin::Container-->
                    <div class="container d-flex flex-stack">
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="index.html">
                                <img alt="Logo" src="/assets/media/logos/demo9.svg" class="h-35px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->

                        <!--begin::Aside toggle-->
                        <button class="btn btn-icon btn-active-color-primary me-n4" id="kt_aside_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2x"><span class="path1"></span><span
                                    class="path2"></span></i> </button>
                        <!--end::Aside toggle-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header tablet and mobile-->

                <!--begin::Header-->
                <div id="kt_header" class="header  py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{lg: '300px'}">
                    <!--begin::Container-->
                    <div class="header-container  container-xxl ">

                        <!--begin::Page title-->
                        <div
                            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">

                            <!--begin::Heading-->
                            <h1 class="d-flex flex-column text-gray-900 fw-bold my-1">
                                <span class="text-white fs-1">
                                    Desa Astanamukti </span>

                                <small class="text-gray-600 fs-6 fw-normal pt-2">Jalan Syekh Lemahabang No. 01
                                    Astanamukti
                                    Kecamatan Pangenan Kabupaten Cirebon Jawa Barat
                                </small>
                            </h1>
                            <!--end::Heading-->

                        </div>
                        <!--end::Page title--->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center flex-wrap">
                            <!--begin::Search-->
                            <div class="header-search py-3 py-lg-0 me-3">

                            </div>
                            <!--end::Search-->

                            <!--begin::Action-->
                            <div class="d-flex align-items-center py-3 py-lg-0">
                                <!--begin::Item-->
                                <div class="me-3">
                                    <a href="#"
                                        class="btn btn-icon btn-custom btn-active-color-primary position-relative"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">

                                        <i class="fas fa-bell fs-1"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> <span
                                            class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                    </a>

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                        data-kt-menu="true" id="kt_menu_notifications">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                            style="background-image:url('/assets/media/misc/menu-header-bg.jpg')">
                                            <!--begin::Title-->
                                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                                Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                            </h3>
                                            <!--end::Title-->

                                            <!--begin::Tabs-->
                                            <ul
                                                class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_1">Alerts</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_2">Updates</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_3">Logs</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_1"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-28 fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Alice</a>
                                                                <div class="text-gray-500 fs-7">Phase 1 development
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">1 hr</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i
                                                                        class="ki-duotone ki-information fs-2 text-danger"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                                    Confidential</a>
                                                                <div class="text-gray-500 fs-7">Confidential staff
                                                                    documents</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i
                                                                        class="ki-duotone ki-briefcase fs-2 text-warning"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                                    HR</a>
                                                                <div class="text-gray-500 fs-7">Corporeate staff
                                                                    profiles</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-12 fs-2 text-success"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Redux</a>
                                                                <div class="text-gray-500 fs-7">New frontend admin
                                                                    theme</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 days</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i
                                                                        class="ki-duotone ki-colors-square fs-2 text-primary"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Breafing</a>
                                                                <div class="text-gray-500 fs-7">Product launch status
                                                                    update</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-info">
                                                                    <i
                                                                        class="ki-duotone ki-picture
 fs-2 text-info"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                                    /assets</a>
                                                                <div class="text-gray-500 fs-7">Collection of banner
                                                                    images</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i
                                                                        class="ki-duotone ki-color-swatch fs-2 text-warning"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span><span
                                                                            class="path5"></span><span
                                                                            class="path6"></span><span
                                                                            class="path7"></span><span
                                                                            class="path8"></span><span
                                                                            class="path9"></span><span
                                                                            class="path10"></span><span
                                                                            class="path11"></span><span
                                                                            class="path12"></span><span
                                                                            class="path13"></span><span
                                                                            class="path14"></span><span
                                                                            class="path15"></span><span
                                                                            class="path16"></span><span
                                                                            class="path17"></span><span
                                                                            class="path18"></span><span
                                                                            class="path19"></span><span
                                                                            class="path20"></span><span
                                                                            class="path21"></span></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                                    /assets</a>
                                                                <div class="text-gray-500 fs-7">Collection of SVG
                                                                    icons</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">20 March</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->

                                                </div>
                                                <!--end::Items-->

                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a href="pages/user-profile/activity.html"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="ki-duotone ki-arrow-right fs-5"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->

                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                                role="tabpanel">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column px-9">
                                                    <!--begin::Section-->
                                                    <div class="pt-10 pb-0">
                                                        <!--begin::Title-->
                                                        <h3 class="text-gray-900 text-center fw-bold">
                                                            Get Pro Access
                                                        </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Text-->
                                                        <div class="text-center text-gray-600 fw-semibold pt-1">
                                                            Outlines keep you honest. They stoping you from amazing
                                                            poorly about drive
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin::Action-->
                                                        <div class="text-center mt-5 mb-9">
                                                            <a href="#" class="btn btn-sm btn-primary px-6"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Illustration-->
                                                    <div class="text-center px-4">
                                                        <img class="mw-100 mh-200px" alt="image"
                                                            src="/assets/media/illustrations/sigma-1/1.png" />
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Tab panel-->

                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_3"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">New
                                                                order</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Just now</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">New
                                                                customer</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                                process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Search
                                                                query</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 days</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">API
                                                                connection</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">1 week</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Database
                                                                restore</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Mar 5</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">System
                                                                update</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">May 15</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Server
                                                                OS update</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Apr 3</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">API
                                                                rollback</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Jun 30</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                                process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Jul 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                                process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Sep 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                                tasks</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Dec 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->

                                                </div>
                                                <!--end::Items-->

                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a href="pages/user-profile/activity.html"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="ki-duotone ki-arrow-right fs-5"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="me-3">
                                    <a href="#" class="btn btn-icon btn-custom btn-active-color-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="fas fa-user fs-1"><span class="path1"></span><span
                                                class="path2"></span></i> </a>

                                    <!--begin::User account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="/assets/media/avatars/300-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bold d-flex align-items-center fs-5">
                                                        Max Smith <span
                                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                    </div>

                                                    <a href="#"
                                                        class="fw-semibold text-muted text-hover-primary fs-7">
                                                        max@kt.com </a>
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="account/overview.html" class="menu-link px-5">
                                                My Profile
                                            </a>
                                        </div>
                                        <!--end::Menu item-->



                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->


                                        <!--begin::Menu item-->
                                        {{-- <div class="menu-item px-5"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                                            <a href="#" class="menu-link px-5">
                                                <span class="menu-title position-relative">
                                                    Language

                                                    <span
                                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                        English <img class="w-15px h-15px rounded-1 ms-2"
                                                            src="/assets/media/flags/united-states.svg"
                                                            alt="" />
                                                    </span>
                                                </span>
                                            </a>

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html"
                                                        class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="/assets/media/flags/united-states.svg"
                                                                alt="" />
                                                        </span>
                                                        English
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="/assets/media/flags/spain.svg" alt="" />
                                                        </span>
                                                        Spanish
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="/assets/media/flags/germany.svg"
                                                                alt="" />
                                                        </span>
                                                        German
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="/assets/media/flags/japan.svg" alt="" />
                                                        </span>
                                                        Japanese
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="/assets/media/flags/france.svg"
                                                                alt="" />
                                                        </span>
                                                        French
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div> --}}
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5 my-1">
                                            <a href="account/settings.html" class="menu-link px-5">
                                                Account Settings
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="{{ route('logout') }}" class="menu-link px-5">
                                                Sign Out
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::User account menu-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Theme mode-->
                                <div class="d-flex align-items-center me-3">

                                    <!--begin::Menu toggle-->
                                    <a href="#" class="btn btn-icon btn-custom btn-active-color-primary"
                                        data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <i class="fas fa-light fs-1"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span></i> <i class="fas fa-moon fs-1"><span
                                                class="path1"></span><span class="path2"></span></i></a>
                                    <!--begin::Menu toggle-->

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fas fa-sun"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span><span
                                                            class="path6"></span><span class="path7"></span><span
                                                            class="path8"></span><span class="path9"></span><span
                                                            class="path10"></span></i>
                                                </span>
                                                <span class="menu-title">
                                                    Light
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fas fa-moon"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </span>
                                                <span class="menu-title">
                                                    Dark
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fas fa-desktop"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span></i>
                                                </span>
                                                <span class="menu-title">
                                                    System
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                </div>
                                <!--end::Theme mode-->

                                <!--begin::Item-->
                                {{-- <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">New Goal </a> --}}
                                <!--end::Item-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->

                    <div class="header-offset"></div>
                </div>
                <!--end::Header-->




                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div class=" container-fluid  d-flex flex-column flex-md-row flex-stack">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-gray-500 fw-semibold me-1">Created by</span>
                            <a href="https://smartvillage.com/" target="_blank"
                                class="text-muted text-hover-primary fw-semibold me-2 fs-6">Smart Village</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://smartvillage.com/" target="_blank"
                                    class="menu-link px-2">About</a></li>

                            <li class="menu-item"><a href="https://devs.smartvillage.com/" target="_blank"
                                    class="menu-link px-2">Support</a></li>

                            <li class="menu-item"><a href="https://1.envato.market/Vm7VRE" target="_blank"
                                    class="menu-link px-2">Purchase</a></li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">

        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">

                    <!--begin::Timeline items-->
                    <div class="timeline timeline-border-dashed">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus
                                        Mobile App” project:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="/assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div
                                            class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="/assets/media/avatars/300-2.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="/assets/media/avatars/300-14.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->

                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="/assets/media/avatars/300-20.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon me-4">
                                <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that
                                        speak human workshop</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="/assets/media/avatars/300-1.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3
                                        New Incoming
                                        Project Files:</a>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="/assets/media/avatars/300-23.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3"
                                                src="/assets/media/svg/files/pdf.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                    Guidelines</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo9/apps/projects/project.html" class="w-30px me-3"
                                                src="/assets/media/svg/files/doc.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT
                                                    Testing Results</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo9/apps/projects/project.html" class="w-30px me-3"
                                                src="/assets/media/svg/files/css.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance
                                                    Reports</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span
                                        class="path1"></span><span class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                        merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                        in “Ads Pro Admin Dashboard project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="/assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="/assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="/assets/media/stock/600x400/img-29.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="/assets/media/stock/600x400/img-31.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="/assets/media/stock/600x400/img-40.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is assigned to you in Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->

                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="/assets/media/avatars/300-4.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
                                                </h4>

                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to
                                                    make sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-primary px-6 align-self-center text-nowrap">
                                                Proceed </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->

                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is placed for Workshow Planning & Budget Estimation
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                    View All Activities <i class="ki-duotone ki-arrow-right fs-3 text-primary"><span
                            class="path1"></span><span class="path2"></span></i> </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

        <!--begin::Messenger-->
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
                            Cox</a>

                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-0">
                        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i> </button>

                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Contacts
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">
                                    Add Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">
                                    Invite Contacts

                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">
                                            Create Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">
                                            Invite Members
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                    title="Coming soon">
                                    Settings
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">



                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                How likely are you to recommend our company to your friends and family ? </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a
                                repository on GitHub. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Ok, Understood! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                You’ll receive notifications for all issues, pull requests! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                You can unwatch this repository immediately by clicking here: <a
                                    href="https://keenthemes.com/">Keenthemes.com</a> </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Most purchased Business courses during this sale! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                provided </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->

                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="/assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Right before vacation season we have the next Big Deal for you. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="Type a message">

            </textarea>
                <!--end::Input-->

                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span
                                    class="path2"></span></i> </button>
                    </div>
                    <!--end::Actions-->

                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->


    <!--begin::Engage modals-->



    <!--begin::Modals-->




    <!--begin::Javascript-->
    <script>
        var hostUrl = "/assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/index.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/map.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="/assets/js/custom/apps/ecommerce/sales/save-order.js"></script>
    <script src="/assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="/assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="/assets/js/custom/apps/user-management/users/list/add.js"></script>
    <script src="/assets/js/widgets.bundle.js"></script>
    <script src="/assets/js/custom/widgets.js"></script>
    <script src="/assets/js/custom/apps/chat/chat.js"></script>
    <script src="/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    @stack('scripts')
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 16:45:15 GMT -->

</html>
