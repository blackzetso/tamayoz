<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown">
            <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
                <img alt="image" src="{{ asset('dashboard/assets/img/avatar/avatar-1.jpeg') }}" class=" avatar-md rounded-circle">
                <span class="ml-2 d-lg-block">
                    <span class="text-dark app-sidebar__user-name mt-5"> {{ Auth::user()->name }} </span><br>
                    <span class="text-muted app-sidebar__user-name text-sm"> Super Admin </span>
                </span>
            </a>
        </div>
    </div>
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" href="/admin"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label"> لوحة التحكم </span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-layout"></i><span class="side-menu__label"> الصفحة الرئيسية   </span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/admin/sliders" class="slide-item"> عرض الشرائح</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="/admin/categories"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label"> اقسام الخدمات </span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="/admin/portfolios"><i class="side-menu__icon ti-bag"></i><span class="side-menu__label"> إدارة معرض الأعمال  </span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="/admin/services"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label"> إدارة الخدمات </span></a>
        </li>
        {{-- <li class="slide">
            <a class="side-menu__item" href="/admin/trainings"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label"> التدريب </span></a>
        </li> --}}
        {{-- <li class="slide">
            <a class="side-menu__item" href="/admin/blogs"><i class="side-menu__icon fa fa-rss"></i><span class="side-menu__label"> المدونه  </span></a>
        </li> --}}
 
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-gear"></i><span class="side-menu__label"> الإعدادات </span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/admin/settings" class="slide-item"> الإعدادات العامه </a></li>
                <li><a href="/admin/about" class="slide-item"> من نحن </a></li>
                <li><a href="/admin/contact" class="slide-item"> اتصل بنا </a></li>
                <li><a href="/admin/team" class="slide-item"> فريق العمل </a></li>
                <li><a href="/admin/clients" class="slide-item"> العملاء </a></li>
                <li><a href="/admin/testimonials" class="slide-item"> آراء العملاء </a></li>
                <li><a href="/admin/socials" class="slide-item"> social links </a></li>
            </ul>
        </li>

        {{-- <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="chartjs.html" class="slide-item">Chart Js</a></li>
                <li><a href="flotcharts.html" class="slide-item"> Flot Charts</a></li>
                <li><a href="barcharts.html" class="slide-item"> Bar Charts</a></li>
                <li><a href="echart.html" class="slide-item"> ECharts</a></li>
                <li><a href="chartist.html" class="slide-item"> Chartist</a></li>
                <li><a href="morris.html" class="slide-item"> Morris Charts</a></li>
                <li><a href="othercharts.html" class="slide-item"> Other Charts</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="maps.html" class="slide-item"> Google Maps</a></li>
                <li><a href="vector-map.html" class="slide-item">Vector Maps</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-pie-chart"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="profile.html" class="slide-item"> Profile</a></li>
                <li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
                <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                <li><a href="shop.html" class="slide-item"> Shop</a></li>
                <li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
                <li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
                <li><a href="register.html" class="slide-item"> Register</a></li>
                <li><a href="login.html" class="slide-item"> Login</a></li>
                <li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
                <li><a href="reset.html" class="slide-item"> Reset Password</a></li>
                <li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
                <li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
                <li><a href="404.html" class="slide-item"> 404</a></li>
                <li><a href="505.html" class="slide-item"> 505</a></li>
                <li><a href="emptypage.html" class="slide-item"> Empty  Page</a></li>
            </ul>
        </li> --}}

    </ul>
</aside>
