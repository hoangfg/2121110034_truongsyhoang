@extends('layouts.admin')
@section('title', $title ?? 'trang quản lý')
@section('header')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
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
                        <div class="col-md-12 text-right">
                            <a class="btn btn-sm btn-primary" href="">Xác nhận</a>
                            <a class="btn btn-sm btn-info" href="">Đóng gói</a>
                            <a class="btn btn-sm btn-warning" href="">Vận chuyển</a>
                            <a class="btn btn-sm btn-success" href="">Đã giao</a>
                            <a class="btn btn-sm btn-danger" href="">Hủy</a>
                            <a class="btn btn-sm btn-info " href="{{ route('order.index') }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <h5 class="text-center text-info my-1 pt-2">THÔNG TIN KHÁCH HÀNG</h5>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="id" value="{{ $order->id }}">
                                            <label for="deliveryname">Tên người nhận</label>
                                            <input name="deliveryname" id="deliveryname" type="text"
                                                value="{{ $order->deliveryname }}" class="form-control " disabled>
                                        </div>
                                        <div class="mb-3">

                                            <label for="deliveryemail">Email</label>
                                            <input name="deliveryemail" id="deliveryemail" type="email"
                                                value="{{ $order->deliveryemail }}" class="form-control " disabled>
                                        </div>
                                        <div class="mb-3">

                                            <label for="deliveryphone">Phone</label>
                                            <input name="deliveryphone" id="deliveryphone" type="text"
                                                value="{{ $order->deliveryphone }}" class="form-control " disabled>
                                        </div>
                                        <div class="mb-3">

                                            <label for="deliveryaddress">Địa chỉ</label>
                                            <input name="deliveryaddress" id="deliveryaddress" type="text"
                                                value="{{ $order->deliveryaddress }}" class="form-control " disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <h5 class="text-center text-info my-1 pt-2">CHI TIẾT HÓA ĐƠN</h5>
                                    <div class="card-body">
                                        <table class="table table-bordered" id="dataTable">
                                            <thead class="bg-orange">
                                                <tr>
                                                    <th class="text-center" style="width:2%"><input type="checkbox"></th>
                                                    <th class="text-center" style="width:15%">Hình</th>
                                                    <th class="text-center" style="width:25%">Tên danh mục</th>
                                                    <th class="text-center" style="width:15%">Giá</th>

                                                    <th class="text-center" style="width:15%px">Số lượng</th>
                                                    <th class="text-center" style="width:15%px">Thành tiền</th>
                                                    <th class="text-center" style="width:10%px">ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($list_orderdetail as $orderdetail) : ?>
                                                <tr>
                                                    <td class="text-center" style="width:20px">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="index-img">
                                                        <img src="{{ asset('images/product/' . $orderdetail->image) }}"
                                                            class="card-img-top index-img" alt="{{ $orderdetail->image }}">
                                                    </td>
                                                    <td>
                                                        {{ $orderdetail->name }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($orderdetail->price) }}₫
                                                    </td>
                                                    <td>
                                                        {{ $orderdetail->qty }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($orderdetail->amount) }}₫

                                                    </td>
                                                    <td class="text-center" style="width:20px">
                                                        {{ number_format($orderdetail->amount) }}
                                                    </td>
                                                </tr>
                                                <?php
                                                
                                                ?>
                                                <?php endforeach; ?>

                                            </tbody>


                                        </table>
                                        {{-- <div class="text-danger">
                                        <h5><strong>Tổng tiền:<?= number_format($tong) ?>₫</strong></h5>
                                    </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">

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
