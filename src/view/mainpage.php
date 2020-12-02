<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index1.php");
} else {
    echo "wellcome " . $_SESSION['user'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
<a href="index1.php">Dang xuat</a>
</body>
</html>
