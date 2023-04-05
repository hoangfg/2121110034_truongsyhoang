<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300;1,500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css') }}"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/assets/owl.theme.default.min.css') }}">
    <!-- javascript -->
    <script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/owlcarousel/owl.carousel.js') }}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    @yield('header')
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">

</head>

<body>

    <header class="header bg-white" >
        <div class="container ">
            <div class="row py-3 border-2 border-bottom m-0">
                <!-- logo -->
                <div class="col-md-2 col-6  my-auto">
                    <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/11/logo-default.png"
                        alt="logo" class="img-fluid rounded-top">
                </div>
                <div class="col-md-1 d-md-block d-none"></div>
                <div class="col-md-7 d-md-block d-none my-auto">
                    <div class="row">
                        <div class="header-search col-md-12 ">
                            <div class="input-group">
                                <input type="text" class="form-control py-4 fs-4" placeholder="Search"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <span class="input-group-text px-4" id="basic-addon2">
                                    <i class="fa-solid fa-magnifying-glass fs-4"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-2 col-6 my-auto cart">
                    <div class="d-grid gap-2" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn bg-success py-3 cart-item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="">Giỏ hàng</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- carousel -->
            @includeIf('layouts.site_menu', ['some' => 'data'])
        </div>
    </header>

    @yield('content')

    <footer class="footer py-5">
        <ul class="list-fixed brand-sale position-fixed ">
            <li>
                <a data-bs-target="#left-menu" data-bs-toggle="offcanvas" type='button'
                    class='btn btn-circle list-fixed-btn d-lg-none'><span class='fa-solid fa-bars'></span></a>
            </li>

        </ul>
        <div class="top_footer bg-dark ">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 title-newletter pull-left">
                        <h2>Nhập email của bạn</h2>
                        <span>
                            Để nhận được những thông báo ưu đãi từ dịch vụ của chúng tôi!
                        </span>
                    </div>
                    <div class="col-md-7 col-12 form ">
                        <form action="#">
                            <div class="form-fields">
                                <input class="form-email" type="email" name="EMAIL" placeholder="Enter your email"
                                    required="">
                                <button class="form-submit fa fa-paper-plane" type="submit" value="subscribe"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mid-footer mt-5">
            <div class="container p-0">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <h3 class="d-md-none d-block border-1">Liên hệ</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item footer-custom__item">
                                            <div class="customer-logo py-3">
                                                <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/11/logo-default.png"
                                                    alt="logo" class="img-fluid rounded-top " width="140px">
                                            </div>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span class="txt_contact">
                                                <span class="mb-3 ">
                                                    Địa chỉ cửa hàng:
                                                </span>
                                                <br />
                                                Cao Đẳng Công Thương TPHCM
                                            </span>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span class="txt_contact">
                                                <span class="footer-custom__item--hotline">Hotline: </span><a
                                                    href="0918146697" class="footer-custom__item--link">0918146697</a>
                                            </span>
                                            <span class="line"> | </span>
                                            <span class="txt_contact">
                                                <span class="footer-custom__item--Email">Email: </span>
                                                <a href="mailto:h0918146697@gmail.com"
                                                    class="footer-custom__item--link">h0918146697@gmail.com
                                                </a>
                                            </span>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span>Web: </span>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span>Theo dõi chúng tôi: </span>
                                            <div class="social_footer">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="#"><i
                                                                class="fab fa-facebook-f "></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#"><i
                                                                class="fab fa-twitter "></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#"><i
                                                                class="fab fa-instagram "></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link "><i class="fab fa-youtube "></i></a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 col-12 ">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <h3 class="d-md-none d-block border-1">Về chúng tôi</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav1">

                                    <ul class="navbar-nav">
                                        <h3 class="d-none d-md-inline fs-1 my-4">Về chúng tôi</h3>

                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link ">Trang chủ
                                            </a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Sản phẩm</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Tin tức</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 col-12 ">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <h3 class="d-md-none d-block border-1">Chính sách</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav2">

                                    <ul class="navbar-nav">
                                        <h3 class="d-none d-md-inline fs-1 my-4">Chính sách</h3>

                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link ">Trang chủ
                                            </a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Sản phẩm</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Tin tức</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 col-12 ">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <h3 class="d-md-none d-block border-1">Thông tin</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav3" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav3">

                                    <ul class="navbar-nav">
                                        <h3 class="d-none d-md-inline fs-1 my-4">Thông tin</h3>

                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link ">Trang chủ
                                            </a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Sản phẩm</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Tin tức</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12 text-center m-auto" id="copyright">
                    <span>
                        Người thực hiện: <b>Trương Sỹ Hoàng</b>
                    </span>
                </div>

                <div class="col-md-9 col-12 mx-auto">
                    <ul class="nav mt-3 mt-md-0">
                        <li class="nav-item mx-auto">
                            <a class="nav-link active " aria-current="page" href="#">Trang chủ
                            </a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">Tin tức</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- script -->
    <script>
        $(document).ready(function() {
            $('.new_book_carousel').owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                // tắt chấm tròn dưới carousel
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    600: {
                        items: 4,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 6,
                        nav: false,
                        loop: false
                    }
                }
            })
            $('.book_carousel').owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                // tắt chấm tròn dưới carousel
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    600: {
                        items: 4,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 6,
                        nav: false,
                        loop: false
                    }
                }
            })

            $('.owl-carousel_flash_sale').owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                // tắt chấm tròn dưới carousel
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        loop: false
                    },
                    600: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })

            $('.owl-carousel_3').owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                // tắt chấm tròn dưới carousel
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        loop: false
                    },
                    600: {
                        items: 3,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 2,
                        nav: false,
                        loop: false
                    }
                }
            })
            $(".author_carousel").owlCarousel({
                margin: 10,
                nav: true,
                loop: false,
                // tắt chấm tròn dưới carousel
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 3,
                        nav: false,
                    },
                    1000: {
                        items: 1,

                        loop: false,
                        margin: 20,
                    },
                },
            });
            $(".owl-carousel-parent").each((i, e) => {
                const owl = $(e).find(".owl-carousel");

                $(e).find(".next-btn").click(function(e) {
                    owl.trigger('next.owl.carousel');
                })
                $(e).find(".back-btn").click(function(e) {
                    owl.trigger('prev.owl.carousel');
                })

            })
        });
    </script>
    {{-- sort --}}
    <script>
        $(document).ready(function() {
            $('#sort').on('change', function() {
                var url = $(this).val();

                if (url) {
                    window.location = url;
                }
                return false;
            });
        });
    </script>
    {{-- range --}}

    {{-- list category --}}
    <script>
        $(function() {
            $("#menu").menu({
                items: "> :not(.ui-widget-header)"
            });
        });
    </script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- vendors -->
    <script src="{{ asset('assets/vendors/highlight.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('js/sticky.js') }}"></script>
    @yield('footer')
</body>

</html>
