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
     include './adminhub-master/page/main/sidebar.php';
?>
   <section id="content">
		<!-- NAVBAR -->
        <?php
          include './adminhub-master/page/main/navbar.php';
        ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
        <?php
          include './adminhub-master/page/main/main.php';
        ?>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
<script src="./adminhub-master/script.js"></script>
    <!-- <?php
         include("config/connect.php");
        // include("modules/header.php");
         include("modules/menu.php");
        // include("modules/main.php");
        // include("modules/footer.php");
    ?> -->
</body>
</html>