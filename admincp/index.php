<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admincp.css">
    <title>AdminCp</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="./adminhub-master/style.css">
</head>
<body>
<?php
    // include './main/sidebar.php';
    // include './adminhub-master/page/main/sidebar.php';
?>
<section id="content">
<?php
        include("config/connect.php");
        include("modules/header.php");
        include("modules/menu.php");
    ?>
    <main>
			<!-- <div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">My Store</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div> -->
<?php
	include ('/xampp/htdocs/BanDongHo/admincp/config/connect.php');
    $sql_lietke="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $result_lietke= mysqli_query($connect,$sql_lietke);
?>
			<div class="table-data">
				<div class="order">
            <?php
                include("modules/main.php");
                include("modules/footer.php");
            ?>
				</div>
			</div>
</main>
</section>
<script src="./adminhub-master/script.js"></script>
</body>
</html>