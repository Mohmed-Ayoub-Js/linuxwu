<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'app';

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die('فشل الاتصال بقاعدة البيانات: ' . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // قم بتنفيذ استعلام للتحقق من صحة بيانات تسجيل الدخول
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        // تم التحقق من صحة بيانات تسجيل الدخول بنجاح
        echo 'تم تسجيل الدخول بنجاح!';
    } else {
        // بيانات تسجيل الدخول غير صحيحة
        echo 'بيانات تسجيل الدخول غير صحيحة!';
    }
}

mysqli_close($con);
?>
