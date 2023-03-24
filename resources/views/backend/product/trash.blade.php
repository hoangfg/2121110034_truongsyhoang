@extends('layouts.admin')
@section('title', $title ?? 'trang quản lý')
@section('header')

@endsection
@section('content')
    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf

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
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-sm btn-danger" type="submit" name="DELETE_ALL">
                                    <i class="fa-solid fa-trash-can"></i></i> Xóa đã chọn
                                </button>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="text-right">
                                    <a class="btn btn-sm btn-info" href="{{ route('product.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @includeIf('backend.messageAlert', ['some' => 'data'])
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr class="text-center ">
                                    <th class="col-md-1 col-sm-1 col-1 align-middle text-center">
                                        <div class="form-group select-all">
                                            <input type="checkbox" class=""  name="checkAll" id="checkAll">
                                        </div>
                                    </th>
                                    <th class="col-md-1 col-sm-1 col-1 align-middle text-center">image</th>
                                    <th class="col-md-2 col-sm-3 col-3 align-middle text-center">Tên sản phẩm</th>
                                    <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Danh mục</th>
                                    <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Thương hiệu</th>

                                    <th class="align-middle text-center">Giá bán</th>

                                    <th class="align-middle text-center">Chức năng</th>

                                    <th class="align-middle text-center">id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_product as $product)
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <input type="checkbox" name="checkId[{{ $product->id }}]" value="{{ $product->id }}"
                                                    id="productCheck{{ $product->id }}" class="CheckItem">
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ asset('images/product/' . $product->image) }}" alt=""
                                                class="w-100">
                                        </td>
                                       <td style="word-break: break-word;">{{ $product->name }}</td>

                                        <td>{{ $product->category_name }}</td>
                                        <td>{{ $product->brand_name }}</td>
                                        <td>{{ number_format($product->price_buy) }}₫</td>
                                        <td class="text-center">

                                            <a href="{{ route('product.show', ['product' => $product->id]) }}"
                                                class="btn btn-sm btn-primary" title="view">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                            <a href="{{ route('product.restore', ['product' => $product->id]) }}"
                                                class="btn btn-sm btn-info" title="view">
                                                <i class="fas fa-undo-alt"></i>
                                            </a>
                                            <a href="{{ route('product.destroy', ['product' => $product->id]) }}"
                                                class="btn btn-sm btn-danger" title="delete">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </a>
                                        </td>

                                        <td class="text-center">{{ $product->id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    </form>
@endsection
@section('footer')


@endsection
