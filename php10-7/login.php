<?php
include('db.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>留言板 之bootstrap美化版</title>
    <?php include('header.php'); ?>
</head>

<body>
    <div class="container">
        <?php include('menu.php'); ?>
        <div class='row'>
            <div class='col-6 offset-3'>
                <form action="login_check.php" method="POST">
                    <div class="form-group">
                        <label>用户名</label>
                        <input type="text" name='username' class="form-control" placeholder="请输入您的用户名">
                    </div>
                    <div class="form-group">
                        <label>密码</label>
                        <input type="password" name='password' class="form-control" placeholder="请输入密码">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">登陆</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>