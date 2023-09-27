<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>login</title>
    <style>
.container
{
    border-radius: 19px;
background: #e0e0e0;
box-shadow:  35px 35px 70px #bebebe,
             -35px -35px 70px #ffffff;
             padding: 7px;
}

    </style>
</head>
<body>
   
    <?php
    require_once('../vendor/autoload.php');
    require_once('../config/database.php');
    if(isset($_POST['DANGNHAP'])){
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $data_login =array();
        if(filter_var('$username',FILtER_VALIDATE_EMAIL))
            {
                $data_login['email']=$username;
                
            }
            else {
                $data_login['username']=$username;
            }
            $data_login['username']=$password;
            var_dump($data_login);
    }
    ?>

    <form action="login.php" method="post">
        <div class="container bg-dark">
            <h1 class="text-light text-center m-auto" style="width:500px">Đăng nhập</h1>
        <div class="username m-auto" style="width:700px">
            <label for="username">Tên đăng nhập</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="password m-auto" style="width:700px">
            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="button mt-3 m-auto" style="width:700px">
            <input type="submit" class="form-control btn btn-info" name="password">
        </div>
        <br>
        </div>
        
    </form>
</body>
</html>