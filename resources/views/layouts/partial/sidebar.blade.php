<div class="sidebar" data-color="purple" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

{{--    <div class="logo">--}}
{{--        <a href="{{ route('welcome') }}" class="simple-text">--}}
{{--            Mamma's Kitchen--}}
{{--        </a>--}}
{{--    </div>--}}

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                <a href="{{ route('slider.index') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/category*') ? 'active': '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Categories</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/item*') ? 'active': '' }}">
                <a href="{{ route('item.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Items</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Reservations</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Contact Message</p>
                </a>
            </li>

        </ul>
    </div>
</div>



{{--<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">--}}
{{--<div class="sidebar" data-color="purple" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">--}}

{{--    <div class="logo">--}}
{{--        <a href="http://www.creative-tim.com" class="simple-text logo-normal">--}}
{{--            Creative Tim--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="sidebar-wrapper">--}}
{{--        <ul class="nav">--}}
{{--            <li class="nav-item active  ">--}}
{{--                <a class="nav-link" href="./dashboard.html">--}}
{{--                    <i class="material-icons">dashboard</i>--}}
{{--                    <p>Dashboard</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="./user.html">--}}
{{--                    <i class="material-icons">person</i>--}}
{{--                    <p>User Profile</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="./tables.html">--}}
{{--                    <i class="material-icons">content_paste</i>--}}
{{--                    <p>Table List</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="./typography.html">--}}
{{--                    <i class="material-icons">library_books</i>--}}
{{--                    <p>Typography</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="./icons.html">--}}
{{--                    <i class="material-icons">bubble_chart</i>--}}
{{--                    <p>Icons</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="./map.html">--}}
{{--                    <i class="material-icons">location_ons</i>--}}
{{--                    <p>Maps</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="./notifications.html">--}}
{{--                    <i class="material-icons">notifications</i>--}}
{{--                    <p>Notifications</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="./rtl.html">--}}
{{--                    <i class="material-icons">language</i>--}}
{{--                    <p>RTL Support</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item active-pro ">--}}
{{--                <a class="nav-link" href="./upgrade.html">--}}
{{--                    <i class="material-icons">unarchive</i>--}}
{{--                    <p>Upgrade to PRO</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
