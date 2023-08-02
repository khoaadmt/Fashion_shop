<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php?action=dashboard&query=1">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="index.php?action=quanlydanhmucsanpham&query=them">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Quản lý danh mục</span>
				</a>
			</li>
			<li>
				<a href="index.php?action=quanlydonhang&query=them">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Quản lý đơn hàng</span>
				</a>
			</li>
			<li>
				<a href="index.php?action=quanlynguoidung&query=them">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Thông tin người dùng</span>
				</a>
			</li>
			<li>
				<a href="index.php?action=quanlysanpham&query=them">
					<i class='bx bxs-group' ></i>
					<span class="text">Quản lý sản phẩm</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="index.php?dangxuat=1" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
					<?php
						if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
							unset($_SESSION['dangnhap']);
							header('Location:login.php');
						}
					?>
				</a>
			</li>
		</ul>
</section>

