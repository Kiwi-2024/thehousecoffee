<?php
require 'db/connect.php';
if (isset($_POST['btn-reg'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if (!empty($username)&&!empty($email)&&!empty($password)){
        // insert dữ liệu
        $sql = "INSERT INTO `user_` (`username`, `email`, `password`) VALUES ('$username', '$email', '$hashed_password')";
        if($conn->query($sql)===TRUE){
            header("Location: index.php?success=1");
            exit(); // Dừng kịch bản để đảm bảo không có mã PHP nào chạy sau header
            echo "lưu dữ liệu thành công";
        }else{
            echo "lỗi {$sql}" . $conn->error;
        }

    }else{
        echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký";
    }
}
?>