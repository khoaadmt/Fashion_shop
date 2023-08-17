<?php
    session_start();
	include('../admincp/config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky ,tbl_admin WHERE tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."'  LIMIT 1";
		$row = mysqli_query($connect,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['taikhoan'];
			$_SESSION['email'] = $row_data['email'];
            $_SESSION['id_khachhang']= $row_data['id_khachhang'];
			header("Location:../index.php");
		}elseif($taikhoan=='admin'){
            header("Location:../admincp/login.php");
        }else{
			$message = "Tài khoản mật khẩu không đúng";
            echo "<script type='text/javascript'>alert('$message');</script>";
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
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
            integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    <title>Đăng nhập</title>
    <style>
        img{
	width: 100%;
}
.login {
    height: 1000px;
    width: 100%;
    background-color: #f3e0e2;
    position: relative;
}
.login_box {
    width: 1050px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: white;
    border-radius: 10px;
    box-shadow: 1px 4px 22px -8px blue;
    display: flex;
    overflow: hidden;
}
.login_box .left{
  width: 40%;
  height: 100%;
  padding: 25px 25px;
  background:white;
  
}
.login_box .right{
  width: 60%;
  height: 100%  
}
.left .top_link a {
    color: #452A5A;
    font-weight: 400;
    display: flex;
    align-items: center;
     justify-content: right;
     font-size: 18px;
}
.left .top_link{
  height: 20px
}
.left .contact{
	display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin-left:70px;
    margin-bottom:200px;
}
.left h3{
  text-align: center;
  margin-bottom: 70px;
  font-size: 40px;
  font-family: math;
}
.left input {
    border: none;
    margin: 15px 0px;
    border: 1px solid #4f30677d;
    border-radius: 30px;
    padding: 10px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-size: 15px;
    border: solid 2px #002cff;
}
.left input:focus, .left input:focus{
    width: 280px;
    border-color: chartreuse;
    transition: 1s;
}
.left{
	background: linear-gradient(-45deg, #dcd7e0, #fff);
}
.submit {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    background: red;
    color: #fff;
    font-weight: bold;
    border: solid 0.5px #002cff;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    margin-left:40px;
    margin-bottom:100px;
}


.right {
	background: linear-gradient(212.38deg, rgba(180, 3, 14, 0.7) 20%, rgba(238, 85, 136, 0.71) 90%),
    url("https://salt.tikicdn.com/cache/750x750/ts/product/2a/fb/4c/88823092c894184fffa905ebfba3359d.jpg.webp");
	color: #fff;
	position: relative;
}

.right .right-text{
  height: 100%;
  position: relative;
  transform: translate(0%, 45%);
}
.right-text h2{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: 500;
}
.right-text h3{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 35px;
  font-weight: 400;
}

.top_link img {
    width: 28px;
  
    /* margin-top: -3px; */
}
.formi{
  margin-bottom:60px;
}
.top_link a:hover{
  color:blue;
}
.submit:hover{
  background-color:blue;
}

    </style>
</head>
<body>
<section class="login">
		<div class="login_box">
			<div class="right">
				<div class="right-text">
					<h2>Quần Áo Thể Thao</h2>
					<h3>CHẤT LƯỢNG 5 SAO</h3>
          <h3>⭐⭐⭐⭐⭐</h3>
				</div>
			</div>
            <div class="left">
				<div class="top_link"><a href="../index.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAe1BMVEX///8jHyAAAABhYWEQCgwfGhvr6+s+PT5nZWYLBgf4+Pj7+/tPT08dGBkYExT09PRXVlaysbJ6enrT09OBgIArKivl5eW4t7iQj5Bvb2/My8va2donJiapqqo0MzNcWlufnp6IiIh3d3iamZrBwsJHSEgYGRlLSksyMTK+CVnOAAAD/ElEQVR4nO3dW3eiMBSG4WaLKFShtIqKJ3qazv//hQNtdZSTBJLs4Prei7mZ5TJPKyECmXl4QAghhBBCCCFkYS/cA9DdmlbcQ9Dbhsb0yj0IjcVHEkLQgnsc2oonOTAjbrhHoqmEHPET7bbcg9FRQmNxytkl3MNRX3QBFGJO93bWeFyQuI723GNS27EIFGNacw9KYeGhBMx/i0efe2CqcpdeBVAI78A9MkVFXlAJzIkx9+BUlFIdMCPuPriH17+06hA8F1DEPcCePU4bgfl8M+yFuHsTmBHXA55S4+VtYEYchdwD7dq2YY65Ig51Sl057YD5QvyS6E+fa3qzaxm0vlpqN3e1EA/JcTzPqfiDjnyccps2h+C5sZeeXxnWvtIZ8XlKlZfaN4j0dnrpIITxkyQwi6a/Lx6CsN1ZokR8+nn1AISrlmeJEnH5Pd/YL1xJTKIFwfflG+uF+y6f0N+C/Iq45UK/xUq0KUotF/qzfsCM+G610D1f9O1BnNXOU/zC7a4/MDsYa/+GXVh/QUZR3MJ3musFcgtLV7XvTOiP9ANZhbHsd4mhCbdUfVX7boQf2ucYZqEpIJtwbeIQ5BT2XGpbL+y/1LZc6Fbe+7wj4cvByFmCT9h0a/AuhPvOF2QGIjR3luARhgbPEixCt8NV7UEJY8NzjHHhS2BoJcoljEwttbmEC9NniVNzQ3dIj1xAIQITD1CHJpfapUj/5zT+5AQaICZCxVXtXsSJ1kdTIo9nEr3MO2h8Rrz7vU+VOaSL6L/yHoL/0/SMeGjkom+7KNUAdM1+nb8RTZU/7RcquPepMmenmJj84fgu0ZSzVEpMmZbaTQUqp1SZxwzNFXjKNmvKPWZorrmiZ8RdW4FC0WbN07ZIO1OwWTOx7CxRrPdmzcTKOeaynps1I+uB/TZrlrdF2ln3hbhFS+3Gum7WrN4WaWedNmvWbYu0M5LfrBl5dp8liklv1jR977N/kps1m7dF2pnMZs3b2yLtrPVCPJ5RIVtP+/PiQBftvhV/7KNCEzuJ889VYaBpx0VqaKlQ3c02F0KmIIQQQv4ghBBC/iCEEEL+IIQQQv4ghBBC/iCEEEL+IIQQQv4ghBBC/iCEEEL+IIQQQv4g1C4Mik8O1tdtZxy3kL4iP2zXe7edR8xCen5s/w5hp3/thlfoSb77ssMHlVdIko/Orzr8ElmF47nkFo94Kf9TZBUGTxJHYZ4/k/+YQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQqhLGP8lTzKayQq/pN/DU/f/yoabqWyjhaxQ/j2yN1ElRAghhBBCCCGEkP39AxqZk1/A7hcIAAAAAElFTkSuQmCC" alt="">Trang chủ</a></div>
				<div class="contact">
					<form action="" method="POST">
						<h3>ĐĂNG NHẬP</h3>
            <div class="formi">
						<input type="text" name="taikhoan" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
            </div>
						<button class="submit" name="dangnhap">ĐĂNG NHẬP</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>