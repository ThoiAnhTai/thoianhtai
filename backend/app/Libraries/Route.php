<?php
namespace App\Libraries;

use App\Libraries;
class Route
{
   public static function Route_site()
   {
        $pathview = 'views/frontend/';
        if (isset($_REQUEST['option']))
        {
            $pathview .= $_REQUEST['option'];
            if(isset($_REQUEST['slug']))
            {
                $pathview .= '-detail.php';
            }
            else
            {
                if(isset($_REQUEST['cat']))
                {
                    $pathview .= '-category.php';
                }
                else{
                    $pathview .= '.php';
                }
            }
        }
        else{
            $pathview .= 'home.php';
        }
        require_once($pathview);
   }
   public static function Route_admin()
   {
        $pathview = '../views/backend/';
        if (isset($_REQUEST['option']))
        {
            $pathview .= $_REQUEST['option'].'/';
            if(isset($_REQUEST['cat']))
            {
                $pathview .= $_REQUEST['cat'].'.php';
            }
            else{
                $pathview .= 'index.php';
            }
        }
        else{
            $pathview .= 'dashboard/index.php';
        }
        require_once($pathview);
   }
}