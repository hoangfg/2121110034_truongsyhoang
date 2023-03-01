@extends('layouts.admin')
@section('title', 'Giới thiệu')
@section('header')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>GIỚI THIỆU</h1>
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
                                <a class="btn btn-sm btn-success" href="index.php?option=post&cat=create">
                                    <i class="fas fa-plus"></i> Thêm
                                </a>
                                <a class="btn btn-sm btn-danger" href="index.php?option=post&cat=trash">
                                    <i class="fas fa-trash" aria-hidden="true"></i> Thùng rác
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr class="text-center">
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">
                                    <input type="checkbox" name="" id="">
                                </th>
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">image</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Tiêu đề bài viết</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Mô tả</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Từ khóa</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Chức năng</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Ngày tạo</th>
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_page  as $post)
                                <tr>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td>
                                        
                                        <img src="{{ asset('images/post/' . $post->image) }}" alt=""
                                            class="w-100">
                                    </td>
                                    <td class="">{{ $post->title }}</td>
                                    <td >{{ $post->metadesc }}</td>
                                    <td class="">
                                        {{ $post->metakey }}
                                    </td>
                                    <td class="text-center">
                                        @if ($post->status == 1)
                                            <a class="btn btn-sm btn-success" href="">
                                                <i class="fas fa-toggle-on"></i>
                                            </a>
                                        @else
                                            <a class="btn btn-sm btn-danger" href="">
                                                <i class="fas fa-toggle-off"></i>
                                            </a>
                                        @endif
                                        
                                        <a href="{{ route('post.edit', ['post' => $post->id]) }}"
                                            class="btn btn-sm btn-info" title="edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-sm btn-primary" title="view">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="{{ route('post.destroy', ['post' => $post->id]) }}" class="btn btn-sm btn-danger" title="delete">
                                            <i class="fa-solid fa-delete-left"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">{{ $post->created_at }}</td>
                                    <td class="text-center">{{ $post->id }}</td>
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