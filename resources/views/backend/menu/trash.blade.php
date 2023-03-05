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
                                <a class="btn btn-sm btn-info" href="{{ route('menu.index') }}">
                                    <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    @includeIf('backend.messageAlert', ['some' => 'data'])

                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle col-md-1">
                                                    <div class="form-group select-all">
                                                        <input type="checkbox">
                                                    </div>
                                                </th>

                                                <th class="text-center align-middle col-md-4">Tên menu/Liên kết</th>
                                                <th class="text-center align-middle col-md-1">Vị trí</th>

                                                <th class="text-center align-middle col-md-3">Chức năng</th>
                                                <th class="text-center align-middle col-md-1">ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list_menu as $menu) : ?>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="checkId[]" value="<?= $menu->id ?>">
                                                    </div>
                                                </td>

                                                <td>
                                                    <strong><?= $menu->name ?></strong>
                                                    </br>
                                                    <?= $menu->link ?>
                                                </td>
                                                <td>
                                                    <?= $menu->position ?>
                                                </td>


                                                <td class="text-center">
                                                    <a href="{{ route('menu.show', ['menu' => $menu->id]) }}"
                                                        class="btn btn-sm btn-primary" title="view">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('menu.restore', ['menu' => $menu->id]) }}"
                                                        class="btn btn-sm btn-info" title="view">
                                                        <i class="fas fa-undo-alt"></i>
                                                    </a>
                                                    <a href="{{ route('menu.destroy', ['menu' => $menu->id]) }}"
                                                        class="btn btn-sm btn-danger" title="delete">
                                                        <i class="fa-solid fa-circle-xmark"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <?= $menu->id ?>
                                                </td>
                                            </tr>

                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>

                                </div>
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
        <!-- /.content -->
    </div>
@endsection
@section('footer')

@endsection
