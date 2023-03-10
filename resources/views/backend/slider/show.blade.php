@extends('layouts.admin')
@section('title', $title ?? 'trang quản lý')
@section('header')

@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="text-transform: uppercase;">{{ $title ?? 'trang quản lý' }}</h1>
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
                                    <a class="btn btn-sm btn-info" href="{{ route('slider.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                    <a href="{{ route('slider.edit', ['slider' => $slider->id]) }}"
                                        class="btn btn-sm btn-info" title="edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="{{ route('slider.delete', ['slider' => $slider->id]) }}"
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
                                        <h3 class="profile-username text-center">{{ $slider->name }}</h3>
                                        <p class="text-muted text-center">id: {{ $slider->id }}</p>

                                        <hr>
                                        <strong>
                                            <i class="fa-solid fa-up-down-left-right"></i> Vị trí:
                                            <span class="text-muted">
                                                {{ $slider->position }}
                                            </span>
                                        </strong>
                                        <hr>
                                        <strong>
                                           <i class="fa-solid fa-sort"></i> Vị trí:
                                            <span class="text-muted">
                                                {{ $slider->sort_order }}
                                            </span>
                                        </strong>

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
                                            <li class="nav-item"><a class="nav-link" href="#Image"
                                                    data-toggle="tab">Hình</a>
                                            </li>

                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-bodys">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <strong>
                                                            <i class="fa-solid fa-link"></i> Liên kết:
                                                            <span class="text-muted">
                                                                {{ $slider->link }}
                                                            </span>
                                                        </strong>
                                                        <hr>
                                                        <strong>
                                                            <i class="fa-regular fa-calendar-plus"></i> Ngày tham gia:
                                                            <span class="text-muted">
                                                                {{ $slider->created_at }}
                                                            </span>
                                                        </strong>

                                                        <hr>
                                                        <strong>
                                                            <i class="fa-brands fa-creative-commons-by"></i> Người đăng:
                                                            <span class="text-muted">{{ $slider->created_name }}</span>
                                                        </strong>

                                                        <hr>
                                                        <strong>
                                                            <i class="fa-solid fa-calendar-check"></i> Ngay sửa cuối:
                                                            <span class="text-muted">{{ $slider->updated_at }}</span>
                                                        </strong>

                                                        <hr>
                                                        <strong>
                                                            <i class="fa-brands fa-creative-commons-by"></i> Người sửa
                                                            cuối:
                                                            <span class="text-muted">{{ $slider->updated_name }}</span>
                                                        </strong>



                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>

                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="Image">
                                                <!-- The Image -->
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <img src="{{ asset('images/slider/' . $slider->image) }}"
                                                            class="card-img-top index-img" alt="{{ $slider['image'] }}">

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
