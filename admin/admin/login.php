<?php
// include "class/cartegory_class.php";
include('./class/admin_class.php');
session::init();
$admin = new admin();

?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    /* $userpassword = md5($_POST['password']); */
    $userpassword = $_POST['password'];
    // $userpassword = $_POST['password'];
    // var_dump($_POST);
    $check_admin = $admin->check_admin($username, $userpassword);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <title>HongPhucSport-Login</title>
</head>

<body>
    <div class="login">
        <div class="login-form">
            <span style="color:red; font-family: 'Bona Nova', serif;"><?php
            if(isset($check_admin)){ echo $check_admin;}
            ?></span>
            <h1>HongPhucSport - Login</h1>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Đăng Nhập</button>
            </form>
        </div>
    </div>
</body>

</html>