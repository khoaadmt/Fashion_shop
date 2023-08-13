<nav>
			<i class='bx bx-menu' ></i>
			<p class="nav-link">
				<?php if(isset($_SESSION['dangnhap'])){
					echo $_SESSION['dangnhap'];
				}?>
			</p>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search HERE">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
</nav>
