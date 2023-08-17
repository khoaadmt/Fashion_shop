<?php
	session_start();
	include('config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['usernamez'];
		$matkhau = $_POST['password'];
        $sql_nguoidung = "SELECT * FROM tbl_dangky ,tbl_admin WHERE (tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."' AND tbl_dangky.chucvu=1) OR (tbl_admin.username='".$taikhoan."' AND tbl_admin.password='".$matkhau."' ) LIMIT 1";
		$row_nguoidung = mysqli_query($connect,$sql_nguoidung); 
        $count = mysqli_num_rows($row_nguoidung);
        
           if($count>0){
                $_SESSION['dangnhap']=$taikhoan;
                header("Location:index.php");
            }else{
                $message = "Tài khoản mật khẩu không đúng";
                echo "<script type='text/javascript'>alert('$message');</script>";
                // header("Location:login.php");
            }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
    <style>
.login{
    text-align: center;
    background: #181818;
    width: 450px;
    height: 400px;
    padding: 25px;
    position: absolute;
    left: 50%; top:50%;
    transform: translate(-50%,-50%);
    box-shadow: 0px 0px 20px 0px #000;
}
.login h2{
    color: #fff;
}
.login input[type="password"], .login input[type="text"]{
    background: none;
    outline: none;
    width: 300px;
    height: 50px;
    border-radius: 40px;
    padding: 0px 15px;
    margin: 15px 0px;
    border: solid 2px #002cff;
    transition: 1s;
    margin-top: 50px;
    margin-left:70px;
}
.login input[type="password"]:focus, .login input[type="text"]:focus{
    width: 320px;
    border-color: chartreuse;
    transition: 1s;
}
.login button[type="submit"]{
    background: none;
    outline: none;
    width: 160px;
    height: 40px;
    border-radius: 40px;
    margin: 15px 0px;
    border: solid 2px #002cff;
    color: #fff;
    font-size: 18px;
    transition: 1s;
    margin-top: 50px;
}
.login button[type="submit"]:hover{
    background: #002cff;
    transition: 1s;
}
.top_link a:hover{
  color:yellow;
}
.top_link a{
  color:white;
  font-size:16px;
}
    </style>
</head>
<body>
<div class="top_link"><a href="../index.php">🏚️ Về trang chủ</a></div>
<form class="login" action="" method="POST">
  <h2 style="text-align: center">ADMIN LOGIN</h2>
  <input type="text" placeholder="Username" name="usernamez">
  <input type="password" placeholder="Password" name="password">
  <button type="submit" name="dangnhap">Login</button>
</form>

</body>
</html>