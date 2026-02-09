<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    {{-- Page Title --}}
    <title>
        @yield('title', 'baaboo Campus – The Netflix of Edutainment')
    </title>

    {{-- Basic SEO Meta --}}
    <meta name="description" content="@yield('meta_description', 'baaboo Campus is the curated, high-quality edutainment platform where real-world professionals teach the skills needed to thrive in an AI-driven economy.')">
    <meta name="keywords" content="@yield('meta_keywords', 'baaboo Campus, edutainment, online learning, AI skills, career growth, kids education')">

    {{-- Open Graph Meta --}}
    <meta property="og:title" content="@yield('og_title', trim(View::yieldContent('title', 'baaboo Campus – The Netflix of Edutainment')))">
    <meta property="og:description" content="@yield('og_description', View::yieldContent('meta_description', 'Clarity over Chaos: baaboo Campus brings a premium, Netflix-style learning experience for professionals, families, and kids.'))">
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:url" content="@yield('og_url', url()->current())" />
    <meta property="og:image" content="@yield('og_image', asset('frontend/assets/images/share/baaboo-campus-default.jpg'))" />
    <meta property="og:site_name" content="baaboo Campus" />

    {{-- Twitter Cards --}}
    <meta name="twitter:card" content="@yield('twitter_card', 'summary_large_image')" />
    <meta name="twitter:title" content="@yield('twitter_title', trim(View::yieldContent('og_title', 'baaboo Campus – The Netflix of Edutainment')))">
    <meta name="twitter:description" content="@yield('twitter_description', View::yieldContent('og_description', 'Clarity over Chaos: baaboo Campus brings a premium, Netflix-style learning experience for professionals, families, and kids.'))">
    <meta name="twitter:image" content="@yield('twitter_image', View::yieldContent('og_image', asset('frontend/assets/images/share/baaboo-campus-default.jpg')))">




    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k" />


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/core/libs.min.css" />

    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/font-awesome/css/all.min.css" />

    <!-- Iconly css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/iconly/css/style.css" />

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/animate.min.css" />

    <!-- SwiperSlider css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/swiperSlider/swiper.min.css" />

    <!-- Sweetlaert2 css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/sweetalert2/sweetalert2.min.css" />

    <!-- Streamit Design System Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/streamit.min.css?v=5.4.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom.min.css?v=5.4.0" />

    <!-- Rtl Css -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/rtl.min.css?v=5.4.0" /> --}}

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap"
        rel="stylesheet" />

    <!-- Phosphor icons  -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/phosphor-icons/Fonts/regular/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/phosphor-icons/Fonts/duotone/style.css" />

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/phosphor-icons/Fonts/fill/style.css" />

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/streamit-font/iconly.css" />

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom.css?{{ time() }}">
    @if (env('APP_ENV') == 'local')
        @vite('')
    @endif
</head>

<body class="custom-header-relative">
    <span class="screen-darken"></span>
    <!-- loader Start -->
    <!-- loader Start -->
    <div class="loader simple-loader">
        <div class="loader-body">
            <img src="{{ asset('/logo-w.webp') }}" alt="loader" class="img-fluid" width="300" />
        </div>
    </div>
    <!-- loader END -->
    <!-- loader END -->
    <main class="main-content">
        <!--Nav Start-->
        <header class="header-center-home header-default header-sticky">
            <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
                <div class="container-fluid navbar-inner">
                    <div class="d-flex align-items-center justify-content-between w-100 landing-header">
                        <div class="d-flex gap-3 gap-xl-0 align-items-center">
                            <div class="d-flex align-items-center gap-2 gap-md-3">
                                <div class="logo-default">
                                    <a class="navbar-brand text-primary me-0" href="{{ url('/') }}">
                                        <img class="img-fluid logo" src="{{ asset('logo-w.webp') }}" loading="lazy"
                                            alt="streamit" />
                                    </a>
                                </div>
                                
                                {{-- <div>
                                    <a href="{{ asset('frontend') }}/pricing-plan.html"
                                        class="subscribe-btn btn btn-warning-subtle py-1 py-md-2 px-2 px-ms-3">
                                        <span class="d-flex align-items-center gap-2 text-warning">
                                            <i class="ph-fill ph-crown align-middle fs-6"></i>
                                            <span class="d-xl-block d-none">{{ __('subscribe') }}</span>
                                        </span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Horizontal Menu Start -->
                        <nav id="navbar_main"
                            class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav py-xl-0 w-100">
                            <div class="container-fluid p-lg-0">
                                <div class="offcanvas-header px-0">
                                    <div class="navbar-brand ms-3">
                                        <div class="logo-default">
                                            <a class="navbar-brand text-primary me-0" href="{{ url('/') }}">
                                                <img class="img-fluid logo"
                                                    src="{{ asset('frontend') }}/assets/images/logo.png"
                                                    loading="lazy" alt="streamit" />
                                            </a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close float-end px-3"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <ul class="navbar-nav iq-nav-menu list-unstyled" id="header-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('website.index') }}">
                                            <div class="d-flex justify-content-between">
                                                <span class="item-name">{{ __('home') }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#browse" role="button"
                                            aria-expanded="false" aria-controls="browse">
                                            <div class="d-flex justify-content-between">
                                                <span class="item-name">{{ __('categories') }}</span>
                                                <span class="menu-icon">
                                                    <i class="ph ph-caret-down align-middle"></i>
                                                </span>
                                            </div>
                                        </a>
                                        <ul class="sub-nav collapse list-unstyled border rounded-3" id="browse">
                                            <ul class="list-unstyled ms-3 mt-1">
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse.genre', ['slug' => 'health-energy-center']) }}">
                                                        Health &amp; Energy Center
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse.genre', ['slug' => 'life-skills-academy']) }}">
                                                        Life Skills Academy
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse.genre', ['slug' => 'business-hall']) }}">
                                                        Business Hall
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse.genre', ['slug' => 'finance-wealth-institute']) }}">
                                                        Finance &amp; Wealth Institute
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse.genre', ['slug' => 'ai-digital-sphere']) }}">
                                                        AI &amp; Digital Sphere
                                                    </a>
                                                </li> --}}

                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse', ['filter' => 'new-releases']) }}">
                                                        {{ __('new_releases') }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('website.browse.genres') }}">
                                                        {{ __('all_categories') }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse', ['filter' => 'trending']) }}">
                                                        {{ __('trending') }}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('website.browse', ['filter' => 'top-rated']) }}">
                                                        {{ __('top_rated') }}
                                                    </a>
                                                </li>
                                            </ul>
                                    </li>

                                </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="collapse" href="#my-list" role="button"
                                        aria-expanded="false" aria-controls="my-list">
                                        <div class="d-flex justify-content-between">
                                            <span class="item-name">Continue Watching</span>
                                            <span class="menu-icon">
                                                <i class="ph ph-caret-down align-middle"></i>
                                            </span>
                                        </div>
                                    </a>
                                    <ul class="sub-nav collapse list-unstyled border rounded-3" id="my-list">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/watchlist.html">
                                                Watchlist
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/favorites.html">
                                                Favorites
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/history.html">
                                                Viewing History
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="collapse" href="#community" role="button"
                                        aria-expanded="false" aria-controls="community">
                                        <div class="d-flex justify-content-between">
                                            <span class="item-name">My List</span>
                                            <span class="menu-icon">
                                                <i class="ph ph-caret-down align-middle"></i>
                                            </span>
                                        </div>
                                    </a>
                                    <ul class="sub-nav collapse list-unstyled border rounded-3" id="community">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/forum.html">
                                                Forum
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/reviews.html">
                                                Reviews
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/blog.html">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/news.html">
                                                News
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="collapse" href="#account" role="button"
                                        aria-expanded="false" aria-controls="account">
                                        <div class="d-flex justify-content-between">
                                            <span class="item-name">Account</span>
                                            <span class="menu-icon">
                                                <i class="ph ph-caret-down align-middle"></i>
                                            </span>
                                        </div>
                                    </a>
                                    <ul class="sub-nav collapse list-unstyled border rounded-3" id="account">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/profile.html">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/settings.html">
                                                Settings
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/subscription.html">
                                                Purchases
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ asset('frontend') }}/help.html">
                                                Help Center
                                            </a>
                                        </li>
                                     
                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Horizontal Menu End -->
                        <div class="css_prefix-header-right d-flex align-items-center gap-2">
                            <ul
                                class="list-inline d-flex align-items-center gap-3 gap-md-4 mb-0 ps-0 justify-content-md-end justify-content-between">
                                <li class="nav-item dropdown iq-responsive-menu d-xl-block d-none">
                                    <div class="d-flex justify-content-end gap-2 px-3 py-2">
                                        <a href="{{ route('lang.switch', 'en') }}"
                                            class="btn btn-sm btn-outline-primary {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                                            EN
                                        </a>
                                        <a href="{{ route('lang.switch', 'de') }}"
                                            class="btn btn-sm btn-outline-primary {{ app()->getLocale() === 'de' ? 'active' : '' }}">
                                            DE
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown iq-responsive-menu d-xl-block d-none">
                                    <div class="search-box">
                                        <a href="#" class="nav-link p-0 text-white" id="search-drop"
                                            data-bs-toggle="dropdown">
                                            <div class="btn-icon btn-sm rounded-pill btn-action">
                                                <span class="btn-inner">
                                                    <i class="ph ph-magnifying-glass p-0"></i>
                                                </span>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu p-0 dropdown-search m-0 iq-search-bar"
                                            style="width: 20rem">
                                            <li class="p-0">
                                                <div class="d-flex justify-content-end gap-2 px-3 py-2">
                                                    <a href="{{ url()->current() }}?lang=en"
                                                        class="btn btn-sm btn-outline-primary {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                                                        EN
                                                    </a>
                                                    <a href="{{ url()->current() }}?lang=de"
                                                        class="btn btn-sm btn-outline-primary {{ app()->getLocale() === 'de' ? 'active' : '' }}">
                                                        DE
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="p-0">
                                                <div class="form-group input-group mb-0">
                                                    <input type="text" class="form-control border-0"
                                                        placeholder="Search..." />
                                                    <button type="submit" class="search-submit">
                                                        <i class="ph ph-magnifying-glass"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link shoping-cart-button text-white" href="javascript:void(0);"
                                        data-bs-toggle="offcanvas" data-bs-target="#shoping-cart-toggle"
                                        aria-controls="shoping-cart-toggle" aria-label="Open shopping cart">
                                        <i class="ph ph-bag p-0"></i>
                                        <span class="bg-primary text-white shopping-badge">0</span>
                                    </a>
                                </li> --}}
                                @guest
                                    <li class="ms-3 nav-item d-flex align-items-center  ">
                                        <a href="{{ route('login') }}"
                                            class="nav-link link-body-emphasis font-size-14  btn btn-primary">
                                            <i class="ph ph-sign-in"></i>
                                            <span class="fw-medium">Login</span>
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center gap-2">
                                        <a href="{{ route('register') }}"
                                            class="nav-link link-body-emphasis font-size-14 btn btn-outline-primary">
                                            <i class="ph ph-user-plus"></i>
                                            <span class="fw-medium">Register</span>
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown cust-itemdropdown1" id="itemdropdown1">
                                        <a class="nav-link d-flex align-items-center p-0" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <div class="st-avatar style-1">
                                                {{-- <img src="{{ asset('frontend') }}/assets/images/user/user6.jpg"
                                                    alt="{{ Auth::user()->name ?? 'User' }}"
                                                    class="img-fluid rounded-circle dropdown-user-menu-image header-user-image" /> --}}

                                                <i class="placeholder-icon ph ph-user-circle"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-user-menu dropdown-menu-end border border-gray-900 rounded-3"
                                            data-popper-placement="bottom-end"
                                            style="
                                                position: absolute;
                                                inset: 0px 0px auto auto;
                                                margin: 0px;
                                                transform: translate(0px, 74px);
                                            ">
                                            <div class="user-dropdown-inner">
                                                <!-- User Info -->
                                                <div class="d-flex align-items-center gap-3 rounded mb-4">
                                                    <div class="image flex-shrink-0">
                                                        {{-- <img src="{{ asset('frontend') }}/assets/images/user/user6.jpg"
                                                            class="img-fluid rounded-3 dropdown-user-menu-image"
                                                            alt="{{ Auth::user()->name ?? 'User' }}" /> --}}
                                                        <i class="placeholder-icon ph ph-user-circle"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h6 class="mb-1">
                                                            {{ Auth::user()->name ?? 'User' }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <!-- Menu Items -->
                                                @if (auth()->user()->role === 'admin')
                                                    <div class="mb-3">
                                                        <a href="{{ route('admin.dashboard') }}"
                                                            class="btn btn-outline-primary w-100 text-center">
                                                            <span
                                                                class="d-flex align-items-center justify-content-center gap-2 fw-medium">
                                                                <i class="ph ph-shield-checkered"></i>
                                                                Admin Dashboard
                                                            </span>
                                                        </a>
                                                    </div>
                                                @elseif (auth()->user()->role === 'creator')
                                                    <ul class="d-flex flex-column gap-3 list-inline m-0 p-0">
                                                        <li>
                                                            <a href="{{ route('profile.edit') }} "
                                                                class="link-body-emphasis font-size-14 d-flex align-items-center gap-2">
                                                                <i class="ph ph-user"></i>
                                                                <span class="fw-medium">Profile</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('creator.dashboard') }}"
                                                                class="link-body-emphasis font-size-14 d-flex align-items-center gap-2">
                                                                <i class="ph ph-plus"></i>
                                                                <span class="fw-medium"> CMS</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                @elseif (auth()->user()->role === 'user')
                                                    <ul class="d-flex flex-column gap-3 list-inline m-0 p-0">
                                                        <li>
                                                            <a href="{{ route('profile.edit') }}"
                                                                class="link-body-emphasis font-size-14 d-flex align-items-center gap-2">
                                                                <i class="ph ph-user"></i>
                                                                <span class="fw-medium">Profile</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('frontend') }}/watchlist-detail.html"
                                                                class="link-body-emphasis font-size-14 d-flex align-items-center gap-2">
                                                                <i class="ph ph-plus"></i>
                                                                <span class="fw-medium">Watch
                                                                    List</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('frontend') }}/archive-playlist.html"
                                                                class="link-body-emphasis font-size-14 d-flex align-items-center gap-2">
                                                                <i class="ph ph-playlist"></i>
                                                                <span class="fw-medium">Playlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('frontend') }}/profile-marvin.html"
                                                                class="link-body-emphasis font-size-14 d-flex align-items-center gap-2">
                                                                <i class="ph ph-bell"></i>
                                                                <span class="fw-medium">Notification</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                @else
                                                @endif
                                            </div>
                                            <!-- Logout -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-link p-3 d-block font-size-14 text-center text-decoration-none border-top"
                                                    style="width: 100%;">
                                                    <span
                                                        class="d-flex align-items-center justify-content-center gap-2 fw-medium">
                                                        <i class="ph ph-sign-out"></i>
                                                        Logout
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                            <button class="navbar-toggler d-block d-xl-none text-white" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#navbar_main" aria-controls="navbar_main">
                                <i class="ph ph-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        {{-- <div class="offcanvas overflow-y-auto widget-shopping-cart-content offcanvas-end offcanvas-sidebar sidebar-container on-rtl end border-0"
            tabindex="-1" id="shoping-cart-toggle">
            <div class="offcanvas-header position-relative">
                <h5 class="offcanvas-title fw-500" id="offcanvasExampleLabel">
                    Shopping cart (
                    <span class="streamit-cart-count" aria-live="polite">1</span>
                    )
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="product-list-content">
                    <ul class="list-unstyled mb-0">
                        <li class="mini-cart-item d-flex align-items-start gap-3">
                            <div class="cart-img">
                                <a href="{{ asset('frontend') }}/shop/cart.html" aria-label="Bag Pack">
                                    <img src="{{ asset('frontend') }}/assets/images/shop/product/01.webp"
                                        class="img-fluid" width="300" height="400" alt="Bag Pack" />
                                </a>
                            </div>
                            <div class="cart-content flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="d-block" href="{{ asset('frontend') }}/shop/product-detail.html"
                                        aria-label="Bag Pack">
                                        <h6 class="fw-500">Bag Pack</h6>
                                    </a>
                                    <a href="javascript:void(0)" class="delete-btn">
                                        <i class="ph ph-trash text-primary"></i>
                                    </a>
                                </div>
                                <div class="product-price text-muted">
                                    <span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">₹</span>11.05</span></span>
                                </div>
                                <div class="btn-group iq-qty-btn custom-qty-btn rounded-3" data-qty="btn"
                                    role="group">
                                    <button type="button"
                                        class="btn btn-sm btn-outline-light iq-quantity-minus text-white border-0">
                                        <i class="ph ph-minus"></i>
                                    </button>
                                    <input type="text" class="btn btn-sm btn-outline-light input-display border-0"
                                        data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2"
                                        value="2" title="Qty" />
                                    <button type="button"
                                        class="btn btn-sm btn-outline-light iq-quantity-plus text-white border-0">
                                        <i class="ph ph-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas-footer border-top py-3 px-3">
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <strong>Subtotal:</strong>
                    <span class="st-woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">₹</span>11.05</span></span>
                </div>
                <div class="mini-cart-buttons d-flex flex-column align-items-center gap-3 mt-4">
                    <div class="iq-button w-100">
                        <a href="{{ asset('frontend') }}/shop/checkout.html"
                            class="btn btn-primary text-capitalize w-100 rounded-3">
                            <span class="button-text">Checkout</span>
                        </a>
                    </div>
                    <div class="w-100">
                        <a href="{{ asset('frontend') }}/shop/cart.html"
                            class="btn btn-secondary text-capitalize w-100 rounded-3">
                            <span class="button-text">View Cart</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--Nav End-->

        <!--bread-crumb-->
        <!--bread-crumb-->
        {{ $slot }}
    </main>

    <footer class="footer footer-default">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-logo">
                            <!--Logo -->
                            <div class="logo-default">
                                <a class="navbar-brand text-primary me-0" href="{{ url('/') }}">
                                    <img class="img-fluid logo" src="{{ asset('/logo-w.webp') }}" loading="lazy"
                                        alt="streamit">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div>
                        Email us:
                        <span class="text-white">customer@ogcampus.com</span>
                    </div>
                    <p class="mt-0 mb-2">Helpline Number</p>
                    <a href="tel:+4805550103" class="helpline">+(480) 555-0103</a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h4 class="footer-link-title text-capitalize">
                        Movies to Watch
                    </h4>
                    <ul class="list-unstyled footer-menu mb-0">
                        <li>
                            <a class="text-capitalize" href="{{ asset('frontend') }}/view-all-movie.html"><span>Top
                                    trending</span></a>
                        </li>
                        <li>
                            <a class="text-capitalize"
                                href="{{ asset('frontend') }}/view-all-movie.html"><span>Recommended</span></a>
                        </li>
                        <li>
                            <a class="text-capitalize"
                                href="{{ asset('frontend') }}/view-all-movie.html"><span>Popular</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h4 class="footer-link-title text-capitalize">
                        Quick Links
                    </h4>
                    <ul class="list-unstyled footer-menu mb-0">
                        <li>
                            <a class="text-capitalize" href="{{ asset('frontend') }}/contact-us.html"><span>contact
                                    us</span></a>
                        </li>
                        <li>
                            <a class="text-capitalize" href="{{ asset('frontend') }}/pricing-plan.html"><span>Pricing
                                    Plan</span></a>
                        </li>
                        <li>
                            <a class="text-capitalize"
                                href="{{ asset('frontend') }}/blog/blog-listing.html"><span>Blog</span></a>
                        </li>
                        <li>
                            <a class="text-capitalize" href="{{ asset('frontend') }}/faq.html"><span>FAQ</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h4 class="footer-link-title text-capitalize">
                        About company
                    </h4>
                    <ul class="list-unstyled footer-menu mb-0">
                        <li>
                            <a class="text-capitalize" href="{{ asset('frontend') }}/about-us.html"><span>about
                                    us</span></a>
                        </li>
                        <li>
                            <a class="text-capitalize"
                                href="{{ asset('frontend') }}/shop/shop.html"><span>shop</span></a>
                        </li>
                        <li>
                            <a class="" href="{{ asset('frontend') }}/terms-of-use.html"><span>Terms and
                                    Use</span></a>
                        </li>
                        <li>
                            <a class="text-capitalize"
                                href="{{ asset('frontend') }}/privacy-policy.html"><span>privacy
                                    policy</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4 class="footer-link-title text-capitalize">
                        Subscribe Newsletter
                    </h4>
                    <div class="mailchimp mailchimp-dark">
                        <div class="input-group">
                            <input type="text" class="form-control mb-0" placeholder="Email"
                                aria-describedby="button-addon2" />
                            <div class="iq-button">
                                <button type="submit" class="btn btn-primary st-subscribe-btn" id="button-addon2">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 widget-streamit-social-media mt-4">
                        <h3 class="font-size-14 widget-streamit-social-media-title">
                            Follow Us:
                        </h3>
                        <div class="social-footer">
                            <ul class="m-0 d-inline list-unstyled widget_social_media d-flex gap-2 flex-wrap">
                                <li>
                                    <a href="https://www.facebook.com/" class="position-relative">
                                        <i class="icon icon-facebook-share"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" class="position-relative">
                                        <i class="ph ph-x-logo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" class="position-relative">
                                        <i class="ph ph-instagram-logo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/" class="position-relative">
                                        <i class="ph-fill ph-linkedin-logo"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="font-size-14 mb-0">
                            © <span class="currentYear"></span>
                            <span class="text-primary">STREAMIT.</span> All
                            Rights Reserved. All videos and shows on this
                            platform are trademarks of, and all related
                            images and content are the property of, Streamit
                            Inc. Duplication and copy of this is strictly
                            prohibited.
                        </p>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5">
                        <div class="d-flex flex-column align-items-start align-items-md-end widget-iq-download-app">
                            <h6 class="mb-3 fw-bold">
                                Download Streamit App
                            </h6>
                            <div>
                                <ul class="d-inline-flex flex-wrap align-items-center list-inline m-0 p-0 gap-3">
                                    <li class="m-0 p-0">
                                        <a class="app-image" href="#">
                                            <img src="{{ asset('frontend') }}/assets/images/footer/play-store.webp"
                                                loading="lazy" alt="play-store" />
                                        </a>
                                    </li>
                                    <li class="m-0 p-0">
                                        <a class="app-image" href="#">
                                            <img src="{{ asset('frontend') }}/assets/images/footer/app-store.webp"
                                                loading="lazy" alt="app-store" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   
    <div id="back-to-top" class="back-to-top" style="display: none">
        <a class="p-0 btn bg-primary btn-sm position-fixed top border-0 rounded-circle text-white" id="top"
            href="#top">
            <i class="ph ph-caret-up fw-bold"></i>
        </a>
    </div>
    <!-- Wrapper End-->
    <!-- Library Bundle Script -->
    <script src="{{ asset('frontend') }}/assets/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->

    <!-- Sweet-alert Script -->
    <script src="{{ asset('frontend') }}/assets/vendor/sweetalert2/sweetalert2.min.js" async></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/sweet-alert.js" defer></script>

    <!-- SwiperSlider Script -->
    <script src="{{ asset('frontend') }}/assets/vendor/swiperSlider/swiper.min.js"></script>

    <!-- Select2 Script -->
    <script src="{{ asset('frontend') }}/assets/js/plugins/select2.js" defer></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('frontend') }}/assets/js/plugins/fslightbox.js" defer></script>
    <!-- Lodash Utility -->
    <script src="{{ asset('frontend') }}/assets/vendor/lodash/lodash.min.js"></script>
    <!-- External Library Bundle Script -->
    <script src="{{ asset('frontend') }}/assets/js/core/external.min.js"></script>
    <!-- countdown Script -->
    <script src="{{ asset('frontend') }}/assets/js/plugins/countdown.js"></script>
    <!-- utility Script -->
    <script src="{{ asset('frontend') }}/assets/js/utility.js"></script>
    <!-- Setting Script -->
    <script src="{{ asset('frontend') }}/assets/js/setting.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/setting-init.js" defer></script>
    <!-- Streamit Script -->
    <script src="{{ asset('frontend') }}/assets/js/streamit.js" defer></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper.js" defer></script>
</body>

</html>
