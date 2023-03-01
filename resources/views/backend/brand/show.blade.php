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
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="text-right">
                                    <a class="btn btn-sm btn-info" href="{{ route('brand.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                    <a href="{{ route('brand.edit', ['brand' => $brand->id]) }}" class="btn btn-sm btn-info"
                                        title="edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="{{ route('brand.delete', ['brand' => $brand->id]) }}"
                                        class="btn btn-sm btn-danger" title="delete">
                                        <i class="fa-solid fa-delete-left"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="{{ asset('images/brand/' . $brand->image) }}"
                                                alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center">{{ $brand->name }}</h3>

                                        <p class="text-muted text-center">id: {{ $brand->id }}</p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Số lượng sản phẩm</b> <a class="float-right">{{ $total }}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Số lượng sản phẩm khuyến mãi</b> <a
                                                    class="float-right">{{ $total_sale }}</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- About Me Box -->

                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                                <div class="cards">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                                    data-toggle="tab">Thông
                                                    tin khác</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#timeline"
                                                    data-toggle="tab">Timeline</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#product_brand"
                                                    data-toggle="tab">Sản phẩm</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-bodys">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <strong><i class="fas fa-pencil-alt mr-1"></i> Từ khóa tìm
                                                            kiếm</strong>
                                                        <p class="text-muted">
                                                            <span class="tag tag-danger">{{ $brand->metakey }}</span>
                                                        </p>
                                                        <hr>
                                                        <strong><i class="far fa-file-alt mr-1"></i> Mô tả</strong>
                                                        <p class="text-muted">{{ $brand->metadesc }}</p>
                                                        <hr>
                                                        <strong><i class="fa-solid fa-list-ol"></i> Vị trí:
                                                            {{ $brand->sort_order }}</strong>

                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="timeline">
                                                <!-- The timeline -->
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <strong>
                                                            <i class="fa-regular fa-calendar-plus"></i> Ngày tham gia:
                                                            <span class="text-muted">
                                                                {{ $brand->created_at }}
                                                            </span>
                                                        </strong>

                                                        <hr>
                                                        <strong>
                                                            <i class="fa-brands fa-creative-commons-by"></i> Người đăng:
                                                            <span class="text-muted">{{ $brand->created_name }}</span>
                                                        </strong>

                                                        <hr>
                                                        <strong>
                                                            <i class="fa-solid fa-calendar-check"></i> Ngay sửa cuối:
                                                            <span class="text-muted">{{ $brand->updated_at }}</span>
                                                        </strong>

                                                        <hr>
                                                        <strong>
                                                            <i class="fa-brands fa-creative-commons-by"></i> Người sửa cuối:
                                                            <span class="text-muted">{{ $brand->updated_name }}</span>
                                                        </strong>



                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="product_brand">
                                                <!-- The timeline -->
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <table class="table table-bordered" id="myTable">
                                                            <thead>
                                                                <tr class="text-center ">
                                                                    <th
                                                                        class="col-md-1 col-sm-1 col-1 align-middle text-center">
                                                                        <div class="form-group select-all">
                                                                            <input type="checkbox">
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="col-md-1 col-sm-1 col-1 align-middle text-center">
                                                                        image</th>
                                                                    <th
                                                                        class="col-md-7 col-sm-7 col-7 align-middle text-center">
                                                                        Tên sản phẩm</th>
                                                                    <th
                                                                        class="col-md-2 col-sm-2 col-2 align-middle text-center">
                                                                        Giá</th>
                                                                    <th
                                                                        class="col-md-1 col-sm-1 col-1 align-middle text-center">
                                                                        id</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($product_brand as $product)
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <div class="form-group">
                                                                                <input type="checkbox" name="checkId[]"
                                                                                    value="{{ $product->id }}"
                                                                                    id="productCheck{{ $product->id }}">
                                                                            </div>
                                                                        <td>
                                                                            <img src="{{ asset('images/product/' . $product->image) }}"
                                                                                alt="" class="w-100">
                                                                        </td>
                                                                        <td>{{ $product->product_name }}</td>



                                                                        <td>{{ number_format($product->price) }}₫</td>



                                                                        <td class="text-center">{{ $product->product_id }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>



                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
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