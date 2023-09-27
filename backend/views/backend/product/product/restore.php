<?php
use App\Models\product;

$id = $_REQUEST['id'];
$product = product::find($id);
if($product == null)
{
    header("location:index.php?option=product&cat=recycle");
}
$product->status = 1;
$product->updated_at = date('Y-m-d H:i:s');
$product->updated_by = 1;
$product->save();
header("location:index.php?option=product&cat=recycle");