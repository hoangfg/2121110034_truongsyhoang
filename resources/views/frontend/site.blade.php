<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300;1,500&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css')}}" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">
    <!-- javascript -->
    <script src="{{asset('assets/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/owlcarousel/owl.carousel.js')}}"></script>

</head>

<body>
    <section class="mainmenu my-2">
        <div class="container-fluid">
            <div class="row border-2 border-top border-dark border-bottom ">
                <div class="col-md-12 col-12  main-md-menu fs-4">
                    <nav class="navbar  navbar-expand-lg " >
                        <button data-bs-target="#navbar_main" data-bs-toggle="offcanvas" class="d-lg-none btn btn-outline-success navbar-toggler ms-auto" type="button">
                            <span class=" navbar-toggler-icon"></span>
                        </button>
                        <div id="navbar_main" class="offcanvas offcanvas-md offcanvas-start ">
                            <div class="offcanvas-header">
                                <span class="offcanvas-title">
                                    
                                        <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/11/logo-default.png" alt="logo" class="img-fluid rounded-top my-auto" width="200px">
                                    
                                </span>
                                <button class="btn-close float-end" data-bs-dismiss="offcanvas"></button>
                            </div>

                            <div class="offcanvas-body">
                                <div class="col-md-9 col-12">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="./index.html">Trang ch???</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="./index-GioiThieu.html">Gi???i thi???u</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                S???n ph???m
                                            </a>
                                            <!-- <a href="https://ln.hako.vn/" class="position-absolute" style='inset:0'></a> -->
                                            <ul class="dropdown-menu fs-5">
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="./index-KhuyenMai.html">S??ch khuy???n m??i</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="./index-NoiBat.html">S??ch n???i b???t</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="#">S??ch kinh t???</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="#">S??ch k??? n??ng</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="#">T???p ch??</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="#">Truy???n tranh</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="#">S??ch thi???u nhi</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 border-bottom" href="#">S??ch th?????ng th???c</a></li>
                                                <li><a class="dropdown-item py-3 fs-4 " href="#">S??ch v??n h???c</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="./intex-TinTuc.html">Tin t???c</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="./index-LienHe.html">Li??n h???</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-12">
                                    <ul class="navbar-nav float-md-end">
                                        <li class="nav-item me-5"><a class="nav-link " href="index.php?option=customer-login"><i class="fa-solid fa-arrow-right-to-bracket me-2"></i>????ng nh???p</a></li>
                                        <li class="nav-item"><a class="nav-link " href="index.php?option=customer-signup"><i class="fa-sharp fa-solid fa-user-plus me-2"></i>????ng k??</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 d-md-none d-block">
                                    <div class="input-group py-2 ">
                                        <input type="text" class="form-control fs-3" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                        <span class="input-group-text px-4" id="basic-addon2">
                                            <i class="fa-solid fa-magnifying-glass fs-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- container-fluid.// -->
                    </nav>
                </div>
            </div>
        </div>

    </section>
    <section class="header">
        <div class="container-fluid ">
            <div class="row py-3 border-2 border-bottom m-0">
                <!-- logo -->
                <div class="col-md-2 col-6  my-auto">
                    <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/11/logo-default.png" alt="logo" class="img-fluid rounded-top">
                </div>
                <div class="col-md-1 d-md-block d-none"></div>
                <div class="col-md-7 d-md-block d-none my-auto">
                    <div class="row">
                        <div class="header-search col-md-12 ">
                            <div class="input-group">
                                <input type="text" class="form-control py-4 fs-4" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
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
                            <span class="">Gi??? h??ng</span>
                        </button>
                    </div>
                </div>
            </div>
                
            <!-- carousel -->
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1551029506-0807df4e2031?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1334&q=80" class="d-block w-100 caruosel--item" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="https://images.unsplash.com/photo-1551029506-0807df4e2031?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1334&q=80" class="d-block w-100 caruosel--item" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="https://images.unsplash.com/photo-1551029506-0807df4e2031?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1334&q=80" class="d-block w-100 caruosel--item" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <button class="BackToTop" id="myBtn" title="L??n ?????u trang">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {

            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        document.getElementById('myBtn').addEventListener("click", function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
    <section class="maincontent">
        <div class="section_book_feature py-5">
            <div class="container">

                <div class="product py-5">

                    <div class="row">
                        <div class="col-md-6 col-12 product_flash owl-carousel-parent">
                            <div class="row title border-1 border-dark border-bottom mb-5">

                                <div class="col-md-10 col-8  ">
                                    <h2 class="d-inline-block custom-title "><a class="text-decoration-none " href="index.php?option=product">Flash Sale</a></h2>
                                </div>
                                <div class="col-md-2 col-4 text-end owl-carousel-parent__btn">
                                    <button class='back-btn '>
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </button>
                                    <button class='next-btn '>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>

                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="owl-carousel owl-carousel_flash_sale  owl-theme ">
                                        <div class="item  p-0 bg-none">
                                            <div class="card ">
                                                <div class="row g-0">
                                                    <div class="col-md-6 col-6 item-img ">
                                                        <a href="./product-detail.html">
                                                            <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product_flash img-fluid py-auto" alt="...">
                                                        </a>
                                                        <div class="product-sale">
                                                            <div class="sale-off ">-40%</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="card-body ">
                                                            <h5 class="card-title mt-0 text-line-2">Harry Potter V?? Chi???c C???c L???a - T???p 4</h5>
                                                            <div class="row item-price">
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0 amount ">243.000???</h3>
                                                                </div>
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0  sale">
                                                                        270.000???
                                                                    </h3>
                                                                </div>
                                                            </div>

                                                            <p class="card-text text-line-5">Khi gi???i Quidditch Th??? gi???i b??? c???t ngang b???i nh???ng k??? ???ng
                                                                h??? Ch??a t???
                                                                Voldemort v?? s??? tr??? l???i c???a D???u hi???u h???c ??m kh???ng khi???p, Harry ?? th???c ???????c ...
                                                            </p>
                                                            <div class="card-item">
                                                                <div class="row ">
                                                                    <div class="col-md-6 col-12">
                                                                        <a class="cart-item__style">Buy product</a>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <a class="cart-item__action" title="Xem" href="#" data-abc="true">
                                                                            <i class="fa-regular fa-eye"></i>
                                                                        </a>
                                                                        <a class="cart-item__action" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="item  p-0 bg-none">
                                            <div class="card ">
                                                <div class="row g-0 ">
                                                    <div class="col-md-6 col-6 item-img">
                                                        <a href="./product-detail.html">
                                                            <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product_flash img-fluid py-auto" alt="...">
                                                        </a>
                                                        <div class="product-sale">
                                                            <div class="sale-off ">-40%</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="card-body ">
                                                            <h5 class="card-title mt-0 text-line-2">Harry Potter V?? Chi???c C???c L???a - T???p 4</h5>
                                                            <div class="row item-price">
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0 amount ">243.000???</h3>
                                                                </div>
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0  sale">
                                                                        270.000???
                                                                    </h3>
                                                                </div>
                                                            </div>

                                                            <p class="card-text text-line-5">Khi gi???i Quidditch Th??? gi???i b??? c???t ngang b???i nh???ng k??? ???ng
                                                                h??? Ch??a t???
                                                                Voldemort v?? s??? tr??? l???i c???a D???u hi???u h???c ??m kh???ng khi???p, Harry ?? th???c ???????c ...
                                                            </p>
                                                            <div class="card-item">
                                                                <div class="row ">
                                                                    <div class="col-md-6 col-12">
                                                                        <a class="cart-item__style">Buy product</a>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <a class="cart-item__action" title="Xem" href="#" data-abc="true">
                                                                            <i class="fa-regular fa-eye"></i>
                                                                        </a>
                                                                        <a class="cart-item__action" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                            <i class="fa fa-shopping-cart"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row py-3 flash_banner">
                                <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/09/banner-countdown.png" alt="">
                            </div>
                        </div>
                        <!-- Best Sellers -->
                        <div class="col-md-6 col-12 product_Best-Sellers owl-carousel-parent">
                            <div class="row title border-1 border-dark border-bottom mb-5">

                                <div class="col-md-10 col-8  ">
                                    <h2 class="d-inline-block custom-title "><a class="text-decoration-none " href="index.php?option=product">Best Sellers</a></h2>
                                </div>
                                <div class="col-md-2 col-4 text-end owl-carousel-parent__btn">
                                    <button class='back-btn '>
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </button>
                                    <button class='next-btn '>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">

                                    <div class="owl-carousel owl-carousel_3  owl-theme ">
                                        <div class="item   p-0 bg-none">
                                            <div class="card product-wrapper ">
                                                <div class="row g-0 ">
                                                    <div class="col-md-12 col-6 item-img">
                                                        <a href="./product-detail.html">
                                                            <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product_flash img-fluid py-auto" alt="...">
                                                        </a>
                                                        <div class="product-sale">
                                                            <div class="sale-off ">-40%</div>
                                                        </div>
                                                        <div class="product-action">
                                                            <div class="product-action-style">

                                                                <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                    <i class="fa-regular fa-eye"></i>
                                                                </a>
                                                                <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-6">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title mt-0 text-line-2">Harry Potter V?? Chi???c C???c L???a - T???p 4</h5>
                                                            <div class="row item-price ">
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0  amount">243.000???</h3>
                                                                </div>
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0  sale">
                                                                        270.000???
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <p class="card-text text-line-5 d-md-none d-block">Khi gi???i Quidditch Th??? gi???i b??? c???t ngang b???i nh???ng k??? ???ng
                                                                h??? Ch??a t???
                                                                Voldemort v?? s??? tr??? l???i c???a D???u hi???u h???c ??m kh???ng khi???p, Harry ?? th???c ???????c ...
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>




                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="section_banner py-5">
                    <div class="row banner">
                        <div class="col-md-4 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn1.jpg" alt="" class="d-block w-100">
                        </div>
                        <div class="col-md-4 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn2.jpg" alt="" class="d-block w-100">
                        </div>
                        <div class="col-md-4 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn3.jpg" alt="" class="d-block w-100">
                        </div>
                    </div>
                </div>

                <div class="new_product py-5 owl-carousel-parent">
                    <div class="row title border-1 border-dark border-bottom mb-3">
                        <div class="col-md-10 col-8 ">
                            <h2 class="custom-title d-inline-block "><a class="text-decoration-none btn-tab " href="index.php?option=product">S??ch m???i</a></h2>

                        </div>
                        <div class="col-md-2 col-4 text-end owl-carousel-parent__btn">
                            <button class='back-btn '>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button class='next-btn '>
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12 mx-auto">
                            <div class="large-12 columns">
                                <div class="owl-carousel new_book_carousel  owl-theme ">
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="section_banner py-5">
                    <div class="row banner">
                        <div class="col-md-12 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/banner11.jpg" alt="" class="d-block w-100">
                        </div>

                    </div>
                </div>
                <div class="author">
                    <div class="row owl-carousel-parent">
                        <div class="large-12 columns">
                            <div class="owl-carousel author_carousel owl-theme">
                                <div class="item">
                                    <div class="row g-0 ">
                                        <div class="col-md-4 col-12 item-content-inner pull-left">
                                            <div class="block-title">
                                                <h3 class="custom-font"><span>Famous Author</span></h3>
                                            </div>
                                            <div class="item-single-content">
                                                <h4><a class="custom-font" href="https://demo.wpthemego.com/themes/sw_coruja/book_author/etiam-efficitur/">J.K Rowling</a></h4>
                                                <span class="descriptiom"> "Nh?? v??n J.k Rowling - M??? ????? c???a lo???t ti???u thuy???t thi???u nhi ??n kh??ch nh???t m???i th???i ?????i Harry Potter, l?? ng?????i ???????c x???p v??o danh s??ch 200 ng?????i gi??u nh???t n?????c Anh n??m 2021 theo Sunday Times Rich List. N???u ai ???? ?????c v??? ti???u s??? c???a b??, th?? ch???c ch???n bi???t r???ng ngu???n c???m h???ng s??ng t??c Harry Potter ?????n t??? nh???ng d???u m???c v?? s??? ki???n quan tr???ng trong cu???c ?????i c???a b??.</span>
                                                <a class="more btn mb-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 custom-title  author-detail ">
                                            <a href="./product-detail.html">
                                                <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/09/15-1.jpg" class="card-img-top author_image img-fluid py-auto w-100" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-12 author-item">
                                            <div class="small-title custom-font">
                                                <h4>J.K Rowling's Books</h4>
                                            </div>
                                            <ul>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/" title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/2.jpg" class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">In dictum...</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000???
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/" title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/2.jpg" class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">In dictum...</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000???
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/" title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">Harry Potter V?? Chi???c C???c L???a - T???p 4</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000???
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/" title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/2.jpg" class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">In dictum...</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000???
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center col-12 mt-3 owl-carousel-parent__btn">

                                <button class='back-btn '>
                                    <i class="fa-solid fa-chevron-left"></i>
                                    <span>Prev</span>
                                </button>
                                <button class='next-btn '>
                                    <span>Next</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="section_banner py-5">
                    <div class="row banner">
                        <div class="col-md-12 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/banner3.jpg" alt="" class="d-block w-100">
                        </div>

                    </div>
                </div>
                <div class="category_product py-5">

                    <div class="row product my-5">
                        <div class="col-md-9 col-12 owl-carousel-parent">
                            <div class="row title border-1 border-dark border-bottom mb-5">
                                <div class="col-md-10 col-8  ">
                                    <h2 class="custom-title d-inline-block "><a class="text-decoration-none " href="index.php?option=product">Light novel</a></h2>
                                </div>
                                <div class="col-md-2 col-4 text-end owl-carousel-parent__btn">
                                    <button class='back-btn '>
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </button>
                                    <button class='next-btn '>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="large-12 columns">
                                <div class="owl-carousel book_carousel  owl-theme ">
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">1Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-md-block d-none">
                            <div class="col-md-12 col-12 item-img">
                                <a href="./product-detail.html">
                                    <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn4.jpg" class="card-img-top img-product_category img-fluid py-auto" alt="...">
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="row product my-5">
                        <div class="col-md-3 d-md-block d-none">
                            <div class="col-md-12 col-12 item-img">
                                <a href="./product-detail.html">
                                    <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn4.jpg" class="card-img-top img-product_category img-fluid py-auto" alt="...">
                                </a>

                            </div>
                        </div>
                        <div class="col-md-9 col-12 my-auto owl-carousel-parent">
                            <div class="row title border-1 border-dark border-bottom mb-5">
                                <div class="col-md-10 col-8  ">
                                    <h2 class="custom-title d-inline-block "><a class="text-decoration-none " href="index.php?option=product">Khoa h???c vi???n t?????ng</a></h2>

                                </div>
                                <div class="col-md-2 col-4 text-end owl-carousel-parent__btn">
                                    <button class='back-btn '>
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </button>
                                    <button class='next-btn '>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="large-12 columns  ">
                                <div class="owl-carousel book_carousel  owl-theme ">
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/tieu thuyet/noi-khu-rung-cham-toi-nhung-vi-sao-where-the-forest-meets-the-stars.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/tieu thuyet/Ch??a T??? Nh???ng Chi???c Nh???n - Nh?? Vua Tr??? V???.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item  p-0 bg-none">
                                        <div class="card product-wrapper ">
                                            <div class="row g-0 ">
                                                <div class="col-md-12 col-12 item-img">
                                                    <a href="./product-detail.html">
                                                        <img src="{{asset('image/harry-potter/B??a_s??ch_Harry_Potter_ph???n_4.jpg')}}" class="card-img-top img-product img-fluid py-auto" alt="...">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="product-action-style">

                                                            <a class="action-eye" title="Xem" href="#" data-abc="true">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a class="action-cart" title="Th??m v??o gi???" href="#" data-abc="true">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="card-body">

                                                        <h3 class="card-title product-name mt-0 text-line-2 ">Harry Potter V?? Chi???c C???c L???a - T???p 4</h3>
                                                        <div class="row item-price ">
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  amount">243.000???</h3>
                                                            </div>
                                                            <div class="col-md-6 col-6 ">
                                                                <h3 class="m-0  sale">
                                                                    270.000???
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="footer py-5">
        <div class="top_footer bg-dark ">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 title-newletter pull-left">
                        <h2>Nh???p email c???a b???n</h2>
                        <span>
                            ????? nh???n ???????c nh???ng th??ng b??o ??u ????i t??? d???ch v??? c???a ch??ng t??i!
                        </span>
                    </div>
                    <div class="col-md-7 col-12 form ">
                        <form action="#">
                            <div class="form-fields">
                                <input class="form-email" type="email" name="EMAIL" placeholder="Enter your email" required="">
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
                                <h3 class="d-md-none d-block border-1">Li??n h???</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item footer-custom__item">
                                            <div class="customer-logo py-3">
                                                <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/11/logo-default.png" alt="logo" class="img-fluid rounded-top " width="140px">
                                            </div>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span class="txt_contact">
                                                <span class="mb-3 ">
                                                    ?????a ch??? c???a h??ng:
                                                </span>
                                                <br />
                                                Cao ?????ng C??ng Th????ng TPHCM
                                            </span>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span class="txt_contact">
                                                <span class="footer-custom__item--hotline">Hotline: </span><a href="0918146697" class="footer-custom__item--link">0918146697</a>
                                            </span>
                                            <span class="line"> | </span>
                                            <span class="txt_contact">
                                                <span class="footer-custom__item--Email">Email: </span>
                                                <a href="mailto:h0918146697@gmail.com" class="footer-custom__item--link">h0918146697@gmail.com
                                                </a>
                                            </span>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span>Web: </span>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <span>Theo d??i ch??ng t??i: </span>
                                            <div class="social_footer">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="#"><i class="fab fa-facebook-f "></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#"><i class="fab fa-twitter "></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#"><i class="fab fa-instagram "></i></a>
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
                                <h3 class="d-md-none d-block border-1">V??? ch??ng t??i</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav1">

                                    <ul class="navbar-nav">
                                        <h3 class="d-none d-md-inline fs-1 my-4">V??? ch??ng t??i</h3>

                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link ">Trang ch???
                                            </a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Gi???i thi???u</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">S???n ph???m</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Tin t???c</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Li??n h???</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 col-12 ">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <h3 class="d-md-none d-block border-1">Ch??nh s??ch</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav2">

                                    <ul class="navbar-nav">
                                        <h3 class="d-none d-md-inline fs-1 my-4">Ch??nh s??ch</h3>

                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link ">Trang ch???
                                            </a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Gi???i thi???u</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">S???n ph???m</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Tin t???c</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Li??n h???</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 col-12 ">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <h3 class="d-md-none d-block border-1">Th??ng tin</h3>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav3" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fa-solid fa-plus"></span>
                                </button>

                                <div class="collapse navbar-collapse footer-custom" id="navbarNav3">

                                    <ul class="navbar-nav">
                                        <h3 class="d-none d-md-inline fs-1 my-4">Th??ng tin</h3>

                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link ">Trang ch???
                                            </a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Gi???i thi???u</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">S???n ph???m</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Tin t???c</a>
                                        </li>
                                        <li class="nav-item footer-custom__item">
                                            <a class="nav-link " href="#">Li??n h???</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12 text-center m-auto" id="copyright">
                    <span>
                        Ng?????i th???c hi???n: <b>Tr????ng S??? Ho??ng</b>
                    </span>
                </div>

                <div class="col-md-9 col-12 mx-auto">
                    <ul class="nav mt-3 mt-md-0">
                        <li class="nav-item mx-auto">
                            <a class="nav-link active " aria-current="page" href="#">Trang ch???
                            </a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">Gi???i thi???u</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">S???n ph???m</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">Tin t???c</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link " href="#">Li??n h???</a>
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
                // t???t ch???m tr??n d?????i carousel
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
                // t???t ch???m tr??n d?????i carousel
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
                        items: 4,
                        nav: false,
                        loop: false
                    }
                }
            })

            $('.owl-carousel_flash_sale').owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                // t???t ch???m tr??n d?????i carousel
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
                // t???t ch???m tr??n d?????i carousel
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
                // t???t ch???m tr??n d?????i carousel
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
    <!-- vendors -->
    <script src="{{asset('assets/vendors/highlight.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>