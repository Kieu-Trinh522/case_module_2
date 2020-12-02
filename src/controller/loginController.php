<?php


namespace APP\controller;

session_start();
if (isset($_POST['btnSend'])) {
    $username = $_POST['txtName'];
    $password = $_POST['txtPass'];
    if ($username == 'root' && $password == '123456@Abc') {
        echo 'Bạn đã đăng nhập thành công';
        $_SESSION['us'] = $username;
    } else {
        echo 'Đăng nhập thất bại, tài khoản hoặc mật khẩu chưa chính xác.';
    }
    header('location:index1.php');
}
