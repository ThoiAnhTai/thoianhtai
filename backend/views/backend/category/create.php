<?php
use App\Models\Category;
$list = Category::where('status', '!=', '0')->get();
$html_parent_id ="";
$html_sort_order = "";
