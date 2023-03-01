@extends('layouts.admin')
@section('title', 'Thùng rác danh mục')
@section('header')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>THÙNG RÁC DANH MỤC</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
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
                                <a class="btn btn-sm btn-info" href="{{ route('category.index') }}">
                                    <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @includeIf('backend.messageAlert', ['some' => 'data'])
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr class="text-center">
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">
                                    <input type="checkbox" name="" id="">
                                </th>
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">image</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Tên danh mục</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Slug</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Chức năng</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Ngày tạo</th>
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_category as $category)
                                <tr>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td>
                                        <img src="public/images/category/{{ $category->image }}" alt="">
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td class="text-center">

                                        <a href="{{ route('category.show', ['category' => $category->id]) }}"
                                            class="btn btn-sm btn-primary" title="view">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="{{ route('category.restore', ['category' => $category->id]) }}"
                                            class="btn btn-sm btn-info" title="view">
                                            <i class="fas fa-undo-alt"></i>
                                        </a>
                                        <a href="{{ route('category.destroy', ['category' => $category->id]) }}"
                                            class="btn btn-sm btn-danger" title="delete">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </a>
                                    </td>

                                    <td class="text-center">
                                        {{ $category->created_at }}
                                    </td>
                                    <td class="text-center">{{ $category->id }}</td>
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
        <!-- /.content -->
    </div>
@endsection
@section('footer')

@endsection