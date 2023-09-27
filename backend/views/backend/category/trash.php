<?php
use App\Models\Category;
$list_category=Category::where('status', '=', '0')
    ->orderBy('created_at', 'desc')
    ->get();
?>
<?php require_once('../views/backend/header.php');?>
<from action="index.php?option=brand&cat=process" name="form1" method="post" enctype="multipart/form-data">
<?php require_once('../views/backend/footer.php');?>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>