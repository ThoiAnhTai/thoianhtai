<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TRANG CHỦ</h1>
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
                <h3 class="card-title">Danh mục sản phẩm</h3>

                <div class="d-flex justify-content-end">
                    <div>
                        <a class="btn btn-sm btn-success" href="index.php?option=category&cat=create">
                        <i class="fas fa-plus"></i>Thêm</a>
                        <a class="btn btn-sm btn-danger" href="index.php?option=category&cat=create">
                        <i class="fas fa-trash"></i>Delete</a>
                    </div>
                </div> 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><strong><i class="far fa-square"></i><strong></th>
                            <td scope="row"><strong>#</strong></td>
                            <th scope="col"><strong>Hình<strong></th>
                            <th scope="col"><strong>Tên sản phẩm<strong></th>
                            <th scope="col"><strong>Giá<strong></th>
                            <th scope="col"><strong>Ngày tạo<strong></th>
                            <th scope="col"><strong>Chức năng<strong></th>
                            <th scope="col"><strong>ID<strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><strong><i class="far fa-square"></i><strong></th>
                            <td><strong>1</strong></td>
                            <td>
                                <img width="50px" ; height="50px" src="http://localhost/THOIANHTAI-2121110055/" alt="">
                            </td>
                            <td><strong>BITI'S<strong></td>
                            <td><strong>120.000 vnd <strong></td>
                            <td><strong>28/12/2022<strong></td>
                            <td>
                                <button class="btn bg-danger"><i class="fas fa-toggle-on"></i></button>
                                <button class="btn bg-primary"><i class="far fa-eye"></i></button>
                                <button class="btn bg-success"><i class="far fa-edit"></i></button>
                                <button class="btn bg-warning"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            <td><strong>1<strong></td>
                        </tr>
                        <tr> 
                            <th scope="row"><i class="far fa-square"></i></th>
                            <td><strong>2</strong></td>
                            <td>
                                <img width="50px" ; height="50px" src="http://localhost/THOIANHTAI-2121110055/" alt="">
                            </td>
                            <td><strong>ZX<strong></td>
                            <td><strong>150.000 vnd<strong></td>
                            <td><strong>28/12/2022<strong></td>
                            <td>
                                <button class="btn bg-danger"><i class="fas fa-toggle-on"></i></button>
                                <button class="btn bg-primary"><i class="far fa-eye"></i></button>
                                <button class="btn bg-success"><i class="far fa-edit"></i></button>
                                <button class="btn bg-warning"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            <td><strong>2<strong></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="far fa-square"></i></th>
                            <td><strong>3</strong></td>
                            <td>
                                <img width="50px" ; height="50px" src="http://localhost/THOIANHTAI-2121110055/" alt="">
                            </td>
                            <td><strong>SHONDO<strong></td>
                            <td><strong>250.000 vnd<strong></td>
                            <td><strong>28/12/2022<strong></td>
                            <td>
                                <button class="btn bg-danger"><i class="fas fa-toggle-on"></i></button>
                                <button class="btn bg-primary"><i class="far fa-eye"></i></button>
                                <button class="btn bg-success"><i class="far fa-edit"></i></button>
                                <button class="btn bg-warning"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            <td><strong>3<strong></td>
                        </tr>
                    </tbody>
                </table>
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