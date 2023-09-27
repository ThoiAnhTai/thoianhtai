<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thương hiệu</h1>
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
                <h3 class="card-title">DR</h3>
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
                            <th scope="col">#</th>
                            <td>hinh</td>
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
                            <td>BITI'S</td>
                            <td>120.000 vnd</td>
                            <td>12/11/2022</td>
                            <td> 
                                <button class="btn bg-danger"><i class="fas fa-toggle-on"></i></button>
                                <button class="btn bg-primary"><i class="far fa-eye"></i></button>
                                <button class="btn bg-success"><i class="far fa-edit"></i></button>
                                <button class="btn bg-warning"><i class="fas fa-trash-alt"></i></button>      
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>hinh</td>
                            <td>ZX</td>
                            <td>150.000 VND</td>
                            <td>12/11/2022</td>
                            <td>
                                <button class="btn bg-danger"><i class="fas fa-toggle-on"></i></button>
                                <button class="btn bg-primary"><i class="far fa-eye"></i></button>
                                <button class="btn bg-success"><i class="far fa-edit"></i></button>
                                <button class="btn bg-warning"><i class="fas fa-trash-alt"></i></button> 
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>hinh</td>
                            <td>SHONDO</td>
                            <td>250.000 vnd</td>
                            <td>12/11/2022</td>
                            <td> 
                                <button class="btn bg-danger"><i class="fas fa-toggle-on"></i></button>
                                <button class="btn bg-primary"><i class="far fa-eye"></i></button>
                                <button class="btn bg-success"><i class="far fa-edit"></i></button>
                                <button class="btn bg-warning"><i class="fas fa-trash-alt"></i></button>  
                            </td>
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