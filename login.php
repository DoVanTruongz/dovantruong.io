<?php
// Kết nối database
$conn = new mysqli('localhost', 'username', 'password', 'user_db');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Băm mật khẩu
$email = $_POST['email'];

// Thêm dữ liệu vào database
$sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $password, $email);

if ($stmt->execute()) {
    echo "Đăng ký thành công!";
} else {
    echo "Lỗi: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>
<script>
window.onload = function() {
    swal("Welcome!", "This is a beautiful alert message!", "success");
};
