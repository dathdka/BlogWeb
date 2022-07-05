<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('blog_template/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('/blog_template/css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blog_template/css/owl.theme.default.min.css') }}">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('blog_template/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('blog_template/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    @yield('custom_css')

</head>

<body>
    <div id="page">
        <nav class="colorlib-nav" role="navigation">

            <div class="top-menu" style="background-color:powderblue;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="{{ route('home') }}">Tin tức</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ route('categories.index') }}">Thể loại</a>
                                    <ul class="dropdown">
                                        @foreach($navbar_categories as $category)
                                        <li><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">Thông tin</a></li>
                                <li><a href="{{ route('contact.create') }}">Liên hệ</a></li>
                                <li>
                                </li>

                                @guest
                                <li class="btn-cta"><a href="{{ route('login') }}"><span>Đăng nhập</span></a></li>
                                <li class="btn-cta"><a href="{{ route('register') }}"><span>Đăng ký</span></a></li>
                                @endguest

                                @auth

                                <li class="has-dropdown">
                                    <a href="#">{{ auth()->user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown">
                                        @if (Auth::user()->role_id==2)
                                        <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                                        @endif
                                        <li>
                                            <a onclick="event.preventDefault();
                                            document.getElementById('nav-logout-form').submit()" href="#">Logout</a>

                                            <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>

                                        </li>

                                    </ul>
                                </li>

                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">

                </ul>
            </div>
        </aside>

        @yield('content')


        <footer id="colorlib-footer">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>Thông tin liên hệ</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="tel://0327227902"><i class="icon-phone"></i>0327.227.902</a></li>
                            <li><a href="mailto:dathdka@gmail.com"><i class="icon-envelope"></i> dathdka@gmail.com</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="copy">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">&copy;
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </small><br>
                                <small class="block">Demo blog_template/images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('blog_template/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('blog_template/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('blog_template/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('blog_template/js/jquery.waypoints.min.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('blog_template/js/jquery.stellar.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('blog_template/js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('blog_template/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('blog_template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('blog_template/js/magnific-popup-options.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('blog_template/js/jquery.countTo.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('blog_template/js/main.js') }}"></script>

    <script src="{{ asset('js/functions.js') }}"></script>
    @yield('custom_js')

</body>
<script>
        const searchInputDropdown = document.getElementById('search-input-dropdown');
        const dropdownOptions = document.querySelectorAll('.input-group-dropdown-item');

        searchInputDropdown.addEventListener('input', () => {
            const filter = searchInputDropdown.value.toLowerCase();
            showOptions();
            const valueExist = !!filter.length;

            if (valueExist) {
                dropdownOptions.forEach((el) => {
                    const elText = el.textContent.trim().toLowerCase();
                    const isIncluded = elText.includes(filter);
                    if (!isIncluded) {
                        el.style.display = 'none';
                    }
                });
            }
        });

        const showOptions = () => {
            dropdownOptions.forEach((el) => {
                el.style.display = 'flex';
            })
        }
    </script>
</html>