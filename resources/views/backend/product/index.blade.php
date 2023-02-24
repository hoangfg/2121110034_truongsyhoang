@extends('layouts.admin')
@section('title', 'Tắt cả sản phẩm')
@section('header')

@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>TẤT CẢ SẢN PHẨM</h1>
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
                                <a class="btn btn-sm btn-success" href="index.php?option=product&cat=create">
                                    <i class="fas fa-plus"></i> Thêm
                                </a>
                                <a class="btn btn-sm btn-danger" href="index.php?option=product&cat=trash">
                                    <i class="fas fa-trash" aria-hidden="true"></i> Thùng rác
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center ">
                                <th class="col-md-1 col-sm-1 col-1 align-middle">
                                    <input type="checkbox" name="" id="">
                                </th>
                                <th class="col-md-1 col-sm-1 col-1 align-middle">image</th>
                                <th class="col-md-2 col-sm-3 col-3 align-middle">Tên sản phẩm</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle">Danh mục</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle">Thương hiệu</th>
                                
                                <th class="col-md-1 col-sm-1 col-1 align-middle">Giá</th>

                                <th class="col-md-2 col-sm-2 col-2 align-middle">Chức năng</th>
                               
                                <th class="col-md-1 col-sm-1 col-1 align-middle">id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_product as $product)
                                <tr>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td>
                                        <img src="{{ asset('images/product/' . $product->image) }}" alt=""
                                            class="w-100">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->brand_id }}</td>
                                    <td>{{ $product->price }}</td>

                                    <td class="text-center">
                                        @if ($product->status == 1)
                                            <a class="btn btn-sm btn-success" href="">
                                                <i class="fas fa-toggle-on"></i>
                                            </a>
                                        @else
                                            <a class="btn btn-sm btn-danger" href="">
                                                <i class="fas fa-toggle-off"></i>
                                            </a>
                                        @endif

                                        <a href="" class="btn btn-sm btn-info" title="edit"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" class="btn btn-sm btn-primary" title="view"><i
                                                class="fa-regular fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-danger" title="delete"><i
                                                class="fa-solid fa-delete-left"></i></a>
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
@endsection
@section('footer')

@endsection
