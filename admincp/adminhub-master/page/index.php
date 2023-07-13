<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../style.css">
</head>
<body>
   <?php
    include './main/sidebar.php';
   ?>
   <section id="content">
		<!-- NAVBAR -->
        <?php
          include './main/navbar.php';
        ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
        <?php
          include './main/main.php';
        ?>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
   <script src="../script.js"></script>
</body>
</html>