<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Tailwind CSS PHP admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading">
    <meta name="keywords" content="admin, php, php admin panel template, admin dashboard template, tailwind, tailwind dashboard template, phpmyadmin, admin template, php admin dashboard, admin dashboard php, php admin template, php admin dashboard template, admin panel design in php, admin panel php template, php admin dashboard">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('backend.layout.commoncss')
    @yield('css')
</head>

<body class="">
    <!-- SWITCHER -->
    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">

        <div class="ti-offcanvas-header z-10 relative">
            <h3 class="ti-offcanvas-title">Switcher</h3>
            <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>

        <div class="ti-offcanvas-body pt-0 border-b dark:border-white/10 z-10 relative">
            <div class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                <button type="button" class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 active" id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">Theme Style</button>
                <button type="button" class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">Theme Colors</button>
            </div>
        </div>

        <div class="ti-offcanvas-body" id="switcher-body">

            <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="space-y-6">

                <div class="space-y-6">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme" checked>
                            <label for="switcher-light-theme" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Light</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Dark</label>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">LTR</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">RTL</label>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-vertical" checked>
                            <label for="switcher-vertical" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Vertical</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-horizontal">
                            <label for="switcher-horizontal" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Horizontal</label>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <p class="switcher-style-head">Navigation Menu Style:</p>
                    <div class="grid grid-cols-2 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-click" checked>
                            <label for="switcher-menu-click" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-hover">
                            <label for="switcher-menu-hover" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu Hover</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-click">
                            <label for="switcher-icon-click" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-hover">
                            <label for="switcher-icon-hover" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon Hover</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="lt:mr-2 rtl:ml-2">Note: </b> Works same for both Vertical and Horizontal</div>
                </div>

                <div class="space-y-6">
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-regular" checked>
                            <label for="switcher-regular" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Regular</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-classic">
                            <label for="switcher-classic" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Classic</label>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width" checked>
                            <label for="switcher-full-width" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">FullWidth</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                            <label for="switcher-boxed" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Boxed</label>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-fixed" checked>
                            <label for="switcher-menu-fixed" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-scroll">
                            <label for="switcher-menu-scroll" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable </label>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-fixed" checked>
                            <label for="switcher-header-fixed" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-scroll">
                            <label for="switcher-header-scroll" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable</label>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                    <div class="grid grid-cols-2 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-default-menu" checked>
                            <label for="switcher-default-menu" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">DefaultMenu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-closed-menu">
                            <label for="switcher-closed-menu" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Closed Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icontext-menu">
                            <label for="switcher-icontext-menu" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon Text</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icon-overlay">
                            <label for="switcher-icon-overlay" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon Overlay</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-detached">
                            <label for="switcher-detached" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Detached</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-double-menu">
                            <label for="switcher-double-menu" class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Double Menu</label>
                        </div>
                    </div>

                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>Navigation menu styles won't work here.</div>
                </div>
            </div>

            <div id="switcher-2" class="hidden space-y-6" role="tabpanel" aria-labelledby="switcher-item-2">

                <div class="theme-colors">
                    <p class="switcher-style-head">Menu Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio" name="menu-colors" id="switcher-menu-light" checked>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Light Menu</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="menu-colors" id="switcher-menu-dark" checked>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Dark Menu</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="menu-colors" id="switcher-menu-primary">
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Color Menu</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="menu-colors" id="switcher-menu-gradient">
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Gradient Menu</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio" name="menu-colors" id="switcher-menu-transparent">
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Transparent Menu</span>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to change color Menu dynamically change from below Theme Primary color picker.</div>
                </div>

                <div class="theme-colors">
                    <p class="switcher-style-head">Header Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio" name="header-colors" id="switcher-header-light" checked>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Light Header</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="header-colors" id="switcher-header-dark">
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Dark Header</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="header-colors" id="switcher-header-primary">
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Color Header</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="header-colors" id="switcher-header-gradient">
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Gradient Header</span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio" name="header-colors" id="switcher-header-transparent">
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">Transparent Header</span>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to change color Header dynamically change from below Theme Primary color picker.</div>
                </div>

                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>

                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-1" type="radio" name="theme-background" id="switcher-background" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-bg-transparent">
                            <div class="theme-container-background"></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>

                <div class="menu-image theme-colors">
                    <p class="switcher-style-head">Menu With Background Image:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images" id="switcher-bg-img">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images" id="switcher-bg-img1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images" id="switcher-bg-img2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images" id="switcher-bg-img3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images" id="switcher-bg-img4">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="ti-offcanvas-footer">
            <a class="ti-btn ti-btn-primary" target="_blank" href="https://themeforest.net/item/synto-php-tailwind-css-admin-dashboard-template/46988058">Try Now</a>
            <a class="ti-btn ti-btn-secondary" target="_blank" href="https://1.envato.market/MGEaN">Our Protfolio</a>
            <a id="reset-all" class="ti-btn ti-btn-danger" href="javascript:void(0);">Reset</a>
        </div>

    </div>
    <!-- END SWITCHER -->

    <!-- PAGE -->
    <div class="page">

        <!-- SIDEBAR -->
        @include('backend.layout.sidebar')
        <!-- END SIDEBAR -->

        <!-- HEADER -->
        @include('backend.layout.header')
        <!-- END HEADER -->

        <!-- MAIN-CONTENT -->

        <div class="content">

            <!-- Start::main-content -->
            <div class="main-content">

                @yield('content')

                <!-- Page Header -->
                {{-- <div class="block justify-between page-header sm:flex">
                    <div>
                        <h3
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                            Sales Dashboard</h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-sm">
                            <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate"
                                href="javascript:void(0);">
                                Dashboards
                                <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                            </a>
                        </li>
                        <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 "
                            aria-current="page">
                            Sales Dashboard
                        </li>
                    </ol>
                </div> --}}
                <!-- Page Header Close -->

                {{-- <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="flex">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <div class="avatar p-2 rounded-sm bg-primary/10">
                                            <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path class="fill-primary"
                                                    d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">
                                            Total Revenue</h6>
                                    </div>
                                    <span
                                        class="badge bg-primary/10 text-primary py-1 ltr:ml-auto rtl:mr-auto !my-auto">
                                        <i class="ti ti-trending-up"></i> 20%
                                    </span>
                                </div>
                                <div class="mt-2">
                                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$26,35,262</h2>
                                    <p class="text-xs text-gray-400 ">in last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="flex">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <div class="avatar p-2 rounded-sm bg-secondary/10">
                                            <svg class="fill-secondary" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path class="fill-secondary"
                                                    d="M9.5,7h7C16.776123,7,17,6.776123,17,6.5S16.776123,6,16.5,6h-7C9.223877,6,9,6.223877,9,6.5S9.223877,7,9.5,7z M7.5,11h9c0.276123,0,0.5-0.223877,0.5-0.5S16.776123,10,16.5,10h-9C7.223877,10,7,10.223877,7,10.5S7.223877,11,7.5,11z M20.5,2H3.4993896C3.2234497,2.0001831,2.9998169,2.223999,3,2.5v19c-0.000061,0.1124268,0.0378418,0.2216187,0.1074829,0.3098755c0.1710205,0.2167358,0.4853516,0.2537231,0.7020874,0.0827026l2.8652344-2.2617188l2.3583984,1.7695312c0.1777954,0.1328125,0.421814,0.1328125,0.5996094,0L12,19.625l2.3671875,1.7753906c0.1777954,0.1328125,0.421814,0.1328125,0.5996094,0l2.3583984-1.7695312l2.8652344,2.2617188C20.2785034,21.9623413,20.3876343,22.0002441,20.5,22h0.0006104C20.7766113,21.9998169,21.0001831,21.7759399,21,21.5V2.4993896C20.9998169,2.2234497,20.776001,1.9998169,20.5,2z M20,20.46875l-2.3574219-1.8613281c-0.0882568-0.069519-0.1972656-0.1072998-0.3095703-0.1074219c-0.1080933-0.000061-0.2132568,0.0349121-0.2998047,0.0996094L14.6669922,20.375l-2.3671875-1.7753906c-0.1777954-0.1328125-0.421814-0.1328125-0.5996094,0L9.3330078,20.375l-2.3662109-1.7753906c-0.1817017-0.1348877-0.4311523-0.1317139-0.609375,0.0078125L4,20.46875V3h16V20.46875z M7.5,15h9c0.276123,0,0.5-0.223877,0.5-0.5S16.776123,14,16.5,14h-9C7.223877,14,7,14.223877,7,14.5S7.223877,15,7.5,15z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">
                                            Total Sales</h6>
                                    </div>
                                    <span
                                        class="badge bg-secondary/10 text-secondary py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i
                                            class="ti ti-trending-up"></i> 1.8%</span>
                                </div>
                                <div class="mt-2">
                                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$56,35,262</h2>
                                    <p class="text-xs text-gray-400 ">in last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="flex">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <div class="avatar p-2 rounded-sm bg-warning/10">
                                            <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24"
                                                id="shopping-bag">
                                                <path class="fill-warning" fill="#4B5563"
                                                    d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">
                                            Total Products</h6>
                                    </div>
                                    <span
                                        class="badge bg-warning/10 text-warning py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i
                                            class="ti ti-trending-down"></i> 1.8%</span>
                                </div>
                                <div class="mt-2">
                                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$4,262</h2>
                                    <p class="text-xs text-gray-400 ">in last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="flex">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <div class="avatar p-2 rounded-sm bg-success/10">
                                            <svg class="fill-success" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path class="fill-success"
                                                    d="M10.75,8H12h0.0006104H15.5C15.776123,8,16,7.776123,16,7.5S15.776123,7,15.5,7h-3V5.5C12.5,5.223877,12.276123,5,12,5s-0.5,0.223877-0.5,0.5V7h-0.75C9.2312012,7,8,8.2312012,8,9.75s1.2312012,2.75,2.75,2.75h2.5c0.9664917,0,1.75,0.7835083,1.75,1.75S14.2164917,16,13.25,16H8.5C8.223877,16,8,16.223877,8,16.5S8.223877,17,8.5,17h3v1.5c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,18.7765503,11.723999,19.0001831,12,19c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5V17h0.75c1.5187988,0,2.75-1.2312012,2.75-2.75s-1.2312012-2.75-2.75-2.75h-2.5C9.7835083,11.5,9,10.7164917,9,9.75S9.7835083,8,10.75,8z M12,1C5.9248657,1,1,5.9248657,1,12s4.9248657,11,11,11c6.0722656-0.0068359,10.9931641-4.9277344,11-11C23,5.9248657,18.0751343,1,12,1z M12,22C6.4771729,22,2,17.5228271,2,12S6.4771729,2,12,2c5.5201416,0.0064697,9.9935303,4.4798584,10,10C22,17.5228271,17.5228271,22,12,22z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">
                                            Total Expenses</h6>
                                    </div>
                                    <span
                                        class="badge bg-success/10 text-success py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i
                                            class="ti ti-trending-up"></i> 1.2%</span>
                                </div>
                                <div class="mt-2">
                                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$35,262</h2>
                                    <p class="text-xs text-gray-400 ">in last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 lg:col-span-12 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex">
                                    <h5 class="box-title my-auto">Sales Over View</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="flex flex-wrap sm:space-x-6 sm:rtl:space-x-reverse">
                                    <li>
                                        <p class="inline-flex items-center">
                                            <span
                                                class="block w-3 h-3 rounded-full ltr:mr-2 rtl:ml-2 border-4 border-primary pointer-events-none"></span>
                                            <span class="flex items-center">
                                                <span
                                                    class="text-2xl text-gray-800 dark:text-white font-semibold ltr:mr-2 rtl:ml-2 pointer-events-none">$9.65K</span>
                                                <span class="text-sm text-gray-400 dark:text-white/80">/ Income</span>
                                            </span>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="inline-flex items-center">
                                            <span
                                                class="block w-3 h-3 rounded-full ltr:mr-2 rtl:ml-2 border-4 border-gray-200 pointer-events-none"></span>
                                            <span class="flex items-center">
                                                <span
                                                    class="text-2xl text-gray-800 dark:text-white font-semibold ltr:mr-2 rtl:ml-2 pointer-events-none">$3.75K</span>
                                                <span class="text-sm text-gray-400 dark:text-white/80">/
                                                    Expenses</span>
                                            </span>
                                        </p>
                                    </li>
                                </ul>
                                <div id="salesOverview"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex">
                                    <h5 class="box-title my-auto">Top Customers</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="flex flex-col">
                                    <li class="px-0 pt-0 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);"
                                            class="flex  justify-between items-center w-full">
                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                <img class="avatar avatar-sm rounded-sm"
                                                    src="../assets/img/users/2.jpg" alt="Image Description">
                                                <div class="flex w-full">
                                                    <div class="block my-auto">
                                                        <p
                                                            class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                                                            Socrates Itumay</p>
                                                        <p
                                                            class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                                                            15 Purchases</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=""><span class="text-sm font-medium">$1,835</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);"
                                            class="flex  justify-between items-center w-full">
                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                <img class="avatar avatar-sm rounded-sm"
                                                    src="../assets/img/users/3.jpg" alt="Image Description">
                                                <div class="flex w-full">
                                                    <div class="block my-auto">
                                                        <p
                                                            class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                                                            Json Taylor</p>
                                                        <p
                                                            class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                                                            18 Purchases</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=""><span class="text-sm font-medium">$2,415</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);"
                                            class="flex  justify-between items-center w-full">
                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                <img class="avatar avatar-sm rounded-sm"
                                                    src="../assets/img/users/4.jpg" alt="Image Description">
                                                <div class="flex w-full">
                                                    <div class="block my-auto">
                                                        <p
                                                            class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                                                            Suzika Stallone</p>
                                                        <p
                                                            class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                                                            21 Purchases</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=""><span class="text-sm font-medium">$2,341</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);"
                                            class="flex  justify-between items-center w-full">
                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                <img class="avatar avatar-sm rounded-sm"
                                                    src="../assets/img/users/5.jpg" alt="Image Description">
                                                <div class="flex w-full">
                                                    <div class="block my-auto">
                                                        <p
                                                            class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                                                            Angelina Hose</p>
                                                        <p
                                                            class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                                                            24 Purchases</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=""><span class="text-sm font-medium">2,624</span></div>
                                        </a>
                                    </li>
                                    <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);"
                                            class="flex  justify-between items-center w-full">
                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                <img class="avatar avatar-sm rounded-sm"
                                                    src="../assets/img/users/6.jpg" alt="Image Description">
                                                <div class="flex w-full">
                                                    <div class="block my-auto">
                                                        <p
                                                            class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                                                            Selena Deoyl</p>
                                                        <p
                                                            class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                                                            12 Purchases</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=""><span class="text-sm font-medium">$1,035</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="px-0 pt-3 pb-0 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);"
                                            class="flex  justify-between items-center w-full">
                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                <img class="avatar avatar-sm rounded-sm"
                                                    src="../assets/img/users/10.jpg" alt="Image Description">
                                                <div class="flex w-full">
                                                    <div class="block my-auto">
                                                        <p
                                                            class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                                                            Charlie Davieson</p>
                                                        <p
                                                            class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                                                            15 Purchases</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=""><span class="text-sm font-medium">$1,835</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex">
                                    <h5 class="box-title my-auto">Sale Value</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body pb-0 px-0">
                                <div class="sales-value relative border-b border-gray-200 dark:border-white/10 pb-6">
                                    <canvas id="sales-donut" class="!h-[230px] !w-full mx-auto my-auto"></canvas>
                                    <div
                                        class="chart-circle-value circle-style absolute border-2 border-dashed border-primary -top-5 inset-0 flex justify-center items-center w-[150px] h-[150px] leading-[70px] rounded-full text-5xl mx-auto my-auto">
                                        <div class="text-xl font-bold">75%</div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="p-5 ltr:border-r rtl:border-l border-gray-200 dark:border-white/10">
                                        <div class="text-sm text-gray-500 dark:text-white/80 text-center font-medium">
                                            Sale Items
                                        </div>
                                        <div class="text-center">
                                            <p class="text-gray-800 dark:text-white text-2xl font-medium">567</p>
                                            <span class="text-success font-semibold"><i
                                                    class="ri-arrow-up-s-fill align-middle"></i>0.23%</span>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-sm text-gray-500 dark:text-white/80 text-center font-medium">
                                            Sale Revenue
                                        </div>
                                        <div class="text-center">
                                            <p class="text-gray-800 dark:text-white text-2xl font-medium">$11,197</p>
                                            <span class="text-danger font-semibold">
                                                <i class="ri-arrow-down-s-fill align-middle"></i>0.15%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex">
                                    <h5 class="box-title my-auto">Upcoming Products</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" aria-label="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="flex flex-col">
                                    <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="leading-none">
                                                    <img class="avatar avatar-sm rounded-full"
                                                        src="../assets/img/ecommerce/jpg/1.jpg" alt="image">
                                                </div>
                                                <div class="flex-auto ltr:ml-2 rtl:mr-2">
                                                    <p class="text-sm font-semibold mb-0">Smart Phone</p>
                                                    <p
                                                        class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">
                                                        Mobiles</p>
                                                </div>
                                                <div class="block text-end">
                                                    <span class="text-sm text-success font-semibold">$199.99</span>
                                                    <p class="text-xs text-gray-400 dark:text-white/80 !font-normal">
                                                        <i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr,
                                                        2023</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="leading-none">
                                                    <img class="avatar avatar-sm rounded-full"
                                                        src="../assets/img/ecommerce/jpg/2.jpg" alt="image">
                                                </div>
                                                <div class="flex-auto ltr:ml-2 rtl:mr-2">
                                                    <p class="text-sm font-semibold mb-0">White Headphones</p>
                                                    <p
                                                        class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">
                                                        Music</p>
                                                </div>
                                                <div class="block text-end">
                                                    <span class="text-sm text-success font-semibold">$79.49</span>
                                                    <p class="text-xs text-gray-400 dark:text-white/80 !font-normal">
                                                        <i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr,
                                                        2023</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="leading-none">
                                                    <img class="avatar avatar-sm rounded-full"
                                                        src="../assets/img/ecommerce/jpg/3.jpg" alt="image">
                                                </div>
                                                <div class="flex-auto ltr:ml-2 rtl:mr-2">
                                                    <p class="text-sm font-semibold mb-0">Stop Watch</p>
                                                    <p
                                                        class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">
                                                        Electronics</p>
                                                </div>
                                                <div class="block text-end">
                                                    <span class="text-sm text-success font-semibold">$49.29</span>
                                                    <p class="text-xs text-gray-400 dark:text-white/80 !font-normal">
                                                        <i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr,
                                                        2023</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="leading-none">
                                                    <img class="avatar avatar-sm rounded-full"
                                                        src="../assets/img/ecommerce/jpg/4.jpg" alt="image">
                                                </div>
                                                <div class="flex-auto ltr:ml-2 rtl:mr-2">
                                                    <p class="text-sm font-semibold mb-0">Kikon Camera</p>
                                                    <p
                                                        class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">
                                                        Electronics</p>
                                                </div>
                                                <div class="block text-end">
                                                    <span class="text-sm text-success font-semibold">$1,699.00</span>
                                                    <p class="text-xs text-gray-400 dark:text-white/80 !font-normal">
                                                        <i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr,
                                                        2023</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="leading-none">
                                                    <img class="avatar avatar-sm rounded-full"
                                                        src="../assets/img/ecommerce/jpg/6.jpg" alt="image">
                                                </div>
                                                <div class="flex-auto ltr:ml-2 rtl:mr-2">
                                                    <p class="text-sm font-semibold mb-0">Kids shoes</p>
                                                    <p
                                                        class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">
                                                        Clothing</p>
                                                </div>
                                                <div class="block text-end">
                                                    <span class="text-sm text-success font-semibold">$149.00</span>
                                                    <p class="text-xs text-gray-400 dark:text-white/80 !font-normal">
                                                        <i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr,
                                                        2023</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="p-0 mb-0 ti-list-group border-0 text-gray-800 dark:text-white">
                                        <a href="javascript:void(0);" class="w-full">
                                            <div class="flex items-center">
                                                <div class="leading-none">
                                                    <img class="avatar avatar-sm rounded-full"
                                                        src="../assets/img/ecommerce/jpg/5.jpg" alt="image">
                                                </div>
                                                <div class="flex-auto ltr:ml-2 rtl:mr-2">
                                                    <p class="text-sm font-semibold mb-0">Photo Frame</p>
                                                    <p
                                                        class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">
                                                        Furniture</p>
                                                </div>
                                                <div class="block text-end">
                                                    <span class="text-sm text-success font-semibold">$29.99</span>
                                                    <p class="text-xs text-gray-400 dark:text-white/80 !font-normal">
                                                        <i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr,
                                                        2023</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:col-span-4">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex">
                                    <h5 class="box-title my-auto">Social Visitors</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            This Week <i class="ti ti-chevron-down"></i></button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Week</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Month</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">This Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body p-2">
                                <div id="visitors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-12 xxl:col-span-5">
                        <div class="box">
                            <div class="box-header flex">
                                <h5 class="box-title my-auto">Top Selling Products</h5>
                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                    <button type="button" aria-label="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="text-sm leading-none ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something else
                                            here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div class="overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center !p-[0.65rem]">Product</th>
                                                <th scope="col" class="!p-[0.65rem]">Category</th>
                                                <th scope="col" class="!p-[0.65rem]">Stock</th>
                                                <th scope="col" class="!p-[0.65rem]">TotalSales</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td
                                                    class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                                                    <img src="../assets/img/ecommerce/products/13.png"
                                                        class="avatar avatar-sm p-2 rounded-full bg-gray-100 dark:bg-black/20 ltr:mr-2 rtl:ml-2"
                                                        alt="Image Description">Ethnic School bag for children (24L)
                                                </td>
                                                <td class="!p-[0.65rem]">Bags</td>
                                                <td class="!p-[0.65rem] text-sm"><span
                                                        class="badge leading-none bg-success/10 text-success rounded-sm">In
                                                        Stock</span></td>
                                                <td class="!p-[0.65rem]">
                                                    <span class="text-sm font-semibold">5,093</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                                                    <img src="../assets/img/ecommerce/products/14.png"
                                                        class="avatar avatar-sm p-2 rounded-full bg-gray-100 dark:bg-black/20 ltr:mr-2 rtl:ml-2"
                                                        alt="Image Description">Leather jacket for men (S,M,L,XL)
                                                </td>
                                                <td class="!p-[0.65rem]">Clothing</td>
                                                <td class="!p-[0.65rem] text-sm"><span
                                                        class="badge leading-none bg-success/10 text-success rounded-sm">In
                                                        Stock</span></td>
                                                <td class="!p-[0.65rem]">
                                                    <span class="text-sm font-semibold">6,890</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                                                    <img src="../assets/img/ecommerce/products/15.png"
                                                        class="avatar avatar-sm p-2 rounded-full bg-gray-100 dark:bg-black/20 ltr:mr-2 rtl:ml-2"
                                                        alt="Image Description">Childrens Teddy toy of high quality
                                                </td>
                                                <td class="!p-[0.65rem]">Toys</td>
                                                <td class="!p-[0.65rem] text-sm"><span
                                                        class="badge leading-none bg-danger/10 text-danger rounded-sm">Out
                                                        Of
                                                        Stock</span></td>
                                                <td class="!p-[0.65rem]">
                                                    <span class="text-sm font-semibold">5,423</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                                                    <img src="../assets/img/ecommerce/products/16.png"
                                                        class="avatar avatar-sm p-2 rounded-full bg-gray-100 dark:bg-black/20 ltr:mr-2 rtl:ml-2"
                                                        alt="Image Description">Orange smart watch (24mm)
                                                </td>
                                                <td class="!p-[0.65rem]">Fashion</td>
                                                <td class="!p-[0.65rem] text-sm"><span
                                                        class="badge leading-none bg-danger/10 text-danger rounded-sm">Out
                                                        Of
                                                        Stock</span></td>
                                                <td class="!p-[0.65rem]">
                                                    <span class="text-sm font-semibold">10,234</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                                                    <img src="../assets/img/ecommerce/products/17.png"
                                                        class="avatar avatar-sm p-2 rounded-full bg-gray-100 dark:bg-black/20 ltr:mr-2 rtl:ml-2"
                                                        alt="Image Description">Black Camera
                                                </td>
                                                <td class="!p-[0.65rem]">Electronic</td>
                                                <td class="!p-[0.65rem] text-sm"><span
                                                        class="badge leading-none bg-success/10 text-success rounded-sm">In
                                                        Stock</span></td>
                                                <td class="!p-[0.65rem]">
                                                    <span class="text-sm font-semibold">10,234</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                                                    <img src="../assets/img/ecommerce/products/18.png"
                                                        class="avatar avatar-sm p-2 rounded-full bg-gray-100 dark:bg-black/20 ltr:mr-2 rtl:ml-2"
                                                        alt="Image Description">Hand Bag For Ladies
                                                </td>
                                                <td class="!p-[0.65rem]">Fashion</td>
                                                <td class="!p-[0.65rem] text-sm"><span
                                                        class="badge leading-none bg-danger/10 text-danger rounded-sm">Out
                                                        Of
                                                        Stock</span></td>
                                                <td class="!p-[0.65rem]">
                                                    <span class="text-sm font-semibold">1,034</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex">
                                    <h5 class="box-title my-auto">Recent Order Details</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            View All <i class="ti ti-chevron-down"></i></button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Import</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Export</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                    <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                        <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80">S.no</th>
                                                <th scope="col" class="dark:text-white/80">Item Details</th>
                                                <th scope="col" class="dark:text-white/80">Customer ID</th>
                                                <th scope="col" class="dark:text-white/80 min-w-[300px]">Customer
                                                    Details</th>
                                                <th scope="col" class="dark:text-white/80">Ordered Date</th>
                                                <th scope="col" class="dark:text-white/80">Status</th>
                                                <th scope="col" class="dark:text-white/80">Price</th>
                                                <th scope="col" class="dark:text-white/80">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr class="">
                                                <td>1</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                        <img class="avatar rounded-sm bg-gray-100 dark:bg-black/20 p-2"
                                                            src="../assets/img/ecommerce/products/1.png"
                                                            alt="Image Description">
                                                        <div class="block w-full my-auto">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Black
                                                                Heals For Women</span>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal">#2343</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="!text-success font-semibold text-base">#user1</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse text-start">
                                                        <img class="avatar avatar-sm rounded-sm"
                                                            src="../assets/img/users/2.jpg" alt="Image Description">
                                                        <div class="block my-auto">
                                                            <p
                                                                class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">
                                                                Socrates
                                                                Itumay</p>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal my-auto">socratesitumay@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>10-12-2022</td>
                                                <td><span
                                                        class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                                                </td>
                                                <td>$999</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                            <i class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <i class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <i class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>2</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                        <img class="avatar rounded-sm bg-gray-100 dark:bg-black/20 p-2"
                                                            src="../assets/img/ecommerce/products/2.png"
                                                            alt="Image Description">
                                                        <div class="block w-full my-auto">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">White
                                                                Tshirt</span>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal">#5655</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="!text-success font-semibold text-base">#user2</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse text-start">
                                                        <img class="avatar avatar-sm rounded-sm"
                                                            src="../assets/img/users/3.jpg" alt="Image Description">
                                                        <div class="block my-auto">
                                                            <p
                                                                class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">
                                                                Json Taylor</p>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal my-auto">jsontaylor2416@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>11-12-2022</td>
                                                <td><span
                                                        class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-info/10 text-info/80">Shipping</span>
                                                </td>
                                                <td>$699</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                            <i class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <i class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <i class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>3</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                        <img class="avatar rounded-sm bg-gray-100 dark:bg-black/20 p-2"
                                                            src="../assets/img/ecommerce/products/3.png"
                                                            alt="Image Description">
                                                        <div class="block w-full my-auto">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Jacket
                                                                For Men</span>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal">#15245</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="!text-success font-semibold text-base">#user3</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse text-start">
                                                        <img class="avatar avatar-sm rounded-sm"
                                                            src="../assets/img/users/4.jpg" alt="Image Description">
                                                        <div class="block my-auto">
                                                            <p
                                                                class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">
                                                                Suzika Stallone</p>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal my-auto">suzikastallone3214@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12-12-2022</td>
                                                <td><span
                                                        class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-warning/10 text-warning/80">Out
                                                        For Delivery</span>
                                                </td>
                                                <td>$599</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                            <i class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <i class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <i class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>4</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                        <img class="avatar rounded-sm bg-gray-100 dark:bg-black/20 p-2"
                                                            src="../assets/img/ecommerce/products/4.png"
                                                            alt="Image Description">
                                                        <div class="block w-full my-auto">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Airpods</span>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal">#45415</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="!text-success font-semibold text-base">#user4</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse text-start">
                                                        <img class="avatar avatar-sm rounded-sm"
                                                            src="../assets/img/users/5.jpg" alt="Image Description">
                                                        <div class="block my-auto">
                                                            <p
                                                                class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">
                                                                Selena Deoyl</p>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal my-auto">selenadeoyl114@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12-12-2022</td>
                                                <td><span
                                                        class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-danger/10 text-danger/80">Cancelled</span>
                                                </td>
                                                <td>$299</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                            <i class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <i class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <i class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>5</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                        <img class="avatar rounded-sm bg-gray-100 dark:bg-black/20 p-2"
                                                            src="../assets/img/ecommerce/products/5.png"
                                                            alt="Image Description">
                                                        <div class="block w-full my-auto">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Jasmine
                                                                Fragrance</span>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal">#35656</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="!text-success font-semibold text-base">#user5</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse text-start">
                                                        <img class="avatar avatar-sm rounded-sm"
                                                            src="../assets/img/users/9.jpg" alt="Image Description">
                                                        <div class="block my-auto">
                                                            <p
                                                                class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">
                                                                Roman Killon</p>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal my-auto">romankillon143@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>13-12-2022</td>
                                                <td><span
                                                        class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary/10 text-primary/80">Ordered</span>
                                                </td>
                                                <td>$299</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                            <i class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <i class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <i class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>6</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                        <img class="avatar rounded-sm bg-gray-100 dark:bg-black/20 p-2"
                                                            src="../assets/img/ecommerce/products/6.png"
                                                            alt="Image Description">
                                                        <div class="block w-full my-auto">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Smart
                                                                Watch</span>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal">#622545</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="!text-success font-semibold text-base">#user6</td>
                                                <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse text-start">
                                                        <img class="avatar avatar-sm rounded-sm"
                                                            src="../assets/img/users/10.jpg"
                                                            alt="Image Description">
                                                        <div class="block my-auto">
                                                            <p
                                                                class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">
                                                                Charlie Davieson</p>
                                                            <span
                                                                class="block text-xs text-gray-400 dark:text-white/80 !font-normal my-auto">charliedavieson@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>13-12-2022</td>
                                                <td><span
                                                        class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-secondary/10 text-secondary/80">Packed</span>
                                                </td>
                                                <td>$299</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                            <i class="ti ti-eye"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <i class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <i class="ti ti-trash"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 --> --}}

            </div>
            <!-- Start::main-content -->

        </div>

        <!-- END MAIN-CONTENT -->

        <!-- SEARCH-MODAL -->

        <div id="search-modal" class="hs-overlay ti-modal hidden">
            <div class="ti-modal-box">
                <div class="ti-modal-content">
                    <div class="ti-modal-body">
                        <div class="header-search">
                            <label for="icon" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="search-btn">
                                    <i class="ri ri-search-2-line search-btn-icon"></i>
                                </div>
                                <input type="text" id="icon" name="icon"
                                    class="py-2 ltr:pl-11 rtl:pr-11 ti-form-input focus:z-10" placeholder="Search">
                                <div class="voice-search">
                                    <i class="ri ri-mic-2-line voice-btn-icon"></i>
                                </div>
                                <div class="search-dropdown">
                                    <i class="ri ri-more-2-line search-dropdown-btn-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="font-semibold text-[13px] text-gray-400 dark:text-gray-200 mb-2">Are You Looking
                                For...</p>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="team.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary mr-1"><i
                                            class="ri ri-user-line text-sm"></i></span>
                                    Team
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="form-elements.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary mr-1"><i
                                            class="ri ri-file-text-line text-sm"></i></span>
                                    Forms
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="vector-maps.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary mr-1"><i
                                            class="ri ri-map-pin-line text-sm"></i></span>
                                    Maps
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                                <a href="widgets.html"
                                    class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                                    <span class="inline-block text-secondary mr-1"><i
                                            class="ri ri-server-line text-sm"></i></span>
                                    Widgets
                                </a>
                                <a href="javascript:void(0);"
                                    class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                                    <span class="sr-only">Remove badge</span>
                                    <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="font-semibold text-sm text-gray-500 mb-2">Recent Search :</p>
                            <div
                                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 mb-1 relative header-box">
                                <a href="notifications.html" class="w-full my-auto items-center flex">
                                    <span class="text-sm">Notifications</span>
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </div>
                            <div
                                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 mb-1 relative header-box">
                                <a href="alerts.html" class="w-full my-auto items-center flex">
                                    <span class="text-sm">Alerts</span>
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </div>
                            <div
                                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 relative header-box">
                                <a href="tables.html" class="w-full my-auto items-center flex">
                                    <span class="text-sm">Tables</span>
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ti-modal-footer">
                        <div class="inline-flex rounded-md shadow-sm">
                            <button type="button"
                                class="ti-btn-group py-1 ti-btn-soft-primary dark:border-white/10">
                                Search
                            </button>
                            <button type="button" class="ti-btn-group py-1 ti-btn-primary dark:border-white/10">
                                Clear Recents
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END SEARCH-MODAL -->

        <!-- FOOTER -->
        @include('backend.layout.footer')
        <!-- END FOOTER -->

    </div>

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"> </div>

    @include('backend.layout.commonjs')
    @yield('script')

</body>

</html>
