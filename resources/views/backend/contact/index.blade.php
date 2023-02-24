@extends('layouts.admin')
@section('title', 'Liên hệ')
@section('header')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liên hệ</h1>
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
                                <a class="btn btn-sm btn-success" href="index.php?option=category&cat=create">
                                    <i class="fas fa-plus"></i> Thêm
                                </a>
                                <a class="btn btn-sm btn-danger" href="index.php?option=category&cat=trash">
                                    <i class="fas fa-trash" aria-hidden="true"></i> Thùng rác
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr class="text-center ">
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">
                                    <div class="form-group select-all">
                                        <input type="checkbox">
                                    </div>
                                </th>
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">Trạng thái</th>
                                <th class="col-md-2 col-sm-3 col-3 align-middle text-center">Tên người gửi</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Tiêu đề liên hệ</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Nội dung liên hệ</th>
                                <th class="col-md-2 col-sm-2 col-2 align-middle text-center">Chức năng</th>
                              
                                <th class="col-md-1 col-sm-1 col-1 align-middle text-center">id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_contact as $contact) : ?>
                            <tr>
                                <td class="text-center">
                                    <div class="form-group">
                                        <input type="checkbox" name="checkId[]" value="<?= $contact->id ?>">
                                    </div>
                                </td>
                                <td class="text-center">
                                    @if (!empty(trim($contact->replaydetail)))
                                        <i class="fa-solid fa-star text-success"></i>                              
                                    @endif
                                </td>
                                <td>
                                    {{ $contact->name }}
                                </td>
                               
                                

                                <td>
                                    <strong>{{ $contact->title }}</strong>
                                </td>
                                <td >
                                    {{ $contact->detail }}
                                </td>
                                <td class="text-center">

                                    <a class="btn btn-sm btn-info" href="#">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-primary" href="#">
                                        <i class=" fas fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    {{ $contact->id }}
                                </td>
                            </tr>

                            <?php endforeach; ?>
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
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [7, 9, 11, -1],
                [7, 9, 11, "ALL"],
            ],
            responsive: true

        });
    });
</script>
@endsection
