<?php

use App\Models\Product;
$list=Product::where('status','=','0')
  ->orderBy('created_at','desc')
  ->get();

?>
<?php require_once('../views/backend/header.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>thùng rác sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Tất Cả Sản Phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <a href="index.php?option=product" class="btn bg-danger">quay lại</a>
                </div>
            </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <form action="index.php?option=category&cat=process" name="form1" method="post"
                    enctype="multipart/form-data">
                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-bg-success">
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            </label>
                                        </div>
                                    </th>
                                    <th class="text-center" style="width: 70px;">Hình</th>
                                    <th class="">id</th>
                                    <th>số lượng</th>
                                    <th class="">tên sản phẩm</th>
                                    <th class="text-center">chức năng</th>
                                    <th class="text-center">ghi chú</th>
                                </tr>
                            </thead>
                            <tBody>
                                <?php foreach($list as $product) : ?>
                                <tr>
                                    <td scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            </label>
                                        </div>
                                    </td>
                                    <td><img src="../public/images/<?=$product->image;?>" style="width:50px">

                                    <td><?=$product->id;?></td>
                                    <td><?=$product->category_id;?></td>

                                    <td class=""><?=$product->name;?></td>

                                    <td class="text-center row">
                                

                                        <a class=" btn btn-primary" href="index.php?option=product&cat=restore&id=<?=$product->id;?>""><i class="fa fa-edit"></i></a>
                                        <a class=" btn btn-sm btn-danger" href="index.php?option=product&cat=destroy&id=<?=$product->id;?>"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                                <?php endforeach; ?>

                            </tBody>

                        </table>

                    </div>
                </form>
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


<?php require_once('../views/backend/footer.php');?>