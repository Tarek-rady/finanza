<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row" style="flex-wrap: nowrap">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><span class="brand-logo">

                <a href="javascript:void(0);" class="brand-logo">
                    <img src="{{ asset('site/img/logo.png')}}" style="max-width: 80%; height: auto;"  alt="logo" />

                </a>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">


            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


                <li class=" nav-item {{ areActiveRoutes(['categories.home']) }}"><a class="d-flex align-items-center" href="{{ route('admin.home') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">{{ __('models.home') }}</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">14</span></a>

                </li>




                {{-- admins   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.admins.index' , 'admin.admins.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.admins.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.admins') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\User::count() }})</span></a>
                </li>

                {{-- banners   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.banners.index' , 'admin.banners.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.banners.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.banners') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Banner::count() }})</span></a>
                </li>

                {{-- feautures   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.feautures.index' , 'admin.feautures.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.feautures.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.feautures') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Category::where('type' , 'feauture')->count() }})</span></a>
                </li>

                {{-- abouts   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.abouts.index' , 'admin.abouts.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.abouts.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.abouts') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Category::where('type' , 'about')->count() }})</span></a>
                </li>



                {{-- categories   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.categories.index' , 'admin.categories.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.categories.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.categories') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Category::where('type' , 'service')->count() }})</span></a>
                </li>

                {{-- services   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.services.index' , 'admin.services.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.services.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.services') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Service::count() }})</span></a>
                </li>

                {{-- works   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.works.index' , 'admin.works.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.works.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.works') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Project::count() }})</span></a>
                </li>



                {{-- clints   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.clints.index' , 'admin.clints.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.clints.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.clints') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Clint::where('type' , 'clint')->count() }})</span></a>
                </li>


                {{-- teams   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.teams.index' , 'admin.teams.create']) }}"><a class="d-flex align-items-center" href="{{ route('admin.teams.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.teams') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">({{ App\Models\Clint::where('type' , 'team')->count() }})</span></a>
                </li>



                 {{-- contact-us   --}}
                 <li class="nav-item {{ areActiveRoutes(['admin.contact-us']) }}"><a class="d-flex align-items-center" href="{{ route('admin.contact-us') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.contact_us') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">{{ App\Models\ContactUs::count() }}</span></a>
                 </li>

                {{-- server-email   --}}
                <li class="nav-item {{ areActiveRoutes(['admin.server-email']) }}"><a class="d-flex align-items-center" href="{{ route('admin.server-email') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.server_email') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">{{ App\Models\ServerEmail::count() }}</span></a>
                </li>

                {{-- setting   --}}
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="pie-chart"></i><span class="menu-title text-truncate" data-i18n="Charts">{{ __('models.setting') }}</span><span class="badge badge-light-danger badge-pill ml-auto mr-2">2</span></a>
                    <ul class="menu-content">


                        {{-- about-us   --}}
                        <li class="nav-item {{ areActiveRoutes(['admin.about']) }}"><a class="d-flex align-items-center" href="{{ route('admin.about') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.about_us') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">1</span></a>
                        </li>




                        {{-- setting-us   --}}
                        <li class="nav-item {{ areActiveRoutes(['admin.setting']) }}"><a class="d-flex align-items-center" href="{{ route('admin.setting') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">{{ __('models.setting') }}</span><span class="badge badge-light-primary badge-pill ml-auto mr-1">1</span></a>
                        </li>






                    </ul>
                </li>









            </ul>

    </div>
</div>
<!-- END: Main Menu-->
