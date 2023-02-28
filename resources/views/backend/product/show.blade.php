@extends('layouts.admin')
@section('title', 'Chi tiết sản phẩm')
@section('header')

@endsection

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CHI TIẾT SẢN PHẨM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">

                        <div class="col-md-12 text-right">
                            <div class="text-right">
                                <a class="btn btn-sm btn-info" href="{{ route('product.index') }}">
                                    <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                </a>
                                <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                                    class="btn btn-sm btn-info" title="edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ route('product.delete', ['product' => $product->id]) }}"
                                    class="btn btn-sm btn-danger" title="delete">
                                    <i class="fa-solid fa-delete-left"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">

                            <div class="col-12 col-md-12">
                                <img src="{{ asset('images/product/' . $product->image) }}" class="product-image border"
                                    alt="Product Image">
                            </div>
                            <div class="col-12 product-image-thumbs">
                                <div class="product-image-thumb active"><img
                                        src="{{ asset('images/product/' . $product->image) }}" alt="Product Image"></div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <h3 class="my-3">{{ $product->name }}</h3>
                            <br />
                            <div class="d-flex">
                                <div class="mr-3">
                                    <h5>Danh mục: <span class="text-success">{{ $product->category_name }}</span></h5>
                                </div>
                                <span>|</span>
                                <div class="ml-3">
                                    <h5> Nhà xuất bản:<span class="text-success"> {{ $product->brand_name }}</span></h5>
                                </div>
                            </div>
                            <br />


                            <div>
                                @if ($product->price_sale > 0)
                                    <h2 class="mb-0">
                                        Giá khuyến mãi: <strong
                                            class="text-success">{{ number_format($product->price_sale) }}₫</strong>
                                    </h2>
                                    <h4 class="mt-0">
                                        Giá gốc: <small class="text-gray">{{ number_format($product->price) }}₫</small>
                                    </h4>
                                @else
                                    <h2 class="mb-0">
                                        Giá: <strong class="text-success">{{ number_format($product->price) }}₫</strong>
                                    </h2>
                                @endif

                            </div>
                            <br>
                            <h4 class="mb-0">số lượng sản phẩm: <small class="text-success">{{ $product->qty }}</small>
                            </h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                    href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Mô
                                    tả</a>
                                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                    href="#product-comments" role="tab" aria-controls="product-comments"
                                    aria-selected="false">Chi tiết</a>
                                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                    href="#product-rating" role="tab" aria-controls="product-rating"
                                    aria-selected="false">Thông tin khác</a>
                            </div>
                        </nav>

                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                aria-labelledby="product-desc-tab">
                                <p>
                                    {{ $product->metadesc }}
                                </p>
                            </div>
                            <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                aria-labelledby="product-comments-tab">

                                {!! $product->detail !!}
                            </div>
                            <div class="tab-pane fade" id="product-rating" role="tabpanel"
                                aria-labelledby="product-rating-tab">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Từ khóa</th>
                                        <td>{{ $product->metakey }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ngày đăng</th>
                                        <td>{{ $product->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Người đăng</th>
                                        <td>{{ $product->created_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ngày sửa cuối</th>
                                        <td>{{ $product->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Người sửa cuối</th>
                                        <td>{{ $product->updated_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Trạng thái</th>
                                        <td>
                                            @if ($product->status == 1)
                                                Xuất bản
                                            @else
                                                Chưa xuất bản
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
    </div>
@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function() {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>

@endsection
