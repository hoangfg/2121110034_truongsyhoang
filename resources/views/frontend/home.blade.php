@extends('layouts.site')

@section('title', $title ?? 'trang chủ')
@section('header')

@endsection

@section('content')
    <x-slide-show />
    <section class="maincontent">
        <div class="section_book_feature py-5">
            <div class="container">
                <div class="section_banner py-5">
                    <div class="row banner">
                        <div class="col-md-4 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn1.jpg"
                                alt="" class="d-block w-100">
                        </div>
                        <div class="col-md-4 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn2.jpg"
                                alt="" class="d-block w-100">
                        </div>
                        <div class="col-md-4 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/bn3.jpg"
                                alt="" class="d-block w-100">
                        </div>
                    </div>
                </div>
                {{-- <div class="product py-5">

                    <div class="row d-flex justify-content-between">
                        <x-sale-home />
                        <!-- Best Sellers -->
                        <div class="col-md-6 col-12 product_Best-Sellers owl-carousel-parent">
                            <div class="row title border-1 border-dark border-bottom mb-5">

                                <div class="col-md-10 col-8  ">
                                    <h2 class="d-inline-block custom-title "><a class="text-decoration-none "
                                            href="index.php?option=product">Bán chạy</a></h2>
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
                                            <div class="card ">
                                                <div class="row g-0 ">
                                                    <div
                                                        class="col-md-12 col-6 item-img d-flex product-wrapper text-center">
                                                        <img src="{{ asset('image/harry-potter/Bìa_sách_Harry_Potter_phần_4.jpg') }}"
                                                            class=" img-product_flash img-fluid p-3 rounded "
                                                            alt="...">
                                                        <div class="product-sale">
                                                            <div class="sale-off ">-40%</div>
                                                        </div>
                                                        <div class="product-action d-md-block d-none">
                                                            <div class="product-action-style">

                                                                <a class="action-eye" title="Xem" href="#"
                                                                    data-abc="true">
                                                                    <i class="fa-regular fa-eye"></i>
                                                                </a>
                                                                <a class="action-cart" title="Thêm vào giỏ" href="#"
                                                                    data-abc="true">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-6">
                                                        <div class="card-body text-center">

                                                            <h3 class=" mt-0 text-line-2">Harry Potter Và
                                                                Chiếc Cốc Lửa - Tập 4</h3>
                                                            <div class="row item-price ">
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0  amount">243.000₫</h3>
                                                                </div>
                                                                <div class="col-md-6 col-6 ">
                                                                    <h3 class="m-0  sale">
                                                                        270.000₫
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <p class="card-text text-line-5 d-md-none d-block">Khi giải
                                                                Quidditch Thế giới bị cắt ngang bởi những kẻ ủng
                                                                hộ Chúa tể
                                                                Voldemort và sự trở lại của Dấu hiệu hắc ám khủng khiếp,
                                                                Harry ý thức được ...
                                                            </p>
                                                        </div>
                                                        <div class="card-item d-md-none d-block">
                                                            <div class="row ">
                                                                <div class="col-md-6 col-8">
                                                                    <a class="cart-item__style">Buy product</a>
                                                                </div>
                                                                <div class="col-md-6 col-4">

                                                                    <a class="cart-item__action" title="Thêm vào giỏ"
                                                                        href="#" data-abc="true">
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
                    </div>
                </div> --}}


                <div class="new_product py-5 owl-carousel-parent">
                    <x-new-product-home />
                </div>

                {{-- <div class="author">
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
                                                <h4><a class="custom-font"
                                                        href="https://demo.wpthemego.com/themes/sw_coruja/book_author/etiam-efficitur/">J.K
                                                        Rowling</a></h4>
                                                <span class="descriptiom"> "Nhà văn J.k Rowling - Mẹ đẻ của loạt tiểu
                                                    thuyết thiếu nhi ăn khách nhất mọi thời đại Harry Potter, là người
                                                    được xếp vào danh sách 200 người giàu nhất nước Anh năm 2021 theo
                                                    Sunday Times Rich List. Nếu ai đã đọc về tiểu sử của bà, thì chắc
                                                    chắn biết rằng nguồn cảm hứng sáng tác Harry Potter đến từ những dấu
                                                    mốc và sự kiện quan trọng trong cuộc đời của bà.</span>
                                                <a class="more btn mb-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 custom-title  author-detail ">
                                            <a href="./product-detail.html">
                                                <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/09/15-1.jpg"
                                                    class="card-img-top author_image img-fluid py-auto w-100"
                                                    alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-12 author-item">
                                            <div class="small-title custom-font">
                                                <h4>J.K Rowling's Books</h4>
                                            </div>
                                            <ul>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/"
                                                        title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/2.jpg"
                                                                class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">In dictum...</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000₫
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/"
                                                        title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/2.jpg"
                                                                class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">In dictum...</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000₫
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/"
                                                        title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="{{ asset('image/harry-potter/Bìa_sách_Harry_Potter_phần_4.jpg') }}"
                                                                class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">Harry Potter Và Chiếc Cốc Lửa - Tập
                                                                4</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000₫
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="clearfix">
                                                    <a href="https://demo.wpthemego.com/themes/sw_coruja/product/the-littel-prince-27/"
                                                        title="In dictum sapienut Dutch" tabindex="0">
                                                        <div class="item-img pull-left">
                                                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/2.jpg"
                                                                class="" alt="">
                                                        </div>
                                                        <div class="item-content pull-left">
                                                            <h4 class="custom-font">In dictum...</h4>
                                                            <div class="item-price">
                                                                <span class="amount">
                                                                    270.000₫
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
                </div> --}}
                <div class="section_banner py-5">
                    <div class="row banner">
                        <div class="col-md-12 banner--item">
                            <img src="https://demo.wpthemego.com/themes/sw_coruja/wp-content/uploads/2019/07/banner3.jpg"
                                alt="" class="d-block w-100">
                        </div>

                    </div>
                </div>
                <div class="category_product py-5">
                    @foreach ($list_category as $category)
                        <x-product-home :rowcate="$category" />
                    @endforeach
                </div>
            </div>
        </div>

    </section>

@endsection
