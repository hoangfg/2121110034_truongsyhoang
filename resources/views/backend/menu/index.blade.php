@extends('layouts.admin')
@section('title', $title ?? 'trang quản lý')
@section('header')

@endsection
@section('content')
    <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
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
                                    <a class="btn btn-sm btn-success" href="{{ route('menu.create') }}">
                                        <i class="fas fa-plus"></i> Thêm
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="{{ route('menu.trash') }}">
                                        <i class="fas fa-trash" aria-hidden="true"></i> Thùng rác
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="accordion" id="accordionExample">
                                    <div class="card Position">
                                        <div class="card-body">
                                            <label>Vị trí</label>
                                            <select name="position" id="" class="form-control">
                                                <option value="mainmenu">Main Menu</option>
                                                <option value="footermenu">Footer Menu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end card Position -->
                                    <div class="card">
                                        <div class="card-header" id="headingCategory">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseCategory"
                                                    aria-expanded="false" aria-controls="collapseCategory">
                                                    DANH MỤC SẢN PHẨM
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php foreach ($list_category as $category) : ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="categoryId[]" type="checkbox"
                                                        value="<?= $category->id ?>" id="categoryCheck<?= $category->id ?>">
                                                    <label class="form-check-label" for="categoryCheck<?= $category->id ?>">
                                                        <?= $category->name ?>
                                                    </label>
                                                </div>
                                                <?php endforeach; ?>
                                                <div class="mt-3">
                                                    <input type="submit" name="AddCategory" value="thêm menu"
                                                        class="btn btn-sm btn-success form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card category -->
                                    <div class="card">
                                        <div class="card-header" id="headingBrand">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseBrand"
                                                    aria-expanded="false" aria-controls="collapseBrand">
                                                    THƯƠNG HIỆU
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php foreach ($list_brand as $brand) : ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="brandId[]" type="checkbox"
                                                        value="<?= $brand->id ?>" id="brandCheck<?= $brand->id ?>">
                                                    <label class="form-check-label" for="brandCheck<?= $brand->id ?>">
                                                        <?= $brand->name ?>
                                                    </label>
                                                </div>
                                                <?php endforeach; ?>
                                                <div class="mt-3">
                                                    <input type="submit" name="AddBrand" value="thêm menu"
                                                        class="btn btn-sm btn-success form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card brand -->
                                    <div class="card">
                                        <div class="card-header" id="headingTopic">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTopic"
                                                    aria-expanded="false" aria-controls="collapseTopic">
                                                    CHỦ ĐỀ BÀI VIẾT
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTopic" class="collapse" aria-labelledby="headingTopic"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php foreach ($list_topic as $topic) : ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="topicId[]" type="checkbox"
                                                        value="<?= $topic->id ?>" id="topicCheck<?= $topic->id ?>">
                                                    <label class="form-check-label" for="topicCheck<?= $topic->id ?>">
                                                        <?= $topic->name ?>
                                                    </label>
                                                </div>
                                                <?php endforeach; ?>
                                                <div class="mt-3">
                                                    <input type="submit" name="AddTopic" value="thêm menu"
                                                        class="btn btn-sm btn-success form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card topic -->
                                    <div class="card">
                                        <div class="card-header" id="headingPage">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapsePage"
                                                    aria-expanded="false" aria-controls="collapsePage">
                                                    TRANG ĐƠN
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapsePage" class="collapse" aria-labelledby="headingPage"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php foreach ($list_page as $page) : ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="pageId[]" type="checkbox"
                                                        value="<?= $page->id ?>" id="pageCheck<?= $page->id ?>">
                                                    <label class="form-check-label" for="pageCheck<?= $page->id ?>">
                                                        <?= $page->title ?>
                                                    </label>
                                                </div>
                                                <?php endforeach; ?>
                                                <div class="mt-3">
                                                    <input type="submit" name="AddPage" value="thêm menu"
                                                        class="btn btn-sm btn-success form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card page -->
                                    <div class="card">
                                        <div class="card-header" id="headingCustom">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseCustom"
                                                    aria-expanded="false" aria-controls="collapseCustom">
                                                    TÙY BIẾN LIÊN KẾT
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label>Tên menu</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Link</label>
                                                    <input type="text" name="link" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="submit" name="AddCustom" value="thêm menu"
                                                        class="btn btn-sm btn-success form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card custom -->
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        @includeIf('backend.messageAlert', ['some' => 'data'])

                                        <table class="table table-bordered" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center align-middle col-md-1">
                                                        <div class="form-group select-all">
                                                            <input type="checkbox">
                                                        </div>
                                                    </th>

                                                    <th class="text-center align-middle col-md-4">Tên menu/Liên kết</th>
                                                    <th class="text-center align-middle col-md-1">Vị trí</th>
                                                    <th class="text-center align-middle col-md-2">Sắp xếp</th>
                                                    <th class="text-center align-middle col-md-3">Chức năng</th>
                                                    <th class="text-center align-middle col-md-1">ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($list_menu as $menu) : ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="form-group">
                                                            <input type="checkbox" name="checkId[]"
                                                                value="<?= $menu->id ?>">
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
                                                        <input type="hidden" name="id[<?= $menu->id ?>]"
                                                            value="<?= $menu->id ?>">
                                                        <input name="sort_order[<?= $menu->id ?>]" id="sort_order"
                                                            type="number" min="0" class="form-control "
                                                            value="<?= $menu->sort_order ?>">

                                                    </td>
                                                    <td class="text-center">
                                                        @if ($menu->status == 1)
                                                            <a class="btn btn-sm btn-success"
                                                                href="{{ route('menu.status', ['menu' => $menu->id]) }}">
                                                                <i class="fas fa-toggle-on"></i>
                                                            </a>
                                                        @else
                                                            <a class="btn btn-sm btn-danger"
                                                                href="{{ route('menu.status', ['menu' => $menu->id]) }}">
                                                                <i class="fas fa-toggle-off"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{ route('menu.edit', ['menu' => $menu->id]) }}"
                                                            class="btn btn-sm btn-info" title="edit">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="{{ route('menu.show', ['menu' => $menu->id]) }}"
                                                            class="btn btn-sm btn-primary" title="view">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('menu.delete', ['menu' => $menu->id]) }}"
                                                            class="btn btn-sm btn-danger" title="delete">
                                                            <i class="fa-solid fa-delete-left"></i>
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
    </form>
@endsection
@section('footer')

@endsection
