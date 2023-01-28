@php
    use App\Models\Setting;
    $setting = Setting::findOrFail(1);
@endphp
<body class="app ">
    <div id="spinner"></div>
    <div id="app" class="page">
        <div class="main-wrapper page-main" >
            <nav class="navbar navbar-expand-lg main-navbar">
                <a class="header-brand" href="index.html">
                    <img src="{{ asset('front/images/') }}/{{ $setting->logo }}" class="header-brand-img" alt="semicolon admin logo">
                </a>
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-navicon"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
                    </ul>

                    <div class="form-inline mr-auto horizontal" id="headerMenuCollapse">
                        <div class=" d-none d-lg-block">
                            <ul class="navbar-nav">
                                <li>
                                    <a href="/" target="_blank" class="nav-link nav-link-lg"><i class="fa fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>

                <ul class="navbar-nav navbar-right ">
                    <li class=""><a href="#" class=" "></a>
                        <form class="form-inline mr-auto">
                            <div class="search-element">
                                <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                <button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown dropdown-list-toggle">
                        <a href="#" class="nav-link nav-link-lg full-screen-link">
                            <i class="fa fa-expand"  id="fullscreen-button"></i>
                        </a>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                        <img src="{{ asset('front/images/face/') }}/@if(auth()->user()->img == null)1.jpg @else{{ auth()->user()->img }} @endif" alt="profile-user" class="rounded-circle w-32">
                        <div class="d-sm-none d-lg-inline-block"> {{ auth()->user()->name }} </div></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a href="profile.html" class="dropdown-item has-icon">
                                <i class="ion ion-android-person"></i> Profile
                            </a> --}}
                            <a href="/admin/Account" class="dropdown-item has-icon">
                                <i class="ion ion-gear-a"></i> إعدادات الحساب
                            </a>

                            <a form="logout-form" href="javascipt:void(0)" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item has-icon">
                                <i class="ion-ios-redo"></i> تسجيل الخروج
                            </a>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}" >
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
