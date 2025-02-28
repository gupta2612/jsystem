<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="build/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="build/images/logo-dark.png" alt="" height="22">
            </span>
        </a>
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="build/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="build/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover shadow-none" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a href="apps-calendar" class="nav-link menu-link"><i class="ti ti-brand-google-home"></i> <span data-key="t-admin-dashboard">@lang('translation.admin-dashboard')</span> </a>
                </li>

                <li class="menu-title"><i class="ti ti-dots"></i> <span data-key="t-apps">@lang('translation.apps')</span></li>


                <li class="nav-item">
                    <a href="app-submittedms" class="nav-link menu-link"><i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">@lang('translation.submitted-resubmitted')</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-calendar" class="nav-link menu-link"><i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">@lang('translation.require-revision')</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-calendar" class="nav-link menu-link"><i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">@lang('translation.accepted')</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-calendar" class="nav-link menu-link"><i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">@lang('translation.rejected')</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-calendar" class="nav-link menu-link"><i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">@lang('translation.accpeted-by-editor')</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-calendar" class="nav-link menu-link"><i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">@lang('translation.published')</span> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ti ti-brand-stackshare"></i> <span data-key="t-multi-level">@lang('translation.users')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1">@lang('translation.all') @lang('translation.authors') </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1">@lang('translation.all') @lang('translation.reviewers') </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1">@lang('translation.editors') </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
