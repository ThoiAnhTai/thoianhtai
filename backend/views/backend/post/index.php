<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>BÀI VIẾT</h1>
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
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hinh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>hinh</td>
                            <td>BLVCK</td>
                            <td>300.000 vnd</td>
                            <td>28/12/2022</td>
                            <td> <button class="btn bg-danger">a</button><button class="btn bg-primary">b</button><button class="btn bg-warning">c</button> </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>hinh</td>
                            <td>VENTO</td>
                            <td>200.000 vnd</td>
                            <td>28/12/2022</td>
                            <td> <button class="btn bg-danger">a</button><button class="btn bg-primary">b</button><button class="btn bg-warning">c</button> </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>hinh</td>
                            <td>BIRDYBAG</td>
                            <td>100.000 vnd</td>
                            <td>28/12/2022</td>
                            <td> <button class="btn bg-danger">a</button><button class="btn bg-primary">b</button><button class="btn bg-warning">c</button> </td>
                        </tr>
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
<!-- /.content-wrapper -->
<?php require_once('../views/backend/footer.php'); ?>