<aside class="app-sidebar" id="sidebar">

    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('assets/img/brand-logos/desktop-logo.png') }}" alt="logo" class="main-logo desktop-logo">
            <img src="{{ asset('assets/img/brand-logos/toggle-logo.png') }}" alt="logo" class="main-logo toggle-logo">
            <img src="{{ asset('assets/img/brand-logos/desktop-dark.png') }}" alt="logo" class="main-logo desktop-dark">
            <img src="{{ asset('assets/img/brand-logos/toggle-dark.png') }}" alt="logo" class="main-logo toggle-dark">
        </a>
    </div>

    <div class="main-sidebar " id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="main-menu">
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="ri-home-8-line side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="ri-home-8-line side-menu__icon"></i>
                        <span class="side-menu__label">Appointment</span>
                    </a>
                </li>

                <li class="slide  has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="ri-home-8-line side-menu__icon"></i>
                        <span class="side-menu__label">Setting</span>
                        <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide"><a href="{{ route('banner.list') }}" class="side-menu__item">Banner</a></li>
                        <li class="slide"><a href="index.html" class="side-menu__item">Footer</a></li>
                        <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">User Management<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                        <ul class="slide-menu child2">
                            <li class="slide"><a href="filemanager-list.html" class="side-menu__item">Permission</a></li>
                            <li class="slide"><a href="file-details.html" class="side-menu__item">Role</a>
                            <li class="slide"><a href="file-details.html" class="side-menu__item">Users</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
    </div>

</aside>